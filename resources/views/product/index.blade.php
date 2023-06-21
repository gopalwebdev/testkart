@extends('layout')

@section('title', 'TestKart')

@section('content')

<div class="my-9 mx-3 grid grid-cols-1 gap-12 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
    @foreach($products as $product)
    <div class="bg-green-100 p-4 shadow rounded-lg flex flex-col items-center justify-around flex-grow-0">
        <div>
            <h3 class="font-semibold text-lg">{{$product->name}}</h3>
            <p class="mt-3 font-normal text-sm">{{$product->description}}</p>
            <p class="mt-3 font-bold text-lg"><i class="fa-solid fa-indian-rupee-sign"></i><span class="ml-1">{{$product->price}}</span></p>

        </div>
        <div>
            <a href="{{route('showProduct',[$product->id])}}">
                <button class="mt-3 bg-green-800 text-green-100 px-6 py-1.5 rounded-lg hover:animate-pulse"><i class="fa-solid fa-cart-shopping"></i><span class="ml-2 font-semibold text-lg">Buy</span></button>
            </a>
        </div>
    </div>
    @endforeach
</div>
</div>


@endsection