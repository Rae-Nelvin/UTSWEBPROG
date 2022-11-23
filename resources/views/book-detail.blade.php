@extends('layouts.guest')

@section('content')
    <div class="flex flex-row">
        <!-- Left Side -->
        <div class="w-full h-full">
            <img src="{{ $book->image }}" alt="Dummy Book" class="w-[310px] h-full">
        </div>

        <!-- Right Side -->
        <div class="flex flex-col ml-[110px]">
            <div>
                <h1 class="font-bold text-3xl">{{ $book->title }}</h1>
                <h2 class="font-semibold text-[28px]">{{ $book->author }}</h2>
            </div>
            <div class="mt-[30px] space-y-4">
                <h2 class="font-semibold text-2xl">Year : <span class="font-medium">{{ $book->year }}</span></h2>
                <h2 class="font-semibold text-2xl">Category :
                    @foreach ($book->bookCategories as $category)
                        <span class="font-medium">{{ $category->categories->name }},</span>
                    @endforeach
                </h2>
                <h2 class="font-semibold text-2xl">Synopsis : </h2>
                <p class="font-regular text-[22px] text-justify">{{ $book->synopsis }}
                </p>
            </div>
        </div>
    </div>
@endsection
