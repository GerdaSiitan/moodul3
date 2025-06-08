@extends('partials.layout')
@section('content')
<head>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded" rel="stylesheet" />
</head>

<body class="bg-orange-600 h-[1200px]">


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

{{--header--}}
<section class="items-justify md:mb-[40px]">
     <h1 class="relative text-[36px] md:text-[64px] leading-tight md:leading-[0.85] text-secondary font-primary text-center md:mt-[200px] mt-[160px] ">
     TÜKIKE RAVAST <br> KAASA</h1>
     <img src="/element-3.png" class=" w-full md:mt-[-210px] hidden md:block ">
       <div class="md:w-[1500px] w-[350px] h-[2.5px] rounded bg-secondary bg-opacity-60 md:ml-[215px] ml-[15px]  my-2"></div>
</section>

{{--filter--}}
<section class="flex flex-col md:flex-row md:gap-4 gap-2 md:ml-[280px] md:mt-6 mt-4">
  <div class="relative inline-block text-left">
    <button id="filterToggle" class="inline-flex justify-between w-full items-center px-4 py-2 text-secondary md:text-[20px] text-[16px] font-medium font-secondary">
      KÕIK TOOTED
      <span class="ml-2 material-symbols-rounded">expand_more</span>
    </button>

    <div id="filterMenu" class="absolute z-10 mt-2 w-48 origin-top-right rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden">
      <div class="py-1 text-secondary font-secondary">
        <a href="?filter=all" class="block px-4 py-2 md:text-[18px] text-[16px] hover:bg-orange-100 uppercase">Kõik tooted</a>
        <a href="?filter=kasitoo" class="block px-4 py-2 md:text-[18px] text-[16px] hover:bg-orange-100 uppercase">Käsitöö</a>
        <a href="?filter=maketid" class="block px-4 py-2 md:text-[18px] text-[16px] hover:bg-orange-100 uppercase">Maketid</a>
      </div>
    </div>
  </div>

  <div class="relative inline-block text-left">
    <button id="sortToggle" class="inline-flex justify-between w-full items-center px-4 py-2 text-secondary md:text-[20px] text-[16px] font-medium font-secondary">
      SORTEERI HINNA JÄRGI
      <span class="ml-2 material-symbols-rounded">expand_more</span>
    </button>

    <div id="sortMenu" class="absolute z-10 mt-2 w-56 origin-top-right rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden">
      <div class="py-1 text-secondary font-secondary">
        <a href="?sort=asc" class="block px-4 py-2 md:text-[18px] text-[16px] hover:bg-orange-100 uppercase">Odavam enne</a>
        <a href="?sort=desc" class="block px-4 py-2 md:text-[18px] text-[16px] hover:bg-orange-100 uppercase">Kallim enne</a>
      </div>
    </div>
  </div>
</section>


{{--tooted--}}
<section class="md:h-full h-[1650px] ">

{{--rida 1--}}
  <div class="flex md:gap-[100px] md:gap-x-[20px] gap-[100px] justify-center flex-wrap items-center  md:mt-[20px] md:mb-[10px] rid-cols-1 md:grid-cols-3">
@foreach($products as $product)
      <a href="{{route('merchdetail', ['product' => $product])}}">
     <div class="relative md:h-[390px] h-[300px] md:w-[430px] w-[345px] bg-gray-600 rounded-md">
      <img src="{{Storage::disk('public')->url($product->image[0])}}" class="h-full w-full object-cover rounded-md">
      <div class="px-4 py-3 text-sm text-gray-800">
    <div class="flex justify-between items-start">
      <div class="items-center">
        <div class="font-semibold text-[20px] text-secondary">{{$product->name}}</div>
        <div class="text-[16px]">Käsitöö</div>
      </div>
      <div class="text-[24px] md:mt-[5px] font-semibold text-secondary">{{ $product->price }}€</div>
    </div>
  </div>
    </div>
  </a>
 @endforeach
  </div>


