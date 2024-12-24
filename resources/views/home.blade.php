@extends('layouts.main')

@section('body')

<div class="container mx-auto py-5">

    <section class="mb-5" style="background-image: url('/ass/Frame 1.png'); repeat: no-repeat; background-size: cover; background-position: center;">
        <div class="flex items-center justify-center lg:h-[480px]">
            <img class="sm:h-5 lg:h-40" src="/ass/logoX-01.png" alt="RITM">
        </div>
    </section>

    <section class="mx-4 lg:mx-32 py-5 lg:py-20">
        <div class="flex flex-wrap gap-3 justify-between items-center">
            <div class="w-full hidden md:block lg:w-[40%] lg:h-60 bg-slate-800">
                <img src="/ass/logo1.png" alt="RTIM">
            </div>
            <div class=" lg:max-w-[50%]">
                <h2 class="text-center lg:text-left text-4xl lg:text-6xl font-bold uppercase m-0 p-0">About RITM</h2>
                <p class="text-center lg:text-left text-xl m-0 p-0">
                    At RITM, we are dedicated to crafting immersive and innovative gaming experiences that captivate players worldwide. With a focus on storytelling, realism, and cutting-edge design, we strive to push the boundaries of what games can achieve, creating adventures that resonate with gamers of all genres.
                </p>
            </div>
        </div>
    </section>
    <section class="mx-4 lg:mx-32 py-5 lg:py-20">
        <div class="flex flex-wrap gap-3 justify-between items-center">
            <div class=" lg:max-w-[50%] order-2 lg:order-1">
                <h2 class="text-center lg:text-left text-4xl lg:text-6xl font-bold uppercase m-0 p-0">Our Awards</h2>
                <p class="text-center lg:text-left text-xl m-0 p-0">
                    RITM’s dedication to excellence has earned us recognition at top industry events like The Game Awards, Golden Joystick Awards, and BAFTA Games Awards, celebrating our contributions to genres ranging from tactical shooters to mythical adventures, racing simulations, and creative sandbox experiences.
                </p>
            </div>
            <div class="w-full lg:w-[40%] h-72 order-1 lg:order-2">
                <img class="w-full h-72 object-cover" src="/ass/WINNER.png" alt="WINNER">
            </div>
        </div>
    </section>
    <section class="mx-4 lg:mx-32 py-5 mb-20 lg:py-20">
        <div class="flex flex-wrap gap-3 justify-between items-center">
            <div class="w-full lg:w-[40%] lg:h-60 bg-slate-800">
                <img src="/ass/Grid human.png" alt="GRID">
            </div>
            <div class=" lg:max-w-[50%]">
                <h2 class="text-center lg:text-left text-4xl lg:text-6xl font-bold uppercase m-0 p-0">The Team</h2>
                <p class="text-center lg:text-left text-xl m-0 p-0">
                    Our talented team of developers, designers, and storytellers are the creative force behind RITM's iconic games. Passionate about pushing technical and artistic limits, we work together to create games that captivate, challenge, and inspire players.
                </p>
            </div>
        </div>
    </section>
</div>
<div class="relative py-8 lg:py-20">
    <div class="container mx-auto">
        <h2 class="absolute -top-6 lg:-top-8 left-1/2 -translate-x-1/2 text-center text-4xl lg:text-6xl font-bold uppercase p-0">We make</h2>
        <section class="mx-4 lg:mx-32">
            <div class="grid grid-cols-3 gap-5 mb-5">
                @foreach ($games as $i => $game)
                    <div>
                        <a href="/game/{{$game->slug}}">
                            <div class="w-full h-20 md:h-32 lg:h-60 bg-slate-800">
                                <img class="mx-auto w-full object-cover h-20 md:h-32 lg:h-60" src="{{asset($game->thumbnail)}}" alt="image">
                            </div>
                            <div class="mt-3">
                                <h3 class="text-sm lg:text-xl ">{{$game->title}}</h3>
                                <div class="flex gap-4">
                                    @foreach ($game->platforms as $platform)
                                        <a href="{{$platform->url}}">
                                            <img class="h-5" src="{{$platform->icon->image}}" alt="{{$platform->url}}">
                                        </a>
                                    @endforeach
                                    {{-- platforms --}}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <a href="/game" class="bg-slate-800 text-center hover:bg-slate-700 transition block w-full p-3">Show More</a>
        </section>
    </div>
</div>

@endsection