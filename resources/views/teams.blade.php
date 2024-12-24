@extends('layouts.main')

@section('body')

<div class="container mx-auto py-20">
    <div class="mx-5 lg:mx-32">
        <div class="mb-10">
            <h1 class="uppercase text-4xl lg:text-6xl font-bold">Our Team</h1>
            <p class="text-lg">
                The RITM team is a dynamic group of passionate developers, designers, writers, and artists who share a commitment to excellence. Together, we bring unique ideas to life, blending technical expertise and creative vision to craft games that leave a lasting impact on players around the world.
            </p>
        </div>

        <div>
            @foreach ($teams as $i => $team)
                @if($i%2==0)
                <div class="mb-20">
                    <div class="flex gap-3 lg:gap-10 justify-between">
                        <div class="lg:w-[20%] h-40 lg:h-[300px] bg-slate-800 overflow-hidden rounded-md">
                            <img class="mx-auto w-full object-cover h-40 lg:h-[300px]" src="{{asset($team->image)}}" alt="image">
                        </div>
                        <div class="flex-1">
                            <div class="mb-4 lg:mb-10">
                                <p class="text-sm lg:text-3xl font-semibold">{{ $team->name }}</p>
                            <p class="text-sm lg:text-3xl font-semibold">{{  $team->position }}</p>
                            </div>
                            <p class="text-left text-sm lg:text-2xl m-0 p-0">
                                {!! $team->description !!}
                            </p>
                        </div>
                    </div>
                </div>
                @endif

                @if($i%2==1)
                <div class="mb-20">
                    <div class="flex gap-3 lg:gap-10 justify-between">
                        <div class="lg:w-[20%] h-40 lg:h-[300px] bg-slate-800 overflow-hidden rounded-md lg:order-2 order-1">
                            <img class="mx-auto w-full object-cover h-40 lg:h-[300px]" src="{{asset($team->image)}}" alt="image">
                        </div>
                        <div class="lg:order-1 order-2 flex-1">
                            <div class="mb-4 lg:mb-10">
                                <p class="lg:text-right text-sm lg:text-3xl font-semibold">{{ $team->name }}</p>
                            <p class="lg:text-right text-sm lg:text-3xl font-semibold">{{ $team->position }}</p>
                            </div>
                            <div class="[&>*]:lg:text-right [&>*]:text-sm [&>*]:lg:text-2xl [&>*]:m-0 [&>*]:p-0">
                                {!! $team->description !!}
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</div>

@endsection