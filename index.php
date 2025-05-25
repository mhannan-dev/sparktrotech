<?php get_header(); ?>
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
<?php get_footer(); ?>