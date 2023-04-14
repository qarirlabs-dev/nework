<x-landing-layout>
    @push('scripts')
        <script>
            var selectedProgram = null;

            function toggleModal() {
                console.log('clicked');
                document.getElementById('modal-program').classList.toggle("hidden");
            }

            function showModal(program) {
                selectedProgram = program
                toggleModal()
            }

            function redirectToPage(selectedLocation) {
                if (selectedLocation == 'online') {
                    location.href = '{{ route('detail') }}'
                } else if (selectedLocation == 'indonesia') {
                    location.href = '{{ route('detail') }}'
                } else if (selectedLocation == 'istanbul') {
                    location.href = '{{ route('detail') }}'
                } else if (selectedLocation == 'south korea') {
                    location.href = '{{ route('detail') }}'
                }
            }
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
                            <p class="font-black text-xl">Where would you like to learn Data Sciences Bootcamp?</p>
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
                        <p class="font-medium text-sm text-[#646464] mt-2">You can choose to learn Data Sciences in over
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
                                onclick="redirectToPage('south korea')">
                                <img src="{{ Vite::asset('resources/image/ilustration/south_korea.png') }}"
                                    alt="online" class="h-24 w-24 rounded-lg">
                                <p class="font-bold text-sm text-[#262626] px-2 py-3">South Korea</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
        <div class="absolute top-16">
            <div class="flex flex-row justify-between items-center w-10/12 mx-auto">
                <div class="flex-auto w-2/3">
                    <div class="text-5xl font-black mb-6 mt-24 w-5/6">Create New Success Shortcuts. Land Your New Dream
                        Job.
                    </div>
                    <div class="text-[#262626] font-normal text-xl mb-6 text-opacity-75 leading-9 w-10/12">Accelerate
                        your
                        career with our top-tier trainers, personal coaches, and proven methods. Get guaranteed results
                        through our intensive online and offline classes.</div>
                    <a href="#classes"
                        class="bg-[#FF9500] z-30 px-10 py-2 rounded-md text-white text-lg font-bold">Browse
                        Classess</a>
                </div>
                <div class="flex-auto w-1/3 -mr-6">
                    <img src="{{ Vite::asset('resources/image/ilustration/ilustration_1.png') }}" alt="ilustration 1">
                </div>
            </div>
            <div class="flex flex-row mt-8 w-10/12 mx-auto">
                <div class="mr-12">
                    <div class="mb-6 font-medium text-xl">Talents</div>
                    <div class="flex items-center">
                        <svg width="36" height="18" viewBox="0 0 36 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 18V15.6375C0 14.5375 0.5565 13.656 1.6695 12.993C2.7815 12.331 4.225 12 6 12C6.325 12 6.6375 12.006 6.9375 12.018C7.2375 12.031 7.525 12.0625 7.8 12.1125C7.45 12.6125 7.1875 13.15 7.0125 13.725C6.8375 14.3 6.75 14.9125 6.75 15.5625V18H0ZM9 18V15.5625C9 13.9375 9.8315 12.625 11.4945 11.625C13.1565 10.625 15.325 10.125 18 10.125C20.7 10.125 22.875 10.625 24.525 11.625C26.175 12.625 27 13.9375 27 15.5625V18H9ZM29.25 18V15.5625C29.25 14.9125 29.1685 14.3 29.0055 13.725C28.8435 13.15 28.6 12.6125 28.275 12.1125C28.55 12.0625 28.8315 12.031 29.1195 12.018C29.4065 12.006 29.7 12 30 12C31.8 12 33.25 12.331 34.35 12.993C35.45 13.656 36 14.5375 36 15.6375V18H29.25ZM6 10.5C5.175 10.5 4.469 10.206 3.882 9.618C3.294 9.031 3 8.325 3 7.5C3 6.65 3.294 5.9375 3.882 5.3625C4.469 4.7875 5.175 4.5 6 4.5C6.85 4.5 7.5625 4.7875 8.1375 5.3625C8.7125 5.9375 9 6.65 9 7.5C9 8.325 8.7125 9.031 8.1375 9.618C7.5625 10.206 6.85 10.5 6 10.5ZM30 10.5C29.175 10.5 28.4685 10.206 27.8805 9.618C27.2935 9.031 27 8.325 27 7.5C27 6.65 27.2935 5.9375 27.8805 5.3625C28.4685 4.7875 29.175 4.5 30 4.5C30.85 4.5 31.5625 4.7875 32.1375 5.3625C32.7125 5.9375 33 6.65 33 7.5C33 8.325 32.7125 9.031 32.1375 9.618C31.5625 10.206 30.85 10.5 30 10.5ZM18 9C16.75 9 15.6875 8.5625 14.8125 7.6875C13.9375 6.8125 13.5 5.75 13.5 4.5C13.5 3.225 13.9375 2.156 14.8125 1.293C15.6875 0.431 16.75 0 18 0C19.275 0 20.3435 0.431 21.2055 1.293C22.0685 2.156 22.5 3.225 22.5 4.5C22.5 5.75 22.0685 6.8125 21.2055 7.6875C20.3435 8.5625 19.275 9 18 9Z"
                                fill="#262626" />
                        </svg>
                        <div class="font-bold text-3xl mx-2">3K+</div>
                    </div>
                </div>
                <div class="mx-2">
                    <div class="mb-6 font-medium text-xl">Our grads get hired by</div>
                    <div class="flex items-end">
                        <img src="{{ Vite::asset('resources/image/icon/shopee_color.png') }}"
                            alt="shopee"class="mx-2 h-6">
                        <img src="{{ Vite::asset('resources/image/icon/stickearn_color.png') }}" alt="stackearn"
                            class="mx-2 h-6">
                        <img src="{{ Vite::asset('resources/image/icon/dentsu_color.png') }}" alt="dentsu"
                            class="mx-2 h-6">
                        <img src="{{ Vite::asset('resources/image/icon/glint_color.png') }}" alt="glint"
                            class="mx-2 h-6">
                        <img src="{{ Vite::asset('resources/image/icon/kitabisa_color.png') }}" alt="ek"
                            class="mx-2 h-6">
                        <img src="{{ Vite::asset('resources/image/icon/mekari_color.png') }}" alt="ek"
                            class="mx-2 h-6">
                        <img src="{{ Vite::asset('resources/image/icon/bri_color.png') }}" alt="ek"
                            class="mx-2 h-6">
                        <div class="flex mx-2 text-xl items-center font-medium">
                            <span class="mr-2">View More</span>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.20755" width="24" height="24" rx="12" fill="white" />
                                <g clip-path="url(#clip0_5_2582)">
                                    <path
                                        d="M18.0157 11.5339L13.6821 7.20015C13.5584 7.07645 13.3935 7.00854 13.2177 7.00854C13.0417 7.00854 12.877 7.07654 12.7533 7.20015L12.3598 7.59371C12.2362 7.71722 12.1681 7.8822 12.1681 8.0581C12.1681 8.2339 12.2362 8.40444 12.3598 8.52795L14.888 11.0617H6.85584C6.49369 11.0617 6.20755 11.3452 6.20755 11.7074V12.2638C6.20755 12.6261 6.49369 12.9382 6.85584 12.9382H14.9166L12.3599 15.486C12.2363 15.6097 12.1682 15.7702 12.1682 15.9461C12.1682 16.1218 12.2363 16.2847 12.3599 16.4083L12.7534 16.8006C12.8771 16.9243 13.0418 16.9917 13.2178 16.9917C13.3936 16.9917 13.5585 16.9234 13.6822 16.7997L18.0158 12.4661C18.1398 12.342 18.208 12.1763 18.2076 12.0002C18.2079 11.8235 18.1398 11.6578 18.0157 11.5339Z"
                                        fill="#FF9500" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_5_2582">
                                        <rect width="12" height="12" fill="white"
                                            transform="translate(6.20755 6)" />
                                    </clipPath>
                                </defs>
                            </svg>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="programs hero w-10/12 mx-auto -mt-16" id="classes">
        <div class="flex flex-wrap">
            <div class="w-1/3 px-3 cursor-pointer program" onclick="showModal('data science')">
                <div class="relative bg-white p-6 rounded-lg shadow-sm h-[32rem]">
                    <div class="mb-5"><span
                            class="text-[#FF7A00] font-bold text-base bg-[#FF9500] rounded-full py-2 px-5 bg-opacity-10">Enrolled
                            May 10, 2023</span>
                    </div>
                    <p class="font-bold text-4xl mb-4">Data Science Bootcamp</p>
                    <p class="font-normal text-base text-[#6E6E6E]">Learn the skills of a Data Scientist and build your
                        on AI products from scratch</p>
                    <svg class="absolute bottom-0 right-0 w-80 h-52" viewBox="0 0 297 195" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M342.5 179.5C342.5 191.323 341.684 200.282 340.082 206.921C338.48 213.562 336.106 217.824 333.035 220.321C329.978 222.807 326.155 223.605 321.51 223.157C316.854 222.708 311.42 221.01 305.203 218.554C300.284 216.611 294.891 214.199 289.036 211.581C265.342 200.984 234.075 187 196 187C172.25 187 148.107 192.435 125.276 199.09C114.983 202.09 104.948 205.34 95.3358 208.454C94.2877 208.794 93.2447 209.131 92.2069 209.467C81.6462 212.884 71.6284 216.08 62.3532 218.535C53.0766 220.992 44.563 222.702 37.0115 223.156C29.4586 223.609 22.903 222.802 17.5192 220.257C6.81208 215.194 0.5 203.117 0.5 179.5C0.5 85.0593 77.0593 8.5 171.5 8.5C265.941 8.5 342.5 85.0593 342.5 179.5Z"
                            stroke="#FF7A00" />
                        <path
                            d="M342.5 171.5C342.5 183.323 341.684 192.282 340.082 198.921C338.48 205.562 336.106 209.824 333.035 212.321C329.978 214.807 326.155 215.605 321.51 215.157C316.854 214.708 311.42 213.01 305.203 210.554C300.284 208.611 294.891 206.199 289.036 203.581C265.342 192.984 234.075 179 196 179C172.25 179 148.107 184.435 125.276 191.09C114.983 194.09 104.948 197.34 95.3358 200.454C94.2877 200.794 93.2447 201.131 92.2069 201.467C81.6462 204.884 71.6284 208.08 62.3532 210.535C53.0766 212.992 44.563 214.702 37.0115 215.156C29.4586 215.609 22.903 214.802 17.5192 212.257C6.81208 207.194 0.5 195.117 0.5 171.5C0.5 77.0593 77.0593 0.5 171.5 0.5C265.941 0.5 342.5 77.0593 342.5 171.5Z"
                            stroke="#00263D" />
                    </svg>
                    <img class="absolute bottom-0 right-0 w-80 h-48"
                        src="{{ Vite::asset('resources/image/ilustration/data_science_2.png') }}" alt="ilustration 1"
                        class="rounded-r-lg">
                </div>
            </div>
            <div class="w-1/3 px-3 cursor-pointer program" onclick="showModal('digital marketing')">
                <div class="relative bg-white p-6 rounded-lg shadow-sm h-[32rem]">
                    <div class="mb-5"><span
                            class="text-[#FF7A00] font-bold text-base bg-[#FF9500] rounded-full py-2 px-5 bg-opacity-10">Enrolled
                            May 10, 2023</span>
                    </div>
                    <p class="font-bold text-4xl mb-4">Digital Marketing Bootcamp</p>
                    <p class="font-normal text-base text-[#6E6E6E]">Learn the skills of a Digital Marketing and build
                        your on your company</p>
                    <svg class="absolute bottom-0 right-0 w-80 h-52" viewBox="0 0 297 195" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M342.5 179.5C342.5 191.323 341.684 200.282 340.082 206.921C338.48 213.562 336.106 217.824 333.035 220.321C329.978 222.807 326.155 223.605 321.51 223.157C316.854 222.708 311.42 221.01 305.203 218.554C300.284 216.611 294.891 214.199 289.036 211.581C265.342 200.984 234.075 187 196 187C172.25 187 148.107 192.435 125.276 199.09C114.983 202.09 104.948 205.34 95.3358 208.454C94.2877 208.794 93.2447 209.131 92.2069 209.467C81.6462 212.884 71.6284 216.08 62.3532 218.535C53.0766 220.992 44.563 222.702 37.0115 223.156C29.4586 223.609 22.903 222.802 17.5192 220.257C6.81208 215.194 0.5 203.117 0.5 179.5C0.5 85.0593 77.0593 8.5 171.5 8.5C265.941 8.5 342.5 85.0593 342.5 179.5Z"
                            stroke="#FF7A00" />
                        <path
                            d="M342.5 171.5C342.5 183.323 341.684 192.282 340.082 198.921C338.48 205.562 336.106 209.824 333.035 212.321C329.978 214.807 326.155 215.605 321.51 215.157C316.854 214.708 311.42 213.01 305.203 210.554C300.284 208.611 294.891 206.199 289.036 203.581C265.342 192.984 234.075 179 196 179C172.25 179 148.107 184.435 125.276 191.09C114.983 194.09 104.948 197.34 95.3358 200.454C94.2877 200.794 93.2447 201.131 92.2069 201.467C81.6462 204.884 71.6284 208.08 62.3532 210.535C53.0766 212.992 44.563 214.702 37.0115 215.156C29.4586 215.609 22.903 214.802 17.5192 212.257C6.81208 207.194 0.5 195.117 0.5 171.5C0.5 77.0593 77.0593 0.5 171.5 0.5C265.941 0.5 342.5 77.0593 342.5 171.5Z"
                            stroke="#00263D" />
                    </svg>
                    <img class="absolute bottom-0 right-0 w-80 h-48"
                        src="{{ Vite::asset('resources/image/ilustration/digital_marketing.png') }}" alt="">
                </div>
            </div>
            <div class="w-1/3 px-3 cursor-pointer program" onclick="showModal('web development')">
                <div class="relative bg-white p-6 rounded-lg shadow-sm h-[32rem]">
                    <div class="mb-5"><span
                            class="text-black font-bold text-base bg-[#00263D] rounded-full py-2 px-5 bg-opacity-10">Intermedate</span>
                    </div>
                    <p class="font-bold text-4xl mb-4">Web Development Bootcamp</p>
                    <p class="font-normal text-base text-[#6E6E6E]">Learn the skills of a Software Engineering and
                        build your product impactfull</p>
                    <svg class="absolute bottom-0 right-0 w-80 h-52" viewBox="0 0 297 195" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M342.5 179.5C342.5 191.323 341.684 200.282 340.082 206.921C338.48 213.562 336.106 217.824 333.035 220.321C329.978 222.807 326.155 223.605 321.51 223.157C316.854 222.708 311.42 221.01 305.203 218.554C300.284 216.611 294.891 214.199 289.036 211.581C265.342 200.984 234.075 187 196 187C172.25 187 148.107 192.435 125.276 199.09C114.983 202.09 104.948 205.34 95.3358 208.454C94.2877 208.794 93.2447 209.131 92.2069 209.467C81.6462 212.884 71.6284 216.08 62.3532 218.535C53.0766 220.992 44.563 222.702 37.0115 223.156C29.4586 223.609 22.903 222.802 17.5192 220.257C6.81208 215.194 0.5 203.117 0.5 179.5C0.5 85.0593 77.0593 8.5 171.5 8.5C265.941 8.5 342.5 85.0593 342.5 179.5Z"
                            stroke="#FF7A00" />
                        <path
                            d="M342.5 171.5C342.5 183.323 341.684 192.282 340.082 198.921C338.48 205.562 336.106 209.824 333.035 212.321C329.978 214.807 326.155 215.605 321.51 215.157C316.854 214.708 311.42 213.01 305.203 210.554C300.284 208.611 294.891 206.199 289.036 203.581C265.342 192.984 234.075 179 196 179C172.25 179 148.107 184.435 125.276 191.09C114.983 194.09 104.948 197.34 95.3358 200.454C94.2877 200.794 93.2447 201.131 92.2069 201.467C81.6462 204.884 71.6284 208.08 62.3532 210.535C53.0766 212.992 44.563 214.702 37.0115 215.156C29.4586 215.609 22.903 214.802 17.5192 212.257C6.81208 207.194 0.5 195.117 0.5 171.5C0.5 77.0593 77.0593 0.5 171.5 0.5C265.941 0.5 342.5 77.0593 342.5 171.5Z"
                            stroke="#00263D" />
                    </svg>
                    <img class="absolute bottom-0 right-0 w-80 h-48"
                        src="{{ Vite::asset('resources/image/ilustration/software_enginering.png') }}"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="benerif hero w-10/12 mx-auto mt-16">
        <div class="flex flex-col justify-center items-center">
            <div class="static mb-5">
                <div class="font-black text-4xl z-1">Why choose <div class="inline-block relative">
                        <div class="relative z-10">QarirLabs</div>
                        <div class="-z-10">
                            <div class="absolute bottom-0 right-0 w-44 h-3 bg-[#FF9500]"></div>
                        </div>
                    </div>?</div>
            </div>
            <p class="font-medium text-lg text-[#262626] opacity-50 w-1/2 text-center">QarirLabs has been proven to
                produce competent graduates in the industry through the bootcamp program.</p>
            <div class="flex flex-wrap mt-24">
                <div class="w-1/3 mb-20">
                    <div class="flex flex-col justify-start items-center bg-white shadow-sm rounded-lg p-6 mx-2 h-72">
                        <div
                            class="flex justify-center items-center p-6 bg-gradient-to-t from-[#FFB72B] to-[#FFA01B] rounded-xl -mt-14">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_5_4598" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                    x="0" y="0" width="40" height="40">
                                    <rect width="40" height="40" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_5_4598)">
                                    <path
                                        d="M1.66669 33.3334V28.6667C1.66669 27.7223 1.90974 26.8542 2.39585 26.0626C2.88196 25.2709 3.5278 24.6667 4.33335 24.2501C6.05558 23.389 7.80558 22.7431 9.58335 22.3126C11.3611 21.882 13.1667 21.6667 15 21.6667C16.8334 21.6667 18.6389 21.882 20.4167 22.3126C22.1945 22.7431 23.9445 23.389 25.6667 24.2501C26.4722 24.6667 27.1181 25.2709 27.6042 26.0626C28.0903 26.8542 28.3334 27.7223 28.3334 28.6667V33.3334H1.66669ZM31.6667 33.3334V28.3334C31.6667 27.1112 31.3264 25.9376 30.6459 24.8126C29.9653 23.6876 29 22.7223 27.75 21.9167C29.1667 22.0834 30.5 22.3681 31.75 22.7709C33 23.1737 34.1667 23.6667 35.25 24.2501C36.25 24.8056 37.0139 25.4237 37.5417 26.1042C38.0695 26.7848 38.3334 27.5279 38.3334 28.3334V33.3334H31.6667ZM15 20.0001C13.1667 20.0001 11.5972 19.3473 10.2917 18.0417C8.98613 16.7362 8.33335 15.1667 8.33335 13.3334C8.33335 11.5001 8.98613 9.93064 10.2917 8.62508C11.5972 7.31953 13.1667 6.66675 15 6.66675C16.8334 6.66675 18.4028 7.31953 19.7084 8.62508C21.0139 9.93064 21.6667 11.5001 21.6667 13.3334C21.6667 15.1667 21.0139 16.7362 19.7084 18.0417C18.4028 19.3473 16.8334 20.0001 15 20.0001ZM31.6667 13.3334C31.6667 15.1667 31.0139 16.7362 29.7084 18.0417C28.4028 19.3473 26.8334 20.0001 25 20.0001C24.6945 20.0001 24.3056 19.9654 23.8334 19.8959C23.3611 19.8265 22.9722 19.7501 22.6667 19.6667C23.4167 18.7779 23.9931 17.7917 24.3959 16.7084C24.7986 15.6251 25 14.5001 25 13.3334C25 12.1667 24.7986 11.0417 24.3959 9.95841C23.9931 8.87508 23.4167 7.88897 22.6667 7.00008C23.0556 6.86119 23.4445 6.77091 23.8334 6.72925C24.2222 6.68758 24.6111 6.66675 25 6.66675C26.8334 6.66675 28.4028 7.31953 29.7084 8.62508C31.0139 9.93064 31.6667 11.5001 31.6667 13.3334Z"
                                        fill="white" />
                                </g>
                            </svg>
                        </div>
                        <p class="font-bold text-2xl text-center mt-6">Passionate Trainers</p>
                        <p class="font-normal text-base text-[#262626] opacity-75 mt-3 text-center">All our trainers
                            are well experienced experts with senior-director level practitioners.</p>
                    </div>
                </div>
                <div class="w-1/3 mb-20">
                    <div class="flex flex-col justify-start items-center bg-white shadow-sm rounded-lg p-6 mx-2 h-72">
                        <div
                            class="flex justify-center items-center p-6 bg-gradient-to-t from-[#FFB72B] to-[#FFA01B] rounded-xl -mt-14">
                            <svg width="41" height="40" viewBox="0 0 41 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.4221 0V6.34743H21.5781V0H19.4219H19.4221ZM10.6184 1.9075L8.85203 3.14427L12.4921 8.34247L14.2576 7.10567L10.6184 1.9075ZM30.3813 1.9075L26.7423 7.1057L28.508 8.3425L32.148 3.14427L30.3816 1.9075H30.3813ZM20.4996 8.08413C15.2254 8.08413 10.9499 11.2869 10.9499 15.2383L16.3756 31.6699H24.6246L30.0499 15.2383C30.0499 11.287 25.7746 8.08413 20.5001 8.08413H20.4996ZM3.34883 9.9891L2.6122 12.0162L8.57383 14.1867L9.3132 12.1605L3.3487 9.9891H3.34883ZM37.6509 9.9891L31.6864 12.1607L32.4232 14.1871L38.3878 12.0163L37.6509 9.9891ZM9.0252 19.256L2.8952 20.9002L3.4514 22.9813L9.5814 21.3394L9.0253 19.256H9.0252ZM31.9745 19.256L31.4187 21.3394L37.5487 22.981L38.1045 20.8999L31.9745 19.256V19.256ZM16.2553 32.8677V35.7239H24.7449V32.8682H16.2554L16.2553 32.8677ZM16.2553 37.1438V40H24.7449V37.1443H16.2554L16.2553 37.1438Z"
                                    fill="white" />
                            </svg>

                        </div>
                        <p class="font-bold text-2xl text-center mt-6">Equipped by Enrichment Program</p>
                        <p class="font-normal text-base text-[#262626] opacity-75 mt-3 text-center">Join our enrichment
                            program in form of internship (part-time) for several projects at corporates/leading
                            startups</p>
                    </div>
                </div>
                <div class="w-1/3 mb-20">
                    <div class="flex flex-col justify-start items-center bg-white shadow-sm rounded-lg p-6 mx-2 h-72">
                        <div
                            class="flex justify-center items-center p-6 bg-gradient-to-t from-[#FFB72B] to-[#FFA01B] rounded-xl -mt-14">
                            <svg width="41" height="40" viewBox="0 0 41 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M32.1667 3.33337L23.8333 10.8334V29.1667L32.1667 21.6667V3.33337ZM11.3333 8.33337C8.08332 8.33337 4.58332 9.00004 2.16666 10.8334V35.2667C2.16666 35.6834 2.58332 36.1 2.99999 36.1C3.16666 36.1 3.24999 35.9834 3.41666 35.9834C5.66666 34.9 8.91666 34.1667 11.3333 34.1667C14.5833 34.1667 18.0833 34.8334 20.5 36.6667C22.75 35.25 26.8333 34.1667 29.6667 34.1667C32.4167 34.1667 35.25 34.6834 37.5833 35.9334C37.75 36.0167 37.8333 35.9834 38 35.9834C38.4167 35.9834 38.8333 35.5667 38.8333 35.15V10.8334C37.8333 10.0834 36.75 9.58337 35.5 9.16671V31.6667C33.6667 31.0834 31.6667 30.8334 29.6667 30.8334C26.8333 30.8334 22.75 31.9167 20.5 33.3334V10.8334C18.0833 9.00004 14.5833 8.33337 11.3333 8.33337Z"
                                    fill="white" />
                            </svg>


                        </div>
                        <p class="font-bold text-2xl text-center mt-6">Personalized Curriculum</p>
                        <p class="font-normal text-base text-[#262626] opacity-75 mt-3 text-center">Personalized
                            Curriculum</p>
                    </div>
                </div>
                <div class="w-1/3 mb-20">
                    <div class="flex flex-col justify-start items-center bg-white shadow-sm rounded-lg p-6 mx-2 h-72">
                        <div
                            class="flex justify-center items-center  p-6 bg-gradient-to-t from-[#FFB72B] to-[#FFA01B] rounded-xl -mt-14">
                            <svg width="41" height="40" viewBox="0 0 41 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.8333 10H23.8333L29.3167 4.50002C29.4716 4.3438 29.6559 4.21981 29.859 4.1352C30.0621 4.05058 30.28 4.00702 30.5 4.00702C30.72 4.00702 30.9379 4.05058 31.141 4.1352C31.3441 4.21981 31.5284 4.3438 31.6833 4.50002L35.9833 8.81668C36.2938 9.12895 36.468 9.55137 36.468 9.99168C36.468 10.432 36.2938 10.8544 35.9833 11.1667L32.1667 15H18.8333V18.3334C18.8333 18.7754 18.6577 19.1993 18.3452 19.5119C18.0326 19.8244 17.6087 20 17.1667 20C16.7246 20 16.3007 19.8244 15.9882 19.5119C15.6756 19.1993 15.5 18.7754 15.5 18.3334V13.3334C15.5 12.4493 15.8512 11.6014 16.4763 10.9763C17.1014 10.3512 17.9493 10 18.8333 10ZM8.83333 18.3334V25L5.01667 28.8167C4.70625 29.129 4.53201 29.5514 4.53201 29.9917C4.53201 30.432 4.70625 30.8544 5.01667 31.1667L9.31667 35.4834C9.47161 35.6396 9.65594 35.7636 9.85904 35.8482C10.0621 35.9328 10.28 35.9763 10.5 35.9763C10.72 35.9763 10.9379 35.9328 11.141 35.8482C11.3441 35.7636 11.5284 35.6396 11.6833 35.4834L18.8333 28.3334H25.5C25.942 28.3334 26.3659 28.1578 26.6785 27.8452C26.9911 27.5326 27.1667 27.1087 27.1667 26.6667V25H28.8333C29.2754 25 29.6993 24.8244 30.0118 24.5119C30.3244 24.1993 30.5 23.7754 30.5 23.3334V21.6667H32.1667C32.6087 21.6667 33.0326 21.4911 33.3452 21.1785C33.6577 20.866 33.8333 20.442 33.8333 20V18.3334H22.1667V20C22.1667 20.8841 21.8155 21.7319 21.1904 22.357C20.5652 22.9822 19.7174 23.3334 18.8333 23.3334H15.5C14.6159 23.3334 13.7681 22.9822 13.143 22.357C12.5179 21.7319 12.1667 20.8841 12.1667 20V15L8.83333 18.3334Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <p class="font-bold text-2xl text-center mt-6">Hiring Partners Mentorship</p>
                        <p class="font-normal text-base text-[#262626] opacity-75 mt-3 text-center">Get Mentoring
                            session with our hiring partners to learn more about company culture, industry update, and
                            soft skill class</p>
                    </div>
                </div>
                <div class="w-1/3 mb-20">
                    <div class="flex flex-col justify-start items-center bg-white shadow-sm rounded-lg p-6 mx-2 h-72">
                        <div
                            class="flex justify-center items-center  p-6 bg-gradient-to-t from-[#FFB72B] to-[#FFA01B] rounded-xl -mt-14">
                            <svg width="41" height="40" viewBox="0 0 41 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M33.61 10.824C31.8568 8.32235 29.4264 6.37272 26.604 5.20402C28.1859 7.98732 29.309 11.0074 29.93 14.148C31.3117 13.2248 32.5514 12.105 33.61 10.824ZM27.152 15.65C26.4748 11.4751 24.8213 7.51904 22.326 4.10402C21.1126 3.96614 19.8874 3.96614 18.674 4.10402C16.1787 7.51904 14.5252 11.4751 13.848 15.65C15.9516 16.544 18.2143 17.0032 20.5 17C22.86 17 25.108 16.52 27.152 15.65ZM13.528 18.752C15.759 19.5803 18.1202 20.003 20.5 20C22.952 20 25.3 19.56 27.472 18.752C27.5902 21.2785 27.3539 23.8091 26.77 26.27C24.7156 26.7569 22.6113 27.0019 20.5 27C18.342 27 16.244 26.746 14.232 26.268C13.6475 23.8078 13.4106 21.2779 13.528 18.752ZM11.07 14.148C11.6912 11.0081 12.8143 7.98872 14.396 5.20602C11.5736 6.37472 9.14315 8.32435 7.39 10.826C8.44948 12.105 9.68908 13.2253 11.07 14.148ZM35.168 13.596C36.2985 16.1823 36.7223 19.0223 36.396 21.826C34.4415 23.253 32.3036 24.41 30.04 25.266C30.5 22.6665 30.617 20.0179 30.388 17.388C32.1651 16.3748 33.7771 15.0961 35.168 13.596ZM5.832 13.596C7.22291 15.0961 8.83485 16.3748 10.612 17.388C10.3852 20.0186 10.5022 22.6676 10.96 25.268C8.69646 24.412 6.55857 23.2549 4.604 21.828C4.27835 19.0242 4.70281 16.1841 5.834 13.598L5.832 13.596ZM20.5 30C22.296 30 24.056 29.842 25.766 29.54C24.91 31.8035 23.7529 33.9414 22.326 35.896C21.1126 36.0337 19.8874 36.0337 18.674 35.896C17.2471 33.9415 16.09 31.8036 15.234 29.54C16.944 29.842 18.704 30 20.5 30ZM29.214 28.714C28.5722 30.8312 27.6968 32.8704 26.604 34.794C28.5522 33.9872 30.3224 32.8045 31.8134 31.3135C33.3045 29.8224 34.4872 28.0522 35.294 26.104C33.388 27.188 31.352 28.066 29.214 28.714ZM14.396 34.794C12.4478 33.9872 10.6776 32.8045 9.18655 31.3135C7.6955 29.8224 6.5128 28.0522 5.706 26.104C7.612 27.188 9.648 28.066 11.786 28.714C12.4278 30.8312 13.3032 32.8704 14.396 34.794Z"
                                    fill="white" />
                            </svg>

                        </div>
                        <p class="font-bold text-2xl text-center mt-6">International Destination</p>
                        <p class="font-normal text-base text-[#262626] opacity-75 mt-3 text-center">You only need to
                            bring your laptop & bag from your home country to find new opportunity, get networking
                            access, learn new culture, and go further with our international bootcamp across the world
                        </p>
                    </div>
                </div>
                <div class="w-1/3 mb-20">
                    <div class="flex flex-col justify-start items-center bg-white shadow-sm rounded-lg p-6 mx-2 h-72">
                        <div
                            class="flex justify-center items-center  p-6 bg-gradient-to-t from-[#FFB72B] to-[#FFA01B] rounded-xl -mt-14">
                            <svg width="41" height="40" viewBox="0 0 41 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_190_505" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                    x="0" y="0" width="41" height="40">
                                    <rect x="0.5" width="40" height="40" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_190_505)">
                                    <path
                                        d="M28.3333 25.8333L34.6666 20.4167L39.6666 20.8333L32.3333 27.2083L34.5 36.6667L30.25 34.0833L28.3333 25.8333ZM24.4166 13.6667L22.6666 9.58333L24.5833 5L28.4166 14.0417L24.4166 13.6667ZM7.70831 36.6667L10.4166 24.9583L1.33331 17.0833L13.3333 16.0417L18 5L22.6666 16.0417L34.6666 17.0833L25.5833 24.9583L28.2916 36.6667L18 30.4583L7.70831 36.6667Z"
                                        fill="white" />
                                </g>
                            </svg>
                        </div>
                        <p class="font-bold text-2xl text-center mt-6">5 Star Services</p>
                        <p class="font-normal text-base text-[#262626] opacity-75 mt-3 text-center">This is where
                            Education meets hospitality. 24/7 services from our global team representative will respond
                            to your needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="worked-with mt-20 w-9/12 mx-auto">
        <div class="flex justify-center items-end">
            <div class="flex font-bold text-4xl">
                <img src="{{ Vite::asset('resources/image/icon/logo_horizontal.png') }}" alt="logo"
                    class="h-9">
                &nbsp;has worked with <div class="inline-block relative">
                    <div class="relative z-10">120+</div>
                    <div class="-z-10">
                        <div class="absolute bottom-0 right-0 w-20 h-3 bg-[#FF9500]"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-bold text-4xl text-center">hiring partners in Indonesia</div>
        <p class="font-medium text-lg text-[#262626] opacity-60 text-center mt-5">Our alumni have worked in</p>
        <div class="mt-8 flex flex-wrap justify-center items-center">
            <img src="{{ Vite::asset('resources/image/icon/detsu_grey.png') }}" alt="dentsu"
                class="h-14 object-cover px-3 pt-5 mt-3">
            <img src="{{ Vite::asset('resources/image/icon/tokopedia.png') }}" alt="tokopedia"
                class="h-14 object-cover px-3 pt-5 mt-3">
            <img src="{{ Vite::asset('resources/image/icon/danone.png') }}" alt="danone"
                class="h-14 object-cover px-3 pt-5 mt-3">
            <img src="{{ Vite::asset('resources/image/icon/kaskus.png') }}" alt="kaskus"
                class="h-10 object-cover px- pt-5 mt-3">
            <img src="{{ Vite::asset('resources/image/icon/stick_earn.png') }}" alt="stick_earn"
                class="h-14 object-cover px-3 pt-5 mt-3 ml-5">
            <img src="{{ Vite::asset('resources/image/icon/telkom_indonesia.png') }}" alt="telkom_indonesia"
                class="h-14 object-cover px-3 pt-5 mt-3">
            <img src="{{ Vite::asset('resources/image/icon/kumpul.png') }}" alt="kumpul"
                class="h-14 object-cover px-3 pt-5 mt-3">
            <img src="{{ Vite::asset('resources/image/icon/shopee_1.png') }}" alt="shopee"
                class="h-14 object-cover px-3 pt-5 mt-3">
            <img src="{{ Vite::asset('resources/image/icon/tiktok_2.png') }}" alt="tiktok"
                class="h-20 object-cover px-3 pt-5 mt-3">
            <img src="{{ Vite::asset('resources/image/icon/rumah_zakat.png') }}" alt="rumah_zakat"
                class="h-14 object-cover px-3 pt-5 mt-3">
            <img src="{{ Vite::asset('resources/image/icon/majo.png') }}" alt="majoo"
                class="h-14 object-cover px-3 pt-5 mt-3">
            <img src="{{ Vite::asset('resources/image/icon/kao.png') }}" alt="kao"
                class="h-14 object-cover px-3 pt-5 mt-3">
        </div>
        <p class="font-bold text-2xl text-center text-[#00263D] mt-11">and <span class="text-[#FF9500]">100+</span>
            Other Hiring Partners</p>
    </section> --}}
    <section class="benefit mt-20">
        <div class="bg-[#00263D] w-full h-[40rem]">
            <div class="absolute w-full h-[40rem]">
                <svg class="absolute right-6 top-6" width="88" height="90" viewBox="0 0 88 90"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M56 6.34511e-05C60.2023 6.32674e-05 64.3634 0.827768 68.2459 2.43592C72.1283 4.04407 75.6559 6.40117 78.6274 9.37265C81.5989 12.3441 83.956 15.8718 85.5641 19.7542C87.1723 23.6366 88 27.7978 88 32.0001L56 32.0001L56 6.34511e-05Z"
                        fill="#FF9500" />
                    <path
                        d="M32 26.0001C36.2023 26.0001 40.3635 26.8278 44.2459 28.4359C48.1283 30.0441 51.6559 32.4012 54.6274 35.3726C57.5989 38.3441 59.956 41.8718 61.5641 45.7542C63.1723 49.6366 64 53.7978 64 58.0001L32 58.0001L32 26.0001Z"
                        fill="#FF9500" />
                </svg>
                <svg class="absolute bottom-6 left-6" width="109" height="110" viewBox="0 0 109 110"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M30.9096 95.2156C26.8505 94.1279 23.0454 92.2514 19.7115 89.6932C16.3776 87.135 13.5802 83.9452 11.479 80.3059C9.37787 76.6666 8.01411 72.6491 7.4656 68.4828C6.91709 64.3164 7.19457 60.0828 8.2822 56.0237L39.1918 64.3059L30.9096 95.2156Z"
                        fill="#FF9500" />
                    <path
                        d="M60.8211 76.3131C56.762 75.2255 52.9569 73.349 49.623 70.7908C46.2891 68.2326 43.4917 65.0428 41.3905 61.4035C39.2894 57.7642 37.9256 53.7467 37.3771 49.5803C36.8286 45.414 37.1061 41.1804 38.1937 37.1213L69.1033 45.4035L60.8211 76.3131Z"
                        fill="#FF9500" />
                </svg>
            </div>
            <p class="font-black text-white text-center text-4xl pt-20 pb-6 w-1/2 mx-auto">More than a bootcamp.
                Get hired at top tech companies.
            </p>
            <p class="font-medium text-white opacity-60 text-center w-1/2 mx-auto pb-10">QarirLabs helps you land your
                dream job. Our career managers guide you at the end of your bootcamp, 7.1 NPS Score (Highest in
                Education Field)</p>
            <div class="flex justify-center items-center w-1/2 mx-auto">
                <div class="w-1/5 pb-7">
                    <p class="text-center font-black text-4xl text-[#FF9500]">1K+</p>
                    <p class="text-center text-white font-medium text-base pt-3 w-2/3 mx-auto">Alumni</p>
                </div>
                <div class="w-1/3 flex flex-col justify-center">
                    <p class="text-center font-black text-4xl text-[#FF9500]">90%</p>
                    <p class="text-center text-white font-medium text-base pt-3 w-2/3 mx-auto">Alumni Get a job less
                        than 12 months</p>
                </div>
                <div class="w-1/3">
                    <p class="text-center font-black text-4xl text-[#FF9500]">85%</p>
                    <p class="text-center text-white font-medium text-base pt-3 w-2/3 mx-auto">Completed rate</p>
                </div>
            </div>
        </div>
    </section>
    <section class="alumni -mt-48 w-10/12 mx-auto">
        <p class="font-black text-4xl text-white text-center pb-12">Hear How Our Student Enjoying The Class</p>
        <div class="flex flex-wrap">
            <div class="w-1/3 px-3">
                <div class="relative bg-white p-6 rounded-lg shadow-sm">
                    <img src="{{ Vite::asset('resources/image/avatar/person_1.png') }}" alt="person 1"
                        class="rounded-lg w-full">
                    <div class="flex justify-center -mt-7">
                        <a href=""
                            class="bg-[#FF9500] px-4 py-3 rounded-lg flex w-32 justify-center items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0ZM8.72123 17.2193V6.7807L17.7613 12L8.72123 17.2193Z"
                                    fill="white" />
                            </svg>

                            <span class="text-white text-lg font-bold ml-3">Play</span>
                        </a>
                    </div>
                    <p class="font-bold text-2xl text-center mt-11">Cody Fisher</p>
                    <p class="font-normal text-base text-[#6E6E6E] text-center mt-3">Digital Marketing at Bukalapak</p>
                    <div class="flex justify-center mt-3 mb-8">
                        <svg width="93" height="24" viewBox="0 0 93 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_2)">
                                <path
                                    d="M20.9491 20.4222H17.3931V14.8606C17.3931 13.5344 17.3694 11.8271 15.5436 11.8271C13.6914 11.8271 13.4081 13.2722 13.4081 14.7641V20.4218H9.85216V8.98496H13.2658V10.5479H13.3137C13.6553 9.96456 14.149 9.48464 14.7421 9.15928C15.3353 8.834 16.0057 8.67536 16.6819 8.70048C20.2862 8.70048 20.9506 11.068 20.9506 14.1481L20.9491 20.4222ZM5.83962 7.42171C4.6999 7.4219 3.77582 6.49932 3.77562 5.36112C3.77544 4.22292 4.69916 3.30006 5.83887 3.29987C6.97859 3.29959 7.90269 4.22217 7.90287 5.36037C7.90298 5.90695 7.68566 6.43119 7.29872 6.81777C6.91179 7.20434 6.38694 7.42158 5.83962 7.42171ZM7.61769 20.4223H4.0579V8.98496H7.61759L7.61769 20.4223ZM22.7219 0.00174441H2.27103C1.30447 -0.00911608 0.511812 0.764133 0.5 1.72941V22.2382C0.511438 23.204 1.304 23.978 2.27094 23.9678H22.7219C23.691 23.9798 24.4866 23.2058 24.5 22.2382V1.72782C24.4862 0.760669 23.6905 -0.0124866 22.7219 0.000152785"
                                    fill="#262626" />
                            </g>
                            <path
                                d="M35.412 6.432H33.844V18H40.5V16.544H35.412V6.432ZM42.6834 8.32C43.2274 8.32 43.6754 7.872 43.6754 7.328C43.6754 6.768 43.2274 6.336 42.6834 6.336C42.1394 6.336 41.6914 6.768 41.6914 7.328C41.6914 7.872 42.1394 8.32 42.6834 8.32ZM41.9474 18H43.4514V10.176H41.9474V18ZM47.1389 18V13.856C47.1389 12.336 47.9549 11.328 49.3629 11.328C50.5149 11.328 51.2509 11.968 51.2509 13.552V18H52.7549V13.216C52.7549 11.216 51.8109 9.952 49.7469 9.952C48.6429 9.952 47.6509 10.48 47.1549 11.376L46.9949 10.176H45.6349V18H47.1389ZM56.374 18V15.776L57.702 14.384L59.99 18H61.718L58.742 13.296L61.734 10.176H59.846L56.374 13.856V6.224H54.87V18H56.374ZM66.0421 18.192C67.9781 18.192 69.2901 17.248 69.6741 15.568H68.2661C68.0101 16.464 67.2421 16.944 66.0741 16.944C64.5861 16.944 63.7221 16.032 63.6101 14.384L69.6581 14.368V13.808C69.6581 11.488 68.2021 9.952 65.9781 9.952C63.7061 9.952 62.1541 11.648 62.1541 14.096C62.1541 16.528 63.7381 18.192 66.0421 18.192ZM65.9781 11.216C67.3061 11.216 68.1541 12.08 68.1541 13.376H63.6421C63.8341 12 64.6661 11.216 65.9781 11.216ZM74.474 18.192C75.722 18.192 76.778 17.648 77.29 16.576L77.418 18H78.762V6.224H77.274V11.44C76.746 10.48 75.738 9.952 74.538 9.952C72.218 9.952 70.826 11.712 70.826 14.112C70.826 16.496 72.202 18.192 74.474 18.192ZM74.778 16.832C73.242 16.832 72.346 15.68 72.346 14.064C72.346 12.464 73.242 11.312 74.778 11.312C76.314 11.312 77.258 12.464 77.258 14.064C77.258 15.696 76.314 16.832 74.778 16.832ZM82.7558 6.432H81.1878V18H82.7558V6.432ZM86.7014 18V13.856C86.7014 12.336 87.5174 11.328 88.9254 11.328C90.0774 11.328 90.8134 11.968 90.8134 13.552V18H92.3174V13.216C92.3174 11.216 91.3734 9.952 89.3094 9.952C88.2054 9.952 87.2134 10.48 86.7174 11.376L86.5574 10.176H85.1974V18H86.7014Z"
                                fill="black" />
                            <path d="M32.5 21.76H93.3094V23.04H32.5V21.76Z" fill="black" />
                            <defs>
                                <clipPath id="clip0_1_2">
                                    <rect width="24" height="24" fill="white" transform="translate(0.5)" />
                                </clipPath>
                            </defs>
                        </svg>

                    </div>
                </div>
            </div>
            <div class="w-1/3 px-3">
                <div class="relative bg-white p-6 rounded-lg shadow-sm">
                    <img src="{{ Vite::asset('resources/image/avatar/person_2.png') }}" alt="person 1"
                        class="rounded-lg w-full">
                    <div class="flex justify-center -mt-7">
                        <a href=""
                            class="bg-[#FF9500] px-4 py-3 rounded-lg flex w-32 justify-center items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0ZM8.72123 17.2193V6.7807L17.7613 12L8.72123 17.2193Z"
                                    fill="white" />
                            </svg>

                            <span class="text-white text-lg font-bold ml-3">Play</span>
                        </a>
                    </div>
                    <p class="font-bold text-2xl text-center mt-11">Arlene McCoy</p>
                    <p class="font-normal text-base text-[#6E6E6E] text-center mt-3">DigData Science at Grab</p>
                    <div class="flex justify-center mt-3 mb-8">
                        <svg width="93" height="24" viewBox="0 0 93 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_2)">
                                <path
                                    d="M20.9491 20.4222H17.3931V14.8606C17.3931 13.5344 17.3694 11.8271 15.5436 11.8271C13.6914 11.8271 13.4081 13.2722 13.4081 14.7641V20.4218H9.85216V8.98496H13.2658V10.5479H13.3137C13.6553 9.96456 14.149 9.48464 14.7421 9.15928C15.3353 8.834 16.0057 8.67536 16.6819 8.70048C20.2862 8.70048 20.9506 11.068 20.9506 14.1481L20.9491 20.4222ZM5.83962 7.42171C4.6999 7.4219 3.77582 6.49932 3.77562 5.36112C3.77544 4.22292 4.69916 3.30006 5.83887 3.29987C6.97859 3.29959 7.90269 4.22217 7.90287 5.36037C7.90298 5.90695 7.68566 6.43119 7.29872 6.81777C6.91179 7.20434 6.38694 7.42158 5.83962 7.42171ZM7.61769 20.4223H4.0579V8.98496H7.61759L7.61769 20.4223ZM22.7219 0.00174441H2.27103C1.30447 -0.00911608 0.511812 0.764133 0.5 1.72941V22.2382C0.511438 23.204 1.304 23.978 2.27094 23.9678H22.7219C23.691 23.9798 24.4866 23.2058 24.5 22.2382V1.72782C24.4862 0.760669 23.6905 -0.0124866 22.7219 0.000152785"
                                    fill="#262626" />
                            </g>
                            <path
                                d="M35.412 6.432H33.844V18H40.5V16.544H35.412V6.432ZM42.6834 8.32C43.2274 8.32 43.6754 7.872 43.6754 7.328C43.6754 6.768 43.2274 6.336 42.6834 6.336C42.1394 6.336 41.6914 6.768 41.6914 7.328C41.6914 7.872 42.1394 8.32 42.6834 8.32ZM41.9474 18H43.4514V10.176H41.9474V18ZM47.1389 18V13.856C47.1389 12.336 47.9549 11.328 49.3629 11.328C50.5149 11.328 51.2509 11.968 51.2509 13.552V18H52.7549V13.216C52.7549 11.216 51.8109 9.952 49.7469 9.952C48.6429 9.952 47.6509 10.48 47.1549 11.376L46.9949 10.176H45.6349V18H47.1389ZM56.374 18V15.776L57.702 14.384L59.99 18H61.718L58.742 13.296L61.734 10.176H59.846L56.374 13.856V6.224H54.87V18H56.374ZM66.0421 18.192C67.9781 18.192 69.2901 17.248 69.6741 15.568H68.2661C68.0101 16.464 67.2421 16.944 66.0741 16.944C64.5861 16.944 63.7221 16.032 63.6101 14.384L69.6581 14.368V13.808C69.6581 11.488 68.2021 9.952 65.9781 9.952C63.7061 9.952 62.1541 11.648 62.1541 14.096C62.1541 16.528 63.7381 18.192 66.0421 18.192ZM65.9781 11.216C67.3061 11.216 68.1541 12.08 68.1541 13.376H63.6421C63.8341 12 64.6661 11.216 65.9781 11.216ZM74.474 18.192C75.722 18.192 76.778 17.648 77.29 16.576L77.418 18H78.762V6.224H77.274V11.44C76.746 10.48 75.738 9.952 74.538 9.952C72.218 9.952 70.826 11.712 70.826 14.112C70.826 16.496 72.202 18.192 74.474 18.192ZM74.778 16.832C73.242 16.832 72.346 15.68 72.346 14.064C72.346 12.464 73.242 11.312 74.778 11.312C76.314 11.312 77.258 12.464 77.258 14.064C77.258 15.696 76.314 16.832 74.778 16.832ZM82.7558 6.432H81.1878V18H82.7558V6.432ZM86.7014 18V13.856C86.7014 12.336 87.5174 11.328 88.9254 11.328C90.0774 11.328 90.8134 11.968 90.8134 13.552V18H92.3174V13.216C92.3174 11.216 91.3734 9.952 89.3094 9.952C88.2054 9.952 87.2134 10.48 86.7174 11.376L86.5574 10.176H85.1974V18H86.7014Z"
                                fill="black" />
                            <path d="M32.5 21.76H93.3094V23.04H32.5V21.76Z" fill="black" />
                            <defs>
                                <clipPath id="clip0_1_2">
                                    <rect width="24" height="24" fill="white" transform="translate(0.5)" />
                                </clipPath>
                            </defs>
                        </svg>

                    </div>
                </div>
            </div>
            <div class="w-1/3 px-3">
                <div class="relative bg-white p-6 rounded-lg shadow-sm">
                    <img src="{{ Vite::asset('resources/image/avatar/person_3.png') }}" alt="person 1"
                        class="rounded-lg w-full">
                    <div class="flex justify-center -mt-7">
                        <a href=""
                            class="bg-[#FF9500] px-4 py-3 rounded-lg flex w-32 justify-center items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0ZM8.72123 17.2193V6.7807L17.7613 12L8.72123 17.2193Z"
                                    fill="white" />
                            </svg>

                            <span class="text-white text-lg font-bold ml-3">Play</span>
                        </a>
                    </div>
                    <p class="font-bold text-2xl text-center mt-11">Theresa Webb</p>
                    <p class="font-normal text-base text-[#6E6E6E] text-center mt-3">Digital Marketing at Detik.com</p>
                    <div class="flex justify-center mt-3 mb-8">
                        <svg width="93" height="24" viewBox="0 0 93 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_2)">
                                <path
                                    d="M20.9491 20.4222H17.3931V14.8606C17.3931 13.5344 17.3694 11.8271 15.5436 11.8271C13.6914 11.8271 13.4081 13.2722 13.4081 14.7641V20.4218H9.85216V8.98496H13.2658V10.5479H13.3137C13.6553 9.96456 14.149 9.48464 14.7421 9.15928C15.3353 8.834 16.0057 8.67536 16.6819 8.70048C20.2862 8.70048 20.9506 11.068 20.9506 14.1481L20.9491 20.4222ZM5.83962 7.42171C4.6999 7.4219 3.77582 6.49932 3.77562 5.36112C3.77544 4.22292 4.69916 3.30006 5.83887 3.29987C6.97859 3.29959 7.90269 4.22217 7.90287 5.36037C7.90298 5.90695 7.68566 6.43119 7.29872 6.81777C6.91179 7.20434 6.38694 7.42158 5.83962 7.42171ZM7.61769 20.4223H4.0579V8.98496H7.61759L7.61769 20.4223ZM22.7219 0.00174441H2.27103C1.30447 -0.00911608 0.511812 0.764133 0.5 1.72941V22.2382C0.511438 23.204 1.304 23.978 2.27094 23.9678H22.7219C23.691 23.9798 24.4866 23.2058 24.5 22.2382V1.72782C24.4862 0.760669 23.6905 -0.0124866 22.7219 0.000152785"
                                    fill="#262626" />
                            </g>
                            <path
                                d="M35.412 6.432H33.844V18H40.5V16.544H35.412V6.432ZM42.6834 8.32C43.2274 8.32 43.6754 7.872 43.6754 7.328C43.6754 6.768 43.2274 6.336 42.6834 6.336C42.1394 6.336 41.6914 6.768 41.6914 7.328C41.6914 7.872 42.1394 8.32 42.6834 8.32ZM41.9474 18H43.4514V10.176H41.9474V18ZM47.1389 18V13.856C47.1389 12.336 47.9549 11.328 49.3629 11.328C50.5149 11.328 51.2509 11.968 51.2509 13.552V18H52.7549V13.216C52.7549 11.216 51.8109 9.952 49.7469 9.952C48.6429 9.952 47.6509 10.48 47.1549 11.376L46.9949 10.176H45.6349V18H47.1389ZM56.374 18V15.776L57.702 14.384L59.99 18H61.718L58.742 13.296L61.734 10.176H59.846L56.374 13.856V6.224H54.87V18H56.374ZM66.0421 18.192C67.9781 18.192 69.2901 17.248 69.6741 15.568H68.2661C68.0101 16.464 67.2421 16.944 66.0741 16.944C64.5861 16.944 63.7221 16.032 63.6101 14.384L69.6581 14.368V13.808C69.6581 11.488 68.2021 9.952 65.9781 9.952C63.7061 9.952 62.1541 11.648 62.1541 14.096C62.1541 16.528 63.7381 18.192 66.0421 18.192ZM65.9781 11.216C67.3061 11.216 68.1541 12.08 68.1541 13.376H63.6421C63.8341 12 64.6661 11.216 65.9781 11.216ZM74.474 18.192C75.722 18.192 76.778 17.648 77.29 16.576L77.418 18H78.762V6.224H77.274V11.44C76.746 10.48 75.738 9.952 74.538 9.952C72.218 9.952 70.826 11.712 70.826 14.112C70.826 16.496 72.202 18.192 74.474 18.192ZM74.778 16.832C73.242 16.832 72.346 15.68 72.346 14.064C72.346 12.464 73.242 11.312 74.778 11.312C76.314 11.312 77.258 12.464 77.258 14.064C77.258 15.696 76.314 16.832 74.778 16.832ZM82.7558 6.432H81.1878V18H82.7558V6.432ZM86.7014 18V13.856C86.7014 12.336 87.5174 11.328 88.9254 11.328C90.0774 11.328 90.8134 11.968 90.8134 13.552V18H92.3174V13.216C92.3174 11.216 91.3734 9.952 89.3094 9.952C88.2054 9.952 87.2134 10.48 86.7174 11.376L86.5574 10.176H85.1974V18H86.7014Z"
                                fill="black" />
                            <path d="M32.5 21.76H93.3094V23.04H32.5V21.76Z" fill="black" />
                            <defs>
                                <clipPath id="clip0_1_2">
                                    <rect width="24" height="24" fill="white" transform="translate(0.5)" />
                                </clipPath>
                            </defs>
                        </svg>

                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-8">
            <button
                class="text-[#FF9500] font-bold text-lg px-10 py-5 rounded-lg li outline outline-1 outline-[#FF9500]">See
                More</button>
        </div>
    </section>
    <section class="alumni-say mt-28 w-10/12 mx-auto">
        <p class="text-black font-black text-4xl text-center w-1/2 mx-auto">What alumni say about<br />QarirLabs</p>
        <p class="font-medium text-lg text-[#262626] opacity-60 text-center w-2/4 mx-auto mt-5">Our main focus is to
            provide the best learning experience for students, here are some testimonials from our alumni</p>
        <div class="flex flex-wrap mt-8">
            <div class="w-1/3 p-3">
                <div class="bg-white rounded-lg p-8 shadow-sm">
                    <div class="flex ">
                        <img src="{{ Vite::asset('resources/image/avatar/avatar_1.png') }}" alt="avatar 1"
                            class="w-12 h-12">
                        <div class="ml-5">
                            <p class="font-medium text-base text-black">Guy Hawkins</p>
                            <p class="font-medium text-xs text-[#0E144A] opacity-60">Data Science at GOTO</p>
                        </div>
                    </div>
                    <p class="font-medium text-base text-[#262626] mt-5">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Phasellus egestas, urna eu consequat consequat, leo velit eleifend urna, a
                        lobortis sapien nibh tristique mi. Duis arcu nulla.</p>
                </div>
            </div>
            <div class="w-1/3 p-3">
                <div class="bg-white rounded-lg p-8 shadow-sm">
                    <div class="flex ">
                        <img src="{{ Vite::asset('resources/image/avatar/avatar_2.png') }}" alt="avatar 1"
                            class="w-12 h-12">
                        <div class="ml-5">
                            <p class="font-medium text-base text-black">Dianne Russell</p>
                            <p class="font-medium text-xs text-[#0E144A] opacity-60">Digital Marketing at Tik Tok</p>
                        </div>
                    </div>
                    <p class="font-medium text-base text-[#262626] mt-5">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Phasellus egestas, urna eu consequat consequat, leo velit eleifend urna, a
                        lobortis sapien nibh tristique mi. Duis arcu nulla.</p>
                </div>
            </div>
            <div class="w-1/3 p-3">
                <div class="bg-white rounded-lg p-8 shadow-sm">
                    <div class="flex ">
                        <img src="{{ Vite::asset('resources/image/avatar/avatar_3.png') }}" alt="avatar 1"
                            class="w-12 h-12">
                        <div class="ml-5">
                            <p class="font-medium text-base text-black">Kristin Watson</p>
                            <p class="font-medium text-xs text-[#0E144A] opacity-60">Digital Marketing at Shopee</p>
                        </div>
                    </div>
                    <p class="font-medium text-base text-[#262626] mt-5">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Phasellus egestas, urna eu consequat consequat, leo velit eleifend urna, a
                        lobortis sapien nibh tristique mi. Duis arcu nulla.</p>
                </div>
            </div>
            <div class="w-1/3 p-3">
                <div class="bg-white rounded-lg p-8 shadow-sm">
                    <div class="flex ">
                        <img src="{{ Vite::asset('resources/image/avatar/avatar_4.png') }}" alt="avatar 1"
                            class="w-12 h-12">
                        <div class="ml-5">
                            <p class="font-medium text-base text-black">Arlene McCoy</p>
                            <p class="font-medium text-xs text-[#0E144A] opacity-60">Data Science at Tokopedia</p>
                        </div>
                    </div>
                    <p class="font-medium text-base text-[#262626] mt-5">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Phasellus egestas, urna eu consequat consequat, leo velit eleifend urna, a
                        lobortis sapien nibh tristique mi. Duis arcu nulla.</p>
                </div>
            </div>
            <div class="w-1/3 p-3">
                <div class="bg-white rounded-lg p-8 shadow-sm">
                    <div class="flex ">
                        <img src="{{ Vite::asset('resources/image/avatar/avatar_5.png') }}" alt="avatar 1"
                            class="w-12 h-12">
                        <div class="ml-5">
                            <p class="font-medium text-base text-black">Jacob Jones</p>
                            <p class="font-medium text-xs text-[#0E144A] opacity-60">Software Engineer at Tik Tok</p>
                        </div>
                    </div>
                    <p class="font-medium text-base text-[#262626] mt-5">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Phasellus egestas, urna eu consequat consequat, leo velit eleifend urna, a
                        lobortis sapien nibh tristique mi. Duis arcu nulla.</p>
                </div>
            </div>
            <div class="w-1/3 p-3">
                <div class="bg-white rounded-lg p-8 shadow-sm">
                    <div class="flex ">
                        <img src="{{ Vite::asset('resources/image/avatar/avatar_6.png') }}" alt="avatar 1"
                            class="w-12 h-12">
                        <div class="ml-5">
                            <p class="font-medium text-base text-black">Albert Flores</p>
                            <p class="font-medium text-xs text-[#0E144A] opacity-60">Software Engineer at GOTO</p>
                        </div>
                    </div>
                    <p class="font-medium text-base text-[#262626] mt-5">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Phasellus egestas, urna eu consequat consequat, leo velit eleifend urna, a
                        lobortis sapien nibh tristique mi. Duis arcu nulla.</p>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-8">
            <button class="text-white font-bold text-lg px-10 py-5 rounded-lg bg-[#FF9500]">Upgrade Skill Now</button>
        </div>
    </section>
    <section class="ready mt-20">
        <div class="relative flex justify-end">
            <img src="{{ Vite::asset('resources/image/ilustration/ilustration_2.png') }}" alt="ilustration 2"
                class="h-80">
            <div class="absolute top-0 left-0 h-80 w-full"
                style="background: linear-gradient(90.49deg, #00263D 36.68%, rgba(255, 255, 255, 0) 98.95%);"></div>
            <div class="absolute top-0 left-0 h-80 w-full flex justify-start items-center ">
                <div class="flex flex-col ml-28">
                    <p class="font-black text-4xl text-white">Ready to be the next <br />digital talent?</p>
                    <div>
                        <button
                            class="bg-[#FF9500] px-10 py-2 rounded-md text-[#262626] text-lg font-bold mb-11 mt-6">Contact
                            Us
                            Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="faq mt-20">
        <div class="font-black text-4xl text-center mb-11">Frequently <div class="inline-block relative">
                <div class="relative z-10">Asked</div>
                <div class="-z-10">
                    <div class="absolute bottom-0 right-0 w-28 h-3 bg-[#FF9500]"></div>
                </div>
            </div> Questions</div>
        <div class="w-1/2 mx-auto">
            <ul>
                <li>
                    <div class="flex justify-between items-center">
                        <p class="font-bold text-xl pt-3">What's the difference between the part-time and full-time
                            options?
                        </p>
                        <svg width="18" height="10" viewBox="0 0 18 10" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L9 9L17 1" stroke="#262626" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <hr class="border-dashed border-1 my-2 pb-2">
                </li>
                <li>
                    <div class="flex justify-between items-center">
                        <p class="font-bold text-xl pt-3">How does the learning process work?</p>
                        <svg width="18" height="10" viewBox="0 0 18 10" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L9 9L17 1" stroke="#262626" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <hr class="border-dashed border-1 my-2 pb-2">
                </li>
                <li>
                    <div class="flex justify-between items-center">
                        <p class="font-bold text-xl pt-3">Will I get a new job after graduation?</p>
                        <svg width="18" height="10" viewBox="0 0 18 10" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L9 9L17 1" stroke="#262626" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <hr class="border-dashed border-1 my-2 pb-2">
                </li>
                <li>
                    <div class="flex justify-between items-center">
                        <p class="font-bold text-xl pt-3">What if I don’t get a new job?</p>
                        <svg width="18" height="10" viewBox="0 0 18 10" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L9 9L17 1" stroke="#262626" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <hr class="border-dashed border-1 my-2 pb-2">
                </li>
                <li>
                    <div class="flex justify-between items-center">
                        <p class="font-bold text-xl pt-3">What career services do you offer?</p>
                        <svg width="18" height="10" viewBox="0 0 18 10" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L9 9L17 1" stroke="#262626" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <hr class="border-dashed border-1 my-2 pb-2">
                </li>
            </ul>
        </div>
    </section> --}}

    <section class="faq mt-20 w-10/12 mx-auto">
        <div class="flex flex-row justify-center items-center">
            <div class="mx-10">
                <img src="{{ Vite::asset('resources/image/ilustration/ilustration_9.png') }}" alt="ilustration 9"
                    class="object-contain rounded-xl">
            </div>
            <div class="mx-10">
                <p class="font-bold text-4xl text-black">Are you an Enterprise looking for Tech Training or Talent ?
                </p>
                <p class="font-medium text-lg text-[#262626] opacity-60">Transform your teams with QarirLabs corporate
                    training or hire our tech-alumni now.</p>
                <button class="bg-[#FF9500] px-10 py-4 rounded-md text-[#262626] text-lg font-bold mb-11 mt-6">Contact
                    Our Partnership Team</button>
            </div>
        </div>
    </section>

    <section class="media mt-20 mb-24">
        <p class="font-black text-4xl text-center">The media that has covered us</p>
        <div class="flex w-1/2 mx-auto justify-center items-end mt-8">
            <img src="{{ Vite::asset('resources/image/icon/net.png') }}" alt="net" class="h-8 mx-8">
            <img src="{{ Vite::asset('resources/image/icon/techinasia.png') }}" alt="net" class="h-8 mx-8">
            <img src="{{ Vite::asset('resources/image/icon/compas.png') }}" alt="net" class="h-8 mx-8">
        </div>
    </section>
</x-landing-layout>
