<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to {{ config('app.name', 'Mini Forum') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <i class="fas fa-comments text-2xl text-blue-600 mr-2"></i>
                    <span class="text-xl font-bold text-gray-800">Mini Forum</span>
                </div>

                @auth
                    <div class="flex items-center space-x-4">
                        <a href="" class="text-gray-700 hover:text-blue-600 transition-colors">
                            <i class="fas fa-home mr-1"></i>Go to Forum
                        </a>
                        <span class="text-gray-500">|</span>
                        <span class="text-gray-700">Welcome, !</span>
                    </div>
                @else
                    <div class="flex items-center space-x-4">
                        <a href="" class="text-gray-700 hover:text-blue-600 transition-colors">
                            Sign In
                        </a>
                        <a href="" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                            Get Started
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="gradient-bg text-black py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="animate-float mb-8">
                    <i class="fas fa-comments text-6xl mb-4 opacity-100"></i>
                </div>

                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    Welcome to <span class="text-yellow-300">Mini Forum</span>
                </h1>

                <p class="text-xl md:text-2xl mb-8 opacity-90 max-w-3xl mx-auto">
                    Join our vibrant community where ideas come to life. Share thoughts, ask questions, and connect with like-minded individuals from around the world.
                </p>

                @guest
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <a href="" class="bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-yellow-300 transition-all transform hover:scale-105 shadow-lg">
                            <i class="fas fa-user-plus mr-2"></i>Join the Community
                        </a>
                        <a href="" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-white hover:text-gray-900 transition-all">
                            <i class="fas fa-sign-in-alt mr-2"></i>Sign In
                        </a>
                    </div>
                @else
                    <div class="flex justify-center">
                        <a href="" class="bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-yellow-300 transition-all transform hover:scale-105 shadow-lg">
                            <i class="fas fa-arrow-right mr-2"></i>Enter Forum
                        </a>
                    </div>
                @endguest
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    Why Choose Mini Forum?
                </h2>
                <p class="text-xl text-white max-w-2xl mx-auto">
                    Experience the best of community discussions with our feature-rich platform
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="text-center p-8 rounded-xl bg-gray-50 card-hover">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Active Community</h3>
                    <p class="text-gray-600">
                        Connect with passionate individuals who share your interests and engage in meaningful conversations.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="text-center p-8 rounded-xl bg-gray-50 card-hover">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-comments text-2xl text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Rich Discussions</h3>
                    <p class="text-gray-600">
                        Start topics, reply to discussions, and build lasting conversations with our intuitive forum system.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="text-center p-8 rounded-xl bg-gray-50 card-hover">
                    <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-shield-alt text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Safe Environment</h3>
                    <p class="text-gray-600">
                        Enjoy a moderated, secure platform where respectful communication is our top priority.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-3xl font-bold text-yellow-400 mb-2">

                    </div>
                    <p class="text-gray-300">Active Members</p>
                </div>
                <div>
                    <div class="text-3xl font-bold text-blue-400 mb-2">

                    </div>
                    <p class="text-gray-300">Topics Created</p>
                </div>
                <div>
                    <div class="text-3xl font-bold text-green-400 mb-2">

                    </div>
                    <p class="text-gray-300">Replies Posted</p>
                </div>
                <div>
                    <div class="text-3xl font-bold text-purple-400 mb-2">
                        <i class="fas fa-clock mr-2"></i>24/7
                    </div>
                    <p class="text-gray-300">Always Online</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    @guest
        <section class="py-20 bg-blue-600 text-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Ready to Join the Conversation?
                </h2>
                <p class="text-xl mb-8 opacity-90">
                    Create your account today and become part of our growing community. It's free and takes less than a minute!
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="" class="bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-yellow-300 transition-all transform hover:scale-105 shadow-lg">
                        <i class="fas fa-rocket mr-2"></i>Get Started Now
                    </a>
                    <a href="" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-white hover:text-blue-600 transition-all">
                        <i class="fas fa-sign-in-alt mr-2"></i>Already a Member?
                    </a>
                </div>
            </div>
        </section>
    @endguest

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-comments text-2xl text-blue-400 mr-2"></i>
                        <span class="text-xl font-bold">Mini Forum</span>
                    </div>
                    <p class="text-gray-300 mb-4">
                        Building communities through meaningful conversations. Join us and be part of something bigger.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-github text-xl"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        @guest
                            <li><a href="" class="text-gray-300 hover:text-white transition-colors">Sign In</a></li>
                            <li><a href="" class="text-gray-300 hover:text-white transition-colors">Register</a></li>
                        @else
                            <li><a href="" class="text-gray-300 hover:text-white transition-colors">Forum</a></li>
                            <li><a href="" class="text-gray-300 hover:text-white transition-colors">Dashboard</a></li>
                        @endguest
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Community</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Guidelines</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Help Center</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Terms of Service</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-400">
                    &copy; {{ date('Y') }} Mini Forum. All rights reserved. Built for the community.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
