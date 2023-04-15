<div class="static w-full">
    @push('scripts')
        <script>
            var selectedProgram = null;
            const route = "{{ route('detail', ['slug' => ':any1', 'course' => ':any2']) }}";

            function toggleModal() {
                document.getElementById('modal-program').classList.toggle("hidden");
            }

            function showModal(program) {
                selectedProgram = program
                document.getElementById('course_title').innerHTML = program
                document.getElementById('course_subtitle').innerHTML = program
                toggleModal()
            }

            function redirectToPage(selectedLocation) {
                location.href = route.replaceAll(':any1', selectedLocation).replaceAll(':any2', selectedProgram)
            }

            function showMenu() {
                document.getElementById('mobile-menu').classList.toggle("hidden")
            }

            const mobileMenus = document.querySelectorAll('.mobile-menu')
            // loop through the selected elements and add a click event listener
            mobileMenus.forEach(menu => {
                menu.addEventListener('click', () => {
                    const content = menu.querySelector('.menu-mobile-detail');
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

        </script>
    @endpush
    <div class="relative z-50 hidden" id="modal-program" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-50 transition-opacity"></div>

        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div
                    class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-2xl">
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div class="flex flex-grow flex-row justify-between items-start">
                            <p class="font-black text-xl">Where would you like to learn <span id="course_title"
                                    class="capitalize"></span> Bootcamp?</p>
                            <button class="cursor-pointer m-3 mt-1.5" onclick="toggleModal()">
                                <svg class="" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.12097 1.09305C1.51085 0.702389 2.14298 0.702389 2.53286 1.09305L14.9076 13.4924C15.2975 13.883 15.2975 14.5164 14.9076 14.9071C14.5177 15.2977 13.8856 15.2977 13.4957 14.9071L1.12097 2.50774C0.731092 2.11708 0.731092 1.4837 1.12097 1.09305Z"
                                        fill="#838383" />
                                    <path
                                        d="M1.0924 14.9071C0.702518 14.5164 0.702517 13.883 1.0924 13.4924L13.4671 1.09304C13.857 0.702384 14.4891 0.702385 14.879 1.09304C15.2689 1.4837 15.2689 2.11708 14.879 2.50773L2.50428 14.9071C2.1144 15.2977 1.48228 15.2977 1.0924 14.9071Z"
                                        fill="#838383" />
                                </svg>
                            </button>
                        </div>
                        <p class="font-medium text-sm text-[#646464] mt-2">You can choose to learn <span
                                id="course_subtitle" class=""></span> in over
                            3 country ready or online. Find now your learning destination!</p>
                        <hr class="my-5">
                        <div class="flex flex-wrap">
                            <div class="bg-white rounded-lg shadow-sm m-2 cursor-pointer"
                                onclick="redirectToPage('online')">
                                <img src="{{ Vite::asset('resources/image/ilustration/online.png') }}" alt="online"
                                    class="h-24 w-24 rounded-lg">
                                <p class="font-bold text-sm text-[#262626] px-2 py-3">Online</p>
                            </div>
                            <div class="bg-white rounded-lg shadow-sm m-2 cursor-pointer"
                                onclick="redirectToPage('indonesia')">
                                <img src="{{ Vite::asset('resources/image/ilustration/indonesia.png') }}" alt="online"
                                    class="h-24 w-24 rounded-lg">
                                <p class="font-bold text-sm text-[#262626] px-2 py-3">Indonesia</p>
                            </div>
                            <div class="bg-white rounded-lg shadow-sm m-2 cursor-pointer"
                                onclick="redirectToPage('istanbul')">
                                <img src="{{ Vite::asset('resources/image/ilustration/istanbul.png') }}" alt="online"
                                    class="h-24 w-24 rounded-lg">
                                <p class="font-bold text-sm text-[#262626] px-2 py-3">Istanbul</p>
                            </div>
                            <div class="bg-white rounded-lg shadow-sm m-2 cursor-pointer"
                                onclick="redirectToPage('Tokyo')">
                                <img src="{{ Vite::asset('resources/image/ilustration/tokyo.jpg') }}" alt="online"
                                    class="h-24 w-24 rounded-lg">
                                <p class="font-bold text-sm text-[#262626] px-2 py-3">Tokyo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="relative z-50 hidden" id="mobile-menu">
        <div class="min-h-screen bg-white w-full p-6">
            <div class="flex justify-between items-center">
                <img src="{{ Vite::asset('resources/image/icon/logo_horizontal.png') }}" alt="logo big"
                    class="lg:block h-8 w-auto">
                <button class="p-3" onclick="showMenu()">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.12103 1.09305C1.51092 0.702389 2.14304 0.702389 2.53292 1.09305L14.9076 13.4924C15.2975 13.883 15.2975 14.5164 14.9076 14.9071C14.5178 15.2977 13.8856 15.2977 13.4958 14.9071L1.12103 2.50774C0.731153 2.11708 0.731153 1.4837 1.12103 1.09305Z"
                            fill="#262626" />
                        <path
                            d="M1.09246 14.9071C0.702579 14.5164 0.702578 13.883 1.09246 13.4924L13.4672 1.09304C13.8571 0.702384 14.4892 0.702385 14.8791 1.09304C15.2689 1.4837 15.2689 2.11708 14.8791 2.50773L2.50435 14.9071C2.11446 15.2977 1.48234 15.2977 1.09246 14.9071Z"
                            fill="#262626" />
                    </svg>
                </button>
            </div>
            <div class="">
                <ul class="mt-9">
                    <li class="font-bold text-base text-[#B3BDB8] py-2">MENU</li>
                    <li class="font-bold text-base text-[#262626] py-2 mobile-menu">
                        <div class="flex flex-row justify-between items-center">
                            <p>Program</p>
                            <div class="h-6 w-6 flex justify-center items-center">
                                <svg class="rotate-0" width="10" height="7" viewBox="0 0 10 7" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.93332 0.933415L9.39998 4.40008C9.82221 4.8223 9.91643 5.30541 9.68265 5.84941C9.44887 6.39341 9.03243 6.66586 8.43332 6.66675L1.56665 6.66675C0.966652 6.66675 0.549763 6.3943 0.315986 5.84942C0.0822076 5.30453 0.176873 4.82142 0.599984 4.40008L4.06665 0.933415C4.19998 0.800081 4.34443 0.700082 4.49998 0.633416C4.65554 0.566749 4.82221 0.533414 4.99998 0.533414C5.17776 0.533414 5.34443 0.566749 5.49998 0.633416C5.65554 0.700082 5.79998 0.800081 5.93332 0.933415Z"
                                        fill="black" />
                                </svg>
                            </div>
                        </div>
                        <ul class="menu-mobile-detail hidden">
                            <li class="font-normal text-xl py-2 cursor-pointer" onclick="showModal('data science'); showMenu();">Data Science Bootcamp</li>
                            <li class="font-normal text-xl py-2 cursor-pointer" onclick="showModal('digital marketing'); showMenu();">Digital Marketing Bootcamp</li>
                            <li class="font-normal text-xl py-2 cursor-pointer" onclick="showModal('web development'); showMenu();">Web Development Bootcamp</li>
                        </ul>
                    </li>
                    <li class="font-bold text-base text-[#262626] py-2 mobile-menu">
                        <div class="flex flex-row justify-between items-center">
                            <p>International Program</p>
                            <div class="h-6 w-6 flex justify-center items-center">
                                <svg class="rotate-0" width="10" height="7" viewBox="0 0 10 7" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.93332 0.933415L9.39998 4.40008C9.82221 4.8223 9.91643 5.30541 9.68265 5.84941C9.44887 6.39341 9.03243 6.66586 8.43332 6.66675L1.56665 6.66675C0.966652 6.66675 0.549763 6.3943 0.315986 5.84942C0.0822076 5.30453 0.176873 4.82142 0.599984 4.40008L4.06665 0.933415C4.19998 0.800081 4.34443 0.700082 4.49998 0.633416C4.65554 0.566749 4.82221 0.533414 4.99998 0.533414C5.17776 0.533414 5.34443 0.566749 5.49998 0.633416C5.65554 0.700082 5.79998 0.800081 5.93332 0.933415Z"
                                        fill="black" />
                                </svg>
                            </div>
                        </div>
                        <ul class="menu-mobile-detail hidden">
                            <li class="font-normal text-xl py-2">
                                <div class="flex flex-row mt-4 mb-2">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="28" height="28" rx="4"
                                            fill="url(#paint0_linear_268_7950)" />
                                        <g clip-path="url(#clip0_268_7950)">
                                            <path
                                                d="M23.609 9.01386L14.195 5.69233C14.0688 5.6478 13.9312 5.6478 13.8051 5.69233L4.39102 9.01386C4.15695 9.09644 4.00031 9.31753 4 9.56573C3.99969 9.81394 4.15582 10.0354 4.38969 10.1185L13.8038 13.4653C13.8672 13.4878 13.9336 13.4991 14 13.4991C14.0664 13.4991 14.1328 13.4878 14.1962 13.4653L23.6103 10.1185C23.8442 10.0354 24.0003 9.81394 24 9.56573C23.9997 9.31753 23.843 9.09644 23.609 9.01386Z"
                                                fill="white" />
                                            <path
                                                d="M22.5927 16.8349V11.724L21.4208 12.1406V16.8349C21.0678 17.0381 20.83 17.4188 20.83 17.8553C20.83 18.2918 21.0678 18.6725 21.4208 18.8756V21.7552C21.4208 22.0788 21.6831 22.3411 22.0067 22.3411C22.3303 22.3411 22.5927 22.0788 22.5927 21.7552V18.8757C22.9456 18.6726 23.1835 18.2918 23.1835 17.8553C23.1835 17.4188 22.9457 17.0381 22.5927 16.8349Z"
                                                fill="white" />
                                            <path
                                                d="M14 14.671C13.7989 14.671 13.6008 14.6368 13.4112 14.5694L8.1189 12.688V15.2664C8.1189 15.8972 8.77698 16.4307 10.0749 16.852C11.2062 17.2192 12.6001 17.4214 14 17.4214C15.3998 17.4214 16.7938 17.2192 17.9251 16.852C19.223 16.4307 19.8811 15.8972 19.8811 15.2664V12.688L14.5888 14.5694C14.3992 14.6368 14.2011 14.671 14 14.671Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <linearGradient id="paint0_linear_268_7950" x1="0" y1="0"
                                                x2="28" y2="28" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFB72B" />
                                                <stop offset="1" stop-color="#FFA01B" />
                                            </linearGradient>
                                            <clipPath id="clip0_268_7950">
                                                <rect width="20" height="20" fill="white"
                                                    transform="translate(4 4)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <p class="ml-3 font-bold text-base">Istanbul</p>
                                </div>
                            </li>
                            <li class="font-normal text-xl py-2"><a href="{{ route('detail', ['slug' => 'istanbul', 'course' => 'data science']) }}">Data Science Bootcamp</a></li>
                            <li class="font-normal text-xl py-2"><a href="{{ route('detail', ['slug' => 'istanbul', 'course' => 'digital marketing']) }}">Digital Marketing Bootcamp</a></li>
                            <li class="font-normal text-xl py-2">
                                <div class="flex flex-row mt-4 mb-2">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="28" height="28" rx="4"
                                            fill="url(#paint0_linear_268_7950)" />
                                        <g clip-path="url(#clip0_268_7950)">
                                            <path
                                                d="M23.609 9.01386L14.195 5.69233C14.0688 5.6478 13.9312 5.6478 13.8051 5.69233L4.39102 9.01386C4.15695 9.09644 4.00031 9.31753 4 9.56573C3.99969 9.81394 4.15582 10.0354 4.38969 10.1185L13.8038 13.4653C13.8672 13.4878 13.9336 13.4991 14 13.4991C14.0664 13.4991 14.1328 13.4878 14.1962 13.4653L23.6103 10.1185C23.8442 10.0354 24.0003 9.81394 24 9.56573C23.9997 9.31753 23.843 9.09644 23.609 9.01386Z"
                                                fill="white" />
                                            <path
                                                d="M22.5927 16.8349V11.724L21.4208 12.1406V16.8349C21.0678 17.0381 20.83 17.4188 20.83 17.8553C20.83 18.2918 21.0678 18.6725 21.4208 18.8756V21.7552C21.4208 22.0788 21.6831 22.3411 22.0067 22.3411C22.3303 22.3411 22.5927 22.0788 22.5927 21.7552V18.8757C22.9456 18.6726 23.1835 18.2918 23.1835 17.8553C23.1835 17.4188 22.9457 17.0381 22.5927 16.8349Z"
                                                fill="white" />
                                            <path
                                                d="M14 14.671C13.7989 14.671 13.6008 14.6368 13.4112 14.5694L8.1189 12.688V15.2664C8.1189 15.8972 8.77698 16.4307 10.0749 16.852C11.2062 17.2192 12.6001 17.4214 14 17.4214C15.3998 17.4214 16.7938 17.2192 17.9251 16.852C19.223 16.4307 19.8811 15.8972 19.8811 15.2664V12.688L14.5888 14.5694C14.3992 14.6368 14.2011 14.671 14 14.671Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <linearGradient id="paint0_linear_268_7950" x1="0" y1="0"
                                                x2="28" y2="28" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFB72B" />
                                                <stop offset="1" stop-color="#FFA01B" />
                                            </linearGradient>
                                            <clipPath id="clip0_268_7950">
                                                <rect width="20" height="20" fill="white"
                                                    transform="translate(4 4)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <p class="ml-3 font-bold text-base">Tokyo</p>
                                </div>
                            </li>
                            <li class="font-normal text-xl py-2"><a href="{{ route('detail', ['slug' => 'Tokyo', 'course' => 'data science']) }}">Data Science Bootcamp</a></li>
                            <li class="font-normal text-xl py-2"><a href="{{ route('detail', ['slug' => 'Tokyo', 'course' => 'digital marketing']) }}">Digital Marketing Bootcamp</a></li>
                        </ul>
                    </li>
                    <li class="font-bold text-base text-[#262626] py-2">About</li>
                </ul>
                <div class="my-5">
                    <p class="font-bold text-base text-[#B3BDB8]">LANGUAGE</p>
                    <div class="mt-4 w-full flex flex-row justify-between items-center">
                        <div
                            class="flex flex-row px-6 py-3 bg-white rounded-xl shadow-2xl shadow-[#FF9500] mx-2 items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_220_17659)">
                                    <path
                                        d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z"
                                        fill="#F0F0F0" />
                                    <path
                                        d="M2.48056 4.69409C1.53796 5.92048 0.827189 7.334 0.41333 8.86958H6.65605L2.48056 4.69409Z"
                                        fill="#0052B4" />
                                    <path
                                        d="M23.5865 8.86953C23.1726 7.334 22.4618 5.92048 21.5193 4.69409L17.3439 8.86953H23.5865Z"
                                        fill="#0052B4" />
                                    <path
                                        d="M0.41333 15.1304C0.827236 16.6659 1.538 18.0794 2.48056 19.3058L6.65591 15.1304H0.41333Z"
                                        fill="#0052B4" />
                                    <path
                                        d="M19.3058 2.48061C18.0794 1.538 16.6659 0.827236 15.1304 0.41333V6.656L19.3058 2.48061Z"
                                        fill="#0052B4" />
                                    <path
                                        d="M4.69409 21.5193C5.92048 22.4619 7.334 23.1727 8.86953 23.5866V17.344L4.69409 21.5193Z"
                                        fill="#0052B4" />
                                    <path
                                        d="M8.86948 0.41333C7.33395 0.827236 5.92044 1.538 4.69409 2.48056L8.86948 6.65596V0.41333Z"
                                        fill="#0052B4" />
                                    <path
                                        d="M15.1304 23.5866C16.6659 23.1727 18.0794 22.4619 19.3058 21.5194L15.1304 17.344V23.5866Z"
                                        fill="#0052B4" />
                                    <path
                                        d="M17.3439 15.1304L21.5193 19.3058C22.4618 18.0795 23.1726 16.6659 23.5865 15.1304H17.3439Z"
                                        fill="#0052B4" />
                                    <path
                                        d="M23.8984 10.4348H13.5653H13.5653V0.101578C13.0529 0.034875 12.5305 0 12 0C11.4694 0 10.9471 0.034875 10.4348 0.101578V10.4347V10.4347H0.101578C0.034875 10.9471 0 11.4695 0 12C0 12.5306 0.034875 13.0529 0.101578 13.5652H10.4347H10.4347V23.8984C10.9471 23.9651 11.4694 24 12 24C12.5305 24 13.0529 23.9652 13.5652 23.8984V13.5653V13.5653H23.8984C23.9651 13.0529 24 12.5306 24 12C24 11.4695 23.9651 10.9471 23.8984 10.4348Z"
                                        fill="#D80027" />
                                    <path
                                        d="M15.1305 15.1304L20.4853 20.4852C20.7316 20.239 20.9665 19.9817 21.1907 19.7148L16.6062 15.1304H15.1305V15.1304Z"
                                        fill="#D80027" />
                                    <path
                                        d="M8.86951 15.1306H8.86941L3.51465 20.4854C3.76084 20.7317 4.01823 20.9666 4.28504 21.1908L8.86951 16.6062V15.1306Z"
                                        fill="#D80027" />
                                    <path
                                        d="M8.86951 8.8696V8.86951L3.5147 3.51465C3.26842 3.76084 3.03348 4.01823 2.80933 4.28504L7.39384 8.86955L8.86951 8.8696Z"
                                        fill="#D80027" />
                                    <path
                                        d="M15.1305 8.86956L20.4854 3.51465C20.2392 3.26837 19.9818 3.03344 19.715 2.80933L15.1305 7.39384V8.86956Z"
                                        fill="#D80027" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_220_17659">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <p class="ml-3 font-bold text-sm">English</p>
                        </div>
                        <div
                            class="flex flex-row px-6 py-3 bg-white rounded-xl shadow-2xl shadow-[#FF9500] mx-2 items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.9062 12H0.09375C0.09375 5.4247 5.42381 0.09375 12 0.09375C18.5753 0.09375 23.9062 5.4247 23.9062 12Z"
                                    fill="#ED1C24" />
                                <path
                                    d="M23.9062 12C23.9062 18.5753 18.5753 23.9062 12 23.9062C5.42381 23.9062 0.09375 18.5753 0.09375 12H23.9062Z"
                                    fill="#F5F5F5" />
                            </svg>

                            <p class="ml-3 font-bold text-sm">Bahasa Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="relative">
        @php
            $url = request()->url();
            $current = explode('/', $url);
            $current = $current[count($current) - 1];
            $current = urldecode($current);
            $color = '#FFD770';
            if ($current == 'data science') {
                $color = '#0F5B89';
            }
        @endphp
        <svg class="absolute right-0 h-96 w-96" viewBox="0 0 603 556" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.3" filter="url(#filter0_f_33_301)">
                <circle cx="427.5" cy="128.5" r="193.5" fill="{{ $color }}" />
            </g>
            <defs>
                <filter id="filter0_f_33_301" x="0" y="-299" width="855" height="855"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feGaussianBlur stdDeviation="117" result="effect1_foregroundBlur_33_301" />
                </filter>
            </defs>
        </svg>
    </div>
    <nav class="bg-transparent w-10/12 mx-auto">
        <div class="mx-auto">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 right-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button" onclick="showMenu()"
                        class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!--
                        Icon when menu is closed.
            
                        Menu open: "hidden", Menu closed: "block"
                        -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!--
                        Icon when menu is open.
            
                        Menu open: "block", Menu closed: "hidden"
                        -->
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 lg:items-center lg:justify-center items-stretch justify-start">
                    <a href="{{ route('landing') }}" class="flex flex-shrink-0 items-center">
                        <img src="{{ Vite::asset('resources/image/icon/logo_horizontal.png') }}" alt="logo big"
                            class="hidden lg:block h-8 w-auto">
                        <img src="{{ Vite::asset('resources/image/icon/logo_default.png') }}" alt="logo big"
                            class="lg:hidden h-8 w-auto">
                    </a>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <div class="relative">
                                <div class="flex flex-row items-center cursor-pointer dropdown-menu"
                                    onclick="toggleProgramMenu()">
                                    <button class="text-black  px-3 py-2 font-medium">Programs</button>
                                    <svg width="8" height="5" viewBox="0 0 8 5" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.30001 4.3L0.700012 1.7C0.383345 1.38333 0.312679 1.021 0.488012 0.613C0.663345 0.205 0.975679 0.000666667 1.42501 0H6.57501C7.02501 0 7.33768 0.204333 7.51301 0.613C7.68835 1.02167 7.61735 1.384 7.30001 1.7L4.70001 4.3C4.60001 4.4 4.49168 4.475 4.37501 4.525C4.25835 4.575 4.13335 4.6 4.00001 4.6C3.86668 4.6 3.74168 4.575 3.62501 4.525C3.50835 4.475 3.40001 4.4 3.30001 4.3Z"
                                            fill="black" />
                                    </svg>
                                </div>
                                <script>
                                    function toggleProgramMenu() {
                                        closeAll()
                                        document.getElementById('program-menu').classList.toggle("hidden");
                                    }
                                </script>
                                <div id="program-menu" class="relative hidden dropdown-menu-child">
                                    <div class="absolute w-full overflow-hidden inline-block -mt-3 pl-6">
                                        <div
                                            class=" h-8 w-8 bg-white rotate-45 transform origin-bottom-left ring-1 ring-black ring-opacity-5">
                                        </div>
                                    </div>
                                    <div class="absolute right-0 z-10 mt-5 w-96 origin-top-right rounded-md bg-gray-50 py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                        tabindex="-1">
                                        <!-- Active: "bg-gray-100", Not Active: "" -->
                                        <a href="#" onclick="showModal('data science')"
                                            class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                            role="menuitem" tabindex="-1" id="user-menu-item-0">
                                            <div class="inline-flex items-center">
                                                <img src="{{ Vite::asset('resources/image/ilustration/ilustration_6.png') }}"
                                                    alt="ilustration 6" class="w-10 h-10">
                                                <p class="font-bold text-sm text-[#222222] ml-3">Data Science Bootcamp
                                                </p>
                                            </div>
                                        </a>
                                        <a href="#" onclick="showModal('web development')"
                                            class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                            role="menuitem" tabindex="-1" id="user-menu-item-1">
                                            <div class="inline-flex items-center">
                                                <img src="{{ Vite::asset('resources/image/ilustration/ilustration_7.png') }}"
                                                    alt="ilustration 7" class="w-10 h-10">

                                                <p class="font-bold text-sm text-[#222222] ml-3">Web Development
                                                    Bootcamp</p>
                                            </div>
                                        </a>
                                        <a href="#" onclick="showModal('digital marketing')"
                                            class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                            role="menuitem" tabindex="-1" id="user-menu-item-1">
                                            <div class="inline-flex items-center">
                                                <img src="{{ Vite::asset('resources/image/ilustration/ilustration_8.png') }}"
                                                    alt="ilustration 8" class="w-10 h-10">

                                                <p class="font-bold text-sm text-[#222222] ml-3">Digital Marketing
                                                    Bootcamp</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="relative">
                                <div class="flex flex-row items-center cursor-pointer dropdown-menu">
                                    <button class="text-black  px-3 py-2 font-medium ml-4">About</button>
                                </div>
                            </div>
                            <div class="relative">
                                <div class="flex flex-row items-center cursor-pointer dropdown-menu"
                                    onclick="toggleProgramMenuInternational()">
                                    <button class="text-black  px-3 py-2 font-medium">International Programs</button>
                                    <svg width="8" height="5" viewBox="0 0 8 5" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.30001 4.3L0.700012 1.7C0.383345 1.38333 0.312679 1.021 0.488012 0.613C0.663345 0.205 0.975679 0.000666667 1.42501 0H6.57501C7.02501 0 7.33768 0.204333 7.51301 0.613C7.68835 1.02167 7.61735 1.384 7.30001 1.7L4.70001 4.3C4.60001 4.4 4.49168 4.475 4.37501 4.525C4.25835 4.575 4.13335 4.6 4.00001 4.6C3.86668 4.6 3.74168 4.575 3.62501 4.525C3.50835 4.475 3.40001 4.4 3.30001 4.3Z"
                                            fill="black" />
                                    </svg>
                                </div>
                                <script>
                                    function toggleProgramMenuInternational() {
                                        closeAll()
                                        document.getElementById('program-international').classList.toggle("hidden");
                                    }
                                </script>
                                <div id="program-international" class="relative hidden dropdown-menu-child">
                                    <div class="absolute w-full overflow-hidden inline-block -mt-3 pl-16">
                                        <div
                                            class=" h-8 w-8 bg-white rotate-45 transform origin-bottom-left ring-1 ring-black ring-opacity-5">
                                        </div>
                                    </div>
                                    <div class="absolute right-0 z-10 mt-5 w-[35rem] origin-top-right rounded-md bg-gray-50 py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                        tabindex="-1">
                                        <div class="flex flow-row">
                                            <div>
                                                <div class="inline-flex px-6 pt-6">
                                                    <svg width="28" height="28" viewBox="0 0 28 28"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="28" height="28" rx="4"
                                                            fill="url(#paint0_linear_152_272)" />
                                                        <g clip-path="url(#clip0_152_272)">
                                                            <path
                                                                d="M23.609 9.01386L14.195 5.69233C14.0688 5.6478 13.9312 5.6478 13.8051 5.69233L4.39102 9.01386C4.15695 9.09644 4.00031 9.31753 4 9.56573C3.99969 9.81394 4.15582 10.0354 4.38969 10.1185L13.8038 13.4653C13.8672 13.4878 13.9336 13.4991 14 13.4991C14.0664 13.4991 14.1328 13.4878 14.1962 13.4653L23.6103 10.1185C23.8442 10.0354 24.0003 9.81394 24 9.56573C23.9997 9.31753 23.843 9.09644 23.609 9.01386Z"
                                                                fill="white" />
                                                            <path
                                                                d="M22.5927 16.8348V11.7239L21.4208 12.1405V16.8348C21.0678 17.038 20.83 17.4186 20.83 17.8552C20.83 18.2917 21.0678 18.6724 21.4208 18.8755V21.7551C21.4208 22.0786 21.6831 22.341 22.0067 22.341C22.3303 22.341 22.5927 22.0786 22.5927 21.7551V18.8756C22.9456 18.6724 23.1835 18.2917 23.1835 17.8552C23.1835 17.4187 22.9457 17.038 22.5927 16.8348Z"
                                                                fill="white" />
                                                            <path
                                                                d="M14 14.671C13.7989 14.671 13.6008 14.6368 13.4112 14.5694L8.1189 12.688V15.2664C8.1189 15.8972 8.77698 16.4307 10.0749 16.852C11.2062 17.2192 12.6001 17.4214 14 17.4214C15.3998 17.4214 16.7938 17.2192 17.9251 16.852C19.223 16.4307 19.8811 15.8972 19.8811 15.2664V12.688L14.5888 14.5694C14.3992 14.6368 14.2011 14.671 14 14.671Z"
                                                                fill="white" />
                                                        </g>
                                                        <defs>
                                                            <linearGradient id="paint0_linear_152_272" x1="0"
                                                                y1="0" x2="28" y2="28"
                                                                gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="#FFB72B" />
                                                                <stop offset="1" stop-color="#FFA01B" />
                                                            </linearGradient>
                                                            <clipPath id="clip0_152_272">
                                                                <rect width="20" height="20" fill="white"
                                                                    transform="translate(4 4)" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    <p class="font-black text-base ml-4">Istanbul</p>
                                                </div>
                                                <a href="{{ route('detail', ['slug' => 'istanbul', 'course' => 'data science']) }}"
                                                    class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                                    role="menuitem" tabindex="-1" id="user-menu-item-0">
                                                    <div class="inline-flex items-center">
                                                        <img src="{{ Vite::asset('resources/image/ilustration/ilustration_6.png') }}"
                                                            alt="ilustration 6" class="w-10 h-10">
                                                        <p class="font-bold text-sm text-[#222222] ml-3">Data Science
                                                            Bootcamp</p>
                                                    </div>
                                                </a>
                                                <a href="{{ route('detail', ['slug' => 'istanbul', 'course' => 'digital marketing']) }}"
                                                    class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                                    role="menuitem" tabindex="-1" id="user-menu-item-1">
                                                    <div class="inline-flex items-center">
                                                        <img src="{{ Vite::asset('resources/image/ilustration/ilustration_8.png') }}"
                                                            alt="ilustration 8" class="w-10 h-10">

                                                        <p class="font-bold text-sm text-[#222222] ml-3">Digital
                                                            Marketing Bootcamp</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <div class="inline-flex px-6 pt-6">
                                                    <svg width="28" height="28" viewBox="0 0 28 28"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="28" height="28" rx="4"
                                                            fill="url(#paint0_linear_152_272)" />
                                                        <g clip-path="url(#clip0_152_272)">
                                                            <path
                                                                d="M23.609 9.01386L14.195 5.69233C14.0688 5.6478 13.9312 5.6478 13.8051 5.69233L4.39102 9.01386C4.15695 9.09644 4.00031 9.31753 4 9.56573C3.99969 9.81394 4.15582 10.0354 4.38969 10.1185L13.8038 13.4653C13.8672 13.4878 13.9336 13.4991 14 13.4991C14.0664 13.4991 14.1328 13.4878 14.1962 13.4653L23.6103 10.1185C23.8442 10.0354 24.0003 9.81394 24 9.56573C23.9997 9.31753 23.843 9.09644 23.609 9.01386Z"
                                                                fill="white" />
                                                            <path
                                                                d="M22.5927 16.8348V11.7239L21.4208 12.1405V16.8348C21.0678 17.038 20.83 17.4186 20.83 17.8552C20.83 18.2917 21.0678 18.6724 21.4208 18.8755V21.7551C21.4208 22.0786 21.6831 22.341 22.0067 22.341C22.3303 22.341 22.5927 22.0786 22.5927 21.7551V18.8756C22.9456 18.6724 23.1835 18.2917 23.1835 17.8552C23.1835 17.4187 22.9457 17.038 22.5927 16.8348Z"
                                                                fill="white" />
                                                            <path
                                                                d="M14 14.671C13.7989 14.671 13.6008 14.6368 13.4112 14.5694L8.1189 12.688V15.2664C8.1189 15.8972 8.77698 16.4307 10.0749 16.852C11.2062 17.2192 12.6001 17.4214 14 17.4214C15.3998 17.4214 16.7938 17.2192 17.9251 16.852C19.223 16.4307 19.8811 15.8972 19.8811 15.2664V12.688L14.5888 14.5694C14.3992 14.6368 14.2011 14.671 14 14.671Z"
                                                                fill="white" />
                                                        </g>
                                                        <defs>
                                                            <linearGradient id="paint0_linear_152_272" x1="0"
                                                                y1="0" x2="28" y2="28"
                                                                gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="#FFB72B" />
                                                                <stop offset="1" stop-color="#FFA01B" />
                                                            </linearGradient>
                                                            <clipPath id="clip0_152_272">
                                                                <rect width="20" height="20" fill="white"
                                                                    transform="translate(4 4)" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    <p class="font-black text-base ml-4">Tokyo</p>
                                                </div>
                                                <a href="{{ route('detail', ['slug' => 'Tokyo', 'course' => 'data science']) }}"
                                                    class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                                    role="menuitem" tabindex="-1" id="user-menu-item-0">
                                                    <div class="inline-flex items-center">
                                                        <img src="{{ Vite::asset('resources/image/ilustration/ilustration_6.png') }}"
                                                            alt="ilustration 6" class="w-10 h-10">
                                                        <p class="font-bold text-sm text-[#222222] ml-3">Data Science
                                                            Bootcamp</p>
                                                    </div>
                                                </a>
                                                <a href="{{ route('detail', ['slug' => 'Tokyo', 'course' => 'digital marketing']) }}"
                                                    class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                                    role="menuitem" tabindex="-1" id="user-menu-item-1">
                                                    <div class="inline-flex items-center">
                                                        <img src="{{ Vite::asset('resources/image/ilustration/ilustration_8.png') }}"
                                                            alt="ilustration 8" class="w-10 h-10">

                                                        <p class="font-bold text-sm text-[#222222] ml-3">Digital
                                                            Marketing Bootcamp</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-8 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <a href="#" class="hidden lg:block text-black  px-3 py-2 font-bold mx-2">Login</a>

                    @if ($current == 'data science')
                        <a href="#" class="text-white px-5 py-2 font-bold rounded-md bg-[#0F5B89] mx-2">Join
                            Now</a>
                    @else
                        <a href="#" class="text-[#FF9500] px-5 py-2 font-bold rounded-md bg-[#262626] mx-2">Join
                            Now</a>
                    @endif

                    <div class="hidden lg:block text-[#DEDEDE] mx-2 text-xl">|</div>
                    <div class="hidden lg:block relative mx-2">
                        <div class="flex flex-row items-center dropdown-menu" onclick="toggleLanguageMenu()">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_5_2617)">
                                    <path
                                        d="M12 0C5.36756 0 0 5.36705 0 12C0 18.6324 5.36705 24 12 24C18.6324 24 24 18.633 24 12C24 5.36756 18.633 0 12 0ZM7.35684 2.4728C6.9937 3.46181 6.68888 4.46719 6.44283 5.48662C5.72372 5.26814 5.01633 5.00616 4.32206 4.70091C5.20116 3.77733 6.22556 3.02531 7.35684 2.4728ZM3.39084 5.82375C4.28948 6.23991 5.20917 6.58781 6.14719 6.86686C5.87503 8.31966 5.71941 9.79833 5.68247 11.2969H1.42978C1.5593 9.30745 2.23725 7.42453 3.39084 5.82375ZM3.39084 18.1763C2.23725 16.5755 1.5593 14.6925 1.42978 12.7031H5.68247C5.71941 14.2017 5.87503 15.6803 6.14719 17.1331C5.20917 17.4122 4.28953 17.7601 3.39084 18.1763ZM4.32206 19.2991C5.01633 18.9938 5.72367 18.7319 6.44283 18.5134C6.68892 19.5329 6.9937 20.5382 7.35684 21.5272C6.22612 20.975 5.20162 20.2231 4.32206 19.2991ZM11.2969 22.5702C10.5584 22.5222 9.83452 22.3989 9.1343 22.2034C8.57812 20.8853 8.13422 19.5338 7.80314 18.1552C8.94305 17.9003 10.1093 17.7513 11.2969 17.7091V22.5702ZM11.2969 16.302C10.0103 16.3446 8.74664 16.5039 7.51167 16.779C7.26633 15.4417 7.12495 14.0813 7.08919 12.7031H11.2969V16.302ZM11.2969 11.2969H7.08919C7.12495 9.91866 7.26633 8.5583 7.51167 7.221C8.74664 7.49606 10.0103 7.65544 11.2969 7.69795V11.2969ZM11.2969 6.29086C10.1093 6.24872 8.94305 6.0997 7.80314 5.84484C8.13422 4.4662 8.57812 3.1147 9.1343 1.79658C9.83452 1.60111 10.5584 1.47783 11.2969 1.42978V6.29086ZM20.6092 5.82375C21.7627 7.42453 22.4407 9.30745 22.5702 11.2969H18.3175C18.2806 9.79833 18.125 8.31966 17.8528 6.86686C18.7908 6.58781 19.7105 6.23991 20.6092 5.82375ZM19.6779 4.70086C18.9837 5.00616 18.2763 5.26814 17.5572 5.48658C17.3111 4.46714 17.0063 3.46177 16.6432 2.47275C17.7739 3.02498 18.7984 3.77686 19.6779 4.70086ZM12.7031 1.42978C13.4416 1.47783 14.1655 1.60111 14.8657 1.79658C15.4219 3.1147 15.8658 4.4662 16.1969 5.84484C15.057 6.0997 13.8907 6.24872 12.7031 6.29086V1.42978ZM12.7031 7.69795C13.9897 7.65544 15.2534 7.49606 16.4883 7.221C16.7337 8.5583 16.875 9.91866 16.9108 11.2969H12.7031V7.69795ZM14.8657 22.2034C14.1655 22.3989 13.4416 22.5222 12.7031 22.5702V17.7091C13.8907 17.7513 15.057 17.9003 16.1969 18.1552C15.8657 19.5338 15.4219 20.8853 14.8657 22.2034ZM12.7031 16.302V12.7031H16.9108C16.875 14.0813 16.7337 15.4417 16.4883 16.779C15.2534 16.5039 13.9897 16.3446 12.7031 16.302ZM16.6432 21.5272C17.0063 20.5382 17.3111 19.5328 17.5572 18.5134C18.2763 18.7319 18.9837 18.9938 19.6779 19.2991C18.7988 20.2227 17.7744 20.9747 16.6432 21.5272ZM20.6092 18.1763C19.7105 17.7601 18.7908 17.4122 17.8528 17.1331C18.125 15.6803 18.2806 14.2017 18.3175 12.7031H22.5702C22.4407 14.6925 21.7627 16.5755 20.6092 18.1763Z"
                                        fill="#262626" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_5_2617">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>

                            <button class="text-black  px-3 py-2 font-bold">English</button>
                            <svg width="8" height="5" viewBox="0 0 8 5" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.30001 4.3L0.700012 1.7C0.383345 1.38333 0.312679 1.021 0.488012 0.613C0.663345 0.205 0.975679 0.000666667 1.42501 0H6.57501C7.02501 0 7.33768 0.204333 7.51301 0.613C7.68835 1.02167 7.61735 1.384 7.30001 1.7L4.70001 4.3C4.60001 4.4 4.49168 4.475 4.37501 4.525C4.25835 4.575 4.13335 4.6 4.00001 4.6C3.86668 4.6 3.74168 4.575 3.62501 4.525C3.50835 4.475 3.40001 4.4 3.30001 4.3Z"
                                    fill="black" />
                            </svg>
                        </div>
                        <script>
                            function toggleLanguageMenu() {
                                closeAll();
                                document.getElementById('language-menu').classList.toggle("hidden");
                            }
                        </script>
                        {{-- <div
                            class="absolute right-1 shadow-sm w-0 h-0 -mt-3 border-l-[20px] border-l-transparent border-b-[20px] border-b-white border-r-[20px] border-r-transparent ">
                        </div> --}}
                        <div id="language-menu" class="relative hidden dropdown-menu-child">
                            <div class="absolute w-full overflow-hidden inline-block -mt-3 pl-10">
                                <div
                                    class=" h-8 w-8 bg-white rotate-45 transform origin-bottom-left ring-1 ring-black ring-opacity-5">
                                </div>
                            </div>
                            <div class="absolute right-0 z-10 mt-5 w-48 origin-top-right rounded-md bg-gray-50 py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                tabindex="-1">
                                <!-- Active: "bg-gray-100", Not Active: "" -->
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                    role="menuitem" tabindex="-1" id="user-menu-item-0">
                                    <div class="inline-flex items-center">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_160_470)">
                                                <path
                                                    d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z"
                                                    fill="#F0F0F0" />
                                                <path
                                                    d="M2.48063 4.69409C1.53802 5.92048 0.827251 7.334 0.413391 8.86958H6.65611L2.48063 4.69409Z"
                                                    fill="#0052B4" />
                                                <path
                                                    d="M23.5866 8.86953C23.1728 7.334 22.4619 5.92048 21.5194 4.69409L17.344 8.86953H23.5866Z"
                                                    fill="#0052B4" />
                                                <path
                                                    d="M0.413391 15.1304C0.827297 16.6659 1.53806 18.0794 2.48063 19.3058L6.65597 15.1304H0.413391Z"
                                                    fill="#0052B4" />
                                                <path
                                                    d="M19.3059 2.48061C18.0795 1.538 16.666 0.827236 15.1304 0.41333V6.656L19.3059 2.48061Z"
                                                    fill="#0052B4" />
                                                <path
                                                    d="M4.69415 21.5193C5.92054 22.4619 7.33406 23.1727 8.86959 23.5866V17.344L4.69415 21.5193Z"
                                                    fill="#0052B4" />
                                                <path
                                                    d="M8.86954 0.41333C7.33401 0.827236 5.9205 1.538 4.69415 2.48056L8.86954 6.65596V0.41333Z"
                                                    fill="#0052B4" />
                                                <path
                                                    d="M15.1304 23.5866C16.666 23.1727 18.0795 22.4619 19.3058 21.5194L15.1304 17.344V23.5866Z"
                                                    fill="#0052B4" />
                                                <path
                                                    d="M17.344 15.1304L21.5194 19.3058C22.4619 18.0795 23.1728 16.6659 23.5866 15.1304H17.344Z"
                                                    fill="#0052B4" />
                                                <path
                                                    d="M23.8984 10.4348H13.5653H13.5653V0.101578C13.0529 0.034875 12.5305 0 12 0C11.4694 0 10.9471 0.034875 10.4348 0.101578V10.4347V10.4347H0.101578C0.034875 10.9471 0 11.4695 0 12C0 12.5306 0.034875 13.0529 0.101578 13.5652H10.4347H10.4347V23.8984C10.9471 23.9651 11.4694 24 12 24C12.5305 24 13.0529 23.9652 13.5652 23.8984V13.5653V13.5653H23.8984C23.9651 13.0529 24 12.5306 24 12C24 11.4695 23.9651 10.9471 23.8984 10.4348Z"
                                                    fill="#D80027" />
                                                <path
                                                    d="M15.1304 15.1304L20.4852 20.4852C20.7315 20.239 20.9665 19.9817 21.1906 19.7148L16.6062 15.1304H15.1304V15.1304Z"
                                                    fill="#D80027" />
                                                <path
                                                    d="M8.86957 15.1306H8.86947L3.51471 20.4854C3.7609 20.7317 4.01829 20.9666 4.2851 21.1908L8.86957 16.6062V15.1306Z"
                                                    fill="#D80027" />
                                                <path
                                                    d="M8.86957 8.8696V8.86951L3.51476 3.51465C3.26848 3.76084 3.03354 4.01823 2.80939 4.28504L7.3939 8.86955L8.86957 8.8696Z"
                                                    fill="#D80027" />
                                                <path
                                                    d="M15.1304 8.86956L20.4853 3.51465C20.2391 3.26837 19.9817 3.03344 19.7149 2.80933L15.1304 7.39384V8.86956Z"
                                                    fill="#D80027" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_160_470">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <p class="font-bold text-sm text-[#222222] ml-3">English</p>
                                    </div>
                                </a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                    role="menuitem" tabindex="-1" id="user-menu-item-1">
                                    <div class="inline-flex items-center">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_160_434)">
                                                <path
                                                    d="M23.9062 12H0.09375C0.09375 5.4247 5.42381 0.09375 12 0.09375C18.5753 0.09375 23.9062 5.4247 23.9062 12Z"
                                                    fill="#ED1C24" />
                                                <path
                                                    d="M23.9062 12C23.9062 18.5753 18.5753 23.9062 12 23.9062C5.42381 23.9062 0.09375 18.5753 0.09375 12H23.9062Z"
                                                    fill="#F5F5F5" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_160_434">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                        <p class="font-bold text-sm text-[#222222] ml-3">Bahasa Indonesia</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

<script>
    window.addEventListener('click', function(e) {
        const target = event.target;
        const parent = target.parentNode;
        if (!parent.classList.contains('dropdown-menu')) {
            closeAll();
        }
    })

    function closeAll() {
        const child = document.querySelectorAll('.dropdown-menu-child')
        child.forEach(element => {
            if (!element.classList.contains('hidden')) {
                element.classList.toggle("hidden");
            }
        });
    }
</script>
