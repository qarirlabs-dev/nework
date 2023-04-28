<x-landing-layout>
    <section class="hero static bg-gradient-to-t from-[#d6f9e8] to-[#FFFFFF] w-full h-[60rem] lg:h-[50rem] -mt-20">
        <svg class="absolute left-0 top-40 lg:h-96 lg:w-96 h-80 w-80" viewBox="0 0 572 624" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.3" filter="url(#filter0_f_33_300)">
                <circle cx="144.5" cy="348.5" r="193.5" fill="#1AD079" />
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
            <div class="flex flex-col lg:flex-row justify-between items-center w-full lg:w-10/12 mx-auto">
                <div class="lg:hidden flex-auto" data-aos="fade-up">
                    <img src="{{ Vite::asset('resources/image/ilustration/ilustration_enterprise.png') }}"
                        alt="ilustration 1">
                </div>
                <div class="flex-auto w-11/12 lg:w-6/12" data-aos="fade-up">
                    <div class="hidden lg:block text-2xl lg:text-5xl font-black lg:leading-normal mb-4 lg:mt-16">
                        {{config('app.name')}} for Business, <br><span class="bg-[#1AD079] px-2 text-white rounded-lg">Train Your
                            Team</span> or Let Us Handle Your Project.
                    </div>
                    <div class="lg:hidden text-4xl lg:text-5xl font-black mb-4 lg:mt-16">{{config('app.name')}} for Business, <br><span
                            class="bg-[#1AD079] px-2 text-white rounded-lg">Train Your Team</span> or Let Us Handle Your
                        Project.
                    </div>
                    <div class="text-[#262626] font-normal text-sm lg:text-xl mb-6 text-opacity-75 w-full lg:w-10/12">
                        Allow your team to become more productive, creative, and updated with new skills and tech
                        training or you can accelerate your business by allowing us to handle some parts.</div>
                    <div class="flex">
                        <a href="#classes"
                            class="bg-[#1AD079] z-30 lg:px-10 lgpy-4 px-4 py-3 w-full lg:w-auto rounded-full text-white text-center text-lg font-bold lg:mb-8 mt-6">Find
                            Solution</a>
                    </div>
                </div>
                <div class="hidden lg:flex justify-end lg:w-6/12" data-aos="fade-up">
                    <img src="{{ Vite::asset('resources/image/ilustration/ilustration_enterprise.png') }}"
                        alt="ilustration 1" class="h-[35rem]">
                </div>
            </div>
            <div class="flex items-center w-10/12 lg:w-10/12 mx-auto mt-2" data-aos="fade-up">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M25.3375 20.3314L26.2188 15.2314C26.2705 14.9325 26.2563 14.6259 26.1771 14.333C26.0979 14.0402 25.9558 13.7681 25.7605 13.536C25.5653 13.3038 25.3216 13.1171 25.0467 12.9889C24.7717 12.8607 24.4721 12.7942 24.1688 12.7939H17.6925C17.5414 12.7939 17.392 12.761 17.2549 12.6976C17.1177 12.6341 16.996 12.5415 16.8983 12.4262C16.8005 12.311 16.729 12.1758 16.6887 12.0301C16.6484 11.8844 16.6403 11.7317 16.665 11.5826L17.4938 6.52638C17.6282 5.70543 17.5899 4.86544 17.3813 4.06013C17.292 3.72738 17.12 3.42261 16.8814 3.17413C16.6427 2.92565 16.3451 2.74153 16.0163 2.63888L15.835 2.58013C15.4252 2.44849 14.9806 2.47891 14.5925 2.66513C14.1675 2.87013 13.8575 3.24388 13.7425 3.68763L13.1475 5.98013C12.9581 6.70967 12.6828 7.41417 12.3275 8.07888C11.8088 9.05013 11.0063 9.82888 10.1713 10.5476L8.37251 12.0976C8.12297 12.3133 7.92807 12.585 7.80379 12.8905C7.67951 13.1959 7.62938 13.5265 7.65751 13.8551L8.67251 25.5964C8.71724 26.1156 8.95506 26.5993 9.339 26.9517C9.72293 27.3042 10.2251 27.4999 10.7463 27.5001H16.5563C20.9088 27.5001 24.6225 24.4676 25.3375 20.3314Z"
                        fill="#1AD079" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M3.70998 11.8564C3.95155 11.8458 4.18786 11.929 4.36955 12.0885C4.55124 12.2481 4.66425 12.4717 4.68498 12.7126L5.89748 26.7576C5.91801 26.9668 5.8957 27.1779 5.8319 27.3781C5.7681 27.5784 5.66415 27.7635 5.5264 27.9222C5.38865 28.081 5.22 28.2099 5.03073 28.3013C4.84146 28.3926 4.63556 28.4444 4.4256 28.4535C4.21564 28.4626 4.00603 28.4288 3.80957 28.3542C3.61311 28.2796 3.43392 28.1657 3.28295 28.0195C3.13198 27.8733 3.0124 27.6979 2.93151 27.5039C2.85062 27.3099 2.81011 27.1015 2.81248 26.8914V12.7926C2.81258 12.551 2.90598 12.3187 3.07321 12.1443C3.24043 11.9698 3.46855 11.8667 3.70998 11.8564Z"
                        fill="#1AD079" />
                </svg>

                <p class="font-bold text-xl text-[#262626] ml-3">Over 100+ organizations satisfied with our work</p>
            </div>
        </div>
    </section>
    <section class="w-full lg:w-10/12 mx-auto mt-14" data-aos="fade-up">
        <div class="font-black text-2xl lg:text-4xl z-1 text-center">
            Train Your
            <div class="inline-block relative">
                <div class="relative z-10">Business Team</div>
                <div class="-z-10">
                    <div class="absolute bottom-0 right-0 w-24 lg:w-[16.6rem] h-3 bg-[#1AD079]"></div>
                </div>
            </div>
        </div>
        <div class="flex lg:flex-row flex-col lg:justify-between justify-center w-8/12 mx-auto mt-8">
            <div class="flex items-center lg:justify-start my-2">
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="10" cy="10.5" r="10" fill="#1AD079" />
                    <path d="M5.83337 10.5L8.46495 13L14.1667 8" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>

                <p class="font-medium text-base text-[#262626] ml-2">Personalized Curriculum</p>
            </div>
            <div class="flex items-center lg:justify-start my-2">
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="10" cy="10.5" r="10" fill="#1AD079" />
                    <path d="M5.83337 10.5L8.46495 13L14.1667 8" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>

                <p class="font-medium text-base text-[#262626] ml-2">More practical, More Fun</p>
            </div>
            <div class="flex items-center lg:justify-start my-2">
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="10" cy="10.5" r="10" fill="#1AD079" />
                    <path d="M5.83337 10.5L8.46495 13L14.1667 8" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <p class="font-medium text-base text-[#262626] ml-2">World's Best Trainer</p>
            </div>
            <div class="flex items-center lg:justify-start my-2">
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="10" cy="10.5" r="10" fill="#1AD079" />
                    <path d="M5.83337 10.5L8.46495 13L14.1667 8" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <p class="font-medium text-base text-[#262626] ml-2">Post-Training Support</p>
            </div>
        </div>
        <div class="mt-12 flex lg:flex-nowrap flex-wrap lg:w-7/12 w-11/12 mx-auto">
            <div class="w-full my-4 lg:my-0 lg:w-1/2 lg:first:mr-3">
                <div class="rounded-2xl outline outline-1 outline-[#E5E7EB] p-4 lg:h-[37rem]">
                    <img src="{{ Vite::asset('resources/image/ilustration/enterprise_ilustration_card_1.png') }}"
                        alt="ilustration 1" class="rounded-t-2xl w-full object-contain">
                    <div class="mt-6">
                        <p class="font-bold text-2xl text-[#262626]">
                            Training for Agile & Scrum, Creative Design, Risk Management, or Hospitality.
                        </p>
                        <p class="font-normal text-base text-[#6E6E6E] mt-3">{{config('app.name')}} is your #1 Ranked Career
                            Accelerator</p>
                    </div>
                </div>
            </div>
            <div class="w-full my-4 lg:my-0 lg:w-1/2 lg:last:ml-3">
                <div class="rounded-2xl outline outline-1 outline-[#E5E7EB] p-4 lg:h-[37rem]">
                    <img src="{{ Vite::asset('resources/image/ilustration/enterprise_ilustration_card_2.png') }}"
                        alt="ilustration 1" class="rounded-t-2xl w-full object-contain">
                    <div class="mt-6">
                        <p class="font-bold text-2xl text-[#262626]">
                            Training for Data & Tech
                        </p>
                        <p class="font-normal text-base text-[#6E6E6E] mt-3">Follow the tech transformation and be
                            agile! Improve your team now!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full bg-[#ECFFF6] mt-20 py-20" data-aos="fade-up">
        <div class="flex lg:flex-row flex-col w-full lg:w-10/12 mx-auto">
            <div class="flex lg:hidden p-6  justify-center">
                <div class="flex lg:hidden justify-center" data-aos="fade-up">
                    <div class="relative w-72 h-72">
                        <div class="absolute -top-7 -right-7 w-24 h-24 -z-10">
                            <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="5" cy="5" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="21" cy="5" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="37" cy="5" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="53" cy="5" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="69" cy="5" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="85" cy="5" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="5" cy="21" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="21" cy="21" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="37" cy="21" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="53" cy="21" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="69" cy="21" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="85" cy="21" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="5" cy="37" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="21" cy="37" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="37" cy="37" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="53" cy="37" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="69" cy="37" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="85" cy="37" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="5" cy="53" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="21" cy="53" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="37" cy="53" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="53" cy="53" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="69" cy="53" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="85" cy="53" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="5" cy="69" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="21" cy="69" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="37" cy="69" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="53" cy="69" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="69" cy="69" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="85" cy="69" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="5" cy="85" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="21" cy="85" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="37" cy="85" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="53" cy="85" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="69" cy="85" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                                <circle cx="85" cy="85" r="5" fill="#D2D6DB"
                                    fill-opacity="0.6" />
                            </svg>
                        </div>
                        <img src="{{ Vite::asset('resources/image/ilustration/enterppise_ilustration_3.png') }}"
                            alt="ilustration 2" class="rounded-tl-3xl rounded-br-3xl w-72 object-contain">
                        <div class="absolute -bottom-16 -right-3 w-20 h-20">
                            <svg width="80" height="80" viewBox="0 0 100 100" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="50" cy="50" r="50" fill="#FF9500" />
                            </svg>
                        </div>
                        <div class="absolute top-3 left-7 w-8 h-8">
                            <svg width="32" height="32" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20" cy="20" r="20" fill="#1AD079" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-11/12 lg:w-1/2 mx-auto" data-aos="fade-up">
                <p class="font-bold text-base text-[#262626] uppercase lg:mt-0 mt-20">FIND SOLUTION</p>
                <p class="font-black text-3xl text-[#262626] capitalize mt-6">Achieve new level, gain more revenue,
                    #AllowUs to make it happen.</p>
                <div class="mt-10">
                    <ul>
                        <li class="flex flex-row items-center my-2">
                            <div class="w-5 h-50">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10.5" r="10" fill="#1AD079" />
                                    <path d="M5.83337 10.5L8.46495 13L14.1667 8" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <p class="ml-2 font-medium text-sm lg:text-base text-[#262626]">Personalized Curriculum</p>
                        </li>
                        <li class="flex flex-row items-center my-2">
                            <div class="w-5 h-50">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10.5" r="10" fill="#1AD079" />
                                    <path d="M5.83337 10.5L8.46495 13L14.1667 8" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <p class="ml-2 font-medium text-sm lg:text-base text-[#262626]">Create personalized service you need :
                                from digital marketing services, data consulting, advertising, or recruitment.</p>
                        </li>
                        <li class="flex flex-row items-center my-2">
                            <div class="w-5 h-50">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10.5" r="10" fill="#1AD079" />
                                    <path d="M5.83337 10.5L8.46495 13L14.1667 8" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <p class="ml-2 font-medium text-sm lg:text-base text-[#262626]">Get support 24/7 consultation from our
                                expert from New york city, Istanbul, London, and Jakarta</p>
                        </li>
                        <li class="flex flex-row items-center my-2">
                            <div class="w-5 h-50">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10.5" r="10" fill="#1AD079" />
                                    <path d="M5.83337 10.5L8.46495 13L14.1667 8" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <p class="ml-2 font-medium text-sm lg:text-base text-[#262626]">Reduce your cost and accelerate your
                                level with us.</p>
                        </li>
                    </ul>
                </div>
                <button class="bg-[#1AD079] px-10 py-4 rounded-full text-white font-bold text-lg mt-10 w-full lg:w-auto">
                    Allow Us
                </button>
            </div>
            <div class="hidden lg:w-1/2 lg:flex justify-center" data-aos="fade-up">
                <div class="relative w-[26rem] h-[31rem]">
                    <div class="absolute -top-7 -right-7 w-24 h-24 -z-10">
                        <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="5" cy="5" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="21" cy="5" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="37" cy="5" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="53" cy="5" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="69" cy="5" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="85" cy="5" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="5" cy="21" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="21" cy="21" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="37" cy="21" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="53" cy="21" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="69" cy="21" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="85" cy="21" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="5" cy="37" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="21" cy="37" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="37" cy="37" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="53" cy="37" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="69" cy="37" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="85" cy="37" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="5" cy="53" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="21" cy="53" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="37" cy="53" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="53" cy="53" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="69" cy="53" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="85" cy="53" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="5" cy="69" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="21" cy="69" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="37" cy="69" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="53" cy="69" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="69" cy="69" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="85" cy="69" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="5" cy="85" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="21" cy="85" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="37" cy="85" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="53" cy="85" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="69" cy="85" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                            <circle cx="85" cy="85" r="5" fill="#D2D6DB"
                                fill-opacity="0.6" />
                        </svg>
                    </div>
                    <img src="{{ Vite::asset('resources/image/ilustration/enterppise_ilustration_3.png') }}"
                        alt="ilustration 2" class="rounded-tl-3xl rounded-br-3xl w-[26rem] object-contain">
                    <div class="absolute bottom-0 right-0 w-24 h-24">
                        <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50" fill="#FF9500" />
                        </svg>
                    </div>
                    <div class="absolute top-7 left-7 w-10 h-10">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="20" cy="20" r="20" fill="#1AD079" />
                        </svg>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-landing-layout>
