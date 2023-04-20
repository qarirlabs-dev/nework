<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landing_page.landing');
    }

    public function detail($slug, $course)
    {

        $themeColor = '#0F5B89';
        // Determine Color
        if (strtolower($slug) == 'indonesia' && strtolower($course) == 'data science') {
            $themeColor = '#2622B9';
            $themeColor2 = '#DBDAFF';
            $themeColor3 = '#DBDAFF';
        }

        if (strtolower($slug) == 'indonesia' && strtolower($course) == 'digital marketing') {
            $themeColor = '#FF9500';
            $themeColor2 = '#FFE6CE';
            $themeColor3 = '#FFE6CE';
        }

        if (strtolower($slug) == 'istanbul' && strtolower($course) == 'data science') {
            $themeColor = '#EE0A0A';
            $themeColor2 = '#FFE3E3';
            $themeColor3 = '#FFE3E3';
        }

        if (strtolower($slug) == 'istanbul' && strtolower($course) == 'digital marketing') {
            $themeColor = '#0F5B89';
            $themeColor2 = '#EEF9FF';
            $themeColor3 = '#DCF2FF';
        }

        // dd($themeColor, strtolower($slug), strtolower($course));

        $programFee = [];

        if ($slug == 'online') {
            $detail = "Online";
            $heroImages = ['resources/image/ilustration/ilustration_3.png'];
            $destinations = [];
            $whySouldStay = [
                [
                    "image" => '<svg class="w-12 h-12" width="48" height="48" viewBox="0 0 48 48"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M41.7564 40.042H6.00049V43H41.7564V40.042Z"
                        fill="url(#paint0_linear_268_866)" />
                    <path d="M39.809 34.8574H7.94727V37.8155H39.809V34.8574Z"
                        fill="url(#paint1_linear_268_866)" />
                    <path d="M23.878 5L6 13.6159V15.8997H41.756V13.6159L23.878 5Z"
                        fill="url(#paint2_linear_268_866)" />
                    <path
                        d="M7.50439 18.1265V20.8736H10.3366V32.631H16.0538V20.8736H21.0193V32.631H26.7364V20.8736H31.7019V32.631H37.4191V20.8736H40.2513V18.1265H7.50439Z"
                        fill="url(#paint3_linear_268_866)" />
                    <defs>
                        <linearGradient id="paint0_linear_268_866" x1="6.00049" y1="40.042"
                            x2="6.48659" y2="45.9179" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_268_866" x1="7.94727" y1="34.8574"
                            x2="8.49182" y2="40.723" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint2_linear_268_866" x1="6" y1="5"
                            x2="12.0802" y2="24.9459" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint3_linear_268_866" x1="7.50439" y1="18.1265"
                            x2="18.2459" y2="42.3777" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                    </defs>
                </svg>',
                    "content" => "Our Bootcamp $slug Class
                    is near to beautiful historic building with an outdoor courtyard for relaxing between
                    classes"
                ],
                [
                    "image" => '<svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M23.9999 2.25C19.7962 2.27657 15.7753 3.97196 12.8216 6.96321C9.86787 9.95446 8.22341 13.9965 8.24995 18.2003C8.24995 31.9747 23.9999 45.75 23.9999 45.75C23.9999 45.75 39.75 31.9747 39.75 18.2003C39.7765 13.9965 38.132 9.95446 35.1783 6.96321C32.2246 3.97196 28.2037 2.27657 23.9999 2.25ZM23.9999 31.5C21.3299 31.5 18.7198 30.7082 16.4998 29.2248C14.2797 27.7414 12.5494 25.633 11.5276 23.1662C10.5058 20.6994 10.2384 17.985 10.7593 15.3663C11.2802 12.7475 12.566 10.3421 14.454 8.45406C16.342 6.56605 18.7475 5.2803 21.3662 4.7594C23.985 4.2385 26.6994 4.50584 29.1662 5.52763C31.633 6.54941 33.7414 8.27974 35.2248 10.4998C36.7082 12.7199 37.5 15.33 37.5 18C37.4958 21.5791 36.0721 25.0105 33.5413 27.5413C31.0105 30.0722 27.5791 31.4958 23.9999 31.5Z"
                        fill="url(#paint0_linear_268_881)" />
                    <path d="M27 15.75H30V22.5H27V15.75Z" fill="url(#paint1_linear_268_881)" />
                    <path d="M22.5 15.75H25.5V22.5H22.5V15.75Z" fill="url(#paint2_linear_268_881)" />
                    <path
                        d="M24 6C21.6266 6 19.3066 6.70379 17.3332 8.02236C15.3598 9.34094 13.8217 11.2151 12.9135 13.4078C12.0052 15.6005 11.7676 18.0133 12.2306 20.3411C12.6936 22.6689 13.8365 24.8071 15.5147 26.4853C17.193 28.1635 19.3311 29.3064 21.6589 29.7694C23.9867 30.2324 26.3995 29.9948 28.5922 29.0866C30.7849 28.1783 32.6591 26.6402 33.9776 24.6668C35.2962 22.6935 36 20.3734 36 18C35.9962 14.8186 34.7307 11.7685 32.4811 9.51888C30.2315 7.26926 27.1814 6.00377 24 6ZM33 24H15V22.5H16.5V15.75H14.25L24 9L33.75 15.75H31.5V22.5H33V24Z"
                        fill="url(#paint3_linear_268_881)" />
                    <path d="M18 15.75H21V22.5H18V15.75Z" fill="url(#paint4_linear_268_881)" />
                    <defs>
                        <linearGradient id="paint0_linear_268_881" x1="8.24963" y1="2.25"
                            x2="49.5783" y2="32.1782" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_268_881" x1="27" y1="15.75"
                            x2="32.0103" y2="17.9768" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint2_linear_268_881" x1="22.5" y1="15.75"
                            x2="27.5103" y2="17.9768" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint3_linear_268_881" x1="12" y1="6"
                            x2="36" y2="30" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint4_linear_268_881" x1="18" y1="15.75"
                            x2="23.0103" y2="17.9768" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                    </defs>
                </svg>',
                    "content" => "$slug truly lives up to
                    its nickname: <strong>City of the World's Desire</strong>. Enjoy the wonders of Turkiye which include
                    more than 300+ fascinating museums with great story, 100+ great destination for
                    experiencing the miracle of Eurasian nature and stunning view , and an endless variety
                    of world-class food"
                ],
                [
                    "image" => '<svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M24 2C19.6488 2 15.3953 3.29028 11.7775 5.70767C8.15958 8.12506 5.33979 11.561 3.67466 15.581C2.00953 19.6009 1.57386 24.0244 2.42273 28.292C3.27161 32.5596 5.36691 36.4796 8.44366 39.5564C11.5204 42.6331 15.4404 44.7284 19.708 45.5773C23.9756 46.4261 28.3991 45.9905 32.419 44.3253C36.439 42.6602 39.875 39.8404 42.2923 36.2225C44.7097 32.6047 46 28.3512 46 24C46 18.1652 43.6822 12.5695 39.5564 8.44365C35.4306 4.31785 29.8348 2 24 2ZM15.057 6.13L16.25 6.958C16.5139 7.14184 16.7277 7.38863 16.872 7.676L17.172 8.276C17.3311 8.59488 17.576 8.86309 17.8791 9.0505C18.1823 9.23792 18.5316 9.33714 18.888 9.337H21.021C21.53 9.337 22.0181 9.53918 22.3779 9.89906C22.7378 10.2589 22.94 10.747 22.94 11.256V11.294C22.9403 11.6504 22.8411 11.9998 22.6537 12.303C22.4662 12.6061 22.198 12.851 21.879 13.01L16.762 15.57C16.6904 15.6049 16.6212 15.6447 16.555 15.689L13.936 17.435C13.658 17.6207 13.433 17.8753 13.283 18.174L12.894 18.956C12.7596 19.2218 12.6895 19.5156 12.6895 19.8135C12.6895 20.1114 12.7596 20.4052 12.894 20.671C13.0738 21.0316 13.1357 21.4395 13.071 21.8372C13.0062 22.2349 12.818 22.6021 12.533 22.887L12.476 22.945C12.1734 23.2476 11.7783 23.4404 11.3536 23.4925C10.9288 23.5447 10.4988 23.4534 10.132 23.233L6.78501 21.223C6.3924 20.987 6.09699 20.6185 5.95201 20.184L5.12901 17.714C5.09101 17.714 5.06401 17.702 5.02901 17.701C6.70747 12.6682 10.3139 8.50683 15.057 6.13ZM26.081 31.123C26.0812 31.262 26.0589 31.4001 26.015 31.532L25.13 34.186C25.0669 34.3767 24.96 34.5499 24.818 34.692L23.218 36.292C23.0369 36.4727 22.9137 36.7031 22.864 36.954L22.017 41.186C21.9778 41.3787 21.8952 41.5599 21.7755 41.7158C21.6558 41.8718 21.502 41.9984 21.326 42.086L20.632 42.434C20.3887 42.5548 20.1136 42.5963 19.8455 42.5527C19.5773 42.5091 19.3296 42.3826 19.137 42.191L17.851 40.905C17.7527 40.8062 17.6707 40.6924 17.608 40.568L16.791 38.934C16.7018 38.754 16.6552 38.5559 16.655 38.355V34.229C16.6546 33.9885 16.5874 33.7528 16.461 33.5482C16.3346 33.3436 16.1539 33.178 15.939 33.07L14.867 32.535C14.6647 32.4346 14.4923 32.2829 14.367 32.095L12.68 29.564C12.538 29.3515 12.4621 29.1016 12.462 28.846V27.946C12.4626 27.7057 12.5299 27.4702 12.6563 27.2658C12.7827 27.0613 12.9633 26.896 13.178 26.788L14.171 26.288C14.4219 26.1631 14.6251 25.9598 14.75 25.709L15.25 24.716C15.3577 24.5017 15.5227 24.3214 15.7265 24.1951C15.9303 24.0687 16.1652 24.0012 16.405 24H18.211C18.3811 23.9999 18.5496 24.0333 18.7067 24.0983C18.8639 24.1633 19.0067 24.2587 19.127 24.379L19.416 24.668C19.6591 24.9107 19.9885 25.0473 20.332 25.048H20.6C20.9439 25.0493 21.2733 25.1869 21.516 25.4305C21.7587 25.6742 21.895 26.0041 21.895 26.348C21.8956 26.5882 21.9627 26.8236 22.0889 27.028C22.2151 27.2325 22.3955 27.3979 22.61 27.506L25.37 28.885C25.5847 28.9932 25.7652 29.1588 25.8914 29.3634C26.0176 29.568 26.0847 29.8036 26.085 30.044L26.081 31.123ZM31.351 12.114C31.4402 11.898 31.5711 11.7016 31.736 11.536L33.527 9.746C33.662 9.61116 33.8176 9.49874 33.988 9.413L35.868 8.473C36.0322 8.39466 36.2077 8.34236 36.388 8.318C38.5475 10.0205 40.3338 12.1489 41.636 14.571H40.752C40.2807 14.571 39.8286 14.384 39.495 14.051L39.279 13.835C38.9455 13.5017 38.4935 13.3143 38.022 13.314H36.664C36.3863 13.3132 36.1123 13.3776 35.864 13.502L34.102 14.384C33.8536 14.508 33.5796 14.572 33.302 14.571H32.985C32.6929 14.5708 32.4052 14.4986 32.1476 14.3608C31.89 14.223 31.6703 14.0238 31.508 13.7809C31.3456 13.538 31.2457 13.2588 31.2169 12.9681C31.1881 12.6774 31.2314 12.384 31.343 12.114H31.351ZM38.89 37.319L38.76 37C38.6891 36.7861 38.653 36.5623 38.653 36.337V34.028C38.6529 33.7028 38.5772 33.382 38.432 33.091L36.778 29.785C36.6328 29.494 36.5571 29.1732 36.557 28.848V28.542C36.557 28.185 36.4657 27.8339 36.2919 27.5221C36.118 27.2103 35.8674 26.9481 35.5637 26.7604C35.2601 26.5726 34.9135 26.4656 34.5569 26.4494C34.2002 26.4333 33.8454 26.5085 33.526 26.668L32.809 27.027C32.5183 27.1721 32.1979 27.2477 31.873 27.248H31.782C31.3422 27.2472 30.9138 27.1084 30.5571 26.8512C30.2004 26.5939 29.9335 26.2311 29.794 25.814L29.332 24.427C29.2607 24.2132 29.2242 23.9894 29.224 23.764V22.083C29.224 21.7381 29.3091 21.3985 29.4719 21.0945C29.6346 20.7904 29.87 20.5312 30.157 20.34L32.065 19.068C32.2647 18.9347 32.486 18.837 32.719 18.779L35.965 17.967C36.352 17.8704 36.7585 17.886 37.137 18.012L39.377 18.759C39.5911 18.8303 39.8153 18.8668 40.041 18.867H43.31C44.1779 22.0667 44.228 25.4332 43.4557 28.6573C42.6834 31.8814 41.1134 34.8598 38.89 37.319Z"
                        fill="url(#paint0_linear_268_890)" />
                    <defs>
                        <linearGradient id="paint0_linear_268_890" x1="2" y1="2"
                            x2="46" y2="46" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                    </defs>
                </svg>',
                    "content" => "Offers a rich social program,
                    including organized daily trips around Istanbul European Side & Asian Side"
                ],
            ];
        } elseif ($slug == 'indonesia') {
            if (strtolower($course) == 'digital marketing') {
                $programFee = [
                    [
                        "title" => "Digital Marketing Bootcamp",
                        "type" => "Beginner Friendly",
                        "price" => [
                            "Rp10,500,000",
                            "Rp 5,999,999 <span class='font-base text-sm'>(for scholarship)</span>"
                        ],
                        "duration" => "16 Weeks",
                        "note" => "Include job connector + student club "
                    ],
                    [
                        "title" => "Digital Marketing Bootcamp",
                        "type" => "Beginner Friendly & Hybrid Offline",
                        "price" => [
                            "Rp14,000,000",
                            "Rp12,000,000"
                        ],
                        "duration" => "16 Weeks",
                        "note" => "Include job connector + student club"
                    ]
                ];
            }
            $detail = "Indonesia";
            $heroImages = ['resources/image/ilustration/indonesia_hero.png'];
            $destinations = [];
            $whySouldStay = [
                [
                    "image" => '<svg class="w-12 h-12" width="48" height="48" viewBox="0 0 48 48"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M41.7564 40.042H6.00049V43H41.7564V40.042Z"
                        fill="url(#paint0_linear_268_866)" />
                    <path d="M39.809 34.8574H7.94727V37.8155H39.809V34.8574Z"
                        fill="url(#paint1_linear_268_866)" />
                    <path d="M23.878 5L6 13.6159V15.8997H41.756V13.6159L23.878 5Z"
                        fill="url(#paint2_linear_268_866)" />
                    <path
                        d="M7.50439 18.1265V20.8736H10.3366V32.631H16.0538V20.8736H21.0193V32.631H26.7364V20.8736H31.7019V32.631H37.4191V20.8736H40.2513V18.1265H7.50439Z"
                        fill="url(#paint3_linear_268_866)" />
                    <defs>
                        <linearGradient id="paint0_linear_268_866" x1="6.00049" y1="40.042"
                            x2="6.48659" y2="45.9179" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_268_866" x1="7.94727" y1="34.8574"
                            x2="8.49182" y2="40.723" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint2_linear_268_866" x1="6" y1="5"
                            x2="12.0802" y2="24.9459" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint3_linear_268_866" x1="7.50439" y1="18.1265"
                            x2="18.2459" y2="42.3777" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                    </defs>
                </svg>',
                    "content" => strtolower($slug) == 'indonesia' ? "Kelas bootcamp Indonesia kami sangat fleksibel, Anda dapat memilih antara kelas Hybrid dan kelas online untuk bergabung! Di mana pun Anda tinggal!" : "Our bootcamp indonesia class was very flexible, you can choose between Hybrid class and online class to join! No need to worried about place"
                ],
                [
                    "image" => '<svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M23.9999 2.25C19.7962 2.27657 15.7753 3.97196 12.8216 6.96321C9.86787 9.95446 8.22341 13.9965 8.24995 18.2003C8.24995 31.9747 23.9999 45.75 23.9999 45.75C23.9999 45.75 39.75 31.9747 39.75 18.2003C39.7765 13.9965 38.132 9.95446 35.1783 6.96321C32.2246 3.97196 28.2037 2.27657 23.9999 2.25ZM23.9999 31.5C21.3299 31.5 18.7198 30.7082 16.4998 29.2248C14.2797 27.7414 12.5494 25.633 11.5276 23.1662C10.5058 20.6994 10.2384 17.985 10.7593 15.3663C11.2802 12.7475 12.566 10.3421 14.454 8.45406C16.342 6.56605 18.7475 5.2803 21.3662 4.7594C23.985 4.2385 26.6994 4.50584 29.1662 5.52763C31.633 6.54941 33.7414 8.27974 35.2248 10.4998C36.7082 12.7199 37.5 15.33 37.5 18C37.4958 21.5791 36.0721 25.0105 33.5413 27.5413C31.0105 30.0722 27.5791 31.4958 23.9999 31.5Z"
                        fill="url(#paint0_linear_268_881)" />
                    <path d="M27 15.75H30V22.5H27V15.75Z" fill="url(#paint1_linear_268_881)" />
                    <path d="M22.5 15.75H25.5V22.5H22.5V15.75Z" fill="url(#paint2_linear_268_881)" />
                    <path
                        d="M24 6C21.6266 6 19.3066 6.70379 17.3332 8.02236C15.3598 9.34094 13.8217 11.2151 12.9135 13.4078C12.0052 15.6005 11.7676 18.0133 12.2306 20.3411C12.6936 22.6689 13.8365 24.8071 15.5147 26.4853C17.193 28.1635 19.3311 29.3064 21.6589 29.7694C23.9867 30.2324 26.3995 29.9948 28.5922 29.0866C30.7849 28.1783 32.6591 26.6402 33.9776 24.6668C35.2962 22.6935 36 20.3734 36 18C35.9962 14.8186 34.7307 11.7685 32.4811 9.51888C30.2315 7.26926 27.1814 6.00377 24 6ZM33 24H15V22.5H16.5V15.75H14.25L24 9L33.75 15.75H31.5V22.5H33V24Z"
                        fill="url(#paint3_linear_268_881)" />
                    <path d="M18 15.75H21V22.5H18V15.75Z" fill="url(#paint4_linear_268_881)" />
                    <defs>
                        <linearGradient id="paint0_linear_268_881" x1="8.24963" y1="2.25"
                            x2="49.5783" y2="32.1782" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_268_881" x1="27" y1="15.75"
                            x2="32.0103" y2="17.9768" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint2_linear_268_881" x1="22.5" y1="15.75"
                            x2="27.5103" y2="17.9768" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint3_linear_268_881" x1="12" y1="6"
                            x2="36" y2="30" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint4_linear_268_881" x1="18" y1="15.75"
                            x2="23.0103" y2="17.9768" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                    </defs>
                </svg>',
                    "content" => strtolower($slug) == 'indonesia' ? "Sebagai salah satu ekonomi terbesar di Asia Tenggara, Indonesia mengubah semua sektor menjadi digital dengan cepat. Menjadi Tech atau Digital Talent di Indonesia memberi Anda peluang besar untuk mendapatkan pekerjaan dan proyek bergaji tinggi!" : "As one of the largest economies in Southeast Asia, Indonesia is an ideal destination where you can get a high-quality education at affordable prices. "
                ],
                [
                    "image" => '<svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M24 2C19.6488 2 15.3953 3.29028 11.7775 5.70767C8.15958 8.12506 5.33979 11.561 3.67466 15.581C2.00953 19.6009 1.57386 24.0244 2.42273 28.292C3.27161 32.5596 5.36691 36.4796 8.44366 39.5564C11.5204 42.6331 15.4404 44.7284 19.708 45.5773C23.9756 46.4261 28.3991 45.9905 32.419 44.3253C36.439 42.6602 39.875 39.8404 42.2923 36.2225C44.7097 32.6047 46 28.3512 46 24C46 18.1652 43.6822 12.5695 39.5564 8.44365C35.4306 4.31785 29.8348 2 24 2ZM15.057 6.13L16.25 6.958C16.5139 7.14184 16.7277 7.38863 16.872 7.676L17.172 8.276C17.3311 8.59488 17.576 8.86309 17.8791 9.0505C18.1823 9.23792 18.5316 9.33714 18.888 9.337H21.021C21.53 9.337 22.0181 9.53918 22.3779 9.89906C22.7378 10.2589 22.94 10.747 22.94 11.256V11.294C22.9403 11.6504 22.8411 11.9998 22.6537 12.303C22.4662 12.6061 22.198 12.851 21.879 13.01L16.762 15.57C16.6904 15.6049 16.6212 15.6447 16.555 15.689L13.936 17.435C13.658 17.6207 13.433 17.8753 13.283 18.174L12.894 18.956C12.7596 19.2218 12.6895 19.5156 12.6895 19.8135C12.6895 20.1114 12.7596 20.4052 12.894 20.671C13.0738 21.0316 13.1357 21.4395 13.071 21.8372C13.0062 22.2349 12.818 22.6021 12.533 22.887L12.476 22.945C12.1734 23.2476 11.7783 23.4404 11.3536 23.4925C10.9288 23.5447 10.4988 23.4534 10.132 23.233L6.78501 21.223C6.3924 20.987 6.09699 20.6185 5.95201 20.184L5.12901 17.714C5.09101 17.714 5.06401 17.702 5.02901 17.701C6.70747 12.6682 10.3139 8.50683 15.057 6.13ZM26.081 31.123C26.0812 31.262 26.0589 31.4001 26.015 31.532L25.13 34.186C25.0669 34.3767 24.96 34.5499 24.818 34.692L23.218 36.292C23.0369 36.4727 22.9137 36.7031 22.864 36.954L22.017 41.186C21.9778 41.3787 21.8952 41.5599 21.7755 41.7158C21.6558 41.8718 21.502 41.9984 21.326 42.086L20.632 42.434C20.3887 42.5548 20.1136 42.5963 19.8455 42.5527C19.5773 42.5091 19.3296 42.3826 19.137 42.191L17.851 40.905C17.7527 40.8062 17.6707 40.6924 17.608 40.568L16.791 38.934C16.7018 38.754 16.6552 38.5559 16.655 38.355V34.229C16.6546 33.9885 16.5874 33.7528 16.461 33.5482C16.3346 33.3436 16.1539 33.178 15.939 33.07L14.867 32.535C14.6647 32.4346 14.4923 32.2829 14.367 32.095L12.68 29.564C12.538 29.3515 12.4621 29.1016 12.462 28.846V27.946C12.4626 27.7057 12.5299 27.4702 12.6563 27.2658C12.7827 27.0613 12.9633 26.896 13.178 26.788L14.171 26.288C14.4219 26.1631 14.6251 25.9598 14.75 25.709L15.25 24.716C15.3577 24.5017 15.5227 24.3214 15.7265 24.1951C15.9303 24.0687 16.1652 24.0012 16.405 24H18.211C18.3811 23.9999 18.5496 24.0333 18.7067 24.0983C18.8639 24.1633 19.0067 24.2587 19.127 24.379L19.416 24.668C19.6591 24.9107 19.9885 25.0473 20.332 25.048H20.6C20.9439 25.0493 21.2733 25.1869 21.516 25.4305C21.7587 25.6742 21.895 26.0041 21.895 26.348C21.8956 26.5882 21.9627 26.8236 22.0889 27.028C22.2151 27.2325 22.3955 27.3979 22.61 27.506L25.37 28.885C25.5847 28.9932 25.7652 29.1588 25.8914 29.3634C26.0176 29.568 26.0847 29.8036 26.085 30.044L26.081 31.123ZM31.351 12.114C31.4402 11.898 31.5711 11.7016 31.736 11.536L33.527 9.746C33.662 9.61116 33.8176 9.49874 33.988 9.413L35.868 8.473C36.0322 8.39466 36.2077 8.34236 36.388 8.318C38.5475 10.0205 40.3338 12.1489 41.636 14.571H40.752C40.2807 14.571 39.8286 14.384 39.495 14.051L39.279 13.835C38.9455 13.5017 38.4935 13.3143 38.022 13.314H36.664C36.3863 13.3132 36.1123 13.3776 35.864 13.502L34.102 14.384C33.8536 14.508 33.5796 14.572 33.302 14.571H32.985C32.6929 14.5708 32.4052 14.4986 32.1476 14.3608C31.89 14.223 31.6703 14.0238 31.508 13.7809C31.3456 13.538 31.2457 13.2588 31.2169 12.9681C31.1881 12.6774 31.2314 12.384 31.343 12.114H31.351ZM38.89 37.319L38.76 37C38.6891 36.7861 38.653 36.5623 38.653 36.337V34.028C38.6529 33.7028 38.5772 33.382 38.432 33.091L36.778 29.785C36.6328 29.494 36.5571 29.1732 36.557 28.848V28.542C36.557 28.185 36.4657 27.8339 36.2919 27.5221C36.118 27.2103 35.8674 26.9481 35.5637 26.7604C35.2601 26.5726 34.9135 26.4656 34.5569 26.4494C34.2002 26.4333 33.8454 26.5085 33.526 26.668L32.809 27.027C32.5183 27.1721 32.1979 27.2477 31.873 27.248H31.782C31.3422 27.2472 30.9138 27.1084 30.5571 26.8512C30.2004 26.5939 29.9335 26.2311 29.794 25.814L29.332 24.427C29.2607 24.2132 29.2242 23.9894 29.224 23.764V22.083C29.224 21.7381 29.3091 21.3985 29.4719 21.0945C29.6346 20.7904 29.87 20.5312 30.157 20.34L32.065 19.068C32.2647 18.9347 32.486 18.837 32.719 18.779L35.965 17.967C36.352 17.8704 36.7585 17.886 37.137 18.012L39.377 18.759C39.5911 18.8303 39.8153 18.8668 40.041 18.867H43.31C44.1779 22.0667 44.228 25.4332 43.4557 28.6573C42.6834 31.8814 41.1134 34.8598 38.89 37.319Z"
                        fill="url(#paint0_linear_268_890)" />
                    <defs>
                        <linearGradient id="paint0_linear_268_890" x1="2" y1="2"
                            x2="46" y2="46" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                    </defs>
                </svg>',
                    "content" => strtolower($slug) == 'indonesia' ? "Kendala bahasa inggris? Semua kelas dilakukan dalam Bahasa Indonesia, Damn We love Indonesia !" : "Offers a rich social program,
                    including organized daily trips around Istanbul European Side & Asian Side"
                ],
            ];
        } elseif ($slug == 'istanbul') {
            $programFee = [
                [
                    "title" => "Data Sciences Intensive Bootcamp",
                    "type" => "Study Only",
                    "price" => ["$1.100"],
                    "duration" => "12 Weeks",
                    "note" => "14 DAYS CLASS IN ISTANBUL + 2 month online"
                ],
                [
                    "title" => "Data Sciences Intensive Bootcamp",
                    "type" => "Study and Accomodation",
                    "price" => ["$1.500"],
                    "duration" => "12 Weeks",
                    "note" => "14 DAYS CLASS IN ISTANBUL + 2 month online"
                ]
            ];
            $detail = "In Istanbul";
            $heroImages = ['resources/image/ilustration/istanbul_3.png'];
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
            $whySouldStay = [
                [
                    "image" => '<svg class="w-12 h-12" width="48" height="48" viewBox="0 0 48 48"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M41.7564 40.042H6.00049V43H41.7564V40.042Z"
                        fill="url(#paint0_linear_268_866)" />
                    <path d="M39.809 34.8574H7.94727V37.8155H39.809V34.8574Z"
                        fill="url(#paint1_linear_268_866)" />
                    <path d="M23.878 5L6 13.6159V15.8997H41.756V13.6159L23.878 5Z"
                        fill="url(#paint2_linear_268_866)" />
                    <path
                        d="M7.50439 18.1265V20.8736H10.3366V32.631H16.0538V20.8736H21.0193V32.631H26.7364V20.8736H31.7019V32.631H37.4191V20.8736H40.2513V18.1265H7.50439Z"
                        fill="url(#paint3_linear_268_866)" />
                    <defs>
                        <linearGradient id="paint0_linear_268_866" x1="6.00049" y1="40.042"
                            x2="6.48659" y2="45.9179" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_268_866" x1="7.94727" y1="34.8574"
                            x2="8.49182" y2="40.723" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint2_linear_268_866" x1="6" y1="5"
                            x2="12.0802" y2="24.9459" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint3_linear_268_866" x1="7.50439" y1="18.1265"
                            x2="18.2459" y2="42.3777" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                    </defs>
                </svg>',
                    "content" => "Our Bootcamp Istanbul Class
                    is near to beautiful historic building with an outdoor courtyard for relaxing between
                    classes"
                ],
                [
                    "image" => '<svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M23.9999 2.25C19.7962 2.27657 15.7753 3.97196 12.8216 6.96321C9.86787 9.95446 8.22341 13.9965 8.24995 18.2003C8.24995 31.9747 23.9999 45.75 23.9999 45.75C23.9999 45.75 39.75 31.9747 39.75 18.2003C39.7765 13.9965 38.132 9.95446 35.1783 6.96321C32.2246 3.97196 28.2037 2.27657 23.9999 2.25ZM23.9999 31.5C21.3299 31.5 18.7198 30.7082 16.4998 29.2248C14.2797 27.7414 12.5494 25.633 11.5276 23.1662C10.5058 20.6994 10.2384 17.985 10.7593 15.3663C11.2802 12.7475 12.566 10.3421 14.454 8.45406C16.342 6.56605 18.7475 5.2803 21.3662 4.7594C23.985 4.2385 26.6994 4.50584 29.1662 5.52763C31.633 6.54941 33.7414 8.27974 35.2248 10.4998C36.7082 12.7199 37.5 15.33 37.5 18C37.4958 21.5791 36.0721 25.0105 33.5413 27.5413C31.0105 30.0722 27.5791 31.4958 23.9999 31.5Z"
                        fill="url(#paint0_linear_268_881)" />
                    <path d="M27 15.75H30V22.5H27V15.75Z" fill="url(#paint1_linear_268_881)" />
                    <path d="M22.5 15.75H25.5V22.5H22.5V15.75Z" fill="url(#paint2_linear_268_881)" />
                    <path
                        d="M24 6C21.6266 6 19.3066 6.70379 17.3332 8.02236C15.3598 9.34094 13.8217 11.2151 12.9135 13.4078C12.0052 15.6005 11.7676 18.0133 12.2306 20.3411C12.6936 22.6689 13.8365 24.8071 15.5147 26.4853C17.193 28.1635 19.3311 29.3064 21.6589 29.7694C23.9867 30.2324 26.3995 29.9948 28.5922 29.0866C30.7849 28.1783 32.6591 26.6402 33.9776 24.6668C35.2962 22.6935 36 20.3734 36 18C35.9962 14.8186 34.7307 11.7685 32.4811 9.51888C30.2315 7.26926 27.1814 6.00377 24 6ZM33 24H15V22.5H16.5V15.75H14.25L24 9L33.75 15.75H31.5V22.5H33V24Z"
                        fill="url(#paint3_linear_268_881)" />
                    <path d="M18 15.75H21V22.5H18V15.75Z" fill="url(#paint4_linear_268_881)" />
                    <defs>
                        <linearGradient id="paint0_linear_268_881" x1="8.24963" y1="2.25"
                            x2="49.5783" y2="32.1782" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_268_881" x1="27" y1="15.75"
                            x2="32.0103" y2="17.9768" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint2_linear_268_881" x1="22.5" y1="15.75"
                            x2="27.5103" y2="17.9768" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint3_linear_268_881" x1="12" y1="6"
                            x2="36" y2="30" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint4_linear_268_881" x1="18" y1="15.75"
                            x2="23.0103" y2="17.9768" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                    </defs>
                </svg>',
                    "content" => "Istanbul truly lives up to
                    its nickname: <strong>City of the World's Desire</strong>. Enjoy the wonders of Turkiye which include
                    more than 300+ fascinating museums with great story, 100+ great destination for
                    experiencing the miracle of Eurasian nature and stunning view , and an endless variety
                    of world-class food"
                ],
                [
                    "image" => '<svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M24 2C19.6488 2 15.3953 3.29028 11.7775 5.70767C8.15958 8.12506 5.33979 11.561 3.67466 15.581C2.00953 19.6009 1.57386 24.0244 2.42273 28.292C3.27161 32.5596 5.36691 36.4796 8.44366 39.5564C11.5204 42.6331 15.4404 44.7284 19.708 45.5773C23.9756 46.4261 28.3991 45.9905 32.419 44.3253C36.439 42.6602 39.875 39.8404 42.2923 36.2225C44.7097 32.6047 46 28.3512 46 24C46 18.1652 43.6822 12.5695 39.5564 8.44365C35.4306 4.31785 29.8348 2 24 2ZM15.057 6.13L16.25 6.958C16.5139 7.14184 16.7277 7.38863 16.872 7.676L17.172 8.276C17.3311 8.59488 17.576 8.86309 17.8791 9.0505C18.1823 9.23792 18.5316 9.33714 18.888 9.337H21.021C21.53 9.337 22.0181 9.53918 22.3779 9.89906C22.7378 10.2589 22.94 10.747 22.94 11.256V11.294C22.9403 11.6504 22.8411 11.9998 22.6537 12.303C22.4662 12.6061 22.198 12.851 21.879 13.01L16.762 15.57C16.6904 15.6049 16.6212 15.6447 16.555 15.689L13.936 17.435C13.658 17.6207 13.433 17.8753 13.283 18.174L12.894 18.956C12.7596 19.2218 12.6895 19.5156 12.6895 19.8135C12.6895 20.1114 12.7596 20.4052 12.894 20.671C13.0738 21.0316 13.1357 21.4395 13.071 21.8372C13.0062 22.2349 12.818 22.6021 12.533 22.887L12.476 22.945C12.1734 23.2476 11.7783 23.4404 11.3536 23.4925C10.9288 23.5447 10.4988 23.4534 10.132 23.233L6.78501 21.223C6.3924 20.987 6.09699 20.6185 5.95201 20.184L5.12901 17.714C5.09101 17.714 5.06401 17.702 5.02901 17.701C6.70747 12.6682 10.3139 8.50683 15.057 6.13ZM26.081 31.123C26.0812 31.262 26.0589 31.4001 26.015 31.532L25.13 34.186C25.0669 34.3767 24.96 34.5499 24.818 34.692L23.218 36.292C23.0369 36.4727 22.9137 36.7031 22.864 36.954L22.017 41.186C21.9778 41.3787 21.8952 41.5599 21.7755 41.7158C21.6558 41.8718 21.502 41.9984 21.326 42.086L20.632 42.434C20.3887 42.5548 20.1136 42.5963 19.8455 42.5527C19.5773 42.5091 19.3296 42.3826 19.137 42.191L17.851 40.905C17.7527 40.8062 17.6707 40.6924 17.608 40.568L16.791 38.934C16.7018 38.754 16.6552 38.5559 16.655 38.355V34.229C16.6546 33.9885 16.5874 33.7528 16.461 33.5482C16.3346 33.3436 16.1539 33.178 15.939 33.07L14.867 32.535C14.6647 32.4346 14.4923 32.2829 14.367 32.095L12.68 29.564C12.538 29.3515 12.4621 29.1016 12.462 28.846V27.946C12.4626 27.7057 12.5299 27.4702 12.6563 27.2658C12.7827 27.0613 12.9633 26.896 13.178 26.788L14.171 26.288C14.4219 26.1631 14.6251 25.9598 14.75 25.709L15.25 24.716C15.3577 24.5017 15.5227 24.3214 15.7265 24.1951C15.9303 24.0687 16.1652 24.0012 16.405 24H18.211C18.3811 23.9999 18.5496 24.0333 18.7067 24.0983C18.8639 24.1633 19.0067 24.2587 19.127 24.379L19.416 24.668C19.6591 24.9107 19.9885 25.0473 20.332 25.048H20.6C20.9439 25.0493 21.2733 25.1869 21.516 25.4305C21.7587 25.6742 21.895 26.0041 21.895 26.348C21.8956 26.5882 21.9627 26.8236 22.0889 27.028C22.2151 27.2325 22.3955 27.3979 22.61 27.506L25.37 28.885C25.5847 28.9932 25.7652 29.1588 25.8914 29.3634C26.0176 29.568 26.0847 29.8036 26.085 30.044L26.081 31.123ZM31.351 12.114C31.4402 11.898 31.5711 11.7016 31.736 11.536L33.527 9.746C33.662 9.61116 33.8176 9.49874 33.988 9.413L35.868 8.473C36.0322 8.39466 36.2077 8.34236 36.388 8.318C38.5475 10.0205 40.3338 12.1489 41.636 14.571H40.752C40.2807 14.571 39.8286 14.384 39.495 14.051L39.279 13.835C38.9455 13.5017 38.4935 13.3143 38.022 13.314H36.664C36.3863 13.3132 36.1123 13.3776 35.864 13.502L34.102 14.384C33.8536 14.508 33.5796 14.572 33.302 14.571H32.985C32.6929 14.5708 32.4052 14.4986 32.1476 14.3608C31.89 14.223 31.6703 14.0238 31.508 13.7809C31.3456 13.538 31.2457 13.2588 31.2169 12.9681C31.1881 12.6774 31.2314 12.384 31.343 12.114H31.351ZM38.89 37.319L38.76 37C38.6891 36.7861 38.653 36.5623 38.653 36.337V34.028C38.6529 33.7028 38.5772 33.382 38.432 33.091L36.778 29.785C36.6328 29.494 36.5571 29.1732 36.557 28.848V28.542C36.557 28.185 36.4657 27.8339 36.2919 27.5221C36.118 27.2103 35.8674 26.9481 35.5637 26.7604C35.2601 26.5726 34.9135 26.4656 34.5569 26.4494C34.2002 26.4333 33.8454 26.5085 33.526 26.668L32.809 27.027C32.5183 27.1721 32.1979 27.2477 31.873 27.248H31.782C31.3422 27.2472 30.9138 27.1084 30.5571 26.8512C30.2004 26.5939 29.9335 26.2311 29.794 25.814L29.332 24.427C29.2607 24.2132 29.2242 23.9894 29.224 23.764V22.083C29.224 21.7381 29.3091 21.3985 29.4719 21.0945C29.6346 20.7904 29.87 20.5312 30.157 20.34L32.065 19.068C32.2647 18.9347 32.486 18.837 32.719 18.779L35.965 17.967C36.352 17.8704 36.7585 17.886 37.137 18.012L39.377 18.759C39.5911 18.8303 39.8153 18.8668 40.041 18.867H43.31C44.1779 22.0667 44.228 25.4332 43.4557 28.6573C42.6834 31.8814 41.1134 34.8598 38.89 37.319Z"
                        fill="url(#paint0_linear_268_890)" />
                    <defs>
                        <linearGradient id="paint0_linear_268_890" x1="2" y1="2"
                            x2="46" y2="46" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                    </defs>
                </svg>',
                    "content" => "Offers a rich social program,
                    including organized daily trips around Istanbul European Side & Asian Side"
                ],
            ];
        } elseif ($slug == 'Tokyo') {
            $detail = "In Tokyo";
            $heroImages = ['resources/image/ilustration/tokyo_hero.png',];
            $destinations = [
                [
                    'image' => 'resources/image/destination/ueno_park_and_ueno_zoo.jpg',
                    'title' => 'Ueno Park and Ueno Zoo',
                    'subtitle' => "The city's largest green space and one of its most popular tourist attractions. In addition to its lovely grounds, the park also boasts numerous temples and museums to explore"
                ],
                [
                    'image' => 'resources/image/destination/kaminari_gate.jpg',
                    'title' => 'Kaminarimon Gate',
                    'subtitle' => "Giant red lantern is Asakusa’s most famous landmark and meeting spot, and you will find its image on countless local sightseeing brochures and souvenirs."
                ],
                [
                    'image' => 'resources/image/destination/tokyo_tower.jpg',
                    'title' => 'Tokyo Tower',
                    'subtitle' => "Must visit when you go to japan. Set foot onto the Tokyo Tower Main Observatory with this ticket and see the beautiful citywide panorama."
                ]
            ];
            $whySouldStay = [
                [
                    "image" => '<svg class="w-12 h-12" width="48" height="48" viewBox="0 0 48 48"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M41.7564 40.042H6.00049V43H41.7564V40.042Z"
                        fill="url(#paint0_linear_268_866)" />
                    <path d="M39.809 34.8574H7.94727V37.8155H39.809V34.8574Z"
                        fill="url(#paint1_linear_268_866)" />
                    <path d="M23.878 5L6 13.6159V15.8997H41.756V13.6159L23.878 5Z"
                        fill="url(#paint2_linear_268_866)" />
                    <path
                        d="M7.50439 18.1265V20.8736H10.3366V32.631H16.0538V20.8736H21.0193V32.631H26.7364V20.8736H31.7019V32.631H37.4191V20.8736H40.2513V18.1265H7.50439Z"
                        fill="url(#paint3_linear_268_866)" />
                    <defs>
                        <linearGradient id="paint0_linear_268_866" x1="6.00049" y1="40.042"
                            x2="6.48659" y2="45.9179" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_268_866" x1="7.94727" y1="34.8574"
                            x2="8.49182" y2="40.723" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint2_linear_268_866" x1="6" y1="5"
                            x2="12.0802" y2="24.9459" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint3_linear_268_866" x1="7.50439" y1="18.1265"
                            x2="18.2459" y2="42.3777" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                    </defs>
                </svg>',
                    "content" => "Our Tokyo Bootcamp Class is near with natural wonders in japan for relaxing between classes "
                ],
                [
                    "image" => '<svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M23.9999 2.25C19.7962 2.27657 15.7753 3.97196 12.8216 6.96321C9.86787 9.95446 8.22341 13.9965 8.24995 18.2003C8.24995 31.9747 23.9999 45.75 23.9999 45.75C23.9999 45.75 39.75 31.9747 39.75 18.2003C39.7765 13.9965 38.132 9.95446 35.1783 6.96321C32.2246 3.97196 28.2037 2.27657 23.9999 2.25ZM23.9999 31.5C21.3299 31.5 18.7198 30.7082 16.4998 29.2248C14.2797 27.7414 12.5494 25.633 11.5276 23.1662C10.5058 20.6994 10.2384 17.985 10.7593 15.3663C11.2802 12.7475 12.566 10.3421 14.454 8.45406C16.342 6.56605 18.7475 5.2803 21.3662 4.7594C23.985 4.2385 26.6994 4.50584 29.1662 5.52763C31.633 6.54941 33.7414 8.27974 35.2248 10.4998C36.7082 12.7199 37.5 15.33 37.5 18C37.4958 21.5791 36.0721 25.0105 33.5413 27.5413C31.0105 30.0722 27.5791 31.4958 23.9999 31.5Z"
                        fill="url(#paint0_linear_268_881)" />
                    <path d="M27 15.75H30V22.5H27V15.75Z" fill="url(#paint1_linear_268_881)" />
                    <path d="M22.5 15.75H25.5V22.5H22.5V15.75Z" fill="url(#paint2_linear_268_881)" />
                    <path
                        d="M24 6C21.6266 6 19.3066 6.70379 17.3332 8.02236C15.3598 9.34094 13.8217 11.2151 12.9135 13.4078C12.0052 15.6005 11.7676 18.0133 12.2306 20.3411C12.6936 22.6689 13.8365 24.8071 15.5147 26.4853C17.193 28.1635 19.3311 29.3064 21.6589 29.7694C23.9867 30.2324 26.3995 29.9948 28.5922 29.0866C30.7849 28.1783 32.6591 26.6402 33.9776 24.6668C35.2962 22.6935 36 20.3734 36 18C35.9962 14.8186 34.7307 11.7685 32.4811 9.51888C30.2315 7.26926 27.1814 6.00377 24 6ZM33 24H15V22.5H16.5V15.75H14.25L24 9L33.75 15.75H31.5V22.5H33V24Z"
                        fill="url(#paint3_linear_268_881)" />
                    <path d="M18 15.75H21V22.5H18V15.75Z" fill="url(#paint4_linear_268_881)" />
                    <defs>
                        <linearGradient id="paint0_linear_268_881" x1="8.24963" y1="2.25"
                            x2="49.5783" y2="32.1782" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_268_881" x1="27" y1="15.75"
                            x2="32.0103" y2="17.9768" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint2_linear_268_881" x1="22.5" y1="15.75"
                            x2="27.5103" y2="17.9768" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint3_linear_268_881" x1="12" y1="6"
                            x2="36" y2="30" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint4_linear_268_881" x1="18" y1="15.75"
                            x2="23.0103" y2="17.9768" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                    </defs>
                </svg>',
                    "content" => "Japan truly lives in the future and past at the same time. You can find a lot of incredible innovation, rich in culture, and technology, also enjoying beautiful and diverse history. The stunning, diverse scenery with mountains and breathtaking views, which are much appreciated by the Japanese."
                ],
                [
                    "image" => '<svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M24 2C19.6488 2 15.3953 3.29028 11.7775 5.70767C8.15958 8.12506 5.33979 11.561 3.67466 15.581C2.00953 19.6009 1.57386 24.0244 2.42273 28.292C3.27161 32.5596 5.36691 36.4796 8.44366 39.5564C11.5204 42.6331 15.4404 44.7284 19.708 45.5773C23.9756 46.4261 28.3991 45.9905 32.419 44.3253C36.439 42.6602 39.875 39.8404 42.2923 36.2225C44.7097 32.6047 46 28.3512 46 24C46 18.1652 43.6822 12.5695 39.5564 8.44365C35.4306 4.31785 29.8348 2 24 2ZM15.057 6.13L16.25 6.958C16.5139 7.14184 16.7277 7.38863 16.872 7.676L17.172 8.276C17.3311 8.59488 17.576 8.86309 17.8791 9.0505C18.1823 9.23792 18.5316 9.33714 18.888 9.337H21.021C21.53 9.337 22.0181 9.53918 22.3779 9.89906C22.7378 10.2589 22.94 10.747 22.94 11.256V11.294C22.9403 11.6504 22.8411 11.9998 22.6537 12.303C22.4662 12.6061 22.198 12.851 21.879 13.01L16.762 15.57C16.6904 15.6049 16.6212 15.6447 16.555 15.689L13.936 17.435C13.658 17.6207 13.433 17.8753 13.283 18.174L12.894 18.956C12.7596 19.2218 12.6895 19.5156 12.6895 19.8135C12.6895 20.1114 12.7596 20.4052 12.894 20.671C13.0738 21.0316 13.1357 21.4395 13.071 21.8372C13.0062 22.2349 12.818 22.6021 12.533 22.887L12.476 22.945C12.1734 23.2476 11.7783 23.4404 11.3536 23.4925C10.9288 23.5447 10.4988 23.4534 10.132 23.233L6.78501 21.223C6.3924 20.987 6.09699 20.6185 5.95201 20.184L5.12901 17.714C5.09101 17.714 5.06401 17.702 5.02901 17.701C6.70747 12.6682 10.3139 8.50683 15.057 6.13ZM26.081 31.123C26.0812 31.262 26.0589 31.4001 26.015 31.532L25.13 34.186C25.0669 34.3767 24.96 34.5499 24.818 34.692L23.218 36.292C23.0369 36.4727 22.9137 36.7031 22.864 36.954L22.017 41.186C21.9778 41.3787 21.8952 41.5599 21.7755 41.7158C21.6558 41.8718 21.502 41.9984 21.326 42.086L20.632 42.434C20.3887 42.5548 20.1136 42.5963 19.8455 42.5527C19.5773 42.5091 19.3296 42.3826 19.137 42.191L17.851 40.905C17.7527 40.8062 17.6707 40.6924 17.608 40.568L16.791 38.934C16.7018 38.754 16.6552 38.5559 16.655 38.355V34.229C16.6546 33.9885 16.5874 33.7528 16.461 33.5482C16.3346 33.3436 16.1539 33.178 15.939 33.07L14.867 32.535C14.6647 32.4346 14.4923 32.2829 14.367 32.095L12.68 29.564C12.538 29.3515 12.4621 29.1016 12.462 28.846V27.946C12.4626 27.7057 12.5299 27.4702 12.6563 27.2658C12.7827 27.0613 12.9633 26.896 13.178 26.788L14.171 26.288C14.4219 26.1631 14.6251 25.9598 14.75 25.709L15.25 24.716C15.3577 24.5017 15.5227 24.3214 15.7265 24.1951C15.9303 24.0687 16.1652 24.0012 16.405 24H18.211C18.3811 23.9999 18.5496 24.0333 18.7067 24.0983C18.8639 24.1633 19.0067 24.2587 19.127 24.379L19.416 24.668C19.6591 24.9107 19.9885 25.0473 20.332 25.048H20.6C20.9439 25.0493 21.2733 25.1869 21.516 25.4305C21.7587 25.6742 21.895 26.0041 21.895 26.348C21.8956 26.5882 21.9627 26.8236 22.0889 27.028C22.2151 27.2325 22.3955 27.3979 22.61 27.506L25.37 28.885C25.5847 28.9932 25.7652 29.1588 25.8914 29.3634C26.0176 29.568 26.0847 29.8036 26.085 30.044L26.081 31.123ZM31.351 12.114C31.4402 11.898 31.5711 11.7016 31.736 11.536L33.527 9.746C33.662 9.61116 33.8176 9.49874 33.988 9.413L35.868 8.473C36.0322 8.39466 36.2077 8.34236 36.388 8.318C38.5475 10.0205 40.3338 12.1489 41.636 14.571H40.752C40.2807 14.571 39.8286 14.384 39.495 14.051L39.279 13.835C38.9455 13.5017 38.4935 13.3143 38.022 13.314H36.664C36.3863 13.3132 36.1123 13.3776 35.864 13.502L34.102 14.384C33.8536 14.508 33.5796 14.572 33.302 14.571H32.985C32.6929 14.5708 32.4052 14.4986 32.1476 14.3608C31.89 14.223 31.6703 14.0238 31.508 13.7809C31.3456 13.538 31.2457 13.2588 31.2169 12.9681C31.1881 12.6774 31.2314 12.384 31.343 12.114H31.351ZM38.89 37.319L38.76 37C38.6891 36.7861 38.653 36.5623 38.653 36.337V34.028C38.6529 33.7028 38.5772 33.382 38.432 33.091L36.778 29.785C36.6328 29.494 36.5571 29.1732 36.557 28.848V28.542C36.557 28.185 36.4657 27.8339 36.2919 27.5221C36.118 27.2103 35.8674 26.9481 35.5637 26.7604C35.2601 26.5726 34.9135 26.4656 34.5569 26.4494C34.2002 26.4333 33.8454 26.5085 33.526 26.668L32.809 27.027C32.5183 27.1721 32.1979 27.2477 31.873 27.248H31.782C31.3422 27.2472 30.9138 27.1084 30.5571 26.8512C30.2004 26.5939 29.9335 26.2311 29.794 25.814L29.332 24.427C29.2607 24.2132 29.2242 23.9894 29.224 23.764V22.083C29.224 21.7381 29.3091 21.3985 29.4719 21.0945C29.6346 20.7904 29.87 20.5312 30.157 20.34L32.065 19.068C32.2647 18.9347 32.486 18.837 32.719 18.779L35.965 17.967C36.352 17.8704 36.7585 17.886 37.137 18.012L39.377 18.759C39.5911 18.8303 39.8153 18.8668 40.041 18.867H43.31C44.1779 22.0667 44.228 25.4332 43.4557 28.6573C42.6834 31.8814 41.1134 34.8598 38.89 37.319Z"
                        fill="url(#paint0_linear_268_890)" />
                    <defs>
                        <linearGradient id="paint0_linear_268_890" x1="2" y1="2"
                            x2="46" y2="46" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                    </defs>
                </svg>',
                    "content" => "Offers a rich social program, include organized daily trips around Tokyo and other popular destinations"
                ],
            ];
        } elseif ($slug == 'South Korea') {
            $detail = "In South Korea";
            $heroImages = ['resources/image/ilustration/south_korea_hero.png',];
            $destinations = [
                [
                    'image' => 'resources/image/destination/namsan_tower.jpg',
                    'title' => 'Namsan Tower',
                    'subtitle' => "Gives tourists a panoramic view of the city like no other. Forget for a moment the hustle and bustle of the metropolis while the beautiful panorama of Seoul stretches right in front of you."
                ],
                [
                    'image' => 'resources/image/destination/nami_island.jpg',
                    'title' => 'Nami Island',
                    'subtitle' => "Breath-taking place filled with picture-perfect landscapes. Some of the things to do in Nami Island include strolling along the scenic tree lanes, cycling around the island, and exploring the riverside. If you want to laze around and just appreciate nature, you’ll love the picturesque garden surrounding the place."
                ],
                [
                    'image' => 'resources/image/destination/bukchon_hanok_village.jpg',
                    'title' => 'Bukchon Hanok Village',
                    'subtitle' => "Surrounded by Gyeongbokgung Palace, Changdeokgung Palace and Jongmyo Shrine, Bukchon Hanok Village is home to hundreds of traditional houses, called hanok, that date back to the Joseon dynasty."
                ]
            ];
            $whySouldStay = [
                [
                    "image" => '<svg class="w-12 h-12" width="48" height="48" viewBox="0 0 48 48"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M41.7564 40.042H6.00049V43H41.7564V40.042Z"
                        fill="url(#paint0_linear_268_866)" />
                    <path d="M39.809 34.8574H7.94727V37.8155H39.809V34.8574Z"
                        fill="url(#paint1_linear_268_866)" />
                    <path d="M23.878 5L6 13.6159V15.8997H41.756V13.6159L23.878 5Z"
                        fill="url(#paint2_linear_268_866)" />
                    <path
                        d="M7.50439 18.1265V20.8736H10.3366V32.631H16.0538V20.8736H21.0193V32.631H26.7364V20.8736H31.7019V32.631H37.4191V20.8736H40.2513V18.1265H7.50439Z"
                        fill="url(#paint3_linear_268_866)" />
                    <defs>
                        <linearGradient id="paint0_linear_268_866" x1="6.00049" y1="40.042"
                            x2="6.48659" y2="45.9179" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_268_866" x1="7.94727" y1="34.8574"
                            x2="8.49182" y2="40.723" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint2_linear_268_866" x1="6" y1="5"
                            x2="12.0802" y2="24.9459" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint3_linear_268_866" x1="7.50439" y1="18.1265"
                            x2="18.2459" y2="42.3777" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                    </defs>
                </svg>',
                    "content" => "Our bootcamp class in South Korea is surrounded by futuristic modernity and traditional neighborhoods in the corner for you to visit. "
                ],
                [
                    "image" => '<svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M23.9999 2.25C19.7962 2.27657 15.7753 3.97196 12.8216 6.96321C9.86787 9.95446 8.22341 13.9965 8.24995 18.2003C8.24995 31.9747 23.9999 45.75 23.9999 45.75C23.9999 45.75 39.75 31.9747 39.75 18.2003C39.7765 13.9965 38.132 9.95446 35.1783 6.96321C32.2246 3.97196 28.2037 2.27657 23.9999 2.25ZM23.9999 31.5C21.3299 31.5 18.7198 30.7082 16.4998 29.2248C14.2797 27.7414 12.5494 25.633 11.5276 23.1662C10.5058 20.6994 10.2384 17.985 10.7593 15.3663C11.2802 12.7475 12.566 10.3421 14.454 8.45406C16.342 6.56605 18.7475 5.2803 21.3662 4.7594C23.985 4.2385 26.6994 4.50584 29.1662 5.52763C31.633 6.54941 33.7414 8.27974 35.2248 10.4998C36.7082 12.7199 37.5 15.33 37.5 18C37.4958 21.5791 36.0721 25.0105 33.5413 27.5413C31.0105 30.0722 27.5791 31.4958 23.9999 31.5Z"
                        fill="url(#paint0_linear_268_881)" />
                    <path d="M27 15.75H30V22.5H27V15.75Z" fill="url(#paint1_linear_268_881)" />
                    <path d="M22.5 15.75H25.5V22.5H22.5V15.75Z" fill="url(#paint2_linear_268_881)" />
                    <path
                        d="M24 6C21.6266 6 19.3066 6.70379 17.3332 8.02236C15.3598 9.34094 13.8217 11.2151 12.9135 13.4078C12.0052 15.6005 11.7676 18.0133 12.2306 20.3411C12.6936 22.6689 13.8365 24.8071 15.5147 26.4853C17.193 28.1635 19.3311 29.3064 21.6589 29.7694C23.9867 30.2324 26.3995 29.9948 28.5922 29.0866C30.7849 28.1783 32.6591 26.6402 33.9776 24.6668C35.2962 22.6935 36 20.3734 36 18C35.9962 14.8186 34.7307 11.7685 32.4811 9.51888C30.2315 7.26926 27.1814 6.00377 24 6ZM33 24H15V22.5H16.5V15.75H14.25L24 9L33.75 15.75H31.5V22.5H33V24Z"
                        fill="url(#paint3_linear_268_881)" />
                    <path d="M18 15.75H21V22.5H18V15.75Z" fill="url(#paint4_linear_268_881)" />
                    <defs>
                        <linearGradient id="paint0_linear_268_881" x1="8.24963" y1="2.25"
                            x2="49.5783" y2="32.1782" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_268_881" x1="27" y1="15.75"
                            x2="32.0103" y2="17.9768" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint2_linear_268_881" x1="22.5" y1="15.75"
                            x2="27.5103" y2="17.9768" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint3_linear_268_881" x1="12" y1="6"
                            x2="36" y2="30" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                        <linearGradient id="paint4_linear_268_881" x1="18" y1="15.75"
                            x2="23.0103" y2="17.9768" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                    </defs>
                </svg>',
                    "content" => "South Korea has a lot to offer: a rich and unique Asian culture, UNESCO World Heritage Sites, delicious and healthy cuisine and a world-class city: Seoul. "
                ],
                [
                    "image" => '<svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M24 2C19.6488 2 15.3953 3.29028 11.7775 5.70767C8.15958 8.12506 5.33979 11.561 3.67466 15.581C2.00953 19.6009 1.57386 24.0244 2.42273 28.292C3.27161 32.5596 5.36691 36.4796 8.44366 39.5564C11.5204 42.6331 15.4404 44.7284 19.708 45.5773C23.9756 46.4261 28.3991 45.9905 32.419 44.3253C36.439 42.6602 39.875 39.8404 42.2923 36.2225C44.7097 32.6047 46 28.3512 46 24C46 18.1652 43.6822 12.5695 39.5564 8.44365C35.4306 4.31785 29.8348 2 24 2ZM15.057 6.13L16.25 6.958C16.5139 7.14184 16.7277 7.38863 16.872 7.676L17.172 8.276C17.3311 8.59488 17.576 8.86309 17.8791 9.0505C18.1823 9.23792 18.5316 9.33714 18.888 9.337H21.021C21.53 9.337 22.0181 9.53918 22.3779 9.89906C22.7378 10.2589 22.94 10.747 22.94 11.256V11.294C22.9403 11.6504 22.8411 11.9998 22.6537 12.303C22.4662 12.6061 22.198 12.851 21.879 13.01L16.762 15.57C16.6904 15.6049 16.6212 15.6447 16.555 15.689L13.936 17.435C13.658 17.6207 13.433 17.8753 13.283 18.174L12.894 18.956C12.7596 19.2218 12.6895 19.5156 12.6895 19.8135C12.6895 20.1114 12.7596 20.4052 12.894 20.671C13.0738 21.0316 13.1357 21.4395 13.071 21.8372C13.0062 22.2349 12.818 22.6021 12.533 22.887L12.476 22.945C12.1734 23.2476 11.7783 23.4404 11.3536 23.4925C10.9288 23.5447 10.4988 23.4534 10.132 23.233L6.78501 21.223C6.3924 20.987 6.09699 20.6185 5.95201 20.184L5.12901 17.714C5.09101 17.714 5.06401 17.702 5.02901 17.701C6.70747 12.6682 10.3139 8.50683 15.057 6.13ZM26.081 31.123C26.0812 31.262 26.0589 31.4001 26.015 31.532L25.13 34.186C25.0669 34.3767 24.96 34.5499 24.818 34.692L23.218 36.292C23.0369 36.4727 22.9137 36.7031 22.864 36.954L22.017 41.186C21.9778 41.3787 21.8952 41.5599 21.7755 41.7158C21.6558 41.8718 21.502 41.9984 21.326 42.086L20.632 42.434C20.3887 42.5548 20.1136 42.5963 19.8455 42.5527C19.5773 42.5091 19.3296 42.3826 19.137 42.191L17.851 40.905C17.7527 40.8062 17.6707 40.6924 17.608 40.568L16.791 38.934C16.7018 38.754 16.6552 38.5559 16.655 38.355V34.229C16.6546 33.9885 16.5874 33.7528 16.461 33.5482C16.3346 33.3436 16.1539 33.178 15.939 33.07L14.867 32.535C14.6647 32.4346 14.4923 32.2829 14.367 32.095L12.68 29.564C12.538 29.3515 12.4621 29.1016 12.462 28.846V27.946C12.4626 27.7057 12.5299 27.4702 12.6563 27.2658C12.7827 27.0613 12.9633 26.896 13.178 26.788L14.171 26.288C14.4219 26.1631 14.6251 25.9598 14.75 25.709L15.25 24.716C15.3577 24.5017 15.5227 24.3214 15.7265 24.1951C15.9303 24.0687 16.1652 24.0012 16.405 24H18.211C18.3811 23.9999 18.5496 24.0333 18.7067 24.0983C18.8639 24.1633 19.0067 24.2587 19.127 24.379L19.416 24.668C19.6591 24.9107 19.9885 25.0473 20.332 25.048H20.6C20.9439 25.0493 21.2733 25.1869 21.516 25.4305C21.7587 25.6742 21.895 26.0041 21.895 26.348C21.8956 26.5882 21.9627 26.8236 22.0889 27.028C22.2151 27.2325 22.3955 27.3979 22.61 27.506L25.37 28.885C25.5847 28.9932 25.7652 29.1588 25.8914 29.3634C26.0176 29.568 26.0847 29.8036 26.085 30.044L26.081 31.123ZM31.351 12.114C31.4402 11.898 31.5711 11.7016 31.736 11.536L33.527 9.746C33.662 9.61116 33.8176 9.49874 33.988 9.413L35.868 8.473C36.0322 8.39466 36.2077 8.34236 36.388 8.318C38.5475 10.0205 40.3338 12.1489 41.636 14.571H40.752C40.2807 14.571 39.8286 14.384 39.495 14.051L39.279 13.835C38.9455 13.5017 38.4935 13.3143 38.022 13.314H36.664C36.3863 13.3132 36.1123 13.3776 35.864 13.502L34.102 14.384C33.8536 14.508 33.5796 14.572 33.302 14.571H32.985C32.6929 14.5708 32.4052 14.4986 32.1476 14.3608C31.89 14.223 31.6703 14.0238 31.508 13.7809C31.3456 13.538 31.2457 13.2588 31.2169 12.9681C31.1881 12.6774 31.2314 12.384 31.343 12.114H31.351ZM38.89 37.319L38.76 37C38.6891 36.7861 38.653 36.5623 38.653 36.337V34.028C38.6529 33.7028 38.5772 33.382 38.432 33.091L36.778 29.785C36.6328 29.494 36.5571 29.1732 36.557 28.848V28.542C36.557 28.185 36.4657 27.8339 36.2919 27.5221C36.118 27.2103 35.8674 26.9481 35.5637 26.7604C35.2601 26.5726 34.9135 26.4656 34.5569 26.4494C34.2002 26.4333 33.8454 26.5085 33.526 26.668L32.809 27.027C32.5183 27.1721 32.1979 27.2477 31.873 27.248H31.782C31.3422 27.2472 30.9138 27.1084 30.5571 26.8512C30.2004 26.5939 29.9335 26.2311 29.794 25.814L29.332 24.427C29.2607 24.2132 29.2242 23.9894 29.224 23.764V22.083C29.224 21.7381 29.3091 21.3985 29.4719 21.0945C29.6346 20.7904 29.87 20.5312 30.157 20.34L32.065 19.068C32.2647 18.9347 32.486 18.837 32.719 18.779L35.965 17.967C36.352 17.8704 36.7585 17.886 37.137 18.012L39.377 18.759C39.5911 18.8303 39.8153 18.8668 40.041 18.867H43.31C44.1779 22.0667 44.228 25.4332 43.4557 28.6573C42.6834 31.8814 41.1134 34.8598 38.89 37.319Z"
                        fill="url(#paint0_linear_268_890)" />
                    <defs>
                        <linearGradient id="paint0_linear_268_890" x1="2" y1="2"
                            x2="46" y2="46" gradientUnits="userSpaceOnUse">
                            <stop stop-color="'.$themeColor.'" />
                            <stop offset="1" stop-color="'.$themeColor.'" />
                        </linearGradient>
                    </defs>
                </svg>',
                    "content" => "Complete your study-trip with organized daily trips around korea palace village and futuristic city in south korea. Meet friendly local, meet our international experts, and gain your network in Seoul."
                ],
            ];
        }

        if (in_array(strtolower($slug), ['tokyo', 'south korea'])) {
            return view('landing_page.coming_soon', compact('slug'));
        }

        // return view('landing_page.detail', compact('detail', 'heroImages', 'slug', 'course', 'destinations', 'whySouldStay', 'programFee', 'themeColor', 'themeColor2', 'themeColor3'));
        if ($course == 'data science') {
            if (strtolower($slug) == 'indonesia') {
                return view('landing_page.data_science_id', compact('detail', 'heroImages','slug', 'course', 'destinations', 'whySouldStay', 'programFee', 'themeColor', 'themeColor2', 'themeColor3'));
            } else {
                return view('landing_page.data_science', compact('detail', 'heroImages','slug', 'course', 'destinations', 'whySouldStay', 'programFee', 'themeColor', 'themeColor2', 'themeColor3'));
            }
        } elseif ($course == 'digital marketing') {
            if (strtolower($slug) == 'indonesia') {
                return view('landing_page.digital_marketing_id', compact('detail', 'heroImages','slug', 'course','destinations', 'whySouldStay', 'programFee', 'themeColor', 'themeColor2', 'themeColor3'));   
            } else {
                return view('landing_page.digital_marketing', compact('detail', 'heroImages','slug', 'course','destinations', 'whySouldStay', 'programFee', 'themeColor', 'themeColor2', 'themeColor3'));   
            }
        } elseif ($course == 'web development') {
            return view('landing_page.web_development', compact('detail', 'heroImages','slug', 'course', 'destinations', 'whySouldStay', 'programFee', 'themeColor', 'themeColor2', 'themeColor3'));
        }
    }
}
