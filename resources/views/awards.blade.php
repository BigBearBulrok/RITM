@extends('layouts.main')

@section('body')


<div class="container mx-auto py-20">
    <div class="mx-5 lg:mx-32">
        <div class="mb-10">
            <h1 class="uppercase text-4xl lg:text-6xl font-bold">Our Awards</h1>
            <p class="sm:text-sm lg:text-lg">
                RITM is honored to have received numerous accolades for our dedication to innovation, storytelling, and gameplay excellence.
            </p>
        </div>

        <div>
            @foreach ($awards as $i => $award)
            <div class="mb-5">
                <div class="block lg:flex gap-5 justify-between">
                    <div class="w-full h-40 lg:w-[40%] lg:h-60 bg-slate-800">
                        <img class="h-40 w-full  object-cover lg:h-60" src="{{asset($award->image)}}" alt="image">
                    </div>
                    <div class="flex-1">
                        <div class="mb-2">
                            <p class="text-sm lg:text-3xl font-semibold">{{ $award->title }}</p>
                        <p class="text-sm lg:text-xl font-semibold">{{ $award->date }}</p>
                        </div>
                        <p class="text-left text-sm lg:text-2xl m-0 p-0">
                            {{ $award->description }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection