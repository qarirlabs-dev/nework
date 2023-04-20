<x-landing-layout>
    @push('scripts')
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    @endpush
    <div class="flex justify-center items-center h-screen w-full flex-grow">
        <div class="alternative w-full h-auto">
            <img src="{{ Vite::asset('resources/image/ilustration/earth.png') }}" alt="earth"
                class="absolute top-20 left-0 w-full h-auto">
            <div class="absolute top-1/3 w-full z-10">
                <div class="flex flex-col justify-center items-center">
                    <p class="font-black text-2xl lg:text-4xl text-[#262626]  mb-4 text-center">We will landing soon in Tokyo</p>
                    <p class="font-medium text-xl lg:text-2xl text-[#A5A5A5] mb-4 text-center">Explore the world with our International Bootcamp Program.</p>
                    <a href="{{ route('landing') }}" class="text-white font-bold text-lg bg-[#FF9500] px-6 py-4 rounded-full">Back to Homepage</a>
                </div>
            </div>
            <lottie-player src="{{asset('img/plane_animation.json')}}" background="transparent"  speed="1"  loop autoplay class="w-full h-full absolute top-0"></lottie-player>
        </div>
    </div>
</x-landing-layout>
