<?php include '../includes/header.php'; ?>

    <!-- Hero Section -->
<section class="relative bg-cover bg-center h-[50vh]" style="background-image:url('../assets/images/news-hero.png');">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div> 
        <!-- Content -->
        <div class="relative z-10 max-w-7xl pt-32 mx-auto px-6">
            <div class="text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Our Objectives</h1>
            </div>
        </div>
    </section>
    
    <!-- BREADCRUMB -->
    <div class="bg-gray-100 py-4">
        <div class="max-w-7xl mx-auto px-6">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="../index.php" class="text-blue-600 hover:text-blue-800">Home</a>
                <span class="text-gray-400">/</span>
                <span class="text-gray-600">Objectives</span>
            </nav>
        </div>
    </div>

<!-- OBJECTIVES SECTION -->
<section id="main" class="py-20">
  <div class="max-w-7xl mx-auto mt-10 px-6">
    <!-- Section Header -->
    <div class="mb-16">
      <h2 class="text-3xl md:text-4xl font-bold text-[#247646] mb-4">Our Core Objectives</h2>
      <div class="w-24 h-1 bg-[#247646] mx-auto mb-6"></div>
      <p class="text-gray-600 mx-auto text-lg leading-relaxed">
        The overall objective of the ELECT project is to improve access and quality of higher education in energy efficient lighting in Zambia, through the development and implementation of a modern curriculum, applied research, and international collaboration.
      </p>
    </div>
    
    <!-- Objectives Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- OBJECTIVE 1 -->
        <div class="group">
            <!-- Image Container with Multiple Images -->
            <div class="objectives-image mx-auto mb-6 w-full h-48 overflow-hidden rounded">
                <div class="objective-1-image active" style="background-image: url('../assets/images/lightbulb.jpg');"></div>
                <div class="objective-1-image" style="background-image: url('../assets/images/lightbulb.jpeg');"></div>
                <div class="objective-1-image" style="background-image: url('../assets/images/About.jpg');"></div>
            </div>
            
            <h3 class="font-bold text-xl text-gray-800 mb-4">Awareness & Cooperation</h3>
            <p class="text-gray-600 leading-relaxed">
                To raise awareness and stimulate cooperation between universities, industry, and public sectors for promoting energy efficient lighting.
            </p>
        </div>
        
        <!-- OBJECTIVE 2 -->
        <div class="group">
            <!-- Image Container with Multiple Images -->
            <div class="objectives-image mx-auto mb-6 w-full h-48 overflow-hidden rounded">
                <div class="objective-2-image active" style="background-image: url('../assets/images/pedagogical.jpg');"></div>
                <div class="objective-2-image" style="background-image: url('../assets/images/pedagogical.png');"></div>
                <div class="objective-2-image" style="background-image: url('../assets/images/news1.jpg');"></div>
            </div>
            
            <h3 class="font-bold text-xl text-gray-800 mb-4">Pedagogical Excellence</h3>
            <p class="text-gray-600 leading-relaxed">
                To improve pedagogical expertise and teaching infrastructure for high quality, student-centered digital education.
            </p>
        </div>
        
        <!-- OBJECTIVE 3 -->
        <div class="group">
            <!-- Image Container with Multiple Images -->
            <div class="objectives-image mx-auto mb-6 w-full h-48 overflow-hidden rounded">
                <div class="objective-3-image active" style="background-image: url('../assets/images/news2.jpg');"></div>
                <div class="objective-3-image" style="background-image: url('../assets/images/news3.jpg');"></div>
                <div class="objective-3-image" style="background-image: url('../assets/images/hero.jpg');"></div>
            </div>
            
            <h3 class="font-bold text-xl text-gray-800 mb-4">Curriculum Development</h3>
            <p class="text-gray-600 leading-relaxed">
                To develop and modernize courses with hands-on learning in efficient and smart lighting technologies.
            </p>
        </div>
        
    </div>
  </div>
</section>
<?php include '../includes/footer.php'; ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
      // Objectives Elements for Image Rotation
    const objectiveImages = [
        document.querySelectorAll('.objective-1-image'),
        document.querySelectorAll('.objective-2-image'),
        document.querySelectorAll('.objective-3-image')
    ];
      // OBJECTIVES IMAGE ROTATION
    function rotateObjectiveImages() {
        objectiveImages.forEach((images, objectiveIndex) => {
            if (images.length > 0) {
                // Hide all images for this objective
                images.forEach(img => {
                    img.classList.remove('active');
                });
                
                // Show current image
                objectiveCurrentImages[objectiveIndex] = 
                    (objectiveCurrentImages[objectiveIndex] + 1) % images.length;
                images[objectiveCurrentImages[objectiveIndex]].classList.add('active');
            }
        });
    }
    
    function initObjectivesImageRotation() {
        // Start rotation every 5 seconds
        objectivesInterval = setInterval(rotateObjectiveImages, 5000);
        
        // Initial rotation
        rotateObjectiveImages();
    }
})
</script>
