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
                            {{-- <div class="bg-white rounded-lg shadow-sm m-2 cursor-pointer"
                                onclick="redirectToPage('online')">
                                <img src="{{ Vite::asset('resources/image/ilustration/online.png') }}" alt="online"
                                    class="h-24 w-24 rounded-lg">
                                <p class="font-bold text-sm text-[#262626] px-2 py-3">Online</p>
                            </div> --}}
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
                            <div class="bg-white rounded-lg shadow-sm m-2 cursor-pointer relative"
                                onclick="redirectToPage('Tokyo')">
                                <img src="{{ Vite::asset('resources/image/ilustration/tokyo.jpg') }}" alt="online"
                                    class="h-24 w-24 rounded-lg">
                                <p class="font-bold text-sm text-[#262626] px-2 py-3">Tokyo</p>
                                <div class="absolute top-0 h-24 w-24 bg-black opacity-50 rounded-lg">
                                </div>
                                <div
                                    class="absolute top-4 left-4 bg-white rounded-full font-bold text-xs px-2 py-1 text-[#FF2F2F]">
                                    Soon
                                </div>
                            </div>
                            <div class="bg-white rounded-lg shadow-sm m-2 cursor-pointer relative"
                                onclick="redirectToPage('South Korea')">
                                <img src="{{ Vite::asset('resources/image/ilustration/south_korea.png') }}"
                                    alt="online" class="h-24 w-24 rounded-lg">
                                <p class="font-bold text-sm text-[#262626] px-2 py-3">South Korea</p>
                                <div class="absolute top-0 h-24 w-24 bg-black opacity-50 rounded-lg">
                                </div>
                                <div
                                    class="absolute top-4 left-4 bg-white rounded-full font-bold text-xs px-2 py-1 text-[#FF2F2F]">
                                    Soon
                                </div>
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
                    {{-- <li class="font-bold text-base text-[#262626] py-2 mobile-menu">
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
                            <li class="font-normal text-xl py-2 cursor-pointer"
                                onclick="showModal('data science'); showMenu();">Data Science Bootcamp</li>
                            <li class="font-normal text-xl py-2 cursor-pointer"
                                onclick="showModal('digital marketing'); showMenu();">Digital Marketing Bootcamp</li>
                            <li class="font-normal text-xl py-2 cursor-pointer"
                                onclick="showModal('web development'); showMenu();">Web Development Bootcamp</li>
                        </ul>
                    </li> --}}
                    <li class="font-bold text-base text-[#262626] py-2 mobile-menu">
                        <div class="flex flex-row justify-between items-center">
                            <p>International Program</p>
                            <div class="h-6 w-6 flex justify-center items-center">
                                <svg class="rotate-0" width="10" height="7" viewBox="0 0 10 7"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
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
                            <li class="font-normal text-xl py-2"><a
                                    href="{{ route('detail', ['slug' => 'istanbul', 'course' => 'data science']) }}">Data
                                    Science Bootcamp</a></li>
                            <li class="font-normal text-xl py-2"><a
                                    href="{{ route('detail', ['slug' => 'istanbul', 'course' => 'digital marketing']) }}">Digital
                                    Marketing Bootcamp</a></li>
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
                            <li class="font-normal text-xl py-2"><a
                                    href="{{ route('detail', ['slug' => 'Tokyo', 'course' => 'data science']) }}">Data
                                    Science Bootcamp</a></li>
                            <li class="font-normal text-xl py-2"><a
                                    href="{{ route('detail', ['slug' => 'Tokyo', 'course' => 'digital marketing']) }}">Digital
                                    Marketing Bootcamp</a></li>
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
                <div class="flex flex-1 lg:items-center lg:justify-start items-stretch justify-start">
                    <a href="{{ route('landing') }}" class="flex flex-shrink-0 items-center">
                        <img src="{{ Vite::asset('resources/image/icon/logo_horizontal.png') }}" alt="logo big"
                            class="hidden lg:block h-8 w-auto">
                        <img src="{{ Vite::asset('resources/image/icon/logo_default.png') }}" alt="logo big"
                            class="lg:hidden h-8 w-auto">
                    </a>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            {{-- <div class="relative">
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
                            </div> --}}
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
                                    <div class="absolute z-10 mt-5 w-[65rem] origin-top-right rounded-md bg-gray-50 py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                        tabindex="-1">
                                        <div class="flex flow-row">
                                            <div>
                                                <div class="inline-flex px-6 pt-6">
                                                    <svg width="28" height="28" viewBox="0 0 28 28"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_337_832)">
                                                            <path
                                                                d="M13.9125 27.125C21.175 27.125 27.0375 21.2625 27.0375 14H0.787476C0.787476 21.2625 6.64998 27.125 13.9125 27.125Z"
                                                                fill="#F9F9F9" />
                                                            <path
                                                                d="M13.9125 0.875C6.64998 0.875 0.787476 6.7375 0.787476 14H27.0375C27.0375 6.7375 21.175 0.875 13.9125 0.875Z"
                                                                fill="#ED4C5C" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_337_832">
                                                                <rect width="28" height="28" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>

                                                    <p class="font-black text-base ml-4">Indonesia</p>
                                                </div>
                                                <a href="{{ route('detail', ['slug' => 'indonesia', 'course' => 'data science']) }}"
                                                    class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                                    role="menuitem" tabindex="-1" id="user-menu-item-0">
                                                    <div class="inline-flex items-center">
                                                        <svg width="28" height="28" viewBox="0 0 28 28"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="28" height="28" rx="4"
                                                                fill="url(#paint0_linear_337_822)" />
                                                            <mask id="mask0_337_822" style="mask-type:alpha"
                                                                maskUnits="userSpaceOnUse" x="4"
                                                                y="4" width="20" height="20">
                                                                <rect x="4" y="4" width="20"
                                                                    height="20" fill="#D9D9D9" />
                                                            </mask>
                                                            <g mask="url(#mask0_337_822)">
                                                                <path
                                                                    d="M21.5 17.3334L15.0208 12.2709C14.6458 11.9792 14.2257 11.8646 13.7604 11.9271C13.2951 11.9896 12.9236 12.2153 12.6458 12.6042L10.3542 15.7709L7.54167 13.5417C7.375 13.4028 7.20139 13.3056 7.02083 13.25C6.84028 13.1945 6.66667 13.1667 6.5 13.1667V10.0417C6.56944 10.0417 6.64931 10.0521 6.73958 10.073C6.82986 10.0938 6.91667 10.1389 7 10.2084L9.83333 12.3334L13.4792 7.20838C13.6181 7.01393 13.8056 6.89935 14.0417 6.86463C14.2778 6.8299 14.4931 6.88893 14.6875 7.04171L18.1667 9.83338H20.6667C20.9028 9.83338 21.1007 9.91324 21.2604 10.073C21.4201 10.2327 21.5 10.4306 21.5 10.6667V17.3334ZM7.33333 20.6667C7.09722 20.6667 6.89931 20.5868 6.73958 20.4271C6.57986 20.2674 6.5 20.0695 6.5 19.8334V15.0625C6.59722 15.0625 6.6875 15.0764 6.77083 15.1042C6.85417 15.132 6.9375 15.1806 7.02083 15.25L10.6667 18.1667L13.5 14.2709C13.6389 14.0764 13.8229 13.9618 14.0521 13.9271C14.2812 13.8924 14.4931 13.9514 14.6875 14.1042L21.5 19.4375V19.8334C21.5 20.0695 21.4201 20.2674 21.2604 20.4271C21.1007 20.5868 20.9028 20.6667 20.6667 20.6667H7.33333Z"
                                                                    fill="white" />
                                                            </g>
                                                            <defs>
                                                                <linearGradient id="paint0_linear_337_822"
                                                                    x1="0" y1="0" x2="28"
                                                                    y2="28" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#3734A9" />
                                                                    <stop offset="1" stop-color="#2E7CF6" />
                                                                </linearGradient>
                                                            </defs>
                                                        </svg>

                                                        <p class="font-bold text-sm text-[#222222] ml-3">Data Science
                                                            Bootcamp</p>
                                                    </div>
                                                </a>
                                                <a href="{{ route('detail', ['slug' => 'istanbul', 'course' => 'digital marketing']) }}"
                                                    class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                                    role="menuitem" tabindex="-1" id="user-menu-item-1">
                                                    <div class="inline-flex items-center">
                                                        <svg width="28" height="28" viewBox="0 0 28 28"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="28" height="28" rx="4"
                                                                fill="url(#paint0_linear_337_827)" />
                                                            <mask id="mask0_337_827" style="mask-type:alpha"
                                                                maskUnits="userSpaceOnUse" x="4"
                                                                y="4" width="20" height="20">
                                                                <rect x="4" y="4" width="20"
                                                                    height="20" fill="#D9D9D9" />
                                                            </mask>
                                                            <g mask="url(#mask0_337_827)">
                                                                <path
                                                                    d="M7.12496 20.4583C6.9444 20.2778 6.85413 20.0694 6.85413 19.8333C6.85413 19.5972 6.9444 19.3889 7.12496 19.2083L12.1666 14.1667C12.25 14.0833 12.3402 14.0243 12.4375 13.9896C12.5347 13.9549 12.6388 13.9375 12.75 13.9375C12.8611 13.9375 12.9652 13.9549 13.0625 13.9896C13.1597 14.0243 13.25 14.0833 13.3333 14.1667L16.0833 16.9167L21.4166 10.9167C21.5694 10.7361 21.7673 10.6458 22.0104 10.6458C22.2534 10.6458 22.4583 10.7292 22.625 10.8958C22.7777 11.0486 22.8576 11.2326 22.8645 11.4479C22.8715 11.6632 22.7986 11.8542 22.6458 12.0208L16.6666 18.75C16.5833 18.8472 16.4895 18.9201 16.3854 18.9688C16.2812 19.0174 16.1736 19.0417 16.0625 19.0417C15.9513 19.0417 15.8437 19.0208 15.7395 18.9792C15.6354 18.9375 15.5416 18.875 15.4583 18.7917L12.75 16.0833L8.37496 20.4583C8.1944 20.6389 7.98607 20.7292 7.74996 20.7292C7.51385 20.7292 7.30551 20.6389 7.12496 20.4583ZM7.33329 15.0833C7.26385 15.0833 7.1944 15.066 7.12496 15.0313C7.05551 14.9965 6.99996 14.9375 6.95829 14.8542L6.54163 13.9583L5.64579 13.5417C5.56246 13.5 5.50343 13.4444 5.46871 13.375C5.43399 13.3056 5.41663 13.2361 5.41663 13.1667C5.41663 13.0972 5.43399 13.0278 5.46871 12.9583C5.50343 12.8889 5.56246 12.8333 5.64579 12.7917L6.54163 12.375L6.95829 11.4792C6.99996 11.3958 7.05551 11.3368 7.12496 11.3021C7.1944 11.2674 7.26385 11.25 7.33329 11.25C7.40274 11.25 7.47218 11.2674 7.54163 11.3021C7.61107 11.3368 7.66663 11.3958 7.70829 11.4792L8.12496 12.375L9.02079 12.7917C9.17357 12.8611 9.24996 12.9861 9.24996 13.1667C9.24996 13.3472 9.17357 13.4722 9.02079 13.5417L8.12496 13.9583L7.70829 14.8542C7.66663 14.9375 7.61107 14.9965 7.54163 15.0313C7.47218 15.066 7.40274 15.0833 7.33329 15.0833ZM16.5 13.4167C16.4305 13.4167 16.3611 13.3993 16.2916 13.3646C16.2222 13.3299 16.1666 13.2708 16.125 13.1875L15.7083 12.2917L14.8125 11.875C14.7291 11.8333 14.6701 11.7778 14.6354 11.7083C14.6007 11.6389 14.5833 11.5694 14.5833 11.5C14.5833 11.4306 14.6007 11.3611 14.6354 11.2917C14.6701 11.2222 14.7291 11.1667 14.8125 11.125L15.7083 10.7083L16.125 9.8125C16.1666 9.72917 16.2222 9.67014 16.2916 9.63542C16.3611 9.60069 16.4305 9.58333 16.5 9.58333C16.5694 9.58333 16.6388 9.60069 16.7083 9.63542C16.7777 9.67014 16.8333 9.72917 16.875 9.8125L17.2916 10.7083L18.1875 11.125C18.2708 11.1667 18.3298 11.2222 18.3645 11.2917C18.3993 11.3611 18.4166 11.4306 18.4166 11.5C18.4166 11.5694 18.3993 11.6389 18.3645 11.7083C18.3298 11.7778 18.2708 11.8333 18.1875 11.875L17.2916 12.2917L16.875 13.1875C16.8333 13.2708 16.7777 13.3299 16.7083 13.3646C16.6388 13.3993 16.5694 13.4167 16.5 13.4167ZM11.0833 10.9167C11.0138 10.9167 10.9444 10.8958 10.875 10.8542C10.8055 10.8125 10.75 10.75 10.7083 10.6667L10.1666 9.5L8.99996 8.95833C8.91663 8.91667 8.85413 8.86111 8.81246 8.79167C8.77079 8.72222 8.74996 8.65278 8.74996 8.58333C8.74996 8.51389 8.77079 8.44444 8.81246 8.375C8.85413 8.30556 8.91663 8.25 8.99996 8.20833L10.1666 7.66667L10.7083 6.5C10.75 6.41667 10.8055 6.35417 10.875 6.3125C10.9444 6.27083 11.0138 6.25 11.0833 6.25C11.1527 6.25 11.2222 6.27083 11.2916 6.3125C11.3611 6.35417 11.4166 6.41667 11.4583 6.5L12 7.66667L13.1666 8.20833C13.25 8.25 13.3125 8.30556 13.3541 8.375C13.3958 8.44444 13.4166 8.51389 13.4166 8.58333C13.4166 8.65278 13.3958 8.72222 13.3541 8.79167C13.3125 8.86111 13.25 8.91667 13.1666 8.95833L12 9.5L11.4583 10.6667C11.4166 10.75 11.3611 10.8125 11.2916 10.8542C11.2222 10.8958 11.1527 10.9167 11.0833 10.9167Z"
                                                                    fill="white" />
                                                            </g>
                                                            <defs>
                                                                <linearGradient id="paint0_linear_337_827"
                                                                    x1="0" y1="0" x2="28"
                                                                    y2="28" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#FFB72B" />
                                                                    <stop offset="1" stop-color="#FFA01B" />
                                                                </linearGradient>
                                                            </defs>
                                                        </svg>


                                                        <p class="font-bold text-sm text-[#222222] ml-3">Digital
                                                            Marketing Bootcamp</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <div class="inline-flex px-6 pt-6">
                                                    <svg width="28" height="28" viewBox="0 0 28 28"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_337_840)">
                                                            <path
                                                                d="M14 27.125C21.2487 27.125 27.125 21.2487 27.125 14C27.125 6.75126 21.2487 0.875 14 0.875C6.75126 0.875 0.875 6.75126 0.875 14C0.875 21.2487 6.75126 27.125 14 27.125Z"
                                                                fill="#ED4C5C" />
                                                            <path
                                                                d="M18.0687 17.0625L18.1125 14.7L15.75 14L18.1125 13.3L18.0687 10.9375L19.5125 12.8187L21.875 12.1188L20.4313 14L21.875 15.8812L19.5125 15.1813L18.0687 17.0625Z"
                                                                fill="white" />
                                                            <path
                                                                d="M14.525 19.25C11.6375 19.25 9.31875 16.8875 9.31875 14C9.31875 11.1125 11.6375 8.75 14.525 8.75C15.6188 8.75 16.625 9.1 17.5 9.66875C16.3188 8.3125 14.5687 7.4375 12.6 7.4375C9.0125 7.4375 6.125 10.3687 6.125 14C6.125 17.6313 9.0125 20.5625 12.6 20.5625C14.5687 20.5625 16.3188 19.6875 17.5 18.3313C16.6687 18.9 15.6625 19.25 14.525 19.25Z"
                                                                fill="white" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_337_840">
                                                                <rect width="28" height="28" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>

                                                    <p class="font-black text-base ml-4">Istanbul</p>
                                                </div>
                                                <a href="{{ route('detail', ['slug' => 'istanbul', 'course' => 'data science']) }}"
                                                    class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                                    role="menuitem" tabindex="-1" id="user-menu-item-0">
                                                    <div class="inline-flex items-center">
                                                        <svg width="28" height="28" viewBox="0 0 28 28"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="28" height="28" rx="4"
                                                                fill="url(#paint0_linear_337_865)" />
                                                            <mask id="mask0_337_865" style="mask-type:alpha"
                                                                maskUnits="userSpaceOnUse" x="4"
                                                                y="4" width="20" height="20">
                                                                <rect x="4" y="4" width="20"
                                                                    height="20" fill="#D9D9D9" />
                                                            </mask>
                                                            <g mask="url(#mask0_337_865)">
                                                                <path
                                                                    d="M21.5 17.3334L15.0208 12.2709C14.6458 11.9792 14.2257 11.8646 13.7604 11.9271C13.2951 11.9896 12.9236 12.2153 12.6458 12.6042L10.3542 15.7709L7.54167 13.5417C7.375 13.4028 7.20139 13.3056 7.02083 13.25C6.84028 13.1945 6.66667 13.1667 6.5 13.1667V10.0417C6.56944 10.0417 6.64931 10.0521 6.73958 10.073C6.82986 10.0938 6.91667 10.1389 7 10.2084L9.83333 12.3334L13.4792 7.20838C13.6181 7.01393 13.8056 6.89935 14.0417 6.86463C14.2778 6.8299 14.4931 6.88893 14.6875 7.04171L18.1667 9.83338H20.6667C20.9028 9.83338 21.1007 9.91324 21.2604 10.073C21.4201 10.2327 21.5 10.4306 21.5 10.6667V17.3334ZM7.33333 20.6667C7.09722 20.6667 6.89931 20.5868 6.73958 20.4271C6.57986 20.2674 6.5 20.0695 6.5 19.8334V15.0625C6.59722 15.0625 6.6875 15.0764 6.77083 15.1042C6.85417 15.132 6.9375 15.1806 7.02083 15.25L10.6667 18.1667L13.5 14.2709C13.6389 14.0764 13.8229 13.9618 14.0521 13.9271C14.2812 13.8924 14.4931 13.9514 14.6875 14.1042L21.5 19.4375V19.8334C21.5 20.0695 21.4201 20.2674 21.2604 20.4271C21.1007 20.5868 20.9028 20.6667 20.6667 20.6667H7.33333Z"
                                                                    fill="white" />
                                                            </g>
                                                            <defs>
                                                                <linearGradient id="paint0_linear_337_865"
                                                                    x1="0" y1="0" x2="28"
                                                                    y2="28" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#3734A9" />
                                                                    <stop offset="1" stop-color="#2E7CF6" />
                                                                </linearGradient>
                                                            </defs>
                                                        </svg>

                                                        <p class="font-bold text-sm text-[#222222] ml-3">Data Science
                                                            Bootcamp</p>
                                                    </div>
                                                </a>
                                                <a href="{{ route('detail', ['slug' => 'istanbul', 'course' => 'digital marketing']) }}"
                                                    class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                                    role="menuitem" tabindex="-1" id="user-menu-item-1">
                                                    <div class="inline-flex items-center">
                                                        <svg width="28" height="28" viewBox="0 0 28 28"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="28" height="28" rx="4"
                                                                fill="url(#paint0_linear_337_871)" />
                                                            <mask id="mask0_337_871" style="mask-type:alpha"
                                                                maskUnits="userSpaceOnUse" x="4"
                                                                y="4" width="20" height="20">
                                                                <rect x="4" y="4" width="20"
                                                                    height="20" fill="#D9D9D9" />
                                                            </mask>
                                                            <g mask="url(#mask0_337_871)">
                                                                <path
                                                                    d="M7.12496 20.4583C6.9444 20.2778 6.85413 20.0694 6.85413 19.8333C6.85413 19.5972 6.9444 19.3889 7.12496 19.2083L12.1666 14.1667C12.25 14.0833 12.3402 14.0243 12.4375 13.9896C12.5347 13.9549 12.6388 13.9375 12.75 13.9375C12.8611 13.9375 12.9652 13.9549 13.0625 13.9896C13.1597 14.0243 13.25 14.0833 13.3333 14.1667L16.0833 16.9167L21.4166 10.9167C21.5694 10.7361 21.7673 10.6458 22.0104 10.6458C22.2534 10.6458 22.4583 10.7292 22.625 10.8958C22.7777 11.0486 22.8576 11.2326 22.8645 11.4479C22.8715 11.6632 22.7986 11.8542 22.6458 12.0208L16.6666 18.75C16.5833 18.8472 16.4895 18.9201 16.3854 18.9688C16.2812 19.0174 16.1736 19.0417 16.0625 19.0417C15.9513 19.0417 15.8437 19.0208 15.7395 18.9792C15.6354 18.9375 15.5416 18.875 15.4583 18.7917L12.75 16.0833L8.37496 20.4583C8.1944 20.6389 7.98607 20.7292 7.74996 20.7292C7.51385 20.7292 7.30551 20.6389 7.12496 20.4583ZM7.33329 15.0833C7.26385 15.0833 7.1944 15.066 7.12496 15.0313C7.05551 14.9965 6.99996 14.9375 6.95829 14.8542L6.54163 13.9583L5.64579 13.5417C5.56246 13.5 5.50343 13.4444 5.46871 13.375C5.43399 13.3056 5.41663 13.2361 5.41663 13.1667C5.41663 13.0972 5.43399 13.0278 5.46871 12.9583C5.50343 12.8889 5.56246 12.8333 5.64579 12.7917L6.54163 12.375L6.95829 11.4792C6.99996 11.3958 7.05551 11.3368 7.12496 11.3021C7.1944 11.2674 7.26385 11.25 7.33329 11.25C7.40274 11.25 7.47218 11.2674 7.54163 11.3021C7.61107 11.3368 7.66663 11.3958 7.70829 11.4792L8.12496 12.375L9.02079 12.7917C9.17357 12.8611 9.24996 12.9861 9.24996 13.1667C9.24996 13.3472 9.17357 13.4722 9.02079 13.5417L8.12496 13.9583L7.70829 14.8542C7.66663 14.9375 7.61107 14.9965 7.54163 15.0313C7.47218 15.066 7.40274 15.0833 7.33329 15.0833ZM16.5 13.4167C16.4305 13.4167 16.3611 13.3993 16.2916 13.3646C16.2222 13.3299 16.1666 13.2708 16.125 13.1875L15.7083 12.2917L14.8125 11.875C14.7291 11.8333 14.6701 11.7778 14.6354 11.7083C14.6007 11.6389 14.5833 11.5694 14.5833 11.5C14.5833 11.4306 14.6007 11.3611 14.6354 11.2917C14.6701 11.2222 14.7291 11.1667 14.8125 11.125L15.7083 10.7083L16.125 9.8125C16.1666 9.72917 16.2222 9.67014 16.2916 9.63542C16.3611 9.60069 16.4305 9.58333 16.5 9.58333C16.5694 9.58333 16.6388 9.60069 16.7083 9.63542C16.7777 9.67014 16.8333 9.72917 16.875 9.8125L17.2916 10.7083L18.1875 11.125C18.2708 11.1667 18.3298 11.2222 18.3645 11.2917C18.3993 11.3611 18.4166 11.4306 18.4166 11.5C18.4166 11.5694 18.3993 11.6389 18.3645 11.7083C18.3298 11.7778 18.2708 11.8333 18.1875 11.875L17.2916 12.2917L16.875 13.1875C16.8333 13.2708 16.7777 13.3299 16.7083 13.3646C16.6388 13.3993 16.5694 13.4167 16.5 13.4167ZM11.0833 10.9167C11.0138 10.9167 10.9444 10.8958 10.875 10.8542C10.8055 10.8125 10.75 10.75 10.7083 10.6667L10.1666 9.5L8.99996 8.95833C8.91663 8.91667 8.85413 8.86111 8.81246 8.79167C8.77079 8.72222 8.74996 8.65278 8.74996 8.58333C8.74996 8.51389 8.77079 8.44444 8.81246 8.375C8.85413 8.30556 8.91663 8.25 8.99996 8.20833L10.1666 7.66667L10.7083 6.5C10.75 6.41667 10.8055 6.35417 10.875 6.3125C10.9444 6.27083 11.0138 6.25 11.0833 6.25C11.1527 6.25 11.2222 6.27083 11.2916 6.3125C11.3611 6.35417 11.4166 6.41667 11.4583 6.5L12 7.66667L13.1666 8.20833C13.25 8.25 13.3125 8.30556 13.3541 8.375C13.3958 8.44444 13.4166 8.51389 13.4166 8.58333C13.4166 8.65278 13.3958 8.72222 13.3541 8.79167C13.3125 8.86111 13.25 8.91667 13.1666 8.95833L12 9.5L11.4583 10.6667C11.4166 10.75 11.3611 10.8125 11.2916 10.8542C11.2222 10.8958 11.1527 10.9167 11.0833 10.9167Z"
                                                                    fill="white" />
                                                            </g>
                                                            <defs>
                                                                <linearGradient id="paint0_linear_337_871"
                                                                    x1="0" y1="0" x2="28"
                                                                    y2="28" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#FFB72B" />
                                                                    <stop offset="1" stop-color="#FFA01B" />
                                                                </linearGradient>
                                                            </defs>
                                                        </svg>

                                                        <p class="font-bold text-sm text-[#222222] ml-3">Digital
                                                            Marketing Bootcamp</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <div class="inline-flex px-6 pt-6">
                                                    <svg width="28" height="28" viewBox="0 0 28 28"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_337_902)">
                                                            <path
                                                                d="M14 27.125C21.2487 27.125 27.125 21.2487 27.125 14C27.125 6.75126 21.2487 0.875 14 0.875C6.75126 0.875 0.875 6.75126 0.875 14C0.875 21.2487 6.75126 27.125 14 27.125Z"
                                                                fill="#F5F5F5" />
                                                            <path
                                                                d="M14 19.25C16.8995 19.25 19.25 16.8995 19.25 14C19.25 11.1005 16.8995 8.75 14 8.75C11.1005 8.75 8.75 11.1005 8.75 14C8.75 16.8995 11.1005 19.25 14 19.25Z"
                                                                fill="#ED4C5C" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_337_902">
                                                                <rect width="28" height="28" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>

                                                    <p class="font-black text-base ml-4">Tokyo</p>
                                                </div>
                                                <a href="{{ route('detail', ['slug' => 'Tokyo', 'course' => 'data science']) }}"
                                                    class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                                    role="menuitem" tabindex="-1" id="user-menu-item-0">
                                                    <div class="inline-flex items-center">
                                                        <svg width="28" height="28" viewBox="0 0 28 28"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="28" height="28" rx="4"
                                                                fill="url(#paint0_linear_337_878)" />
                                                            <mask id="mask0_337_878" style="mask-type:alpha"
                                                                maskUnits="userSpaceOnUse" x="4"
                                                                y="4" width="20" height="20">
                                                                <rect x="4" y="4" width="20"
                                                                    height="20" fill="#D9D9D9" />
                                                            </mask>
                                                            <g mask="url(#mask0_337_878)">
                                                                <path
                                                                    d="M21.5 17.3334L15.0208 12.2709C14.6458 11.9792 14.2257 11.8646 13.7604 11.9271C13.2951 11.9896 12.9236 12.2153 12.6458 12.6042L10.3542 15.7709L7.54167 13.5417C7.375 13.4028 7.20139 13.3056 7.02083 13.25C6.84028 13.1945 6.66667 13.1667 6.5 13.1667V10.0417C6.56944 10.0417 6.64931 10.0521 6.73958 10.073C6.82986 10.0938 6.91667 10.1389 7 10.2084L9.83333 12.3334L13.4792 7.20838C13.6181 7.01393 13.8056 6.89935 14.0417 6.86463C14.2778 6.8299 14.4931 6.88893 14.6875 7.04171L18.1667 9.83338H20.6667C20.9028 9.83338 21.1007 9.91324 21.2604 10.073C21.4201 10.2327 21.5 10.4306 21.5 10.6667V17.3334ZM7.33333 20.6667C7.09722 20.6667 6.89931 20.5868 6.73958 20.4271C6.57986 20.2674 6.5 20.0695 6.5 19.8334V15.0625C6.59722 15.0625 6.6875 15.0764 6.77083 15.1042C6.85417 15.132 6.9375 15.1806 7.02083 15.25L10.6667 18.1667L13.5 14.2709C13.6389 14.0764 13.8229 13.9618 14.0521 13.9271C14.2812 13.8924 14.4931 13.9514 14.6875 14.1042L21.5 19.4375V19.8334C21.5 20.0695 21.4201 20.2674 21.2604 20.4271C21.1007 20.5868 20.9028 20.6667 20.6667 20.6667H7.33333Z"
                                                                    fill="white" />
                                                            </g>
                                                            <defs>
                                                                <linearGradient id="paint0_linear_337_878"
                                                                    x1="0" y1="0" x2="28"
                                                                    y2="28" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#3734A9" />
                                                                    <stop offset="1" stop-color="#2E7CF6" />
                                                                </linearGradient>
                                                            </defs>
                                                        </svg>

                                                        <p class="font-bold text-sm text-[#222222] ml-3">Data Science
                                                            Bootcamp</p>
                                                    </div>
                                                </a>
                                                <a href="{{ route('detail', ['slug' => 'Tokyo', 'course' => 'digital marketing']) }}"
                                                    class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                                    role="menuitem" tabindex="-1" id="user-menu-item-1">
                                                    <div class="inline-flex items-center">
                                                        <svg width="28" height="28" viewBox="0 0 28 28"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="28" height="28" rx="4"
                                                                fill="url(#paint0_linear_337_884)" />
                                                            <mask id="mask0_337_884" style="mask-type:alpha"
                                                                maskUnits="userSpaceOnUse" x="4"
                                                                y="4" width="20" height="20">
                                                                <rect x="4" y="4" width="20"
                                                                    height="20" fill="#D9D9D9" />
                                                            </mask>
                                                            <g mask="url(#mask0_337_884)">
                                                                <path
                                                                    d="M7.12496 20.4583C6.9444 20.2778 6.85413 20.0694 6.85413 19.8333C6.85413 19.5972 6.9444 19.3889 7.12496 19.2083L12.1666 14.1667C12.25 14.0833 12.3402 14.0243 12.4375 13.9896C12.5347 13.9549 12.6388 13.9375 12.75 13.9375C12.8611 13.9375 12.9652 13.9549 13.0625 13.9896C13.1597 14.0243 13.25 14.0833 13.3333 14.1667L16.0833 16.9167L21.4166 10.9167C21.5694 10.7361 21.7673 10.6458 22.0104 10.6458C22.2534 10.6458 22.4583 10.7292 22.625 10.8958C22.7777 11.0486 22.8576 11.2326 22.8645 11.4479C22.8715 11.6632 22.7986 11.8542 22.6458 12.0208L16.6666 18.75C16.5833 18.8472 16.4895 18.9201 16.3854 18.9688C16.2812 19.0174 16.1736 19.0417 16.0625 19.0417C15.9513 19.0417 15.8437 19.0208 15.7395 18.9792C15.6354 18.9375 15.5416 18.875 15.4583 18.7917L12.75 16.0833L8.37496 20.4583C8.1944 20.6389 7.98607 20.7292 7.74996 20.7292C7.51385 20.7292 7.30551 20.6389 7.12496 20.4583ZM7.33329 15.0833C7.26385 15.0833 7.1944 15.066 7.12496 15.0313C7.05551 14.9965 6.99996 14.9375 6.95829 14.8542L6.54163 13.9583L5.64579 13.5417C5.56246 13.5 5.50343 13.4444 5.46871 13.375C5.43399 13.3056 5.41663 13.2361 5.41663 13.1667C5.41663 13.0972 5.43399 13.0278 5.46871 12.9583C5.50343 12.8889 5.56246 12.8333 5.64579 12.7917L6.54163 12.375L6.95829 11.4792C6.99996 11.3958 7.05551 11.3368 7.12496 11.3021C7.1944 11.2674 7.26385 11.25 7.33329 11.25C7.40274 11.25 7.47218 11.2674 7.54163 11.3021C7.61107 11.3368 7.66663 11.3958 7.70829 11.4792L8.12496 12.375L9.02079 12.7917C9.17357 12.8611 9.24996 12.9861 9.24996 13.1667C9.24996 13.3472 9.17357 13.4722 9.02079 13.5417L8.12496 13.9583L7.70829 14.8542C7.66663 14.9375 7.61107 14.9965 7.54163 15.0313C7.47218 15.066 7.40274 15.0833 7.33329 15.0833ZM16.5 13.4167C16.4305 13.4167 16.3611 13.3993 16.2916 13.3646C16.2222 13.3299 16.1666 13.2708 16.125 13.1875L15.7083 12.2917L14.8125 11.875C14.7291 11.8333 14.6701 11.7778 14.6354 11.7083C14.6007 11.6389 14.5833 11.5694 14.5833 11.5C14.5833 11.4306 14.6007 11.3611 14.6354 11.2917C14.6701 11.2222 14.7291 11.1667 14.8125 11.125L15.7083 10.7083L16.125 9.8125C16.1666 9.72917 16.2222 9.67014 16.2916 9.63542C16.3611 9.60069 16.4305 9.58333 16.5 9.58333C16.5694 9.58333 16.6388 9.60069 16.7083 9.63542C16.7777 9.67014 16.8333 9.72917 16.875 9.8125L17.2916 10.7083L18.1875 11.125C18.2708 11.1667 18.3298 11.2222 18.3645 11.2917C18.3993 11.3611 18.4166 11.4306 18.4166 11.5C18.4166 11.5694 18.3993 11.6389 18.3645 11.7083C18.3298 11.7778 18.2708 11.8333 18.1875 11.875L17.2916 12.2917L16.875 13.1875C16.8333 13.2708 16.7777 13.3299 16.7083 13.3646C16.6388 13.3993 16.5694 13.4167 16.5 13.4167ZM11.0833 10.9167C11.0138 10.9167 10.9444 10.8958 10.875 10.8542C10.8055 10.8125 10.75 10.75 10.7083 10.6667L10.1666 9.5L8.99996 8.95833C8.91663 8.91667 8.85413 8.86111 8.81246 8.79167C8.77079 8.72222 8.74996 8.65278 8.74996 8.58333C8.74996 8.51389 8.77079 8.44444 8.81246 8.375C8.85413 8.30556 8.91663 8.25 8.99996 8.20833L10.1666 7.66667L10.7083 6.5C10.75 6.41667 10.8055 6.35417 10.875 6.3125C10.9444 6.27083 11.0138 6.25 11.0833 6.25C11.1527 6.25 11.2222 6.27083 11.2916 6.3125C11.3611 6.35417 11.4166 6.41667 11.4583 6.5L12 7.66667L13.1666 8.20833C13.25 8.25 13.3125 8.30556 13.3541 8.375C13.3958 8.44444 13.4166 8.51389 13.4166 8.58333C13.4166 8.65278 13.3958 8.72222 13.3541 8.79167C13.3125 8.86111 13.25 8.91667 13.1666 8.95833L12 9.5L11.4583 10.6667C11.4166 10.75 11.3611 10.8125 11.2916 10.8542C11.2222 10.8958 11.1527 10.9167 11.0833 10.9167Z"
                                                                    fill="white" />
                                                            </g>
                                                            <defs>
                                                                <linearGradient id="paint0_linear_337_884"
                                                                    x1="0" y1="0" x2="28"
                                                                    y2="28" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#FFB72B" />
                                                                    <stop offset="1" stop-color="#FFA01B" />
                                                                </linearGradient>
                                                            </defs>
                                                        </svg>


                                                        <p class="font-bold text-sm text-[#222222] ml-3">Digital
                                                            Marketing Bootcamp</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <div class="inline-flex px-6 pt-6">
                                                    <svg width="28" height="28" viewBox="0 0 28 28"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_337_905)">
                                                            <path
                                                                d="M14 27.125C21.2487 27.125 27.125 21.2487 27.125 14C27.125 6.75126 21.2487 0.875 14 0.875C6.75126 0.875 0.875 6.75126 0.875 14C0.875 21.2487 6.75126 27.125 14 27.125Z"
                                                                fill="#F5F5F5" />
                                                            <path
                                                                d="M10.2375 14.7437C11.4625 15.5749 13.1687 15.2249 14 13.9999C14.8312 12.7749 16.4937 12.4249 17.7625 13.2562C18.9437 14.0437 19.2937 15.5749 18.6375 16.7562C20.0812 14.3062 19.425 11.1124 16.975 9.49367C14.4812 7.83117 11.1125 8.48742 9.45 10.9812C9.40625 11.0687 9.3625 11.1562 9.31875 11.1999C8.70625 12.4687 9.1 13.9562 10.2375 14.7437Z"
                                                                fill="#ED4C5C" />
                                                            <path
                                                                d="M17.7625 13.2562C16.5375 12.4249 14.8312 12.7749 14 13.9999C13.1687 15.2249 11.5062 15.5749 10.2375 14.7437C9.05621 13.9562 8.70621 12.4249 9.36246 11.2437C7.87496 13.6937 8.57496 16.8874 11.025 18.5062C13.5187 20.1687 16.8875 19.5124 18.55 17.0187C18.5937 16.9312 18.6375 16.8437 18.6812 16.7999C19.2937 15.5312 18.9 14.0437 17.7625 13.2562Z"
                                                                fill="#428BC1" />
                                                            <path
                                                                d="M3.41255 10.1937L6.4313 5.68745L6.12505 5.4687L5.8188 5.2937L2.80005 9.79995L3.1063 9.97495L3.41255 10.1937ZM4.2438 10.7625L4.55005 10.9375L7.52505 6.4312L7.26255 6.2562L6.9563 6.03745L3.93755 10.5437L4.2438 10.7625ZM8.05005 6.7812L5.07505 11.2875L5.3813 11.5062L5.68755 11.6812L8.66255 7.17495L8.3563 6.99995L8.05005 6.7812ZM21.2188 18.5937L21.525 18.8125L22.925 16.7125L22.6188 16.4937L22.3125 16.3187L20.9125 18.4187L21.2188 18.5937ZM24.5875 17.8062L23.1875 19.9062L23.4938 20.125L23.8 20.3L25.2 18.2L24.8938 18.025L24.5875 17.8062ZM22.6625 19.5562L24.0625 17.4562L23.7563 17.2375L23.45 17.0625L22.05 19.1625L22.3563 19.3375L22.6625 19.5562ZM21.0438 18.9L20.7375 18.725L19.3375 20.825L19.6438 21L19.95 21.2187L21.35 19.1187L21.0438 18.9ZM22.1375 19.6437L21.875 19.4687L20.475 21.5687L20.7375 21.7437L21.0438 21.9625L22.4438 19.8625L22.1375 19.6437ZM22.9688 20.2125L21.5688 22.3125L21.875 22.5312L22.1813 22.7062L23.5813 20.6062L23.275 20.3875L22.9688 20.2125ZM3.1063 18.025L2.80005 18.2L5.8188 22.7062L6.12505 22.5312L6.4313 22.3125L3.41255 17.8062L3.1063 18.025ZM5.86255 19.6437L5.5563 19.8625L6.9563 21.9625L7.26255 21.7437L7.52505 21.5687L6.12505 19.4687L5.86255 19.6437ZM5.3813 16.4937L5.07505 16.7125L8.05005 21.2187L8.3563 21L8.66255 20.825L5.68755 16.3187L5.3813 16.4937ZM3.93755 17.4562L5.33755 19.5562L5.6438 19.3375L5.95005 19.1625L4.55005 17.0625L4.2438 17.2375L3.93755 17.4562ZM23.275 7.61245L23.5813 7.3937L22.1813 5.2937L21.875 5.4687L21.5688 5.68745L22.9688 7.78745L23.275 7.61245ZM21.0438 9.09995L21.35 8.8812L19.95 6.7812L19.6438 6.99995L19.3375 7.17495L20.7375 9.27495L21.0438 9.09995ZM23.1875 8.0937L24.5875 10.1937L24.8938 9.97495L25.2 9.79995L23.8 7.69995L23.4938 7.87495L23.1875 8.0937ZM23.7563 10.7625L24.0625 10.5437L21.0438 6.03745L20.7375 6.2562L20.475 6.4312L23.45 10.9375L23.7563 10.7625ZM22.6188 11.5062L22.925 11.2875L21.525 9.18745L21.2188 9.4062L20.9125 9.5812L22.3125 11.6812L22.6188 11.5062Z"
                                                                fill="#3E4347" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_337_905">
                                                                <rect width="28" height="28" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>


                                                    <p class="font-black text-base ml-4">South Korea</p>
                                                </div>
                                                <a href="{{ route('detail', ['slug' => 'South Korea', 'course' => 'data science']) }}"
                                                    class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                                    role="menuitem" tabindex="-1" id="user-menu-item-0">
                                                    <div class="inline-flex items-center">
                                                        <svg width="28" height="28" viewBox="0 0 28 28"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="28" height="28" rx="4"
                                                                fill="url(#paint0_linear_337_891)" />
                                                            <mask id="mask0_337_891" style="mask-type:alpha"
                                                                maskUnits="userSpaceOnUse" x="4"
                                                                y="4" width="20" height="20">
                                                                <rect x="4" y="4" width="20"
                                                                    height="20" fill="#D9D9D9" />
                                                            </mask>
                                                            <g mask="url(#mask0_337_891)">
                                                                <path
                                                                    d="M21.5 17.3334L15.0208 12.2709C14.6458 11.9792 14.2257 11.8646 13.7604 11.9271C13.2951 11.9896 12.9236 12.2153 12.6458 12.6042L10.3542 15.7709L7.54167 13.5417C7.375 13.4028 7.20139 13.3056 7.02083 13.25C6.84028 13.1945 6.66667 13.1667 6.5 13.1667V10.0417C6.56944 10.0417 6.64931 10.0521 6.73958 10.073C6.82986 10.0938 6.91667 10.1389 7 10.2084L9.83333 12.3334L13.4792 7.20838C13.6181 7.01393 13.8056 6.89935 14.0417 6.86463C14.2778 6.8299 14.4931 6.88893 14.6875 7.04171L18.1667 9.83338H20.6667C20.9028 9.83338 21.1007 9.91324 21.2604 10.073C21.4201 10.2327 21.5 10.4306 21.5 10.6667V17.3334ZM7.33333 20.6667C7.09722 20.6667 6.89931 20.5868 6.73958 20.4271C6.57986 20.2674 6.5 20.0695 6.5 19.8334V15.0625C6.59722 15.0625 6.6875 15.0764 6.77083 15.1042C6.85417 15.132 6.9375 15.1806 7.02083 15.25L10.6667 18.1667L13.5 14.2709C13.6389 14.0764 13.8229 13.9618 14.0521 13.9271C14.2812 13.8924 14.4931 13.9514 14.6875 14.1042L21.5 19.4375V19.8334C21.5 20.0695 21.4201 20.2674 21.2604 20.4271C21.1007 20.5868 20.9028 20.6667 20.6667 20.6667H7.33333Z"
                                                                    fill="white" />
                                                            </g>
                                                            <defs>
                                                                <linearGradient id="paint0_linear_337_891"
                                                                    x1="0" y1="0" x2="28"
                                                                    y2="28" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#3734A9" />
                                                                    <stop offset="1" stop-color="#2E7CF6" />
                                                                </linearGradient>
                                                            </defs>
                                                        </svg>


                                                        <p class="font-bold text-sm text-[#222222] ml-3">Data Science
                                                            Bootcamp</p>
                                                    </div>
                                                </a>
                                                <a href="{{ route('detail', ['slug' => 'South Korea', 'course' => 'digital marketing']) }}"
                                                    class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                                    role="menuitem" tabindex="-1" id="user-menu-item-1">
                                                    <div class="inline-flex items-center">
                                                        <svg width="28" height="28" viewBox="0 0 28 28"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="28" height="28" rx="4"
                                                                fill="url(#paint0_linear_337_897)" />
                                                            <mask id="mask0_337_897" style="mask-type:alpha"
                                                                maskUnits="userSpaceOnUse" x="4"
                                                                y="4" width="20" height="20">
                                                                <rect x="4" y="4" width="20"
                                                                    height="20" fill="#D9D9D9" />
                                                            </mask>
                                                            <g mask="url(#mask0_337_897)">
                                                                <path
                                                                    d="M7.12496 20.4583C6.9444 20.2778 6.85413 20.0694 6.85413 19.8333C6.85413 19.5972 6.9444 19.3889 7.12496 19.2083L12.1666 14.1667C12.25 14.0833 12.3402 14.0243 12.4375 13.9896C12.5347 13.9549 12.6388 13.9375 12.75 13.9375C12.8611 13.9375 12.9652 13.9549 13.0625 13.9896C13.1597 14.0243 13.25 14.0833 13.3333 14.1667L16.0833 16.9167L21.4166 10.9167C21.5694 10.7361 21.7673 10.6458 22.0104 10.6458C22.2534 10.6458 22.4583 10.7292 22.625 10.8958C22.7777 11.0486 22.8576 11.2326 22.8645 11.4479C22.8715 11.6632 22.7986 11.8542 22.6458 12.0208L16.6666 18.75C16.5833 18.8472 16.4895 18.9201 16.3854 18.9688C16.2812 19.0174 16.1736 19.0417 16.0625 19.0417C15.9513 19.0417 15.8437 19.0208 15.7395 18.9792C15.6354 18.9375 15.5416 18.875 15.4583 18.7917L12.75 16.0833L8.37496 20.4583C8.1944 20.6389 7.98607 20.7292 7.74996 20.7292C7.51385 20.7292 7.30551 20.6389 7.12496 20.4583ZM7.33329 15.0833C7.26385 15.0833 7.1944 15.066 7.12496 15.0313C7.05551 14.9965 6.99996 14.9375 6.95829 14.8542L6.54163 13.9583L5.64579 13.5417C5.56246 13.5 5.50343 13.4444 5.46871 13.375C5.43399 13.3056 5.41663 13.2361 5.41663 13.1667C5.41663 13.0972 5.43399 13.0278 5.46871 12.9583C5.50343 12.8889 5.56246 12.8333 5.64579 12.7917L6.54163 12.375L6.95829 11.4792C6.99996 11.3958 7.05551 11.3368 7.12496 11.3021C7.1944 11.2674 7.26385 11.25 7.33329 11.25C7.40274 11.25 7.47218 11.2674 7.54163 11.3021C7.61107 11.3368 7.66663 11.3958 7.70829 11.4792L8.12496 12.375L9.02079 12.7917C9.17357 12.8611 9.24996 12.9861 9.24996 13.1667C9.24996 13.3472 9.17357 13.4722 9.02079 13.5417L8.12496 13.9583L7.70829 14.8542C7.66663 14.9375 7.61107 14.9965 7.54163 15.0313C7.47218 15.066 7.40274 15.0833 7.33329 15.0833ZM16.5 13.4167C16.4305 13.4167 16.3611 13.3993 16.2916 13.3646C16.2222 13.3299 16.1666 13.2708 16.125 13.1875L15.7083 12.2917L14.8125 11.875C14.7291 11.8333 14.6701 11.7778 14.6354 11.7083C14.6007 11.6389 14.5833 11.5694 14.5833 11.5C14.5833 11.4306 14.6007 11.3611 14.6354 11.2917C14.6701 11.2222 14.7291 11.1667 14.8125 11.125L15.7083 10.7083L16.125 9.8125C16.1666 9.72917 16.2222 9.67014 16.2916 9.63542C16.3611 9.60069 16.4305 9.58333 16.5 9.58333C16.5694 9.58333 16.6388 9.60069 16.7083 9.63542C16.7777 9.67014 16.8333 9.72917 16.875 9.8125L17.2916 10.7083L18.1875 11.125C18.2708 11.1667 18.3298 11.2222 18.3645 11.2917C18.3993 11.3611 18.4166 11.4306 18.4166 11.5C18.4166 11.5694 18.3993 11.6389 18.3645 11.7083C18.3298 11.7778 18.2708 11.8333 18.1875 11.875L17.2916 12.2917L16.875 13.1875C16.8333 13.2708 16.7777 13.3299 16.7083 13.3646C16.6388 13.3993 16.5694 13.4167 16.5 13.4167ZM11.0833 10.9167C11.0138 10.9167 10.9444 10.8958 10.875 10.8542C10.8055 10.8125 10.75 10.75 10.7083 10.6667L10.1666 9.5L8.99996 8.95833C8.91663 8.91667 8.85413 8.86111 8.81246 8.79167C8.77079 8.72222 8.74996 8.65278 8.74996 8.58333C8.74996 8.51389 8.77079 8.44444 8.81246 8.375C8.85413 8.30556 8.91663 8.25 8.99996 8.20833L10.1666 7.66667L10.7083 6.5C10.75 6.41667 10.8055 6.35417 10.875 6.3125C10.9444 6.27083 11.0138 6.25 11.0833 6.25C11.1527 6.25 11.2222 6.27083 11.2916 6.3125C11.3611 6.35417 11.4166 6.41667 11.4583 6.5L12 7.66667L13.1666 8.20833C13.25 8.25 13.3125 8.30556 13.3541 8.375C13.3958 8.44444 13.4166 8.51389 13.4166 8.58333C13.4166 8.65278 13.3958 8.72222 13.3541 8.79167C13.3125 8.86111 13.25 8.91667 13.1666 8.95833L12 9.5L11.4583 10.6667C11.4166 10.75 11.3611 10.8125 11.2916 10.8542C11.2222 10.8958 11.1527 10.9167 11.0833 10.9167Z"
                                                                    fill="white" />
                                                            </g>
                                                            <defs>
                                                                <linearGradient id="paint0_linear_337_897"
                                                                    x1="0" y1="0" x2="28"
                                                                    y2="28" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#FFB72B" />
                                                                    <stop offset="1" stop-color="#FFA01B" />
                                                                </linearGradient>
                                                            </defs>
                                                        </svg>


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
                        <a href="#" class="text-white px-5 py-2 font-bold rounded-full bg-[#0F5B89] mx-2">Join
                            Now</a>
                    @else
                        <a href="#" class="text-white px-5 py-2 font-bold rounded-full bg-[#FF9500] mx-2">Join
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
