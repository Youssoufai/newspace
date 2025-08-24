<section class="py-20 bg-gradient-to-r from-blue-600 to-blue-600">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        
        {{-- Heading --}}
        <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">
            Ready to Transform Your Healthcare Operations?
        </h2>
        <p class="text-xl text-blue-100 mb-8">
            Join hundreds of healthcare organizations that trust HealthCloud to digitize their operations and improve patient outcomes.
        </p>

        {{-- CTA Buttons --}}
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
            <a href="#"
               class="inline-block px-6 py-3 text-lg font-medium rounded-lg bg-white text-blue-600 hover:bg-gray-100 transform hover:scale-105 transition-all duration-200 shadow-lg">
                Start Free 30-Day Trial
            </a>
            <a href="#"
               class="inline-block px-6 py-3 text-lg font-medium rounded-lg border-2 border-white text-white hover:bg-white hover:text-blue-600 transition-all duration-200">
                Schedule Demo
            </a>
        </div>

        {{-- Benefits List --}}
        @php
            $benefits = [
                "No setup fees",
                "Cancel anytime",
                "24/7 support included"
            ];
        @endphp

        <div class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-8 text-blue-100">
            @foreach($benefits as $benefit)
                <div class="flex items-center">
                    {{-- Replace with real SVG/icon if needed --}}
                    <span class="h-5 w-5 mr-2 text-green-400">✅</span>
                    {{ $benefit }}
                </div>
            @endforeach
        </div>
    </div>
</section>
