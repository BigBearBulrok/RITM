@extends('layouts.main')

@section('body')

<div class="container mx-auto py-20">
    <div class="mx-5 lg:mx-32">
        <div class="mb-10">
            <h1 class="uppercase text-4xl lg:text-6xl font-bold">Our Games</h1>
            <p class="lg:text-lg">
                RITM develops games that span diverse genres, from heart-pounding tactical shooters to rich open-world adventures, realistic racing simulations, and creative sandbox experiences. Each title is crafted with precision, delivering compelling narratives, stunning visuals, and innovative gameplay that redefine what players can expect from modern gaming.
            </p>
        </div>

        <form action="/game" method="get" class="mb-5">
            <input class="w-full bg-slate-600 p-4 rounded-md" placeholder="Search here" name="search" type="text">
            <button type="submit" class="bg-slate-800 text-center hover:bg-slate-700 transition block w-full p-3">Search</button>
        </form>

        <div class="grid grid-cols-3 gap-5 mb-5">
            @foreach ($games as $i => $game)
                <div>
                    <div class="w-full h-20 md:h-32 lg:h-60 bg-slate-800">
                        <a href="/game/{{$game->slug}}">
                            <img class="mx-auto w-full object-cover h-20 md:h-32 lg:h-60" src="{{asset($game->thumbnail)}}" alt="image">
                        </a>
                    </div>
                    <div class="mt-3">
                        <a class="m-0 p-0" href="{{$game->slug}}">
                            <h3 class="text-sm lg:text-xl ">{{$game->title}}</h3>
                        </a>
                        <div class="flex gap-4">
                            @foreach ($game->platforms as $platform)
                                <a href="{{$platform->url}}"><img class="h-5" src="{{$platform->icon->image}}" alt="{{$platform->url}}"></a>
                            @endforeach
                            {{-- platforms --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection