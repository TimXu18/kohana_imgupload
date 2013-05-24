<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Uploaded Image</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo URL::site('application/media/css/bootstrap.min.css', null, false); ?>" rel="stylesheet" media="screen">
        <link href="<?php echo URL::site('application/media/css/bootstrap-responsive.min.css', null, false); ?>" rel="stylesheet" media="screen">
        <style>
            /* Sticky footer styles
    -------------------------------------------------- */

            html,
            body {
                height: 100%;
                /* The html and body elements cannot have any padding or margin. */
            }

            /* Wrapper for page content to push down footer */
            #wrap {
                min-height: 100%;
                height: auto !important;
                height: 100%;
                /* Negative indent footer by it's height */
                margin: 0 auto -60px;
            }

            /* Set the fixed height of the footer here */
            #push,
            #footer {
                height: 60px;
            }
            #footer {
                background-color: #f5f5f5;
            }

            /* Lastly, apply responsive CSS fixes as necessary */
            @media (max-width: 767px) {
                #footer {
                    margin-left: -20px;
                    margin-right: -20px;
                    padding-left: 20px;
                    padding-right: 20px;
                }
            }

            body {
                padding-top: 60px;
            }

            ul.thumbnails li
            {
                height: 350px;
            }

            ul.thumbnails div.span3
            {
                margin-left: 40px;
            }

            input[name^='imgtag_']
            {
                width: 200px;
            }

            label[id^="tag_label_"]
            {
                width: 210px;
                word-wrap: break-word;
                height: 20px;
                overflow: hidden;
            }

            p.footercontent
            {
                margin: 20px 0;
                color: #999999;
            }
        </style>

        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="<?php echo URL::site('application/media/js/bootstrap.min.js', null, false); ?>"></script>
        <script src="<?php echo URL::site('application/media/js/addtag.js', null, false); ?>"></script>
    </head>


    <body>
        <!-- header navigation bar -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="<?php echo URL::site('uploadimg'); ?>">File Upload</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="<?php echo URL::site('uploadimg'); ?>">Upload an Image</a></li>
                            <li><a href="<?php echo URL::site('uploadimg/upload'); ?>">Image Gallery</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>


        <div id="wrap">
            <div class="container">
                <div class="row">
                    <div class="span8">
                        <!-- display file upload message -->
                        <?php if ($uploaded_file): ?>
                            <p>Your have uploaded image <?php echo $uploaded_filename; ?> successfully.</p>

                        <?php elseif (!$uploaded_file && $uploaded_filename): ?>
                            <p>Your image was not uploaded, please try again.</p>
                            <p><?php echo $error_msg ?></p>
                        <?php endif ?>
                    </div>
                </div>


                <div class="row">
                    <div class='span16'>
                        <?php
                        // display uploaded images in grid layout
                        if (sizeof($imgarr) > 0) {
                            echo '<ul class="thumbnails">';
                            foreach ($imgarr as $row) {
                                $imgname = substr($row, 0, strpos($row, '.'));
                                $taglabel = '';
                                $tagval = '';

                                echo "<li>
                         
                             <figure>
                               <img src='" . URL::site("/uploads/$row", NULL, false) . "' alt='uploaded image' />
                                 <figcaption>";

                                if (isset($_COOKIE["img_" . $imgname])) {
                                    $labeltxt = 'Edit Image Tags';
                                    $tagval = htmlentities(strip_tags($_COOKIE["img_" . $imgname]));
                                    $tagval = str_replace('"', "", $tagval);
                                    $tagval = str_replace("'", "", $tagval);
                               
                                    $taglabel = "<label id='tag_label_$imgname'>Tag:$tagval</label>";
                                    $btntxt = 'Edit Tag';
                                } else {
                                    $labeltxt = 'Add Image Tags';
                                    $btntxt = 'Add Tag';
                                    $taglabel = "<label id='tag_label_$imgname'></label>";
                                }
                                echo "<a id='add_tag_" . $imgname . "' href='javascript:void(0)'>$labeltxt</a>
                             $taglabel
                                 </figcaption>
                             </figure>";
                         
                     // image tag form allow use add tag for each image           
                      echo "<div class='span3'>
                             <form name='form_add_tag_" . $imgname . "' style='display:none'>
                               
                               <input type='text' name='imgtag_" . $imgname . "' 
                                   value='" . $tagval . "' size='10px' /> 
                               <a class='btn' id='add_cookie_tag_" . $imgname . "' href='javascript:void(0)'>$btntxt</a>
                             </form>
                           </div>
                               </li>";
                            }
                            echo '</ul>';
                        } else {
                            echo '<p>There is no uploaded image.</p>';
                        }
                        ?>

                    </div>
                </div>

            </div>
            <div id="push"></div>
        </div>


        <div id="footer">
            <div class="container">
                <p class="footercontent"> Kohana Image Upload</p>
            </div>
        </div>

        <script>
            $('a[id^="add_tag_"]').click(function() {
                var aid = $(this).attr('id');
                // toggle add image tag form
                $('form[name="form_' + aid + '"]').toggle("slow");
            });
            
            
            $('a[id^="add_cookie_tag_"]').click(function() {
                var imgname = $(this).attr('id').substr(15);
                var tagtext = $('input[name="imgtag_' + imgname + '"]').val();

                tagtext = tagtext.replace(/(<([^>]+)>)/ig, "");

                if (tagtext.length > 0)
                {
                  // save image tag in cookie
                    createCookie('img_' + imgname, tagtext);
                    var tagcookie_val = getCookie('img_' + imgname);

                    $('form[name="form_add_tag_' + imgname + '"]').toggle("slow");

                // display user input image tag
                    $('#tag_label_' + imgname).remove();
                    $('a[id="add_tag_' + imgname + '"]').after(
                            '<label id="tag_label_' + imgname + '">Tag: ' + unescape(tagcookie_val) + '</label>'
                            );
                    $('a[id="add_tag_' + imgname + '"]').text('Edit Image Tags');
                }
                else
                {
                    $('form[name="form_add_tag_' + imgname + '"]').toggle("slow");
                    $('#tag_label_' + imgname).html('');
                    $('a[id="add_tag_' + imgname + '"]').text('Add Image Tags');
                    
                    // remove cookie if tag is empty
                    eraseCookie('img_' + imgname, '', -1);
                }

            });
        </script>
    </body>
</html>