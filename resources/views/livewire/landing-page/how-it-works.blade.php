<section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Heading --}}
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                Get Started in 4 Simple Steps
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                From registration to full deployment, we make it easy for healthcare organizations to digitize their operations.
            </p>
        </div>

        {{-- Steps --}}
        @php
            $steps = [
                [
                    'number' => 1,
                    'title' => 'Register & Setup',
                    'description' => 'Create your organization account and configure initial settings with our guided setup process.',
                    'color' => 'bg-blue-600'
                ],
                [
                    'number' => 2,
                    'title' => 'Configure System',
                    'description' => 'Customize workflows, user roles, and integrate with existing systems through our API-first platform.',
                    'color' => 'bg-green-600'
                ],
                [
                    'number' => 3,
                    'title' => 'Migrate Data',
                    'description' => 'Securely import existing patient records and health data with our automated migration tools.',
                    'color' => 'bg-purple-600'
                ],
                [
                    'number' => 4,
                    'title' => 'Go Live',
                    'description' => 'Train your team, go live with confidence, and access ongoing support from our healthcare experts.',
                    'color' => 'bg-orange-500'
                ],
            ];
        @endphp

        <div class="grid lg:grid-cols-4 gap-8 mb-16">
            @foreach($steps as $index => $step)
                <div class="text-center relative">
                    {{-- Number --}}
                    <div class="w-16 h-16 {{ $step['color'] }} rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-2xl font-bold text-white">{{ $step['number'] }}</span>
                    </div>
                    {{-- Title --}}
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ $step['title'] }}</h3>
                    {{-- Description --}}
                    <p class="text-gray-600">{{ $step['description'] }}</p>

                    {{-- Connector Line (only between steps) --}}
                    @if($index < count($steps) - 1)
                        <div class="hidden lg:block absolute top-8 left-full w-full h-0.5 bg-gradient-to-r from-current to-gray-300 transform -translate-x-8 opacity-30"></div>
                    @endif
                </div>
            @endforeach
        </div>

        {{-- Timeline --}}
        @php
            $timeline = [
                ['period' => 'Week 1-2', 'phase' => 'Setup & Configuration', 'color' => 'text-blue-600'],
                ['period' => 'Week 3-4', 'phase' => 'Data Migration & Testing', 'color' => 'text-green-600'],
                ['period' => 'Week 5-6', 'phase' => 'Training & Go-Live', 'color' => 'text-purple-600'],
            ];
        @endphp

        <div class="bg-white shadow-lg border border-gray-100 rounded-2xl">
            <div class="p-8">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Typical Implementation Timeline</h3>
                    <p class="text-gray-600">Most organizations are fully operational within 30-60 days</p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-6">
                    @foreach($timeline as $item)
                        <div class="text-center p-4">
                            <div class="text-3xl font-bold {{ $item['color'] }} mb-2">{{ $item['period'] }}</div>
                            <div class="text-sm text-gray-600">{{ $item['phase'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
