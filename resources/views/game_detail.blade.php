@extends('layouts.main')

@section('body')

<div class="bg-slate-950">
    <div class="container mx-auto h-[250px] lg:h-[500px] bg-slate-950 mb-10">
        <img class="mx-auto h-[250px] lg:h-[500px] object-cover" src="/{{$game->hero}}" alt="game_hero">
    </div>
</div>

<div class="container mx-auto ">

    <div class="mx-5 lg:mx-32">
        <div class="mb-10">
            
            <h1 class="uppercase text-4xl lg:text-6xl font-bold">{{$game->title}}</h1>
            <div class="md:flex gap-4 justify-between">
                <div class="lg:max-w-[80%] mb-10">
                    <p class="text-lg mb-5">
                        {{$game->subtitle}}
                    </p>
                    <p>
                        {{$game->description}}
                    </p>
                </div>
                <div class="flex gap-5 md:block">
                    @foreach ($game->platforms as $platform)
                        <a target="_blank" class="flex items-center gap-3" href="{{$platform->url}}"><img class="h-5" src="/{{$platform->icon->image}}" alt="{{$platform->url}}">{{$platform->name}}</a>
                        {{-- platforms --}}
                    @endforeach
                </div>
            </div>

        </div>

        <div class="grid gap-1 lg:gap-3 grid-cols-2">
            <div class="w-full bg-slate-800">
                <img class="h-full object-cover" src="/{{$game->images[0]}}" alt="game_thumbnail">
            </div>
            <div class="grid gap-1 lg:gap-3 grid-cols-2 grid-rows-2">
                @foreach($game->images as $i => $image)
                    @if ($i > 0)
                        <div class="w-full h-20 lg:h-52 bg-slate-800">
                            <img class="h-full object-cover" src="/{{$image}}" alt="game_thumbnail">
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        
    </div>
</div>

@endsection