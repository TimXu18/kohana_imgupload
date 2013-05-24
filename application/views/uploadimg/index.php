<!DOCTYPE html>
<html>
    <head>
        <title>Upload Images</title>
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
            
            p.footercontent
            {
                margin: 20px 0;
                color: #999999;
            }

        </style>
        
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="<?php echo URL::site('application/media/js/bootstrap.min.js', null, false); ?>"></script>
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
          <a class="brand" href="<?php echo URL::site('uploadimg');?>">File Upload</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="<?php echo URL::site('uploadimg');?>">Upload an Image</a></li>
              <li><a href="<?php echo URL::site('uploadimg/upload');?>">Image Gallery</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

        
        <div id="wrap">
            <div class="container">
        <h1>Upload your image</h1>
        
        <!-- image upload form -->
        <form id="uploadimg_form" action="<?php echo URL::site('uploadimg/upload'); ?>"
              method="POST" enctype="multipart/form-data" >
            <p>Please choose your image:</p>
            <p><input type="file" name="testimg" id="testimg" /></p>
            <p><input type="submit" name="submit" id="submit" value="Upload" /></p>
        </form>
            </div>
            <div id="push"></div>
        </div>
        
     <!-- sticky footer -->
        <div id="footer">
            <div class="container">
               <p class="footercontent"> Kohana Image Upload</p>
            </div>
        </div>
    </body>
</html>