<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
   @vite('resources/css/app.css')
</head>
<body class="bg-primary text-black">
 <div class="max-w-[800px] md:max-w-[1920px] mx-auto w-full overflow-hidden z-10">
    @yield('content')
    @include('partials/footer')
  </div>
</body>
</html>