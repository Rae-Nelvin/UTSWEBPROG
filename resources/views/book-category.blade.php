@extends('layouts.guest')

@section('content')
    <h1 class="text-center text-[#21295C] font-bold text-4xl">Category</h1>
    <div>
        <h1 class="font-medium text-[32px] text-[#1C7293]">Novel</h1>
        <div class="w-[169px] border-2 border-[#1C7293]"></div>
    </div>

    <!-- Cards -->
    <div class="flex flex-row flex-wrap pt-20 justify-evenly">
        @foreach ($books as $book)
            <div class="bg-[#9EB3C2] rounded-xl flex flex-col pt-5 pb-5 mb-8 w-auto items-end">
                <div class="absolute w-[93px] bg-[#065A82] rounded-tl-md rounded-bl-md text-center l-0">
                    <h1 class="text-white font-semibold text-sm">Novel</h1>
                </div>
                <div class="pt-3 px-12 flex flex-col">
                    <img src="{{ $book->books->image }}" class="w-[208px]" alt="dummy1">
                    <h1 class="font-bold text-base text-white mt-2">{{ $book->books->title }}</h1>
                    <h2 class="font-medium text-sm text-white mt-1">{{ $book->books->author }}</h2>
                    <a href="{{ route('book-detail', $book->books->id) }}">
                        <button
                            class="w-full rounded-3xl bg-[#21295C] hover:bg-[#065A82] font-bold text-white text-base py-2 mt-3 transition-colors duration-300 ease-in-out">Detail</button>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
