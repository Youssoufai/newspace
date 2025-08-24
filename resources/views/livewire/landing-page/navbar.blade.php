<nav class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            
            {{-- Logo --}}
            <div class="flex items-center">
                {{-- <x-icon name="shield" class="h-8 w-8 text-blue-600" /> --}}
                <span class="ml-2 text-xl font-bold text-gray-900">HealthCloud</span>
            </div>

            {{-- Desktop Navigation --}}
            <div class="hidden md:flex items-center space-x-8">
                <button onclick="scrollToSection('solutions')" class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">Solutions</button>
                <button onclick="scrollToSection('features')" class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">Features</button>
                <button onclick="scrollToSection('security')" class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">Security</button>
                <button onclick="scrollToSection('pricing')" class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">Pricing</button>

                <div class="flex items-center space-x-3">
                    <a href="{{ route('login') }}" class="px-3 py-2 text-blue-600 hover:bg-blue-50 rounded-md">Sign In</a>
                    <a href="{{ route('register') }}" class="px-3 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Sign Up</a>
                </div>
            </div>

            {{-- Mobile Navigation --}}
            <div class="md:hidden flex items-center">
                <button wire:click="toggleMenu" class="p-2 rounded-md text-gray-600 hover:bg-gray-100">
                    @if ($isMenuOpen)
                   {{--      <x-icon name="x" class="h-6 w-6" /> --}}
                    @else
                       {{--  <x-icon name="menu" class="h-6 w-6" /> --}}
                    @endif
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Menu --}}
    @if ($isMenuOpen)
        <div class="md:hidden px-4 pt-4 pb-6 space-y-4 bg-white shadow">
            <button onclick="scrollToSection('solutions')" class="block text-gray-600 hover:text-blue-600">Solutions</button>
            <button onclick="scrollToSection('features')" class="block text-gray-600 hover:text-blue-600">Features</button>
            <button onclick="scrollToSection('security')" class="block text-gray-600 hover:text-blue-600">Security</button>
            <button onclick="scrollToSection('pricing')" class="block text-gray-600 hover:text-blue-600">Pricing</button>

            <div class="space-y-2">
                <a href="{{ route('#') }}" class="block w-full text-center px-3 py-2 text-blue-600 hover:bg-blue-50 rounded-md">Sign In</a>
                <a href="{{ route('#') }}" class="block w-full text-center px-3 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Sign Up</a>
            </div>
        </div>
    @endif
</nav>

{{-- Smooth Scroll --}}
<script>
    function scrollToSection(sectionId) {
        const el = document.getElementById(sectionId);
        if (el) el.scrollIntoView({ behavior: "smooth" });
    }
</script>
