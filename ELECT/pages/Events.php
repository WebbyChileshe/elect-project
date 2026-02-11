<?php include '../includes/header.php'; ?>

<!-- EVENTS PAGE HERO -->
<section class="relative bg-cover bg-center h-[40vh] md:h-[50vh]" style="background-image:url('../assets/images/events-hero.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 md:px-6 h-full flex flex-col justify-center">
        <div class="text-white">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">ELECT Events</h1>
            <p class="text-lg md:text-xl max-w-2xl">Explore our upcoming and past events in energy-efficient lighting.</p>
        </div>
    </div>
</section>

<!-- BREADCRUMB -->
<div class="bg-gray-100 py-4">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <nav class="flex items-center space-x-2 text-sm">
            <a href="../index.php" class="text-blue-600 hover:text-blue-800">Home</a>
            <span class="text-gray-400">/</span>
            <span class="text-gray-600">Events</span>
        </nav>
    </div>
</div>

<!-- MAIN EVENTS CONTENT -->
<section class="py-8 md:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <!-- Page Header -->
        <div class="border-b-4 border-[#fdbf30] pb-6 mb-8 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Events Calendar</h2>
            <p class="text-gray-600 mt-2 text-sm md:text-base">Browse through our upcoming and past events.</p>
            
            <!-- Event Type Tabs -->
            <div class="flex flex-wrap gap-2 mt-4 md:mt-6 text-center overflow-x-auto pb-2">
                <button class="event-type-btn active whitespace-nowrap px-3 py-1.5 md:px-4 md:py-2 bg-[#247646] text-white rounded-lg font-medium transition-colors text-sm md:text-base" data-type="upcoming">
                    Upcoming Events
                </button>
                <button class="event-type-btn whitespace-nowrap px-3 py-1.5 md:px-4 md:py-2 bg-gray-200 hover:bg-gray-300 text-gray-700 rounded-lg font-medium transition-colors text-sm md:text-base" data-type="past">
                    Past Events
                </button>
            </div>
        </div>
        
        <!-- Search -->
        <div class="mb-6 md:mb-8 px-4">
            <div class="relative w-full">
                <input type="text" id="searchEvents" placeholder="Search events..." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#fdbf30] focus:border-transparent text-sm md:text-base">
                <i class="fas fa-search absolute right-3 top-3 text-gray-400"></i>
            </div>
        </div>
        
        <!-- UPCOMING EVENTS -->
        <div id="upcomingEvents" class="events-section">
            <!-- Upcoming Events Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <!-- Event 1 -->
                <article class="event-card upcoming md:rounded overflow-hidden border border-gray-200" data-category="workshop" data-title="LED Technology Workshop">
                    <div class="relative w-full">
                        <img src="../assets/images/event-workshop.jpg" alt="LED Workshop" class="w-full h-48 md:h-48 object-cover">
                        <div class="absolute top-3 left-3">
                            <span class="px-3 py-1 bg-[#247646] text-white text-xs font-semibold rounded-full">Workshop</span>
                        </div>
                    </div>
                    <div class="p-4 md:p-6">
                        <div class="flex items-center text-xs md:text-sm text-gray-500 mb-3">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>December 10, 2024</span>
                            <span class="mx-2">•</span>
                            <i class="fas fa-clock mr-2"></i>
                            <span>9:00 AM - 4:00 PM</span>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-3">Advanced LED Technology Workshop</h3>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">
                            Hands-on training on the latest LED technologies and installation best practices at Copperbelt University.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">
                                <i class="fas fa-map-marker-alt mr-1"></i>Copperbelt University
                            </span>
                            <button class="register-btn text-[#fdbf30] font-semibold hover:text-[#247646] transition-colors text-sm md:text-base">
                                Register Now
                            </button>
                        </div>
                    </div>
                    <!-- Fade line separator -->
                    <div class="h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent w-full mt-4 md:hidden"></div>
                </article>
                
                <!-- Event 2 -->
                <article class="event-card upcoming md:rounded overflow-hidden border border-gray-200" data-category="webinar" data-title="Energy Policy Webinar">
                    <div class="relative w-full">
                        <img src="../assets/images/event-webinar.jpg" alt="Energy Webinar" class="w-full h-48 md:h-48 object-cover">
                        <div class="absolute top-3 left-3">
                            <span class="px-3 py-1 bg-blue-600 text-white text-xs font-semibold rounded-full">Webinar</span>
                        </div>
                    </div>
                    <div class="p-4 md:p-6">
                        <div class="flex items-center text-xs md:text-sm text-gray-500 mb-3">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>December 5, 2024</span>
                            <span class="mx-2">•</span>
                            <i class="fas fa-clock mr-2"></i>
                            <span>2:00 PM - 4:00 PM</span>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-3">Energy Policy & Regulation Webinar</h3>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">
                            Discussion on policy frameworks for promoting energy-efficient lighting in Africa. Online event.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">
                                <i class="fas fa-globe mr-1"></i>Online
                            </span>
                            <button class="register-btn text-[#fdbf30] font-semibold hover:text-[#247646] transition-colors text-sm md:text-base">
                                Join Free
                            </button>
                        </div>
                    </div>
                    <!-- Fade line separator -->
                    <div class="h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent w-full mt-4 md:hidden"></div>
                </article>
                
                <!-- Event 3 -->
                <article class="event-card upcoming md:rounded overflow-hidden border border-gray-200" data-category="conference" data-title="Energy Symposium">
                    <div class="relative w-full">
                        <img src="../assets/images/event-conference.jpg" alt="Energy Symposium" class="w-full h-48 md:h-48 object-cover">
                        <div class="absolute top-3 left-3">
                            <span class="px-3 py-1 bg-purple-600 text-white text-xs font-semibold rounded-full">Conference</span>
                        </div>
                    </div>
                    <div class="p-4 md:p-6">
                        <div class="flex items-center text-xs md:text-sm text-gray-500 mb-3">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>December 15-17, 2024</span>
                            <span class="mx-2">•</span>
                            <i class="fas fa-clock mr-2"></i>
                            <span>All Day</span>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-3">International Energy Efficiency Symposium</h3>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">
                            Join global experts in dialogue about sustainable lighting solutions and policy frameworks.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">
                                <i class="fas fa-map-marker-alt mr-1"></i>Lusaka, Zambia
                            </span>
                            <button class="register-btn text-[#fdbf30] font-semibold hover:text-[#247646] transition-colors text-sm md:text-base">
                                Learn More
                            </button>
                        </div>
                    </div>
                    <!-- Fade line separator -->
                    <div class="h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent w-full mt-4 md:hidden"></div>
                </article>
                
                <!-- Event 4 -->
                <article class="event-card upcoming md:rounded overflow-hidden border border-gray-200" data-category="training" data-title="Training Program">
                    <div class="relative w-full">
                        <img src="../assets/images/event-training.jpg" alt="Training Program" class="w-full h-48 md:h-48 object-cover">
                        <div class="absolute top-3 left-3">
                            <span class="px-3 py-1 bg-yellow-600 text-white text-xs font-semibold rounded-full">Training</span>
                        </div>
                    </div>
                    <div class="p-4 md:p-6">
                        <div class="flex items-center text-xs md:text-sm text-gray-500 mb-3">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>November 28, 2024</span>
                            <span class="mx-2">•</span>
                            <i class="fas fa-clock mr-2"></i>
                            <span>10:00 AM - 3:00 PM</span>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-3">Train-the-Trainer Program</h3>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">
                            Equipping university lecturers with advanced energy efficiency training methodologies.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">
                                <i class="fas fa-map-marker-alt mr-1"></i>University of Zambia
                            </span>
                            <button class="register-btn text-[#fdbf30] font-semibold hover:text-[#247646] transition-colors text-sm md:text-base">
                                Apply Now
                            </button>
                        </div>
                    </div>
                    <!-- Fade line separator -->
                    <div class="h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent w-full mt-4 md:hidden"></div>
                </article>
                
                <!-- Event 5 -->
                <article class="event-card upcoming md:rounded overflow-hidden border border-gray-200" data-category="workshop" data-title="LED Installation">
                    <div class="relative w-full">
                        <img src="../assets/images/event-installation.jpg" alt="LED Installation" class="w-full h-48 md:h-48 object-cover">
                        <div class="absolute top-3 left-3">
                            <span class="px-3 py-1 bg-[#247646] text-white text-xs font-semibold rounded-full">Workshop</span>
                        </div>
                    </div>
                    <div class="p-4 md:p-6">
                        <div class="flex items-center text-xs md:text-sm text-gray-500 mb-3">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>January 15, 2025</span>
                            <span class="mx-2">•</span>
                            <i class="fas fa-clock mr-2"></i>
                            <span>9:00 AM - 5:00 PM</span>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-3">Practical LED Installation Workshop</h3>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">
                            Hands-on workshop focusing on practical LED installation techniques and safety protocols.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">
                                <i class="fas fa-map-marker-alt mr-1"></i>Mulungushi University
                            </span>
                            <button class="register-btn text-[#fdbf30] font-semibold hover:text-[#247646] transition-colors text-sm md:text-base">
                                Register
                            </button>
                        </div>
                    </div>
                    <!-- Fade line separator -->
                    <div class="h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent w-full mt-4 md:hidden"></div>
                </article>
                
                <!-- Event 6 -->
                <article class="event-card upcoming md:rounded overflow-hidden border border-gray-200" data-category="webinar" data-title="Research Webinar">
                    <div class="relative w-full">
                        <img src="../assets/images/event-research.jpg" alt="Research Webinar" class="w-full h-48 md:h-48 object-cover">
                        <div class="absolute top-3 left-3">
                            <span class="px-3 py-1 bg-blue-600 text-white text-xs font-semibold rounded-full">Webinar</span>
                        </div>
                    </div>
                    <div class="p-4 md:p-6">
                        <div class="flex items-center text-xs md:text-sm text-gray-500 mb-3">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>January 20, 2025</span>
                            <span class="mx-2">•</span>
                            <i class="fas fa-clock mr-2"></i>
                            <span>3:00 PM - 5:00 PM</span>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-3">Research Findings Webinar</h3>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">
                            Presentation of latest ELECT project research findings and energy savings data.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">
                                <i class="fas fa-globe mr-1"></i>Online
                            </span>
                            <button class="register-btn text-[#fdbf30] font-semibold hover:text-[#247646] transition-colors text-sm md:text-base">
                                Join Free
                            </button>
                        </div>
                    </div>
                    <div class="h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent w-full mt-4 md:hidden hidden"></div>
                </article>
            </div>
        </div>
        
        <!-- PAST EVENTS -->
        <div id="pastEvents" class="events-section hidden">
            <!-- Past Events Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <!-- Past Event 1 -->
                <article class="event-card past md:rounded overflow-hidden border border-gray-200" data-category="conference" data-title="Energy Innovation Summit">
                    <div class="relative w-full">
                        <img src="../assets/images/past-event1.jpg" alt="Energy Summit" class="w-full h-48 md:h-48 object-cover">
                        <div class="absolute top-3 left-3">
                            <span class="px-3 py-1 bg-[#247646] text-white text-xs font-semibold rounded-full">Conference</span>
                        </div>
                    </div>
                    <div class="p-4 md:p-6">
                        <div class="flex items-center text-xs md:text-sm text-gray-500 mb-3">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>March 15-17, 2024</span>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-3">National Energy Innovation Summit</h3>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">
                            Gathered 300+ stakeholders to discuss Zambia's energy future and innovation pathways.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">
                                <i class="fas fa-map-marker-alt mr-1"></i>Lusaka, Zambia
                            </span>
                            <button class="view-btn text-[#fdbf30] font-semibold hover:text-[#247646] transition-colors text-sm md:text-base">
                                View Photos
                            </button>
                        </div>
                    </div>
                    <!-- Fade line separator -->
                    <div class="h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent w-full mt-4 md:hidden"></div>
                </article>
                
                <!-- Past Event 2 -->
                <article class="event-card past md:rounded overflow-hidden border border-gray-200" data-category="workshop" data-title="LED Technical Training">
                    <div class="relative w-full">
                        <img src="../assets/images/past-event2.jpg" alt="Technical Training" class="w-full h-48 md:h-48 object-cover">
                        <div class="absolute top-3 left-3">
                            <span class="px-3 py-1 bg-blue-600 text-white text-xs font-semibold rounded-full">Workshop</span>
                        </div>
                    </div>
                    <div class="p-4 md:p-6">
                        <div class="flex items-center text-xs md:text-sm text-gray-500 mb-3">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>February 20-22, 2024</span>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-3">Advanced LED Technical Training</h3>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">
                            Comprehensive training for university technicians on LED installation and maintenance.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">
                                <i class="fas fa-map-marker-alt mr-1"></i>Copperbelt University
                            </span>
                            <button class="view-btn text-[#fdbf30] font-semibold hover:text-[#247646] transition-colors text-sm md:text-base">
                                View Materials
                            </button>
                        </div>
                    </div>
                    <!-- Fade line separator -->
                    <div class="h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent w-full mt-4 md:hidden"></div>
                </article>
                
                <!-- Past Event 3 -->
                <article class="event-card past md:rounded overflow-hidden border border-gray-200" data-category="launch" data-title="Project Launch">
                    <div class="relative w-full">
                        <img src="../assets/images/past-event3.jpg" alt="Project Launch" class="w-full h-48 md:h-48 object-cover">
                        <div class="absolute top-3 left-3">
                            <span class="px-3 py-1 bg-purple-600 text-white text-xs font-semibold rounded-full">Launch</span>
                        </div>
                    </div>
                    <div class="p-4 md:p-6">
                        <div class="flex items-center text-xs md:text-sm text-gray-500 mb-3">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>October 10, 2023</span>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-3">Official ELECT Project Launch</h3>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">
                            Historic launch event attended by government officials, EU representatives, and academic partners.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">
                                <i class="fas fa-map-marker-alt mr-1"></i>University of Zambia
                            </span>
                            <button class="view-btn text-[#fdbf30] font-semibold hover:text-[#247646] transition-colors text-sm md:text-base">
                                Watch Video
                            </button>
                        </div>
                    </div>
                    <!-- Fade line separator -->
                    <div class="h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent w-full mt-4 md:hidden"></div>
                </article>
                
                <!-- Past Event 4 -->
                <article class="event-card past md:rounded overflow-hidden border border-gray-200" data-category="training" data-title="Lecturer Training">
                    <div class="relative w-full">
                        <img src="../assets/images/past-event4.jpg" alt="Lecturer Training" class="w-full h-48 md:h-48 object-cover">
                        <div class="absolute top-3 left-3">
                            <span class="px-3 py-1 bg-yellow-600 text-white text-xs font-semibold rounded-full">Training</span>
                        </div>
                    </div>
                    <div class="p-4 md:p-6">
                        <div class="flex items-center text-xs md:text-sm text-gray-500 mb-3">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>September 5-7, 2023</span>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-3">University Lecturer Training Program</h3>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">
                            Training program for university lecturers on energy-efficient lighting curriculum development.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">
                                <i class="fas fa-map-marker-alt mr-1"></i>Mulungushi University
                            </span>
                            <button class="view-btn text-[#fdbf30] font-semibold hover:text-[#247646] transition-colors text-sm md:text-base">
                                View Report
                            </button>
                        </div>
                    </div>
                    <!-- Fade line separator -->
                    <div class="h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent w-full mt-4 md:hidden"></div>
                </article>
                
                <!-- Past Event 5 -->
                <article class="event-card past md:rounded overflow-hidden border border-gray-200" data-category="workshop" data-title="Student Workshop">
                    <div class="relative w-full">
                        <img src="../assets/images/past-event5.jpg" alt="Student Workshop" class="w-full h-48 md:h-48 object-cover">
                        <div class="absolute top-3 left-3">
                            <span class="px-3 py-1 bg-[#247646] text-white text-xs font-semibold rounded-full">Workshop</span>
                        </div>
                    </div>
                    <div class="p-4 md:p-6">
                        <div class="flex items-center text-xs md:text-sm text-gray-500 mb-3">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>August 15, 2023</span>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-3">Student Innovation Workshop</h3>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">
                            Workshop engaging engineering students in energy efficiency innovation projects.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">
                                <i class="fas fa-map-marker-alt mr-1"></i>University of Zambia
                            </span>
                            <button class="view-btn text-[#fdbf30] font-semibold hover:text-[#247646] transition-colors text-sm md:text-base">
                                View Projects
                            </button>
                        </div>
                    </div>
                    <!-- Fade line separator -->
                    <div class="h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent w-full mt-4 md:hidden"></div>
                </article>
                
                <!-- Past Event 6 -->
                <article class="event-card past md:rounded overflow-hidden border border-gray-200" data-category="webinar" data-title="Policy Webinar">
                    <div class="relative w-full">
                        <img src="../assets/images/past-event6.jpg" alt="Policy Webinar" class="w-full h-48 md:h-48 object-cover">
                        <div class="absolute top-3 left-3">
                            <span class="px-3 py-1 bg-blue-600 text-white text-xs font-semibold rounded-full">Webinar</span>
                        </div>
                    </div>
                    <div class="p-4 md:p-6">
                        <div class="flex items-center text-xs md:text-sm text-gray-500 mb-3">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>July 20, 2023</span>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-3">Energy Efficiency Policy Webinar</h3>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">
                            Discussion with policymakers on implementing energy-efficient lighting regulations.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">
                                <i class="fas fa-globe mr-1"></i>Online
                            </span>
                            <button class="view-btn text-[#fdbf30] font-semibold hover:text-[#247646] transition-colors text-sm md:text-base">
                                View Recording
                            </button>
                        </div>
                    </div>
                    <div class="h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent w-full mt-4 md:hidden hidden"></div>
                </article>
            </div>
        </div>
        
        <!-- Load More Button -->
        <div class="text-center mt-8 md:mt-12">
            <button id="loadMoreBtn" class="bg-[#247646] hover:bg-[#1e5f3a] text-white px-6 py-2.5 md:px-8 md:py-3 rounded font-semibold transition-colors duration-300 text-sm md:text-base">
                <i class="fas fa-plus mr-2"></i>
                Load More Events
            </button>
            <div id="loadingIndicator" class="hidden mt-4">
                <div class="inline-block animate-spin rounded-full h-8 w-8 border-b-2 border-[#247646]"></div>
                <span class="ml-2 text-gray-600">Loading more events...</span>
            </div>
        </div>
        
        <!-- Pagination Info -->
        <div class="mt-8 text-center text-gray-600 text-sm md:text-base">
            Showing <span id="currentCount">6</span> of <span id="totalCount">24</span> events
        </div>
    </div>
