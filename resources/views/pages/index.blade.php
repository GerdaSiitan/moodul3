@extends('partials.layout')
@section('content')
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded" rel="stylesheet" />
   @vite('resources/css/app.css')
</head>
<body class="bg-primary">

{{--navchik--}}
<nav id="main-nav" class="fixed top-0 left-0 w-full bg-transparent text-white transition-all duration-300 z-50">
  <div class="max-w-[1450px] w-full mx-auto px-6 md:px-14 flex items-center justify-between h-24">

    <button class="lg:hidden z-50" id="hamburger-btn">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="h-6 w-6 text-white transition-colors duration-300" viewBox="0 0 24 24" stroke="currentColor" id="hamburger-icon">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>

    <img id="nav-logo" src="/RAWA-TUULIK-LOGO_valge.svg" class="md:h-40 h-32 transition-all duration-300 mx-auto lg:mx-0">

    <ul class="hidden lg:flex space-x-9 font-medium items-center text-[16px]" id="nav-links">
      <li><a href="{{route('home')}}">AVALEHT</a></li>
      <li><a href="{{route('merch')}}">E-POOD</a></li>
      <li><a href="{{route('contact')}}">KONTAKT</a></li>
    </ul>

    <div class="hidden lg:flex items-center space-x-4" id="nav-buttons">
      <a href="{{route('annetus')}}"
         class="border-2 border-white text-white rounded-full px-6 py-2 hover:bg-orange-600 hover:border-orange-600 hover:text-white transition text-sm font-semibold"
         id="donate-btn">
        OLE ABIKS!
      </a>
      <span class="material-symbols-rounded text-[32px] md:text-[36px] transition-all duration-300 text-white" id="cart-icon">
        shopping_bag
      </span>
    </div>
  </div>
</nav>

