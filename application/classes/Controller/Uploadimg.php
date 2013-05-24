<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Uploadimg extends Controller
{
    public function action_index()
    {
       // generate index view object
        $view = View::factory('uploadimg/index');
        $this->response->body($view);
    }
    
    // image upload action
    public function action_upload()
    {
        $view = View::factory('uploadimg/upload');
        $error_msg = null;
        $filename = null;
        $uploaded_filename = null;
        $imgarr = array();
        
        if($this->request->method() == Request::POST)
        {
            if(isset($_FILES['testimg']))
            {
                // use protected method "_save_image" save uploaded file
                // to "uploads" folder in root path
                $filename = $this->_save_image($_FILES['testimg']);
                $uploaded_filename = $_FILES['testimg']['name'];
            }
        }
        
        // show an error message if file not uploaded
        if(!$filename)
        {
            $error_msg = 'Please upload a valid image file.
                          Uploaded file must be in JPG/PNG/GIF format';
        }
        
        // get images in uploaded images folder
        if($handle = opendir('path to upload folder'))
        {
           while(false !== ($file = readdir($handle))) 
           {
               if($file != "." && $file != "..")
               {
                 // save all images files in "imgarr" array
                   $imgarr[] = $file;
               }
           }
        }
       
        $view->imgarr = $imgarr;
        $view->uploaded_file = $filename;
        $view->uploaded_filename =$uploaded_filename;
        $view->error_msg = $error_msg;
        $this->response->body($view);
    }
    
    protected function _save_image($image)
    {
      // check is uploaded file a valid image file
        if( !Upload::not_empty($image) OR
                !Upload::valid($image) OR
           !Upload::type($image, array('jpg', 'jpeg', 'png', 'gif')))
        {
            return FALSE;
        }
        
        $upload_dir = DOCROOT.'uploads/';
        
      // save image to 'uploads' foler in docroot
        if($file = Upload::save($image, NULL, $upload_dir))
        {
           // randomly generate 20 alphanumeric characters as file name
            $filename = strtolower(Text::random('alnum', 20)).'.jpg';
            
          // resize image file to 210x210
            Image::factory($file)
                  ->resize(210, 210, Image::NONE)
                  ->save($upload_dir.$filename);
            
           // remove image file with old name
            unlink($file);
            return $filename;
        }
        
        return FALSE;
    }
}
