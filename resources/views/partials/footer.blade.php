{{-- resources/views/partials/footer.blade.php --}}
<footer class="footer-bg mt-12">
    <div class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Section Follow Us -->
            <div>
                <h3 class="text-xl font-bold text-gray-800 mb-6">FOLLOW US</h3>
                <div class="flex space-x-4">
                    <a href="#" class="w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center hover:bg-gray-700 transition-colors">
                        <i class="fab fa-facebook-f text-white text-lg"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center hover:bg-gray-700 transition-colors">
                        <i class="fab fa-twitter text-white text-lg"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center hover:bg-gray-700 transition-colors">
                        <i class="fab fa-linkedin-in text-white text-lg"></i>
                    </a>
                </div>
            </div>
            
            <!-- Section Navigation principale -->
            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Navigation</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('home') }}" class="text-gray-700 hover:text-gray-900 transition-colors">Home</a></li>
                    <li><a href="{{ route('course') }}" class="text-gray-700 hover:text-gray-900 transition-colors">Course</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-700 hover:text-gray-900 transition-colors">About</a></li>
                    <li><a href="{{ route('blog') }}" class="text-gray-700 hover:text-gray-900 transition-colors">Blog</a></li>
                    <li><a href="" class="text-gray-700 hover:text-gray-900 transition-colors">Login</a></li>
                </ul>
            </div>
            
            <!-- Section Support -->
            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Support</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('contact') }}" class="text-gray-700 hover:text-gray-900 transition-colors">Contact</a></li>
                    <li><a href="{{ route('terms') }}" class="text-gray-700 hover:text-gray-900 transition-colors">Terms of Use</a></li>
                    <li><a href="{{ route('faq') }}" class="text-gray-700 hover:text-gray-900 transition-colors">FAQ</a></li>
                </ul>
            </div>
            
            <!-- Section Newsletter -->
            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Newsletter</h3>
                <p class="text-gray-600 mb-4">Restez informé de nos dernières nouveautés</p>
                <form class="space-y-3">
                    <input type="email" placeholder="Votre email" 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button type="submit" 
                            class="w-full btn-primary px-4 py-2 text-white font-medium rounded-lg">
                        S'abonner
                    </button>
                </form>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="border-t border-gray-300 mt-8 pt-8 text-center">
            <p class="text-gray-600">&copy; {{ date('Y') }} DJANGUIRDE. Tous droits réservés.</p>
        </div>
    </div>
</footer>

