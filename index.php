<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Sparktro - Tech tutorials, developer tools, and news for the modern coder." />
  <title>Sparktro Tech Blog - Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" />
  <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

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
    <h1 class="text-3xl font-bold mb-6">Sparktro Tech Latest News</h1>
    Here add an switch to show Headlines Only 
    <!-- Blog Card Template -->
    <article class="bg-white rounded-xl shadow hover:shadow-md transition flex flex-col md:flex-row overflow-hidden">
      <img class="w-full md:w-1/3 h-48 md:h-auto object-cover" src="https://source.unsplash.com/400x300/?productivity,apps" alt="Productivity tools image" />
      <div class="p-6 flex flex-col justify-center">
        <span class="text-sm text-[#0f9d58] font-semibold uppercase">Productivity</span>
        <h2 class="text-xl font-semibold mt-1 mb-2">Top 5 Developer Productivity Tools in 2025</h2>
        <time class="text-gray-500 text-sm">Published: January 5, 2025</time>
        <a href="blog-detail.html" class="mt-4 text-[#0f9d58] hover:underline font-medium inline-block">Read More →</a>
      </div>
    </article>

    <article class="bg-white rounded-xl shadow hover:shadow-md transition flex flex-col md:flex-row overflow-hidden">
      <img class="w-full md:w-1/3 h-48 md:h-auto object-cover" src="https://source.unsplash.com/400x300/?programming,code" alt="VS Code extensions image" />
      <div class="p-6 flex flex-col justify-center">
        <span class="text-sm text-[#0f9d58] font-semibold uppercase">Tools</span>
        <h2 class="text-xl font-semibold mt-1 mb-2">VS Code Extensions Every Developer Should Use</h2>
        <time class="text-gray-500 text-sm">Published: January 10, 2025</time>
        <a href="blog-detail.html" class="mt-4 text-[#0f9d58] hover:underline font-medium inline-block">Read More →</a>
      </div>
    </article>

    <article class="bg-white rounded-xl shadow hover:shadow-md transition flex flex-col md:flex-row overflow-hidden">
      <img class="w-full md:w-1/3 h-48 md:h-auto object-cover" src="https://source.unsplash.com/400x300/?ai,technology" alt="AI tools image" />
      <div class="p-6 flex flex-col justify-center">
        <span class="text-sm text-[#0f9d58] font-semibold uppercase">AI</span>
        <h2 class="text-xl font-semibold mt-1 mb-2">AI Tools Every Developer Should Know in 2025</h2>
        <time class="text-gray-500 text-sm">Published: January 15, 2025</time>
        <a href="blog-detail.html" class="mt-4 text-[#0f9d58] hover:underline font-medium inline-block">Read More →</a>
      </div>
    </article>

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
    © ২০২৫ Sparktro. Inspired by TechCrunch. Built with 💻 and ☕.
  </footer>

</body>
</html>
