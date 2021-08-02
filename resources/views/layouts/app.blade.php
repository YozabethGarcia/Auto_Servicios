<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://unpkg.com/tailwindcss@2.1.4/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>

<body class="bg-gray-200">
    
<div x-data="setup()" :class="{ 'dark': isDark }">
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">

      <x-header/>
    
      <x-sidebar/>

      <!-- Sección a cambiar-->
      <x-form/>
      <!-- -->

    </div>
  </div>    

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
  <script src="{{asset('js/custom.js')}}"></script>
  
</body>
</html>
