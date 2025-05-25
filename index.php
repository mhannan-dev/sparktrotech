<?php
/*
		This is the template for the header
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

  <!-- Open Graph Meta Tags -->
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
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" />
</head>

<body class="bg-gray-100 text-gray-800 font-sans" <?php body_class(); ?>>

  <!-- Navbar -->
  <header class="bg-black shadow-sm border-b border-gray-700 sticky top-0 z-50" x-data="{ mobileOpen: false, tutorialOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
      <!-- Logo -->
      <a href="#" class="text-2xl font-bold text-white">Sparktro</a>

      <!-- Desktop Menu -->
      <nav class="hidden md:flex gap-6 text-sm font-medium text-gray-300 items-center">
        <a href="#" class="hover:text-white transition">Home</a>

        <!-- Tutorials Dropdown -->
        <div class="relative" @mouseenter="tutorialOpen = true" @mouseleave="tutorialOpen = false">
          <button class="hover:text-white transition inline-flex items-center">
            Tutorials
            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M5.23 7.21a.75.75 0 011.06.02L10 11.204l3.71-3.974a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                clip-rule="evenodd" />
            </svg>
          </button>
          <div x-show="tutorialOpen" x-transition
            class="absolute left-0 mt-2 w-44 rounded-lg bg-white shadow-lg text-sm text-gray-700 z-50"
            @click.away="tutorialOpen = false">
            <ul class="py-2">
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Web Dev</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">AI/ML</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Mobile Apps</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Others</a></li>
            </ul>
          </div>
        </div>

        <a href="#" class="hover:text-white transition">Dev Tools</a>
        <a href="#" class="hover:text-white transition">Reviews</a>
        <a href="#" class="hover:text-white transition">About</a>
      </nav>

      <!-- Mobile Menu Button -->
      <div class="md:hidden">
        <button @click="mobileOpen = !mobileOpen" class="text-white focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
<div x-show="mobileOpen" x-transition class="md:hidden px-4 pb-4 space-y-2 text-gray-300" @click.away="mobileOpen = false">
  <a href="#" class="block hover:text-white">Home</a>

  <!-- Mobile Dropdown for Tutorials -->
  <div x-data="{ openTutorials: false }">
    <button @click="openTutorials = !openTutorials" class="w-full flex justify-between items-center hover:text-white">
      Tutorials
      <svg :class="{ 'rotate-180': openTutorials }" class="w-4 h-4 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
      </svg>
    </button>
    <div x-show="openTutorials" x-transition class="pl-4 mt-2 space-y-1">
      <a href="#" class="block text-sm hover:text-white">Web Dev</a>
      <a href="#" class="block text-sm hover:text-white">AI/ML</a>
      <a href="#" class="block text-sm hover:text-white">Mobile Apps</a>
      <a href="#" class="block text-sm hover:text-white">Others</a>
    </div>
  </div>

  <a href="#" class="block hover:text-white">Dev Tools</a>
  <a href="#" class="block hover:text-white">Reviews</a>
  <a href="#" class="block hover:text-white">About</a>
</div>


  </header>

  <!-- Blog Grid Section -->
  <main class="max-w-5xl mx-auto px-4 py-16 space-y-10">

    <div class="flex items-center justify-between mb-6">
      <h1 class="text-3xl font-bold">Latest News</h1>
      <!-- Toggle Switch for Headlines Only -->
      <label class="flex items-center space-x-3 cursor-pointer">
        <span class="text-sm text-gray-700">Headlines Only</span>
        <input type="checkbox" id="headlineToggle" class="toggle-checkbox hidden">
        <div class="w-10 h-5 bg-gray-300 rounded-full toggle-label relative">
          <div class="dot absolute left-1 top-1 bg-white w-3 h-3 rounded-full transition"></div>
        </div>
      </label>
    </div>

    <!-- Blog Articles -->
    <section id="blogList" class="space-y-6">

      <article class="bg-white rounded-xl shadow hover:shadow-md transition flex flex-col md:flex-row overflow-hidden">
        <img class="w-full md:w-1/3 h-48 md:h-auto object-cover" src="https://source.unsplash.com/400x300/?productivity,apps" alt="Productivity tools image" />
        <div class="p-6 flex flex-col justify-center">
          <span class="text-sm text-[#0f9d58] font-semibold uppercase">Productivity</span>
          <h2 class="text-xl font-semibold mt-1 mb-2">Top 5 Developer Productivity Tools in 2025</h2>
          <time class="text-gray-500 text-sm">Published: January 5, 2025</time>
          <p class="mt-2 text-gray-600 blog-description">Discover the latest tools to boost your efficiency as a developer.</p>
          <a href="blog-detail.html" class="mt-4 text-[#0f9d58] hover:underline font-medium inline-block">Read More →</a>
        </div>
      </article>

      <article class="bg-white rounded-xl shadow hover:shadow-md transition flex flex-col md:flex-row overflow-hidden">
        <img class="w-full md:w-1/3 h-48 md:h-auto object-cover" src="https://source.unsplash.com/400x300/?programming,code" alt="VS Code extensions image" />
        <div class="p-6 flex flex-col justify-center">
          <span class="text-sm text-[#0f9d58] font-semibold uppercase">Tools</span>
          <h2 class="text-xl font-semibold mt-1 mb-2">VS Code Extensions Every Developer Should Use</h2>
          <time class="text-gray-500 text-sm">Published: January 10, 2025</time>
          <p class="mt-2 text-gray-600 blog-description">A curated list of must-have VS Code extensions for developers.</p>
          <a href="blog-detail.html" class="mt-4 text-[#0f9d58] hover:underline font-medium inline-block">Read More →</a>
        </div>
      </article>

      <article class="bg-white rounded-xl shadow hover:shadow-md transition flex flex-col md:flex-row overflow-hidden">
        <img class="w-full md:w-1/3 h-48 md:h-auto object-cover" src="https://source.unsplash.com/400x300/?ai,technology" alt="AI tools image" />
        <div class="p-6 flex flex-col justify-center">
          <span class="text-sm text-[#0f9d58] font-semibold uppercase">AI</span>
          <h2 class="text-xl font-semibold mt-1 mb-2">AI Tools Every Developer Should Know in 2025</h2>
          <time class="text-gray-500 text-sm">Published: January 15, 2025</time>
          <p class="mt-2 text-gray-600 blog-description">Explore how AI is transforming the daily workflow of coders.</p>
          <a href="blog-detail.html" class="mt-4 text-[#0f9d58] hover:underline font-medium inline-block">Read More →</a>
        </div>
      </article>

    </section>

    <!-- Pagination -->
    <div class="flex justify-center mt-10">
      <nav class="inline-flex space-x-2" aria-label="Pagination">
        <a href="#" class="px-4 py-2 text-sm text-white bg-[#0f9d58] rounded hover:bg-green-700">Previous</a>
        <a href="#" class="px-4 py-2 text-sm text-[#0f9d58] bg-white border border-gray-300 rounded hover:bg-gray-100">1</a>
        <a href="#" class="px-4 py-2 text-sm text-[#0f9d58] bg-white border border-gray-300 rounded hover:bg-gray-100">2</a>
        <a href="#" class="px-4 py-2 text-sm text-[#0f9d58] bg-white border border-gray-300 rounded hover:bg-gray-100">3</a>
        <span class="px-4 py-2 text-sm text-gray-500">...</span>
        <a href="#" class="px-4 py-2 text-sm text-[#0f9d58] bg-white border border-gray-300 rounded hover:bg-gray-100">10</a>
        <a href="#" class="px-4 py-2 text-sm text-white bg-[#0f9d58] rounded hover:bg-green-700">Next</a>
      </nav>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-white border-t py-6 text-center text-sm text-gray-500">
    <div class="flex flex-col md:flex-row justify-center items-center gap-4 mb-2">
      <a href="#" class="hover:text-[#0f9d58] transition">FAQ</a>
      <a href="#" class="hover:text-[#0f9d58] transition">Privacy Policy</a>
      <a href="#" class="hover:text-[#0f9d58] transition">Terms & Conditions</a>
    </div>
    <div>© ২০২৫ Sparktro. Inspired by TechCrunch. Built with 💻 and ☕.</div>
  </footer>

  <!-- Toggle Script -->
  <script>
    const toggle = document.getElementById('headlineToggle');
    const descriptions = document.querySelectorAll('.blog-description');
    const dot = document.querySelector('.dot');
    const toggleLabel = document.querySelector('.toggle-label');

    toggleLabel.addEventListener('click', () => {
      toggle.checked = !toggle.checked;
      dot.style.transform = toggle.checked ? 'translateX(20px)' : 'translateX(0)';
      descriptions.forEach(desc => {
        desc.style.display = toggle.checked ? 'none' : 'block';
      });
    });
  </script>
  <?php

  /*
		This is the template for the footer
		
		@package sparktrotech
    @since 1.0.0
	*/

  ?>

  <?php wp_footer(); ?>
</body>

</html>