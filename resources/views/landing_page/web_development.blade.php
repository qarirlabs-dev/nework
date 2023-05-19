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
        </script>
    @endpush
    <section class="hero static bg-gradient-to-t from-[#FFEFE3] to-[#FFFFFF] w-full h-[46rem] -mt-20">
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
            <div class="w-10/12 mx-auto mb-20">
                <div class="flex flex-row justify-between items-center">
                    <div class="flex-auto w-6/12">
                        <div class="text-5xl font-black mb-6 mt-16" data-aos="fade-right" data-aos-duration="3000"
                            data-aos-delay="300">{{ ucwords($course) }} Bootcamp <div class="text-[#FF9500]">
                                {{ $detail }}</div>
                        </div>
                        <div class="text-[#262626] font-normal text-2xl mb-6 text-opacity-75 leading-9 w-5/7"
                            data-aos="fade-right" data-aos-duration="3000" data-aos-delay="600">Learn and experience
                            real projects of Digital Marketing and land your dream job within 9 months.</div>
                        <div class="flex flex-wrap">
                            <button
                                class="text-[#FF7A00] px-4 py-3 mr-6 rounded-full text-sm font-bold mb-11 outline outline-1 outline-[#FF7A00]"
                                data-aos="fade-right" data-aos-duration="3000" data-aos-delay="900">Online - Hybrid
                            </button>
                            <button
                                class="text-[#FF7A00] px-4 py-3 mr-6 rounded-full text-sm font-bold mb-11 outline outline-1 outline-[#FF7A00]"data-aos="fade-right"
                                data-aos-duration="3000" data-aos-delay="1200">Beginner
                                Friendly</button>
                        </div>
                        {{-- <div class="w-11/12 bg-gray-50 rounded-full h-6 dark:bg-gray-200" data-aos="flip-left"
                            data-aos-duration="3000" data-aos-delay="300">
                            <div class="text-xs font-medium text-start p-1 leading-none rounded-full h-6 flex items-center"
                                style="width: 67%; background: linear-gradient(151.77deg, #FFB855 18.11%, #FFA220 39.42%, #FFB855 60.73%, #FFB855 82.05%, #FFA220 103.36%, #FFB855 124.67%, #FFA220 145.98%, #FFB855 167.29%);">
                                <span class="ml-6 font-bold text-xs text-white">85% Class Slot Has Been Filled%</span>
                            </div>
                        </div> --}}
                        <div class="flex flex-row mt-8">
                            <button class="bg-[#FF9500] px-10 py-2 rounded-md text-white text-lg font-bold mb-11"
                                data-aos="fade-right" data-aos-duration="3000" data-aos-delay="300">Choose
                                Destination</button>
                            <a href="https://forms.gle/BMVkjWJ9kKePwoLK6" target="_blank"
                                class="ml-4 text-[#FF9500] px-10 py-2 rounded-md  text-lg font-bold mb-11 outline outline-1 outline-[#FF9500]"
                                data-aos="fade-left" data-aos-duration="3000" data-aos-delay="300">Download
                                Syllabus</a>
                        </div>
                    </div>
                    <div class="flex-auto w-4/12">
                        @if (count($heroImages) == 1 && $slug == 'online')
                            @foreach ($heroImages as $item)
                                <img src="{{ Vite::asset($item) }}" alt="ilustration 1" data-aos="zoom-in"
                                    data-aos-duration="3000" data-aos-delay="300">
                            @endforeach
                        @else
                            <div class="ml-36">
                                <div class="grid grid-rows-2 grid-flow-col gap-4">
                                    <div class="row-span-2 relative" data-aos="zoom-in" data-aos-duration="3000"
                                        data-aos-delay="300">
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
                                            alt="ilustration 2" class=" object-cover rounded-lg" data-aos="fade-down"
                                            data-aos-duration="3000" data-aos-delay="300"></div>
                                    <div class="row-span-1 col-span-1"><img src="{{ Vite::asset($heroImages[2]) }}"
                                            alt="ilustration 3" class=" object-cover rounded-lg" data-aos="fade-left"
                                            data-aos-duration="3000" data-aos-delay="300"></div>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="flex flex-row my-10">
        <div class="w-4/12 relative">
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
                    <a href="#destination" class="inline-flex items-center ml-4 side-nav-menu">
                        <div class="h-11 w-0.5 bg-[#A5A5A5] mr-4"></div>
                        <span class="text-[#A5A5A5] font-medium text-lg">Destination</span>
                    </a>
                    <a href="#alumni" class="inline-flex items-center ml-4 side-nav-menu">
                        <div class="h-11 w-0.5 bg-[#A5A5A5] mr-4"></div>
                        <span class="text-[#A5A5A5] font-medium text-lg">All Alumni Story</span>
                    </a>
                    <a href="#partnerships" class="inline-flex items-center ml-4 side-nav-menu">
                        <div class="h-11 w-0.5 bg-[#A5A5A5] mr-4"></div>
                        <span class="text-[#A5A5A5] font-medium text-lg">Meet Trainers</span>
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
        <div class="w-8/12">
            <section class="overview w-11/12">
                <p class="font-bold text-base text-[#262626] mb-6" id="overview" data-aos="fade-left"
                    data-aos-duration="3000" data-aos-delay="300">OVERVIEW</p>
                <p class="font-black text-4xl mb-2" data-aos="fade-left" data-aos-duration="3000"
                    data-aos-delay="600">Our Experience</p>
                <p class="font-normal text-base text-[#262626]" data-aos="fade-left" data-aos-duration="3000"
                    data-aos-delay="600">Master Data Science and see the benefits after
                    graduation</p>
                <div class="flex flex-wrap mt-8 justify-between">
                    <div class="w-full lg:w-1/3 mb-8" data-aos="fade-left" data-aos-duration="3000" data-aos-delay="400">
                        <div class="bg-white p-3 flex flex-col justify-center items-center mr-6 h-56 shadow-sm">
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
                    <div class="w-full lg:w-1/3 mb-8" data-aos="fade-left" data-aos-duration="3000" data-aos-delay="600">
                        <div class="bg-white p-3 flex flex-col justify-center items-center mr-6 h-56 shadow-sm">
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
                    <div class="w-full lg:w-1/3 mb-8" data-aos="fade-left" data-aos-duration="3000" data-aos-delay="800">
                        <div class="bg-white p-3 flex flex-col justify-center items-center mr-6 h-56 shadow-sm">
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
                    <div class="w-full lg:w-1/3 mb-8" data-aos="fade-left" data-aos-duration="3000" data-aos-delay="1000">
                        <div class="bg-white p-3 flex flex-col justify-center items-center mr-6 h-56 shadow-sm">
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
                            <p class="text-center font-bold text-sm text-[#262626] opacity-80 mt-6">
                                Enrichment program (Part time Project)</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 mb-8" data-aos="fade-left" data-aos-duration="3000" data-aos-delay="1200">
                        <div class="bg-white p-3 flex flex-col justify-center items-center mr-6 h-56 shadow-sm">
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
                    <div class="w-full lg:w-1/3 mb-8" data-aos="fade-left" data-aos-duration="3000" data-aos-delay="1400">
                        <div class="bg-white p-3 flex flex-col justify-center items-center mr-6 h-56 shadow-sm">
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
                <p class="font-bold text-2xl mt-4 mb-5" data-aos="fade-left" data-aos-duration="3000"
                    data-aos-delay="400">Ideal Criteria for Bootcamp Program Participants</p>
                <div class="bg-white rounded-lg p-4 shadow-sm mb-6 " data-aos="fade-left" data-aos-duration="3000"
                    data-aos-delay="800">
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
                <div class="flex flex-row justify-between">
                    <div class="font-bold text-[#262626] text-2xl w-4/12" data-aos="fade-up" data-aos-duration="3000"
                        data-aos-delay="400">Professions that can be obtained after
                        graduation</div>
                    <div class="w-7/12">
                        <div class="flex flex-wrap">
                            <div class="w-1/2" data-aos="fade-left" data-aos-duration="3000" data-aos-delay="400">
                                <div class="bg-white rounded-lg p-4 shadow-sm m-2">
                                    <div class="flex flex-row items-center justify-start">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_174_2764)">
                                                <path
                                                    d="M0.88899 20.4722H4.44433C4.93521 20.4722 5.33333 20.87 5.33333 21.3608V30.2498C5.33333 30.7407 4.93521 31.1388 4.44433 31.1388H0.88899C0.398104 31.1388 -7.62939e-06 30.7407 -7.62939e-06 30.2498V21.3608C-7.62939e-06 20.87 0.398104 20.4722 0.88899 20.4722Z"
                                                    fill="url(#paint0_linear_174_2764)" />
                                                <path
                                                    d="M9.77767 13.3608H13.3333C13.8242 13.3608 14.2223 13.759 14.2223 14.2498V30.2498C14.2223 30.7407 13.8242 31.1388 13.3333 31.1388H9.77767C9.28678 31.1388 8.889 30.7407 8.889 30.2498V14.2498C8.889 13.759 9.28678 13.3608 9.77767 13.3608Z"
                                                    fill="url(#paint1_linear_174_2764)" />
                                                <path
                                                    d="M18.6667 16.9165H22.2223C22.7132 16.9165 23.111 17.3146 23.111 17.8055V30.2498C23.111 30.7407 22.7132 31.1388 22.2223 31.1388H18.6667C18.1758 31.1388 17.7777 30.7407 17.7777 30.2498V17.8055C17.7777 17.3146 18.1758 16.9165 18.6667 16.9165Z"
                                                    fill="url(#paint2_linear_174_2764)" />
                                                <path
                                                    d="M27.5557 11.5835H31.111C31.6019 11.5835 32 11.9816 32 12.4725V30.2502C32 30.741 31.6019 31.1392 31.111 31.1392H27.5557C27.0648 31.1392 26.6667 30.741 26.6667 30.2502V12.4725C26.6667 11.9816 27.0648 11.5835 27.5557 11.5835Z"
                                                    fill="url(#paint3_linear_174_2764)" />
                                                <path
                                                    d="M29.3333 0.916504C27.8613 0.918132 26.6683 2.11117 26.6667 3.58317C26.6702 3.87354 26.7217 4.1613 26.819 4.43473L22.3691 7.07992C21.7851 6.46045 20.9385 6.16032 20.0947 6.27327C19.2506 6.38623 18.513 6.8986 18.1123 7.6499L14.1875 5.70589C14.2067 5.59163 14.2181 5.4764 14.2223 5.36084C14.2243 4.28141 13.5755 3.30745 12.5788 2.89307C11.582 2.479 10.4339 2.70654 9.67057 3.46956C8.90689 4.23258 8.6787 5.38037 9.09244 6.37744L4.00129 10.1769C3.59765 9.93636 3.13671 9.80811 2.66666 9.8055C1.194 9.8055 -7.62939e-06 10.9992 -7.62939e-06 12.4722C-7.62939e-06 13.9448 1.194 15.1388 2.66666 15.1388C4.13932 15.1388 5.33333 13.9448 5.33333 12.4722C5.33105 12.1512 5.2705 11.8338 5.15461 11.5347L10.2965 7.6971C11.3024 8.25798 12.557 8.09359 13.3841 7.29216L17.8473 9.50277C18.1448 10.828 19.3919 11.7173 20.7419 11.5669C22.0918 11.4165 23.1126 10.2749 23.111 8.9165C23.111 8.8488 23.096 8.78499 23.0911 8.71859L27.931 5.84131C28.3506 6.10661 28.8366 6.24821 29.3333 6.24984C30.806 6.24984 32 5.05583 32 3.58317C32 2.11051 30.806 0.916504 29.3333 0.916504Z"
                                                    fill="url(#paint4_linear_174_2764)" />
                                            </g>
                                            <defs>
                                                <linearGradient id="paint0_linear_174_2764" x1="-7.62939e-06"
                                                    y1="20.4722" x2="8.53333" y2="24.7388"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FFB72B" />
                                                    <stop offset="1" stop-color="#FFA01B" />
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_174_2764" x1="8.889"
                                                    y1="13.3608" x2="18.6749" y2="16.2966"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FFB72B" />
                                                    <stop offset="1" stop-color="#FFA01B" />
                                                </linearGradient>
                                                <linearGradient id="paint2_linear_174_2764" x1="17.7777"
                                                    y1="16.9165" x2="27.1293" y2="20.4233"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FFB72B" />
                                                    <stop offset="1" stop-color="#FFA01B" />
                                                </linearGradient>
                                                <linearGradient id="paint3_linear_174_2764" x1="26.6667"
                                                    y1="11.5835" x2="36.5949" y2="14.2912"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FFB72B" />
                                                    <stop offset="1" stop-color="#FFA01B" />
                                                </linearGradient>
                                                <linearGradient id="paint4_linear_174_2764" x1="-7.62939e-06"
                                                    y1="0.916504" x2="10.5568" y2="24.6692"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FFB72B" />
                                                    <stop offset="1" stop-color="#FFA01B" />
                                                </linearGradient>
                                                <clipPath id="clip0_174_2764">
                                                    <rect width="32" height="32" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <p class="ml-4 font-bold text-base text-[#262626] opacity-75">Data Analyst</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/2" data-aos="fade-left" data-aos-duration="3000" data-aos-delay="700">
                                <div class="bg-white rounded-lg p-4 shadow-sm m-2">
                                    <div class="flex flex-row items-center justify-start">
                                        <svg width="33" height="32" viewBox="0 0 33 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_174_2772)">
                                                <path
                                                    d="M9.6429 6.85714C11.5364 6.85714 13.0715 5.32212 13.0715 3.42857C13.0715 1.53502 11.5364 0 9.6429 0C7.74935 0 6.21432 1.53502 6.21432 3.42857C6.21432 5.32212 7.74935 6.85714 9.6429 6.85714Z"
                                                    fill="url(#paint0_linear_174_2772)" />
                                                <path
                                                    d="M11.9285 6.85742H9.64281H7.3571C5.46647 6.85742 3.92853 8.39537 3.92853 10.286V11.4289C3.92853 12.0605 4.44025 12.5717 5.07139 12.5717H14.2142C14.8454 12.5717 15.3571 12.0605 15.3571 11.4289V10.286C15.3571 8.39537 13.8192 6.85742 11.9285 6.85742Z"
                                                    fill="url(#paint1_linear_174_2772)" />
                                                <path
                                                    d="M18.4265 21.5702L16.2187 20.9226C16.0797 20.4493 15.8944 19.996 15.662 19.5712L16.7635 17.5555C16.8556 17.3407 16.8076 17.0915 16.6424 16.9263L15.5732 15.8571C15.4081 15.692 15.1589 15.644 14.9441 15.736L12.9284 16.8375C12.5036 16.6051 12.0503 16.4199 11.5769 16.2809L10.9294 14.073C10.8426 13.8561 10.6325 13.7139 10.3989 13.7139H8.88686C8.65325 13.7139 8.44308 13.8561 8.35631 14.073L7.70877 16.2809C7.23542 16.4199 6.78216 16.6051 6.35735 16.8375L4.34159 15.736C4.12681 15.644 3.87765 15.692 3.71247 15.8571L2.64335 16.9263C2.4781 17.0915 2.43011 17.3407 2.52218 17.5555L3.62367 19.5712C3.39132 19.996 3.20605 20.4493 3.06703 20.9226L0.859236 21.5702C0.642229 21.6569 0.5 21.867 0.5 22.1007V23.6127C0.5 23.8463 0.642229 24.0565 0.859235 24.1433L3.06703 24.7908C3.20605 25.2642 3.39132 25.7174 3.62367 26.1422L2.52218 28.158C2.43011 28.3728 2.4781 28.6219 2.64335 28.7871L3.71247 29.8562C3.87765 30.0215 4.12681 30.0695 4.34159 29.9774L6.35735 28.8759C6.78216 29.1083 7.23542 29.2935 7.70877 29.4325L8.35631 31.6403C8.44308 31.8573 8.65325 31.9996 8.88686 31.9996H10.3989C10.6325 31.9996 10.8426 31.8573 10.9294 31.6403L11.5769 29.4325C12.0503 29.2935 12.5036 29.1083 12.9284 28.8759L14.9441 29.9774C15.1589 30.0695 15.4081 30.0215 15.5732 29.8562L16.6424 28.7871C16.8076 28.6219 16.8556 28.3728 16.7635 28.158L15.662 26.1422C15.8944 25.7174 16.0797 25.2642 16.2187 24.7908L18.4265 24.1433C18.6435 24.0565 18.7857 23.8463 18.7857 23.6127V22.1007C18.7857 21.867 18.6435 21.6569 18.4265 21.5702ZM9.64286 26.2853C7.7493 26.2853 6.21429 24.7503 6.21429 22.8567C6.21429 20.9632 7.7493 19.4282 9.64286 19.4282C11.5364 19.4282 13.0714 20.9632 13.0714 22.8567C13.0714 24.7503 11.5364 26.2853 9.64286 26.2853Z"
                                                    fill="url(#paint2_linear_174_2772)" />
                                                <path
                                                    d="M9.64286 25.1427C10.9052 25.1427 11.9286 24.1194 11.9286 22.857C11.9286 21.5946 10.9052 20.5713 9.64286 20.5713C8.3805 20.5713 7.35715 21.5946 7.35715 22.857C7.35715 24.1194 8.3805 25.1427 9.64286 25.1427Z"
                                                    fill="url(#paint3_linear_174_2772)" />
                                                <path d="M27.9285 0V4.57143H32.5L27.9285 0Z"
                                                    fill="url(#paint4_linear_174_2772)" />
                                                <path
                                                    d="M27.9285 5.71429C27.2974 5.71429 26.7857 5.20264 26.7857 4.57143V0H19.9285C19.2974 0 18.7857 0.511649 18.7857 1.14286V17.1429C18.7857 17.7741 19.2974 18.2857 19.9285 18.2857H24.5V21.7143H19.9285V24H25.6428C26.2745 24 26.7857 23.4888 26.7857 22.8571V18.2857H31.3571C31.9883 18.2857 32.5 17.7741 32.5 17.1429V5.71429H27.9285ZM29.6428 16H21.6428C21.327 16 21.0714 15.7444 21.0714 15.4286C21.0714 15.1127 21.327 14.8571 21.6428 14.8571H29.6428C29.9587 14.8571 30.2142 15.1127 30.2142 15.4286C30.2142 15.7444 29.9587 16 29.6428 16ZM29.6428 13.7143H21.6428C21.327 13.7143 21.0714 13.4587 21.0714 13.1429C21.0714 12.827 21.327 12.5714 21.6428 12.5714H29.6428C29.9587 12.5714 30.2142 12.827 30.2142 13.1429C30.2142 13.4587 29.9587 13.7143 29.6428 13.7143ZM29.6428 11.4286H21.6428C21.327 11.4286 21.0714 11.173 21.0714 10.8571C21.0714 10.5413 21.327 10.2857 21.6428 10.2857H29.6428C29.9587 10.2857 30.2142 10.5413 30.2142 10.8571C30.2142 11.173 29.9587 11.4286 29.6428 11.4286ZM29.6428 9.14286H21.6428C21.327 9.14286 21.0714 8.88728 21.0714 8.57143C21.0714 8.25558 21.327 8 21.6428 8H29.6428C29.9587 8 30.2142 8.25558 30.2142 8.57143C30.2142 8.88728 29.9587 9.14286 29.6428 9.14286Z"
                                                    fill="url(#paint5_linear_174_2772)" />
                                            </g>
                                            <defs>
                                                <linearGradient id="paint0_linear_174_2772" x1="6.21432"
                                                    y1="0" x2="13.0715" y2="6.85714"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FFB72B" />
                                                    <stop offset="1" stop-color="#FFA01B" />
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_174_2772" x1="3.92853"
                                                    y1="6.85742" x2="8.49996" y2="16.0003"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FFB72B" />
                                                    <stop offset="1" stop-color="#FFA01B" />
                                                </linearGradient>
                                                <linearGradient id="paint2_linear_174_2772" x1="0.5"
                                                    y1="13.7139" x2="18.7857" y2="31.9996"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FFB72B" />
                                                    <stop offset="1" stop-color="#FFA01B" />
                                                </linearGradient>
                                                <linearGradient id="paint3_linear_174_2772" x1="7.35715"
                                                    y1="20.5713" x2="11.9286" y2="25.1427"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FFB72B" />
                                                    <stop offset="1" stop-color="#FFA01B" />
                                                </linearGradient>
                                                <linearGradient id="paint4_linear_174_2772" x1="27.9285"
                                                    y1="0" x2="32.5" y2="4.57143"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FFB72B" />
                                                    <stop offset="1" stop-color="#FFA01B" />
                                                </linearGradient>
                                                <linearGradient id="paint5_linear_174_2772" x1="18.7857"
                                                    y1="0" x2="39.4626" y2="11.8154"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FFB72B" />
                                                    <stop offset="1" stop-color="#FFA01B" />
                                                </linearGradient>
                                                <clipPath id="clip0_174_2772">
                                                    <rect width="32" height="32" fill="white"
                                                        transform="translate(0.5)" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                        <p class="ml-4 font-bold text-base text-[#262626] opacity-75">Data Engineer
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/2" data-aos="fade-left" data-aos-duration="3000" data-aos-delay="1000">
                                <div class="bg-white rounded-lg p-4 shadow-sm m-2">
                                    <div class="flex flex-row items-center justify-start">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M26.3125 19.75H25.9911C25.2084 17.5372 23.088 16 20.6875 16C18.2714 16 16.1401 17.5573 15.3692 19.7921C13.3916 20.0594 11.8014 21.5655 11.4068 23.5H11.3125C9.24431 23.5 7.5625 25.1818 7.5625 27.25C7.5625 29.3182 9.24431 31 11.3125 31H26.3125C29.4143 31 32 28.4768 32 25.375C32 22.2732 29.4143 19.75 26.3125 19.75Z"
                                                fill="url(#paint0_linear_174_2783)" />
                                            <path
                                                d="M24.4375 1H0V8.5H24.4375V1ZM5.6875 6.625H3.8125V4.75H5.6875V6.625ZM9.4375 6.625H7.5625V4.75H9.4375V6.625ZM13.1875 6.625H11.3125V4.75H13.1875V6.625Z"
                                                fill="url(#paint1_linear_174_2783)" />
                                            <path
                                                d="M20.6875 14.125C22.0346 14.125 23.3208 14.4899 24.4375 15.1362V10.375H0V16H15.7484C17.0871 14.8254 18.8237 14.125 20.6875 14.125ZM5.6875 14.125H3.8125V12.25H5.6875V14.125ZM9.4375 14.125H7.5625V12.25H9.4375V14.125ZM13.1875 14.125H11.3125V12.25H13.1875V14.125Z"
                                                fill="url(#paint2_linear_174_2783)" />
                                            <path
                                                d="M9.99869 21.7798C10.7595 20.0631 12.228 18.7447 14.0261 18.1781C14.0809 18.0722 14.1509 17.9776 14.2104 17.875H0V25.375H6.01013C6.64094 23.5964 8.14144 22.2258 9.99869 21.7798ZM7.5625 19.75H9.4375V21.625H7.5625V19.75ZM5.6875 21.625H3.8125V19.75H5.6875V21.625Z"
                                                fill="url(#paint3_linear_174_2783)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_174_2783" x1="7.5625"
                                                    y1="16" x2="20.9376" y2="37.7902"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FFB72B" />
                                                    <stop offset="1" stop-color="#FFA01B" />
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_174_2783" x1="0"
                                                    y1="1" x2="4.20729" y2="14.7088"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FFB72B" />
                                                    <stop offset="1" stop-color="#FFA01B" />
                                                </linearGradient>
                                                <linearGradient id="paint2_linear_174_2783" x1="0"
                                                    y1="10.375" x2="2.45922" y2="21.0589"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FFB72B" />
                                                    <stop offset="1" stop-color="#FFA01B" />
                                                </linearGradient>
                                                <linearGradient id="paint3_linear_174_2783" x1="0"
                                                    y1="17.875" x2="6.19193" y2="29.607"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FFB72B" />
                                                    <stop offset="1" stop-color="#FFA01B" />
                                                </linearGradient>
                                            </defs>
                                        </svg>

                                        <p class="ml-4 font-bold text-base text-[#262626] opacity-75">Data Architect
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/2" data-aos="fade-left" data-aos-duration="3000" data-aos-delay="1300">
                                <div class="bg-white rounded-lg p-4 shadow-sm m-2">
                                    <div class="flex flex-row items-center justify-start">
                                        <svg width="33" height="32" viewBox="0 0 33 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.4967 17.4481C10.4882 17.4481 5.4531 15.683 4.07839 13.3032C3.8367 13.7221 3.69562 14.1574 3.69562 14.609V18.5035C3.69562 21.5121 9.4285 23.9531 16.4967 23.9531C23.5693 23.9531 29.3044 21.5121 29.3044 18.5035V14.609C29.3044 14.1574 29.1611 13.7221 28.9172 13.3032C27.5425 15.6819 22.5117 17.4481 16.4967 17.4481Z"
                                                fill="url(#paint0_linear_174_2791)" />
                                            <path
                                                d="M16.4967 25.4928C10.4882 25.4928 5.4531 23.7255 4.07839 21.3501C3.8367 21.7668 3.69562 22.202 3.69562 22.6526V26.5504C3.69562 29.5601 9.4285 32 16.4967 32C23.5693 32 29.3044 29.5612 29.3044 26.5504V22.6526C29.3044 22.202 29.1611 21.7668 28.9172 21.3512C27.5425 23.7255 22.5117 25.4928 16.4967 25.4928Z"
                                                fill="url(#paint1_linear_174_2791)" />
                                            <path
                                                d="M28.9544 5.51416C28.7029 7.71894 23.2325 9.48299 16.4967 9.48299C9.76424 9.48299 4.29384 7.71895 4.0434 5.51525C3.82357 5.91553 3.69562 6.3333 3.69562 6.7631V10.6576C3.69562 13.6673 9.4285 16.1072 16.4967 16.1072C23.5693 16.1072 29.3044 13.6684 29.3044 10.6576V6.7631C29.3044 6.3333 29.1742 5.91553 28.9544 5.51416Z"
                                                fill="url(#paint2_linear_174_2791)" />
                                            <path
                                                d="M16.4967 8.24716C23.3899 8.24716 28.9752 6.40219 28.9752 4.12303C28.9752 1.84607 23.3899 0 16.4967 0C9.60784 0.00109364 4.02042 1.84716 4.02042 4.12413C4.02042 6.40219 9.60784 8.24716 16.4967 8.24716Z"
                                                fill="url(#paint3_linear_174_2791)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_174_2791" x1="3.69562"
                                                    y1="13.3032" x2="11.2475" y2="31.4624"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FFB72B" />
                                                    <stop offset="1" stop-color="#FFA01B" />
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_174_2791" x1="3.69562"
                                                    y1="21.3501" x2="11.2475" y2="39.5093"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FFB72B" />
                                                    <stop offset="1" stop-color="#FFA01B" />
                                                </linearGradient>
                                                <linearGradient id="paint2_linear_174_2791" x1="3.69562"
                                                    y1="5.51416" x2="11.1788" y2="23.6048"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FFB72B" />
                                                    <stop offset="1" stop-color="#FFA01B" />
                                                </linearGradient>
                                                <linearGradient id="paint3_linear_174_2791" x1="4.02042"
                                                    y1="0" x2="8.93479" y2="14.8702"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FFB72B" />
                                                    <stop offset="1" stop-color="#FFA01B" />
                                                </linearGradient>
                                            </defs>
                                        </svg>

                                        <p class="ml-4 font-bold text-base text-[#262626] opacity-75">Data Scientist
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="curriculum w-11/12 mt-12">
                <p class="font-bold text-base text-[#262626] mb-6" id="learcnphase" data-aos="fade-down"
                    data-aos-duration="3000" data-aos-delay="100">LEARN PHASE</p>
                <p class="font-black text-4xl mb-2" data-aos="fade-right" data-aos-duration="3000"
                    data-aos-delay="100">What You Will Learn in Practice</p>
                <p class="font-normal text-base text-[#262626]" data-aos="fade-left" data-aos-duration="3000"
                    data-aos-delay="100">Each subject will require you to apply what you learn
                    by hands-on experience through practical assignments and direct feedback from your instructor. In
                    detail, you will learn:</p>
                <div class="grid grid-cols-2 mt-11">
                    <div class="bg-white rounded-lg shadow-sm mr-4 mb-4" data-aos="fade-up" data-aos-duration="3000"
                        data-aos-delay="100">
                        <div class="flex flex-row justify-between items-center p-5">
                            <div class="inline-flex items-center">
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
                                <span class="font-bold text-xl ml-3">Preparation</span>
                            </div>
                            <svg width="8" height="5" viewBox="0 0 8 5" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                    fill="black" />
                            </svg>
                        </div>

                        <div class="px-5 pb-5 text-justify font-normal text-base text-[#262626]">
                            {{config('app.name')}} provides career preparation. Once you’ve been accepted, you'll get the fixed
                            schedule of career mapping & soft skill class with our passionate trainers. You also will
                            receive about 10-20 hours of online learning resources, carefully curated by {{config('app.name')}}
                            Expert to be intuitive and interactive. This preparation phase will ensure you have the
                            necessary Digital Marketing fundamentals before the bootcamp starts.
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-sm mr-4 mb-4" data-aos="fade-up" data-aos-duration="3000"
                        data-aos-delay="300">
                        <div class="flex flex-row justify-between items-center p-5">
                            <div class="inline-flex items-center">
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
                                <div class="font-bold text-xl ml-3">Branding, Influencer Strategic, and Content
                                    Strategy Plan <span class="font-normal text-xl">(Module 1)</span></div>
                            </div>
                            <svg width="8" height="5" viewBox="0 0 8 5" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                    fill="black" />
                            </svg>
                        </div>

                        <div class="px-5 pb-5 text-justify font-normal text-base text-[#262626]">
                            There’s nothing important than branding and content for a digital marketer, learn digital
                            marketing from the basic. Start from explaination of social media's objective and its
                            feature, Hacking strategy to think creative, How to make a good & relevant content, Create
                            content calendar. Its not only about the theory but also practical!
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-sm mr-4 mb-4" data-aos="fade-up" data-aos-duration="3000"
                        data-aos-delay="500">
                        <div class="flex flex-row justify-between items-center p-5">
                            <div class="inline-flex items-center">
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
                                <div class="font-bold text-xl ml-3">Social Media Ads & Performance analyst <span
                                        class="font-normal text-xl">(Module 2)</span></div>
                            </div>
                            <svg width="8" height="5" viewBox="0 0 8 5" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                    fill="black" />
                            </svg>
                        </div>

                        <div class="px-5 pb-5 text-justify font-normal text-base text-[#262626]">
                            Start to run your own ads! maintain your brand's social media, do's and dont's, and
                            creativity to reach the best ROI. Explaining the phase of campaign, success content at FB
                            Ads Manager. Retargeting Audience (Custom Audience, Lookalike) FB Pixel, Relevant Score, and
                            Set up facebook business manager.
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-sm mr-4 mb-4" data-aos="fade-up" data-aos-duration="3000"
                        data-aos-delay="700">
                        <div class="flex flex-row justify-between items-center p-5">
                            <div class="inline-flex items-center">
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
                                <div class="font-bold text-xl ml-3">Google Ads & Media Recommendation<span
                                        class="font-normal text-xl">(Module 3)</span></div>
                            </div>
                            <svg width="8" height="5" viewBox="0 0 8 5" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                    fill="black" />
                            </svg>
                        </div>

                        <div class="px-5 pb-5 text-justify font-normal text-base text-[#262626]">
                            Find the right keyword for your campaign, in this module trainer will explain about, bidding
                            strategy, strength and weakness analysis for SEM, and success tips to run SEM Campaign.
                            There are also an implementation and practice session to make and analyze a brand campaign.
                            programmatic
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-sm mr-4 mb-4" data-aos="fade-up" data-aos-duration="3000"
                        data-aos-delay="800">
                        <div class="flex flex-row justify-between items-center p-5">
                            <div class="inline-flex items-center">
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
                                <div class="font-bold text-xl ml-3">SEO <span class="font-normal text-xl">(Module
                                        4)</span></div>
                            </div>
                            <svg width="8" height="5" viewBox="0 0 8 5" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                    fill="black" />
                            </svg>
                        </div>

                        <div class="px-5 pb-5 text-justify font-normal text-base text-[#262626]">
                            Execute the media then optimize through search engines, which involve media brief, budgeting
                            and creative communication plan. Get to know more about how google search works, in detail
                            to meet Google's needs. Develop more about the strategy and implementation of SEO.
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-sm mr-4 mb-4" data-aos="fade-up" data-aos-duration="3000"
                        data-aos-delay="1000">
                        <div class="flex flex-row justify-between items-center p-5">
                            <div class="inline-flex items-center">
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
                                <div class="font-bold text-xl ml-3">Project Week <span
                                        class="font-normal text-xl">(Module 5)</span></div>
                            </div>
                            <svg width="8" height="5" viewBox="0 0 8 5" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                    fill="black" />
                            </svg>
                        </div>

                        <div class="px-5 pb-5 text-justify font-normal text-base text-[#262626]">
                            Join or propose a genuine Digital Marketing project with 3-4 team members/Individual. You
                            can use some existing brand (Dummy project) or your own private brand (UMKM Project). Get
                            full-time mentoring from expert teachers to achieve your aspirations.
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-sm mr-4 mb-4" data-aos="fade-up" data-aos-duration="3000"
                        data-aos-delay="1200">
                        <div class="flex flex-row justify-between items-center p-5">
                            <div class="inline-flex items-center">
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
                                <div class="font-bold text-xl ml-3">Career Weeks <span
                                        class="font-normal text-xl"></span></div>
                            </div>
                            <svg width="8" height="5" viewBox="0 0 8 5" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.7 0.7L7.3 3.3C7.61667 3.61667 7.68734 3.979 7.512 4.387C7.33667 4.795 7.02434 4.99933 6.575 5L1.425 5C0.975003 5 0.662336 4.79567 0.487003 4.387C0.31167 3.97833 0.382669 3.616 0.700002 3.3L3.3 0.7C3.4 0.6 3.50834 0.525001 3.625 0.475001C3.74167 0.425001 3.86667 0.4 4 0.4C4.13334 0.4 4.25834 0.425 4.375 0.475001C4.49167 0.525001 4.6 0.6 4.7 0.7Z"
                                    fill="black" />
                            </svg>
                        </div>

                        <div class="px-5 pb-5 text-justify font-normal text-base text-[#262626]">
                            Enhance your job search skills by meeting data science professionals employed in startups or
                            leading tech companies, practicing mock interviews, and refining your CV.
                        </div>
                    </div>
                </div>
            </section>

            <section class="w-11/12 mt-12">
                <p class="font-bold text-base text-[#262626] mb-6" id="destination" data-aos="fade-up"
                    data-aos-duration="3000" data-aos-delay="100">DESTINATION</p>
                <p class="font-black text-4xl mb-2" data-aos="fade-up" data-aos-duration="3000"
                    data-aos-delay="100">Study Change To Learn</p>
                <p class="font-normal text-base text-[#262626]" data-aos="fade-up" data-aos-duration="3000"
                    data-aos-delay="100">You can choose to learn Data Science according to your
                    choice location</p>
                <div class="overflow-x-auto flex mt-10" data-aos="fade-left" data-aos-duration="3000"
                    data-aos-delay="100">
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
                <div class="flex gap-3" data-aos="fade-right" data-aos-duration="3000" data-aos-delay="100">
                    <a href="#" data-aos="fade-right">
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
                    <a href="#" data-aos="fade-left">
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

                    </a>
                </div>
            </section>

            <section class="alumni w-11/12 mt-12">
                <p class="font-bold text-base text-[#262626] mb-6" id="alumni" data-aos="fade-left"
                    data-aos-duration="3000" data-aos-delay="100">All Alumni Story</p>
                <p class="font-black text-4xl mb-2" data-aos="fade-left" data-aos-duration="3000"
                    data-aos-delay="200">What alumni say about {{config('app.name')}}</p>
                <p class="font-normal text-base text-[#262626]" data-aos="fade-left" data-aos-duration="3000"
                    data-aos-delay="300">Listen to the stories of alumni of the Data Science
                    Bootcamp program at {{config('app.name')}}!</p>
                <div class="overflow-x-auto flex" data-aos="fade-left" data-aos-duration="3000"
                    data-aos-delay="400">
                    <div class="flex-none py-0 px-3 first:pl-0 last:pr-6">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="w-96 p-3">
                                <div class="bg-white rounded-lg p-8 shadow-sm">
                                    <div class="flex ">
                                        <img src="{{ Vite::asset('resources/image/avatar/avatar_1.png') }}"
                                            alt="avatar 1" class="w-12 h-12">
                                        <div class="ml-5">
                                            <p class="font-medium text-base text-black">Guy Hawkins</p>
                                            <p class="font-medium text-xs text-[#0E144A] opacity-60">Data Science at
                                                GOTO</p>
                                        </div>
                                    </div>
                                    <p class="font-medium text-base text-[#262626] mt-5">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing elit. Phasellus egestas, urna eu consequat consequat, leo velit
                                        eleifend urna, a
                                        lobortis sapien nibh tristique mi. Duis arcu nulla.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none py-0 px-3 first:pl-0 last:pr-6">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="w-96 p-3">
                                <div class="bg-white rounded-lg p-8 shadow-sm">
                                    <div class="flex ">
                                        <img src="{{ Vite::asset('resources/image/avatar/avatar_2.png') }}"
                                            alt="avatar 1" class="w-12 h-12">
                                        <div class="ml-5">
                                            <p class="font-medium text-base text-black">Dianne Russell</p>
                                            <p class="font-medium text-xs text-[#0E144A] opacity-60">Digital Marketing
                                                at Tik Tok</p>
                                        </div>
                                    </div>
                                    <p class="font-medium text-base text-[#262626] mt-5">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing elit. Phasellus egestas, urna eu consequat consequat, leo velit
                                        eleifend urna, a
                                        lobortis sapien nibh tristique mi. Duis arcu nulla.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none py-0 px-3 first:pl-0 last:pr-6">
                        <div class="flex flex-col items-center justify-center gap-3">

                            <div class="w-96 p-3">
                                <div class="bg-white rounded-lg p-8 shadow-sm">
                                    <div class="flex ">
                                        <img src="{{ Vite::asset('resources/image/avatar/avatar_3.png') }}"
                                            alt="avatar 1" class="w-12 h-12">
                                        <div class="ml-5">
                                            <p class="font-medium text-base text-black">Kristin Watson</p>
                                            <p class="font-medium text-xs text-[#0E144A] opacity-60">Digital Marketing
                                                at Shopee</p>
                                        </div>
                                    </div>
                                    <p class="font-medium text-base text-[#262626] mt-5">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing elit. Phasellus egestas, urna eu consequat consequat, leo velit
                                        eleifend urna, a
                                        lobortis sapien nibh tristique mi. Duis arcu nulla.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none py-0 px-3 first:pl-0 last:pr-6">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="w-96 p-3">
                                <div class="bg-white rounded-lg p-8 shadow-sm">
                                    <div class="flex ">
                                        <img src="{{ Vite::asset('resources/image/avatar/avatar_4.png') }}"
                                            alt="avatar 1" class="w-12 h-12">
                                        <div class="ml-5">
                                            <p class="font-medium text-base text-black">Arlene McCoy</p>
                                            <p class="font-medium text-xs text-[#0E144A] opacity-60">Data Science at
                                                Tokopedia</p>
                                        </div>
                                    </div>
                                    <p class="font-medium text-base text-[#262626] mt-5">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing elit. Phasellus egestas, urna eu consequat consequat, leo velit
                                        eleifend urna, a
                                        lobortis sapien nibh tristique mi. Duis arcu nulla.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none py-0 px-3 first:pl-0 last:pr-6">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="w-96 p-3">
                                <div class="bg-white rounded-lg p-8 shadow-sm">
                                    <div class="flex ">
                                        <img src="{{ Vite::asset('resources/image/avatar/avatar_5.png') }}"
                                            alt="avatar 1" class="w-12 h-12">
                                        <div class="ml-5">
                                            <p class="font-medium text-base text-black">Jacob Jones</p>
                                            <p class="font-medium text-xs text-[#0E144A] opacity-60">Software Engineer
                                                at Tik Tok</p>
                                        </div>
                                    </div>
                                    <p class="font-medium text-base text-[#262626] mt-5">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing elit. Phasellus egestas, urna eu consequat consequat, leo velit
                                        eleifend urna, a
                                        lobortis sapien nibh tristique mi. Duis arcu nulla.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none py-0 px-3 first:pl-0 last:pr-6">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="w-96 p-3">
                                <div class="bg-white rounded-lg p-8 shadow-sm">
                                    <div class="flex ">
                                        <img src="{{ Vite::asset('resources/image/avatar/avatar_6.png') }}"
                                            alt="avatar 1" class="w-12 h-12">
                                        <div class="ml-5">
                                            <p class="font-medium text-base text-black">Albert Flores</p>
                                            <p class="font-medium text-xs text-[#0E144A] opacity-60">Software Engineer
                                                at GOTO</p>
                                        </div>
                                    </div>
                                    <p class="font-medium text-base text-[#262626] mt-5">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing elit. Phasellus egestas, urna eu consequat consequat, leo velit
                                        eleifend urna, a
                                        lobortis sapien nibh tristique mi. Duis arcu nulla.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-3" data-aos="fade-right" data-aos-duration="3000" data-aos-delay="100">
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

                    </a>
                </div>
            </section>

            <section class="w-11/12 mt-12">
                <p class="font-bold text-base text-[#262626] mb-6" id="partnerships" data-aos="fade-right"
                    data-aos-duration="3000" data-aos-delay="100">PARTNERSHIPS</p>
                <p class="font-black text-4xl mb-2"data-aos="fade-right" data-aos-duration="3000"
                    data-aos-delay="300">Graduates have Worked in</p>
                <div class="mt-8 flex flex-wrap justify-start items-center">
                    <img src="{{ Vite::asset('resources/image/icon/detsu_grey.png') }}" alt="dentsu"
                        class="h-14 object-cover px-3 pt-5 mt-3" data-aos="fade-up" data-aos-duration="3000"
                        data-aos-delay="100">
                    <img src="{{ Vite::asset('resources/image/icon/tokopedia.png') }}" alt="tokopedia"
                        class="h-14 object-cover px-3 pt-5 mt-3" data-aos="fade-up" data-aos-duration="3000"
                        data-aos-delay="300">
                    <img src="{{ Vite::asset('resources/image/icon/danone.png') }}" alt="danone"
                        class="h-14 object-cover px-3 pt-5 mt-3" data-aos="fade-up" data-aos-duration="3000"
                        data-aos-delay="500">
                    <img src="{{ Vite::asset('resources/image/icon/kaskus.png') }}" alt="kaskus"
                        class="h-9 object-cover px- pt-5 mt-3" data-aos="fade-up" data-aos-duration="3000"
                        data-aos-delay="700">
                    {{-- <img src="{{ Vite::asset('resources/image/icon/stick_earn.png') }}" alt="stick_earn"
                        class="h-12 object-cover px-3 pt-5 mt-3 ml-5" data-aos="fade-up" data-aos-duration="3000"
                        data-aos-delay="900"> --}}
                    <img src="{{ Vite::asset('resources/image/icon/shopee_color.png') }}" alt="stick_earn"
                        class="h-12 object-cover px-3 pt-5 mt-3 ml-5" data-aos="fade-up" data-aos-duration="3000"
                        data-aos-delay="900">
                    <img src="{{ Vite::asset('resources/image/icon/telkom_indonesia.png') }}"
                        alt="telkom_indonesia" class="h-14 object-cover px-3 pt-5 mt-3" data-aos="fade-up"
                        data-aos-duration="3000" data-aos-delay="1100">
                </div>
            </section>

            <section class="portofolio w-11/12 mt-12" id="portofolio">
                <p class="font-bold text-base text-[#262626] mb-6" data-aos="fade-up" data-aos-duration="3000"
                    data-aos-delay="100">PORTOFOLIO ALUMNI</p>
                <p class="font-black text-4xl mb-2" data-aos="fade-up" data-aos-duration="3000"
                    data-aos-delay="100">Portfolio Student at Bootcamp {{config('app.name')}}</p>
                <p class="font-normal text-base text-[#262626]" data-aos="fade-up" data-aos-duration="3000"
                    data-aos-delay="100">Listen to the stories of alumni of the Data Science
                    Bootcamp program at {{config('app.name')}}!</p>
                <div class="overflow-x-auto flex" data-aos="fade-up" data-aos-duration="3000"
                    data-aos-delay="300">
                    <div class="flex-none">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="w-80 p-3">
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <img src="{{ Vite::asset('resources/image/ilustration/ilustration_4.png') }}"
                                        alt="ilustration 4">
                                    <div class="p-4">
                                        <p class="font-bold text-2xl text-[#262626] mb-4">Credit Card Customer
                                            Segmentation</p>
                                        <p class="font-bold text-base text-[#262626] mb-2">Created by</p>
                                        <p class="font-normal text-base text-[#262626]">Guy Hawkins, Nanang, Andre,
                                            Hilman</p>
                                        <button
                                            class="mt-6 w-full text-[#FF9500] px-10 py-2 rounded-md text-lg font-bold mb-3 outline outline-1 outline-[#FF9500]">See
                                            Portofolio</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="10500">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="w-80 p-3">
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <img src="{{ Vite::asset('resources/image/ilustration/ilustration_4.png') }}"
                                        alt="ilustration 4">
                                    <div class="p-4">
                                        <p class="font-bold text-2xl text-[#262626] mb-4">Credit Card Customer
                                            Segmentation</p>
                                        <p class="font-bold text-base text-[#262626] mb-2">Created by</p>
                                        <p class="font-normal text-base text-[#262626]">Guy Hawkins, Nanang, Andre,
                                            Hilman</p>
                                        <button
                                            class="mt-6 w-full text-[#FF9500] px-10 py-2 rounded-md text-lg font-bold mb-3 outline outline-1 outline-[#FF9500]">See
                                            Portofolio</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="w-80 p-3">
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <img src="{{ Vite::asset('resources/image/ilustration/ilustration_4.png') }}"
                                        alt="ilustration 4">
                                    <div class="p-4">
                                        <p class="font-bold text-2xl text-[#262626] mb-4">Credit Card Customer
                                            Segmentation</p>
                                        <p class="font-bold text-base text-[#262626] mb-2">Created by</p>
                                        <p class="font-normal text-base text-[#262626]">Guy Hawkins, Nanang, Andre,
                                            Hilman</p>
                                        <button
                                            class="mt-6 w-full text-[#FF9500] px-10 py-2 rounded-md text-lg font-bold mb-3 outline outline-1 outline-[#FF9500]">See
                                            Portofolio</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="w-80 p-3">
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <img src="{{ Vite::asset('resources/image/ilustration/ilustration_4.png') }}"
                                        alt="ilustration 4">
                                    <div class="p-4">
                                        <p class="font-bold text-2xl text-[#262626] mb-4">Credit Card Customer
                                            Segmentation</p>
                                        <p class="font-bold text-base text-[#262626] mb-2">Created by</p>
                                        <p class="font-normal text-base text-[#262626]">Guy Hawkins, Nanang, Andre,
                                            Hilman</p>
                                        <button
                                            class="mt-6 w-full text-[#FF9500] px-10 py-2 rounded-md text-lg font-bold mb-3 outline outline-1 outline-[#FF9500]">See
                                            Portofolio</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none">
                        <div class="flex flex-col items-center justify-center gap-3">
                            <div class="w-80 p-3">
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <img src="{{ Vite::asset('resources/image/ilustration/ilustration_4.png') }}"
                                        alt="ilustration 4">
                                    <div class="p-4">
                                        <p class="font-bold text-2xl text-[#262626] mb-4">Credit Card Customer
                                            Segmentation</p>
                                        <p class="font-bold text-base text-[#262626] mb-2">Created by</p>
                                        <p class="font-normal text-base text-[#262626]">Guy Hawkins, Nanang, Andre,
                                            Hilman</p>
                                        <button
                                            class="mt-6 w-full text-[#FF9500] px-10 py-2 rounded-md text-lg font-bold mb-3 outline outline-1 outline-[#FF9500]">See
                                            Portofolio</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-3">
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

                    </a>
                </div>
            </section>

            <section class="overview w-11/12 mt-14">
                <p class="font-bold text-base text-[#262626] mb-6" id="gethired" data-aos="fade-up"
                    data-aos-duration="3000" data-aos-delay="300">GET HIRED</p>
                <p class="font-black text-4xl mb-2" data-aos="fade-up" data-aos-duration="3000"
                    data-aos-delay="300">3-Stage Work Plan</p>
                <div class="flex flex-wrap mt-8 justify-between">
                    <div class="w-full lg:w-1/3 mb-8" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="1000">
                        <div
                            class="bg-white flex flex-col justify-center items-center mr-6 h-80 shadow-sm rounded-xl p-6">
                            <svg width="49" height="48" viewBox="0 0 49 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M28.5 4H12.5C11.4391 4 10.4217 4.42143 9.67159 5.17157C8.92144 5.92172 8.50002 6.93913 8.50002 8V40C8.50002 41.0609 8.92144 42.0783 9.67159 42.8284C10.4217 43.5786 11.4391 44 12.5 44H26.5C25.68 43.5 24.9 42.88 24.22 42.2C22.9629 41.0444 21.9467 39.6516 21.2298 38.1019C20.5128 36.5521 20.1093 34.876 20.0424 33.1697C19.9755 31.4635 20.2465 29.7608 20.8399 28.1597C21.4333 26.5586 22.3373 25.0905 23.5 23.84C27.88 19 35.16 18.26 40.5 22V16L28.5 4ZM26.5 18V7L37.5 18H26.5ZM41.12 37.8C43.78 33.58 42.5 28 38.32 25.36C34.1 22.7 28.5 24 25.88 28.16C23.2 32.38 24.5 37.94 28.68 40.6C31.6 42.46 35.32 42.46 38.26 40.64L44.5 46.78L47.28 44L41.12 37.8ZM33.5 38C32.1739 38 30.9022 37.4732 29.9645 36.5355C29.0268 35.5979 28.5 34.3261 28.5 33C28.5 31.6739 29.0268 30.4021 29.9645 29.4645C30.9022 28.5268 32.1739 28 33.5 28C34.8261 28 36.0979 28.5268 37.0355 29.4645C37.9732 30.4021 38.5 31.6739 38.5 33C38.5 34.3261 37.9732 35.5979 37.0355 36.5355C36.0979 37.4732 34.8261 38 33.5 38Z"
                                    fill="#FFAC23" />
                            </svg>

                            <p class="collapse-menu-detail hidden bg-white rounded-lg shadow-sm px-5 pb-5 font-normal text-base text-[#262626]">Real Study Case
                            </p>
                            <p class="mt-3 font-normal text-base text-center text-[#262626] opacity-80">You will work
                                on a real company case and fill your LinkedIn profiles with professional projects. By
                                doing so, you will shine in the job market.</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 mb-8" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="1300">
                        <div
                            class="bg-white flex flex-col justify-center items-center mr-6 h-80 shadow-sm rounded-xl p-6">
                            <svg width="49" height="48" viewBox="0 0 49 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M26.5 18H37.5L26.5 7V18ZM12.5 4H28.5L40.5 16V40C40.5 41.0609 40.0786 42.0783 39.3284 42.8284C38.5783 43.5786 37.5609 44 36.5 44H12.5C11.4391 44 10.4217 43.5786 9.67157 42.8284C8.92143 42.0783 8.5 41.0609 8.5 40V8C8.5 5.78 10.28 4 12.5 4ZM28.5 40V38C28.5 35.34 23.16 34 20.5 34C17.84 34 12.5 35.34 12.5 38V40H28.5ZM20.5 24C19.4391 24 18.4217 24.4214 17.6716 25.1716C16.9214 25.9217 16.5 26.9391 16.5 28C16.5 29.0609 16.9214 30.0783 17.6716 30.8284C18.4217 31.5786 19.4391 32 20.5 32C21.5609 32 22.5783 31.5786 23.3284 30.8284C24.0786 30.0783 24.5 29.0609 24.5 28C24.5 26.9391 24.0786 25.9217 23.3284 25.1716C22.5783 24.4214 21.5609 24 20.5 24Z"
                                    fill="#FFB72B" />
                            </svg>


                            <p class="collapse-menu-detail hidden bg-white rounded-lg shadow-sm px-5 pb-5 font-normal text-base text-[#262626]">CV Review
                            </p>
                            <p class="mt-3 font-normal text-base text-center text-[#262626] opacity-80">With your
                                personal career consultant, you will be able to write an effective cover letter and
                                practice interviewing with professional recruiters.</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 mb-8" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="1600">
                        <div
                            class="bg-white flex flex-col justify-center items-center mr-6 h-80 shadow-sm rounded-xl p-6">
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

                            <p class="collapse-menu-detail hidden bg-white rounded-lg shadow-sm px-5 pb-5 font-normal text-base text-[#262626]">Job Connected
                            </p>
                            <p class="mt-3 font-normal text-base text-center text-[#262626] opacity-80">We will
                                continue to support you until you find a company that is the right fit for you. We will
                                be there for you until you complete your probation period at the company, that is when
                                our job is done.</p>
                        </div>
                    </div>

                </div>
            </section>

            <section class="w-11/12 mt-12">
                <div class="flex flex-row justify-center items-center" id="admissions">
                    <div class="w-1/2 mr-16" data-aos="fade-right" data-aos-duration="3000"
                        data-aos-delay="500">
                        <p class="font-bold text-base text-[#262626] mb-5">ADMISSIONS</p>
                        <p class="font-bold text-4xl text-black mb-5">Explore About Yourself</p>
                        <p class="font-medium text-lg text-[#262626] opacity-60 mb-5">Take the free assessment and
                            uncover things you dont know about yourself.
                        </p>
                        <button
                            class="bg-[#FF9500] px-10 py-4 rounded-md text-[#262626] text-lg font-bold mb-11 mt-6">Take
                            Assessment Test</button>
                    </div>
                    <div class="w-1/2" data-aos="fade-left" data-aos-duration="3000" data-aos-delay="700">
                        <img src="{{ Vite::asset('resources/image/ilustration/ilustration_10.png') }}"
                            alt="ilustration 9" class="object-contain rounded-xl">
                    </div>

                </div>
            </section>


            <section class="ready_join w-11/12 mt-12 mb-10" id="ready_join" data-aos="fade-up"
                data-aos-duration="3000" data-aos-delay="500">
                <div class="relative flex justify-end rounded-xl">
                    <img src="{{ Vite::asset('resources/image/ilustration/ilustration_5.png') }}"
                        alt="ilustration 2" class="h-80 rounded-xl">
                    <div class="absolute top-0 left-0 h-80 w-full rounded-xl"
                        style="background: linear-gradient(90.49deg, #00263D 36.68%, rgba(255, 255, 255, 0) 98.95%);">
                    </div>
                    <div class="absolute top-0 left-0 h-80 w-full flex justify-start items-center ">
                        <div class="flex flex-col ml-28">
                            <p class="font-black text-4xl text-white">Ready to be the next <br>Master Data Science?
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
