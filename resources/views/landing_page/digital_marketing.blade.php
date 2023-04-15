<x-landing-layout>
    @push('scripts')
        <script>
            const sideNavMenu = document.querySelectorAll('.side-nav-menu')
            sideNavMenu.forEach(element => {
                element.addEventListener('click', function(e) {
                    const target = event.target;
                    const parent = target.parentNode;
                    removeAllSelected();
                    setTimeout(() => {
                        const previousElement = target.previousElementSibling;
                        if (parent.getAttribute('href') == window.location.hash) {
                            if (target.classList.contains('text-[#A5A5A5]')) {
                                target.classList.replace("text-[#A5A5A5]", "text-[#FF9500]");
                            }
                            if (target.classList.contains('font-medium')) {
                                target.classList.replace("font-medium", "font-bold");
                            }
                            if (previousElement.classList.contains('bg-[#A5A5A5]')) {
                                previousElement.classList.replace("bg-[#A5A5A5]", "bg-[#FF9500]");
                            }
                            if (previousElement.classList.contains('w-0.5')) {
                                previousElement.classList.replace("w-0.5", "w-1");
                            }
                        }
                    }, 100);

                })
            });

            const collapseMenus = document.querySelectorAll('.collapse-menu')
            // loop through the selected elements and add a click event listener
            collapseMenus.forEach(menu => {
                menu.addEventListener('click', () => {
                    const content = menu.querySelector('.collapse-menu-detail');
                    content.classList.toggle('hidden');

                    const rotate = menu.querySelector('.rotate-0');
                    if (rotate) {
                        rotate.classList.replace('rotate-0', 'rotate-180')
                    } else {
                        const rotateup = menu.querySelector('.rotate-180');
                        if (rotateup) {
                            rotateup.classList.replace('rotate-180', 'rotate-0')
                        }
                    }


                });
            });

            function removeAllSelected() {
                sideNavMenu.forEach(element => {
                    Array.from(element.children).forEach(item => {
                        console.log(item.classList)
                        if (item.classList.contains('text-[#FF9500]')) {
                            item.classList.replace("text-[#FF9500]", "text-[#A5A5A5]");
                        }

                        if (item.classList.contains('font-bold')) {
                            item.classList.replace("font-bold", "font-medium");
                        }


                        if (item.classList.contains('bg-[#FF9500]')) {
                            item.classList.replace("bg-[#FF9500]", "bg-[#A5A5A5]");
                        }

                        if (item.classList.contains('w-1')) {
                            item.classList.replace("w-1", "w-0.5");
                        }
                    })
                })

            }

            const destinationScroller = document.getElementById('destination-navigation');
            const schoolChange = document.getElementById('study-change-location');
            const portoSlider = document.getElementById('portofolio-slider');
            const scrollAmount = 400;
            
            document.getElementById('previews-destination').addEventListener('click', function() {
                destinationScroller.scroll({ left: destinationScroller.scrollLeft - scrollAmount, behavior: 'smooth' });
            })

            document.getElementById('next-destination').addEventListener('click', function() {
                destinationScroller.scroll({ left: destinationScroller.scrollLeft + scrollAmount, behavior: 'smooth' });
            })

            document.getElementById('previews-study-change-location').addEventListener('click', function() {
                schoolChange.scroll({ left: schoolChange.scrollLeft - scrollAmount, behavior: 'smooth' });
            })

            document.getElementById('next-study-change-location').addEventListener('click', function() {
                schoolChange.scroll({ left: schoolChange.scrollLeft + scrollAmount, behavior: 'smooth' });
            })

            document.getElementById('previews-portofolio').addEventListener('click', function() {
                portoSlider.scroll({ left: portoSlider.scrollLeft - scrollAmount, behavior: 'smooth' });
            })

            document.getElementById('next-portofolio').addEventListener('click', function() {
                portoSlider.scroll({ left: portoSlider.scrollLeft + scrollAmount, behavior: 'smooth' });
            })
        </script>
    @endpush
    <section class="hero static bg-gradient-to-t from-[#FFEFE3] to-[#FFFFFF] w-full h-[73rem] lg:h-[46rem] -mt-20">
        <svg class="absolute left-0 top-40 h-96 w-96" viewBox="0 0 572 624" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.3" filter="url(#filter0_f_33_300)">
                <circle cx="144.5" cy="348.5" r="193.5" fill="#FFD770" />
            </g>
            <defs>
                <filter id="filter0_f_33_300" x="-283" y="-79" width="855" height="855"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feGaussianBlur stdDeviation="117" result="effect1_foregroundBlur_33_300" />
                </filter>
            </defs>
        </svg>
        <div class="absolute w-full top-28">
            <div class="w-full lg:w-10/12 mx-auto mb-20">
                <div class="flex flex-wrap lg:flex-nowrap lg:flex-row justify-between items-center">
                    <div class="lg:hidden flex-auto w-full lg:w-4/12">
                        @if (count($heroImages) == 1 && $slug == 'online')
                            @foreach ($heroImages as $item)
                                <img src="{{ Vite::asset($item) }}" alt="ilustration 1" data-aos="fade-up">
                            @endforeach
                        @else
                            <div class="p-6 lg:ml-36">
                                <div class="grid grid-rows-2 grid-flow-col gap-4">
                                    <div class="row-span-2 relative" data-aos="fade-up">
                                        <div class="absolute flex w-full h-full justify-center items-center">
                                            <svg class="" width="44" height="44" viewBox="0 0 44 44"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="22" cy="22" r="22" fill="white" />
                                                <path
                                                    d="M17 15.8685C17 15.0698 17.8901 14.5934 18.5547 15.0365L27.5662 21.0442C28.2051 21.4701 28.1455 22.4272 27.4587 22.7706L18.4472 27.2764C17.7823 27.6088 17 27.1253 17 26.382V15.8685Z"
                                                    fill="#FF9500" />
                                            </svg>
                                            <div
                                                class="absolute flex w-full h-full rounded-xl bg-gradient-to-b from-indigo-800 opacity-50">
                                            </div>
                                        </div>

                                        <img src="{{ Vite::asset($heroImages[0]) }}" alt="ilustration 1"
                                            class=" h-full object-cover rounded-lg">
                                    </div>
                                    <div class="col-span-1"><img src="{{ Vite::asset($heroImages[1]) }}"
                                            alt="ilustration 2" class=" object-cover rounded-lg" data-aos="fade-up">
                                    </div>
                                    <div class="row-span-1 col-span-1"><img src="{{ Vite::asset($heroImages[2]) }}"
                                            alt="ilustration 3" class=" object-cover rounded-lg" data-aos="fade-up">
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                    <div class="p-6 lg:p-0 flex-auto w-full lg:w-6/12">
                        <div class="text-2xl lg:text-5xl font-black mb-6 lg:mt-16" data-aos="fade-up">
                            {{ ucwords($course) }} Bootcamp
                            <div class="text-[#FF9500]">
                                {{ $detail }}</div>
                        </div>
                        <div class="text-[#262626] font-normal text-sm lg:text-2xl mb-6 text-opacity-75 leading-5 lg:leading-9 w-5/7"
                            data-aos="fade-up">Learn and experience
                            real projects of Digital Marketing and land your dream job within 9 months.</div>
                        <div class="flex flex-wrap">
                            <button
                                class="text-[#FF7A00] px-4 py-3 mr-6 rounded-full text-sm font-bold mb-4 lg:mb-11 outline outline-1 outline-[#FF7A00]"
                                data-aos="fade-up">Online - Hybrid
                            </button>
                            <button
                                class="text-[#FF7A00] px-4 py-3 mr-6 rounded-full text-sm font-bold mb-4 lg:mb-11 outline outline-1 outline-[#FF7A00]"data-aos="fade-up">Beginner
                                Friendly</button>
                            <button
                                class="text-[#FF7A00] px-4 py-3 mr-6 rounded-full text-sm font-bold mb-4 lg:mb-11 outline outline-1 outline-[#FF7A00]"data-aos="fade-up">35
                                limited seat</button>
                        </div>
                        <div class="w-full lg:w-11/12 bg-gray-50 rounded-full h-6 dark:bg-gray-200" data-aos="fade-up">
                            <div class="text-xs font-medium text-start p-1 leading-none rounded-full h-6 flex items-center"
                                style="width: 88%; background: linear-gradient(151.77deg, #FFB855 18.11%, #FFA220 39.42%, #FFB855 60.73%, #FFB855 82.05%, #FFA220 103.36%, #FFB855 124.67%, #FFA220 145.98%, #FFB855 167.29%);">
                                <span class="ml-6 font-bold text-xs text-white">88% seat has been filled</span>
                            </div>
                        </div>
                        <div class="flex flex-wrap lg:flex-nowrap lg:flex-row mt-8">
                            <button
                                class="bg-[#FF9500] px-10 py-2 rounded-md text-white text-lg font-bold mb-11 w-full lg:w-auto"
                                data-aos="fade-up">Choose
                                Destination</button>
                            <button
                                class="lg:ml-4 text-[#FF9500] px-10 py-2 rounded-md  text-lg font-bold mb-11 w-full lg:w-auto outline outline-1 outline-[#FF9500]"
                                data-aos="fade-up">Download
                                Syllabus</button>
                        </div>
                    </div>
                    <div class="hidden flex-auto w-4/12">
                        @if (count($heroImages) == 1 && $slug == 'online')
                            @foreach ($heroImages as $item)
                                <img src="{{ Vite::asset($item) }}" alt="ilustration 1" data-aos="fade-up">
                            @endforeach
                        @else
                            <div class="ml-36">
                                <div class="grid grid-rows-2 grid-flow-col gap-4">
                                    <div class="row-span-2 relative" data-aos="fade-up">
                                        <div class="absolute flex w-full h-full justify-center items-center">
                                            <svg class="" width="44" height="44" viewBox="0 0 44 44"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="22" cy="22" r="22"
                                                    fill="white" />
                                                <path
                                                    d="M17 15.8685C17 15.0698 17.8901 14.5934 18.5547 15.0365L27.5662 21.0442C28.2051 21.4701 28.1455 22.4272 27.4587 22.7706L18.4472 27.2764C17.7823 27.6088 17 27.1253 17 26.382V15.8685Z"
                                                    fill="#FF9500" />
                                            </svg>
                                            <div
                                                class="absolute flex w-full h-full rounded-xl bg-gradient-to-b from-indigo-800 opacity-50">
                                            </div>
                                        </div>

                                        <img src="{{ Vite::asset($heroImages[0]) }}" alt="ilustration 1"
                                            class=" h-full object-cover rounded-lg">
                                    </div>
                                    <div class="col-span-1"><img src="{{ Vite::asset($heroImages[1]) }}"
                                            alt="ilustration 2" class=" object-cover rounded-lg" data-aos="fade-up">
                                    </div>
                                    <div class="row-span-1 col-span-1"><img src="{{ Vite::asset($heroImages[2]) }}"
                                            alt="ilustration 3" class=" object-cover rounded-lg" data-aos="fade-up">
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="flex flex-row my-10" data-aos="fade-up">
        <div class="hidden lg:block w-4/12 relative">
            <div class="sticky top-10">
                <div class="w-52 mx-auto">
                    <p class="font-black text-2xl">Course Details Data Science</p>
                </div>
                <div class="flex flex-col w-3/6 mx-auto mt-6">
                    <a href="#overview" class="inline-flex items-center ml-4 side-nav-menu">
                        <div class="h-11 w-1 bg-[#FF9500] mr-4"></div>
                        <span class="text-[#FF9500] font-bold text-lg">Overview</span>
                    </a>
                    <a href="#learcnphase" class="inline-flex items-center ml-4 side-nav-menu">
                        <div class="h-11 w-0.5 bg-[#A5A5A5] mr-4"></div>
                        <span class="text-[#A5A5A5] font-medium text-lg">Learn Phase</span>
                    </a>
                    @if (count($destinations) > 0)
                        <a href="#destination" class="inline-flex items-center ml-4 side-nav-menu">
                            <div class="h-11 w-0.5 bg-[#A5A5A5] mr-4"></div>
                            <span class="text-[#A5A5A5] font-medium text-lg">Destination</span>
                        </a>
                    @endif
                    <a href="#studylocation" class="inline-flex items-center ml-4 side-nav-menu">
                        <div class="h-11 w-0.5 bg-[#A5A5A5] mr-4"></div>
                        <span class="text-[#A5A5A5] font-medium text-lg">Study Location</span>
                    </a>
                    <a href="#alumni" class="inline-flex items-center ml-4 side-nav-menu">
                        <div class="h-11 w-0.5 bg-[#A5A5A5] mr-4"></div>
                        <span class="text-[#A5A5A5] font-medium text-lg">All Alumni Story</span>
                    </a>
                    <a href="#portofolio" class="inline-flex items-center ml-4 side-nav-menu">
                        <div class="h-11 w-0.5 bg-[#A5A5A5] mr-4"></div>
                        <span class="text-[#A5A5A5] font-medium text-lg">Portofolio Alumni</span>
                    </a>
                    <a href="#gethired" class="inline-flex items-center ml-4 side-nav-menu">
                        <div class="h-11 w-0.5 bg-[#A5A5A5] mr-4"></div>
                        <span class="text-[#A5A5A5] font-medium text-lg">Get Hired</span>
                    </a>
                    <a href="#admissions" class="inline-flex items-center ml-4 side-nav-menu">
                        <div class="h-11 w-0.5 bg-[#A5A5A5] mr-4"></div>
                        <span class="text-[#A5A5A5] font-medium text-lg">Admission Process</span>
                    </a>
                    <button class="ml-4 mt-8 bg-[#FF9500] px-9 py-4 rounded-md text-white text-lg font-bold">Let's Get
                        Started</button>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-8/12">
            <section class="overview p-6 lg:p-0 w-full lg:w-11/12">
                <p class="font-bold text-base text-[#262626] mb-6" id="overview" data-aos="fade-up">OVERVIEW</p>
                <p class="font-black text-2xl lg:text-4xl mb-2" data-aos="fade-up">Why you should study in Istanbul?
                </p>
                <div class="flex flex-col mt-8">
                    <div class="bg-white rounded-xl p-6 shadow-sm my-3" data-aos="fade-up">
                        <div class="flex flex-row">
                            <div class="w-12 h-12 ">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
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
                                            <stop stop-color="#FFB72B" />
                                            <stop offset="1" stop-color="#FFA01B" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_268_866" x1="7.94727" y1="34.8574"
                                            x2="8.49182" y2="40.723" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FFB72B" />
                                            <stop offset="1" stop-color="#FFA01B" />
                                        </linearGradient>
                                        <linearGradient id="paint2_linear_268_866" x1="6" y1="5"
                                            x2="12.0802" y2="24.9459" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FFB72B" />
                                            <stop offset="1" stop-color="#FFA01B" />
                                        </linearGradient>
                                        <linearGradient id="paint3_linear_268_866" x1="7.50439" y1="18.1265"
                                            x2="18.2459" y2="42.3777" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FFB72B" />
                                            <stop offset="1" stop-color="#FFA01B" />
                                        </linearGradient>
                                    </defs>
                                </svg>

                            </div>
                            <p class="ml-6 font-medium text-xl text-[#262626] opacity-80">Our Bootcamp Istanbul Class
                                is near to beautiful historic building with an outdoor courtyard for relaxing between
                                classes</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm my-3" data-aos="fade-up">
                        <div class="flex flex-row">
                            <div class="w-12 h-12 ">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
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
                                            <stop stop-color="#FFB72B" />
                                            <stop offset="1" stop-color="#FFA01B" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_268_881" x1="27" y1="15.75"
                                            x2="32.0103" y2="17.9768" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FFB72B" />
                                            <stop offset="1" stop-color="#FFA01B" />
                                        </linearGradient>
                                        <linearGradient id="paint2_linear_268_881" x1="22.5" y1="15.75"
                                            x2="27.5103" y2="17.9768" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FFB72B" />
                                            <stop offset="1" stop-color="#FFA01B" />
                                        </linearGradient>
                                        <linearGradient id="paint3_linear_268_881" x1="12" y1="6"
                                            x2="36" y2="30" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FFB72B" />
                                            <stop offset="1" stop-color="#FFA01B" />
                                        </linearGradient>
                                        <linearGradient id="paint4_linear_268_881" x1="18" y1="15.75"
                                            x2="23.0103" y2="17.9768" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FFB72B" />
                                            <stop offset="1" stop-color="#FFA01B" />
                                        </linearGradient>
                                    </defs>
                                </svg>

                            </div>

                            <p class="ml-6 font-medium text-xl text-[#262626] opacity-80">Istanbul truly lives up to
                                its nickname: City of the World's Desire. Enjoy the wonders of Turkiye which include
                                more than 300+ fascinating museums with great story, 100+ great destination for
                                experiencing the miracle of Eurasian nature and stunning view , and an endless variety
                                of world-class food</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm my-3" data-aos="fade-up">
                        <div class="flex flex-row">
                            <div class="w-12 h-12 ">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M24 2C19.6488 2 15.3953 3.29028 11.7775 5.70767C8.15958 8.12506 5.33979 11.561 3.67466 15.581C2.00953 19.6009 1.57386 24.0244 2.42273 28.292C3.27161 32.5596 5.36691 36.4796 8.44366 39.5564C11.5204 42.6331 15.4404 44.7284 19.708 45.5773C23.9756 46.4261 28.3991 45.9905 32.419 44.3253C36.439 42.6602 39.875 39.8404 42.2923 36.2225C44.7097 32.6047 46 28.3512 46 24C46 18.1652 43.6822 12.5695 39.5564 8.44365C35.4306 4.31785 29.8348 2 24 2ZM15.057 6.13L16.25 6.958C16.5139 7.14184 16.7277 7.38863 16.872 7.676L17.172 8.276C17.3311 8.59488 17.576 8.86309 17.8791 9.0505C18.1823 9.23792 18.5316 9.33714 18.888 9.337H21.021C21.53 9.337 22.0181 9.53918 22.3779 9.89906C22.7378 10.2589 22.94 10.747 22.94 11.256V11.294C22.9403 11.6504 22.8411 11.9998 22.6537 12.303C22.4662 12.6061 22.198 12.851 21.879 13.01L16.762 15.57C16.6904 15.6049 16.6212 15.6447 16.555 15.689L13.936 17.435C13.658 17.6207 13.433 17.8753 13.283 18.174L12.894 18.956C12.7596 19.2218 12.6895 19.5156 12.6895 19.8135C12.6895 20.1114 12.7596 20.4052 12.894 20.671C13.0738 21.0316 13.1357 21.4395 13.071 21.8372C13.0062 22.2349 12.818 22.6022 12.533 22.887L12.476 22.945C12.1734 23.2476 11.7783 23.4404 11.3536 23.4925C10.9288 23.5447 10.4988 23.4534 10.132 23.233L6.78501 21.223C6.3924 20.987 6.09699 20.6185 5.95201 20.184L5.12901 17.714C5.09101 17.714 5.06401 17.702 5.02901 17.701C6.70747 12.6682 10.3139 8.50683 15.057 6.13ZM26.081 31.123C26.0812 31.262 26.0589 31.4001 26.015 31.532L25.13 34.186C25.0669 34.3767 24.96 34.5499 24.818 34.692L23.218 36.292C23.0369 36.4727 22.9137 36.7031 22.864 36.954L22.017 41.186C21.9778 41.3787 21.8952 41.5599 21.7755 41.7158C21.6558 41.8718 21.502 41.9984 21.326 42.086L20.632 42.434C20.3887 42.5548 20.1136 42.5963 19.8455 42.5527C19.5773 42.5091 19.3296 42.3826 19.137 42.191L17.851 40.905C17.7527 40.8062 17.6707 40.6924 17.608 40.568L16.791 38.934C16.7018 38.754 16.6552 38.5559 16.655 38.355V34.229C16.6546 33.9885 16.5874 33.7528 16.461 33.5482C16.3346 33.3436 16.1539 33.178 15.939 33.07L14.867 32.535C14.6647 32.4346 14.4923 32.2829 14.367 32.095L12.68 29.564C12.538 29.3515 12.4621 29.1016 12.462 28.846V27.946C12.4626 27.7057 12.5299 27.4702 12.6563 27.2658C12.7827 27.0614 12.9633 26.896 13.178 26.788L14.171 26.288C14.4219 26.1631 14.6251 25.9598 14.75 25.709L15.25 24.716C15.3577 24.5017 15.5227 24.3214 15.7265 24.1951C15.9303 24.0687 16.1652 24.0012 16.405 24H18.211C18.3811 23.9999 18.5496 24.0333 18.7067 24.0983C18.8639 24.1633 19.0067 24.2587 19.127 24.379L19.416 24.668C19.6591 24.9107 19.9885 25.0473 20.332 25.048H20.6C20.9439 25.0493 21.2733 25.1869 21.516 25.4305C21.7587 25.6742 21.895 26.0041 21.895 26.348C21.8956 26.5882 21.9627 26.8236 22.0889 27.028C22.2151 27.2325 22.3955 27.3979 22.61 27.506L25.37 28.885C25.5847 28.9932 25.7652 29.1588 25.8914 29.3634C26.0176 29.568 26.0847 29.8036 26.085 30.044L26.081 31.123ZM31.351 12.114C31.4402 11.898 31.5711 11.7016 31.736 11.536L33.527 9.746C33.662 9.61116 33.8176 9.49874 33.988 9.413L35.868 8.473C36.0322 8.39466 36.2077 8.34236 36.388 8.318C38.5475 10.0205 40.3338 12.1489 41.636 14.571H40.752C40.2807 14.571 39.8286 14.384 39.495 14.051L39.279 13.835C38.9455 13.5017 38.4935 13.3143 38.022 13.314H36.664C36.3863 13.3132 36.1123 13.3776 35.864 13.502L34.102 14.384C33.8536 14.508 33.5796 14.572 33.302 14.571H32.985C32.6929 14.5708 32.4052 14.4986 32.1476 14.3608C31.89 14.223 31.6703 14.0238 31.508 13.7809C31.3456 13.538 31.2457 13.2588 31.2169 12.9681C31.1881 12.6774 31.2314 12.384 31.343 12.114H31.351ZM38.89 37.319L38.76 37C38.6891 36.7861 38.653 36.5623 38.653 36.337V34.028C38.6529 33.7028 38.5772 33.382 38.432 33.091L36.778 29.785C36.6328 29.494 36.5571 29.1732 36.557 28.848V28.542C36.557 28.185 36.4657 27.8339 36.2919 27.5221C36.118 27.2103 35.8674 26.9481 35.5637 26.7604C35.2601 26.5726 34.9135 26.4656 34.5569 26.4494C34.2002 26.4333 33.8454 26.5085 33.526 26.668L32.809 27.027C32.5183 27.1721 32.1979 27.2477 31.873 27.248H31.782C31.3422 27.2472 30.9138 27.1084 30.5571 26.8512C30.2004 26.5939 29.9335 26.2311 29.794 25.814L29.332 24.427C29.2607 24.2132 29.2242 23.9894 29.224 23.764V22.083C29.224 21.7381 29.3091 21.3985 29.4719 21.0945C29.6346 20.7904 29.87 20.5312 30.157 20.34L32.065 19.068C32.2647 18.9347 32.486 18.837 32.719 18.779L35.965 17.967C36.352 17.8704 36.7585 17.886 37.137 18.012L39.377 18.759C39.5911 18.8303 39.8153 18.8668 40.041 18.867H43.31C44.1779 22.0667 44.228 25.4332 43.4557 28.6573C42.6834 31.8814 41.1134 34.8598 38.89 37.319Z"
                                        fill="url(#paint0_linear_268_890)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_268_890" x1="2" y1="2"
                                            x2="46" y2="46" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FFB72B" />
                                            <stop offset="1" stop-color="#FFA01B" />
                                        </linearGradient>
                                    </defs>
                                </svg>

                            </div>

                            <p class="ml-6 font-medium text-xl text-[#262626] opacity-80">Offers a rich social program,
                                including organized daily trips around Istanbul European Side & Asian Side</p>
                        </div>
                    </div>
                </div>
                <p class="font-black text-2xl lg:text-4xl mb-2 mt-6" data-aos="fade-up">WHY JOIN US?</p>
                <p class="font-normal text-base text-[#262626]" data-aos="fade-up">Master Data Science and see the
                    benefits after
                    graduation</p>
                <div class="flex flex-row overflow-x-auto lg:flex-wrap mt-8 justify-between">
                    <div class="w-full lg:w-1/3 mb-8" data-aos="fade-up">
                        <div
                            class="bg-white p-3 flex flex-col justify-center items-center mr-6 h-56 w-56 lg:w-auto shadow-sm">
                            <svg width="49" height="48" viewBox="0 0 49 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_79_3706)">
                                    <path
                                        d="M30.6667 13C29.5627 13 28.6667 12.104 28.6667 11V8H20.6667V11C20.6667 12.104 19.7707 13 18.6667 13C17.5627 13 16.6667 12.104 16.6667 11V8C16.6667 5.794 18.4607 4 20.6667 4H28.6667C30.8727 4 32.6667 5.794 32.6667 8V11C32.6667 12.104 31.7707 13 30.6667 13Z"
                                        fill="url(#paint0_linear_79_3706)" />
                                    <path
                                        d="M26.0867 30.7602C25.7267 30.9002 25.2067 31.0002 24.6667 31.0002C24.1267 31.0002 23.6067 30.9002 23.1267 30.7202L0.666656 23.2402V38.5002C0.666656 41.5402 3.12666 44.0002 6.16666 44.0002H43.1667C46.2067 44.0002 48.6667 41.5402 48.6667 38.5002V23.2402L26.0867 30.7602Z"
                                        fill="url(#paint1_linear_79_3706)" />
                                    <path
                                        d="M48.6667 15.5V20.08L25.1467 27.92C24.9867 27.98 24.8267 28 24.6667 28C24.5067 28 24.3467 27.98 24.1867 27.92L0.666656 20.08V15.5C0.666656 12.46 3.12666 10 6.16666 10H43.1667C46.2067 10 48.6667 12.46 48.6667 15.5Z"
                                        fill="url(#paint2_linear_79_3706)" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_79_3706" x1="16.6667" y1="4"
                                        x2="24.3581" y2="17.6736" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFB72B" />
                                        <stop offset="1" stop-color="#FFA01B" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_79_3706" x1="0.666656" y1="23.2402"
                                        x2="15.7943" y2="58.2175" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFB72B" />
                                        <stop offset="1" stop-color="#FFA01B" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_79_3706" x1="0.666656" y1="10"
                                        x2="12.5023" y2="41.5616" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFB72B" />
                                        <stop offset="1" stop-color="#FFA01B" />
                                    </linearGradient>
                                    <clipPath id="clip0_79_3706">
                                        <rect width="48" height="48" fill="white"
                                            transform="translate(0.666672)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <p class="text-center font-bold text-sm text-[#262626] opacity-80 mt-6">Well structured
                                curriculum designed by experts</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 mb-8" data-aos="fade-up">
                        <div
                            class="bg-white p-3 flex flex-col justify-center items-center mr-6 h-56 w-56 lg:w-auto shadow-sm">
                            <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.0557 19.2757C23.9423 19.5883 24.8559 19.1249 25.1593 18.2952C25.4659 17.4479 25.0376 16.5056 24.1788 16.1916C23.302 15.879 22.381 16.3357 22.0752 17.1721C21.7686 18.0195 22.197 18.9615 23.0557 19.2757Z"
                                    fill="url(#paint0_linear_79_3715)" />
                                <path
                                    d="M28.8813 24.095C34.5113 23.9428 40.042 21.9305 44.4559 18.4281C45.0203 17.9811 45.6868 17.7213 46.3785 17.5543L47.0258 15.7765C47.2677 15.1133 47.0578 14.3699 46.5035 13.9308C40.9872 9.55363 34.0707 7.0367 27.0291 6.84277C20.8704 6.67456 15.016 4.51757 10.0974 0.815009L9.50143 0.353556C9.08963 0.0282746 8.54659 -0.0806629 8.03701 0.0619621C7.52907 0.206118 7.1222 0.584228 6.94271 1.07937L0.0993376 19.689C-0.1426 20.3522 0.0672907 21.0956 0.620072 21.5347C4.49096 24.6055 9.16313 26.7363 13.969 27.8169C18.6027 25.5449 23.7054 24.2373 28.8813 24.095ZM31.3254 20.5387C31.6353 19.6871 32.5768 19.2482 33.4282 19.5579C34.2798 19.8679 34.7187 20.8094 34.4087 21.6608C34.0989 22.5124 33.1575 22.9513 32.3059 22.6413C31.4545 22.3316 31.0155 21.3901 31.3254 20.5387ZM18.9927 16.0505C19.9203 13.5014 22.7546 12.1813 25.3004 13.1089C27.8511 14.0365 29.1713 16.8675 28.2421 19.4166C27.3154 21.9655 24.4825 23.2888 21.9343 22.3583C19.3814 21.4278 18.0592 18.6117 18.9927 16.0505ZM12.8252 13.8053C13.1351 12.9537 14.0765 12.5147 14.9281 12.8247C15.7794 13.1346 16.2184 14.076 15.9086 14.9273C15.5986 15.7789 14.6571 16.2179 13.8058 15.9079C12.9543 15.598 12.5153 14.6566 12.8252 13.8053Z"
                                    fill="url(#paint1_linear_79_3715)" />
                                <path
                                    d="M15.7081 54.9198C15.8876 55.4164 16.2961 55.7945 16.8024 55.9372C17.3239 56.0846 17.8659 55.9646 18.27 55.6439C23.2352 51.7041 29.4596 49.3294 35.7946 49.1563C42.8362 48.9625 49.8621 46.4455 55.38 42.0683C55.9328 41.6293 56.1426 40.8858 55.9007 40.2226L49.0574 21.7224C48.878 21.2257 48.4694 20.8476 47.9631 20.705C47.4537 20.5608 46.9105 20.6697 46.4955 20.9982C41.5304 24.938 35.3059 27.2034 28.9709 27.3749C21.931 27.5687 15.0144 30.0857 9.4965 34.4644C8.94219 34.9035 8.7323 35.6469 8.97424 36.3101L15.7081 54.9198ZM41.072 33.3575C41.9236 33.0476 42.865 33.4866 43.1748 34.338C43.4848 35.1896 43.0459 36.131 42.1943 36.4408C41.3429 36.7507 40.4014 36.3117 40.0914 35.4603C39.7816 34.6087 40.2206 33.6674 41.072 33.3575ZM30.6997 33.6408C33.2503 32.7132 36.0814 34.0334 37.0075 36.5825C37.9367 39.1316 36.6166 41.9625 34.0658 42.8903C31.5244 43.8163 28.6952 42.5198 27.7581 39.9486C26.8288 37.3995 28.149 34.5685 30.6997 33.6408ZM22.5718 40.091C23.4232 39.7812 24.3647 40.2202 24.6747 41.0716C24.9845 41.9232 24.5455 42.8646 23.6941 43.1744C22.8425 43.4843 21.9012 43.0452 21.5913 42.1939C21.2813 41.3423 21.7204 40.4008 22.5718 40.091Z"
                                    fill="url(#paint2_linear_79_3715)" />
                                <path
                                    d="M32.9443 39.8075C33.8041 39.4931 34.2311 38.5502 33.9249 37.7039C33.619 36.868 32.6984 36.4105 31.8212 36.7234C30.9614 37.0378 30.5344 37.9805 30.8407 38.827C31.1491 39.6701 32.0822 40.1215 32.9443 39.8075Z"
                                    fill="url(#paint3_linear_79_3715)" />
                                <defs>
                                    <linearGradient id="paint0_linear_79_3715" x1="21.9763" y1="16.0928"
                                        x2="25.2574" y2="19.3747" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFB72B" />
                                        <stop offset="1" stop-color="#FFA01B" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_79_3715" x1="-2.28882e-05" y1="0.000488281"
                                        x2="24.3531" y2="41.2584" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFB72B" />
                                        <stop offset="1" stop-color="#FFA01B" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_79_3715" x1="8.87491" y1="20.6426"
                                        x2="42.8212" y2="65.8874" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFB72B" />
                                        <stop offset="1" stop-color="#FFA01B" />
                                    </linearGradient>
                                    <linearGradient id="paint3_linear_79_3715" x1="30.7418" y1="36.6245"
                                        x2="34.025" y2="39.9064" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFB72B" />
                                        <stop offset="1" stop-color="#FFA01B" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <p class="text-center font-bold text-sm text-[#262626] opacity-80 mt-6">Personalized
                                curriculum (in-person learning experience)</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 mb-8" data-aos="fade-up">
                        <div
                            class="bg-white p-3 flex flex-col justify-center items-center mr-6 h-56 w-56 lg:w-auto shadow-sm">
                            <svg width="49" height="48" viewBox="0 0 49 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.3334 1.4991C11.9158 1.4991 1.83337 11.5816 1.83337 23.9991C1.83337 36.4166 11.9158 46.4991 24.3334 46.4991C36.7509 46.4991 46.8334 36.4166 46.8334 23.9991C46.8334 20.5478 46.0524 17.2772 44.661 14.353L42.4271 16.587C42.0053 17.0112 41.4301 17.2503 40.8319 17.2505H40.2108C41.0949 19.3243 41.5848 21.6047 41.5848 23.9991C41.5848 33.5171 33.8514 41.2505 24.3334 41.2505C14.8153 41.2505 7.08191 33.5171 7.08191 23.9991C7.08191 14.4811 14.8153 6.74753 24.3334 6.74753C26.7282 6.74753 29.0092 7.23716 31.0834 8.1216V7.50049C31.0835 6.90226 31.3227 6.32713 31.7469 5.90531L33.9794 3.67145C31.0552 2.28003 27.7847 1.4991 24.3334 1.4991ZM38.5629 1.4991C38.3709 1.50482 38.1884 1.58388 38.0531 1.72012L32.8046 6.96864C32.7345 7.03833 32.6789 7.12125 32.6409 7.21251C32.6029 7.30376 32.5834 7.40156 32.5834 7.5004V12.4414L22.6796 22.3452C21.7717 23.2531 21.7717 24.7493 22.6796 25.6572C23.5874 26.565 25.0793 26.5606 25.9872 25.6515L35.8895 15.7491H40.8319C40.9307 15.7491 41.0286 15.7296 41.1198 15.6917C41.2111 15.6538 41.294 15.5982 41.3637 15.5281L46.6122 10.2795C46.7166 10.1744 46.7876 10.0409 46.8162 9.8955C46.8447 9.75016 46.8296 9.59958 46.7728 9.4628C46.7159 9.32602 46.6198 9.20913 46.4966 9.12689C46.3734 9.04466 46.2286 9.00074 46.0804 9.00068H42.6381L43.2357 8.40309C44.1436 7.49521 44.1479 6.00331 43.2403 5.09543C42.7863 4.64149 42.1845 4.41428 41.5835 4.41428C40.9825 4.41428 40.3822 4.6416 39.9282 5.09543L39.332 5.69163V2.24487C39.3317 2.145 39.3113 2.04621 39.2723 1.95429C39.2332 1.86238 39.1762 1.77924 39.1046 1.70965C39.033 1.64007 38.9482 1.58547 38.8552 1.5491C38.7621 1.51272 38.6627 1.49657 38.5629 1.4991ZM24.3334 11.9961C17.7148 11.9961 12.3304 17.3806 12.3304 23.9991C12.3304 30.6176 17.7148 35.9962 24.3334 35.9962C30.9519 35.9962 36.3304 30.6176 36.3304 23.9991C36.3304 22.0896 35.8725 20.2889 35.0765 18.6846L30.9676 22.7935C31.0388 23.1853 31.0819 23.5871 31.0819 23.9991C31.0819 27.7181 28.0524 30.7476 24.3334 30.7476C20.6143 30.7476 17.5848 27.7181 17.5848 23.9991C17.5848 20.28 20.6143 17.2505 24.3334 17.2505C24.7454 17.2505 25.1471 17.2936 25.5389 17.3647L29.6493 13.2544C28.0449 12.4568 26.2441 11.9961 24.3334 11.9961Z"
                                    fill="url(#paint0_linear_79_3724)" />
                                <defs>
                                    <linearGradient id="paint0_linear_79_3724" x1="1.83337" y1="1.49756"
                                        x2="46.8349" y2="46.4976" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFB72B" />
                                        <stop offset="1" stop-color="#FFA01B" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <p class="text-center font-bold text-sm text-[#262626] opacity-80 mt-6">Mentorship by
                                Hiring Partners</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 mb-8" data-aos="fade-up">
                        <div
                            class="bg-white p-3 flex flex-col justify-center items-center mr-6 h-56 w-56 lg:w-auto shadow-sm">
                            <svg width="49" height="48" viewBox="0 0 49 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_79_3706)">
                                    <path
                                        d="M30.6667 13C29.5627 13 28.6667 12.104 28.6667 11V8H20.6667V11C20.6667 12.104 19.7707 13 18.6667 13C17.5627 13 16.6667 12.104 16.6667 11V8C16.6667 5.794 18.4607 4 20.6667 4H28.6667C30.8727 4 32.6667 5.794 32.6667 8V11C32.6667 12.104 31.7707 13 30.6667 13Z"
                                        fill="url(#paint0_linear_79_3706)" />
                                    <path
                                        d="M26.0867 30.7602C25.7267 30.9002 25.2067 31.0002 24.6667 31.0002C24.1267 31.0002 23.6067 30.9002 23.1267 30.7202L0.666656 23.2402V38.5002C0.666656 41.5402 3.12666 44.0002 6.16666 44.0002H43.1667C46.2067 44.0002 48.6667 41.5402 48.6667 38.5002V23.2402L26.0867 30.7602Z"
                                        fill="url(#paint1_linear_79_3706)" />
                                    <path
                                        d="M48.6667 15.5V20.08L25.1467 27.92C24.9867 27.98 24.8267 28 24.6667 28C24.5067 28 24.3467 27.98 24.1867 27.92L0.666656 20.08V15.5C0.666656 12.46 3.12666 10 6.16666 10H43.1667C46.2067 10 48.6667 12.46 48.6667 15.5Z"
                                        fill="url(#paint2_linear_79_3706)" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_79_3706" x1="16.6667" y1="4"
                                        x2="24.3581" y2="17.6736" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFB72B" />
                                        <stop offset="1" stop-color="#FFA01B" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_79_3706" x1="0.666656" y1="23.2402"
                                        x2="15.7943" y2="58.2175" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFB72B" />
                                        <stop offset="1" stop-color="#FFA01B" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_79_3706" x1="0.666656" y1="10"
                                        x2="12.5023" y2="41.5616" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFB72B" />
                                        <stop offset="1" stop-color="#FFA01B" />
                                    </linearGradient>
                                    <clipPath id="clip0_79_3706">
                                        <rect width="48" height="48" fill="white"
                                            transform="translate(0.666672)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <p class="text-center font-bold text-sm text-[#262626] opacity-80 mt-6">Equipped by
                                Enrichment program (Part time Project)</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 mb-8" data-aos="fade-up">
                        <div
                            class="bg-white p-3 flex flex-col justify-center items-center mr-6 h-56 w-56 lg:w-auto shadow-sm">
                            <svg width="49" height="48" viewBox="0 0 49 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_79_3706)">
                                    <path
                                        d="M30.6667 13C29.5627 13 28.6667 12.104 28.6667 11V8H20.6667V11C20.6667 12.104 19.7707 13 18.6667 13C17.5627 13 16.6667 12.104 16.6667 11V8C16.6667 5.794 18.4607 4 20.6667 4H28.6667C30.8727 4 32.6667 5.794 32.6667 8V11C32.6667 12.104 31.7707 13 30.6667 13Z"
                                        fill="url(#paint0_linear_79_3706)" />
                                    <path
                                        d="M26.0867 30.7602C25.7267 30.9002 25.2067 31.0002 24.6667 31.0002C24.1267 31.0002 23.6067 30.9002 23.1267 30.7202L0.666656 23.2402V38.5002C0.666656 41.5402 3.12666 44.0002 6.16666 44.0002H43.1667C46.2067 44.0002 48.6667 41.5402 48.6667 38.5002V23.2402L26.0867 30.7602Z"
                                        fill="url(#paint1_linear_79_3706)" />
                                    <path
                                        d="M48.6667 15.5V20.08L25.1467 27.92C24.9867 27.98 24.8267 28 24.6667 28C24.5067 28 24.3467 27.98 24.1867 27.92L0.666656 20.08V15.5C0.666656 12.46 3.12666 10 6.16666 10H43.1667C46.2067 10 48.6667 12.46 48.6667 15.5Z"
                                        fill="url(#paint2_linear_79_3706)" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_79_3706" x1="16.6667" y1="4"
                                        x2="24.3581" y2="17.6736" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFB72B" />
                                        <stop offset="1" stop-color="#FFA01B" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_79_3706" x1="0.666656" y1="23.2402"
                                        x2="15.7943" y2="58.2175" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFB72B" />
                                        <stop offset="1" stop-color="#FFA01B" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_79_3706" x1="0.666656" y1="10"
                                        x2="12.5023" y2="41.5616" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFB72B" />
                                        <stop offset="1" stop-color="#FFA01B" />
                                    </linearGradient>
                                    <clipPath id="clip0_79_3706">
                                        <rect width="48" height="48" fill="white"
                                            transform="translate(0.666672)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <p class="text-center font-bold text-sm text-[#262626] opacity-80 mt-6">Connect with
                                passionate trainers</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 mb-8" data-aos="fade-up">
                        <div
                            class="bg-white p-3 flex flex-col justify-center items-center mr-6 h-56 w-56 lg:w-auto shadow-sm">
                            <svg width="49" height="48" viewBox="0 0 49 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_79_3706)">
                                    <path
                                        d="M30.6667 13C29.5627 13 28.6667 12.104 28.6667 11V8H20.6667V11C20.6667 12.104 19.7707 13 18.6667 13C17.5627 13 16.6667 12.104 16.6667 11V8C16.6667 5.794 18.4607 4 20.6667 4H28.6667C30.8727 4 32.6667 5.794 32.6667 8V11C32.6667 12.104 31.7707 13 30.6667 13Z"
                                        fill="url(#paint0_linear_79_3706)" />
                                    <path
                                        d="M26.0867 30.7602C25.7267 30.9002 25.2067 31.0002 24.6667 31.0002C24.1267 31.0002 23.6067 30.9002 23.1267 30.7202L0.666656 23.2402V38.5002C0.666656 41.5402 3.12666 44.0002 6.16666 44.0002H43.1667C46.2067 44.0002 48.6667 41.5402 48.6667 38.5002V23.2402L26.0867 30.7602Z"
                                        fill="url(#paint1_linear_79_3706)" />
                                    <path
                                        d="M48.6667 15.5V20.08L25.1467 27.92C24.9867 27.98 24.8267 28 24.6667 28C24.5067 28 24.3467 27.98 24.1867 27.92L0.666656 20.08V15.5C0.666656 12.46 3.12666 10 6.16666 10H43.1667C46.2067 10 48.6667 12.46 48.6667 15.5Z"
                                        fill="url(#paint2_linear_79_3706)" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_79_3706" x1="16.6667" y1="4"
                                        x2="24.3581" y2="17.6736" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFB72B" />
                                        <stop offset="1" stop-color="#FFA01B" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_79_3706" x1="0.666656" y1="23.2402"
                                        x2="15.7943" y2="58.2175" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFB72B" />
                                        <stop offset="1" stop-color="#FFA01B" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_79_3706" x1="0.666656" y1="10"
                                        x2="12.5023" y2="41.5616" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFB72B" />
                                        <stop offset="1" stop-color="#FFA01B" />
                                    </linearGradient>
                                    <clipPath id="clip0_79_3706">
                                        <rect width="48" height="48" fill="white"
                                            transform="translate(0.666672)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <p class="text-center font-bold text-sm text-[#262626] opacity-80 mt-6">5 star services
                                with dedicated Student Service Center</p>
                        </div>
                    </div>
                </div>
                <p class="font-bold text-2xl mt-4 mb-5" data-aos="fade-up">Ideal Criteria for Bootcamp Program
                    Participants</p>
                <div class="bg-white rounded-lg p-4 shadow-sm mb-6 " data-aos="fade-up">
                    <p class="text-[##262626] opacity-75">Through the Data Science Bootcamp program, we want to open
                        opportunities for anyone to start a career in the digital industry. Therefore, program
                        participants will be more likely to get a job if they have the following ideal criteria:</p>
                    <ol class="list-decimal p-4 text-[#262626] opacity-75">
                        <li>Maximum age of 30 years;</li>
                        <li>S1 graduate/equivalent or have at least 1 year work experience;</li>
                        <li>
                            Have a background in one of the fields such as IT/coding, mathematics, statistics,
                            economics, or business and the like.</li>
                    </ol>
                </div>
            </section>

            <section class="p-6 lg:p-0 curriculum w-full lg:w-11/12 mt-12">
                <p class="font-bold text-base text-[#262626] mb-6" id="learcnphase" data-aos="fade-up">LEARN PHASE
                </p>
                <p class="font-black text-2xl lg:text-4xl mb-2" data-aos="fade-up">What You Will Learn in Practice</p>
                <p class="font-normal text-base text-[#262626]" data-aos="fade-up">Each subject will require you to
                    apply what you learn
                    by hands-on experience through practical assignments and direct feedback from your instructor. In
                    detail, you will learn:</p>
                <div class="grid grid-cols-1 lg:grid-cols-2 mt-11">
                    <div class="mr-4 mb-4 collapse-menu" data-aos="fade-up">
                        <div class="flex flex-row justify-between items-center p-5 bg-white rounded-lg shadow-sm ">
                            <div class="inline-flex items-center">
                                <div class="w-9 h-9">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="40" height="40" rx="6.66667"
                                            fill="url(#paint0_linear_122_455)" />
                                        <path
                                            d="M17.3831 13.1904H22.6212C22.9104 13.1904 23.1449 12.956 23.1449 12.6666V11.0952H22.0974C22.0974 9.93809 21.1593 9 20.0022 9C18.8449 9 17.9068 9.93809 17.9068 11.0952H16.8593V12.6666C16.8593 12.956 17.0937 13.1904 17.3831 13.1904Z"
                                            fill="white" />
                                        <path
                                            d="M27.8592 11.0952H24.1926V12.6666C24.1916 13.5342 23.4887 14.2371 22.6213 14.2381H17.3831C16.5155 14.2371 15.8126 13.534 15.8117 12.6666V11.0952H12.145C11.8558 11.0952 11.6211 11.3297 11.6211 11.6191V30.4761C11.6211 30.7655 11.8558 30.9999 12.145 30.9999H27.8592C28.1486 30.9999 28.3831 30.7655 28.3831 30.4761V11.6191C28.3831 11.3297 28.1486 11.0952 27.8592 11.0952ZM18.8011 25.6084L16.7059 27.7036C16.5014 27.9082 16.1699 27.9082 15.9653 27.7039C15.9653 27.7038 15.9652 27.7038 15.9652 27.7036L14.9175 26.6561C14.7165 26.4479 14.7223 26.1163 14.9304 25.9154C15.1333 25.7193 15.4552 25.7193 15.6582 25.9154L16.3356 26.5926L18.0604 24.8677C18.2685 24.6668 18.6002 24.6725 18.8011 24.8806C18.9971 25.0835 18.9971 25.4055 18.8011 25.6084ZM18.8011 21.4179L16.7059 23.5132C16.5014 23.7178 16.1699 23.7178 15.9653 23.5135C15.9653 23.5133 15.9652 23.5133 15.9652 23.5132L14.9175 22.4656C14.7165 22.2575 14.7223 21.9258 14.9304 21.7249C15.1333 21.5289 15.4552 21.5289 15.6582 21.7249L16.3354 22.4022L18.0604 20.6772C18.2685 20.4763 18.6 20.482 18.8011 20.6901C18.9971 20.8931 18.9971 21.215 18.8011 21.4179ZM18.8011 17.2275L16.7059 19.3227C16.5014 19.5273 16.1699 19.5273 15.9653 19.323C15.9653 19.3229 15.9652 19.3229 15.9652 19.3227L14.9175 18.2752C14.7165 18.067 14.7223 17.7354 14.9304 17.5345C15.1333 17.3384 15.4552 17.3384 15.6582 17.5345L16.3354 18.2117L18.0604 16.4868C18.2685 16.2859 18.6 16.2916 18.8011 16.4997C18.9971 16.7026 18.9971 17.0244 18.8011 17.2275ZM24.7165 26.8095H21.5736C21.2844 26.8095 21.0497 26.575 21.0497 26.2856C21.0497 25.9964 21.2844 25.7618 21.5736 25.7618H24.7165C25.0057 25.7618 25.2402 25.9964 25.2402 26.2856C25.2402 26.575 25.0057 26.8095 24.7165 26.8095ZM24.7165 22.619H21.5736C21.2844 22.619 21.0497 22.3846 21.0497 22.0952C21.0497 21.806 21.2844 21.5713 21.5736 21.5713H24.7165C25.0057 21.5713 25.2402 21.806 25.2402 22.0952C25.2402 22.3846 25.0057 22.619 24.7165 22.619ZM24.7165 18.4286H21.5736C21.2844 18.4286 21.0497 18.1939 21.0497 17.9047C21.0497 17.6154 21.2844 17.3809 21.5736 17.3809H24.7165C25.0057 17.3809 25.2402 17.6154 25.2402 17.9047C25.2402 18.1939 25.0057 18.4286 24.7165 18.4286Z"
                                            fill="white" />
                                        <defs>
                                            <linearGradient id="paint0_linear_122_455" x1="0" y1="0"
                                                x2="40" y2="40" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFB72B" />
                                                <stop offset="1" stop-color="#FFA01B" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <span class="font-bold text-xl ml-3">Preparation</span>
                            </div>
                            <div class="w-12 h-12 flex justify-center items-center">
                                <svg class="rotate-0" width="8" height="5" viewBox="0 0 8 5"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                        fill="black" />
                                </svg>
                            </div>
                        </div>

                        <div
                            class="collapse-menu-detail bg-white rounded-lg shadow-sm px-5 pb-5 text-justify font-normal text-base text-[#262626]">
                            Qarirlabs provides career preparation. Once you’ve been accepted, you'll get the fixed
                            schedule of career mapping & soft skill class with our passionate trainers. You also will
                            receive about 10-20 hours of online learning resources, carefully curated by QarirLabs
                            Expert to be intuitive and interactive. This preparation phase will ensure you have the
                            necessary Digital Marketing fundamentals before the bootcamp starts.
                        </div>
                    </div>
                    <div class="mr-4 mb-4 collapse-menu" data-aos="fade-up">
                        <div class="flex flex-row justify-between items-center p-5 bg-white rounded-lg shadow-sm ">
                            <div class="inline-flex items-center">
                                <div class="w-9 h-9">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="40" height="40" rx="6.66667"
                                            fill="url(#paint0_linear_122_455)" />
                                        <path
                                            d="M17.3831 13.1904H22.6212C22.9104 13.1904 23.1449 12.956 23.1449 12.6666V11.0952H22.0974C22.0974 9.93809 21.1593 9 20.0022 9C18.8449 9 17.9068 9.93809 17.9068 11.0952H16.8593V12.6666C16.8593 12.956 17.0937 13.1904 17.3831 13.1904Z"
                                            fill="white" />
                                        <path
                                            d="M27.8592 11.0952H24.1926V12.6666C24.1916 13.5342 23.4887 14.2371 22.6213 14.2381H17.3831C16.5155 14.2371 15.8126 13.534 15.8117 12.6666V11.0952H12.145C11.8558 11.0952 11.6211 11.3297 11.6211 11.6191V30.4761C11.6211 30.7655 11.8558 30.9999 12.145 30.9999H27.8592C28.1486 30.9999 28.3831 30.7655 28.3831 30.4761V11.6191C28.3831 11.3297 28.1486 11.0952 27.8592 11.0952ZM18.8011 25.6084L16.7059 27.7036C16.5014 27.9082 16.1699 27.9082 15.9653 27.7039C15.9653 27.7038 15.9652 27.7038 15.9652 27.7036L14.9175 26.6561C14.7165 26.4479 14.7223 26.1163 14.9304 25.9154C15.1333 25.7193 15.4552 25.7193 15.6582 25.9154L16.3356 26.5926L18.0604 24.8677C18.2685 24.6668 18.6002 24.6725 18.8011 24.8806C18.9971 25.0835 18.9971 25.4055 18.8011 25.6084ZM18.8011 21.4179L16.7059 23.5132C16.5014 23.7178 16.1699 23.7178 15.9653 23.5135C15.9653 23.5133 15.9652 23.5133 15.9652 23.5132L14.9175 22.4656C14.7165 22.2575 14.7223 21.9258 14.9304 21.7249C15.1333 21.5289 15.4552 21.5289 15.6582 21.7249L16.3354 22.4022L18.0604 20.6772C18.2685 20.4763 18.6 20.482 18.8011 20.6901C18.9971 20.8931 18.9971 21.215 18.8011 21.4179ZM18.8011 17.2275L16.7059 19.3227C16.5014 19.5273 16.1699 19.5273 15.9653 19.323C15.9653 19.3229 15.9652 19.3229 15.9652 19.3227L14.9175 18.2752C14.7165 18.067 14.7223 17.7354 14.9304 17.5345C15.1333 17.3384 15.4552 17.3384 15.6582 17.5345L16.3354 18.2117L18.0604 16.4868C18.2685 16.2859 18.6 16.2916 18.8011 16.4997C18.9971 16.7026 18.9971 17.0244 18.8011 17.2275ZM24.7165 26.8095H21.5736C21.2844 26.8095 21.0497 26.575 21.0497 26.2856C21.0497 25.9964 21.2844 25.7618 21.5736 25.7618H24.7165C25.0057 25.7618 25.2402 25.9964 25.2402 26.2856C25.2402 26.575 25.0057 26.8095 24.7165 26.8095ZM24.7165 22.619H21.5736C21.2844 22.619 21.0497 22.3846 21.0497 22.0952C21.0497 21.806 21.2844 21.5713 21.5736 21.5713H24.7165C25.0057 21.5713 25.2402 21.806 25.2402 22.0952C25.2402 22.3846 25.0057 22.619 24.7165 22.619ZM24.7165 18.4286H21.5736C21.2844 18.4286 21.0497 18.1939 21.0497 17.9047C21.0497 17.6154 21.2844 17.3809 21.5736 17.3809H24.7165C25.0057 17.3809 25.2402 17.6154 25.2402 17.9047C25.2402 18.1939 25.0057 18.4286 24.7165 18.4286Z"
                                            fill="white" />
                                        <defs>
                                            <linearGradient id="paint0_linear_122_455" x1="0" y1="0"
                                                x2="40" y2="40" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFB72B" />
                                                <stop offset="1" stop-color="#FFA01B" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="font-bold text-xl ml-3">Branding, Influencer Strategic, and Content
                                    Strategy Plan <span class="font-normal text-xl">(Module 1)</span></div>
                            </div>
                            <div class="w-12 h-12 flex justify-center items-center">
                                <svg class="rotate-0" width="8" height="5" viewBox="0 0 8 5"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                        fill="black" />
                                </svg>
                            </div>
                        </div>

                        <div
                            class="collapse-menu-detail bg-white rounded-lg shadow-sm px-5 pb-5 text-justify font-normal text-base text-[#262626]">
                            There’s nothing important than branding and content for a digital marketer, learn digital
                            marketing from the basic. Start from explaination of social media's objective and its
                            feature, Hacking strategy to think creative, How to make a good & relevant content, Create
                            content calendar. Its not only about the theory but also practical!
                        </div>
                    </div>
                    <div class="mr-4 mb-4 collapse-menu" data-aos="fade-up">
                        <div class="flex flex-row justify-between items-center p-5 bg-white rounded-lg shadow-sm ">
                            <div class="inline-flex items-center">
                                <div class="w-9 h-9">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="40" height="40" rx="6.66667"
                                            fill="url(#paint0_linear_122_455)" />
                                        <path
                                            d="M17.3831 13.1904H22.6212C22.9104 13.1904 23.1449 12.956 23.1449 12.6666V11.0952H22.0974C22.0974 9.93809 21.1593 9 20.0022 9C18.8449 9 17.9068 9.93809 17.9068 11.0952H16.8593V12.6666C16.8593 12.956 17.0937 13.1904 17.3831 13.1904Z"
                                            fill="white" />
                                        <path
                                            d="M27.8592 11.0952H24.1926V12.6666C24.1916 13.5342 23.4887 14.2371 22.6213 14.2381H17.3831C16.5155 14.2371 15.8126 13.534 15.8117 12.6666V11.0952H12.145C11.8558 11.0952 11.6211 11.3297 11.6211 11.6191V30.4761C11.6211 30.7655 11.8558 30.9999 12.145 30.9999H27.8592C28.1486 30.9999 28.3831 30.7655 28.3831 30.4761V11.6191C28.3831 11.3297 28.1486 11.0952 27.8592 11.0952ZM18.8011 25.6084L16.7059 27.7036C16.5014 27.9082 16.1699 27.9082 15.9653 27.7039C15.9653 27.7038 15.9652 27.7038 15.9652 27.7036L14.9175 26.6561C14.7165 26.4479 14.7223 26.1163 14.9304 25.9154C15.1333 25.7193 15.4552 25.7193 15.6582 25.9154L16.3356 26.5926L18.0604 24.8677C18.2685 24.6668 18.6002 24.6725 18.8011 24.8806C18.9971 25.0835 18.9971 25.4055 18.8011 25.6084ZM18.8011 21.4179L16.7059 23.5132C16.5014 23.7178 16.1699 23.7178 15.9653 23.5135C15.9653 23.5133 15.9652 23.5133 15.9652 23.5132L14.9175 22.4656C14.7165 22.2575 14.7223 21.9258 14.9304 21.7249C15.1333 21.5289 15.4552 21.5289 15.6582 21.7249L16.3354 22.4022L18.0604 20.6772C18.2685 20.4763 18.6 20.482 18.8011 20.6901C18.9971 20.8931 18.9971 21.215 18.8011 21.4179ZM18.8011 17.2275L16.7059 19.3227C16.5014 19.5273 16.1699 19.5273 15.9653 19.323C15.9653 19.3229 15.9652 19.3229 15.9652 19.3227L14.9175 18.2752C14.7165 18.067 14.7223 17.7354 14.9304 17.5345C15.1333 17.3384 15.4552 17.3384 15.6582 17.5345L16.3354 18.2117L18.0604 16.4868C18.2685 16.2859 18.6 16.2916 18.8011 16.4997C18.9971 16.7026 18.9971 17.0244 18.8011 17.2275ZM24.7165 26.8095H21.5736C21.2844 26.8095 21.0497 26.575 21.0497 26.2856C21.0497 25.9964 21.2844 25.7618 21.5736 25.7618H24.7165C25.0057 25.7618 25.2402 25.9964 25.2402 26.2856C25.2402 26.575 25.0057 26.8095 24.7165 26.8095ZM24.7165 22.619H21.5736C21.2844 22.619 21.0497 22.3846 21.0497 22.0952C21.0497 21.806 21.2844 21.5713 21.5736 21.5713H24.7165C25.0057 21.5713 25.2402 21.806 25.2402 22.0952C25.2402 22.3846 25.0057 22.619 24.7165 22.619ZM24.7165 18.4286H21.5736C21.2844 18.4286 21.0497 18.1939 21.0497 17.9047C21.0497 17.6154 21.2844 17.3809 21.5736 17.3809H24.7165C25.0057 17.3809 25.2402 17.6154 25.2402 17.9047C25.2402 18.1939 25.0057 18.4286 24.7165 18.4286Z"
                                            fill="white" />
                                        <defs>
                                            <linearGradient id="paint0_linear_122_455" x1="0" y1="0"
                                                x2="40" y2="40" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFB72B" />
                                                <stop offset="1" stop-color="#FFA01B" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="font-bold text-xl ml-3">Social Media Ads & Performance analyst <span
                                        class="font-normal text-xl">(Module 2)</span></div>
                            </div>
                            <div class="w-12 h-12 flex justify-center items-center">
                                <svg class="rotate-180" width="8" height="5" viewBox="0 0 8 5"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                        fill="black" />
                                </svg>
                            </div>
                        </div>

                        <div
                            class="hidden collapse-menu-detail bg-white rounded-lg shadow-sm px-5 pb-5 text-justify font-normal text-base text-[#262626]">
                            Start to run your own ads! maintain your brand's social media, do's and dont's, and
                            creativity to reach the best ROI. Explaining the phase of campaign, success content at FB
                            Ads Manager. Retargeting Audience (Custom Audience, Lookalike) FB Pixel, Relevant Score, and
                            Set up facebook business manager.
                        </div>
                    </div>
                    <div class="mr-4 mb-4 collapse-menu" data-aos="fade-up">
                        <div class="flex flex-row justify-between items-center p-5 bg-white rounded-lg shadow-sm ">
                            <div class="inline-flex items-center">
                                <div class="w-9 h-9">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="40" height="40" rx="6.66667"
                                            fill="url(#paint0_linear_122_455)" />
                                        <path
                                            d="M17.3831 13.1904H22.6212C22.9104 13.1904 23.1449 12.956 23.1449 12.6666V11.0952H22.0974C22.0974 9.93809 21.1593 9 20.0022 9C18.8449 9 17.9068 9.93809 17.9068 11.0952H16.8593V12.6666C16.8593 12.956 17.0937 13.1904 17.3831 13.1904Z"
                                            fill="white" />
                                        <path
                                            d="M27.8592 11.0952H24.1926V12.6666C24.1916 13.5342 23.4887 14.2371 22.6213 14.2381H17.3831C16.5155 14.2371 15.8126 13.534 15.8117 12.6666V11.0952H12.145C11.8558 11.0952 11.6211 11.3297 11.6211 11.6191V30.4761C11.6211 30.7655 11.8558 30.9999 12.145 30.9999H27.8592C28.1486 30.9999 28.3831 30.7655 28.3831 30.4761V11.6191C28.3831 11.3297 28.1486 11.0952 27.8592 11.0952ZM18.8011 25.6084L16.7059 27.7036C16.5014 27.9082 16.1699 27.9082 15.9653 27.7039C15.9653 27.7038 15.9652 27.7038 15.9652 27.7036L14.9175 26.6561C14.7165 26.4479 14.7223 26.1163 14.9304 25.9154C15.1333 25.7193 15.4552 25.7193 15.6582 25.9154L16.3356 26.5926L18.0604 24.8677C18.2685 24.6668 18.6002 24.6725 18.8011 24.8806C18.9971 25.0835 18.9971 25.4055 18.8011 25.6084ZM18.8011 21.4179L16.7059 23.5132C16.5014 23.7178 16.1699 23.7178 15.9653 23.5135C15.9653 23.5133 15.9652 23.5133 15.9652 23.5132L14.9175 22.4656C14.7165 22.2575 14.7223 21.9258 14.9304 21.7249C15.1333 21.5289 15.4552 21.5289 15.6582 21.7249L16.3354 22.4022L18.0604 20.6772C18.2685 20.4763 18.6 20.482 18.8011 20.6901C18.9971 20.8931 18.9971 21.215 18.8011 21.4179ZM18.8011 17.2275L16.7059 19.3227C16.5014 19.5273 16.1699 19.5273 15.9653 19.323C15.9653 19.3229 15.9652 19.3229 15.9652 19.3227L14.9175 18.2752C14.7165 18.067 14.7223 17.7354 14.9304 17.5345C15.1333 17.3384 15.4552 17.3384 15.6582 17.5345L16.3354 18.2117L18.0604 16.4868C18.2685 16.2859 18.6 16.2916 18.8011 16.4997C18.9971 16.7026 18.9971 17.0244 18.8011 17.2275ZM24.7165 26.8095H21.5736C21.2844 26.8095 21.0497 26.575 21.0497 26.2856C21.0497 25.9964 21.2844 25.7618 21.5736 25.7618H24.7165C25.0057 25.7618 25.2402 25.9964 25.2402 26.2856C25.2402 26.575 25.0057 26.8095 24.7165 26.8095ZM24.7165 22.619H21.5736C21.2844 22.619 21.0497 22.3846 21.0497 22.0952C21.0497 21.806 21.2844 21.5713 21.5736 21.5713H24.7165C25.0057 21.5713 25.2402 21.806 25.2402 22.0952C25.2402 22.3846 25.0057 22.619 24.7165 22.619ZM24.7165 18.4286H21.5736C21.2844 18.4286 21.0497 18.1939 21.0497 17.9047C21.0497 17.6154 21.2844 17.3809 21.5736 17.3809H24.7165C25.0057 17.3809 25.2402 17.6154 25.2402 17.9047C25.2402 18.1939 25.0057 18.4286 24.7165 18.4286Z"
                                            fill="white" />
                                        <defs>
                                            <linearGradient id="paint0_linear_122_455" x1="0" y1="0"
                                                x2="40" y2="40" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFB72B" />
                                                <stop offset="1" stop-color="#FFA01B" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="font-bold text-xl ml-3">Google Ads & Media Recommendation<span
                                        class="font-normal text-xl">(Module 3)</span></div>
                            </div>
                            <div class="w-12 h-12 flex justify-center items-center">
                                <svg class="rotate-0180" width="8" height="5" viewBox="0 0 8 5"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                        fill="black" />
                                </svg>
                            </div>
                        </div>

                        <div
                            class="hidden collapse-menu-detail bg-white rounded-lg shadow-sm px-5 pb-5 text-justify font-normal text-base text-[#262626]">
                            Find the right keyword for your campaign, in this module trainer will explain about, bidding
                            strategy, strength and weakness analysis for SEM, and success tips to run SEM Campaign.
                            There are also an implementation and practice session to make and analyze a brand campaign.
                            programmatic
                        </div>
                    </div>
                    <div class="mr-4 mb-4 collapse-menu" data-aos="fade-up">
                        <div class="flex flex-row justify-between items-center p-5 bg-white rounded-lg shadow-sm ">
                            <div class="inline-flex items-center">
                                <div class="w-9 h-9">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="40" height="40" rx="6.66667"
                                            fill="url(#paint0_linear_122_455)" />
                                        <path
                                            d="M17.3831 13.1904H22.6212C22.9104 13.1904 23.1449 12.956 23.1449 12.6666V11.0952H22.0974C22.0974 9.93809 21.1593 9 20.0022 9C18.8449 9 17.9068 9.93809 17.9068 11.0952H16.8593V12.6666C16.8593 12.956 17.0937 13.1904 17.3831 13.1904Z"
                                            fill="white" />
                                        <path
                                            d="M27.8592 11.0952H24.1926V12.6666C24.1916 13.5342 23.4887 14.2371 22.6213 14.2381H17.3831C16.5155 14.2371 15.8126 13.534 15.8117 12.6666V11.0952H12.145C11.8558 11.0952 11.6211 11.3297 11.6211 11.6191V30.4761C11.6211 30.7655 11.8558 30.9999 12.145 30.9999H27.8592C28.1486 30.9999 28.3831 30.7655 28.3831 30.4761V11.6191C28.3831 11.3297 28.1486 11.0952 27.8592 11.0952ZM18.8011 25.6084L16.7059 27.7036C16.5014 27.9082 16.1699 27.9082 15.9653 27.7039C15.9653 27.7038 15.9652 27.7038 15.9652 27.7036L14.9175 26.6561C14.7165 26.4479 14.7223 26.1163 14.9304 25.9154C15.1333 25.7193 15.4552 25.7193 15.6582 25.9154L16.3356 26.5926L18.0604 24.8677C18.2685 24.6668 18.6002 24.6725 18.8011 24.8806C18.9971 25.0835 18.9971 25.4055 18.8011 25.6084ZM18.8011 21.4179L16.7059 23.5132C16.5014 23.7178 16.1699 23.7178 15.9653 23.5135C15.9653 23.5133 15.9652 23.5133 15.9652 23.5132L14.9175 22.4656C14.7165 22.2575 14.7223 21.9258 14.9304 21.7249C15.1333 21.5289 15.4552 21.5289 15.6582 21.7249L16.3354 22.4022L18.0604 20.6772C18.2685 20.4763 18.6 20.482 18.8011 20.6901C18.9971 20.8931 18.9971 21.215 18.8011 21.4179ZM18.8011 17.2275L16.7059 19.3227C16.5014 19.5273 16.1699 19.5273 15.9653 19.323C15.9653 19.3229 15.9652 19.3229 15.9652 19.3227L14.9175 18.2752C14.7165 18.067 14.7223 17.7354 14.9304 17.5345C15.1333 17.3384 15.4552 17.3384 15.6582 17.5345L16.3354 18.2117L18.0604 16.4868C18.2685 16.2859 18.6 16.2916 18.8011 16.4997C18.9971 16.7026 18.9971 17.0244 18.8011 17.2275ZM24.7165 26.8095H21.5736C21.2844 26.8095 21.0497 26.575 21.0497 26.2856C21.0497 25.9964 21.2844 25.7618 21.5736 25.7618H24.7165C25.0057 25.7618 25.2402 25.9964 25.2402 26.2856C25.2402 26.575 25.0057 26.8095 24.7165 26.8095ZM24.7165 22.619H21.5736C21.2844 22.619 21.0497 22.3846 21.0497 22.0952C21.0497 21.806 21.2844 21.5713 21.5736 21.5713H24.7165C25.0057 21.5713 25.2402 21.806 25.2402 22.0952C25.2402 22.3846 25.0057 22.619 24.7165 22.619ZM24.7165 18.4286H21.5736C21.2844 18.4286 21.0497 18.1939 21.0497 17.9047C21.0497 17.6154 21.2844 17.3809 21.5736 17.3809H24.7165C25.0057 17.3809 25.2402 17.6154 25.2402 17.9047C25.2402 18.1939 25.0057 18.4286 24.7165 18.4286Z"
                                            fill="white" />
                                        <defs>
                                            <linearGradient id="paint0_linear_122_455" x1="0" y1="0"
                                                x2="40" y2="40" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFB72B" />
                                                <stop offset="1" stop-color="#FFA01B" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="font-bold text-xl ml-3">SEO <span class="font-normal text-xl">(Module
                                        4)</span></div>
                            </div>
                            <div class="w-12 h-12 flex justify-center items-center">
                                <svg class="rotate-0180" width="8" height="5" viewBox="0 0 8 5"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                        fill="black" />
                                </svg>
                            </div>
                        </div>

                        <div
                            class="hidden collapse-menu-detail bg-white rounded-lg shadow-sm px-5 pb-5 text-justify font-normal text-base text-[#262626]">
                            Execute the media then optimize through search engines, which involve media brief, budgeting
                            and creative communication plan. Get to know more about how google search works, in detail
                            to meet Google's needs. Develop more about the strategy and implementation of SEO.
                        </div>
                    </div>
                    <div class="mr-4 mb-4 collapse-menu" data-aos="fade-up">
                        <div class="flex flex-row justify-between items-center p-5 bg-white rounded-lg shadow-sm ">
                            <div class="inline-flex items-center">
                                <div class="w-9 h-9">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="40" height="40" rx="6.66667"
                                            fill="url(#paint0_linear_122_455)" />
                                        <path
                                            d="M17.3831 13.1904H22.6212C22.9104 13.1904 23.1449 12.956 23.1449 12.6666V11.0952H22.0974C22.0974 9.93809 21.1593 9 20.0022 9C18.8449 9 17.9068 9.93809 17.9068 11.0952H16.8593V12.6666C16.8593 12.956 17.0937 13.1904 17.3831 13.1904Z"
                                            fill="white" />
                                        <path
                                            d="M27.8592 11.0952H24.1926V12.6666C24.1916 13.5342 23.4887 14.2371 22.6213 14.2381H17.3831C16.5155 14.2371 15.8126 13.534 15.8117 12.6666V11.0952H12.145C11.8558 11.0952 11.6211 11.3297 11.6211 11.6191V30.4761C11.6211 30.7655 11.8558 30.9999 12.145 30.9999H27.8592C28.1486 30.9999 28.3831 30.7655 28.3831 30.4761V11.6191C28.3831 11.3297 28.1486 11.0952 27.8592 11.0952ZM18.8011 25.6084L16.7059 27.7036C16.5014 27.9082 16.1699 27.9082 15.9653 27.7039C15.9653 27.7038 15.9652 27.7038 15.9652 27.7036L14.9175 26.6561C14.7165 26.4479 14.7223 26.1163 14.9304 25.9154C15.1333 25.7193 15.4552 25.7193 15.6582 25.9154L16.3356 26.5926L18.0604 24.8677C18.2685 24.6668 18.6002 24.6725 18.8011 24.8806C18.9971 25.0835 18.9971 25.4055 18.8011 25.6084ZM18.8011 21.4179L16.7059 23.5132C16.5014 23.7178 16.1699 23.7178 15.9653 23.5135C15.9653 23.5133 15.9652 23.5133 15.9652 23.5132L14.9175 22.4656C14.7165 22.2575 14.7223 21.9258 14.9304 21.7249C15.1333 21.5289 15.4552 21.5289 15.6582 21.7249L16.3354 22.4022L18.0604 20.6772C18.2685 20.4763 18.6 20.482 18.8011 20.6901C18.9971 20.8931 18.9971 21.215 18.8011 21.4179ZM18.8011 17.2275L16.7059 19.3227C16.5014 19.5273 16.1699 19.5273 15.9653 19.323C15.9653 19.3229 15.9652 19.3229 15.9652 19.3227L14.9175 18.2752C14.7165 18.067 14.7223 17.7354 14.9304 17.5345C15.1333 17.3384 15.4552 17.3384 15.6582 17.5345L16.3354 18.2117L18.0604 16.4868C18.2685 16.2859 18.6 16.2916 18.8011 16.4997C18.9971 16.7026 18.9971 17.0244 18.8011 17.2275ZM24.7165 26.8095H21.5736C21.2844 26.8095 21.0497 26.575 21.0497 26.2856C21.0497 25.9964 21.2844 25.7618 21.5736 25.7618H24.7165C25.0057 25.7618 25.2402 25.9964 25.2402 26.2856C25.2402 26.575 25.0057 26.8095 24.7165 26.8095ZM24.7165 22.619H21.5736C21.2844 22.619 21.0497 22.3846 21.0497 22.0952C21.0497 21.806 21.2844 21.5713 21.5736 21.5713H24.7165C25.0057 21.5713 25.2402 21.806 25.2402 22.0952C25.2402 22.3846 25.0057 22.619 24.7165 22.619ZM24.7165 18.4286H21.5736C21.2844 18.4286 21.0497 18.1939 21.0497 17.9047C21.0497 17.6154 21.2844 17.3809 21.5736 17.3809H24.7165C25.0057 17.3809 25.2402 17.6154 25.2402 17.9047C25.2402 18.1939 25.0057 18.4286 24.7165 18.4286Z"
                                            fill="white" />
                                        <defs>
                                            <linearGradient id="paint0_linear_122_455" x1="0" y1="0"
                                                x2="40" y2="40" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFB72B" />
                                                <stop offset="1" stop-color="#FFA01B" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="font-bold text-xl ml-3">Project Week <span
                                        class="font-normal text-xl">(Module 5)</span></div>
                            </div>
                            <div class="w-12 h-12 flex justify-center items-center">
                                <svg class="rotate-180" width="8" height="5" viewBox="0 0 8 5"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                        fill="black" />
                                </svg>
                            </div>
                        </div>

                        <div
                            class="hidden collapse-menu-detail bg-white rounded-lg shadow-sm px-5 pb-5 text-justify font-normal text-base text-[#262626]">
                            Join or propose a genuine Digital Marketing project with 3-4 team members/Individual. You
                            can use some existing brand (Dummy project) or your own private brand (UMKM Project). Get
                            full-time mentoring from expert teachers to achieve your aspirations.
                        </div>
                    </div>
                    <div class="mr-4 mb-4 collapse-menu" data-aos="fade-up">
                        <div class="flex flex-row justify-between items-center p-5 bg-white rounded-lg shadow-sm ">
                            <div class="inline-flex items-center">
                                <div class="w-9 h-9">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="40" height="40" rx="6.66667"
                                            fill="url(#paint0_linear_122_455)" />
                                        <path
                                            d="M17.3831 13.1904H22.6212C22.9104 13.1904 23.1449 12.956 23.1449 12.6666V11.0952H22.0974C22.0974 9.93809 21.1593 9 20.0022 9C18.8449 9 17.9068 9.93809 17.9068 11.0952H16.8593V12.6666C16.8593 12.956 17.0937 13.1904 17.3831 13.1904Z"
                                            fill="white" />
                                        <path
                                            d="M27.8592 11.0952H24.1926V12.6666C24.1916 13.5342 23.4887 14.2371 22.6213 14.2381H17.3831C16.5155 14.2371 15.8126 13.534 15.8117 12.6666V11.0952H12.145C11.8558 11.0952 11.6211 11.3297 11.6211 11.6191V30.4761C11.6211 30.7655 11.8558 30.9999 12.145 30.9999H27.8592C28.1486 30.9999 28.3831 30.7655 28.3831 30.4761V11.6191C28.3831 11.3297 28.1486 11.0952 27.8592 11.0952ZM18.8011 25.6084L16.7059 27.7036C16.5014 27.9082 16.1699 27.9082 15.9653 27.7039C15.9653 27.7038 15.9652 27.7038 15.9652 27.7036L14.9175 26.6561C14.7165 26.4479 14.7223 26.1163 14.9304 25.9154C15.1333 25.7193 15.4552 25.7193 15.6582 25.9154L16.3356 26.5926L18.0604 24.8677C18.2685 24.6668 18.6002 24.6725 18.8011 24.8806C18.9971 25.0835 18.9971 25.4055 18.8011 25.6084ZM18.8011 21.4179L16.7059 23.5132C16.5014 23.7178 16.1699 23.7178 15.9653 23.5135C15.9653 23.5133 15.9652 23.5133 15.9652 23.5132L14.9175 22.4656C14.7165 22.2575 14.7223 21.9258 14.9304 21.7249C15.1333 21.5289 15.4552 21.5289 15.6582 21.7249L16.3354 22.4022L18.0604 20.6772C18.2685 20.4763 18.6 20.482 18.8011 20.6901C18.9971 20.8931 18.9971 21.215 18.8011 21.4179ZM18.8011 17.2275L16.7059 19.3227C16.5014 19.5273 16.1699 19.5273 15.9653 19.323C15.9653 19.3229 15.9652 19.3229 15.9652 19.3227L14.9175 18.2752C14.7165 18.067 14.7223 17.7354 14.9304 17.5345C15.1333 17.3384 15.4552 17.3384 15.6582 17.5345L16.3354 18.2117L18.0604 16.4868C18.2685 16.2859 18.6 16.2916 18.8011 16.4997C18.9971 16.7026 18.9971 17.0244 18.8011 17.2275ZM24.7165 26.8095H21.5736C21.2844 26.8095 21.0497 26.575 21.0497 26.2856C21.0497 25.9964 21.2844 25.7618 21.5736 25.7618H24.7165C25.0057 25.7618 25.2402 25.9964 25.2402 26.2856C25.2402 26.575 25.0057 26.8095 24.7165 26.8095ZM24.7165 22.619H21.5736C21.2844 22.619 21.0497 22.3846 21.0497 22.0952C21.0497 21.806 21.2844 21.5713 21.5736 21.5713H24.7165C25.0057 21.5713 25.2402 21.806 25.2402 22.0952C25.2402 22.3846 25.0057 22.619 24.7165 22.619ZM24.7165 18.4286H21.5736C21.2844 18.4286 21.0497 18.1939 21.0497 17.9047C21.0497 17.6154 21.2844 17.3809 21.5736 17.3809H24.7165C25.0057 17.3809 25.2402 17.6154 25.2402 17.9047C25.2402 18.1939 25.0057 18.4286 24.7165 18.4286Z"
                                            fill="white" />
                                        <defs>
                                            <linearGradient id="paint0_linear_122_455" x1="0" y1="0"
                                                x2="40" y2="40" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFB72B" />
                                                <stop offset="1" stop-color="#FFA01B" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="font-bold text-xl ml-3">Career Weeks <span
                                        class="font-normal text-xl"></span></div>
                            </div>
                            <div class="w-12 h-12 flex justify-center items-center">
                                <svg class="rotate-180" width="8" height="5" viewBox="0 0 8 5"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                        fill="black" />
                                </svg>
                            </div>
                        </div>

                        <div
                            class="hidden collapse-menu-detail bg-white rounded-lg shadow-sm px-5 pb-5 text-justify font-normal text-base text-[#262626]">
                            Enhance your job search skills by meeting data science professionals employed in startups or
                            leading tech companies, practicing mock interviews, and refining your CV.
                        </div>
                    </div>
                </div>
            </section>

            @if (count($destinations) > 0)
                <section class="p-6 lg:p-0 w-full lg:w-11/12 mt-12" id="destination">
                    <p class="font-bold text-base text-[#262626] mb-6" data-aos="fade-up">DESTINATION</p>
                    <p class="font-black text-2xl lg:text-4xl mb-2" data-aos="fade-up">Various Choices of Wonderful
                        Destinations
                    </p>
                    <p class="font-normal text-base text-[#262626]" data-aos="fade-up">More than 1000+ choices of
                        amazing tourist destinations</p>
                    <div class="overflow-x-auto flex mt-10" data-aos="fade-up" id="destination-navigation">
                        @foreach ($destinations as $item)
                            <div class="flex-none py-0 px-3 first:pl-0 last:pr-6">
                                <div class="relative bg-white rounded-lg shadow-sm w-96">
                                    <img src="{{ Vite::asset($item['image']) }}" alt="person 1"
                                        class="rounded-lg w-full h-64">
                                    <p class="font-bold text-2xl px-6 pt-6 pb-3 text-center">{{ $item['title'] }}</p>
                                    <p class="font-normal text-sm px-6 text-center line-clamp-2">
                                        {{ $item['subtitle'] }}</p>
                                    <br>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="flex gap-3" data-aos="fade-up">
                        <button type="button" data-aos="fade-up" id="previews-destination">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="40" y="40" width="40" height="40" rx="20"
                                    transform="rotate(180 40 40)" fill="#A7A7A7" />
                                <g clip-path="url(#clip0_98_514)">
                                    <path
                                        d="M9.73164 20.3963L17.0974 27.7622C17.3077 27.9725 17.5879 28.0879 17.8868 28.0879C18.1859 28.0879 18.466 27.9723 18.6762 27.7622L19.345 27.0933C19.5551 26.8834 19.6708 26.603 19.6708 26.304C19.6708 26.0052 19.5551 25.7153 19.345 25.5054L15.0479 21.1988L28.7 21.1988C29.3155 21.1988 29.8019 20.7169 29.8019 20.1013L29.8019 19.1556C29.8019 18.5399 29.3155 18.0094 28.7 18.0094L14.9991 18.0094L19.3448 13.6788C19.5549 13.4686 19.6707 13.1958 19.6707 12.8968C19.6707 12.5982 19.5549 12.3214 19.3448 12.1113L18.6761 11.4445C18.4658 11.2343 18.1857 11.1197 17.8866 11.1197C17.5878 11.1197 17.3075 11.2358 17.0973 11.446L9.73148 18.8118C9.52072 19.0228 9.40481 19.3043 9.40564 19.6036C9.40498 19.9039 9.52072 20.1857 9.73164 20.3963Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_98_514">
                                        <rect width="20.3962" height="20.3962" fill="white"
                                            transform="translate(29.8019 29.8018) rotate(180)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </button>
                        <button type="button" href="#" data-aos="fade-up" id="next-destination">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="40" height="40" rx="20" fill="#FF9500" />
                                <g clip-path="url(#clip0_98_519)">
                                    <path
                                        d="M30.2684 19.6038L22.9026 12.2378C22.6923 12.0275 22.4121 11.9121 22.1132 11.9121C21.8141 11.9121 21.534 12.0277 21.3238 12.2378L20.655 12.9067C20.4449 13.1166 20.3292 13.397 20.3292 13.696C20.3292 13.9948 20.4449 14.2847 20.655 14.4946L24.9521 18.8012H11.3C10.6845 18.8012 10.1981 19.2831 10.1981 19.8987V20.8444C10.1981 21.4601 10.6845 21.9906 11.3 21.9906H25.0009L20.6552 26.3212C20.4451 26.5315 20.3293 26.8042 20.3293 27.1032C20.3293 27.4018 20.4451 27.6786 20.6552 27.8887L21.3239 28.5555C21.5342 28.7657 21.8143 28.8803 22.1134 28.8803C22.4122 28.8803 22.6925 28.7642 22.9027 28.554L30.2685 21.1882C30.4793 20.9773 30.5952 20.6957 30.5944 20.3964C30.595 20.0961 30.4793 19.8143 30.2684 19.6038Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_98_519">
                                        <rect width="20.3962" height="20.3962" fill="white"
                                            transform="translate(10.1981 10.1982)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </button>
                    </div>
                </section>
            @endif

            <section class="p-6 lg:p-0 w-full lg:w-11/12 mt-12">
                <p class="font-bold text-base text-[#262626] mb-6" id="studylocation" data-aos="fade-up">STUDY
                    LOCATION</p>
                <p class="font-black text-2xl lg:text-4xl mb-2" data-aos="fade-up">Study Change To Learn</p>
                <p class="font-normal text-base text-[#262626]" data-aos="fade-up">You can choose to learn Data
                    Science according to your
                    choice location</p>
                <div class="overflow-x-auto flex mt-10" data-aos="fade-up" id="study-change-location">
                    <div class="flex-none py-0 px-3 first:pl-0 last:pr-6">
                        <div class="relative bg-white rounded-lg shadow-sm w-96">
                            <img src="{{ Vite::asset('resources/image/ilustration/indonesia_2.png') }}"
                                alt="person 1" class="rounded-lg w-full h-64">
                            <p class="font-bold text-2xl p-6 text-center mt-6">Online (Bahasa Indonesia)</p>
                        </div>
                    </div>
                    <div class="flex-none py-0 px-3 first:pl-0 last:pr-6">
                        <div class="relative bg-white rounded-lg shadow-sm w-96">
                            <img src="{{ Vite::asset('resources/image/ilustration/istanbul.png') }}" alt="person 1"
                                class="rounded-lg w-full h-64">
                            <p class="font-bold text-2xl p-6 text-center mt-6">Istanbul</p>
                        </div>
                    </div>
                    <div class="flex-none py-0 px-3 first:pl-0 last:pr-6">
                        <div class="relative bg-white rounded-lg shadow-sm w-96">
                            <img src="{{ Vite::asset('resources/image/ilustration/tokyo.jpg') }}" alt="person 1"
                                class="rounded-lg w-full h-64">
                            <p class="font-bold text-2xl p-6 text-center mt-6">Tokyo</p>
                        </div>
                    </div>
                </div>
                <div class="flex gap-3" data-aos="fade-up">
                    <button type="button" data-aos="fade-up" id="previews-study-change-location">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="40" y="40" width="40" height="40" rx="20"
                                transform="rotate(180 40 40)" fill="#A7A7A7" />
                            <g clip-path="url(#clip0_98_514)">
                                <path
                                    d="M9.73164 20.3963L17.0974 27.7622C17.3077 27.9725 17.5879 28.0879 17.8868 28.0879C18.1859 28.0879 18.466 27.9723 18.6762 27.7622L19.345 27.0933C19.5551 26.8834 19.6708 26.603 19.6708 26.304C19.6708 26.0052 19.5551 25.7153 19.345 25.5054L15.0479 21.1988L28.7 21.1988C29.3155 21.1988 29.8019 20.7169 29.8019 20.1013L29.8019 19.1556C29.8019 18.5399 29.3155 18.0094 28.7 18.0094L14.9991 18.0094L19.3448 13.6788C19.5549 13.4686 19.6707 13.1958 19.6707 12.8968C19.6707 12.5982 19.5549 12.3214 19.3448 12.1113L18.6761 11.4445C18.4658 11.2343 18.1857 11.1197 17.8866 11.1197C17.5878 11.1197 17.3075 11.2358 17.0973 11.446L9.73148 18.8118C9.52072 19.0228 9.40481 19.3043 9.40564 19.6036C9.40498 19.9039 9.52072 20.1857 9.73164 20.3963Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_98_514">
                                    <rect width="20.3962" height="20.3962" fill="white"
                                        transform="translate(29.8019 29.8018) rotate(180)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                    <button type="button" data-aos="fade-up" id="next-study-change-location">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="40" height="40" rx="20" fill="#FF9500" />
                            <g clip-path="url(#clip0_98_519)">
                                <path
                                    d="M30.2684 19.6038L22.9026 12.2378C22.6923 12.0275 22.4121 11.9121 22.1132 11.9121C21.8141 11.9121 21.534 12.0277 21.3238 12.2378L20.655 12.9067C20.4449 13.1166 20.3292 13.397 20.3292 13.696C20.3292 13.9948 20.4449 14.2847 20.655 14.4946L24.9521 18.8012H11.3C10.6845 18.8012 10.1981 19.2831 10.1981 19.8987V20.8444C10.1981 21.4601 10.6845 21.9906 11.3 21.9906H25.0009L20.6552 26.3212C20.4451 26.5315 20.3293 26.8042 20.3293 27.1032C20.3293 27.4018 20.4451 27.6786 20.6552 27.8887L21.3239 28.5555C21.5342 28.7657 21.8143 28.8803 22.1134 28.8803C22.4122 28.8803 22.6925 28.7642 22.9027 28.554L30.2685 21.1882C30.4793 20.9773 30.5952 20.6957 30.5944 20.3964C30.595 20.0961 30.4793 19.8143 30.2684 19.6038Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_98_519">
                                    <rect width="20.3962" height="20.3962" fill="white"
                                        transform="translate(10.1981 10.1982)" />
                                </clipPath>
                            </defs>
                        </svg>

                    </button>
                </div>
            </section>

            <section class="alumni p-6 lg:p-0 w-full lg:w-11/12 mt-12" id="alumni">
                <p class="font-bold text-base text-[#262626] mb-6" data-aos="fade-up">All Alumni Story</p>
                <p class="font-black text-2xl lg:text-4xl mb-2" data-aos="fade-up">What alumni say about QarirLabs
                </p>
                <p class="font-normal text-base text-[#262626]" data-aos="fade-up">Listen to the stories of alumni
                    of
                    the Data Science
                    Bootcamp program at QarirLabs!</p>
                <div class="overflow-x-auto flex" data-aos="fade-up">
                    <div class="flex-none py-0 px-3 first:pl-0 last:pr-6">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="w-96 p-3">
                                <div class="bg-white rounded-lg p-8 shadow-sm">
                                    <div class="flex ">
                                        <img src="https://media.licdn.com/dms/image/C4D03AQHeB24ExRKugg/profile-displayphoto-shrink_400_400/0/1660618827710?e=1686787200&v=beta&t=YToE3E5bcjPZRk6bURCNITIsvyNt4EMu_gnSTkcf2FM"
                                            alt="avatar 1" class="w-12 h-12 rounded-full">
                                        <div class="ml-5">
                                            <p class="font-medium text-base text-black">Hieronymus Kopong Bali</p>
                                            <p class="font-medium text-xs text-[#0E144A] opacity-60">Marketing Manager
                                                at KUMPUL | Digital Marketing & Startup Practitioner | BNSP Certified
                                            </p>
                                        </div>
                                    </div>
                                    <p class="font-medium text-base text-[#262626] mt-5">"Here, I not only get to
                                        attend fun classes, but also improve my networking and knowledge because of the
                                        highly experienced trainer." Hieronymus </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none py-0 px-3 first:pl-0 last:pr-6">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="w-96 p-3">
                                <div class="bg-white rounded-lg p-8 shadow-sm">
                                    <div class="flex ">
                                        <img src="https://media.licdn.com/dms/image/C5603AQFryXM8t0zqWQ/profile-displayphoto-shrink_400_400/0/1606718704142?e=1686787200&v=beta&t=SFyLMX9m1oZx6eAYE-irXPYSvvCgy9MbI2GFuBxrNTE"
                                            alt="avatar 1" class="w-12 h-12 rounded-full">
                                        <div class="ml-5">
                                            <p class="font-medium text-base text-black">Tyas Fitri Anggarini</p>
                                            <p class="font-medium text-xs text-[#0E144A] opacity-60">Brand Performance
                                                & Strategy at majoo Indonesia</p>
                                        </div>
                                    </div>
                                    <p class="font-medium text-base text-[#262626] mt-5"> "Turning my dream of working
                                        as a performance specialist into reality by starting to learn Digital Marketing
                                        Bootcamp!"-Tyas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none py-0 px-3 first:pl-0 last:pr-6">
                        <div class="flex flex-col items-center justify-center gap-3">

                            <div class="w-96 p-3">
                                <div class="bg-white rounded-lg p-8 shadow-sm">
                                    <div class="flex ">
                                        <img src="https://media.licdn.com/dms/image/D5635AQFrseaaiRITpg/profile-framedphoto-shrink_400_400/0/1680666708180?e=1682132400&v=beta&t=3QlK58CPrXZ-V50l2dYLngGUQG5jHZ4lrs4Ipe5W2Dw"
                                            alt="avatar 1" class="w-12 h-12 rounded-full">
                                        <div class="ml-5">
                                            <p class="font-medium text-base text-black">Angeline Lie </p>
                                            <p class="font-medium text-xs text-[#0E144A] opacity-60">Founder & CEO at
                                                Digmo Agency</p>
                                        </div>
                                    </div>
                                    <p class="font-medium text-base text-[#262626] mt-5">"The learning materials are
                                        very comprehensive, the classes are well-structured, and the consultation
                                        service is satisfying." - Angeline Lie</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none py-0 px-3 first:pl-0 last:pr-6">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="w-96 p-3">
                                <div class="bg-white rounded-lg p-8 shadow-sm">
                                    <div class="flex ">
                                        <img src="https://media.licdn.com/dms/image/C5103AQGVjs1quxAH8A/profile-displayphoto-shrink_400_400/0/1542432196651?e=1686787200&v=beta&t=9asmkpZvcFBm64x2AFDWroqv3TTsUrNOCf4YCMaY0pM"
                                            alt="avatar 1" class="w-12 h-12 rounded-full">
                                        <div class="ml-5">
                                            <p class="font-medium text-base text-black">Balad Al Barokah</p>
                                            <p class="font-medium text-xs text-[#0E144A] opacity-60">Growth Analyst at
                                                MGD Digital Marketing Consultant</p>
                                        </div>
                                    </div>
                                    <p class="font-medium text-base text-[#262626] mt-5">"Qarirlabs opens up a new
                                        opportunity to work in the digital field!"- Balad </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none py-0 px-3 first:pl-0 last:pr-6">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="w-96 p-3">
                                <div class="bg-white rounded-lg p-8 shadow-sm">
                                    <div class="flex ">
                                        <img src="https://media.licdn.com/dms/image/C5603AQG8h--cdyYYRA/profile-displayphoto-shrink_400_400/0/1622167619010?e=1686787200&v=beta&t=pt0lB-J_pJN1fndt9dOagpPc3fGi_Eu4tY5_WMuP-VY"
                                            alt="avatar 1" class="w-12 h-12">
                                        <div class="ml-5">
                                            <p class="font-medium text-base text-black">Andimas Iben D. </p>
                                            <p class="font-medium text-xs text-[#0E144A] opacity-60">Msc. Marketing
                                                Candidate at RuG | Ex - Tokopedia | LPDP Awardee PK-194</p>
                                        </div>
                                    </div>
                                    <p class="font-medium text-base text-[#262626] mt-5">"QarirLabs helped me to gain
                                        a deeper understanding of data science. After taking their course and staying
                                        connected with my mentor, I was able to start working at my dream company using
                                        the significantly improved skills." - Andimas Iben </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none py-0 px-3 first:pl-0 last:pr-6">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="w-96 p-3">
                                <div class="bg-white rounded-lg p-8 shadow-sm">
                                    <div class="flex ">
                                        <img src="https://media.licdn.com/dms/image/C4E03AQFSzaO6pHzsUA/profile-displayphoto-shrink_400_400/0/1623405781794?e=1686787200&v=beta&t=zqlyqp4DRq3XiG4hYqgXWv4_3R6URXpA-IS5xT_moFU"
                                            alt="avatar 1" class="w-12 h-12">
                                        <div class="ml-5">
                                            <p class="font-medium text-base text-black">Indira Yasmin Amarti</p>
                                            <p class="font-medium text-xs text-[#0E144A] opacity-60">Promo Planner at
                                                NET MEDIATAMA TELEVISI</p>
                                        </div>
                                    </div>
                                    <p class="font-medium text-base text-[#262626] mt-5">As a layman, the class was
                                        presented in an engaging manner, and also guided by experienced practitioners so
                                        that various case studies could be solved."- Indira Yasmine</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-3" data-aos="fade-up">
                    <a href="#">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="40" y="40" width="40" height="40" rx="20"
                                transform="rotate(180 40 40)" fill="#A7A7A7" />
                            <g clip-path="url(#clip0_98_514)">
                                <path
                                    d="M9.73164 20.3963L17.0974 27.7622C17.3077 27.9725 17.5879 28.0879 17.8868 28.0879C18.1859 28.0879 18.466 27.9723 18.6762 27.7622L19.345 27.0933C19.5551 26.8834 19.6708 26.603 19.6708 26.304C19.6708 26.0052 19.5551 25.7153 19.345 25.5054L15.0479 21.1988L28.7 21.1988C29.3155 21.1988 29.8019 20.7169 29.8019 20.1013L29.8019 19.1556C29.8019 18.5399 29.3155 18.0094 28.7 18.0094L14.9991 18.0094L19.3448 13.6788C19.5549 13.4686 19.6707 13.1958 19.6707 12.8968C19.6707 12.5982 19.5549 12.3214 19.3448 12.1113L18.6761 11.4445C18.4658 11.2343 18.1857 11.1197 17.8866 11.1197C17.5878 11.1197 17.3075 11.2358 17.0973 11.446L9.73148 18.8118C9.52072 19.0228 9.40481 19.3043 9.40564 19.6036C9.40498 19.9039 9.52072 20.1857 9.73164 20.3963Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_98_514">
                                    <rect width="20.3962" height="20.3962" fill="white"
                                        transform="translate(29.8019 29.8018) rotate(180)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="40" height="40" rx="20" fill="#0F5B89" />
                            <g clip-path="url(#clip0_98_519)">
                                <path
                                    d="M30.2684 19.6038L22.9026 12.2378C22.6923 12.0275 22.4121 11.9121 22.1132 11.9121C21.8141 11.9121 21.534 12.0277 21.3238 12.2378L20.655 12.9067C20.4449 13.1166 20.3292 13.397 20.3292 13.696C20.3292 13.9948 20.4449 14.2847 20.655 14.4946L24.9521 18.8012H11.3C10.6845 18.8012 10.1981 19.2831 10.1981 19.8987V20.8444C10.1981 21.4601 10.6845 21.9906 11.3 21.9906H25.0009L20.6552 26.3212C20.4451 26.5315 20.3293 26.8042 20.3293 27.1032C20.3293 27.4018 20.4451 27.6786 20.6552 27.8887L21.3239 28.5555C21.5342 28.7657 21.8143 28.8803 22.1134 28.8803C22.4122 28.8803 22.6925 28.7642 22.9027 28.554L30.2685 21.1882C30.4793 20.9773 30.5952 20.6957 30.5944 20.3964C30.595 20.0961 30.4793 19.8143 30.2684 19.6038Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_98_519">
                                    <rect width="20.3962" height="20.3962" fill="white"
                                        transform="translate(10.1981 10.1982)" />
                                </clipPath>
                            </defs>
                        </svg>

                    </a>
                </div>
            </section>

            <section class="p-6 lg:p-0 w-full lg:w-11/12 mt-12">
                <p class="font-bold text-base text-[#262626] mb-6" id="partnerships" data-aos="fade-up">
                    PARTNERSHIPS</p>
                <p class="font-black text-2xl lg:text-4xl mb-2"data-aos="fade-up">Graduates have Worked in</p>
                <div class="mt-8 flex flex-row overflow-x-auto lg:flex-wrap justify-start items-center">
                    <img src="{{ Vite::asset('resources/image/icon/detsu_grey.png') }}" alt="dentsu"
                        class="h-14 object-cover px-3 pt-5 mt-3" data-aos="fade-up">
                    <img src="{{ Vite::asset('resources/image/icon/tokopedia.png') }}" alt="tokopedia"
                        class="h-14 object-cover px-3 pt-5 mt-3" data-aos="fade-up">
                    <img src="{{ Vite::asset('resources/image/icon/danone.png') }}" alt="danone"
                        class="h-14 object-cover px-3 pt-5 mt-3" data-aos="fade-up">
                    <img src="{{ Vite::asset('resources/image/icon/kaskus.png') }}" alt="kaskus"
                        class="h-9 object-cover px- pt-5 mt-3" data-aos="fade-up">
                    <img src="{{ Vite::asset('resources/image/icon/stick_earn.png') }}" alt="stick_earn"
                        class="h-12 object-cover px-3 pt-5 mt-3 ml-5" data-aos="fade-up">
                    <img src="{{ Vite::asset('resources/image/icon/telkom_indonesia.png') }}"
                        alt="telkom_indonesia" class="h-14 object-cover px-3 pt-5 mt-3" data-aos="fade-up">
                </div>
            </section>

            <section class="portofolio p-6 lg:p-0 w-full lg:w-11/12 mt-12" id="portofolio">
                <p class="font-bold text-base text-[#262626] mb-6" data-aos="fade-up">PORTOFOLIO ALUMNI</p>
                <p class="font-black text-2xl lg:text-4xl mb-2" data-aos="fade-up">Portfolio Student at Bootcamp
                    QarirLabs</p>
                <p class="font-normal text-base text-[#262626]" data-aos="fade-up">Listen to the stories of alumni
                    of the Data Science
                    Bootcamp program at QarirLabs!</p>
                <div class="overflow-x-auto flex" data-aos="fade-up" id="portofolio-slider">
                    <div class="flex-none" data-aos="fade-up">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="w-80 p-3">
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <img src="{{ Vite::asset('resources/image/portofolio/digital_marketin_1.png') }}"
                                        alt="ilustration 4 rounded-xl">
                                    <div class="p-4">
                                        <p class="font-bold text-2xl text-[#262626] mb-4">Disney+ Hotstar Strategi
                                            Campaign</p>
                                        <p class="font-bold text-base text-[#262626] mb-2">Created by</p>
                                        <p class="font-normal text-base text-[#262626]">Group 4</p>
                                        <div class="mt-12 flex w-full text-center">
                                            <a href="https://drive.google.com/file/d/1JsVLjjQFgtefF0X7P9OGviKCWAxPwioV/view?usp=sharing"
                                                target="_blank"
                                                class="w-full text-[#0F5B89] px-10 py-2 rounded-md text-lg font-bold mb-3 outline outline-1 outline-[#0F5B89]">See
                                                Portofolio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none" data-aos="fade-up">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="w-80 p-3">
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <img src="{{ Vite::asset('resources/image/portofolio/digital_marketing_2.png') }}"
                                        alt="ilustration 4 rounded-xl">
                                    <div class="p-4">
                                        <p class="font-bold text-2xl text-[#262626] mb-4">Takoyaki Disini</p>
                                        <p class="font-bold text-base text-[#262626] mb-2">Created by</p>
                                        <p class="font-normal text-base text-[#262626]">Group 1</p>
                                        <div class="mt-12 flex w-full text-center">
                                            <a href="https://drive.google.com/file/d/1aUGT3GxkIWt3eUWoKJ5z6QvOmKcsEIPc/view?usp=sharing"
                                                target="_blank"
                                                class="w-full text-[#0F5B89] px-10 py-2 rounded-md text-lg font-bold mb-3 outline outline-1 outline-[#0F5B89]">See
                                                Portofolio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none" data-aos="fade-up">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="w-80 p-3">
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <img src="{{ Vite::asset('resources/image/portofolio/digital_marketing_3.png') }}"
                                        alt="ilustration 4 rounded-xl">
                                    <div class="p-4">
                                        <p class="font-bold text-2xl text-[#262626] mb-4">Soffi Beauty</p>
                                        <p class="font-bold text-base text-[#262626] mb-2">Created by</p>
                                        <p class="font-normal text-base text-[#262626]">Group 3</p>
                                        <div class="mt-12 flex w-full text-center">
                                            <a href="https://drive.google.com/file/d/1IdPOKd5v84YGDvhfNMmlFunG8k1AousD/view?usp=sharing "
                                                target="_blank"
                                                class="w-full text-[#0F5B89] px-10 py-2 rounded-md text-lg font-bold mb-3 outline outline-1 outline-[#0F5B89]">See
                                                Portofolio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-3" data-aos="fade-up">
                    <button type="button" id="previews-portofolio">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="40" y="40" width="40" height="40" rx="20"
                                transform="rotate(180 40 40)" fill="#A7A7A7" />
                            <g clip-path="url(#clip0_98_514)">
                                <path
                                    d="M9.73164 20.3963L17.0974 27.7622C17.3077 27.9725 17.5879 28.0879 17.8868 28.0879C18.1859 28.0879 18.466 27.9723 18.6762 27.7622L19.345 27.0933C19.5551 26.8834 19.6708 26.603 19.6708 26.304C19.6708 26.0052 19.5551 25.7153 19.345 25.5054L15.0479 21.1988L28.7 21.1988C29.3155 21.1988 29.8019 20.7169 29.8019 20.1013L29.8019 19.1556C29.8019 18.5399 29.3155 18.0094 28.7 18.0094L14.9991 18.0094L19.3448 13.6788C19.5549 13.4686 19.6707 13.1958 19.6707 12.8968C19.6707 12.5982 19.5549 12.3214 19.3448 12.1113L18.6761 11.4445C18.4658 11.2343 18.1857 11.1197 17.8866 11.1197C17.5878 11.1197 17.3075 11.2358 17.0973 11.446L9.73148 18.8118C9.52072 19.0228 9.40481 19.3043 9.40564 19.6036C9.40498 19.9039 9.52072 20.1857 9.73164 20.3963Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_98_514">
                                    <rect width="20.3962" height="20.3962" fill="white"
                                        transform="translate(29.8019 29.8018) rotate(180)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                    <button type="button" id="next-portofolio">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="40" height="40" rx="20" fill="#0F5B89" />
                            <g clip-path="url(#clip0_98_519)">
                                <path
                                    d="M30.2684 19.6038L22.9026 12.2378C22.6923 12.0275 22.4121 11.9121 22.1132 11.9121C21.8141 11.9121 21.534 12.0277 21.3238 12.2378L20.655 12.9067C20.4449 13.1166 20.3292 13.397 20.3292 13.696C20.3292 13.9948 20.4449 14.2847 20.655 14.4946L24.9521 18.8012H11.3C10.6845 18.8012 10.1981 19.2831 10.1981 19.8987V20.8444C10.1981 21.4601 10.6845 21.9906 11.3 21.9906H25.0009L20.6552 26.3212C20.4451 26.5315 20.3293 26.8042 20.3293 27.1032C20.3293 27.4018 20.4451 27.6786 20.6552 27.8887L21.3239 28.5555C21.5342 28.7657 21.8143 28.8803 22.1134 28.8803C22.4122 28.8803 22.6925 28.7642 22.9027 28.554L30.2685 21.1882C30.4793 20.9773 30.5952 20.6957 30.5944 20.3964C30.595 20.0961 30.4793 19.8143 30.2684 19.6038Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_98_519">
                                    <rect width="20.3962" height="20.3962" fill="white"
                                        transform="translate(10.1981 10.1982)" />
                                </clipPath>
                            </defs>
                        </svg>

                    </button>
                </div>
            </section>

            <section class="gethired p-6 lg:p-0 w-full lg:w-11/12 mt-14">
                <p class="font-bold text-base text-[#262626] mb-6" id="gethired" data-aos="fade-up">GET HIRED</p>
                <p class="font-black text-2xl lg:text-4xl mb-2" data-aos="fade-up">3-Stage Work Plan</p>
                <div class="flex flex-wrap mt-8 justify-between">
                    <div class="w-full lg:w-1/3 mb-8" data-aos="fade-up">
                        <div
                            class="bg-white flex flex-col justify-center items-center lg:mr-6 h-80 shadow-sm rounded-xl p-6">
                            <svg width="49" height="48" viewBox="0 0 49 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M28.5 4H12.5C11.4391 4 10.4217 4.42143 9.67159 5.17157C8.92144 5.92172 8.50002 6.93913 8.50002 8V40C8.50002 41.0609 8.92144 42.0783 9.67159 42.8284C10.4217 43.5786 11.4391 44 12.5 44H26.5C25.68 43.5 24.9 42.88 24.22 42.2C22.9629 41.0444 21.9467 39.6516 21.2298 38.1019C20.5128 36.5521 20.1093 34.876 20.0424 33.1697C19.9755 31.4635 20.2465 29.7608 20.8399 28.1597C21.4333 26.5586 22.3373 25.0905 23.5 23.84C27.88 19 35.16 18.26 40.5 22V16L28.5 4ZM26.5 18V7L37.5 18H26.5ZM41.12 37.8C43.78 33.58 42.5 28 38.32 25.36C34.1 22.7 28.5 24 25.88 28.16C23.2 32.38 24.5 37.94 28.68 40.6C31.6 42.46 35.32 42.46 38.26 40.64L44.5 46.78L47.28 44L41.12 37.8ZM33.5 38C32.1739 38 30.9022 37.4732 29.9645 36.5355C29.0268 35.5979 28.5 34.3261 28.5 33C28.5 31.6739 29.0268 30.4021 29.9645 29.4645C30.9022 28.5268 32.1739 28 33.5 28C34.8261 28 36.0979 28.5268 37.0355 29.4645C37.9732 30.4021 38.5 31.6739 38.5 33C38.5 34.3261 37.9732 35.5979 37.0355 36.5355C36.0979 37.4732 34.8261 38 33.5 38Z"
                                    fill="#FFAC23" />
                            </svg>

                            <p class="mt-5 text-center font-bold text-sm text-[#262626] opacity-80">Real Study Case
                            </p>
                            <p class="mt-3 font-normal text-base text-center text-[#262626] opacity-80">You will work
                                on a real company case and fill your LinkedIn profiles with professional projects. By
                                doing so, you will shine in the job market.</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 mb-8" data-aos="fade-up">
                        <div
                            class="bg-white flex flex-col justify-center items-center lg:mr-6 h-80 shadow-sm rounded-xl p-6">
                            <svg width="49" height="48" viewBox="0 0 49 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M26.5 18H37.5L26.5 7V18ZM12.5 4H28.5L40.5 16V40C40.5 41.0609 40.0786 42.0783 39.3284 42.8284C38.5783 43.5786 37.5609 44 36.5 44H12.5C11.4391 44 10.4217 43.5786 9.67157 42.8284C8.92143 42.0783 8.5 41.0609 8.5 40V8C8.5 5.78 10.28 4 12.5 4ZM28.5 40V38C28.5 35.34 23.16 34 20.5 34C17.84 34 12.5 35.34 12.5 38V40H28.5ZM20.5 24C19.4391 24 18.4217 24.4214 17.6716 25.1716C16.9214 25.9217 16.5 26.9391 16.5 28C16.5 29.0609 16.9214 30.0783 17.6716 30.8284C18.4217 31.5786 19.4391 32 20.5 32C21.5609 32 22.5783 31.5786 23.3284 30.8284C24.0786 30.0783 24.5 29.0609 24.5 28C24.5 26.9391 24.0786 25.9217 23.3284 25.1716C22.5783 24.4214 21.5609 24 20.5 24Z"
                                    fill="#FFB72B" />
                            </svg>


                            <p class="mt-5 text-center font-bold text-sm text-[#262626] opacity-80">CV Review
                            </p>
                            <p class="mt-3 font-normal text-base text-center text-[#262626] opacity-80">With your
                                personal career consultant, you will be able to write an effective cover letter and
                                practice interviewing with professional recruiters.</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 mb-8" data-aos="fade-up">
                        <div
                            class="bg-white flex flex-col justify-center items-center lg:mr-6 h-80 shadow-sm rounded-xl p-6">
                            <svg width="49" height="48" viewBox="0 0 49 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_226_1196)">
                                    <path
                                        d="M30.5001 13C29.3961 13 28.5001 12.104 28.5001 11V8H20.5001V11C20.5001 12.104 19.6041 13 18.5001 13C17.3961 13 16.5001 12.104 16.5001 11V8C16.5001 5.794 18.2941 4 20.5001 4H28.5001C30.7061 4 32.5001 5.794 32.5001 8V11C32.5001 12.104 31.6041 13 30.5001 13Z"
                                        fill="url(#paint0_linear_226_1196)" />
                                    <path
                                        d="M25.9201 30.7602C25.5601 30.9002 25.0401 31.0002 24.5001 31.0002C23.9601 31.0002 23.4401 30.9002 22.9601 30.7202L0.500061 23.2402V38.5002C0.500061 41.5402 2.96006 44.0002 6.00006 44.0002H43.0001C46.0401 44.0002 48.5001 41.5402 48.5001 38.5002V23.2402L25.9201 30.7602Z"
                                        fill="url(#paint1_linear_226_1196)" />
                                    <path
                                        d="M48.5001 15.5V20.08L24.9801 27.92C24.8201 27.98 24.6601 28 24.5001 28C24.3401 28 24.1801 27.98 24.0201 27.92L0.500061 20.08V15.5C0.500061 12.46 2.96006 10 6.00006 10H43.0001C46.0401 10 48.5001 12.46 48.5001 15.5Z"
                                        fill="url(#paint2_linear_226_1196)" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_226_1196" x1="16.5001" y1="4"
                                        x2="24.1915" y2="17.6736" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFB72B" />
                                        <stop offset="1" stop-color="#FFA01B" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_226_1196" x1="0.500061" y1="23.2402"
                                        x2="15.6277" y2="58.2175" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFB72B" />
                                        <stop offset="1" stop-color="#FFA01B" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_226_1196" x1="0.500061" y1="10"
                                        x2="12.3357" y2="41.5616" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFB72B" />
                                        <stop offset="1" stop-color="#FFA01B" />
                                    </linearGradient>
                                    <clipPath id="clip0_226_1196">
                                        <rect width="48" height="48" fill="white"
                                            transform="translate(0.500061)" />
                                    </clipPath>
                                </defs>
                            </svg>

                            <p class="mt-5 text-center font-bold text-sm text-[#262626] opacity-80">Job Connected
                            </p>
                            <p class="mt-3 font-normal text-base text-center text-[#262626] opacity-80">We will
                                continue to support you until you find a company that is the right fit for you. We will
                                be there for you until you complete your probation period at the company, that is when
                                our job is done.</p>
                        </div>
                    </div>

                </div>
            </section>

            <section class="p-6 lg:p-0 w-full lg:w-11/12 mt-12" id="admissions">
                <div class="flex flex-wrap lg:flex-nowrap lg:flex-row justify-center items-center">
                    <div class="lg:hidden w-full lg:w-1/2 mb-5" data-aos="fade-up">
                        <img src="{{ Vite::asset('resources/image/ilustration/ilustration_10.png') }}"
                            alt="ilustration 9" class="object-contain rounded-xl">
                    </div>
                    <div class="w-full lg:w-1/2 lg:mr-16" data-aos="fade-up">
                        <p class="font-bold text-base text-[#262626] mb-5">ADMISSIONS</p>
                        <p class="font-bold text-2xl lg:text-4xl text-black mb-5">Explore About Yourself</p>
                        <p class="font-medium text-base lg:text-lg text-[#262626] opacity-60 mb-5">Take the free
                            assessment and
                            uncover things you didn’t know about yourself.
                        </p>
                        <button
                            class="bg-[#FF9500] px-10 py-4 rounded-md text-white text-lg font-bold mb-11 mt-6 w-full lg:w-auto text-center">Take
                            Assessment Test</button>
                    </div>
                    <div class="hidden lg:block w-full lg:w-1/2" data-aos="fade-up">
                        <img src="{{ Vite::asset('resources/image/ilustration/ilustration_10.png') }}"
                            alt="ilustration 9" class="object-contain rounded-xl">
                    </div>

                </div>
            </section>


            <section class="ready_join p-6 lg:p-0 w-full lg:w-11/12 mt-12 mb-10" id="ready_join"
                data-aos="fade-up">
                <div class="relative flex justify-end rounded-xl">
                    <img src="{{ Vite::asset('resources/image/ilustration/ilustration_5.png') }}"
                        alt="ilustration 2" class="h-80 rounded-xl">
                    <div class="absolute top-0 left-0 h-80 w-full rounded-xl"
                        style="background: linear-gradient(90.49deg, #00263D 36.68%, rgba(255, 255, 255, 0) 98.95%);">
                    </div>
                    <div class="absolute top-0 left-0 h-80 w-full flex justify-start items-center ">
                        <div class="flex flex-col lg:ml-28 p-10 lg:p-0">
                            <p class="font-black text-2xl lg:text-4xl text-white">Ready to be the next <br>Master Data
                                Science?
                            </p>
                            <div>
                                <button
                                    class="bg-[#FF9500] px-10 py-2 rounded-md text-white text-lg font-bold mb-11 mt-10">Let's
                                    Get Started</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-landing-layout>
