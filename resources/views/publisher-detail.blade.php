@extends('layouts.guest')

@section('content')
    <div class="flex flex-row flex-nowrap space-x-[50px]">
        <div class="h-full">
            <img src="{{ $publisher->image }}" alt="publisher-dummy" class="border-b-4 border-gray-300 w-[200px] rounded-lg">
        </div>
        <div class="flex flex-col space-y-3">
            <h1 class="text-[#065A82] font-bold text-3xl">{{ $publisher->name }}</h1>
            <h2 class="font-semibold text-2xl">Address : <span class="font-medium">{{ $publisher->address }}</span></h2>
            <h2 class="font-semibold text-2xl">Phone : <span class="font-medium">{{ $publisher->phone }}</span></h2>
            <h2 class="font-semibold text-2xl">Email : <span class="font-medium">{{ $publisher->email }}</span></h2>
        </div>
    </div>

    <div class="mt-[30px]">
        <h1 class="font-medium text-[32px] text-[#1C7293]">Book List</h1>
        <div class="w-[169px] border-2 border-[#1C7293]"></div>
    </div>

    <!-- Cards -->
    <div class="flex flex-row flex-nowrap pt-20 space-x-[60px]">
        @foreach ($publisher->books as $book)
            <div class="bg-[#9EB3C2] rounded-xl flex flex-col pt-5 pb-5 w-auto items-end">
                <div class="absolute w-[93px] bg-[#065A82] rounded-tl-md rounded-bl-md text-center l-0">
                    <h1 class="text-white font-semibold text-sm">Novel</h1>
                </div>
                <div class="pt-3 px-12 flex flex-col">
                    <img src="{{ $book->image }}" class="w-[208px]" alt="dummy1">
                    <h1 class="font-bold text-base text-white mt-2">{{ $book->title }}</h1>
                    <h2 class="font-medium text-sm text-white mt-1">{{ $book->author }}</h2>
                    <a href="{{ route('book-detail', $book->id) }}">
                        <button
                            class="w-full rounded-3xl bg-[#21295C] hover:bg-[#065A82] font-bold text-white text-base py-2 mt-3 transition-colors duration-300 ease-in-out">Detail</button>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
