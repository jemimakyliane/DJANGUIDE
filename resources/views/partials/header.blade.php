{{-- resources/views/partials/header.blade.php --}}
<header class="bg-gradient-to-r from-blue-300 via-blue-400 to-blue-300 shadow-lg">
    <nav class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
             <!-- Logo avec image PNG -->
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 rounded-lg overflow-hidden">
                    <img src="/images/logo.png" alt="Logo" class="w-full h-full object-cover" />
                </div>
                <span class="text-2xl font-bold text-gray-800">DJANGUIRDE</span>
            </div>

            
            <!-- Navigation principale -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" 
                   class="nav-link text-gray-800 font-medium hover:text-blue-700 {{ request()->routeIs('home') ? 'text-blue-700 font-semibold' : '' }}">
                    Home
                </a>
                <a href="{{ route('course') }}" 
                   class="nav-link text-gray-800 font-medium hover:text-blue-700 {{ request()->routeIs('course') ? 'text-blue-700 font-semibold' : '' }}">
                    Course
                </a>
                <a href="{{ route('about') }}" 
                   class="nav-link text-gray-800 font-medium hover:text-blue-700 {{ request()->routeIs('about') ? 'text-blue-700 font-semibold' : '' }}">
                    About
                </a>
                <a href="{{ route('blog') }}" 
                   class="nav-link text-gray-800 font-medium hover:text-blue-700 {{ request()->routeIs('blog') ? 'text-blue-700 font-semibold' : '' }}">
                    Blog
                </a>
            </div>
            
            <!-- Boutons d'authentification -->
            <div class="flex items-center space-x-4">
                @guest
                    <a href="" 
                       class="px-4 py-2 text-gray-700 font-medium border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                        Login
                    </a>
                    <a href="" 
                       class="btn-primary px-6 py-2 text-white font-medium rounded-lg shadow-md">
                        Register
                    </a>
                @else
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" 
                                class="flex items-center space-x-2 text-gray-700 hover:text-blue-700">
                            <i class="fas fa-user-circle text-xl"></i>
                            <span>{{ Auth::user()->name }}</span>
                            <i class="fas fa-chevron-down text-sm"></i>
                        </button>
                        <div x-show="open" @click.away="open = false" 
                             class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Paramètres</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    Déconnexion
                                </button>
                            </form>
                        </div>
                    </div>
                @endguest
                
                <!-- Menu mobile -->
                <div class="md:hidden" x-data="{ open: false }">
                    <button @click="open = !open" class="text-gray-700">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <div x-show="open" @click.away="open = false" 
                         class="absolute top-16 left-0 right-0 bg-white shadow-lg p-4 z-50">
                        <div class="flex flex-col space-y-3">
                            <a href="{{ route('home') }}" class="text-gray-800 font-medium">Home</a>
                            <a href="{{ route('course') }}" class="text-gray-800 font-medium">Course</a>
                            <a href="{{ route('about') }}" class="text-gray-800 font-medium">About</a>
                            <a href="{{ route('blog') }}" class="text-gray-800 font-medium">Blog</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

