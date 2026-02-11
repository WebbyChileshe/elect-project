<!-- Footer -->
<footer class="bg-[#247646] text-white pt-12 pb-8">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-8 mb-8">
            <!-- About -->
            <div>
                <div class="flex items-center space-x-2 mb-4">
                    <h3 class="text-xl font-bold">ELECT Project</h3>
                </div>
                <p class=" mb-4">Energy Efficient Lighting for Clean Energy Transitions in Zambia.</p>
                <div class="flex items-center space-x-2 bg-eu-blue text-white px-3 py-1 rounded-lg inline-flex">
                    <i class="fab fa-european-union"></i>
                    <span class="text-sm">Co-funded by the European Union</span>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-bold mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="../pages/About.php" class=" hover:text-white">About the Project</a></li>
                    <li><a href="../pages/objectives.php" class=" hover:text-white">Objectives & Impact</a></li>
                    <li><a href="../pages/partners.php" class=" hover:text-white">Project Partners</a></li>
                    <li><a href="../pages/events.php" class=" hover:text-white">News & Events</a></li>
                </ul>
            </div>
            
            <!-- Programme Links -->
            <div>
                <h4 class="text-lg font-bold mb-4">Programme</h4>
                <ul class="space-y-2">
                    <li><a href="../pages/curriculum.php" class=" hover:text-white">Curriculum</a></li>
                    <li><a href="../pages/curriculum.php#learning-outcomes" class=" hover:text-white">Learning Outcomes</a></li>
                    <li><a href="../pages/curriculum.php#application" class=" hover:text-white">How to Apply</a></li>
                    <li><a href="../pages/gallery.php" class=" hover:text-white">Project Gallery</a></li>
                </ul>
            </div>
            
            <!-- Newsletter -->
            <div>
                <h4 class="text-lg font-bold mb-4">Stay Updated</h4>
                <p class=" mb-4">Subscribe to our newsletter for project updates.</p>
                <form class="flex">
                    <input type="email" placeholder="Your email" class="bg-gray-800 text-white p-3 rounded-l-lg flex-grow">
                    <button type="submit" class="bg-elect-blue hover:bg-blue-800 text-white p-3 rounded-r-lg">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="pt-8 border-t border-gray-800 text-center ">
            <p>&copy; <?php echo date('Y'); ?> ELECT Project. All rights reserved. | Implemented by Mulungushi University</p>
        </div>
    </div>
</footer>

<!-- JavaScript for mobile menu -->
<script>
    document.getElementById('mobileMenuBtn').addEventListener('click', function() {
        const menu = document.getElementById('mobileMenu');
        menu.classList.toggle('hidden');
    });
</script>

</body>
</html>
