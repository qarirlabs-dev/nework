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
            $destinations = [];
        } elseif ($slug == 'indonesia') {
            $detail = "In Indonesia";
            $heroImages = ['resources/image/ilustration/indonesia.png','resources/image/ilustration/indonesia_2.png','resources/image/ilustration/indonesia_3.jpg'];
            $destinations = [];
        } elseif ($slug == 'istanbul') {
            $detail = "In Istanbul";
            $heroImages = ['resources/image/ilustration/istanbul_3.png','resources/image/ilustration/istanbul.png','resources/image/ilustration/istanbul_2.png'];
            $destinations = [
                [
                    'image' => 'resources/image/destination/istanbul_destination_1.png',
                    'title' => 'Topkapi Palace Tour',
                    'subtitle' => "Visit important historical museums in Türkiye. Our Tour Guide will explain the history of the palace during the Ottoman Turkish era and the life of the Sultan's family. enjoy the palace at your own pace with an audio guide. You can see all of the palace in an hour, or you can choose to stay inside for several hours to explore fully at your leisure."
                ],
                [
                    'image' => 'resources/image/destination/istanbul_destination_2.png',
                    'title' => 'Hagia Shopia',
                    'subtitle' => 'A major Byzantine mosque, cultural and historical site in the Fatih district, Istanbul Province, Turkey.'
                ],
                [
                    'image' => 'resources/image/destination/istanbul_destination_3.png',
                    'title' => 'Bosphorus Tour',
                    'subtitle' => "Enjoy an unforgettable tour experience with the Bosphorus, with beautiful views of the city of Instabul by using a cruise. Pass by some of Istanbul's monuments while enjoying dinner and drinks while looking at sights such as the Dolmabahçe Palace, Galata Tower and the Bosphorus Bridge. Our tour also offers free wi-fi, tea, and Nescafe, photography service. After that, the tour will continue to see the sunset from the Bosphorus."
                ]
            ];
        } elseif ($slug == 'Tokyo') {
            $detail = "In Tokyo";
            $heroImages = ['resources/image/ilustration/tokyo.jpg','resources/image/ilustration/tokyo_2.png','resources/image/ilustration/tokyo_3.png',];
            $destinations = [
                [
                    'image' => 'resources/image/destination/tokyo_destination_1.png',
                    'title' => 'Kuil Senjoji',
                    'subtitle' => "Sensoji is the most famous temple in Tokyo. Built in the 7th century, this temple is also the oldest temple in the capital. Every year this tourist spot attracts around 30 million visitors, both domestic and international. This time we will introduce five attractions in Sensoji Temple."
                ],
                [
                    'image' => 'resources/image/destination/tokyo_destination_2.png',
                    'title' => 'Kabukiza Theatre',
                    'subtitle' => "Kabuki (歌舞伎) is a must-see performance when you come to Japan. This amazing and dazzling show shows a side of Japan that is rarely seen on the streets of Tokyo.
                    In the Ginza district, there is Kabukiza (歌舞伎座), a Kabuki theater built in dazzling traditional architecture in the middle of this modern city. Kabuki performances in Kabukiza are performed almost every day, where each performance lasts from 30 minutes to a day. There's no good reason not to visit this lavish Japanese theater in Kabukiza."
                ],
                [
                    'image' => 'resources/image/destination/tokyo_destination_3.png',
                    'title' => 'Scramble Crossroads',
                    'subtitle' => "This Scramble intersection appeared in director Sophia Coppola's film 'Lost in Translation' and after that caught people's attention. Even this Scramble Crossing appears in the films 'Resident Evil IV After Life' and 'Wild Speed X 3 TOKYO DRIFT'. Apart from that, the Scramble Junction is also used as a location for filming video clips of artists, one of which is the boy band ONE DIRECTION for the video clip One Way Or Another (Teenage Kicks) (at 1:29 minutes) and the presence of this Scramble Junction has become worldwide. one of the activities that is quite popular here is to feel the sensation of being in the middle of a crowd of people passing by like a scene in a movie. Well, this time MATCHA will review places that are convenient for you to watch or take photos of the Scramble Intersection."
                ]
            ];
        }

        if ($course == 'data science') {
            return view('landing_page.data_science', compact('detail', 'heroImages','slug', 'course', 'destinations'));
        } elseif ($course == 'digital marketing') {
            return view('landing_page.digital_marketing', compact('detail', 'heroImages','slug', 'course','destinations'));
        } elseif ($course == 'web development') {
            return view('landing_page.web_development', compact('detail', 'heroImages','slug', 'course', 'destinations'));
        }
    }
}
