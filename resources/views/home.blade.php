@extends('layouts.app')

@section('content')
<section id="hero" class="h-2/5 flex items-center p-24">
    <div class="container w-9/12 mx-auto flex  justify-center">
       <div class="flex flex-col justify-center bg-opacityColor p-10 my-4 rounded-lg border-2 border-gold">
            <img src="{{ asset('images/logo.png') }}" class="mx-auto" alt="logo" width="350px">
            <p class="text-darker font-bold">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aut, magni hic temporibus tempore sit?
            </p>
       </div>
    </div>
</section>
<nav class="p-6 bg-primary shadow-xl">
    <div class="hidden container mx-auto w-9/12 md:flex items-center justify-between">
        <a href="/home" class="hover:text-white text-gold font-bold">Home </a>
        <a href="/home" class="hover:text-gold text-white font-bold">Guitars</a>
        <a href="/home" class="hover:text-gold text-white font-bold">Percussion</a>
        <a href="/home" class="hover:text-gold text-white font-bold">Pianos</a>
        <a href="/home" class="hover:text-gold text-white font-bold">Studio</a>
        <a href="/home" class="hover:text-gold text-white font-bold">Accessoire</a>
        <a href="#" class="font-bold text-gold text-xl"><i class="fa-solid fa-cart-shopping "></i></a>
    </div>
    <div class="container">
    <button id="mobileBtn" class="md:hidden text-gold text-2xl -mt-4 float-right"><i class="fa-solid fa-bars"></i></button>
    <a href="#" class="float-left text-2xl text-gold -mt-2 md:hidden"><i class="fa-solid fa-cart-shopping"></i></a>    
        <div id="list" class="hidden flex flex-col absolute w-full bg-primary my-5 -mx-6 items-center md:hidden">
            <a href="/home" class="hover:text-white text-gold p-3 font-bold">Home </a>
            <a href="/home" class="hover:text-gold text-white p-3 font-bold">Guitars</a>
            <a href="/home" class="hover:text-gold text-white p-3 font-bold">Percussion</a>
            <a href="/home" class="hover:text-gold text-white p-3 font-bold">Pianos</a>
            <a href="/home" class="hover:text-gold text-white p-3 font-bold">Studio</a>
            <a href="/home" class="hover:text-gold text-white p-3 font-bold">Accessoire</a>
        </div>
    </div>
</nav>
<section>
    <div class="container mb-4 w-9/12 mx-auto">
        <h1 class="text-center text-5xl p-4 border-b-[3px] border-gold m-3">Guitars</h1>
        <div class="flex space-x-3  flex-row">
                @foreach ($guitars as $guitar)
                <div class="flex flex-col items-center p-2 w-1/4 shadow-xl">
                    <img src="{{ asset('storage/' . $guitar->image_path) }}" width="300px" alt="item">
                    <h2 class="text-2xl">{{$guitar->name}}</h2>
                    <h4 class="text-xl my-2">{{$guitar->price}}</h4>
                    <a href="#"class="text-2xl p-3 text-white rounded bg-gold hover:bg-dark" >Buy now</a>
                </div>
                @endforeach
        </div>
        <h1 class="text-center text-5xl p-4 border-b-[3px] border-gold m-3">Percussion</h1>
        <div class="flex space-x-3  flex-row">
            @foreach ($percussions as $percussion)
                <div class="flex flex-col items-center p-2 w-1/4 shadow-xl">
                    <img src="{{ asset('storage/' . $percussion->image_path) }}" width="300px" alt="item">
                    <h2 class="text-2xl">{{$percussion->name}}</h2>
                    <h4 class="text-xl my-2">{{$percussion->price}}</h4>
                    <a href="#"class="text-2xl p-3 text-white rounded bg-gold hover:bg-dark" >Buy now</a>
                </div>
                @endforeach
        </div>
        <h1 class="text-center text-5xl p-4 border-b-[3px] border-gold m-3">Pianos</h1>
        <div class="flex space-x-3  flex-row">
            @foreach ($pianos as $piano)
                <div class="flex flex-col items-center p-2 w-1/4 shadow-xl">
                    <img src="{{ asset('storage/' . $piano->image_path) }}" width="300px" alt="item">
                    <h2 class="text-2xl">{{$piano->name}}</h2>
                    <h4 class="text-xl my-2">{{$piano->price}}</h4>
                    <a href="#"class="text-2xl p-3 text-white rounded bg-gold hover:bg-dark" >Buy now</a>
                </div>
                @endforeach
        </div>
        <h1 class="text-center text-5xl p-4 border-b-[3px] border-gold m-3">Studio</h1>
        <div class="flex space-x-3  flex-row">
            @foreach ($studios as $studio)
                <div class="flex flex-col items-center p-2 w-1/4 shadow-xl">
                    <img src="{{ asset('storage/' . $studio->image_path) }}" width="300px" alt="item">
                    <h2 class="text-2xl">{{$studio->name}}</h2>
                    <h4 class="text-xl my-2">{{$studio->price}}</h4>
                    <a href="#"class="text-2xl p-3 text-white rounded bg-gold hover:bg-dark" >Buy now</a>
                </div>
                @endforeach
        </div>
        <h1 class="text-center text-5xl p-4 border-b-[3px] border-gold m-3">Accessoire</h1>
        <div class="flex space-x-3  flex-row">
            @foreach ($accessoires as $accessoire)
                <div class="flex flex-col items-center p-2 w-1/4 shadow-xl">
                    <img src="{{ asset('storage/' . $accessoire->image_path) }}" width="300px" alt="item">
                    <h2 class="text-2xl">{{$accessoire->name}}</h2>
                    <h4 class="text-xl my-2">{{$accessoire->price}}</h4>
                    <a href="#"class="text-2xl p-3 text-white rounded bg-gold hover:bg-dark" >Buy now</a>
                </div>
                @endforeach
        </div>
    </div>
</section>
<footer class="bg-dark p-4 mt-5">
    <div class="container space-x-4 flex flex-row w-9/12 mx-auto">
        <div class="flex flex-col w-1/3">
            <h2 class="text-gold text-center text-4xl my-3 p-2 border-b-[3px] border-gold m-3">Pages </h2>
            <a href="/home" class="hover:text-white text-center text-gold font-bold">Home </a>
            <a href="/guitars" class="hover:text-gold text-center text-white font-bold">Guitars</a>
            <a href="/percussion" class="hover:text-gold text-center text-white font-bold">Percussion</a>
            <a href="/Pianos" class="hover:text-gold text-center text-white font-bold">Pianos</a>
            <a href="/studio" class="hover:text-gold text-center text-white font-bold">Studio</a>
            <a href="/accessoire" class="hover:text-gold text-center text-white font-bold">Accessoire</a>
        </div>
        <div class="flex flex-col w-1/3 justify-center">
            <img src="{{ asset('../images/cover.png')}}" width="320px">
        </div>
        <div class="flex flex-col w-1/3">
            <h2 class="text-gold text-center text-4xl my-3 p-2 border-b-[3px] border-gold m-3">Information </h2>
            <p class="text-center text-white">
                Instrumoon<br>
                Casablanca : Abdlemomne<br>
                Morocco <br>
                Appelez-nous : 0522232425 - 0631382069<br>
                Écrivez-nous : contact@instrumoon.com
            </p>
        </div>
    </div>
    <span class="text-xs">Website By Haitham Dihaji</span>
</footer>
@endsection
