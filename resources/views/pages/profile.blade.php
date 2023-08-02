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
<div class="container mb-4 w-9/12 mx-auto h-5/6  p-6 my-6 justify-center">
    <div class="flex shadow-xl float-left w-1/3 p-2 h-screen flex-col">
        <h1 class="text-2xl text-center pb-4 border-b-gold border-b-2 my-2 uppercase">{{$user->name}} </h1>
        <h3 class="text-xl my-5">Email : <span class="text-primary">{{$user->email}}</span>  </h3>
        <h3 class="text-xl my-5">Joined at :  <span class="text-primary">{{$user->created_at}}</span> </h3>
    </div>
    <div class="flex shadow-xl float-right p-2 h-fit w-1/3  flex-col">
        <h1 class="text-2xl text-center pb-4 border-b-gold border-b-2 my-2 uppercase">Bills</h1>
        @if($bills->isEmpty())
            <h1 class="text-xl">No bills available.</h1>
        @endif
        

        @foreach($bills as $index => $bill)
        <div>
            <h3 class="text-xl my-3">Bill id : {{$bill->id}}</h3>
            <h3 class="text-xl my-3">product : {{$products[$index]->name}}</h3>
            <h3 class="text-xl my-3">quantity : {{$bill->quantity}} </h3>
            <h3 class="text-xl my-3 ">Product Price : {{$bill->total_price / $bill->quantity}} DH </h3>
            <h3 class="text-xl my-3 pb-6 border-b-2 border-b-gold">total price: {{$bill->total_price}}DH </h3>
        </div>
        @endforeach
        
    </div>
</div>



@endsection