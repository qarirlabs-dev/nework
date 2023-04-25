<script>
    window.addEventListener('load', function() {
        document.getElementById('close-chat').addEventListener('click', function(e) {
            console.log('clicked');
            document.getElementById('close-chat').classList.toggle('hidden')
            document.getElementById('content-chat').classList.toggle('hidden')
        })
    })
</script>
<div class="sticky bottom-10 right-10">
    <div class="flex justify-end lg:mr-10 mr-2">
        <div class="w-6 h-6 ml-2 lg:ml-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 text-white fill-gray-500 cursor-pointer" id="close-chat">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
        <a aria-label="Chat on WhatsApp"
            href="https://wa.me/+6282135953485?text={{ urlencode("Hi, I'm interested to know about NeWork Bootcamp, My Name is.....") }}"
            target="_blank" class="bg-white rounded-xl p-6 ml-2 shadow-2xl " id="content-chat">
            <p>How may i assist you to find your best career future? 🙂</p>
        </a>
        <div class="relative">
            <a aria-label="Chat on WhatsApp"
                href="https://wa.me/+6282135953485?text={{ urlencode("Hi, I'm interested to know about NeWork Bootcamp, My Name is.....") }}"
                target="_blank" class="flex justify-center items-center bg-white rounded-xl lg:p-6 p-4 ml-2 shadow-2xl lg:w-20 lg:h-20 w-16 h-16"
                id="icon-chat">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-7 h-7 stroke-2 text-[#FF9500]">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                </svg>
            </a>
            <div class="absolute -top-2 -right-2 rounded-full bg-[#FF9500] w-6 h-6  flex items-center justify-center">
                <p class="text-white font-bold p-2">1</p>
            </div>
        </div>
    </div>
</div>
