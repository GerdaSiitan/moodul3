@extends('partials.layout')
@section('content')
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded" rel="stylesheet" />
</head>
<body class="bg-primary">

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
<section class="items-justify md:mb-[100px]">
     <h1 class="relative text-[36px] md:text-[64px] leading-tight md:leading-[0.85] text-secondary font-primary text-centertext-secondary font-primary text-center md:mt-[200px] mt-[130px] ">
     KONTAKTEERU MEIEGA</h1>
     <img src="/element-3.png" class=" w-full md:mt-[-210px] hidden md:block">
</section>


{{--präginuvorm etfc--}}
<section class=" px-6 py-[150px] md:px-24 flex flex-col md:flex-row items-start justify-between md:ml-[180px] md:mt-[-100px]">

<div class="md:ml-[200px] md:mt-[-200px] mt-[-200px] ml-[15px]">
    <img src="/RAWA-TUULIK-LOGO.svg" alt="Rawa Tuulik Logo" class="md:w-[300px] w-[250px] ml-[-40px] md:ml-[0px] mb-[20px] md:mb-[0px] mt-[50px] md:mt-[0px]" />

    <h2 class="md:text-[32px] text-[24px] font-primary text-secondary uppercase md:ml-[20px] ml-[-20px] mt-[-60px]  md:mt-[-60px]">Kontakt</h2>

    <p class="text-secondary font-semibold md:ml-[20px] ml-[-20px] mb-[10px] md:mb-[0px]">
      Järva maakond, Järva vald, <br>
      Rava küla, Möldri.
    </p>

    <p class="flex items-center text-secondary font-semibold md:ml-[20px] ml-[-20px] mb-[10px] md:mb-[0px]">
      <span class="material-symbols-rounded mr-2 text-secondary">mail</span>
      <a href="mailto:info@rawatuulik.com">info@rawatuulik.com</a>
    </p>

    <p class="flex items-center text-secondary font-semibold md:ml-[20px] ml-[-20px] mb-[27px] md:mb-[0px]">
      <span class="material-symbols-rounded mr-2 text-secondary">call</span>
      <a href="tel:+37255551234">+372 5555 1234</a>
    </p>
</div>


{{--kontakt --}}
  <div class="w-full md:w-[500px] space-y-6 md:mt-[-100px] mt-[20px] md:mr-[300px] mr-[-100px] ml-[-2px] mb-[5px] md:mb-[0px]">
    <h2 class="md:text-[32px] text-[24px] font-primary  text-secondary uppercase">Võta ühendust</h2>

    <form class="space-y-4">
      <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Nimi</label>
        <input type="text" id="name" class="mt-1 block w-full border border-gray-300 rounded-md bg-[#FFFCF5] px-3 py-2 focus:outline-none focus:ring-2 focus:ring-secondary" />
      </div>

      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
        <input type="email" id="email" class="mt-1 block w-full border border-gray-300 rounded-md bg-[#FFFCF5] px-3 py-2 focus:outline-none focus:ring-2 focus:ring-secondary" />
      </div>

      <div>
        <label for="message" class="block text-sm font-medium text-gray-700">Küsimus</label>
        <textarea id="message" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md bg-[#FFFCF5] px-3 py-2 focus:outline-none focus:ring-2 focus:ring-secondary"></textarea>
      </div>

      <button type="submit" class="uppercase w-full border-2 border-secondary text-secondary font-semibold py-2 rounded-full hover:bg-secondary hover:text-primary transition">
        Saada
      </button>
    </form>
  </div>
</section>


{{--kaart--}}
<section class="py-[150px]">
  <div class="md:ml-[490px] md:mt-[-200px] mt-[-220px] ml-[20px] ">
  <h2 class="md:text-[32px] text-[24px] font-primary text-secondary uppercase">Asukoht kaardil</h2>
  </div>

  <div class="w-full md:w-[1000px] w-[320px] md:h-[600px] h-[400px] md:h-[450px] md:mt-6 mt-4 ml-[20px] rounded-xl overflow-hidden shadow-lg md:ml-[490px] ">
  <iframe
    class="w-full h-full"
    src="https://www.google.com/maps?q=Järva maakond, Järva vald, Rava küla, Möldri&output=embed"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>

 <div class="md:ml-[490px] ml-[20px] md:mt-[30px] mt-[10px]">
  <p class="md:text-[16px] text-[15px] font-secondary text-secondary">Järva maakond, Järva vald, Rava küla, Möldri.</p>
  </div>

</section>
   
  </body>
@endsection