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