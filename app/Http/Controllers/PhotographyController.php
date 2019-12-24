<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PhotographyController extends Controller
{
    //
    public function HomePage(){        
        $name = "brian Lam";
        return view('home')->with('name',$name);
        
    }

    public function ResumePage(){
        return view('resume');
    }


    public function correctImageOrientation() {
        $filename = './assets/images/photos/dc/IMG_4758.jpg';
                
        // $filename = './assets/images/photos/nyc/tower4.jpg';
        // $filename='C:\Users\Brian\Documents\laravel\sight-seeing\public\assets\images\photos\nyc\tower4.JPG';
        if (function_exists('exif_read_data')) {
          $exif = exif_read_data($filename);
          if($exif && isset($exif['Orientation'])) {
            $orientation = $exif['Orientation'];
            if($orientation != 1){
              $img = imagecreatefromjpeg($filename);
              $deg = 0;
              switch ($orientation) {
                case 3:
                  $deg = 180;
                  break;
                case 6:
                  $deg = 270;
                  break;
                case 8:
                  $deg = 90;
                  break;
              }
              if ($deg) {
                $img = imagerotate($img, $deg, 0);        
              }
              // then rewrite the rotated image back to the disk as $filename 
              imagejpeg($img, $filename, 95);
            } // if there is some rotation necessary
          } // if have the exif orientation info
        } // if function exists      
    }

    public function index(){
        return view('photography.index');
    }
    public function view($album){

        if ($album == 'nyc'){return view('photography.nyc');}
        if ($album == 'switzerland'){return view('photography.switzerland');}
        if ($album == 'dc'){return view('photography.dc');}

        return redirect('/photography');
    }
    public function ContactPage(){
        return view('contact');
    }
    // public function ResumePage(){
    //     return view('resume')
    // }
    
}
