@php
    $footerSections = [
        [
            "title" => "Product",
            "links" => ["Features", "Integrations", "API Documentation", "Security", "Compliance"]
        ],
        [
            "title" => "Solutions",
            "links" => ["Hospitals", "Clinics", "Laboratories", "Independent Practices", "Health Systems"]
        ],
        [
            "title" => "Support",
            "links" => ["Help Center", "Contact Support", "Training", "Implementation", "Status Page"]
        ]
    ];
@endphp

<footer class="bg-gray-900 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-4 gap-8 mb-8">
            {{-- Company Info --}}
            <div>
                <div class="flex items-center mb-4">
                    {{-- Inline Shield SVG --}}
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-8 w-8 text-blue-600"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                         stroke-width="2">
                        <path d="M12 22c4.97-1.5 8-5 8-10V5l-8-3-8 3v7c0 5 3.03 8.5 8 10z"/>
                    </svg>
                    <span class="ml-2 text-xl font-bold">HealthCloud</span>
                </div>
                <p class="text-gray-300 mb-4">
                    Unifying healthcare through intelligent digital records. Built for modern health systems.
                </p>
                {{-- Social Icons --}}
                <div class="flex space-x-4">
                    <!-- Twitter/X Icon -->
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <!-- SVG Path -->
                            <!-- (same as before) -->
                        </svg>
                    </a>
                    <!-- LinkedIn Icon -->
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <!-- SVG Path -->
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Footer Sections --}}
            @foreach($footerSections as $section)
                <div>
                    <h3 class="text-lg font-semibold mb-4">{{ $section['title'] }}</h3>
                    <ul class="space-y-2 text-gray-300">
                        @foreach($section['links'] as $link)
                            <li>
                                <a href="#" class="hover:text-white transition-colors">{{ $link }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>

        {{-- Bottom Bar --}}
        <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
            <div class="text-gray-400 text-sm mb-4 md:mb-0">
                © 2024 HealthCloud. All rights reserved.
            </div>
            <div class="flex space-x-6 text-sm text-gray-400">
                <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                <a href="#" class="hover:text-white transition-colors">Cookie Policy</a>
            </div>
        </div>

    </div>
</footer>
