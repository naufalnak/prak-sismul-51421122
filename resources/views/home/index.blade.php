<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  </head>
  <body class="bg-gradient-to-r from-gray-100 to-blue-100 min-h-screen font-[Poppins]">
    <!-- Navbar -->
    <nav class="bg-white py-4 px-6 shadow-sm">
        <div class="container mx-auto flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
                <span class="text-3xl font-bold ml-2">CoCo.</span>
            </div>

            
            <!-- Menu Items -->
            <div class="hidden md:flex space-x-8">
                <a href="#" class="text-black font-medium">Home</a>
                <a href="#" class="text-black font-medium">Shop</a>
                <a href="#" class="text-black font-medium">About</a>
                <a href="#" class="text-black font-medium">Contact</a>
            </div>
            
            <!-- Icons -->
            <div class="flex items-center space-x-4">
                <a href="#" class="text-black">
                    <i class="fa-solid fa-user"></i>
                </a>
                <a href="#" class="text-black">
                    <i class="fa-solid fa-search"></i>
                </a>
                <a href="#" class="text-black">
                    <i class="fa-regular fa-heart"></i>
                </a>
                <a href="#" class="text-black">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <section class="relative min-h-screen">
        <!-- Background Image Section -->
        <div class="absolute inset-0 z-0">
            <div class="relative w-full h-full">
                <!-- Ganti URL gambar dengan URL gambar interior Anda -->
                <img 
                    src="{{ asset('images/hero.png') }}" 
                    alt="Interior minimalis dengan tanaman dan furnitur rotan" 
                    class="w-full h-full object-cover"
                >
                <!-- Overlay untuk meningkatkan keterbacaan teks -->
                <div class="absolute inset-0 bg-black opacity-50"></div>
            </div>
        </div>
        
        <!-- Content Section -->
        <div class="relative z-10 flex items-center justify-center min-h-screen px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-white mb-6">
                    Desain Interior Minimalis Modern
                </h1>
                <p class="text-lg sm:text-xl md:text-2xl text-gray-100 mb-8">
                    Ciptakan ruang yang tenang dan elegan dengan sentuhan alam
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a 
                        href="#" 
                        class="px-8 py-3 bg-white text-gray-900 font-medium rounded-md hover:bg-gray-100 transition-colors duration-300"
                    >
                        Jelajahi Koleksi
                    </a>
                    <a 
                        href="#" 
                        class="px-8 py-3 border-2 border-white text-white font-medium rounded-md hover:bg-white hover:bg-opacity-10 transition-colors duration-300"
                    >
                        Konsultasi Gratis
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10 animate-bounce">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </section>

    <!-- Browse The Range Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Browse The Range
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Dining Card -->
                <div class="flex flex-col items-center">
                    <div class="rounded-lg overflow-hidden mb-4 w-full aspect-square">
                        <img 
                            src="{{ asset('images/dining.png') }}" 
                            alt="Dining Room Interior" 
                            class="w-full h-full object-cover rounded-lg"
                        >
                    </div>
                    <h3 class="text-xl font-medium text-gray-900 mt-2">
                        Dining
                    </h3>
                </div>

                <!-- Living Card -->
                <div class="flex flex-col items-center">
                    <div class="rounded-lg overflow-hidden mb-4 w-full aspect-square">
                        <img 
                            src="{{ asset('images/living.png') }}" 
                            alt="Living Room Interior" 
                            class="w-full h-full object-cover rounded-lg"
                        >
                    </div>
                    <h3 class="text-xl font-medium text-gray-900 mt-2">
                        Living
                    </h3>
                </div>

                <!-- Bedroom Card -->
                <div class="flex flex-col items-center">
                    <div class="rounded-lg overflow-hidden mb-4 w-full aspect-square">
                        <img 
                            src="{{ asset('images/bedroom.png') }}" 
                            alt="Bedroom Interior" 
                            class="w-full h-full object-cover rounded-lg"
                        >
                    </div>
                    <h3 class="text-xl font-medium text-gray-900 mt-2">
                        Bedroom
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Audio Section -->
    <section class="bg-gradient-to-r from-green-50 to-blue-50 py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-14">
            <h2 class="text-4xl font-bold text-gray-800">Feel The Living</h2>
            <p class="mt-4 text-lg text-gray-600">Furniture is not just objects — it’s a rhythm to your everyday life.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Audio Card 1 -->
            <div class="bg-white rounded-3xl shadow-md hover:shadow-xl transition duration-300 p-6 flex flex-col items-center">
                <img src="{{ asset('images/modernchair.png') }}" alt="Modern Chair" class="h-40 w-40 object-cover rounded-full mb-6">
                <h3 class="text-2xl font-semibold text-gray-700 mb-2">Modern Chair</h3>
                <p class="text-gray-500 text-center text-sm mb-4">Light, flexible, inspiring your daily creativity.</p>
                <audio controls class="w-full">
                <source src="{{ asset('audio/modernchair.mp3') }}" type="audio/mpeg">
                Your browser does not support the audio element.
                </audio>
            </div>

            <!-- Audio Card 2 -->
            <div class="bg-white rounded-3xl shadow-md hover:shadow-xl transition duration-300 p-6 flex flex-col items-center">
                <img src="{{ asset('images/plantshelf.png') }}" alt="Plant Shelf" class="h-40 w-40 object-cover rounded-full mb-6">
                <h3 class="text-2xl font-semibold text-gray-700 mb-2">Plant Shelf</h3>
                <p class="text-gray-500 text-center text-sm mb-4">Breathe life into your living space with nature vibes.</p>
                <audio controls class="w-full">
                <source src="/audio/plant-shelf.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
                </audio>
            </div>

            <!-- Audio Card 3 -->
            <div class="bg-white rounded-3xl shadow-md hover:shadow-xl transition duration-300 p-6 flex flex-col items-center">
                <img src="{{ asset('images/cozybed.png') }}" alt="Cozy Bed" class="h-40 w-40 object-cover rounded-full mb-6">
                <h3 class="text-2xl font-semibold text-gray-700 mb-2">Cozy Bed</h3>
                <p class="text-gray-500 text-center text-sm mb-4">A soft retreat after a long day — sound of serenity.</p>
                <audio controls class="w-full">
                <source src="/audio/cozy-bed.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
                </audio>
            </div>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section class="bg-gradient-to-r bg-white py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-14">
                <h2 class="text-4xl font-bold text-gray-800">Watch Our Product in Action</h2>
                <p class="mt-4 text-lg text-gray-600">Experience the essence of our designs through this video demonstration.</p>
            </div>

            <div class="flex justify-center">
                <!-- Video Player -->
                <div class="w-full max-w-2xl">
                    <video controls class="w-full rounded-xl shadow-lg">
                        <source src="{{ asset('videos/product-demo.mp4') }}" type="video/mp4">
                        Your browser does not support the video element.
                    </video>
                </div>
            </div>

            <div class="text-center mt-10">
                <p class="text-lg text-gray-600">Discover how our product can enhance your space. Watch the video to see it in use.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="max-w-6xl mx-auto py-8">
        <div class="flex flex-wrap justify-between gap-8 mb-10">
        <!-- Logo and Address -->
        <div class="flex-1 min-w-[200px]">
            <h2 class="text-2xl font-bold mb-5">Cozy Corner.</h2>
            <p class="text-gray-600 leading-relaxed">
            400 University Drive Suite 200 Coral Gables,<br>
            FL 33134 USA
            </p>
        </div>
        
        <!-- Links and Help Columns -->
        <div class="flex-1 flex justify-between min-w-[300px]">
            <!-- Links Column -->
            <div class="min-w-[120px]">
            <h3 class="font-bold mb-5 text-gray-800">Links</h3>
            <ul class="space-y-4">
                <li><a href="#" class="text-gray-700 hover:text-black">Home</a></li>
                <li><a href="#" class="text-gray-700 hover:text-black">Shop</a></li>
                <li><a href="#" class="text-gray-700 hover:text-black">About</a></li>
                <li><a href="#" class="text-gray-700 hover:text-black">Contact</a></li>
            </ul>
            </div>
            
            <!-- Help Column -->
            <div class="min-w-[120px]">
            <h3 class="font-bold mb-5 text-gray-800">Help</h3>
            <ul class="space-y-4">
                <li><a href="#" class="text-gray-700 hover:text-black">Payment Options</a></li>
                <li><a href="#" class="text-gray-700 hover:text-black">Returns</a></li>
                <li><a href="#" class="text-gray-700 hover:text-black">Privacy Policies</a></li>
            </ul>
            </div>
        </div>
        
        <!-- Newsletter -->
        <div class="flex-1 min-w-[250px]">
            <h3 class="font-bold mb-5 text-gray-800">Newsletter</h3>
            <form class="flex">
            <input 
                type="email" 
                placeholder="Enter Your Email Address" 
                class="flex-1 px-3 py-2 border border-gray-300 focus:outline-none"
            >
            <button 
                type="submit" 
                class="bg-black text-white px-4 py-2 text-xs"
            >
                SUBSCRIBE
            </button>
            </form>
        </div>
        </div>
        
        <!-- Divider -->
        <div class="h-px bg-gray-200 my-6"></div>
        
        <!-- Copyright -->
        <div class="text-gray-600 text-sm">
        2023 furino. All rights reverved
        </div>
  </footer>




    
    
    
  </body>
</body>
</html>