<div id="mobile-menu" class="fixed inset-0 bg-orange-50 text-orange-600 z-40 flex flex-col items-start p-6 space-y-6 transform -translate-x-full transition-transform duration-300 lg:hidden">
  <button id="close-menu" class="text-3xl text-black">
    <span id="closeMenu" class="material-symbols-rounded">
      close
    </span>
  </button>
  <a href="/" class="{{route('home')}}">AVALEHT</a>
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
      nav.classList.remove("bg-transparent");

      donateBtn.classList.add("border-orange-600", "text-orange-600");
      donateBtn.classList.remove("border-white", "text-white");

      navLinks?.querySelectorAll("a").forEach(link => {
        link.classList.add("text-orange-600");
        link.classList.remove("text-white");
      });

      hamburgerIcon.classList.add("text-orange-600");
      hamburgerIcon.classList.remove("text-white");

      cartIcon.classList.add("text-orange-600");
      cartIcon.classList.remove("text-white");

      navLogo.src = "/RAWA-TUULIK-LOGO.svg";
    } else {
      nav.classList.remove("bg-orange-50");
      nav.classList.add("bg-transparent");

      donateBtn.classList.remove("border-orange-600", "text-orange-600");
      donateBtn.classList.add("border-white", "text-white");

      navLinks?.querySelectorAll("a").forEach(link => {
        link.classList.remove("text-orange-600");
        link.classList.add("text-white");
      });

      hamburgerIcon.classList.remove("text-orange-600");
      hamburgerIcon.classList.add("text-white");

      cartIcon.classList.remove("text-orange-600");
      cartIcon.classList.add("text-white");

      navLogo.src = "/RAWA-TUULIK-LOGO_valge.svg";
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
<header class="relative w-full">
  <img src="/header-pic.png" class="w-full h-[570px] md:h-[900px]  md:mt-[-80px] object-cover">
  <div class="absolute inset-0 flex items-center justify-center">
    <div class="max-w-[1450px] mx-auto w-full px-6">
      <h1 class=" text-white font-primary text-[60px] md:text-[150px] leading-tight leading-[0.85] md:leading-[0.85] z-10 text-left md:ml-[50px] mt-[50px] md:mt-[30px] md:mb-[17px]">
        TULE TUULE <br> JUURDE
      </h1>
      <button class="flex items-center gap-2 md:px-[25px] px-[20px] md:py-[12px] py-[10px] border-2 border-primary text-primary uppercase font-semibold 
      rounded-full transition hover:bg-secondary hover:border-secondary hover:text-primary mt-[20px] md:mt-[0px] md:ml-[50px]">
        LOE JUURDE
        <span class="material-symbols-rounded transition">arrow_forward</span>
      </button>
    </div>
  </div>
  <div>
    <img src="/header-overlay.png" class="md:relative md:w-[1000px] md:h-full md:mt-[-585px] md:ml-[950px] md:object-cover md:z-20 hidden md:block">
  </div>
</header>


{{--ajalugu--}}
<section class="relative max-w-full bg-primary md:h-[850px] h-[450px] max-w-[1450px] mx-auto w-full">
  <h1 class="font-primary text-orange-600 md:text-[32px] text-[20px] md:ml-[320px] ml-[15px] md:pt-[80px] pt-[35px]" >NATUKENE RAVA AJALOOST</h1>
  <div class="w-[1600px] h-[4px] rounded bg-secondary md:ml-[315px] ml-[20px] my-2"></div>
  <button class="md:ml-[320px] ml-[15px] font-primary text-secondary md:text-[48px] text-[32px]" >1554</button>
  <button class="md:ml-[40px] ml-[23px] font-primary text-opacity-75 text-secondary hover:text-secondary md:text-[48px] text-[32px]" >1779</button>
   <button class="md:ml-[40px] ml-[23px] font-primary text-opacity-75  text-secondary hover:text-secondary md:text-[48px] text-[32px]" >1919</button>
   <button class="md:ml-[40px] ml-[23px] font-primary text-opacity-75 text-secondary hover:text-secondary md:text-[48px] text-[32px]" >1936</button>
   <button class="md:ml-[40px] ml-[15px] font-primary text-opacity-75 text-secondary hover:text-secondary md:text-[48px] text-[32px]" >2020-</button>
    <img src="/rava-küla-ajalugu.png" class="relative w-[447px] h-[330px] md:mt-[10px] mt-[10px] md:ml-[320px] object-cover rounded-md hidden md:block">
     <h2 class="font-primary text-orange-600 md:text-[32px] text-[20px] md:ml-[830px] md:mt-[-300px] mt-[20px] ml-[15px]" >Rava Küla</h2>
     <p class="font-regular text-gray-800 md:text-[16px] text-[13px] md:ml-[830px] md:mt-[10px] ml-[15px] mr-[20px] md:mr-[300px]" >Aastal 1554 ostis Rava küla Robert Fricks, kelle juhtimisel
     hakati sinna mõisa rajama. Rava mõis (saksa keeles Rawaküll) rajati 17. sajandi alguses ning selle esimesed omanikud olid 
      Helffreichid. Mõis oli suguvõsa omanduses kuni aastani 1797, mil selle ostis Georg Friedrich von Stackelberg .<br>
       <br>Seega, kuigi Rava tuulik ise ei pärine 1554. aastast, on see osa Rava mõisa ja küla ajaloolisest pärandist, mis ulatub tagasi vähemalt 16. sajandisse.</p>
  
    {{--element--}}
        <img src="/element-1.png" class="w-[1900px] md:pt-[200px] pt-[50px] object-cover">
</section>

{{--t4gelased--}}
<section class="relative max-w-full bg-secondary md:mt-[-80px] md:pt-[100px] md:h-[850px] h-[550px] max-w-[1450px] mx-auto w-full">

  <h1 class="font-primary text-primary md:text-[32px] text-[20px] md:ml-[750px] ml-[15px] md:pt-[120px] pt-[35px]" >NATUKENE RAVA TEGELASTEST</h1>
  <div class="w-[1600px] h-[4px] rounded bg-primary md:ml-[745px] ml-[15px] my-2"></div>
  <button class="md:ml-[750px] ml-[15px] font-primary text-primary md:text-[48px]  text-[32px]" >ROBERT FRICKS</button>
   <button class="md:ml-[40px] ml-[15px] font-primary text-opacity-75 text-primary hover:text-primary md:text-[48px] text-[32px]" >GEORG FRIEDRICH</button>

  <p class=" font-regular text-primary md:text-[16px] text-[13px] md:ml-[750px] ml-[15px] md:mt-[30px] mt-[25px]  mr-[25px] md:mr-[300px]" >Kuigi Rava tuulik ise ehitati arvatavasti alles 18.–19. sajandil, räägib
  rahvapärimus, et Robert Fricks unistas juba oma eluajal suurest kivist tuulikust,mis suudaks teenindada nii mõisa kui ka ümbruskonna talupoegi. Tollel ajal olid
   enamik veskeid veel puidust ja käsitsi juhitavad, kuid Fricks püüdis tutvustada uuenduslikumaid lähenemisi, mida ta olevat näinud oma reisidel Saksamaal ja Hollandis.
  <br><br>
  Legendi järgi olevat ta joonistanud isegi plaani tulevasele tuulikule – nelinurkne
  vundament, tugev kivikonstruktsioon ja pöörlev katus. Kuigi tema eluajal see
  plaan ei teostunud, usuvad mõned, et 18. sajandi lõpus ehitatud Rava tuulik
  valmis just tema algse visiooni põhjal, mida olid säilitanud mõisaarhiivid.</p>

  <img src="/Tuulik-SVG.svg" class=" w-[600px] h-[600px] md:ml-[120px] md:mt-[-500px] hidden md:block">

  </section>


{{--meened üritused sektsioon--}}
<section class=" max-w-full bg-orange-50 md:h-[1600px] h-[2400px] max-w-[1450px] mx-auto w-full">

   {{--üritused--}}
   <h1 class="font-primary text-secondary md:text-[32px] text-[20px] md:ml-[320px]  ml-[15px] md:pt-[80px] pt-[40px]" >KALENDER</h1>
  <div class="w-[1600px] h-[4px] rounded bg-secondary md:ml-[315px]  ml-[15px] my-2"></div>
  <button class="md:ml-[320px] ml-[15px] md:mt-[50px] font-primary text-secondary md:text-[48px] text-[32px] text-left leading-[1] md:leading-[0]" >SÜNDMUSED RAVA TUULIKUS</button>

  {{--ürtuste boksid--}}
<div class="flex gap-6 justify-center flex-wrap md:ml-[180px] ml-[10px] md:mt-[40px] mt-[20px] ">
   <div class="relative md:h-[390px] h-[306px] md:w-[430px] w-[345px] bg-gray-600 rounded-md">
    <img src="/corgi.jpg" class="h-full w-full object-cover rounded-md" />
    <div class="absolute bottom-0 left-0 w-full h-[85px] bg-orange-600 rounded-b-md px-4 py-2 flex items-center justify-between text-white">
      <div class="flex flex-col items-start mr-4 items-center">
        <span class="text-[28px] font-primary uppercase leading-tight">24</span>
        <span class="text-sm uppercase leading-none">mai</span>
      </div>
      <div class="flex flex-col items-start flex-grow">
        <span class="md:text-[24px] text-[20px] font-primary uppercase leading-tight">Corgi päev Ravas</span>
        <span class="text-[16px] uppercase">Loe rohkem</span>
      </div>
      <span class="material-symbols-rounded text-[48px]">arrow_upward</span>
    </div>
  </div>

  <div class="relative md:h-[390px] h-[306px] md:w-[430px] w-[345px] bg-gray-600 rounded-md">
    <img src="/tour.jpg" class="h-full w-full object-cover rounded-md">
    <div class="absolute bottom-0 left-0 w-full h-[85px] bg-orange-600 rounded-b-md px-4 py-2 flex items-center justify-between text-white">
            <div class="flex flex-col items-start mr-4 items-center">
        <span class="text-[28px] font-primary uppercase leading-tight">20</span>
        <span class="text-sm uppercase leading-none">mai</span>
      </div>
      <div class="flex flex-col items-start flex-grow">
        <span class="md:text-[24px] text-[20px] font-primary uppercase leading-tight">Ekskursioon</span>
        <span class="text-[16px] uppercase">Loe rohkem</span>
      </div>
      <span class="material-symbols-rounded text-[48px]">arrow_upward</span>
    </div>
  </div>

  <div class="relative md:h-[390px] h-[306px] md:w-[430px] w-[345px] bg-gray-600 rounded-md">
    <img src="/bron.jpg" class="h-full w-full object-cover rounded-md">
       <div class="absolute bottom-0 left-0 w-full h-[85px] bg-orange-600 rounded-b-md px-4 py-2 flex items-center justify-between text-white">
            <div class="flex flex-col items-start mr-4 items-center">
              <span class="text-[28px] font-primary uppercase leading-tight">1</span>
              <span class="text-sm uppercase leading-none">jun</span>
            </div>
          <div class="flex flex-col items-start flex-grow">
           <span class="md:text-[24px] text-[20px] font-primary uppercase leading-tight">Broneeritud</span>
         <span class="text-[16px] uppercase">Loe rohkem</span>
        </div>
        <span class="material-symbols-rounded text-[48px]">arrow_upward</span>
    </div>
  </div>

    <div class="h-[390px] flex items-center">
    <button class="flex items-center gap-2 px-[15px] md:py-[15px] border-2 border-secondary text-secondary uppercase font-semibold 
      rounded-full transition hover:bg-secondary hover:border-secondary hover:text-white hidden md:block">
      <span class="material-symbols-rounded text-[24px] hidden md:block">arrow_forward</span>
    </button>
  </div>

</div>

    {{--meened--}}
   <h1 class="font-primary text-secondary md:text-[32px] text-[20px] md:ml-[320px]  ml-[15px] mt-[-350px] md:mt-[0px] md:pt-[170px]" >TÜKIKE RAVAST ENDAGA KAASAT</h1>
  <div class="w-[1600px] h-[4px] rounded bg-secondary md:ml-[315px]  ml-[15px] my-2"></div>
  <button class="md:ml-[320px] ml-[15px] md:mt-[50px] font-primary text-secondary md:text-[48px] text-[32px] text-left leading-[1] md:leading-[0]" >MEENED</button>


    {{--meened boksid--}}
    <div class="flex gap-6 justify-center flex-wrap md:ml-[75px] md:mt-[50px] mt-[40px] ">
     <div class="relative md:h-[390px] h-[306px] md:w-[430px] w-[345px] bg-gray-600 rounded-md">
      <img src="/pusa.jpg" class="h-full w-full object-cover rounded-md">
    </div>

   <div class="relative md:h-[390px] h-[306px] md:w-[430px] w-[345px] bg-gray-600 rounded-md">
    <img src="/magnet.jpg" class="h-full w-full object-cover rounded-md">
    </div>

    <div class="relative md:h-[390px] h-[306px] md:w-[430px] w-[345px] bg-gray-600 rounded-md">
       <img src="/kott.jpg" class="h-full w-full object-cover rounded-md">
    </div>
  </div>

  <a href="/merch.html">
   <button class="flex items-center gap-2 px-[25px] py-[12px] border-2 border-secondary text-secondary uppercase font-semibold 
      rounded-full transition hover:bg-orange-600 hover:border-orange-600 hover:text-white  md:mt-[50px] mt-[20px] md:ml-[890px] ml-[95px]">
        VAATA JUURDE
        <span class="material-symbols-rounded transition">arrow_forward</span>
      </button>
    </a>

    <img src="/element-2.png" class=" w-[100px] md:mt-[-1600px] hidden md:block">

  </section>

</body>
@endsection