</section>

<!-- EVENT SUBSCRIPTION -->
<div class="bg-gray-50 py-8 md:py-16">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <!-- Fade line separator -->
        <div class="h-px bg-gradient-to-r from-transparent via-gray-400 to-transparent w-full mb-8 md:mb-12"></div>
        
        <div class="grid lg:grid-cols-3 gap-8 md:gap-12">
            <!-- Event Calendar -->
            <div class="lg:col-span-2">
                <h3 class="text-xl md:text-2xl font-bold mb-6 pb-3 border-b border-gray-300">Event Calendar</h3>
                <div class="bg-white p-4 md:p-6 rounded-lg border border-gray-200">
                    <div class="flex items-center justify-between mb-6">
                        <h4 class="font-bold text-lg">Upcoming This Month</h4>
                        <a href="#" class="text-[#247646] font-semibold text-sm">View Full Calendar</a>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                            <div class="text-center mr-4 min-w-[60px]">
                                <div class="text-2xl font-bold text-[#247646]">05</div>
                                <div class="text-xs text-gray-600">DEC</div>
                            </div>
                            <div class="flex-1">
                                <div class="font-semibold">Energy Policy Webinar</div>
                                <div class="text-sm text-gray-600">2:00 PM - Online</div>
                            </div>
                            <button class="text-[#fdbf30] hover:text-[#247646] font-medium text-sm">
                                Join
                            </button>
                        </div>
                        
                        <div class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                            <div class="text-center mr-4 min-w-[60px]">
                                <div class="text-2xl font-bold text-[#247646]">10</div>
                                <div class="text-xs text-gray-600">DEC</div>
                            </div>
                            <div class="flex-1">
                                <div class="font-semibold">LED Technology Workshop</div>
                                <div class="text-sm text-gray-600">9:00 AM - Copperbelt University</div>
                            </div>
                            <button class="text-[#fdbf30] hover:text-[#247646] font-medium text-sm">
                                Register
                            </button>
                        </div>
                        
                        <div class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                            <div class="text-center mr-4 min-w-[60px]">
                                <div class="text-2xl font-bold text-[#247646]">15</div>
                                <div class="text-xs text-gray-600">DEC</div>
                            </div>
                            <div class="flex-1">
                                <div class="font-semibold">Energy Efficiency Symposium</div>
                                <div class="text-sm text-gray-600">All Day - Lusaka</div>
                            </div>
                            <button class="text-[#fdbf30] hover:text-[#247646] font-medium text-sm">
                                Learn More
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Subscribe to Events -->
            <div class="bg-white p-4 md:p-6 rounded-lg border border-gray-200">
                <h3 class="text-xl md:text-2xl font-bold mb-4">Stay Updated</h3>
                <p class="text-gray-600 mb-6 text-sm md:text-base">Get notified about upcoming events, workshops, and webinars.</p>
                
                <form id="eventSubscriptionForm" class="space-y-4">
                    <div>
                        <input type="email" id="eventEmail" placeholder="Your email address" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#fdbf30] focus:border-transparent text-sm md:text-base" required>
                    </div>
                    <div>
                        <select id="eventInterests" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#fdbf30] focus:border-transparent text-sm md:text-base">
                            <option value="">Select interests</option>
                            <option value="workshops">Workshops</option>
                            <option value="webinars">Webinars</option>
                            <option value="conferences">Conferences</option>
                            <option value="training">Training Programs</option>
                            <option value="all">All Events</option>
                        </select>
                    </div>
                    <button type="submit" class="w-full bg-[#247646] text-white py-3 rounded-lg font-semibold transition-colors duration-300 text-sm md:text-base hover:bg-[#1e5f3a]">
                        Subscribe to Events
                    </button>
                </form>
                
                <p class="text-xs md:text-sm text-center text-gray-500 mt-4">Never miss an important event. Unsubscribe anytime.</p>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>

