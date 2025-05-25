<?php 
	/*
		This is the template for the hedaer
		@package sparktrotech
	*/	
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- SEO Meta Tags -->
  <title>Sparktro Tech Blog - Home</title>
  <meta name="description" content="Sparktro - Tech tutorials, developer tools, and news for the modern coder." />
  <meta name="keywords" content="tech blog, developer tools, coding tutorials, programming, AI, software reviews" />
  <meta name="author" content="Sparktro Team" />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="https://www.sparktro.com/" />

  <!-- Open Graph Meta Tags for Social Sharing -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Sparktro Tech Blog - Home" />
  <meta property="og:description" content="Tech tutorials, developer tools, and news for the modern coder." />
  <meta property="og:image" content="https://www.sparktro.com/assets/og-image.jpg" />
  <meta property="og:url" content="https://www.sparktro.com/" />
  <meta property="og:site_name" content="Sparktro" />

  <!-- Twitter Card Meta Tags -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Sparktro Tech Blog - Home" />
  <meta name="twitter:description" content="Tech tutorials, developer tools, and news for the modern coder." />
  <meta name="twitter:image" content="https://www.sparktro.com/assets/twitter-image.jpg" />
  <meta name="twitter:site" content="@sparktro" />
  <meta name="twitter:creator" content="@sparktro" />

  <!-- Favicon -->
  <link rel="icon" href="/favicon.ico" type="image/x-icon" />

  <!-- Styles and Scripts -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" />
  <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans" <?php body_class(); ?>>
<!-- Navbar -->
<header class="bg-black shadow-sm border-b border-gray-700 sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
    <a href="#" class="text-2xl font-bold text-white">Sparktro</a>
    <nav class="hidden md:flex gap-6 text-sm font-medium text-gray-300">
      <a href="#" class="hover:text-white transition">Home</a>
      <a href="#" class="hover:text-white transition">Tutorials</a>
      <a href="#" class="hover:text-white transition">Dev Tools</a>
      <a href="#" class="hover:text-white transition">Reviews</a>
      <a href="#" class="hover:text-white transition">About</a>
    </nav>
  </div>
</header>

<!-- Blog Grid Section -->
<main class="max-w-5xl mx-auto px-4 py-16 space-y-10">