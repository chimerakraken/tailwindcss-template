<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/dev.css') }}" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="{{asset('img/outlined-logo.png')}}" />
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <title>Arpochi | General Santos City</title>
</head>
<body class="antialiased" x-data="{ openprofile: false, opensidebar: true}">
  <div class="relative min-h-screen md:flex">

    <!-- mobile menu bar -->
    <div class="bg-gradient-to-t from-red-800 to-rose-800 text-gray-100 flex justify-between md:hidden">
      <!-- logo -->
      <a href="#" class="block py-2 text-white font-bold pl-6" style="font-family: Lobster-Regular">
        <img src="{{asset('img/outlined-logo.png')}}" height="80" width="80" alt="">
      </a>

    </div>
    <!-- md sidebar button -->
    {{-- <div x-show="opensidebar" class="sidebar bg-gradient-to-t from-red-800 to-rose-800 text-red-100 w-20 space-y-6 py-7 absolute inset-y-0 left-0 transform -translate-x-full md:relative transition duration-200 ease-in-out">
      <!-- logo -->
      <a href="#" class="flex items-center space-x-2 px-4 pl-9">
        <img src="{{asset('img/outlined-logo.png')}}" height="175" width="175" alt="">
      </a>
      <!-- nav -->

      <nav class="text-sm subpixel-antialiased px-5 pt-4">
        <div class="mb-3 pl-1">
          <span class="font-medium">NAVIGATION</span>
        </div>
        <a href="#" class="block py-2 px-4 rounded transition duration-200 hover:bg-rose-100 hover:text-red-600 hover:font-medium">
          <svg class="w-4 h-4 inline mr-1 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
        </a>
        <a href="#" class="block py-2 px-4 rounded transition duration-200 hover:bg-rose-100 hover:text-red-600 hover:font-medium">
          <svg class="w-4 h-4 inline mr-1 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
        </a>
        <a href="" class="block py-2 px-4 rounded transition duration-200 hover:bg-rose-100 hover:text-red-600 hover:font-medium">
          <svg class="w-4 h-4 inline mr-1 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
        </a>
        <a href="" class="block py-2 px-4 rounded transition duration-200 hover:bg-rose-100 hover:text-red-600 hover:font-medium bg-rose-100 text-red-600 font-medium">
          <svg class="w-4 h-4 inline mr-1 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
        </a>
        <a href="" class="block py-2 px-4 rounded transition duration-200 hover:bg-rose-100 hover:text-red-600 hover:font-medium">
          <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg>
        </a>
        <a href="" class="block py-2 px-4 rounded transition duration-200 hover:bg-rose-100 hover:text-red-600 hover:font-medium">
          <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>

        </a>
  
        <a href="" class="block py-2 px-4 rounded transition duration-200 hover:bg-rose-100 hover:text-red-600 hover:font-medium">
          <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
    
        </a>
        <a href="" class="block py-2 px-4 rounded transition duration-200 hover:bg-rose-200 hover:text-red-600 hover:font-medium">
          <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
     
        </a>
        <a href="" class="block py-2 px-4 rounded transition duration-200 hover:bg-rose-200 hover:text-red-600 hover:font-medium">
          <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        </a>
      </nav>
      <div class="absolute inset-x-0 px-4 bottom-0 h-16 subpixel-antialiased text-sm cursor-pointer" @click=" openprofile = true ">
        <div class="static">
            <div class="absolute shadow-lg bg rounded-full py-1 px-3 bg-rose-100 font-medium text-red-600 text-xs animate-bounce -top-8">
              New Update: Click the profile below!
            </div>
        </div>
        <img class="inline-block h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
 
        <div class="absolute ml-12 top-0 h-16 ...">
          <span class="font-medium text-white">Kiyan Patrick</span> 
        </div>
        <div class="absolute ml-12 bottom-0 h-11 text-gray-400">
          <span class="text-sm mt-2 text-red-100">KiyanPatrick@sisyphus.com</span> 
        </div>
        <div class="absolute right-0 top-0 h-16 mr-5">
        </div>
      </div>
    </div>  --}}

    <!-- sidebar -->
    <div
     x-show="opensidebar" 
     x-transition:enter="transition ease-in-out duration-300"
     x-transition:enter-start="transition ease-out duration-300"
     x-transition:enter-end="transform translate-x-64"
     x-transition:leave="transition ease-in-out duration-300"
     x-transition:leave-start="transition ease-out duration-300"
     x-transition:leave-end="transform translate-x-64"

     class="sidebar bg-gradient-to-t from-red-800 to-rose-800 text-red-100 w-64 space-y-6 py-7 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">
      <!-- logo -->
      <a href="#" class="flex items-center space-x-2 px-4 pl-9">
        <img src="{{asset('img/outlined-logo.png')}}" height="175" width="175" alt="">
      </a>
      <!-- nav -->

      <nav class="text-sm subpixel-antialiased px-5 pt-4">
        <div class="mb-3 pl-1">
          <span class="font-medium">NAVIGATION</span>
        </div>
        <a href="#" class="block py-2 px-4 rounded transition duration-200 hover:bg-rose-100 hover:text-red-600 hover:font-medium">
          <svg class="w-4 h-4 inline mr-1 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
          Home
        </a>
        <a href="#" class="block py-2 px-4 rounded transition duration-200 hover:bg-rose-100 hover:text-red-600 hover:font-medium">
          <svg class="w-4 h-4 inline mr-1 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
          Reports
        </a>
        <a href="" class="block py-2 px-4 rounded transition duration-200 hover:bg-rose-100 hover:text-red-600 hover:font-medium">
          <svg class="w-4 h-4 inline mr-1 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
          Items
        </a>
        <a href="" class="block py-2 px-4 rounded transition duration-200 hover:bg-rose-100 hover:text-red-600 hover:font-medium bg-rose-100 text-red-600 font-medium">
          <svg class="w-4 h-4 inline mr-1 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
          Inventory Management
        </a>
        <a href="" class="block py-2 px-4 rounded transition duration-200 hover:bg-rose-100 hover:text-red-600 hover:font-medium">
          <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg>
          Employees
        </a>
        <a href="" class="block py-2 px-4 rounded transition duration-200 hover:bg-rose-100 hover:text-red-600 hover:font-medium">
          <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
          Customers
        </a>
        <div class="mb-3 pl-1 mt-3">
          <span class="font-medium">SUPPORT</span>
        </div>
        <a href="" class="block py-2 px-4 rounded transition duration-200 hover:bg-rose-100 hover:text-red-600 hover:font-medium">
          <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
          Settings
        </a>
        <a href="" class="block py-2 px-4 rounded transition duration-200 hover:bg-rose-200 hover:text-red-600 hover:font-medium">
          <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
          Developers
        </a>
        <a href="" class="block py-2 px-4 rounded transition duration-200 hover:bg-rose-200 hover:text-red-600 hover:font-medium">
          <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          FAQ
        </a>
      </nav>
      <div class="absolute inset-x-0 px-4 bottom-0 h-16 subpixel-antialiased text-sm cursor-pointer" @click=" openprofile = true ">
        <div class="static">
            <div class="absolute shadow-lg bg rounded-full py-1 px-3 bg-rose-100 font-medium text-red-600 text-xs animate-bounce -top-8">
              New Update: Click the profile below!
            </div>
        </div>
        <img class="inline-block h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
 
        <div class="absolute ml-12 top-0 h-16 ...">
          <span class="font-medium text-white">Kiyan Patrick</span> 
        </div>
        <div class="absolute ml-12 bottom-0 h-11 text-gray-400">
          <span class="text-sm mt-2 text-red-100">KiyanPatrick@sisyphus.com</span> 
        </div>
        <div class="absolute right-0 top-0 h-16 mr-5">
          {{-- <svg class="w-4 h-4 cursor-pointer animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg> --}}
        </div>
      </div>
    </div>
  
    <!-- content -->
    <div class="flex-1 text-2xl">
      <div class="flex font-sans shadow py-4 pl-8">
        <p class="tracking-tight font-medium text-red-600 text-xl">
          Inventory Management
        </p>
        <svg class="w-5 h-5 inline mt-1.5 ml-1.5 fill-current text-rose-300 rounded-full ring-1 ring-pink-100 cursor-pointer" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
      </div>  
      {{-- <div class="top-5">
        <!-- mobile menu button -->
        <button class="rounded-md text-rose-300 hover:text-red-400 focus:outline-none focus:ring-2 focus:ring-white" @click="opensidebar = false">
          <span class="sr-only">Close panel</span>
          <svg class="h-6 w-6" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div> --}}
    </div>
  </div>
  <section @keydown.window.escape="openprofile = false" x-init="$watch(&quot;openprofile&quot;, o => !o &amp;&amp; window.setTimeout(() => (null), 5000))" x-show="openprofile" class="fixed inset-0 overflow-hidden" aria-labelledby="slide-over-title" x-ref="dialog" aria-modal="true">
    <div class="absolute inset-0 overflow-hidden">
      <div x-show="openprofile" 
        x-transition:enter="ease-in-out duration-500" 
        x-transition:enter-start="opacity-0" 
        x-transition:enter-end="opacity-100" 
        x-transition:leave="ease-in-out duration-500"
        x-transition:leave-start="opacity-100" 
        x-transition:leave-end="opacity-0"
        x-description="Background overlay, show/hide based on slide-over state." 
        class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="openprofile = false" aria-hidden="true">
      </div>
      <div class="fixed inset-y-0 right-0 pl-10 max-w-full flex">
          <div
              x-show="openprofile"
              x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700" 
              x-transition:enter-start="translate-x-full"
              x-transition:enter-end="translate-x-0"
              x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700" 
              x-transition:leave-start="translate-x-0"
              x-transition:leave-end="translate-x-full" class="relative w-screen max-w-md"
               x-description="Slide-over panel, show/hide based on slide-over state.">
              <div x-show="openprofile" x-transition:enter="ease-in-out duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-500" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Close button, show/hide based on slide-over state." class="absolute top-0 left-0 -ml-8 pt-4 pr-2 flex sm:-ml-10 sm:pr-4">
              </div>
            <div class="h-full flex flex-col pb-6 bg-white shadow-xl overflow-y-scroll">
              <div class="p-5 sm:px-6 min-h-24 static bg-gradient-to-t from-red-800 to-rose-700">
                <div class="absolute top-5 right-8">
                  <button class="rounded-md text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-white" @click="openprofile = false">
                    <span class="sr-only">Close panel</span>
                    <svg class="h-6 w-6" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                  </button>
                </div>
                <h2 class="text-lg font-medium text-white" id="slide-over-title">
                  Personal Information
                </h2>
                {{-- Header Description --}}
                <p class="text-sm mt-2 text-red-100">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cursus euismod quis viverra nibh cras pulvinar mattis.
                </p>
              </div>
                  <div class="mt-6 relative flex-1 px-4 sm:px-6">
                    <div class="border border-light-blue-300 shadow rounded-md p-4 max-w-sm w-full mx-auto">
                      <div class="animate-pulse flex space-x-4">
                        <div class="rounded-full bg-red-200 h-12 w-12"></div>
                        <div class="flex-1 space-y-4 py-1">
                          <div class="h-4 bg-red-200 rounded w-3/4"></div>
                          <div class="space-y-2">
                            <div class="h-4 bg-red-200 rounded"></div>
                            <div class="h-4 bg-red-200 rounded w-5/6"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /End replace -->
              </div>
            </div>
          </div>
        
      </div>
    </div>
  </section>
</body>
</html>