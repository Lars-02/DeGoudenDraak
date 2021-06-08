<nav class="h-12">
    <div class="flex flex-nowrap justify-content-center">
        <div class="flex" style="text-align:center;color:yellow;font-size:30px">
            <img src="{{asset("/images/dragon.png")}}" class="object-contain h-12 w-12 mx-auto hidden sm:block">
            <p class="hidden md:block text-base xl:text-3xl my-auto" style="font-family:'chinese_takeawayregular'">De Gouden Draak</p>
            <img src="{{asset("/images/dragon.png")}}"
                 class="mirror object-contain h-12 w-12 mx-auto hidden md:block">
        </div>

        <div class="flex-grow h-full">
            <a href="{{route('offer.index')}}" class="flex flex-row justify-content-center"
               style="color:yellow;font-weight:bold;text-decoration: none;">
                <marquee behavior="scroll" direction="left">
                    <h3>{{__('navbar.marquee')}}</h3>
                </marquee>
            </a>
        </div>

        <div class="flex" style="text-align:center;color:yellow;font-size:30px">
            <img src="{{asset("/images/dragon.png")}}" class="object-contain h-12 w-12 mx-auto hidden md:block">
            <p class="hidden md:block text-base xl:text-3xl my-auto" style="font-family:'chinese_takeawayregular'">De Gouden Draak</p>
            <img src="{{asset("/images/dragon.png")}}"
                 class="mirror object-contain h-12 w-12 mx-auto hidden sm:block">
        </div>
    </div>
</nav>
