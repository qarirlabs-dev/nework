<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index() {
        return view('landing_page.landing');
    }

    public function detail($slug, $course) {
        
        if ($slug == 'online') {
            $detail = "In Online";
            $heroImages = ['resources/image/ilustration/ilustration_3.png'];
        } elseif ($slug == 'indonesia') {
            $detail = "In Indonesia";
            $heroImages = ['resources/image/ilustration/indonesia.png','resources/image/ilustration/indonesia_2.png','resources/image/ilustration/indonesia_3.jpg'];
        } elseif ($slug == 'istanbul') {
            $detail = "In Istanbul";
            $heroImages = ['resources/image/ilustration/istanbul_3.png','resources/image/ilustration/istanbul.png','resources/image/ilustration/istanbul_2.png'];
        } elseif ($slug == 'Tokyo') {
            $detail = "In Tokyo";
            $heroImages = ['resources/image/ilustration/tokyo.jpg','resources/image/ilustration/tokyo_2.png','resources/image/ilustration/tokyo_3.png',];
        }

        if ($course == 'data science') {
            return view('landing_page.data_science', compact('detail', 'heroImages','slug', 'course'));
        } elseif ($course == 'digital marketing') {
            return view('landing_page.digital_marketing', compact('detail', 'heroImages','slug', 'course'));
        } elseif ($course == 'web development') {
            return view('landing_page.web_development', compact('detail', 'heroImages','slug', 'course'));
        }
    }
}
