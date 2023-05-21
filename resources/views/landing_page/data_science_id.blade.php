<x-landing-layout>
    @push('scripts')
        <script>
            const sections = document.querySelectorAll('section')
            const sideNavMenu = document.querySelectorAll('.side-nav-menu')

            // Create an Intersection Observer instance
            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            // If a section is in the current view
                            // Add an "active" class to the corresponding navigation link
                            const targetId = entry.target.getAttribute("id");
                            sideNavMenu.forEach((link) => {
                                let children = link.children;
                                if (link.getAttribute("href") === `#${targetId}`) {
                                    if (children[1].classList.contains('text-[#A5A5A5]')) {
                                        children[1].classList.replace("text-[#A5A5A5]",
                                            "text-[{{ $themeColor }}]");
                                    }
                                    if (children[1].classList.contains('font-medium')) {
                                        children[1].classList.replace("font-medium", "font-bold");
                                    }
                                    if (children[0].classList.contains('bg-[#A5A5A5]')) {
                                        children[0].classList.replace("bg-[#A5A5A5]",
                                            "bg-[{{ $themeColor }}]");
                                    }
                                    if (children[0].classList.contains('w-0.5')) {
                                        children[0].classList.replace("w-0.5", "w-1");
                                    }
                                } else {
                                    if (targetId != null && targetId != 'programFee') {
                                        if (children[1].classList.contains('text-[{{ $themeColor }}]')) {
                                            children[1].classList.replace("text-[{{ $themeColor }}]",
                                                "text-[#A5A5A5]");
                                        }
                                        if (children[1].classList.contains('font-bold')) {
                                            children[1].classList.replace("font-bold", "font-medium");
                                        }
                                        if (children[0].classList.contains('bg-[{{ $themeColor }}]')) {
                                            children[0].classList.replace("bg-[{{ $themeColor }}]",
                                                "bg-[#A5A5A5]");
                                        }
                                        if (children[0].classList.contains('w-1')) {
                                            children[0].classList.replace("w-1", "w-0.5");
                                        }
                                    }
                                }
                            });
                        }
                    });
                }, {
                    threshold: 0.5
                } // Customize the threshold as needed
            );

            // Observe each section
            sections.forEach((section) => {
                observer.observe(section);
            });

            sideNavMenu.forEach(element => {
                element.addEventListener('click', function(e) {
                    const target = event.target;
                    const parent = target.parentNode;
                    removeAllSelected();
                    setTimeout(() => {
                        const previousElement = target.previousElementSibling;
                        if (parent.getAttribute('href') == window.location.hash) {
                            if (target.classList.contains('text-[#A5A5A5]')) {
                                target.classList.replace("text-[#A5A5A5]",
                                    "text-[{{ $themeColor }}]");
                            }
                            if (target.classList.contains('font-medium')) {
                                target.classList.replace("font-medium", "font-bold");
                            }
                            if (previousElement.classList.contains('bg-[#A5A5A5]')) {
                                previousElement.classList.replace("bg-[#A5A5A5]",
                                    "bg-[{{ $themeColor }}]");
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
                        if (item.classList.contains('text-[{{ $themeColor }}]')) {
                            item.classList.replace("text-[{{ $themeColor }}]", "text-[#A5A5A5]");
                        }

                        if (item.classList.contains('font-bold')) {
                            item.classList.replace("font-bold", "font-medium");
                        }


                        if (item.classList.contains('bg-[{{ $themeColor }}]')) {
                            item.classList.replace("bg-[{{ $themeColor }}]", "bg-[#A5A5A5]");
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
            const alumniSlider = document.getElementById('alumni-slider');
            const scrollAmount = 400;

            try {
                document.getElementById('previews-destination').addEventListener('click', function() {
                    destinationScroller.scroll({
                        left: destinationScroller.scrollLeft - scrollAmount,
                        behavior: 'smooth'
                    });
                })

                document.getElementById('next-destination').addEventListener('click', function() {
                    destinationScroller.scroll({
                        left: destinationScroller.scrollLeft + scrollAmount,
                        behavior: 'smooth'
                    });
                })
            } catch (error) {

            }

            document.getElementById('previews-alumni').addEventListener('click', function() {
                alumniSlider.scroll({
                    left: alumniSlider.scrollLeft - scrollAmount,
                    behavior: 'smooth'
                });
            })

            document.getElementById('next-alumni').addEventListener('click', function() {
                alumniSlider.scroll({
                    left: alumniSlider.scrollLeft + scrollAmount,
                    behavior: 'smooth'
                });
            })

            // document.getElementById('previews-study-change-location').addEventListener('click', function() {
            //     schoolChange.scroll({
            //         left: schoolChange.scrollLeft - scrollAmount,
            //         behavior: 'smooth'
            //     });
            // })

            // document.getElementById('next-study-change-location').addEventListener('click', function() {
            //     schoolChange.scroll({
            //         left: schoolChange.scrollLeft + scrollAmount,
            //         behavior: 'smooth'
            //     });
            // })

            // document.getElementById('previews-portofolio').addEventListener('click', function() {
            //     portoSlider.scroll({
            //         left: portoSlider.scrollLeft - scrollAmount,
            //         behavior: 'smooth'
            //     });
            // })

            // document.getElementById('next-portofolio').addEventListener('click', function() {
            //     portoSlider.scroll({
            //         left: portoSlider.scrollLeft + scrollAmount,
            //         behavior: 'smooth'
            //     });
            // })
        </script>
    @endpush
    <section
        class="hero static bg-gradient-to-t from-[{{ $themeColor2 }}] to-[#FFFFFF] w-full h-[65rem] lg:h-[46rem] -mt-20">
        <svg class="absolute left-0 top-40 h-80 w-80" viewBox="0 0 572 624" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.3" filter="url(#filter0_f_33_300)">
                <circle cx="144.5" cy="348.5" r="193.5" fill="{{ $themeColor }}" />
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
                        {{-- @if (count($heroImages) == 1 && $slug == 'online') --}}
                        <div class="relative flex lg:h-96 lg:w-96 h-80 w-80 mx-auto justify-center items-center">
                            @if (strtolower($slug) != 'indonesia')
                                <div
                                    class="absolute lg:h-96 lg:w-96 w-80 h-80 border-2 border-[{{ $themeColor }}] rounded-xl">
                                </div>
                                <div
                                    class="absolute top-8 left-8 lg:h-96 lg:w-96 w-80 h-80 border-2 border-[{{ $themeColor }} rounded-xl">
                                </div>
                            @endif
                            @foreach ($heroImages as $item)
                                <img src="{{ Vite::asset($item) }}" alt="ilustration 1"
                                    class="object-cover rounded-2xl absolute lg:h-96 lg:w-96 h-80 w-80">
                            @endforeach
                        </div>
                        {{-- @else
                            <div class="p-6 lg:p-0 lg:ml-36">
                                <div class="grid grid-rows-2 grid-flow-col gap-4">
                                    <div class="row-span-2 relative" data-aos="fade-up">
                                        <div class="absolute flex w-full h-full justify-center items-center">
                                            <svg class="" width="44" height="44" viewBox="0 0 44 44"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="22" cy="22" r="22" fill="white" />
                                                <path
                                                    d="M17 15.8685C17 15.0698 17.8901 14.5934 18.5547 15.0365L27.5662 21.0442C28.2051 21.4701 28.1455 22.4272 27.4587 22.7706L18.4472 27.2764C17.7823 27.6088 17 27.1253 17 26.382V15.8685Z"
                                                    fill="{{$themeColor}}" />
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
                        @endif --}}

                    </div>
                    <div class="p-6 lg:p-0 flex-auto w-6/12">
                        <div class="text-3xl lg:text-5xl font-black mb-6 lg:mt-16" data-aos="fade-up">
                            {{ ucwords($course) }} <span
                                class="bg-[{{ $themeColor }}] px-2 text-white rounded-lg">Bootcamp</span>
                            <div class="text-[{{ $themeColor }}]">
                                {{ $detail }}</div>
                        </div>
                        <div class="text-[#262626] font-normal text-sm lg:text-2xl mb-6 text-opacity-75 leading-5 lg:leading-9 w-5/7"
                            data-aos="fade-up">
                            @if (strtolower($slug) == 'istanbul')
                                Learn and
                                experience real projects of <span
                                    class="bg-[{{ $themeColor }}] px-2 py-1 text-white rounded-lg">{{ $course }}</span>
                                and
                                land your dream job within 9 months.😍
                            @else
                                @if (strtolower($slug) == 'indonesia')
                                    Lebih dari belajar! Kerjakan proyek, dapatkan bimbingan bersama pakar, bertemu
                                    dengan pemimpin industri data, dan bersiaplah memulai karir menjadi <span
                                        class="bg-[{{ $themeColor }}] px-2 py-1 text-white rounded-lg">data
                                        scientists</span>!😎
                                @else
                                    Learn and
                                    <span class="bg-[{{ $themeColor }}] px-2 py-1 text-white rounded-lg">experience
                                        real
                                        projects</span> of {{ $course }} and
                                    land your dream job within 9 months.😎
                                @endif
                            @endif
                            {{-- {{ strtolower($detail) == 'indonesia'
                                ? 'Belajar bersama pakar terbaik dan dapatkan pengalaman project nyata!'
                                : 'Learn and
                                                                                                                experience real projects of Data Science and
                                                                                                                land your dream job within 9 months.' }} --}}
                        </div>
                        <div class="flex flex-wrap">
                            <button
                                class="text-[{{ $themeColor }}] px-4 lg:py-3 py-2 lg:mr-6 mr-2 rounded-full text-sm font-bold mb-4 lg:mb-11 bg-[{{ $themeColor2 }}]"
                                data-aos="fade-up">Online
                                - Hybrid </button>
                            <button
                                class="text-[{{ $themeColor }}] px-4 lg:py-3 py-2 lg:mr-6 mr-2 rounded-full text-sm font-bold mb-4 lg:mb-11 bg-[{{ $themeColor2 }}]"data-aos="fade-up">Beginner
                                Friendly</button>
                            {{-- @if (strtolower($detail) == 'indonesia')
                                <button
                                    class="text-[{{$themeColor}}] px-4 lg:py-3 py-2 lg:mr-6 mr-2 rounded-full text-sm font-bold mb-4 lg:mb-11 bg-[{{$themeColor2}}]"data-aos="fade-up">120
                                    Job connector</button>
                            @else
                                <button
                                    class="text-[{{$themeColor}}] px-4 lg:py-3 py-2 lg:mr-6 mr-2 rounded-full text-sm font-bold mb-4 lg:mb-11 bg-[{{$themeColor2}}]"data-aos="fade-up">120
                                    limited quota</button>
                            @endif --}}
                        </div>
                        {{-- <div class="mt-4 lg:mt-0 w-full lg:w-11/12 bg-gray-50 rounded-full h-6 dark:bg-gray-200"
                            data-aos="fade-up">
                            <div class="text-xs font-medium text-start p-1 leading-none rounded-full h-6 flex items-center bg-[{{ $themeColor }}]"
                                style="width: 87%;">
                                <span class="ml-6 font-bold text-xs text-white">87% seat has been filled </span>
                            </div>
                        </div> --}}
                        <div class="flex flex-wrap lg:flex-nowrap lg:flex-row mt-8">
                            <button
                                class="bg-[{{ $themeColor }}] px-10 lg:py-4 py-2 rounded-full text-white text-lg font-bold mb-6 w-full lg:w-auto lg:mb-11"
                                data-aos="fade-up">
                                {{-- {{ strtolower($detail) == 'indonesia' ? 'Pilih Lokasi' : 'Choose Destination' }} --}}
                                Daftar Sekarang
                            </button>
                            <a href="https://forms.gle/BMVkjWJ9kKePwoLK6" target="_blank"
                                class="lg:ml-4 text-[{{ $themeColor }}] px-10 lg:py-4 py-2 rounded-full  text-lg font-bold mb-6 w-full lg:w-auto lg:mb-11 outline outline-1 outline-[{{ $themeColor }}]"
                                data-aos="fade-up">Download
                                Syllabus</a>
                        </div>
                    </div>
                    <div class="hidden lg:block mx-auto w-5/12" data-aos="fade-up">
                        {{-- @if (count($heroImages) == 1 && $slug == 'online') --}}
                        <div class="relative flex lg:h-[40rem] lg:w-[40rem]  w-72 h-72">
                            @if (strtolower($slug) != 'indonesia')
                                <div
                                    class="absolute lg:h-96 lg:w-96 w-72 h-72 border-2 border-[{{ $themeColor }}] rounded-xl">
                                </div>
                                <div
                                    class="absolute top-8 left-8 lg:h-96 lg:w-96 w-72 h-72 border-2 border-[{{ $themeColor }}] rounded-xl">
                                </div>
                            @endif
                            @foreach ($heroImages as $item)
                                <img src="{{ Vite::asset($item) }}" alt="ilustration 1"
                                    class="object-cover rounded-2xl">
                            @endforeach
                        </div>
                        {{-- @else
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
                                                    fill="{{$themeColor}}" />
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
                        @endif --}}

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="flex flex-row my-10 lg:p-0 p-6" data-aos="fade-up">
        <div class="hidden lg:block w-4/12 relative">
            <div class="sticky top-10">
                <div class="w-52 mx-auto">
                    <p class="font-black lg:text-2xl">Detail Kursus Data Science</p>
                </div>
                <div class="flex flex-col w-3/6 mx-auto mt-6">
                    <a href="#overview" class="inline-flex items-center ml-4 side-nav-menu">
                        <div class="h-11 w-1 bg-[{{ $themeColor }}] mr-4"></div>
                        <span class="text-[{{ $themeColor }}] font-bold text-lg">Ringkasan</span>
                    </a>
                    <a href="#learcnphase" class="inline-flex items-center ml-4 side-nav-menu">
                        <div class="h-11 w-0.5 bg-[#A5A5A5] mr-4"></div>
                        <span class="text-[#A5A5A5] font-medium text-lg ">Fase Belajar</span>
                    </a>
                    @if (count($destinations) > 0)
                        <a href="#destination" class="inline-flex items-center ml-4 side-nav-menu">
                            <div class="h-11 w-0.5 bg-[#A5A5A5] mr-4"></div>
                            <span class="text-[#A5A5A5] font-medium text-lg">Wisata Tujuan</span>
                        </a>
                    @endif
                    <a href="#studylocation" class="inline-flex items-center ml-4 side-nav-menu">
                        <div class="h-11 w-0.5 bg-[#A5A5A5] mr-4"></div>
                        <span class="text-[#A5A5A5] font-medium text-lg">Lokasi Belajar</span>
                    </a>
                    <a href="#alumni" class="inline-flex items-center ml-4 side-nav-menu">
                        <div class="h-11 w-0.5 bg-[#A5A5A5] mr-4"></div>
                        <span class="text-[#A5A5A5] font-medium text-lg">Cerita Alumni</span>
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
                        <span class="text-[#A5A5A5] font-medium text-lg">Proses Penerimaan</span>
                    </a>
                    <button
                        class="ml-4 mt-8 bg-[{{ $themeColor }}] px-9 py-4 rounded-full text-white text-lg font-bold">Mari
                        Kita Mulai</button>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-8/12">
            <section class="overview w-full lg:w-11/12" id="overview">
                <p class="font-bold text-base text-[#262626] mb-6 uppercase" data-aos="fade-up">Ringkasan</p>
                <p class="font-black text-2xl lg:text-4xl mb-2" data-aos="fade-up">Kenapa Anda harus belajar di
                    {{ ucwords($slug) }}?
                </p>
                <div class="flex flex-col mt-8">
                    @foreach ($whySouldStay as $item)
                        <div class="bg-white rounded-xl p-6 shadow-sm my-3" data-aos="fade-up">
                            <div class="flex flex-row">
                                <div class="w-12 h-12 ">
                                    {!! $item['image'] !!}
                                </div>
                                <p class="ml-6 font-medium text-sm lg:text-base text-[#262626] opacity-80">{!! $item['content'] !!}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <p class="font-black text-2xl lg:text-4xl mb-2 mt-6 capitalize" data-aos="fade-up">Kenapa Bergabung
                    {{config('app.name')}}</p>
                <p class="font-normal text-base text-[#262626]" data-aos="fade-up">Master Data Science dan lihat
                    manfaat setelah
                    kelulusan</p>
                <div class="flex flex-row overflow-x-auto lg:flex-wrap mt-8 justify-between" data-aos="fade-up">
                    <div class="w-full lg:w-1/3 mb-8">
                        <div
                            class="bg-white lg:p-3 p-6 flex flex-col justify-start lg:items-center items-start mr-6 h-60 lg:h-56 w-56 lg:w-auto shadow-sm">
                            <div class="mt-2 lg:mt-5 w-12 h-12">
                                <svg class="mt-3" width="49" height="48" viewBox="0 0 49 48"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                            <stop stop-color="{{ $themeColor }}" />
                                            <stop offset="1" stop-color="{{ $themeColor }}" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_79_3706" x1="0.666656" y1="23.2402"
                                            x2="15.7943" y2="58.2175" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="{{ $themeColor }}" />
                                            <stop offset="1" stop-color="{{ $themeColor }}" />
                                        </linearGradient>
                                        <linearGradient id="paint2_linear_79_3706" x1="0.666656" y1="10"
                                            x2="12.5023" y2="41.5616" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="{{ $themeColor }}" />
                                            <stop offset="1" stop-color="{{ $themeColor }}" />
                                        </linearGradient>
                                        <clipPath id="clip0_79_3706">
                                            <rect width="48" height="48" fill="white"
                                                transform="translate(0.666672)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <p
                                class="text-start lg:text-center lg:font-bold font-medium lg:text-xl text-lg text-[#262626] opacity-80 mt-6 capitalize">
                                Kurikulum terstruktur dengan baik dirancang oleh para ahli</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 mb-8">
                        <div
                            class="bg-white lg:p-3 p-6 flex flex-col justify-start lg:items-center items-start mr-6 h-60 lg:h-56 w-56 lg:w-auto shadow-sm">
                            <div class="mt-2 lg:mt-5 w-12 h-12">
                                <svg width="49" height="48" viewBox="0 0 49 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M38.995 4L28.995 13V35L38.995 26V4ZM13.995 10C10.095 10 5.89498 10.8 2.99498 13V42.32C2.99498 42.82 3.49498 43.32 3.99498 43.32C4.19498 43.32 4.29498 43.18 4.49498 43.18C7.19498 41.88 11.095 41 13.995 41C17.895 41 22.095 41.8 24.995 44C27.695 42.3 32.595 41 35.995 41C39.295 41 42.695 41.62 45.495 43.12C45.695 43.22 45.795 43.18 45.995 43.18C46.495 43.18 46.995 42.68 46.995 42.18V13C45.795 12.1 44.495 11.5 42.995 11V38C40.795 37.3 38.395 37 35.995 37C32.595 37 27.695 38.3 24.995 40V13C22.095 10.8 17.895 10 13.995 10Z"
                                        fill="{{ $themeColor }}" />
                                </svg>
                            </div>
                            <p
                                class="text-start lg:text-center lg:font-bold font-medium text-xl text-[#262626] opacity-80 mt-6 capitalize">
                                Bimbingan oleh Mitra Perekrutan</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 mb-8">
                        <div
                            class="bg-white lg:p-3 p-6 flex flex-col justify-start lg:items-center items-start mr-6 h-60 lg:h-56 w-56 lg:w-auto shadow-sm">
                            <div class="mt-2 lg:mt-5 w-12 h-12">
                                <svg width="49" height="48" viewBox="0 0 49 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <mask id="mask0_327_5439" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                        x="0" y="0" width="49" height="48">
                                        <rect x="0.159973" width="48" height="48" fill="#D9D9D9" />
                                    </mask>
                                    <g mask="url(#mask0_327_5439)">
                                        <path
                                            d="M2.16 40V34.4C2.16 33.2667 2.45167 32.225 3.035 31.275C3.61834 30.325 4.39334 29.6 5.36 29.1C7.42667 28.0667 9.52667 27.2917 11.66 26.775C13.7933 26.2583 15.96 26 18.16 26C20.36 26 22.5267 26.2583 24.66 26.775C26.7933 27.2917 28.8933 28.0667 30.96 29.1C31.9267 29.6 32.7017 30.325 33.285 31.275C33.8683 32.225 34.16 33.2667 34.16 34.4V40H2.16ZM38.16 40V34C38.16 32.5333 37.7517 31.125 36.935 29.775C36.1183 28.425 34.96 27.2667 33.46 26.3C35.16 26.5 36.76 26.8417 38.26 27.325C39.76 27.8083 41.16 28.4 42.46 29.1C43.66 29.7667 44.5767 30.5083 45.21 31.325C45.8433 32.1417 46.16 33.0333 46.16 34V40H38.16ZM18.16 24C15.96 24 14.0767 23.2167 12.51 21.65C10.9433 20.0833 10.16 18.2 10.16 16C10.16 13.8 10.9433 11.9167 12.51 10.35C14.0767 8.78333 15.96 8 18.16 8C20.36 8 22.2433 8.78333 23.81 10.35C25.3767 11.9167 26.16 13.8 26.16 16C26.16 18.2 25.3767 20.0833 23.81 21.65C22.2433 23.2167 20.36 24 18.16 24ZM38.16 16C38.16 18.2 37.3767 20.0833 35.81 21.65C34.2433 23.2167 32.36 24 30.16 24C29.7933 24 29.3267 23.9583 28.76 23.875C28.1933 23.7917 27.7267 23.7 27.36 23.6C28.26 22.5333 28.9517 21.35 29.435 20.05C29.9183 18.75 30.16 17.4 30.16 16C30.16 14.6 29.9183 13.25 29.435 11.95C28.9517 10.65 28.26 9.46667 27.36 8.4C27.8267 8.23333 28.2933 8.125 28.76 8.075C29.2267 8.025 29.6933 8 30.16 8C32.36 8 34.2433 8.78333 35.81 10.35C37.3767 11.9167 38.16 13.8 38.16 16Z"
                                            fill="{{ $themeColor }}" />
                                    </g>
                                </svg>
                            </div>
                            <p
                                class="text-start lg:text-center lg:font-bold font-medium text-xl text-[#262626] opacity-80 mt-6 capitalize">
                                Dilengkapi dengan proyek Pengayaan (Part time Project)</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 mb-8">
                        <div
                            class="bg-white lg:p-3 p-6 flex flex-col justify-start lg:items-center items-start mr-6 h-60 lg:h-56 w-56 lg:w-auto shadow-sm">
                            <div class="mt-2 lg:mt-5 w-12 h-12">
                                <svg width="49" height="48" viewBox="0 0 49 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23.2065 0V7.61692H25.7937V0H23.2063H23.2065ZM12.6421 2.289L10.5224 3.77312L14.8906 10.011L17.0091 8.5268L12.6421 2.289ZM36.3576 2.289L31.9907 8.52684L34.1096 10.011L38.4776 3.77312L36.3579 2.289H36.3576ZM24.4996 9.70096C18.1705 9.70096 13.0398 13.5443 13.0398 18.286L19.5507 38.0039H29.4495L35.9598 18.286C35.9598 13.5444 30.8295 9.70096 24.5002 9.70096H24.4996ZM3.9186 11.9869L3.03464 14.4195L10.1886 17.024L11.0758 14.5926L3.91844 11.9869H3.9186ZM45.0811 11.9869L37.9236 14.5928L38.8079 17.0245L45.9653 14.4195L45.0811 11.9869ZM10.7302 23.1072L3.37424 25.0803L4.04168 27.5775L11.3977 25.6073L10.7304 23.1072H10.7302ZM38.2694 23.1072L37.6025 25.6073L44.9585 27.5772L45.6254 25.0799L38.2694 23.1072V23.1072ZM19.4064 39.4413V42.8687H29.5939V39.4418H19.4064L19.4064 39.4413ZM19.4064 44.5726V48H29.5939V44.5731H19.4064L19.4064 44.5726Z"
                                        fill="{{ $themeColor }}" />
                                </svg>
                            </div>
                            <p
                                class="text-start lg:text-center lg:font-bold font-medium text-xl text-[#262626] opacity-80 mt-6 capitalize">
                                Enrichment program (Part time Project)</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 mb-8">
                        <div
                            class="bg-white lg:p-3 p-6 flex flex-col justify-start lg:items-center items-start mr-6 h-60 lg:h-56 w-56 lg:w-auto shadow-sm">
                            <div class="mt-2 lg:mt-5 w-12 h-12">
                                <svg width="49" height="48" viewBox="0 0 49 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.995 8.99812H29.51L37.7515 0.740205C37.9844 0.505659 38.2614 0.319495 38.5667 0.192452C38.872 0.0654083 39.1994 0 39.5301 0C39.8608 0 40.1882 0.0654083 40.4934 0.192452C40.7987 0.319495 41.0758 0.505659 41.3086 0.740205L47.7716 7.22142C48.2381 7.69027 48.5 8.32451 48.5 8.98561C48.5 9.64671 48.2381 10.2809 47.7716 10.7498L42.0351 16.5053H21.995V21.5101C21.995 22.1738 21.7311 22.8103 21.2613 23.2796C20.7915 23.7489 20.1543 24.0125 19.49 24.0125C18.8256 24.0125 18.1884 23.7489 17.7187 23.2796C17.2489 22.8103 16.985 22.1738 16.985 21.5101V14.0029C16.985 12.6756 17.5128 11.4026 18.4524 10.464C19.3919 9.52541 20.6662 8.99812 21.995 8.99812ZM6.96492 21.5101V31.5197L1.22844 37.2502C0.761878 37.7191 0.5 38.3533 0.5 39.0144C0.5 39.6755 0.761878 40.3097 1.22844 40.7786L7.69137 47.2598C7.92424 47.4943 8.2013 47.6805 8.50656 47.8075C8.81182 47.9346 9.13924 48 9.46993 48C9.80062 48 10.128 47.9346 10.4333 47.8075C10.7386 47.6805 11.0156 47.4943 11.2485 47.2598L21.995 36.5245H32.015C32.6794 36.5245 33.3166 36.2609 33.7863 35.7916C34.2561 35.3223 34.52 34.6858 34.52 34.0221V31.5197H37.0251C37.6894 31.5197 38.3266 31.2561 38.7964 30.7868C39.2662 30.3175 39.5301 29.681 39.5301 29.0173V26.5149H42.0351C42.6995 26.5149 43.3366 26.2513 43.8064 25.782C44.2762 25.3127 44.5401 24.6762 44.5401 24.0125V21.5101H27.005V24.0125C27.005 25.3399 26.4772 26.6129 25.5376 27.5514C24.598 28.49 23.3237 29.0173 21.995 29.0173H16.985C15.6562 29.0173 14.3819 28.49 13.4423 27.5514C12.5028 26.6129 11.9749 25.3399 11.9749 24.0125V16.5053L6.96492 21.5101Z"
                                        fill="{{ $themeColor }}" />
                                </svg>
                            </div>
                            <p
                                class="text-start lg:text-center lg:font-bold font-medium text-xl text-[#262626] opacity-80 mt-6 capitalize">
                                Terhubung dengan pelatih yang bersemangat</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 mb-8">
                        <div
                            class="bg-white lg:p-3 p-6 flex flex-col justify-start lg:items-center items-start mr-6 h-60 lg:h-56 w-56 lg:w-auto shadow-sm">
                            <div class="mt-2 lg:mt-5 w-12 h-12">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <mask id="mask0_327_5445" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                        x="0" y="0" width="48" height="48">
                                        <rect width="48" height="48" fill="#D9D9D9" />
                                    </mask>
                                    <g mask="url(#mask0_327_5445)">
                                        <path
                                            d="M33.4 31L41 24.5L47 25L38.2 32.65L40.8 44L35.7 40.9L33.4 31ZM28.7 16.4L26.6 11.5L28.9 6L33.5 16.85L28.7 16.4ZM8.64997 44L11.9 29.95L0.999969 20.5L15.4 19.25L21 6L26.6 19.25L41 20.5L30.1 29.95L33.35 44L21 36.55L8.64997 44Z"
                                            fill="{{ $themeColor }}" />
                                    </g>
                                </svg>
                            </div>
                            <p
                                class="text-start lg:text-center lg:font-bold font-medium text-xl text-[#262626] opacity-80 mt-6 capitalize">
                                Pusat Layanan Siswa dengan layanan bintang 5</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="curriculum w-full lg:w-11/12 mt-12" id="learcnphase">
                <p class="font-bold text-base text-[#262626] mb-6 uppercase" data-aos="fade-up">Fase Belajar</p>
                <p class="font-black text-2xl lg:text-4xl mb-2" data-aos="fade-up">Apa yang Akan Anda Pelajari dalam
                    Praktek</p>
                <p class="font-normal text-base text-[#262626]" data-aos="fade-up">Setiap mata pelajaran
                    akan
                    mengharuskan Anda untuk menerapkan apa yang Anda pelajari
                    dengan pengalaman langsung melalui tugas praktis dan umpan balik langsung dari instruktur Anda. Di
                    dalam
                    rinci, Anda akan belajar:</p>
                <div class="lg:hidden flex flex-row flex-wrap mt-11" data-aos="fade-up">
                    {{-- Preparation --}}
                    <div class="mb-4 collapse-menu w-full">
                        <div class="flex flex-row justify-between items-center p-5 bg-white rounded-lg shadow-sm h-20">
                            <div class="inline-flex items-center">
                                <div class="w-9 h-9 mr-3">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="40" height="40" rx="6.66667"
                                            fill="{{ $themeColor }}" />
                                        <path
                                            d="M17.3832 13.1904H22.6214C22.9106 13.1904 23.145 12.956 23.145 12.6666V11.0952H22.0975C22.0975 9.93809 21.1594 9 20.0023 9C18.845 9 17.9069 9.93809 17.9069 11.0952H16.8594V12.6666C16.8594 12.956 17.0939 13.1904 17.3832 13.1904Z"
                                            fill="white" />
                                        <path
                                            d="M27.8592 11.0952H24.1926V12.6666C24.1916 13.5342 23.4887 14.2371 22.6212 14.2381H17.3831C16.5155 14.2371 15.8126 13.534 15.8117 12.6666V11.0952H12.1449C11.8557 11.0952 11.6211 11.3297 11.6211 11.6191V30.4761C11.6211 30.7655 11.8557 30.9999 12.1449 30.9999H27.8592C28.1486 30.9999 28.3831 30.7655 28.3831 30.4761V11.6191C28.3831 11.3297 28.1486 11.0952 27.8592 11.0952ZM18.8011 25.6084L16.7058 27.7036C16.5014 27.9082 16.1699 27.9082 15.9653 27.7039C15.9653 27.7038 15.9651 27.7038 15.9651 27.7036L14.9174 26.6561C14.7165 26.4479 14.7222 26.1163 14.9304 25.9154C15.1333 25.7193 15.4552 25.7193 15.6581 25.9154L16.3356 26.5926L18.0603 24.8677C18.2685 24.6668 18.6001 24.6725 18.8011 24.8806C18.9971 25.0835 18.9971 25.4055 18.8011 25.6084ZM18.8011 21.4179L16.7058 23.5132C16.5014 23.7178 16.1699 23.7178 15.9653 23.5135C15.9653 23.5133 15.9651 23.5133 15.9651 23.5132L14.9174 22.4656C14.7165 22.2575 14.7222 21.9258 14.9304 21.7249C15.1333 21.5289 15.4552 21.5289 15.6581 21.7249L16.3354 22.4022L18.0603 20.6772C18.2685 20.4763 18.6 20.482 18.8011 20.6901C18.9971 20.8931 18.9971 21.215 18.8011 21.4179ZM18.8011 17.2275L16.7058 19.3227C16.5014 19.5273 16.1699 19.5273 15.9653 19.323C15.9653 19.3229 15.9651 19.3229 15.9651 19.3227L14.9174 18.2752C14.7165 18.067 14.7222 17.7354 14.9304 17.5345C15.1333 17.3384 15.4552 17.3384 15.6581 17.5345L16.3354 18.2117L18.0603 16.4868C18.2685 16.2859 18.6 16.2916 18.8011 16.4997C18.9971 16.7026 18.9971 17.0244 18.8011 17.2275ZM24.7165 26.8095H21.5735C21.2843 26.8095 21.0497 26.575 21.0497 26.2856C21.0497 25.9964 21.2843 25.7618 21.5735 25.7618H24.7165C25.0057 25.7618 25.2401 25.9964 25.2401 26.2856C25.2401 26.575 25.0057 26.8095 24.7165 26.8095ZM24.7165 22.619H21.5735C21.2843 22.619 21.0497 22.3846 21.0497 22.0952C21.0497 21.806 21.2843 21.5713 21.5735 21.5713H24.7165C25.0057 21.5713 25.2401 21.806 25.2401 22.0952C25.2401 22.3846 25.0057 22.619 24.7165 22.619ZM24.7165 18.4286H21.5735C21.2843 18.4286 21.0497 18.1939 21.0497 17.9047C21.0497 17.6154 21.2843 17.3809 21.5735 17.3809H24.7165C25.0057 17.3809 25.2401 17.6154 25.2401 17.9047C25.2401 18.1939 25.0057 18.4286 24.7165 18.4286Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <span class="font-bold lg:text-xl text-base">Persiapan</span>
                            </div>
                            <svg class="rotate-180" width="8" height="5" viewBox="0 0 8 5" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                    fill="black" />
                            </svg>
                        </div>
                        <div
                            class="collapse-menu-detail hidden bg-white rounded-lg shadow-sm px-5 pb-5 text-justify font-normal text-base text-[#262626]">
                            {{config('app.name')}} menyediakan persiapan karir. Segera setelah Anda diterima, Anda akan mendapatkan
                            jadwal tetap pemetaan karir & kelas soft skill dengan pelatih kami yang bersemangat. Anda
                            juga akan menerima sekitar 10-20 jam sumber belajar online, yang dikuratori dengan cermat
                            oleh Pakar {{config('app.name')}} agar intuitif dan interaktif. Fase persiapan ini akan memastikan Anda
                            memiliki fondasi yang diperlukan dalam Python sebelum bootcamp dimulai.
                        </div>
                    </div>
                    {{-- 1 --}}
                    <div class="mb-4 collapse-menu w-full">
                        <div
                            class="flex flex-row justify-between items-center p-5 bg-white rounded-lg shadow-sm h-20 ">
                            <div class="inline-flex items-center">
                                <div class="w-9 h-9 mr-3">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="40" height="40" rx="6.66667"
                                            fill="{{ $themeColor }}" />
                                        <path
                                            d="M17.3832 13.1904H22.6214C22.9106 13.1904 23.145 12.956 23.145 12.6666V11.0952H22.0975C22.0975 9.93809 21.1594 9 20.0023 9C18.845 9 17.9069 9.93809 17.9069 11.0952H16.8594V12.6666C16.8594 12.956 17.0939 13.1904 17.3832 13.1904Z"
                                            fill="white" />
                                        <path
                                            d="M27.8592 11.0952H24.1926V12.6666C24.1916 13.5342 23.4887 14.2371 22.6212 14.2381H17.3831C16.5155 14.2371 15.8126 13.534 15.8117 12.6666V11.0952H12.1449C11.8557 11.0952 11.6211 11.3297 11.6211 11.6191V30.4761C11.6211 30.7655 11.8557 30.9999 12.1449 30.9999H27.8592C28.1486 30.9999 28.3831 30.7655 28.3831 30.4761V11.6191C28.3831 11.3297 28.1486 11.0952 27.8592 11.0952ZM18.8011 25.6084L16.7058 27.7036C16.5014 27.9082 16.1699 27.9082 15.9653 27.7039C15.9653 27.7038 15.9651 27.7038 15.9651 27.7036L14.9174 26.6561C14.7165 26.4479 14.7222 26.1163 14.9304 25.9154C15.1333 25.7193 15.4552 25.7193 15.6581 25.9154L16.3356 26.5926L18.0603 24.8677C18.2685 24.6668 18.6001 24.6725 18.8011 24.8806C18.9971 25.0835 18.9971 25.4055 18.8011 25.6084ZM18.8011 21.4179L16.7058 23.5132C16.5014 23.7178 16.1699 23.7178 15.9653 23.5135C15.9653 23.5133 15.9651 23.5133 15.9651 23.5132L14.9174 22.4656C14.7165 22.2575 14.7222 21.9258 14.9304 21.7249C15.1333 21.5289 15.4552 21.5289 15.6581 21.7249L16.3354 22.4022L18.0603 20.6772C18.2685 20.4763 18.6 20.482 18.8011 20.6901C18.9971 20.8931 18.9971 21.215 18.8011 21.4179ZM18.8011 17.2275L16.7058 19.3227C16.5014 19.5273 16.1699 19.5273 15.9653 19.323C15.9653 19.3229 15.9651 19.3229 15.9651 19.3227L14.9174 18.2752C14.7165 18.067 14.7222 17.7354 14.9304 17.5345C15.1333 17.3384 15.4552 17.3384 15.6581 17.5345L16.3354 18.2117L18.0603 16.4868C18.2685 16.2859 18.6 16.2916 18.8011 16.4997C18.9971 16.7026 18.9971 17.0244 18.8011 17.2275ZM24.7165 26.8095H21.5735C21.2843 26.8095 21.0497 26.575 21.0497 26.2856C21.0497 25.9964 21.2843 25.7618 21.5735 25.7618H24.7165C25.0057 25.7618 25.2401 25.9964 25.2401 26.2856C25.2401 26.575 25.0057 26.8095 24.7165 26.8095ZM24.7165 22.619H21.5735C21.2843 22.619 21.0497 22.3846 21.0497 22.0952C21.0497 21.806 21.2843 21.5713 21.5735 21.5713H24.7165C25.0057 21.5713 25.2401 21.806 25.2401 22.0952C25.2401 22.3846 25.0057 22.619 24.7165 22.619ZM24.7165 18.4286H21.5735C21.2843 18.4286 21.0497 18.1939 21.0497 17.9047C21.0497 17.6154 21.2843 17.3809 21.5735 17.3809H24.7165C25.0057 17.3809 25.2401 17.6154 25.2401 17.9047C25.2401 18.1939 25.0057 18.4286 24.7165 18.4286Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="font-bold lg:text-xl text-base">Data Analysis <span
                                        class="font-normal lg:text-xl text-base">(Module 1)</span></div>
                            </div>
                            <svg class="rotate-180" width="8" height="5" viewBox="0 0 8 5" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                    fill="black" />
                            </svg>
                        </div>

                        <div
                            class="collapse-menu-detail hidden bg-white rounded-lg shadow-sm px-5 pb-5 text-justify font-normal text-base text-[#262626]">
                            Kuasai penggunaan bahasa pemrograman Python, khususnya untuk aplikasi ilmu data, yang
                            memerlukan kemahiran dalam mengekstraksi data dari basis data relasional, menangani kumpulan
                            data yang luas, dan menghasilkan visualisasi data. Selain itu, dapatkan pemahaman menyeluruh
                            tentang prinsip matematika dasar, seperti statistik dan aljabar linier, untuk memfasilitasi
                            analisis data yang efisien (modul terbaru 2023).

                        </div>
                    </div>
                    {{-- 2 --}}
                    <div class="mb-4 collapse-menu w-full">
                        <div
                            class="flex flex-row justify-between items-center p-5 bg-white rounded-lg shadow-sm h-20 ">
                            <div class="inline-flex items-center">
                                <div class="w-9 h-9 mr-3">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="40" height="40" rx="6.66667"
                                            fill="{{ $themeColor }}" />
                                        <path
                                            d="M17.3832 13.1904H22.6214C22.9106 13.1904 23.145 12.956 23.145 12.6666V11.0952H22.0975C22.0975 9.93809 21.1594 9 20.0023 9C18.845 9 17.9069 9.93809 17.9069 11.0952H16.8594V12.6666C16.8594 12.956 17.0939 13.1904 17.3832 13.1904Z"
                                            fill="white" />
                                        <path
                                            d="M27.8592 11.0952H24.1926V12.6666C24.1916 13.5342 23.4887 14.2371 22.6212 14.2381H17.3831C16.5155 14.2371 15.8126 13.534 15.8117 12.6666V11.0952H12.1449C11.8557 11.0952 11.6211 11.3297 11.6211 11.6191V30.4761C11.6211 30.7655 11.8557 30.9999 12.1449 30.9999H27.8592C28.1486 30.9999 28.3831 30.7655 28.3831 30.4761V11.6191C28.3831 11.3297 28.1486 11.0952 27.8592 11.0952ZM18.8011 25.6084L16.7058 27.7036C16.5014 27.9082 16.1699 27.9082 15.9653 27.7039C15.9653 27.7038 15.9651 27.7038 15.9651 27.7036L14.9174 26.6561C14.7165 26.4479 14.7222 26.1163 14.9304 25.9154C15.1333 25.7193 15.4552 25.7193 15.6581 25.9154L16.3356 26.5926L18.0603 24.8677C18.2685 24.6668 18.6001 24.6725 18.8011 24.8806C18.9971 25.0835 18.9971 25.4055 18.8011 25.6084ZM18.8011 21.4179L16.7058 23.5132C16.5014 23.7178 16.1699 23.7178 15.9653 23.5135C15.9653 23.5133 15.9651 23.5133 15.9651 23.5132L14.9174 22.4656C14.7165 22.2575 14.7222 21.9258 14.9304 21.7249C15.1333 21.5289 15.4552 21.5289 15.6581 21.7249L16.3354 22.4022L18.0603 20.6772C18.2685 20.4763 18.6 20.482 18.8011 20.6901C18.9971 20.8931 18.9971 21.215 18.8011 21.4179ZM18.8011 17.2275L16.7058 19.3227C16.5014 19.5273 16.1699 19.5273 15.9653 19.323C15.9653 19.3229 15.9651 19.3229 15.9651 19.3227L14.9174 18.2752C14.7165 18.067 14.7222 17.7354 14.9304 17.5345C15.1333 17.3384 15.4552 17.3384 15.6581 17.5345L16.3354 18.2117L18.0603 16.4868C18.2685 16.2859 18.6 16.2916 18.8011 16.4997C18.9971 16.7026 18.9971 17.0244 18.8011 17.2275ZM24.7165 26.8095H21.5735C21.2843 26.8095 21.0497 26.575 21.0497 26.2856C21.0497 25.9964 21.2843 25.7618 21.5735 25.7618H24.7165C25.0057 25.7618 25.2401 25.9964 25.2401 26.2856C25.2401 26.575 25.0057 26.8095 24.7165 26.8095ZM24.7165 22.619H21.5735C21.2843 22.619 21.0497 22.3846 21.0497 22.0952C21.0497 21.806 21.2843 21.5713 21.5735 21.5713H24.7165C25.0057 21.5713 25.2401 21.806 25.2401 22.0952C25.2401 22.3846 25.0057 22.619 24.7165 22.619ZM24.7165 18.4286H21.5735C21.2843 18.4286 21.0497 18.1939 21.0497 17.9047C21.0497 17.6154 21.2843 17.3809 21.5735 17.3809H24.7165C25.0057 17.3809 25.2401 17.6154 25.2401 17.9047C25.2401 18.1939 25.0057 18.4286 24.7165 18.4286Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="font-bold lg:text-xl text-base">Decision Science <span
                                        class="font-normal lg:text-xl text-base">(Module 2)</span></div>
                            </div>
                            <svg class="rotate-180" width="8" height="5" viewBox="0 0 8 5" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                    fill="black" />
                            </svg>
                        </div>

                        <div
                            class="collapse-menu-detail hidden bg-white rounded-lg shadow-sm px-5 pb-5 font-normal text-base text-[#262626]">
                            Bayangkan menjadi konsultan data dan menguasai seni menavigasi melalui fase persiapan data
                            dari kumpulan data yang sangat besar. Manfaatkan keahlian Anda dalam menafsirkan hasil
                            statistik yang diperoleh dari berbagai alat seperti model regresi multivariat, pengujian
                            hipotesis, dan interval kepercayaan untuk mengekstrak wawasan yang berharga.

                        </div>
                    </div>
                    {{-- 3 --}}
                    <div class=" mb-4 collapse-menu w-full">
                        <div
                            class="flex flex-row justify-between items-center p-5 bg-white rounded-lg shadow-sm h-20 ">
                            <div class="inline-flex items-center">
                                <div class="w-9 h-9 mr-3">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="40" height="40" rx="6.66667"
                                            fill="{{ $themeColor }}" />
                                        <path
                                            d="M17.3832 13.1904H22.6214C22.9106 13.1904 23.145 12.956 23.145 12.6666V11.0952H22.0975C22.0975 9.93809 21.1594 9 20.0023 9C18.845 9 17.9069 9.93809 17.9069 11.0952H16.8594V12.6666C16.8594 12.956 17.0939 13.1904 17.3832 13.1904Z"
                                            fill="white" />
                                        <path
                                            d="M27.8592 11.0952H24.1926V12.6666C24.1916 13.5342 23.4887 14.2371 22.6212 14.2381H17.3831C16.5155 14.2371 15.8126 13.534 15.8117 12.6666V11.0952H12.1449C11.8557 11.0952 11.6211 11.3297 11.6211 11.6191V30.4761C11.6211 30.7655 11.8557 30.9999 12.1449 30.9999H27.8592C28.1486 30.9999 28.3831 30.7655 28.3831 30.4761V11.6191C28.3831 11.3297 28.1486 11.0952 27.8592 11.0952ZM18.8011 25.6084L16.7058 27.7036C16.5014 27.9082 16.1699 27.9082 15.9653 27.7039C15.9653 27.7038 15.9651 27.7038 15.9651 27.7036L14.9174 26.6561C14.7165 26.4479 14.7222 26.1163 14.9304 25.9154C15.1333 25.7193 15.4552 25.7193 15.6581 25.9154L16.3356 26.5926L18.0603 24.8677C18.2685 24.6668 18.6001 24.6725 18.8011 24.8806C18.9971 25.0835 18.9971 25.4055 18.8011 25.6084ZM18.8011 21.4179L16.7058 23.5132C16.5014 23.7178 16.1699 23.7178 15.9653 23.5135C15.9653 23.5133 15.9651 23.5133 15.9651 23.5132L14.9174 22.4656C14.7165 22.2575 14.7222 21.9258 14.9304 21.7249C15.1333 21.5289 15.4552 21.5289 15.6581 21.7249L16.3354 22.4022L18.0603 20.6772C18.2685 20.4763 18.6 20.482 18.8011 20.6901C18.9971 20.8931 18.9971 21.215 18.8011 21.4179ZM18.8011 17.2275L16.7058 19.3227C16.5014 19.5273 16.1699 19.5273 15.9653 19.323C15.9653 19.3229 15.9651 19.3229 15.9651 19.3227L14.9174 18.2752C14.7165 18.067 14.7222 17.7354 14.9304 17.5345C15.1333 17.3384 15.4552 17.3384 15.6581 17.5345L16.3354 18.2117L18.0603 16.4868C18.2685 16.2859 18.6 16.2916 18.8011 16.4997C18.9971 16.7026 18.9971 17.0244 18.8011 17.2275ZM24.7165 26.8095H21.5735C21.2843 26.8095 21.0497 26.575 21.0497 26.2856C21.0497 25.9964 21.2843 25.7618 21.5735 25.7618H24.7165C25.0057 25.7618 25.2401 25.9964 25.2401 26.2856C25.2401 26.575 25.0057 26.8095 24.7165 26.8095ZM24.7165 22.619H21.5735C21.2843 22.619 21.0497 22.3846 21.0497 22.0952C21.0497 21.806 21.2843 21.5713 21.5735 21.5713H24.7165C25.0057 21.5713 25.2401 21.806 25.2401 22.0952C25.2401 22.3846 25.0057 22.619 24.7165 22.619ZM24.7165 18.4286H21.5735C21.2843 18.4286 21.0497 18.1939 21.0497 17.9047C21.0497 17.6154 21.2843 17.3809 21.5735 17.3809H24.7165C25.0057 17.3809 25.2401 17.6154 25.2401 17.9047C25.2401 18.1939 25.0057 18.4286 24.7165 18.4286Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="font-bold lg:text-xl text-base">Machine Learning <span
                                        class="font-normal lg:text-xl text-base">(Module 3)</span></div>
                            </div>
                            <svg class="rotate-180" width="8" height="5" viewBox="0 0 8 5" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                    fill="black" />
                            </svg>
                        </div>

                        <div
                            class="collapse-menu-detail hidden bg-white rounded-lg shadow-sm px-5 pb-5 font-normal text-base text-[#262626]">
                            Jalankan Machine learning, yang melibatkan persiapan data, rekayasa fitur, pemilihan model,
                            evaluasi, dan penyempurnaan. Kembangkan pemahaman tentang prinsip-prinsip matematika dan
                            implementasi numerik dari model Machine Learning.
                        </div>
                    </div>
                    {{-- 4 --}}
                    <div class=" mb-4 collapse-menu w-full">
                        <div
                            class="flex flex-row justify-between items-center p-5 bg-white rounded-lg shadow-sm h-20 ">
                            <div class="inline-flex items-center">
                                <div class="w-9 h-9 mr-3">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="40" height="40" rx="6.66667"
                                            fill="{{ $themeColor }}" />
                                        <path
                                            d="M17.3832 13.1904H22.6214C22.9106 13.1904 23.145 12.956 23.145 12.6666V11.0952H22.0975C22.0975 9.93809 21.1594 9 20.0023 9C18.845 9 17.9069 9.93809 17.9069 11.0952H16.8594V12.6666C16.8594 12.956 17.0939 13.1904 17.3832 13.1904Z"
                                            fill="white" />
                                        <path
                                            d="M27.8592 11.0952H24.1926V12.6666C24.1916 13.5342 23.4887 14.2371 22.6212 14.2381H17.3831C16.5155 14.2371 15.8126 13.534 15.8117 12.6666V11.0952H12.1449C11.8557 11.0952 11.6211 11.3297 11.6211 11.6191V30.4761C11.6211 30.7655 11.8557 30.9999 12.1449 30.9999H27.8592C28.1486 30.9999 28.3831 30.7655 28.3831 30.4761V11.6191C28.3831 11.3297 28.1486 11.0952 27.8592 11.0952ZM18.8011 25.6084L16.7058 27.7036C16.5014 27.9082 16.1699 27.9082 15.9653 27.7039C15.9653 27.7038 15.9651 27.7038 15.9651 27.7036L14.9174 26.6561C14.7165 26.4479 14.7222 26.1163 14.9304 25.9154C15.1333 25.7193 15.4552 25.7193 15.6581 25.9154L16.3356 26.5926L18.0603 24.8677C18.2685 24.6668 18.6001 24.6725 18.8011 24.8806C18.9971 25.0835 18.9971 25.4055 18.8011 25.6084ZM18.8011 21.4179L16.7058 23.5132C16.5014 23.7178 16.1699 23.7178 15.9653 23.5135C15.9653 23.5133 15.9651 23.5133 15.9651 23.5132L14.9174 22.4656C14.7165 22.2575 14.7222 21.9258 14.9304 21.7249C15.1333 21.5289 15.4552 21.5289 15.6581 21.7249L16.3354 22.4022L18.0603 20.6772C18.2685 20.4763 18.6 20.482 18.8011 20.6901C18.9971 20.8931 18.9971 21.215 18.8011 21.4179ZM18.8011 17.2275L16.7058 19.3227C16.5014 19.5273 16.1699 19.5273 15.9653 19.323C15.9653 19.3229 15.9651 19.3229 15.9651 19.3227L14.9174 18.2752C14.7165 18.067 14.7222 17.7354 14.9304 17.5345C15.1333 17.3384 15.4552 17.3384 15.6581 17.5345L16.3354 18.2117L18.0603 16.4868C18.2685 16.2859 18.6 16.2916 18.8011 16.4997C18.9971 16.7026 18.9971 17.0244 18.8011 17.2275ZM24.7165 26.8095H21.5735C21.2843 26.8095 21.0497 26.575 21.0497 26.2856C21.0497 25.9964 21.2843 25.7618 21.5735 25.7618H24.7165C25.0057 25.7618 25.2401 25.9964 25.2401 26.2856C25.2401 26.575 25.0057 26.8095 24.7165 26.8095ZM24.7165 22.619H21.5735C21.2843 22.619 21.0497 22.3846 21.0497 22.0952C21.0497 21.806 21.2843 21.5713 21.5735 21.5713H24.7165C25.0057 21.5713 25.2401 21.806 25.2401 22.0952C25.2401 22.3846 25.0057 22.619 24.7165 22.619ZM24.7165 18.4286H21.5735C21.2843 18.4286 21.0497 18.1939 21.0497 17.9047C21.0497 17.6154 21.2843 17.3809 21.5735 17.3809H24.7165C25.0057 17.3809 25.2401 17.6154 25.2401 17.9047C25.2401 18.1939 25.0057 18.4286 24.7165 18.4286Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="font-bold lg:text-xl text-base">Deep Learning <span
                                        class="font-normal lg:text-xl text-base">(Module 4)</span></div>
                            </div>
                            <svg class="rotate-180" width="8" height="5" viewBox="0 0 8 5" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                    fill="black" />
                            </svg>
                        </div>

                        <div
                            class="collapse-menu-detail hidden bg-white rounded-lg shadow-sm px-5 pb-5 font-normal text-base text-[#262626]">
                            Temukan rahasia Deep Learning! Pelajari tentang struktur dan komponen jaringan neural, buat
                            jaringan Anda sendiri untuk memproses gambar, urutan, dan teks, terapkan model yang telah
                            dilatih sebelumnya melalui pembelajaran transfer, dan praktikkan dengan pembuat enkode
                            otomatis, pemrosesan batch, dan pelatihan GPU.

                        </div>
                    </div>
                    {{-- 5 --}}
                    <div class=" mb-4 collapse-menu w-full">
                        <div
                            class="flex flex-row justify-between items-center p-5 bg-white rounded-lg shadow-sm h-20 ">
                            <div class="inline-flex items-center">
                                <div class="w-9 h-9 mr-3">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="40" height="40" rx="6.66667"
                                            fill="{{ $themeColor }}" />
                                        <path
                                            d="M17.3832 13.1904H22.6214C22.9106 13.1904 23.145 12.956 23.145 12.6666V11.0952H22.0975C22.0975 9.93809 21.1594 9 20.0023 9C18.845 9 17.9069 9.93809 17.9069 11.0952H16.8594V12.6666C16.8594 12.956 17.0939 13.1904 17.3832 13.1904Z"
                                            fill="white" />
                                        <path
                                            d="M27.8592 11.0952H24.1926V12.6666C24.1916 13.5342 23.4887 14.2371 22.6212 14.2381H17.3831C16.5155 14.2371 15.8126 13.534 15.8117 12.6666V11.0952H12.1449C11.8557 11.0952 11.6211 11.3297 11.6211 11.6191V30.4761C11.6211 30.7655 11.8557 30.9999 12.1449 30.9999H27.8592C28.1486 30.9999 28.3831 30.7655 28.3831 30.4761V11.6191C28.3831 11.3297 28.1486 11.0952 27.8592 11.0952ZM18.8011 25.6084L16.7058 27.7036C16.5014 27.9082 16.1699 27.9082 15.9653 27.7039C15.9653 27.7038 15.9651 27.7038 15.9651 27.7036L14.9174 26.6561C14.7165 26.4479 14.7222 26.1163 14.9304 25.9154C15.1333 25.7193 15.4552 25.7193 15.6581 25.9154L16.3356 26.5926L18.0603 24.8677C18.2685 24.6668 18.6001 24.6725 18.8011 24.8806C18.9971 25.0835 18.9971 25.4055 18.8011 25.6084ZM18.8011 21.4179L16.7058 23.5132C16.5014 23.7178 16.1699 23.7178 15.9653 23.5135C15.9653 23.5133 15.9651 23.5133 15.9651 23.5132L14.9174 22.4656C14.7165 22.2575 14.7222 21.9258 14.9304 21.7249C15.1333 21.5289 15.4552 21.5289 15.6581 21.7249L16.3354 22.4022L18.0603 20.6772C18.2685 20.4763 18.6 20.482 18.8011 20.6901C18.9971 20.8931 18.9971 21.215 18.8011 21.4179ZM18.8011 17.2275L16.7058 19.3227C16.5014 19.5273 16.1699 19.5273 15.9653 19.323C15.9653 19.3229 15.9651 19.3229 15.9651 19.3227L14.9174 18.2752C14.7165 18.067 14.7222 17.7354 14.9304 17.5345C15.1333 17.3384 15.4552 17.3384 15.6581 17.5345L16.3354 18.2117L18.0603 16.4868C18.2685 16.2859 18.6 16.2916 18.8011 16.4997C18.9971 16.7026 18.9971 17.0244 18.8011 17.2275ZM24.7165 26.8095H21.5735C21.2843 26.8095 21.0497 26.575 21.0497 26.2856C21.0497 25.9964 21.2843 25.7618 21.5735 25.7618H24.7165C25.0057 25.7618 25.2401 25.9964 25.2401 26.2856C25.2401 26.575 25.0057 26.8095 24.7165 26.8095ZM24.7165 22.619H21.5735C21.2843 22.619 21.0497 22.3846 21.0497 22.0952C21.0497 21.806 21.2843 21.5713 21.5735 21.5713H24.7165C25.0057 21.5713 25.2401 21.806 25.2401 22.0952C25.2401 22.3846 25.0057 22.619 24.7165 22.619ZM24.7165 18.4286H21.5735C21.2843 18.4286 21.0497 18.1939 21.0497 17.9047C21.0497 17.6154 21.2843 17.3809 21.5735 17.3809H24.7165C25.0057 17.3809 25.2401 17.6154 25.2401 17.9047C25.2401 18.1939 25.0057 18.4286 24.7165 18.4286Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="font-bold lg:text-xl text-base">Machine Learning Engineering <span
                                        class="font-normal lg:text-xl text-base">(Module 5)</span></div>
                            </div>
                            <svg class="rotate-180" width="8" height="5" viewBox="0 0 8 5" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                    fill="black" />
                            </svg>
                        </div>

                        <div
                            class="collapse-menu-detail hidden bg-white rounded-lg shadow-sm px-5 pb-5 font-normal text-base text-[#262626]">
                            Convert your superior handmade models into a Python package for cloud-based replication and
                            training with virtual machines and online databases. Monitor and update performance with new
                            data, and share predictions through APIs or websites (2023 newest module)
                            Ubah model karya Anda yang unggul menjadi paket Python untuk replikasi dan pelatihan
                            berbasis cloud dengan mesin virtual dan database online. Pantau dan perbarui kinerja dengan
                            data baru, dan bagikan prediksi melalui API atau situs web.* (Modul Terbaru 2023)
                        </div>
                    </div>
                    {{-- 6 --}}
                    <div class=" mb-4 collapse-menu w-full">
                        <div
                            class="flex flex-row justify-between items-center p-5 bg-white rounded-lg shadow-sm h-20 ">
                            <div class="inline-flex items-center">
                                <div class="w-9 h-9 mr-3">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="40" height="40" rx="6.66667"
                                            fill="{{ $themeColor }}" />
                                        <path
                                            d="M17.3832 13.1904H22.6214C22.9106 13.1904 23.145 12.956 23.145 12.6666V11.0952H22.0975C22.0975 9.93809 21.1594 9 20.0023 9C18.845 9 17.9069 9.93809 17.9069 11.0952H16.8594V12.6666C16.8594 12.956 17.0939 13.1904 17.3832 13.1904Z"
                                            fill="white" />
                                        <path
                                            d="M27.8592 11.0952H24.1926V12.6666C24.1916 13.5342 23.4887 14.2371 22.6212 14.2381H17.3831C16.5155 14.2371 15.8126 13.534 15.8117 12.6666V11.0952H12.1449C11.8557 11.0952 11.6211 11.3297 11.6211 11.6191V30.4761C11.6211 30.7655 11.8557 30.9999 12.1449 30.9999H27.8592C28.1486 30.9999 28.3831 30.7655 28.3831 30.4761V11.6191C28.3831 11.3297 28.1486 11.0952 27.8592 11.0952ZM18.8011 25.6084L16.7058 27.7036C16.5014 27.9082 16.1699 27.9082 15.9653 27.7039C15.9653 27.7038 15.9651 27.7038 15.9651 27.7036L14.9174 26.6561C14.7165 26.4479 14.7222 26.1163 14.9304 25.9154C15.1333 25.7193 15.4552 25.7193 15.6581 25.9154L16.3356 26.5926L18.0603 24.8677C18.2685 24.6668 18.6001 24.6725 18.8011 24.8806C18.9971 25.0835 18.9971 25.4055 18.8011 25.6084ZM18.8011 21.4179L16.7058 23.5132C16.5014 23.7178 16.1699 23.7178 15.9653 23.5135C15.9653 23.5133 15.9651 23.5133 15.9651 23.5132L14.9174 22.4656C14.7165 22.2575 14.7222 21.9258 14.9304 21.7249C15.1333 21.5289 15.4552 21.5289 15.6581 21.7249L16.3354 22.4022L18.0603 20.6772C18.2685 20.4763 18.6 20.482 18.8011 20.6901C18.9971 20.8931 18.9971 21.215 18.8011 21.4179ZM18.8011 17.2275L16.7058 19.3227C16.5014 19.5273 16.1699 19.5273 15.9653 19.323C15.9653 19.3229 15.9651 19.3229 15.9651 19.3227L14.9174 18.2752C14.7165 18.067 14.7222 17.7354 14.9304 17.5345C15.1333 17.3384 15.4552 17.3384 15.6581 17.5345L16.3354 18.2117L18.0603 16.4868C18.2685 16.2859 18.6 16.2916 18.8011 16.4997C18.9971 16.7026 18.9971 17.0244 18.8011 17.2275ZM24.7165 26.8095H21.5735C21.2843 26.8095 21.0497 26.575 21.0497 26.2856C21.0497 25.9964 21.2843 25.7618 21.5735 25.7618H24.7165C25.0057 25.7618 25.2401 25.9964 25.2401 26.2856C25.2401 26.575 25.0057 26.8095 24.7165 26.8095ZM24.7165 22.619H21.5735C21.2843 22.619 21.0497 22.3846 21.0497 22.0952C21.0497 21.806 21.2843 21.5713 21.5735 21.5713H24.7165C25.0057 21.5713 25.2401 21.806 25.2401 22.0952C25.2401 22.3846 25.0057 22.619 24.7165 22.619ZM24.7165 18.4286H21.5735C21.2843 18.4286 21.0497 18.1939 21.0497 17.9047C21.0497 17.6154 21.2843 17.3809 21.5735 17.3809H24.7165C25.0057 17.3809 25.2401 17.6154 25.2401 17.9047C25.2401 18.1939 25.0057 18.4286 24.7165 18.4286Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="font-bold lg:text-xl text-base">Project Weeks <span
                                        class="font-normal lg:text-xl text-base">(Module 6)</span></div>
                            </div>
                            <svg class="rotate-180" width="8" height="5" viewBox="0 0 8 5" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                    fill="black" />
                            </svg>
                        </div>

                        <div
                            class="collapse-menu-detail hidden bg-white rounded-lg shadow-sm px-5 pb-5 font-normal text-base text-[#262626]">
                            Bergabunglah dengan proyek data science bersama 3-4 anggota tim. Gunakan sumber data publik
                            atau kumpulan data pribadi Klien Anda sendiri. Dapatkan pendampingan penuh waktu dari guru
                            ahli untuk mencapai prestasi Anda.

                        </div>
                    </div>
                    {{-- career --}}
                    <div class=" mb-4 collapse-menu w-full">
                        <div
                            class="flex flex-row justify-between items-center p-5 bg-white rounded-lg shadow-sm h-20 ">
                            <div class="inline-flex items-center">
                                <div class="w-9 h-9 mr-3">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="40" height="40" rx="6.66667"
                                            fill="{{ $themeColor }}" />
                                        <path
                                            d="M17.3832 13.1904H22.6214C22.9106 13.1904 23.145 12.956 23.145 12.6666V11.0952H22.0975C22.0975 9.93809 21.1594 9 20.0023 9C18.845 9 17.9069 9.93809 17.9069 11.0952H16.8594V12.6666C16.8594 12.956 17.0939 13.1904 17.3832 13.1904Z"
                                            fill="white" />
                                        <path
                                            d="M27.8592 11.0952H24.1926V12.6666C24.1916 13.5342 23.4887 14.2371 22.6212 14.2381H17.3831C16.5155 14.2371 15.8126 13.534 15.8117 12.6666V11.0952H12.1449C11.8557 11.0952 11.6211 11.3297 11.6211 11.6191V30.4761C11.6211 30.7655 11.8557 30.9999 12.1449 30.9999H27.8592C28.1486 30.9999 28.3831 30.7655 28.3831 30.4761V11.6191C28.3831 11.3297 28.1486 11.0952 27.8592 11.0952ZM18.8011 25.6084L16.7058 27.7036C16.5014 27.9082 16.1699 27.9082 15.9653 27.7039C15.9653 27.7038 15.9651 27.7038 15.9651 27.7036L14.9174 26.6561C14.7165 26.4479 14.7222 26.1163 14.9304 25.9154C15.1333 25.7193 15.4552 25.7193 15.6581 25.9154L16.3356 26.5926L18.0603 24.8677C18.2685 24.6668 18.6001 24.6725 18.8011 24.8806C18.9971 25.0835 18.9971 25.4055 18.8011 25.6084ZM18.8011 21.4179L16.7058 23.5132C16.5014 23.7178 16.1699 23.7178 15.9653 23.5135C15.9653 23.5133 15.9651 23.5133 15.9651 23.5132L14.9174 22.4656C14.7165 22.2575 14.7222 21.9258 14.9304 21.7249C15.1333 21.5289 15.4552 21.5289 15.6581 21.7249L16.3354 22.4022L18.0603 20.6772C18.2685 20.4763 18.6 20.482 18.8011 20.6901C18.9971 20.8931 18.9971 21.215 18.8011 21.4179ZM18.8011 17.2275L16.7058 19.3227C16.5014 19.5273 16.1699 19.5273 15.9653 19.323C15.9653 19.3229 15.9651 19.3229 15.9651 19.3227L14.9174 18.2752C14.7165 18.067 14.7222 17.7354 14.9304 17.5345C15.1333 17.3384 15.4552 17.3384 15.6581 17.5345L16.3354 18.2117L18.0603 16.4868C18.2685 16.2859 18.6 16.2916 18.8011 16.4997C18.9971 16.7026 18.9971 17.0244 18.8011 17.2275ZM24.7165 26.8095H21.5735C21.2843 26.8095 21.0497 26.575 21.0497 26.2856C21.0497 25.9964 21.2843 25.7618 21.5735 25.7618H24.7165C25.0057 25.7618 25.2401 25.9964 25.2401 26.2856C25.2401 26.575 25.0057 26.8095 24.7165 26.8095ZM24.7165 22.619H21.5735C21.2843 22.619 21.0497 22.3846 21.0497 22.0952C21.0497 21.806 21.2843 21.5713 21.5735 21.5713H24.7165C25.0057 21.5713 25.2401 21.806 25.2401 22.0952C25.2401 22.3846 25.0057 22.619 24.7165 22.619ZM24.7165 18.4286H21.5735C21.2843 18.4286 21.0497 18.1939 21.0497 17.9047C21.0497 17.6154 21.2843 17.3809 21.5735 17.3809H24.7165C25.0057 17.3809 25.2401 17.6154 25.2401 17.9047C25.2401 18.1939 25.0057 18.4286 24.7165 18.4286Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="font-bold lg:text-xl text-base">Career Weeks <span
                                        class="font-normal lg:text-xl text-base"></span></div>
                            </div>
                            <svg class="rotate-180" width="8" height="5" viewBox="0 0 8 5" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                    fill="black" />
                            </svg>
                        </div>

                        <div
                            class="collapse-menu-detail hidden bg-white rounded-lg shadow-sm px-5 pb-5 font-normal text-base text-[#262626]">
                            Tingkatkan keterampilan pencarian kerja Anda dengan bertemu dengan para profesional ilmu
                            data yang bekerja di perusahaan rintisan atau perusahaan teknologi terkemuka, berlatih
                            simulasi wawancara , dan menyempurnakan CV Anda.
                        </div>
                    </div>
                </div>
                <div class="hidden lg:flex flex-row flex-wrap mt-11" data-aos="fade-up">
                    <div class="w-full lg:w-1/2 pr-1">
                        <div class="mb-4 collapse-menu w-full">
                            <div
                                class="flex flex-row justify-between items-center p-5 bg-white rounded-lg shadow-sm h-20">
                                <div class="inline-flex items-center">
                                    <div class="w-9 h-9 mr-3">
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
                                                <linearGradient id="paint0_linear_122_455" x1="0"
                                                    y1="0" x2="40" y2="40"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="{{ $themeColor }}" />
                                                    <stop offset="1" stop-color="{{ $themeColor }}" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <span class="font-bold lg:text-xl text-base">Persiapan</span>
                                </div>
                                <svg class="rotate-0" width="8" height="5" viewBox="0 0 8 5"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                        fill="black" />
                                </svg>
                            </div>
                            <div
                                class="collapse-menu-detail hidden bg-white rounded-lg shadow-sm px-5 pb-5 text-justify font-normal text-base text-[#262626]">
                                {{config('app.name')}} menyediakan persiapan karir. Segera setelah Anda diterima, Anda akan mendapatkan
                                jadwal tetap pemetaan karir & kelas soft skill dengan pelatih kami yang bersemangat.
                                Anda juga akan menerima sekitar 10-20 jam sumber belajar online, yang dikuratori dengan
                                cermat oleh Pakar {{config('app.name')}} agar intuitif dan interaktif. Fase persiapan ini akan
                                memastikan Anda memiliki fondasi yang diperlukan dalam Python sebelum bootcamp dimulai.
                            </div>
                        </div>
                        <div class="mb-4 collapse-menu w-full">
                            <div
                                class="flex flex-row justify-between items-center p-5 bg-white rounded-lg shadow-sm h-20 ">
                                <div class="inline-flex items-center">
                                    <div class="w-9 h-9 mr-3">
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
                                                <linearGradient id="paint0_linear_122_455" x1="0"
                                                    y1="0" x2="40" y2="40"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="{{ $themeColor }}" />
                                                    <stop offset="1" stop-color="{{ $themeColor }}" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="font-bold lg:text-xl text-base">Decision Science <span
                                            class="font-normal lg:text-xl text-base">(Module 2)</span></div>
                                </div>
                                <svg class="rotate-180" width="8" height="5" viewBox="0 0 8 5"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                        fill="black" />
                                </svg>
                            </div>

                            <div
                                class="collapse-menu-detail hidden bg-white rounded-lg shadow-sm px-5 pb-5 font-normal text-base text-[#262626]">
                                Bayangkan menjadi konsultan data dan menguasai seni menavigasi melalui fase persiapan
                                data dari kumpulan data yang sangat besar. Manfaatkan keahlian Anda dalam menafsirkan
                                hasil statistik yang diperoleh dari berbagai alat seperti model regresi multivariat,
                                pengujian hipotesis, dan interval kepercayaan untuk mengekstrak wawasan yang berharga.

                            </div>
                        </div>
                        <div class=" mb-4 collapse-menu w-full">
                            <div
                                class="flex flex-row justify-between items-center p-5 bg-white rounded-lg shadow-sm h-20 ">
                                <div class="inline-flex items-center">
                                    <div class="w-9 h-9 mr-3">
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
                                                <linearGradient id="paint0_linear_122_455" x1="0"
                                                    y1="0" x2="40" y2="40"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="{{ $themeColor }}" />
                                                    <stop offset="1" stop-color="{{ $themeColor }}" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="font-bold lg:text-xl text-base">Deep Learning <span
                                            class="font-normal lg:text-xl text-base">(Module 4)</span></div>
                                </div>
                                <svg class="rotate-180" width="8" height="5" viewBox="0 0 8 5"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                        fill="black" />
                                </svg>
                            </div>

                            <div
                                class="collapse-menu-detail hidden bg-white rounded-lg shadow-sm px-5 pb-5 font-normal text-base text-[#262626]">
                                Temukan rahasia Deep Learning! Pelajari tentang struktur dan komponen jaringan neural,
                                buat jaringan Anda sendiri untuk memproses gambar, urutan, dan teks, terapkan model yang
                                telah dilatih sebelumnya melalui pembelajaran transfer, dan praktikkan dengan pembuat
                                enkode otomatis, pemrosesan batch, dan pelatihan GPU.

                            </div>
                        </div>
                        <div class=" mb-4 collapse-menu w-full">
                            <div
                                class="flex flex-row justify-between items-center p-5 bg-white rounded-lg shadow-sm h-20 ">
                                <div class="inline-flex items-center">
                                    <div class="w-9 h-9 mr-3">
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
                                                <linearGradient id="paint0_linear_122_455" x1="0"
                                                    y1="0" x2="40" y2="40"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="{{ $themeColor }}" />
                                                    <stop offset="1" stop-color="{{ $themeColor }}" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="font-bold lg:text-xl text-base">Project Weeks <span
                                            class="font-normal lg:text-xl text-base">(Module 6)</span></div>
                                </div>
                                <svg class="rotate-180" width="8" height="5" viewBox="0 0 8 5"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                        fill="black" />
                                </svg>
                            </div>

                            <div
                                class="collapse-menu-detail hidden bg-white rounded-lg shadow-sm px-5 pb-5 font-normal text-base text-[#262626]">
                                Bergabunglah dengan proyek data science bersama 3-4 anggota tim. Gunakan sumber data
                                publik atau kumpulan data pribadi Klien Anda sendiri. Dapatkan pendampingan penuh waktu
                                dari guru ahli untuk mencapai prestasi Anda.

                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 pl-1">
                        <div class="mb-4 collapse-menu w-full">
                            <div
                                class="flex flex-row justify-between items-center p-5 bg-white rounded-lg shadow-sm h-20 ">
                                <div class="inline-flex items-center">
                                    <div class="w-9 h-9 mr-3">
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
                                                <linearGradient id="paint0_linear_122_455" x1="0"
                                                    y1="0" x2="40" y2="40"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="{{ $themeColor }}" />
                                                    <stop offset="1" stop-color="{{ $themeColor }}" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="font-bold lg:text-xl text-base">Data Analysis <span
                                            class="font-normal lg:text-xl text-base">(Module 1)</span></div>
                                </div>
                                <svg class="rotate-0" width="8" height="5" viewBox="0 0 8 5"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                        fill="black" />
                                </svg>
                            </div>

                            <div
                                class="collapse-menu-detail hidden bg-white rounded-lg shadow-sm px-5 pb-5 text-justify font-normal text-base text-[#262626]">
                                Kuasai penggunaan bahasa pemrograman Python, khususnya untuk aplikasi ilmu data, yang
                                memerlukan kemahiran dalam mengekstraksi data dari basis data relasional, menangani
                                kumpulan data yang luas, dan menghasilkan visualisasi data. Selain itu, dapatkan
                                pemahaman menyeluruh tentang prinsip matematika dasar, seperti statistik dan aljabar
                                linier, untuk memfasilitasi analisis data yang efisien (modul terbaru 2023).

                            </div>
                        </div>
                        <div class=" mb-4 collapse-menu w-full">
                            <div
                                class="flex flex-row justify-between items-center p-5 bg-white rounded-lg shadow-sm h-20 ">
                                <div class="inline-flex items-center">
                                    <div class="w-9 h-9 mr-3">
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
                                                <linearGradient id="paint0_linear_122_455" x1="0"
                                                    y1="0" x2="40" y2="40"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="{{ $themeColor }}" />
                                                    <stop offset="1" stop-color="{{ $themeColor }}" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="font-bold lg:text-xl text-base">Machine Learning <span
                                            class="font-normal lg:text-xl text-base">(Module 3)</span></div>
                                </div>
                                <svg class="rotate-180" width="8" height="5" viewBox="0 0 8 5"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                        fill="black" />
                                </svg>
                            </div>

                            <div
                                class="collapse-menu-detail hidden bg-white rounded-lg shadow-sm px-5 pb-5 font-normal text-base text-[#262626]">
                                Jalankan Machine learning, yang melibatkan persiapan data, rekayasa fitur, pemilihan
                                model, evaluasi, dan penyempurnaan. Kembangkan pemahaman tentang prinsip-prinsip
                                matematika dan implementasi numerik dari model Machine Learning.
                            </div>
                        </div>
                        <div class=" mb-4 collapse-menu w-full">
                            <div
                                class="flex flex-row justify-between items-center p-5 bg-white rounded-lg shadow-sm h-20 ">
                                <div class="inline-flex items-center">
                                    <div class="w-9 h-9 mr-3">
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
                                                <stop stop-color="{{ $themeColor }}" />
                                                <stop offset="1" stop-color="{{ $themeColor }}" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    </div>
                                    <div class="font-bold lg:text-xl text-base">Machine Learning Engineering <span
                                            class="font-normal lg:text-xl text-base">(Module 5)</span></div>
                                </div>
                                <svg class="rotate-180" width="8" height="5" viewBox="0 0 8 5"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                        fill="black" />
                                </svg>
                            </div>

                            <div
                                class="collapse-menu-detail hidden bg-white rounded-lg shadow-sm px-5 pb-5 font-normal text-base text-[#262626]">
                                Convert your superior handmade models into a Python package for cloud-based replication
                                and training with virtual machines and online databases. Monitor and update performance
                                with new data, and share predictions through APIs or websites (2023 newest module)
                                Ubah model karya Anda yang unggul menjadi paket Python untuk replikasi dan pelatihan
                                berbasis cloud dengan mesin virtual dan database online. Pantau dan perbarui kinerja
                                dengan data baru, dan bagikan prediksi melalui API atau situs web.* (Modul Terbaru 2023)
                            </div>
                        </div>
                        <div class=" mb-4 collapse-menu w-full">
                            <div
                                class="flex flex-row justify-between items-center p-5 bg-white rounded-lg shadow-sm h-20 ">
                                <div class="inline-flex items-center">
                                    <div class="w-9 h-9 mr-3">
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
                                                <stop stop-color="{{ $themeColor }}" />
                                                <stop offset="1" stop-color="{{ $themeColor }}" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    </div>
                                    <div class="font-bold lg:text-xl text-base">Career Weeks <span
                                            class="font-normal lg:text-xl text-base"></span></div>
                                </div>
                                <svg class="rotate-180" width="8" height="5" viewBox="0 0 8 5"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                        fill="black" />
                                </svg>
                            </div>

                            <div
                                class="collapse-menu-detail hidden bg-white rounded-lg shadow-sm px-5 pb-5 font-normal text-base text-[#262626]">
                                Tingkatkan keterampilan pencarian kerja Anda dengan bertemu dengan para profesional ilmu
                                data yang bekerja di perusahaan rintisan atau perusahaan teknologi terkemuka, berlatih
                                simulasi wawancara , dan menyempurnakan CV Anda.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center mt-4" data-aos="fade-up">
                    <a href="https://forms.gle/BMVkjWJ9kKePwoLK6" target="_blank"
                        class="bg-[{{ $themeColor }}] px-6 py-3 font-bold text-lg rounded-full text-white">Download
                        Syllabus</a>
                </div>
            </section>

            @if (count($destinations) > 0)
                <section class="w-full lg:w-11/12 mt-12" id="destination">
                    <p class="font-bold text-base text-[#262626] mb-6" data-aos="fade-up">Wisata Tujuan</p>
                    <p class="font-black text-2xl lg:text-4xl mb-2" data-aos="fade-up">Berbagai Pilihan Wonderful
                        Tujuan
                    </p>
                    <p class="font-normal text-base text-[#262626]" data-aos="fade-up">Lebih dari 1000+ pilihan
                        destinasi wisata yang menakjubkan</p>
                    <div class="flex justify-between lg:flex-row flex-col mt-10" data-aos="fade-up"
                        id="destination-navigation">
                        @foreach ($destinations as $item)
                            <div class="lg:w-1/3 w-full py-0 px-3">
                                <div class="relative bg-white rounded-lg shadow-sm h-[27rem]">
                                    <img src="{{ Vite::asset($item['image']) }}" alt="person 1"
                                        class="rounded-lg h-64">
                                    <p class="font-bold text-2xl px-6 pt-6 pb-3 text-left">{{ $item['title'] }}</p>
                                    <p class="font-normal text-sm px-6 text-left line-clamp-2">
                                        {{ $item['subtitle'] }}</p>
                                    <br>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- <div class="flex gap-3" data-aos="fade-up">
                        <button type="button" data-aos="fade-up" id="previews-destination">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="40" y="40" width="40" height="40"
                                    rx="20" transform="rotate(180 40 40)" fill="#A7A7A7" />
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
                        <button type="button" data-aos="fade-up" id="next-destination">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="40" height="40" rx="20" fill="{{$themeColor}}" />
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
                    </div> --}}
                </section>
            @endif

            @if (count($programFee) > 0)
                <section class="w-full lg:w-11/12 mt-12" id="programFee">
                    <p class="font-bold text-base text-[#262626] mb-6 uppercase" data-aos="fade-up">Biaya Program</p>
                    <p class="font-black text-2xl lg:text-4xl mb-2 capitalize" data-aos="fade-up">Investasi untuk karir masa
                        depan Anda</p>
                    <div class="flex justify-between lg:flex-row flex-col mt-10" data-aos="fade-up"
                        id="destination-navigation">
                        @foreach ($programFee as $item)
                            <div class="lg:w-1/2 w-full lg:py-0 py-3 lg:first:pr-6 mb-5">
                                <div class="bg-white rounded-lg shadow-sm">
                                    <div class="bg-[#FFE6CE] rounded-t-lg p-4">
                                        <p class="font-black text-lg text-[#8C5200]">{{ $item['title'] }}</p>
                                        <p class="font-medium text-sm text-[#8C5200] opacity-75 mt-1">
                                            {{ $item['type'] }}</p>
                                    </div>
                                    <div class="px-4 pt-4">
                                        <p class="font-normal text-sm text-[#262626]">Price</p>
                                        @foreach ($item['price'] as $prc)
                                            <div class="font-black text-xl text-[#262626] mt-1">{!! $prc !!}
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="px-4 pt-5 flex items-center">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_332_6017)">
                                                <path
                                                    d="M10 0.833008C8.18705 0.833008 6.41477 1.37062 4.90732 2.37787C3.39987 3.38512 2.22495 4.81675 1.53115 6.49174C0.837346 8.16673 0.655815 10.0098 1.00951 11.788C1.36321 13.5662 2.23625 15.1995 3.51823 16.4815C4.80021 17.7635 6.43356 18.6365 8.21172 18.9902C9.98988 19.3439 11.833 19.1624 13.508 18.4686C15.183 17.7748 16.6146 16.5999 17.6218 15.0924C18.6291 13.585 19.1667 11.8127 19.1667 9.99967C19.1638 7.5694 18.1972 5.23949 16.4787 3.52103C14.7602 1.80257 12.4303 0.835875 10 0.833008ZM13.0892 13.0888C12.9329 13.2451 12.721 13.3328 12.5 13.3328C12.2791 13.3328 12.0672 13.2451 11.9109 13.0888L9.41088 10.5888C9.25459 10.4326 9.16676 10.2207 9.16671 9.99967V4.99967C9.16671 4.77866 9.25451 4.5667 9.41079 4.41042C9.56707 4.25414 9.77903 4.16634 10 4.16634C10.2211 4.16634 10.433 4.25414 10.5893 4.41042C10.7456 4.5667 10.8334 4.77866 10.8334 4.99967V9.65468L13.0892 11.9105C13.2454 12.0668 13.3332 12.2787 13.3332 12.4997C13.3332 12.7206 13.2454 12.9326 13.0892 13.0888Z"
                                                    fill="#FF9500" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_332_6017">
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <div class="ml-1 font-normal text-sm">Duration : <span
                                                class="font-bold text-sm">{{ $item['duration'] }}</span></div>
                                    </div>
                                    <div class="px-6 py-4">
                                        <div><span class="font-bold text-sm text-[#262626] opacity-75">Note</span>:
                                            <span
                                                class="font-normal text-sm text-[#262626] opacity-75">{{ $item['note'] }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            @endif

            <section class="w-full mt-12 mx-auto" id="studylocation">
                <p class="font-bold text-base text-[#262626] mb-6" data-aos="fade-up">JELAJAHI {{config('app.name')}} GLOBAL</p>
                <p class="font-black text-2xl lg:text-4xl mb-2 capitalize" data-aos="fade-up">Temukan Destinasi
                    Terbaik</p>
                <p class="font-normal text-base text-[#262626]" data-aos="fade-up">Lebih baik memiliki kehidupan baru,
                    mengalami budaya, dan dipekerjakan oleh Perusahaan Internasional.</p>
                <div class="w-full lg:w-11/12 flex lg:flex-row flex-col mt-10" data-aos="fade-up"
                    id="study-change-location">
                    <a href="{{ route('detail', ['slug' => 'indonesia', 'course' => $course]) }}"
                        class="w-full lg:w-1/4 lg:p-3 p-0 lg:my-0 my-3">
                        <div class="relative bg-white rounded-lg shadow-sm w-full">
                            <img src="{{ Vite::asset('resources/image/ilustration/indonesia_2.png') }}"
                                alt="person 1" class="rounded-lg w-full h-48">
                            <p class="font-bold text-xl px-4 py-5 text-center">Indonesia</p>
                        </div>
                    </a>
                    <a href="{{ route('detail', ['slug' => 'istanbul', 'course' => $course]) }}"
                        class="w-full lg:w-1/4 lg:p-3 p-0 lg:my-0 my-3">
                        <div class="relative bg-white rounded-lg shadow-sm w-full">
                            <img src="{{ Vite::asset('resources/image/ilustration/istanbul.png') }}" alt="person 1"
                                class="rounded-lg w-full h-48">
                            <p class="font-bold text-xl px-4 py-5 text-center">Istanbul</p>
                        </div>
                    </a>
                    <div class="w-full lg:w-1/4 lg:p-3 p-0 lg:my-0 my-3">
                        <div class="relative bg-white rounded-lg shadow-sm w-full">
                            <img src="{{ Vite::asset('resources/image/ilustration/tokyo.jpg') }}" alt="person 1"
                                class="rounded-lg w-full h-48">
                            <p class="font-bold text-xl px-4 py-5 text-center">Tokyo</p>
                            <div class="absolute top-0 w-full h-48 bg-black opacity-50 rounded-lg">
                            </div>
                            <div
                                class="absolute top-4 left-4 bg-white rounded-full font-bold text-base px-2 py-1 text-[#FF2F2F]">
                                Segera Hadir
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/4 lg:p-3 p-0 lg:my-0 my-3">
                        <div class="relative bg-white rounded-lg shadow-sm w-full">
                            <img src="{{ Vite::asset('resources/image/ilustration/south_korea.png') }}"
                                alt="person 1" class="rounded-lg w-full h-48">
                            <p class="font-bold text-xl px-4 py-5 text-center">Seoul</p>
                            <div class="absolute top-0 w-full h-48 bg-black opacity-50 rounded-lg">
                            </div>
                            <div
                                class="absolute top-4 left-4 bg-white rounded-full font-bold text-base px-2 py-1 text-[#FF2F2F]">
                                Segera Hadir
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="flex gap-3" data-aos="fade-up">
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
                            <rect width="40" height="40" rx="20" fill="{{$themeColor}}" />
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
                </div> --}}
            </section>

            <section class="alumni w-11/12 mt-12" id="alumni">
                <p class="font-bold text-base text-[#262626] mb-6 capitalize" data-aos="fade-up">Cerita beberapa
                    alumni</p>
                <p class="font-black text-2xl lg:text-4xl mb-2 capitalize" data-aos="fade-up">Apa yang dikatakan
                    alumni tentang {{config('app.name')}}</p>
                <p class="font-normal text-base text-[#262626] capitalize" data-aos="fade-up">Simak kisah para alumni program Bootcamp di {{config('app.name')}}!</p>
                <div class="overflow-x-auto flex" data-aos="fade-up" id="alumni-slider">
                    <div class="flex-none py-0 px-3 first:pl-0 last:pr-6">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="w-96 p-3">
                                <div class="bg-white rounded-lg p-8 shadow-sm h-96">
                                    <div class="flex ">
                                        <img src="{{Vite::asset('resources/image/avatar/hieronymus_kopong_bali.jpeg')}}"
                                            alt="avatar 1" class="w-12 h-12 rounded-full">
                                        <div class="ml-5">
                                            <p class="font-medium text-base text-black">Hieronymus Kopong Bali</p>
                                            <p class="font-medium text-xs text-[#0E144A] opacity-60">Marketing Manager
                                                at KUMPUL | Digital Marketing & Startup Practitioner | BNSP Certified
                                            </p>
                                        </div>
                                    </div>
                                    <p class="font-medium text-base text-[#262626] mt-5">"Di sini, saya tidak hanya
                                        dapat mengikuti kelas-kelas yang menyenangkan, tetapi juga menambah jaringan dan
                                        pengetahuan saya karena pelatih yang sangat berpengalaman." Hieronymus </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none py-0 px-3 first:pl-0 last:pr-6">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="w-96 p-3">
                                <div class="bg-white rounded-lg p-8 shadow-sm h-96">
                                    <div class="flex ">
                                        <img src="{{Vite::asset('resources/image/avatar/tyas_fitri_anggarinii.jpeg')}}"
                                            alt="avatar 1" class="w-12 h-12 rounded-full">
                                        <div class="ml-5">
                                            <p class="font-medium text-base text-black">Tyas Fitri Anggarini</p>
                                            <p class="font-medium text-xs text-[#0E144A] opacity-60">Brand Performance
                                                & Strategy at majoo Indonesia</p>
                                        </div>
                                    </div>
                                    <p class="font-medium text-base text-[#262626] mt-5"> "Wujudkan impian saya untuk
                                        bekerja sebagai performance specialist dengan mulai belajar Digital Marketing
                                        Bootcamp!”"-Tyas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none py-0 px-3 first:pl-0 last:pr-6">
                        <div class="flex flex-col items-center justify-center gap-3">

                            <div class="w-96 p-3">
                                <div class="bg-white rounded-lg p-8 shadow-sm h-96">
                                    <div class="flex ">
                                        <img src="{{Vite::asset('resources/image/avatar/angeline_lie.jpeg')}}"
                                            alt="avatar 1" class="w-12 h-12 rounded-full">
                                        <div class="ml-5">
                                            <p class="font-medium text-base text-black">Angeline Lie </p>
                                            <p class="font-medium text-xs text-[#0E144A] opacity-60">Founder & CEO at
                                                Digmo Agency</p>
                                        </div>
                                    </div>
                                    <p class="font-medium text-base text-[#262626] mt-5">"Materi pembelajarannya sangat
                                        lengkap, kelasnya terstruktur dengan baik, dan layanan konsultasinya memuaskan."
                                        - Angeline Lie</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none py-0 px-3 first:pl-0 last:pr-6">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="w-96 p-3">
                                <div class="bg-white rounded-lg p-8 shadow-sm h-96">
                                    <div class="flex ">
                                        <img src="{{Vite::asset('resources/image/avatar/balad_al_barokah.jpeg')}}"
                                            alt="avatar 1" class="w-12 h-12 rounded-full">
                                        <div class="ml-5">
                                            <p class="font-medium text-base text-black">Balad Al Barokah</p>
                                            <p class="font-medium text-xs text-[#0E144A] opacity-60">Growth Analyst at
                                                MGD Digital Marketing Consultant</p>
                                        </div>
                                    </div>
                                    <p class="font-medium text-base text-[#262626] mt-5">"{{config('app.name')}} membuka peluang baru
                                        untuk bekerja di bidang digital!"- Balad </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none py-0 px-3 first:pl-0 last:pr-6">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="w-96 p-3">
                                <div class="bg-white rounded-lg p-8 shadow-sm h-96">
                                    <div class="flex ">
                                        <img src="{{Vite::asset('resources/image/avatar/andhimas_iben_d.jpeg')}}"
                                            alt="avatar 1" class="w-12 h-12 rounded-full">
                                        <div class="ml-5">
                                            <p class="font-medium text-base text-black">Andimas Iben D. </p>
                                            <p class="font-medium text-xs text-[#0E144A] opacity-60">Msc. Marketing
                                                Candidate at RuG | Ex - Tokopedia | LPDP Awardee PK-194</p>
                                        </div>
                                    </div>
                                    <p class="font-medium text-base text-[#262626] mt-5">"{{config('app.name')}} membantu saya untuk
                                        mendapatkan pemahaman yang lebih dalam tentang ilmu data. Setelah mengikuti
                                        kursus mereka dan tetap terhubung dengan mentor saya, saya dapat mulai bekerja
                                        di perusahaan impian saya menggunakan keterampilan yang meningkat secara
                                        signifikan." - Andimas Iben </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none py-0 px-3 first:pl-0 last:pr-6">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="w-96 p-3">
                                <div class="bg-white rounded-lg p-8 shadow-sm h-96">
                                    <div class="flex ">
                                        <img src="{{Vite::asset('resources/image/avatar/agnes_friska_cyntia_puspitasari.jpeg')}}"
                                            alt="avatar 1" class="w-12 h-12 rounded-full">
                                        <div class="ml-5">
                                            <p class="font-medium text-base text-black">Agnes Friska Cyntia Puspitasari
                                            </p>
                                            <p class="font-medium text-xs text-[#0E144A] opacity-60">Co-Founder di PT
                                                Visuels Inspirasi
                                                Digispora | Digital Marketing Expert | Instagram & Tiktok Content
                                                Creator</p>
                                        </div>
                                    </div>
                                    <p class="font-medium text-base text-[#262626] mt-5">"Program Berkualitas Tinggi
                                        dengan mentor terbaik. Layanan mereka memenuhi 5 bintang" - Agnes Friska</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-3" data-aos="fade-up">
                    <button type="button" id="previews-alumni">
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
                    <button type="button" id="next-alumni">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="40" height="40" rx="20" fill="{{ $themeColor }}" />
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

            <section class="w-full lg:w-11/12 mt-12">
                <p class="font-bold text-base text-[#262626] mb-6" id="partnerships" data-aos="fade-up">
                    KERJASAMA</p>
                <p class="font-black text-2xl lg:text-4xl mb-2 capitalize"data-aos="fade-up">Lulusan kami bekerja di
                </p>
                <div class="mt-8 flex flex-row overflow-x-auto justify-start items-center">
                    <img src="{{ Vite::asset('resources/image/icon/shopee_color.png') }}" alt="stick_earn"
                        class="h-12 object-cover px-3 pt-5 mt-3 ml-5" data-aos="fade-up">
                    <img src="{{ Vite::asset('resources/image/icon/tokopedia.png') }}" alt="tokopedia"
                        class="h-14 object-cover px-3 pt-5 mt-3" data-aos="fade-up">
                    <img src="{{ Vite::asset('resources/image/icon/telkom_indonesia.png') }}"
                        alt="telkom_indonesia" class="h-14 object-cover px-3 pt-5 mt-3" data-aos="fade-up">
                    <img src="{{ Vite::asset('resources/image/icon/detsu_grey.png') }}" alt="dentsu"
                        class="h-14 object-cover px-3 pt-5 mt-3" data-aos="fade-up">
                    <img src="{{ Vite::asset('resources/image/icon/glint_color.png') }}" alt="danone"
                        class="h-14 object-cover px-3 pt-5 mt-3" data-aos="fade-up">
                    <img src="{{ Vite::asset('resources/image/icon/kitabisa_color.png') }}" alt="kaskus"
                        class="h-14 object-cover px-3 pt-5 mt-3" data-aos="fade-up">
                    <img src="{{ Vite::asset('resources/image/icon/mekari_color.png') }}" alt="kaskus"
                        class="h-14 object-cover px-3 pt-5 mt-3" data-aos="fade-up">
                    <img src="{{ Vite::asset('resources/image/icon/bri_color.png') }}" alt="kaskus"
                        class="h-14 object-cover px-3 pt-5 mt-3" data-aos="fade-up">
                    {{-- <img src="{{ Vite::asset('resources/image/icon/stick_earn.png') }}" alt="stick_earn"
                        class="h-12 object-cover px-3 pt-5 mt-3 ml-5" data-aos="fade-up"> --}}
                </div>
            </section>

            <section class="portofolio w-full lg:w-11/12 mt-12 lg:mt-20" id="portofolio">
                <p class="font-bold text-base text-[#262626] mb-6 capitalize" data-aos="fade-up">PORTOFOLIO ALUMNI
                </p>
                <p class="font-black text-2xl lg:text-4xl mb-2 capitalize" data-aos="fade-up">Portfolio Peserta pada
                    Bootcamp
                    {{config('app.name')}}</p>
                <p class="font-normal text-base text-[#262626] capitalize" data-aos="fade-up">Jelajahi portofolio
                    alumni program Data Science Bootcamp di {{config('app.name')}}!</p>
                <div class="flex lg:flex-row flex-col" data-aos="fade-up" id="portofolio-slider">
                    <div class="w-full lg:w-1/3" data-aos="fade-up">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="lg:p-3 p-0 lg:my-0 my-3">
                                <div class="bg-white rounded-2xl p-2 shadow-sm">
                                    <img src="{{ Vite::asset('resources/image/portofolio/portofolio_1.png') }}"
                                        alt="ilustration 4" class="rounded-lg">
                                    <div class="p-4">
                                        <p class="font-bold text-2xl text-[#262626] mb-4 h-20">Final Project Promosi
                                            Karyawan</p>
                                        <p class="font-bold text-base text-[#262626] mb-2">Disusun oleh</p>
                                        <p class="font-normal text-base text-[#262626]">Kadek Mardika Pranata</p>
                                        <div class="mt-12 flex w-full text-center">
                                            <a href="https://drive.google.com/file/d/10p1af15lw6lbzdG4Ayyqpjei0bV6g2YW/view"
                                                target="_blank"
                                                class="w-full text-[{{ $themeColor }}] px-10 py-2 rounded-full text-lg font-bold mb-3 outline outline-1 outline-[{{ $themeColor }}]">See
                                                Portofolio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3" data-aos="fade-up">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="lg:p-3 p-0 lg:my-0 my-3">
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <img src="{{ Vite::asset('resources/image/portofolio/portofolio_2.png') }}"
                                        alt="ilustration 4" class="rounded-lg">
                                    <div class="p-4">
                                        <p class="font-bold text-2xl text-[#262626] mb-4 h-20">Job & Department
                                            Promotion</p>
                                        <p class="font-bold text-base text-[#262626] mb-2">Disusun oleh</p>
                                        <p class="font-normal text-base text-[#262626]">Syifaya Qorina</p>
                                        <div class="mt-12 flex w-full text-center">
                                            <a href="https://drive.google.com/file/d/1emvOSQ_nmwTw5bx_7xZG66L4vCSOr-y5/view"
                                                target="_blank"
                                                class="w-full text-[{{ $themeColor }}] px-10 py-2 rounded-full text-lg font-bold mb-3 outline outline-1 outline-[{{ $themeColor }}]">See
                                                Portofolio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3" data-aos="fade-up">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="lg:p-3 p-0 lg:my-0 my-3">
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <img src="{{ Vite::asset('resources/image/portofolio/portofolio_3.png') }}"
                                        alt="ilustration 4" class="rounded-lg">
                                    <div class="p-4">
                                        <p class="font-bold text-2xl text-[#262626] mb-4 h-20">{{config('app.name')}} Data Science</p>
                                        <p class="font-bold text-base text-[#262626] mb-2">Disusun oleh</p>
                                        <p class="font-normal text-base text-[#262626]">Aliyya Nur Rahma</p>
                                        <div class="mt-12 flex w-full text-center">
                                            <a href="https://drive.google.com/file/d/1VT3mlpV2piycnSUkSp5uD1sPGd94IAXw/view"
                                                target="_blank"
                                                class="w-full text-[{{ $themeColor }}] px-10 py-2 rounded-full text-lg font-bold mb-3 outline outline-1 outline-[{{ $themeColor }}]">See
                                                Portofolio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="flex gap-3" data-aos="fade-up">
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
                            <rect width="40" height="40" rx="20" fill="{{$themeColor}}" />
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
                </div> --}}
            </section>

            @if (strtolower($slug) == 'indonesia')
                <section class="portofolio w-full lg:w-11/12 mt-12" id="portofolio" data-aos="fade-up">
                    <div class="w-full h-72 flex rounded-xl p-4 lg:p-10"
                        style="background-image: url('{{ Vite::asset('resources/image/ilustration/meet_our_career.png') }}'); border-radius: 16px; background-size: cover; ">
                        <a href="https://www.linkedin.com/in/nailawaliyahamima/" target="_blank"
                            class="lg:mx-0 bg-white rounded-2xl w-full lg:w-7/12 p-6 shadow-sm lg:shadow-none">
                            <p class="font-black text-2xl text-[#262626] w-full lg:w-10/12">Temui Career Manager Kami
                                Di Indonesia</p>
                            <div class="flex w-full mt-4">
                                <img src="{{ Vite::asset('resources/image/avatar/career_manager.png') }}"
                                    alt="career manager" class="rounded-full w-14 h-14">
                                <div class="flex flex-col ml-3 lg:w-8/12">
                                    <p class="font-medium text-base text-black">Naila Waliya</p>
                                    <p class="font-medium text-xs text-[#0E144A] opacity-60">Career Manager at
                                        {{config('app.name')}} | Copywriting & Digital Media Enthusiast</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </section>
            @endif
            <section class="w-full lg:w-11/12 mt-14" id="gethired">
                <p class="font-bold text-base text-[#262626] mb-6 uppercase"data-aos="fade-up">Diterima kerja</p>
                <p class="font-black text-2xl lg:text-4xl mb-2" data-aos="fade-up">Rencana Kerja 3 Tahap</p>
                <div class="flex flex-wrap mt-8 justify-between" data-aos="fade-up">
                    <div class="w-full lg:w-1/3 mb-8">
                        <div
                            class="bg-white flex flex-col justify-start items-center lg:mr-6 h-96 shadow-sm rounded-xl p-6">
                            <div class="w-12 h-12">
                                <svg width="49" height="48" viewBox="0 0 49 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M28.5 4H12.5C11.4391 4 10.4217 4.42143 9.67159 5.17157C8.92144 5.92172 8.50002 6.93913 8.50002 8V40C8.50002 41.0609 8.92144 42.0783 9.67159 42.8284C10.4217 43.5786 11.4391 44 12.5 44H26.5C25.68 43.5 24.9 42.88 24.22 42.2C22.9629 41.0444 21.9467 39.6516 21.2298 38.1019C20.5128 36.5521 20.1093 34.876 20.0424 33.1697C19.9755 31.4635 20.2465 29.7608 20.8399 28.1597C21.4333 26.5586 22.3373 25.0905 23.5 23.84C27.88 19 35.16 18.26 40.5 22V16L28.5 4ZM26.5 18V7L37.5 18H26.5ZM41.12 37.8C43.78 33.58 42.5 28 38.32 25.36C34.1 22.7 28.5 24 25.88 28.16C23.2 32.38 24.5 37.94 28.68 40.6C31.6 42.46 35.32 42.46 38.26 40.64L44.5 46.78L47.28 44L41.12 37.8ZM33.5 38C32.1739 38 30.9022 37.4732 29.9645 36.5355C29.0268 35.5979 28.5 34.3261 28.5 33C28.5 31.6739 29.0268 30.4021 29.9645 29.4645C30.9022 28.5268 32.1739 28 33.5 28C34.8261 28 36.0979 28.5268 37.0355 29.4645C37.9732 30.4021 38.5 31.6739 38.5 33C38.5 34.3261 37.9732 35.5979 37.0355 36.5355C36.0979 37.4732 34.8261 38 33.5 38Z"
                                        fill="{{ $themeColor }}" />
                                </svg>
                            </div>
                            <p class="mt-5 text-center font-bold text-xl text-[#262626] opacity-80">Studi Kasus Nyata
                            </p>
                            <p class="mt-3 font-normal text-base text-center text-[#262626] opacity-80">Anda akan
                                mengerjakan kasus perusahaan nyata dan mengisi profil LinkedIn Anda dengan proyek
                                profesional. Dengan demikian, Anda akan bersinar di pasar kerja.</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 mb-8">
                        <div
                            class="bg-white flex flex-col justify-start items-center lg:mr-6 h-96 shadow-sm rounded-xl p-6">
                            <div class="w-12 h-12">
                                <svg width="49" height="48" viewBox="0 0 49 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M26.5 18H37.5L26.5 7V18ZM12.5 4H28.5L40.5 16V40C40.5 41.0609 40.0786 42.0783 39.3284 42.8284C38.5783 43.5786 37.5609 44 36.5 44H12.5C11.4391 44 10.4217 43.5786 9.67157 42.8284C8.92143 42.0783 8.5 41.0609 8.5 40V8C8.5 5.78 10.28 4 12.5 4ZM28.5 40V38C28.5 35.34 23.16 34 20.5 34C17.84 34 12.5 35.34 12.5 38V40H28.5ZM20.5 24C19.4391 24 18.4217 24.4214 17.6716 25.1716C16.9214 25.9217 16.5 26.9391 16.5 28C16.5 29.0609 16.9214 30.0783 17.6716 30.8284C18.4217 31.5786 19.4391 32 20.5 32C21.5609 32 22.5783 31.5786 23.3284 30.8284C24.0786 30.0783 24.5 29.0609 24.5 28C24.5 26.9391 24.0786 25.9217 23.3284 25.1716C22.5783 24.4214 21.5609 24 20.5 24Z"
                                        fill="{{ $themeColor }}" />
                                </svg>
                            </div>
                            <p class="mt-5 text-center font-bold text-xl text-[#262626] opacity-80">CV Review
                            </p>
                            <p class="mt-3 font-normal text-base text-center text-[#262626] opacity-80">Dengan
                                konsultan karir pribadi Anda, Anda akan dapat menulis surat lamaran yang efektif dan
                                berlatih wawancara dengan perekrut profesional.
                            </p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 mb-8">
                        <div
                            class="bg-white flex flex-col justify-start items-center lg:mr-6 h-96 shadow-sm rounded-xl p-6">
                            <div class="w-12 h-12">
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
                                            <stop stop-color="{{ $themeColor }}" />
                                            <stop offset="1" stop-color="{{ $themeColor }}" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_226_1196" x1="0.500061" y1="23.2402"
                                            x2="15.6277" y2="58.2175" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="{{ $themeColor }}" />
                                            <stop offset="1" stop-color="{{ $themeColor }}" />
                                        </linearGradient>
                                        <linearGradient id="paint2_linear_226_1196" x1="0.500061" y1="10"
                                            x2="12.3357" y2="41.5616" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="{{ $themeColor }}" />
                                            <stop offset="1" stop-color="{{ $themeColor }}" />
                                        </linearGradient>
                                        <clipPath id="clip0_226_1196">
                                            <rect width="48" height="48" fill="white"
                                                transform="translate(0.500061)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <p class="mt-5 text-center font-bold text-xl text-[#262626] opacity-80">Job Connected
                            </p>
                            <p class="mt-3 font-normal text-base text-center text-[#262626] opacity-80">Kami akan
                                terus mendukung Anda sampai Anda menemukan perusahaan yang tepat untuk Anda. Kami akan
                                ada untuk Anda sampai Anda menyelesaikan masa percobaan Anda di perusahaan.
                            </p>
                        </div>
                    </div>

                </div>
            </section>

            <section class="w-full lg:w-11/12 lg:mt-12" id="admissions">
                <div class="flex flex-wrap lg:flex-nowrap lg:flex-row justify-center items-center">
                    <div class="lg:hidden w-full lg:w-1/2 mb-5" data-aos="fade-up">
                        <img src="{{ Vite::asset('resources/image/ilustration/ilustration_10.png') }}"
                            alt="ilustration 9" class="object-contain rounded-xl">
                    </div>
                    <div class="w-full lg:w-1/2 lg:mr-16 mt-12 lg:mt-0" data-aos="fade-up">
                        <p class="font-bold text-base text-[#262626] mb-5">PENDAFTARAN</p>
                        <p class="font-bold text-2xl lg:text-4xl text-black mb-5">Jelajahi Tentang Diri Anda</p>
                        <p class="font-medium text-base lg:text-lg text-[#262626] opacity-60 lg:mb-6">Selesaikan
                            penilaian karir singkat dengan 8 pertanyaan hanya dalam 90 detik.
                        </p>
                        <br>
                        <div class="flex w-full lg:w-auto">
                            <a href="https://62gsgs92c9y.typeform.com/CareerQuiz"
                                target="_blank"
                                class=" bg-[{{ $themeColor }}] px-10 lg:py-4 py-2 rounded-full text-white text-lg font-bold mb-11 mt-6 w-full lg:w-auto text-center">Ikuti
                                Kuis Karir</a>
                        </div>
                    </div>
                    <div class="hidden lg:block w-full lg:w-1/2" data-aos="fade-up">
                        <img src="{{ Vite::asset('resources/image/ilustration/ilustration_10.png') }}"
                            alt="ilustration 9" class="object-contain rounded-xl">
                    </div>
                </div>
            </section>


            <section class="ready_join w-full lg:w-11/12 mt-12 mb-10" id="ready_join" data-aos="fade-up">
                <div class="relative flex justify-end rounded-xl">
                    <img src="{{ Vite::asset('resources/image/ilustration/ilustration_5.png') }}"
                        alt="ilustration 2" class="h-80 rounded-xl">
                    <div class="absolute top-0 left-0 h-80 w-full rounded-xl"
                        style="background: linear-gradient(90.49deg, #00263D 36.68%, rgba(255, 255, 255, 0) 98.95%);">
                    </div>
                    <div class="absolute top-0 left-0 h-80 w-full flex justify-start items-center ">
                        <div class="flex flex-col lg:ml-28 p-10 lg:p-0">
                            <p class="font-black text-2xl lg:text-4xl text-white">Siap Menjadi Master Data Science
                                <br>Yang Berikutnya?
                            </p>
                            <div>
                                <button
                                    class="bg-[{{ $themeColor }}] px-10 lg:py-4 py-2 rounded-full text-white text-lg font-bold mb-11 mt-10">Mari
                                    Kita Mulai</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="hidden">
        <p class="text-[#2622B9] bg-[#DBDAFF] outline-[#DBDAFF] line-through font-base">test1</p>
        <p class="text-[#FF9500] bg-[#FFE6CE] border-2 border-[#FF9500]">test1</p>
        <p class="text-[#EE0A0A] bg-[#FFE3E3] outline-[#FFE3E3]">test1</p>
        <p class="text-[#0F5B89] bg-[#DCF2FF] outline-[#DCF2FF]">test1</p>
    </div>
</x-landing-layout>
