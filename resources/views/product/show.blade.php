@extends('layout')

@section('title', 'Welcome to My Website')

@section('content')
<div class="container mx-auto flex flex-col justify-center">
    <div class="text-center bg-green-200 py-3 rounded-xl text-green-800">
        <h1 class="font-bold text-2xl">TestKart Products</h1>
    </div>

    @if($product)
    <div class="mt-3 rounded-lg flex flex-col items-center justify-left flex-grow-0 p-3">
        <div class="flex-col md:flex justify-center items-start">
            <div>
                <a href="{{route('products')}}">
                    <p class="cursor-pointer"><i class="fa-solid fa-arrow-left-long fa-xl"></i><span class="ml-3 font-normal">Go back</span></p>
                </a>
                <img src="{{ asset('sample_image.png') }}" alt="" width="300" height="auto" class="mt-9">
            </div>
            <div class="flex flex-col mt-6">
                <h3 class="font-semibold text-lg">{{$product->name}}</h3>
                <p class="mt-3 font-normal text-sm">{{$product->description}}</p>
                <p class="mt-3 font-bold text-lg"><i class="fa-solid fa-indian-rupee-sign"></i><span class="ml-1">{{$product->price}}</span></p>
            </div>
        </div>
    </div>
    @else

    <div class="bg-green-100 p-4 shadow rounded-lg flex flex-col items-center justify-around flex-grow-0">
        <h1>Product not found</h1>
    </div>
    @endif

</div>


@endsection