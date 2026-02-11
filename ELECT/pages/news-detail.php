<?php include '../includes/header.php'; ?>

<!-- Get news ID from URL -->
<?php
$news_id = isset($_GET['id']) ? intval($_GET['id']) : 1;
// In a real application, you would fetch the news article from database
?>

<!-- News Detail Hero -->
<section class="relative bg-cover bg-center h-[40vh]" style="background-image:url('../assets/images/news-detail.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-6 h-full flex flex-col justify-center">
        <div class="text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">News Article Title</h1>
            <div class="flex flex-wrap items-center gap-4 text-lg">
                <span><i class="fas fa-calendar-alt mr-2"></i> March 15, 2024</span>
                <span><i class="fas fa-user mr-2"></i> By ELECT Team</span>
                <span><i class="fas fa-eye mr-2"></i> 1,245 views</span>
            </div>
        </div>
    </div>
</section>

<!-- Breadcrumb -->
<div class="bg-gray-100 py-4">
    <div class="max-w-7xl mx-auto px-6">
        <nav class="flex items-center space-x-2 text-sm">
            <a href="../index.php" class="text-blue-600 hover:text-blue-800">Home</a>
            <span class="text-gray-400">/</span>
            <a href="news.php" class="text-blue-600 hover:text-blue-800">News</a>
            <span class="text-gray-400">/</span>
            <span class="text-gray-600">Article <?php echo $news_id; ?></span>
        </nav>
    </div>
</div>

<!-- Main Content -->
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-6">
        <!-- Article Content -->
        <article class="prose prose-lg max-w-none">
            <!-- Featured Image -->
            <img src="../assets/images/featured-news.jpg" alt="News Detail" class="w-full h-auto rounded-lg mb-8">
            
            <!-- Content -->
            <div class="mb-8">
                <h2 class="text-3xl font-bold mb-6">Main Headline of the Article</h2>
                
                <p class="text-lg mb-4">
                    This is the introduction to your news article. It should provide a brief overview of what the article is about.
                </p>
                
                <h3 class="text-2xl font-bold mt-8 mb-4">Subheading 1</h3>
                <p>
                    Detailed content goes here. You can add paragraphs, images, quotes, and other elements to make your article engaging.
                </p>
                
                <!-- Add more content as needed -->
                
                <div class="bg-gray-50 p-6 rounded-lg my-8 border-l-4 border-red-600">
                    <p class="text-xl italic">"This is an important quote from the article that you want to highlight."</p>
                    <p class="mt-2 font-semibold">— Source of the quote</p>
                </div>
                
                <h3 class="text-2xl font-bold mt-8 mb-4">Conclusion</h3>
                <p>
                    Conclude your article with a summary of the main points and any future implications or next steps.
                </p>
            </div>
            
            <!-- Tags -->
            <div class="flex flex-wrap gap-2 mb-8">
                <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm font-medium">Research</span>
                <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium">Energy Efficiency</span>
                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-medium">Sustainability</span>
            </div>
            
            <!-- Share Buttons -->
            <div class="border-t border-b py-6 mb-8">
                <h4 class="font-bold mb-4">Share this article:</h4>
                <div class="flex gap-4">
                    <button class="share-btn bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded flex items-center gap-2 transition-colors">
                        <i class="fab fa-facebook-f"></i> Facebook
                    </button>
                    <button class="share-btn bg-blue-400 hover:bg-blue-500 text-white px-4 py-2 rounded flex items-center gap-2 transition-colors">
                        <i class="fab fa-twitter"></i> Twitter
                    </button>
                    <button class="share-btn bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded flex items-center gap-2 transition-colors">
                        <i class="fab fa-linkedin-in"></i> LinkedIn
                    </button>
                    <button class="share-btn bg-gray-800 hover:bg-gray-900 text-white px-4 py-2 rounded flex items-center gap-2 transition-colors" onclick="copyLink()">
                        <i class="fas fa-link"></i> Copy Link
                    </button>
                </div>
            </div>
        </article>
        
        <!-- Related Articles -->
        <div class="mt-16">
            <h3 class="text-2xl font-bold mb-6">Related Articles</h3>
            <div class="grid md:grid-cols-3 gap-6">
                <!-- Related article 1 -->
                <article class="bg-white rounded-lg shadow overflow-hidden">
                    <img src="../assets/images/news1.jpg" alt="Related" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h4 class="font-semibold mb-2">
                            <a href="news-detail.php?id=<?php echo $news_id + 1; ?>" class="text-gray-900 hover:text-red-600">Related Article Title 1</a>
                        </h4>
                        <p class="text-sm text-gray-600">Brief description of related article...</p>
                    </div>
                </article>
                
                <!-- Related article 2 -->
                <article class="bg-white rounded-lg shadow overflow-hidden">
                    <img src="../assets/images/news2.jpg" alt="Related" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h4 class="font-semibold mb-2">
                            <a href="news-detail.php?id=<?php echo $news_id + 2; ?>" class="text-gray-900 hover:text-red-600">Related Article Title 2</a>
                        </h4>
                        <p class="text-sm text-gray-600">Brief description of related article...</p>
                    </div>
                </article>
                
                <!-- Related article 3 -->
                <article class="bg-white rounded-lg shadow overflow-hidden">
                    <img src="../assets/images/training.jpg" alt="Related" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h4 class="font-semibold mb-2">
                            <a href="news-detail.php?id=<?php echo $news_id + 3; ?>" class="text-gray-900 hover:text-red-600">Related Article Title 3</a>
                        </h4>
                        <p class="text-sm text-gray-600">Brief description of related article...</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>

<script>
// Copy link functionality
function copyLink() {
    const url = window.location.href;
    navigator.clipboard.writeText(url).then(() => {
        alert('Link copied to clipboard!');
    });
}

// Share buttons functionality
document.querySelectorAll('.share-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const platform = this.textContent.trim();
        const url = encodeURIComponent(window.location.href);
        const title = encodeURIComponent(document.title);
        
        let shareUrl = '';
        
        switch(platform) {
            case 'Facebook':
                shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
                break;
            case 'Twitter':
                shareUrl = `https://twitter.com/intent/tweet?url=${url}&text=${title}`;
                break;
            case 'LinkedIn':
                shareUrl = `https://www.linkedin.com/shareArticle?mini=true&url=${url}&title=${title}`;
                break;
        }
        
        if (shareUrl) {
            window.open(shareUrl, '_blank', 'width=600,height=400');
        }
    });
});
</script>