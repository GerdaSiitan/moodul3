@extends('partials.layout')
@section('content')
<head>
  <body class="bg-primary">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded" rel="stylesheet" />
</head>
    
{{--navchik--}}
<nav id="main-nav" class="fixed top-0 left-0 w-full bg-primary text-secondary transition-all duration-300 z-50">
  <div class="max-w-[1450px] w-full mx-auto px-6 md:px-14 flex items-center justify-between h-24">

    <button class="lg:hidden z-50" id="hamburger-btn">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="h-6 w-6 text-secondary transition-colors duration-300" viewBox="0 0 24 24" stroke="currentColor" id="hamburger-icon">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>

    <img id="nav-logo" src="/RAWA-TUULIK-LOGO.svg" class="md:h-40 h-32 transition-all duration-300 mx-auto lg:mx-0">

    <ul class="hidden lg:flex space-x-9 font-medium items-center text-[16px]" id="nav-links">
      <li><a href="{{route('home')}}">AVALEHT</a></li>
      <li><a href="{{route('merch')}}">E-POOD</a></li>
      <li><a href="{{route('contact')}}">KONTAKT</a></li>
    </ul>

    <div class="hidden lg:flex items-center space-x-4" id="nav-buttons">
      <a href="{{route('annetus')}}"
         class="border-2 border-secondary text-secondary rounded-full px-6 py-2 hover:bg-orange-600 hover:border-orange-600 hover:text-white transition text-sm font-semibold"
         id="donate-btn">
        OLE ABIKS!
      </a>
      <span class="material-symbols-rounded text-[32px] md:text-[36px] transition-all duration-300 text-secondary" id="cart-icon">
        shopping_bag
      </span>
    </div>
  </div>
</nav>

<div id="mobile-menu" class="fixed inset-0 bg-orange-50 text-secondary z-40 flex flex-col items-start p-6 space-y-6 transform -translate-x-full transition-transform duration-300 lg:hidden">
  <button id="close-menu" class="text-3xl text-black">
    <span id="closeMenu" class="material-symbols-rounded">
      close
    </span>
  </button>
  <a href="{{route('home')}}" class="font-bold">AVALEHT</a>
  <a href="{{route('merch')}}" class="font-bold">E-POOD</a>
  <a href="{{route('contact')}}" class="font-bold">KONTAKT</a>
  <a href="{{route('annetus')}}" class="font-bold">OLE ABIKS!</a>
</div>

<script>
  const nav = document.getElementById("main-nav");
  const navLinks = document.getElementById("nav-links");
  const donateBtn = document.getElementById("donate-btn");
  const hamburgerIcon = document.getElementById("hamburger-icon");
  const navLogo = document.getElementById("nav-logo");
  const cartIcon = document.getElementById("cart-icon");

  const mobileMenu = document.getElementById("mobile-menu");
  const hamburgerBtn = document.getElementById("hamburger-btn");
  const closeMenu = document.getElementById("close-menu");

  const updateNav = () => {
    if (window.scrollY > 10) {
      nav.classList.add("bg-orange-50");

      donateBtn.classList.add("border-orange-600", "text-orange-600");

      navLinks?.querySelectorAll("a").forEach(link => {
        link.classList.add("text-orange-600");
      });

      hamburgerIcon.classList.add("text-orange-600");

      cartIcon.classList.add("text-orange-600");

    } else {
      nav.classList.remove("bg-orange-50");

      donateBtn.classList.remove("border-orange-600", "text-orange-600");

      navLinks?.querySelectorAll("a").forEach(link => {
        link.classList.remove("text-orange-600");
      });

      hamburgerIcon.classList.remove("text-orange-600");

      cartIcon.classList.remove("text-orange-600");
    }
  };

  
  window.addEventListener("scroll", updateNav);
  document.addEventListener("DOMContentLoaded", updateNav);

  hamburgerBtn.addEventListener("click", () => {
    mobileMenu.classList.remove("-translate-x-full");
    mobileMenu.classList.remove("translate-x-0");
    document.body.classList.remove("overflow-hidden");
  });

  closeMenu.addEventListener("click", () => {
    mobileMenu.classList.add("-translate-x-full");
    mobileMenu.classList.remove("translate-x-0");
    document.body.classList.remove("overflow-hidden");
  });
</script>