<!-- JavaScript for Events Page -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Elements
    const eventTypeBtns = document.querySelectorAll('.event-type-btn');
    const eventSections = document.querySelectorAll('.events-section');
    const eventCards = document.querySelectorAll('.event-card');
    const searchInput = document.getElementById('searchEvents');
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    const loadingIndicator = document.getElementById('loadingIndicator');
    const currentCount = document.getElementById('currentCount');
    const totalCount = document.getElementById('totalCount');
    const subscriptionForm = document.getElementById('eventSubscriptionForm');
    
    // State
    let visibleEvents = 6;
    let currentEventType = 'upcoming';
    let currentSearch = '';
    
    // Event type switching
    eventTypeBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            eventTypeBtns.forEach(b => {
                b.classList.remove('active', 'bg-[#247646]', 'text-white');
                b.classList.add('bg-gray-200', 'text-gray-700');
            });
            
            this.classList.add('active', 'bg-[#247646]', 'text-white');
            this.classList.remove('bg-gray-200', 'text-gray-700');
            
            currentEventType = this.dataset.type;
            showEventSection(currentEventType);
        });
    });
    
    // Show appropriate event section
    function showEventSection(type) {
        eventSections.forEach(section => {
            section.classList.add('hidden');
        });
        
        document.getElementById(type + 'Events').classList.remove('hidden');
        filterAndDisplayEvents();
    }
    
    // Search functionality
    searchInput.addEventListener('input', function() {
        currentSearch = this.value.toLowerCase().trim();
        filterAndDisplayEvents();
    });
    
    // Filter and display events
    function filterAndDisplayEvents() {
        const currentSection = document.getElementById(currentEventType + 'Events');
        const events = currentSection.querySelectorAll('.event-card');
        let filteredEvents = Array.from(events);
        
        // Apply search filter
        if (currentSearch) {
            filteredEvents = filteredEvents.filter(event => {
                const title = event.querySelector('h3').textContent.toLowerCase();
                const description = event.querySelector('p').textContent.toLowerCase();
                return title.includes(currentSearch) || description.includes(currentSearch);
            });
        }
        
        // Hide all events first
        events.forEach(event => {
            event.style.display = 'none';
        });
        
        // Show filtered events (up to visibleEvents count)
        filteredEvents.slice(0, visibleEvents).forEach(event => {
            event.style.display = 'block';
        });
        
        // Update counters
        currentCount.textContent = Math.min(visibleEvents, filteredEvents.length);
        totalCount.textContent = filteredEvents.length;
        
        // Show/hide load more button
        loadMoreBtn.style.display = visibleEvents < filteredEvents.length ? 'block' : 'none';
    }
    
    // Load more functionality
    loadMoreBtn.addEventListener('click', function() {
        loadingIndicator.classList.remove('hidden');
        loadMoreBtn.style.display = 'none';
        
        setTimeout(() => {
            visibleEvents += 3;
            filterAndDisplayEvents();
            loadingIndicator.classList.add('hidden');
            
            // Smooth scroll to newly loaded events
            const lastEvent = document.querySelector('.event-card[style="display: block;"]:last-child');
            if (lastEvent) {
                lastEvent.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
        }, 800);
    });
    
    // Registration buttons
    document.querySelectorAll('.register-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const eventCard = this.closest('.event-card');
            const eventTitle = eventCard.querySelector('h3').textContent;
            
            alert(`Thank you for your interest in "${eventTitle}". You will be redirected to the registration page.`);
            // In real implementation, this would redirect to registration form
        });
    });
    
    // View buttons for past events
    document.querySelectorAll('.view-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const eventCard = this.closest('.event-card');
            const eventTitle = eventCard.querySelector('h3').textContent;
            
            alert(`Opening details for "${eventTitle}"...`);
            // In real implementation, this would open event details page
        });
    });
    
    // Event subscription form
    subscriptionForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const email = document.getElementById('eventEmail').value;
        const interests = document.getElementById('eventInterests').value;
        
        alert(`Thank you for subscribing with email: ${email}. You will receive updates about ${interests || 'all'} events.`);
        this.reset();
    });
    
    // Initialize
    filterAndDisplayEvents();
    
    // Keyboard shortcut for search
    document.addEventListener('keydown', function(e) {
        if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
            e.preventDefault();
            searchInput.focus();
        }
    });
});
</script>