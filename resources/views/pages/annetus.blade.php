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
      <li><a href="/">AVALEHT</a></li>
      <li><a href="/merch.html">E-POOD</a></li>
      <li><a href="/contact.html">KONTAKT</a></li>
    </ul>

    <div class="hidden lg:flex items-center space-x-4" id="nav-buttons">
      <a href="/annetus.html"
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
  <a href="/" class="font-bold">AVALEHT</a>
  <a href="/merch.html" class="font-bold">E-POOD</a>
  <a href="/contact.html" class="font-bold">KONTAKT</a>
  <a href="/annetus.html" class="font-bold">OLE ABIKS!</a>
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
     TOETA RAVA TUULIKUT</h1>
     <img src="/element-3.png" class=" w-full md:mt-[-210px] hidden md:block">
</section>

{{--annetus--}}
<section class="items-justify md:mb-[180px] ml-[20px] md:ml-[0px]">
    <div class=" md:mt-[-60px] mt-[40px]">
  <div class="max-w-6xl mx-auto">
    <h1 class=" md:text-[32px] text-[24px] font-primary text-secondary mb-6">ANNETUS VÕIMALUSED</h1>

    <div class="grid md:grid-cols-2 gap-8 items-center">
      <div>
        <img src="rava-küla-ajalugu.png" alt="Rava Tuulik" class="rounded-lg shadow-md hidden md:block" />
      </div>

      <div>
        <h2 class=" md:text-[24px] text-[20px] md:mt-[0px] mt-[-30px] font-primary text-secondary mb-2">Toeta Rava Tuulikut</h2>
        <p class="text-gray-700 md:mb-4 mb-4 md:mr-[0px] mr-[10px] md:text-[16px] text-[14px] ">
          Rava Tuulik on meie kogukonna ajalooline pärl — 19. sajandist pärit Hollandi tüüpi tuuleveski, mis on säilinud tänu kohalike inimeste armastusele ja hoolimisele. Sinu annetus aitab meil:
        </p>
        <ul class="list-disc list-inside text-gray-700 mb-6 space-y-1">
          <li>Säilitada ja hooldada ajaloolist tuulikut</li>
          <li>Korraldada harivaid üritusi ja töötubasid</li>
          <li>Arendada külastuskeskust ja ekspositsioone</li>
          <li>Luua paremaid võimalusi külastajatele ja kogukonnale</li>
        </ul>

        <div class="flex flex-wrap gap-3 mb-6">
          <button class="border border-secondary rounded-full px-5 py-2 text-secondary font-medium hover:bg-secondary hover:text-primary">5 €</button>
          <button class="border border-secondary rounded-full px-5 py-2 text-secondary font-medium hover:bg-secondary hover:text-primary">10 €</button>
          <button class="border border-secondary rounded-full px-5 py-2 text-secondary font-medium hover:bg-secondary hover:text-primary">15 €</button>
          <button class="border border-secondary rounded-full px-5 py-2 text-secondary font-medium hover:bg-secondary hover:text-primary">MUU SUMMA</button>
        </div>

        <button class="mb-[40px] md:mb-[0px] bg-secondary rounded-full hover:bg-orange-700 hover:text-primary text-primary rounded-full px-6 py-3 font-semibold flex items-center gap-2">
          ANNETA
           <span class="material-symbols-rounded transition">arrow_forward</span>
        </button>
      </div>
    </div>
  </div>
</div>


</section>

  </body>
@endsection