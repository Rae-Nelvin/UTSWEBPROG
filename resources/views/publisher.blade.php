@extends('layouts.guest')

@section('content')
    <div>
        <h1 class="font-medium text-[32px] text-[#1C7293]">Publisher</h1>
        <div class="w-[169px] border-2 border-[#1C7293]"></div>
    </div>

    <!-- Cards -->
    <div class="px-28 mt-11 space-y-[30px]">
        @foreach ($publishers as $publisher)
            <div class="bg-[#9EB3C2] py-5 px-7 flex flex-row space-x-[50px] rounded-xl">
                <img src="{{ $publisher->image }}" alt="publisher-dummy" class="w-[130px] rounded-lg">
                <div class="flex flex-col w-full justify-between">
                    <div>
                        <h1 class="font-bold text-xl text-[#065A82]">{{ $publisher->name }}</h1>
                        <h2 class="font-medium text-base text-white">{{ $publisher->address }}
                        </h2>
                    </div>
                    <div class="flex justify-end items-end">
                        <a href="{{ route('publisher-detail', $publisher->id) }}">
                            <button
                                class="rounded-3xl w-[136px] bg-[#21295C] hover:bg-[#065A82] font-bold text-white text-base py-2 mt-3 transition-colors duration-300 ease-in-out">Detail</button>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
