<!-- resources/views/partials/header.blade.php -->
<header id="header" class="header fixed-top bg-white shadow-sm">
    <div class="header-container container-fluid container-xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-20">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="logo flex items-center">
            <h1 class="sitename text-xl font-bold text-gray-800 hover:text-blue-600 transition duration-300">iLanding</h1>
        </a>

        <!-- Navigation Menu -->
        <nav id="navmenu" class="navmenu hidden lg:flex items-center space-x-8">
            <ul class="flex space-x-8">
                <li><a href="#hero" class="nav-link text-gray-700 hover:text-blue-600 transition duration-300">Home</a></li>
                <li><a href="#about" class="nav-link text-gray-700 hover:text-blue-600 transition duration-300">About</a></li>
                <li><a href="#features" class="nav-link text-gray-700 hover:text-blue-600 transition duration-300">Features</a></li>
                <li><a href="#services" class="nav-link text-gray-700 hover:text-blue-600 transition duration-300">Services</a></li>
                <li><a href="#pricing" class="nav-link text-gray-700 hover:text-blue-600 transition duration-300">Pricing</a></li>
                <li><a href="#contact" class="nav-link text-gray-700 hover:text-blue-600 transition duration-300">Contact</a></li>
            </ul>
        </nav>

        <!-- Mobile Navigation Toggle -->
        <button class="mobile-nav-toggle lg:hidden text-gray-700 hover:text-blue-600 focus:outline-none">
            <i class="bi bi-list text-2xl"></i>
        </button>

        <!-- Get Started Button -->
        <a class="btn-getstarted hidden lg:inline-block bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300" href="{{ url('/login') }}">Login</a>
    </div>
</header>