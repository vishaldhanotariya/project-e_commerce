<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>boAt Landing Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./assets/css/style.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    
  </style>
</head>

<body class="bg-white font-sans antialiased select-none">

<!-- Top Small Banner -->
  <div class="bg-gray-100 border-b border-gray-300 text-center py-1 text-xs px-3">
    Get additional 5% off on Prepaid orders| Code: <strong>BOATHEAD</strong> | 
    <a href="#" class="underline hover:text-blue-700">Shop Now</a>
  </div>

  <!-- Navbar -->
  <nav class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
    <!-- Left side - Logo & Menu -->
    <div class="flex items-center space-x-8">
      <!-- boAt Logo -->
      <div class="text-3xl font-extrabold tracking-tight text-black flex items-center">
        bo<span class="text-red-600">A</span>t
      </div>

      <!-- Nav Items -->
      <ul class="hidden md:flex space-x-6 text-sm font-medium text-gray-800">
        <li class="relative group cursor-pointer">
          Categories
          <svg class="inline-block ml-1 w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
          </svg>
          <!-- Dropdown placeholder for categories -->
          <ul
            class="absolute top-full left-0 mt-2 w-40 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all duration-150 z-30">
            <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Speakers</li>
            <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Earbuds</li>
            <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Smart Watches</li>
            <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Cables</li>
          </ul>
        </li>
        <li class="cursor-pointer hover:text-blue-700">boAt Personalisation</li>
        <li class="cursor-pointer hover:text-blue-700">Corporate Orders</li>
        <li class="cursor-pointer hover:text-blue-700">Gifting Store</li>
        <li class="relative group cursor-pointer">
          More
          <svg class="inline-block ml-1 w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
          </svg>
          <ul
            class="absolute top-full left-0 mt-2 w-36 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all duration-150 z-30">
            <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">About boAt</li>
            <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Support</li>
            <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Blog</li>
          </ul>
        </li>
      </ul>
    </div>

    <!-- Right side - Search and Icons -->
    <div class="flex items-center space-x-6">
      <!-- Search Bar -->
      <div class="relative text-gray-500">
        <input type="text" placeholder='Search "Speakers"' 
          class="w-64 py-2 pl-10 pr-4 rounded-full border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none text-sm" />
        <svg class="absolute top-1/2 left-3 transform -translate-y-1/2 w-4 h-4" fill="none" stroke="currentColor"
          stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <circle cx="11" cy="11" r="7" />
          <line x1="21" y1="21" x2="16.65" y2="16.65" />
        </svg>
      </div>

      <!-- Flash Icon -->
      <button aria-label="Offers" class="focus:outline-none text-gray-800 hover:text-yellow-500 transition-colors">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 stroke-current" fill="none" viewBox="0 0 24 24"
          stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M13 10V3L4 14h7v7l9-11h-7z" />
        </svg>
      </button>

      <!-- Shopping Bag Icon -->
      <button aria-label="Cart" class="focus:outline-none text-gray-800 hover:text-blue-600 transition-colors">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 stroke-current" fill="none" viewBox="0 0 24 24"
          stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.2 6h12.4M7 13L5.4 5M16 16a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
        </svg>
      </button>
      <a href="" style="border: 1px solid; border-radius: 50%;padding: 5px">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30px" width="30px" version="1.1" id="Capa_1" viewBox="0 0 60.671 60.671" xml:space="preserve">
            <g>
                <g>
            <ellipse style="fill:#010002;" cx="30.336" cy="12.097" rx="11.997" ry="12.097"/>
            <path style="fill:#010002;" d="M35.64,30.079H25.031c-7.021,0-12.714,5.739-12.714,12.821v17.771h36.037V42.9    C48.354,35.818,42.661,30.079,35.64,30.079z"/>
                </g>
            </g>
            </svg>
        </a>
    </div>
  </nav>