{{--rida 2--}}

        <div class="flex gap-6 justify-center flex-wrap items-center   md:mt-[90px] md:mb-[80px]">
     <div class="relative  md:h-[390px] h-[300px] md:w-[430px] w-[345px] bg-gray-600 rounded-md">
      <img src="/MILL.jpg" class="h-full w-full object-cover rounded-md">
            <div class="px-4 py-3 text-sm text-gray-800">
    <div class="flex justify-between items-start">
      <div class="items-center">
        <div class="font-semibold text-[20px] text-secondary">Rava Tuuliku Maketta</div>
        <div class="text-[16px]">Maketid</div>
      </div>
      <div class="text-[24px] md:mt-[5px] font-semibold text-secondary">30 €</div>
    </div>
  </div>
    </div>

   <div class="relative md:h-[390px] h-[300px] md:w-[430px] w-[340px] bg-gray-600 rounded-md  hidden md:block">
    <img src="/CAN1.jpg" class="h-full w-full object-cover rounded-md">
          <div class="px-4 py-3 text-sm text-gray-800">
    <div class="flex justify-between items-start">
      <div class="items-center">
        <div class="font-semibold text-[20px] text-secondary">Mustsõstra Limonaad</div>
        <div class="text-[16px]">Käsitöö joogid</div>
      </div>
      <div class="text-[24px] md:mt-[5px] font-semibold text-secondary">5 €</div>
    </div>
  </div>
    </div>

   <div class="relative  md:h-[390px] h-[300px] md:w-[430px] w-[345px] bg-gray-600 rounded-md hidden md:block">
    <img src="/CAN2.jpg" class="h-full w-full object-cover rounded-md">
          <div class="px-4 py-3 text-sm text-gray-800">
    <div class="flex justify-between items-start">
      <div class="items-center">
        <div class="font-semibold text-[20px] text-secondary">Punasõstra õlu</div>
        <div class="text-[16px]">Käsitöö joogid</div>
      </div>
      <div class="text-[24px] md:mt-[5px] font-semibold text-secondary">7 €</div>
    </div>
  </div>
    </div>
  
{{--rida 3--}}

  <div class="flex gap-6 justify-center flex-wrap items-center  md:mt-[90px] md:mb-[80px]">
     <div class="relative  md:h-[390px] h-[300px] md:w-[430px] w-[345px] bg-gray-600 rounded-md hidden md:block">
      <img src="/MESI.jpg" class="h-full w-full object-cover rounded-md">
      <div class="px-4 py-3 text-sm text-gray-800">
    <div class="flex justify-between items-start">
      <div class="items-center">
        <div class="font-semibold text-[20px] text-secondary">Klassikaline Mesi</div>
        <div class="text-[16px]">Käsitöö mesi</div>
      </div>
      <div class="text-[24px] md:mt-[5px] font-semibold text-secondary">17 €</div>
    </div>
  </div>
    </div>
    

   <div class="relative md:h-[390px] h-[300px] md:w-[430px] w-[345px] bg-gray-600 rounded-md hidden md:block">
    <img src="/CAN3.jpg" class="h-full w-full object-cover rounded-md">
          <div class="px-4 py-3 text-sm text-gray-800">
    <div class="flex justify-between items-start">
      <div class="items-center">
        <div class="font-semibold text-[20px] text-secondary">Astelpaju Mahl</div>
        <div class="text-[16px]">Käsitöö joogid</div>
      </div>
      <div class="text-[24px] md:mt-[5px] font-semibold text-secondary">11,90 €</div>
    </div>
  </div>
    </div>

    <div class="relative md:h-[390px] h-[300px] md:w-[430px] w-[345px] bg-gray-600 rounded-md hidden md:block">
       <img src="/CAN4.jpg" class="h-full w-full object-cover rounded-md">
             <div class="px-4 py-3 text-sm text-gray-800">
    <div class="flex justify-between items-start">
      <div class="items-center">
        <div class="font-semibold text-[20px] text-secondary">Astelpaju Limonaad</div>
        <div class="text-[16px]">Käsitöö joogid</div>
      </div>
      <div class="text-[24px] md:mt-[5px] font-semibold text-secondary">5 €</div>
    </div>
  </div>
    </div>
  </div>

  </section>

    <div class="flex justify-center md:mb-[90px] md:mt-[0px] mt-[-20px] mb-[80px]">
    <button class="flex items-center gap-2 px-[25px] py-[12px] border-2 border-secondary text-secondary uppercase font-semibold 
      rounded-full transition hover:bg-orange-600 hover:border-orange-600 hover:text-white">
      LAE JUURDE
      <span class="material-symbols-rounded transition">arrow_forward</span>
    </button>
  </div>

  {{--filtri javascript--}}
<script>
  const filterToggle = document.getElementById("filterToggle");
  const filterMenu = document.getElementById("filterMenu");
  const sortToggle = document.getElementById("sortToggle");
  const sortMenu = document.getElementById("sortMenu");

  filterToggle.addEventListener("click", () => {
    filterMenu.classList.toggle("hidden");
    sortMenu.classList.add("hidden"); 
  });

  sortToggle.addEventListener("click", () => {
    sortMenu.classList.toggle("hidden");
    filterMenu.classList.add("hidden"); 
  });
</script>

  </body>
@endsection