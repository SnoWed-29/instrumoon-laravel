@extends('layouts.app')
@section('content')
    
<section id="hero" class="h-1 flex items-center p-24">
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
        <a href="/" class="hover:text-white text-gold font-bold">Home </a>
        <a href="/category/guitars" class="hover:text-gold text-white font-bold">Guitars</a>
        <a href="/category/percussions" class="hover:text-gold text-white font-bold">Percussion</a>
        <a href="/category/pianos" class="hover:text-gold text-white font-bold">Pianos</a>
        <a href="/category/studios" class="hover:text-gold text-white font-bold">Studio</a>
        <a href="/category/accessories" class="hover:text-gold text-white font-bold">Accessoire</a>
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
<section id="product" >
    <div class="container flex w-9/12 mx-auto mb-0 justify-between shadow-2xl bg-white mt-5" >
        <div class="flex float-left ">
            <img src="{{ asset('storage/' . $product->image_path) }}" alt="productImg" width="500" />
        </div>
        <div class="flex flex-col items-center float-right w-8/12 ">
            <h1 class="text-4xl my-6 p-6 font-bold border-b-gold border-b-2">{{$product->name}}</h1>
            <h1 class="text-3xl my-2 p-2 text-primary font-bold border-b-gold border-b-2">{{$product->price}} DH</h1>
            <span class="border-b-gold border-b-2 my-4">Free Shipping</span>
            <p class="p-4">
                <span class="font-bold text-xl ">Description :</span><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque odit cupiditate officiis exercitationem recusandae quas obcaecati voluptatibus non maiores facilis similique sit, quae nostrum sint corporis dolorum hic fugit? Esse.</p>{{-- {{strip_tags($product->description)} --}}
            
        <a href="#" class="p-4 px-6 bg-gold font-semibold my-4 text-xl text-white hover:bg-dark">Buy</a>
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