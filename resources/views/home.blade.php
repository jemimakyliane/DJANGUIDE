{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Accueil - DJANGUIRDE')

@section('content')
<div class="min-h-screen">
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-blue-300 via-blue-400 to-blue-500 py-20">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div>
                    <h1 class="text-5xl font-bold text-gray-800 mb-6 leading-tight">
                        Your <br>
                        <span class="text-blue-700">Education</span> <br>
                        Is Our <br>
                        <span class="text-blue-700">Priority</span> 
                        <i class="fas fa-pencil-alt text-blue-700 text-4xl ml-2"></i>
                    </h1>
                    <p class="text-lg text-gray-700 mb-8 max-w-md">
                        with the help of E-learning. Create Your own path and drive on our skills on your own to achieve what you seek.
                    </p>
                    <button class="btn-primary px-8 py-3 text-white font-semibold rounded-full text-lg mb-8">
                        Get started
                    </button>
                    
                    <!-- Features -->
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-blue-600 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-white text-sm"></i>
                            </div>
                            <span class="text-gray-700 font-medium">Experience Mentor</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-blue-600 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-white text-sm"></i>
                            </div>
                            <span class="text-gray-700 font-medium">100+free class</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-blue-600 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-white text-sm"></i>
                            </div>
                            <span class="text-gray-700 font-medium">Affordable prices</span>
                        </div>
                    </div>
                </div>
                
                <!-- Right Content - Student Image -->
                <div class="flex justify-center">
                    <div class="relative">
                        <div class="w-80 h-80 bg-blue-600 rounded-full flex items-center justify-center">
                            <div class="w-64 h-64 bg-white rounded-full overflow-hidden">
                                <img src="/images/image2.png" alt="Student" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Class Program -->
                <div class="bg-white p-8 rounded-2xl shadow-lg text-center">
                    <div class="w-16 h-16 bg-gray-800 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-th-large text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Class program</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        General, tech, specialty programs... we offer it all!
                    </p>
                </div>

                <!-- Group Study -->
                <div class="bg-blue-600 p-8 rounded-2xl shadow-lg text-center text-white">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Group study</h3>
                    <p class="text-blue-100 text-sm leading-relaxed">
                        Study in group, progress faster, and motivate each other
                    </p>
                </div>

                <!-- Exercise -->
                <div class="bg-white p-8 rounded-2xl shadow-lg text-center">
                    <div class="w-16 h-16 bg-gray-800 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-dumbbell text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Exercise</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Practices with exercises to check your understanding of lessons
                    </p>
                </div>

                <!-- Teacher -->
                <div class="bg-white p-8 rounded-2xl shadow-lg text-center">
                    <div class="w-16 h-16 bg-gray-800 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-user-tie text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Teacher</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Practices with exercises to check your understanding of lessons
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Growth Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Image -->
                <div class="flex justify-center">
                    <div class="relative">
                        <div class="w-80 h-80 rounded-full overflow-hidden">
                            <img src="/images/djanguirde2.png" alt="Student" class="w-full h-full object-cover">
                        </div>
                        <!-- Decorative elements -->
                        <div class="absolute -top-4 -left-4 w-8 h-8">
                            <div class="w-full h-full border-2 border-gray-300 rounded-full animate-pulse"></div>
                        </div>
                        <div class="absolute -bottom-4 -right-4 w-12 h-12">
                            <div class="w-full h-full border-2 border-gray-300 rounded-full animate-pulse"></div>
                        </div>
                    </div>
                </div>

                <!-- Right Content -->
                <div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-6">
                        We Help <span class="text-blue-600">Students Grow</span> <br>
                        Their Career
                    </h2>
                    <p class="text-lg text-gray-600 mb-8">
                        Support and mentorship to empower students in their learning journey and future aspirations
                    </p>
                    
                    <!-- Statistics -->
                    <div class="grid grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="text-4xl font-bold text-blue-600 mb-2">1M</div>
                            <div class="text-gray-600">Student</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-blue-600 mb-2">2K+</div>
                            <div class="text-gray-600">course</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-blue-600 mb-2">100+</div>
                            <div class="text-gray-600">countries</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Classes Section -->
    <section class="py-16 bg-gradient-to-br from-blue-300 via-blue-400 to-blue-500">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <p class="text-blue-700 font-medium mb-2">Explore Programs</p>
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Our Most Popular Class</h2>
                <p class="text-gray-700 max-w-2xl mx-auto">
                    Let's join our famous class, the knowledge provided will definitely be useful for you.
                </p>
            </div>

            <!-- Course Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <!-- Grammar Course -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-orange-400 to-yellow-500 relative">
                        <img src="https://images.unsplash.com/photo-1581092795442-8383ceb1bf31?w=400&h=300&fit=crop" 
                             alt="Grammar" class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4 bg-black bg-opacity-50 text-white px-3 py-1 rounded-full text-sm">
                            <i class="fas fa-play mr-1"></i> 11+ videos
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4 text-sm text-gray-600">
                            <div class="flex items-center">
                                <i class="fas fa-eye mr-2"></i>
                                <span>2.3 k Views</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-clock mr-2"></i>
                                <span>9h 32 min</span>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Grammar</h3>
                        <p class="text-gray-600 text-sm mb-4">English</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <button class="text-red-500 hover:text-red-600">
                                    <i class="fas fa-heart mr-1"></i> Like
                                </button>
                                <div class="flex items-center text-yellow-500">
                                    <i class="fas fa-star"></i>
                                    <span class="ml-1 text-gray-600">4.5</span>
                                </div>
                            </div>
                            <button class="btn-primary px-6 py-2 text-white rounded-lg">Start</button>
                        </div>
                    </div>
                </div>

                <!-- Vocabulary Course -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-gray-400 to-gray-600 relative">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=300&fit=crop" 
                             alt="Vocabulary" class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4 bg-black bg-opacity-50 text-white px-3 py-1 rounded-full text-sm">
                            <i class="fas fa-play mr-1"></i> 12+ videos
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4 text-sm text-gray-600">
                            <div class="flex items-center">
                                <i class="fas fa-eye mr-2"></i>
                                <span>2.3 k Views</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-clock mr-2"></i>
                                <span>9h 32 min</span>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Vocabulary</h3>
                        <p class="text-gray-600 text-sm mb-4">English</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <button class="text-red-500 hover:text-red-600">
                                    <i class="fas fa-heart mr-1"></i> Like
                                </button>
                                <div class="flex items-center text-yellow-500">
                                    <i class="fas fa-star"></i>
                                    <span class="ml-1 text-gray-600">4.5</span>
                                </div>
                            </div>
                            <button class="btn-primary px-6 py-2 text-white rounded-lg">Start</button>
                        </div>
                    </div>
                </div>

                <!-- Conjugation Course -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-gray-500 to-gray-700 relative">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=300&fit=crop" 
                             alt="Conjugation" class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4 bg-black bg-opacity-50 text-white px-3 py-1 rounded-full text-sm">
                            <i class="fas fa-play mr-1"></i> 16+ videos
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4 text-sm text-gray-600">
                            <div class="flex items-center">
                                <i class="fas fa-eye mr-2"></i>
                                <span>2.3 k Views</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-clock mr-2"></i>
                                <span>9h 32 min</span>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Conjugation</h3>
                        <p class="text-gray-600 text-sm mb-4">English</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <button class="text-red-500 hover:text-red-600">
                                    <i class="fas fa-heart mr-1"></i> Like
                                </button>
                                <div class="flex items-center text-yellow-500">
                                    <i class="fas fa-star"></i>
                                    <span class="ml-1 text-gray-600">4.5</span>
                                </div>
                            </div>
                            <button class="btn-primary px-6 py-2 text-white rounded-lg">Start</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination dots -->
            <div class="flex justify-center space-x-2 mb-8">
                <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                <div class="w-3 h-3 bg-gray-400 rounded-full"></div>
                <div class="w-3 h-3 bg-gray-400 rounded-full"></div>
            </div>

            <!-- Explore All Programs Button -->
            <div class="text-center">
                <button class="bg-white text-gray-800 px-8 py-3 rounded-lg font-medium hover:bg-gray-50 transition-colors">
                    Explore All Programs
                </button>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-16 bg-blue-100">
        <div class="container mx-auto px-6">
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <!-- Left Content -->
                    <div class="p-12">
                        <h2 class="text-3xl font-bold text-gray-800 mb-8">
                            What our student <br>
                            <span class="text-blue-600">saying</span>
                        </h2>
                        
                        <div class="mb-8">
                            <p class="text-gray-700 leading-relaxed mb-6">
                                My name is Clara, and I am currently learning on the Djanguirde platform. This experience allows me to access interactive courses and personalized support. Because of this, I am developing essential skills for my future career.
                            </p>
                            
                            <div class="flex items-center space-x-4 mb-6">
                                <img src="/images/djanguirde3.png" alt="Student" class="w-full h-full object-cover">
                                <div>
                                    <div class="font-semibold text-gray-800">clara kyliane</div>
                                    <div class="text-sm text-gray-600">student</div>
                                </div>
                            </div>
                            
                            <!-- Navigation arrows -->
                            <div class="flex space-x-4">
                                <button class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center hover:bg-gray-300 transition-colors">
                                    <i class="fas fa-chevron-left text-gray-600"></i>
                                </button>
                                <button class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors">
                                    <i class="fas fa-chevron-right text-white"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right Image -->
                    <div class="relative">
                        <div class="h-full bg-blue-600 rounded-3xl flex items-center justify-center">
                            <div class="w-64 h-64 rounded-full overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1607990281513-2c110a25bd8c?w=400&h=400&fit=crop&crop=face" 
                                     alt="Graduate student" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Call to Action -->
                <div class="bg-blue-600 p-8">
                    <div class="flex flex-col md:flex-row items-center justify-between text-white">
                        <div class="mb-4 md:mb-0">
                            <h3 class="text-xl font-semibold mb-2">Are you ready to start your course now !</h3>
                        </div>
                        <div class="flex space-x-4">
                            <button class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-50 transition-colors">
                                Let Get Started
                            </button>
                            <button class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors">
                                Contact
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

