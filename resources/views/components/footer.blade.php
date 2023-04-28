<footer>
    <div class="relative w-full h-[80rem] lg:h-[45rem] bg-[#00263D] flex justify-center items-start">
        <img src="{{Vite::asset('resources/image/ilustration/word_map.png')}}" alt="word" class="absolute top-0 h-[30rem] w-auto opacity-30 object-contain">
        <div class="flex flex-col lg:flex-row w-full lg:w-10/12">
            <div class="lg:mt-11 lg:mx-12 p-5 lg:p-0 w-full lg:w-1/2">
                <img src="{{Vite::asset('resources/image/icon/logo_hozontal_color_white.png')}}" alt="logo" class="w-36">
                <p class="font-normal text-base text-white mt-5">Since 2019, {{config('app.name')}} is a Career accelerator for freshgraduate and early career stage people to achieve their dream job in tech by bridging them into our hiring partners and even becoming outstanding in the tech industry.</p>
                <div class="flex flex-row justify-start mt-9">
                    <a href="https://www.instagram.com/qarirlabs.official/" target="_blank" class="mr-5"><img src="{{Vite::asset('resources/image/icon/instagram.png')}}" alt="instagram" class="h-6 object-cover"></a>
                    <a href="https://www.linkedin.com/company/qarirlabscom/" target="_blank" class="mr-5"><img src="{{Vite::asset('resources/image/icon/linkdin.png')}}" alt="linkdin" class="h-6 object-cover"></a>
                    {{-- <a href="" class="mr-5"><img src="{{Vite::asset('resources/image/icon/twitter.png')}}" alt="twiter" class="h-6 object-cover"></a> --}}
                    <a href="https://www.tiktok.com/@qarirlabs.official" target="_blank" class="mr-5"><img src="{{Vite::asset('resources/image/icon/tiktok.png')}}" alt="tiktok" class="h-6 object-cover"></a>
                    <a href="https://www.youtube.com/@qarirlabs1739 " target="_blank" class="mr-5"><img src="{{Vite::asset('resources/image/icon/youtube.png')}}" alt="youtube" class="h-6 object-cover"></a>
                    {{-- <a href="" class="mr-5"><img src="{{Vite::asset('resources/image/icon/spotify.png')}}" alt="spotify" class="h-6 object-cover"></a> --}}
                </div>
            </div>
            <div class="flex flex-col">
                <div class="p-5 lg:p-0 lg:mt-11 flex lg:flex-row lg:flex-nowrap flex-wrap lg:mx-12 justify-between">
                    <div class="w-full lg:w-1/4 lg:mx-2">
                        <p class="font-bold text-lg text-[#FF9E16] lg:mb-5">Bootcamp</p>
                        <p class="text-white font-normal text-base lg:pt-7 pt-2">Digital Marketing</p>
                        <p class="text-white font-normal text-base pt-2">Data Science</p>
                    </div>
                    <div class="w-full lg:w-1/4 lg:mx-2">
                        <p class="font-bold text-lg text-[#FF9E16] lg:mb-5 mt-5 lg:mt-0">International Bootcamp</p>
                        <p class="text-white font-normal text-base pt-2 lg:pt-0">Bootcamp Indonesia</p>
                        <p class="text-white font-normal text-base pt-2">Bootcamp Istanbul</p>
                        <p class="text-white font-normal text-base pt-2">Bootcamp Tokyo</p>
                        <p class="text-white font-normal text-base pt-2">Bootcamp Seoul</p>
                    </div>
                    <div class="w-full lg:w-1/4 lg:mx-2">
                        <p class="font-bold text-lg text-[#FF9E16] lg:mb-5 mt-5 lg:mt-0">Resources</p>
                        <p class="text-white font-normal text-base lg:pt-7 pt-2">Certificate</p>
                        <p class="text-white font-normal text-base lg:pt-2 pt-2">Privacy & Policy</p>
                    </div>
                    <div class="w-full lg:w-1/4 lg:mx-2">
                        <p class="font-bold text-lg text-[#FF9E16] lg:mb-5 mt-5 lg:mt-0" >About</p>
                        <p class="text-white font-normal text-base lg:pt-7 pt-2">Career</p>
                        <p class="text-white font-normal text-base lg:pt-2 pt-2">Partnership</p>
                        <p class="text-white font-normal text-base lg:pt-2 pt-2">Pricing</p>
                    </div>
                </div>
                <div class="p-5 lg:p-0 lg:ml-14 lg:mt-24">
                    <p class="font-bold text-base text-[#FF9E16] mb-4">REACH US</p>
                    <p class="font-bold text-base text-white mt-5">Jakarta</p>
                    <p class="font-normal text-base text-white mt-2">{{config('app.name')}} Office 8, level 18-A, Sudirman Central Business District (SCBD) Jl. Jenderal Sudirman no.1, RT8/RW3, Senayan, Kebayoran Baru, Jakarta Selatan. <br>+62 813 8270 3250 ({{config('app.name')}})</p>
                    <p class="font-bold text-base text-white mt-5">Istanbul</p>
                    <p class="font-normal text-base text-white mt-2">Maslak, Büyükdere Cad. No:255 Nurol Plaza B.02, 34450 Sarıyer/İstanbul-<br>+90 551 402 62 05</p>
                </div>
            </div>
        </div>
    </div>
</footer>