{{--toote page--}}
<section class=" md:mt-[30px] md:pt-[-300px] pt-[100px]  md:h-[1000px] h-[1000px]">
  <div class="flex flex-col md:flex-row md:items-start items-center">
    <div class="relative md:h-[538px] h-[265px] md:w-[685px] w-[335px] bg-gray-600 rounded-md md:mt-[165px] md:ml-[320px] hidden md:block">
    <img src="{{ Storage::disk('public')->url($product->image[0]) }}" alt="img" class="h-full w-full object-cover rounded-md">
    </div>

     <div class="mt-8 md:mt-[165px] md:ml-[40px] max-w-[500px] px-4 md:px-0">

    {{--title--}}
    <p class="text-[16px] text-gray-600">Käsitöö</p>
      <h1 class="text-[32px] md:text-[48px] font-extrabold text-secondary mt-1 leading-[1] md:leading-[1]">{{ $product->name }}</h1>
      <p class="text-[16px] text-gray-700 mt-2">
        {{ $product->description }}
      </p>

          <div class="relative md:h-[538px] h-[265px] md:w-[685px] w-[335px] bg-gray-600 rounded-md md:mt-[165px] md:ml-[320px] block md:hidden">
    <img src="/pusa.jpg" class="h-full w-full object-cover rounded-md">
    </div>
      

    {{--värvid esuurus etc--}}
     <div class="flex flex-col md:flex-row justify-between gap-4 mt-6">
        <div>
          <p class="text-[16px] mb-1">Toote värv: <span class="font-medium"> {{ $product->color }}</span></p>
          <div class="flex space-x-2">
            <span class="w-[40px] h-[40px] md:w-[55px] md:h-[55px] rounded-full border-2 hover:border-secondary bg-black"></span>
            <span class="w-[40px] h-[40px] md:w-[55px] md:h-[55px] rounded-full border-2 hover:border-secondary bg-gray-300"></span>
            <span class="w-[40px] h-[40px] md:w-[55px] md:h-[55px] rounded-full border-2 hover:border-secondary border-[#d94f1a] bg-[#d94f1a]"></span>
          </div>
        </div>

       <div>
          <p class="text-[16px] mb-1">Toote suurus: <span class="font-medium">{{$product->size}}</span></p>
          <div class="flex space-x-2">
            <button class="w-[40px] h-[40px] md:w-[55px] md:h-[55px] rounded-full border-2 hover:border-secondary text-[18px] md:text-[24px] font-medium">S</button>
            <button class="w-[40px] h-[40px] md:w-[55px] md:h-[55px] rounded-full border-2 hover:border-secondary text-[18px] md:text-[24px] font-medium">M</button>
            <button class="w-[40px] h-[40px] md:w-[55px] md:h-[55px] rounded-full border-2 hover:border-secondary text-[18px] md:text-[24px] font-medium">L</button>
            <button class="w-[40px] h-[40px] md:w-[55px] md:h-[55px] rounded-full border-2 hover:border-secondary text-[18px] md:text-[24px] font-medium">XL</button>
          </div>
        </div>
      </div>

    {{--hind--}}
     <div class="mt-6">
        <p class="text-[16px] font-regular">Hind</p>
        <p class="text-[32px] md:text-[40px] font-bold text-secondary -mt-1"> {{ $product->price }}€</p>
      </div>


    {{--nupuke--}}
     <div class="mt-6">
        <button class="w-full md:w-[500px] border-2 border-secondary text-secondary font-semibold py-2 rounded-3xl flex items-center justify-center space-x-2 hover:bg-[#d94f1a] hover:text-white transition">
          <span class="material-symbols-rounded text-[28px] md:text-[36px]">shopping_bag</span>
          <span>LISA OSTUKORVI</span>
        </button>
      </div>
    </div>
  </div>

  {{--alumised pics--}}
 <div class="flex gap-2 justify-center flex-wrap items-center md:mt-[1px] md:ml-[-1050px]">
    <div class="relative h-[92px] w-[104px] bg-gray-600 rounded-md  hidden md:block ">
    <img src="{{ Storage::disk('public')->url($product->image[0]) }}" class="h-full w-full object-cover rounded-md">
    </div>

    <div class="relative h-[92px] w-[104px] bg-gray-600 rounded-md hidden md:block ">
    <img src="{{ Storage::disk('public')->url($product->image[0]) }}" class="h-full w-full object-cover rounded-md">
    </div>
  </div>

    </section>


  </body>
@endsection