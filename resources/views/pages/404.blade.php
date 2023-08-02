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

<div class="container mx-auto w-9/12 flex justify-center flex-col">
    <h1 class="text-5xl mt-9 border-b-4 border-gold pb-6 text-center"> 404 | Page Not Found </h1>
    <a href="/" class="text-4xl p-6 text-center mx-auto my-5 rounded-xl text-white bg-gold w-fit hover:text-gold hover:bg-dark"> go Home </a>
</div>


@endsection