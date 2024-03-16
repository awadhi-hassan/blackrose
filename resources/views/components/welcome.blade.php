<div class="p-2 lg:p-4" style="min-height: calc(100vh - 74px)">
    <div style="width: 340px; height: 400px" class="absolute m-4">
        @php
            $slides = ['civil', 'construction', 'projectmgt', 'waterdivision']
        @endphp
            <div class="slider">
                @foreach ($slides as $slide)
                    <img src="{{ asset("storage/pictures/{$slide}.png") }}" alt="">
                @endforeach
            </div>
    </div>
    <div class="font-montserrat mt-24 ml-96">
        <h5 class="text-lg">Giving you the best in:</h5>
        <h1 id="typewriter" class="h-8 font-bold text-3xl my-4"></h1>
        <p>Consist of top of the range equipment and machinery, including Earth Movers and Transport Equipment, Reinforced Concrete Equipment and Light Weight Machinery. As Technical Innovators,
            we take time to understand your needs and work jointly in ensuring proposed solutions are technically, financially & environmentally sound.</p>
    </div>

    <div class="flex justify-between ml-96">
        <div class="facts mt-10 grid grid-cols-3 h-16 text-white gap-2 w-1/2">
            <div class="text-gray-400 text-xs grid grid-rows-2 bg-gray-100 h-16 rounded-xl place-content-center">
                <div class="mt-2 text-center font-bold font-montserrat text-lg">150+</div>
                <div class="text-center">Structures Completed</div>
            </div>
            <div class="text-gray-400 text-xs grid grid-rows-2 bg-gray-100 h-16 rounded-xl place-content-center">
                <div class="mt-2 text-center font-bold font-montserrat text-lg">315+</div>
                <div class="text-center">Water Works Done.</div>
            </div>
            <div class="text-gray-400 text-xs grid grid-rows-2 bg-gray-100 h-16 rounded-xl place-content-center">
                <div class="mt-2 text-center font-bold font-montserrat text-lg">286+</div>
                <div class="text-center">Projects Managed.</div>
            </div>
        </div>

        <div class="grid grid-cols-4 w-1/3 mt-10 transition ease-in-out delay-150">
            <div class="rig">
                <div class="rounded-full bg-gray-300 w-14 h-14">
                    <img src="{{asset('storage/pictures/rig.png')}}" alt="">
                </div>
                <div class="bg-gray-200 hidden px-2 pb-1 rounded-lg absolute mt-2">
                    <span class="text-xs">Earth Movers</span>
                </div>
            </div>

            <div class="forklift">
                <div class="rounded-full bg-gray-300 w-14 h-14">
                    <img src="{{asset('storage/pictures/forklift.png')}}" alt="">
                </div>
                <div class="bg-gray-200 hidden px-2 pb-1 rounded-lg absolute mt-2">
                    <span class="text-xs">Light Weight Machinery</span>
                </div>
            </div>

            <div class="tractor">
                <div class="rounded-full bg-gray-300 w-14 h-14">
                    <img src="{{asset('storage/pictures/tractor.png')}}" alt="">
                </div>
                <div class="bg-gray-200 hidden px-2 pb-1 rounded-lg absolute mt-2">
                    <span class="text-xs">Transport Equipment</span>
                </div>
            </div>

            <div class="mixer">
                <div class="rounded-full bg-gray-300 w-14 h-14">
                    <img src="{{asset('storage/pictures/mixer.png')}}" alt="">
                </div>
                <div class="bg-gray-200 hidden px-2 pb-1 rounded-lg absolute mt-2 right-10">
                    <span class="text-xs">Reinforced Concrete Equipment</span>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4 ml-96">
        <x-button class="bg-green-500 mt-4 rounded-2xl py-2">Work with Us</x-button>
    </div>
</div>
