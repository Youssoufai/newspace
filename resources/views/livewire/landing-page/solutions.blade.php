@php
    $solutions = [
        [
            'icon' => 'shield',
            'title' => 'Hospitals & Clinics',
            'description' => 'Streamline operations with integrated EHR systems, patient management, and real-time analytics dashboards.',
            'features' => [
                'Complete EHR integration',
                'Advanced analytics & reporting',
                'Multi-department coordination',
            ],
            'bgColor' => 'bg-blue-50',
            'iconColor' => 'text-blue-600',
            'buttonColor' => 'bg-blue-600 hover:bg-blue-700',
        ],
        [
            'icon' => 'search',
            'title' => 'Laboratories',
            'description' => 'Digital lab result management with automated reporting and seamless integration with healthcare providers.',
            'features' => [
                'Automated result delivery',
                'Quality control tracking',
                'Real-time status updates',
            ],
            'bgColor' => 'bg-green-50',
            'iconColor' => 'text-green-600',
            'buttonColor' => 'bg-green-600 hover:bg-green-700',
        ],
        [
            'icon' => 'users',
            'title' => 'Doctors & Nurses',
            'description' => 'Access patient histories, collaborate with colleagues, and manage appointments from any device, anywhere.',
            'features' => [
                'Mobile-first interface',
                'Instant patient lookup',
                'Secure messaging',
            ],
            'bgColor' => 'bg-purple-50',
            'iconColor' => 'text-purple-600',
            'buttonColor' => 'bg-purple-600 hover:bg-purple-700',
        ],
        [
            'icon' => 'user-check',
            'title' => 'Patients',
            'description' => 'Empower patients with secure access to their health records, appointment scheduling, and communication with care teams.',
            'features' => [
                'Personal health dashboard',
                'Online appointment booking',
                'Test result notifications',
            ],
            'bgColor' => 'bg-orange-50',
            'iconColor' => 'text-orange-600',
            'buttonColor' => 'bg-orange-600 hover:bg-orange-700',
        ],
        [
            'icon' => 'settings',
            'title' => 'System Administrators',
            'description' => 'Comprehensive system management with user controls, security monitoring, and detailed analytics for organizational oversight.',
            'features' => [
                'Role-based access control',
                'Audit trail & compliance',
                'Performance monitoring',
            ],
            'bgColor' => 'bg-indigo-50',
            'iconColor' => 'text-indigo-600',
            'buttonColor' => 'bg-indigo-600 hover:bg-indigo-700',
        ],
    ];
@endphp

<section id="solutions" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                Built for Every Healthcare Stakeholder
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                From hospitals to individual practitioners, HealthCloud provides tailored solutions for every role in the healthcare ecosystem.
            </p>
        </div>

        {{-- First 3 --}}
        <div class="grid lg:grid-cols-3 gap-8 mb-12">
            @foreach(array_slice($solutions, 0, 3) as $solution)
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-shadow duration-300">
                    <div class="p-8">
                        <div class="w-12 h-12 {{ $solution['bgColor'] }} rounded-xl flex items-center justify-center mb-6">
                            <i data-lucide="{{ $solution['icon'] }}" class="h-6 w-6 {{ $solution['iconColor'] }}"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">{{ $solution['title'] }}</h3>
                        <p class="text-gray-600 mb-6">{{ $solution['description'] }}</p>
                        <ul class="space-y-2 mb-6">
                            @foreach($solution['features'] as $feature)
                                <li class="flex items-center text-sm text-gray-600">
                                    <i data-lucide="check-circle" class="h-4 w-4 text-green-600 mr-2 flex-shrink-0"></i>
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                        <button class="w-full {{ $solution['buttonColor'] }} text-white py-2 px-4 rounded-lg">
                            Learn More
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Remaining 2 --}}
        <div class="grid lg:grid-cols-2 gap-8">
            @foreach(array_slice($solutions, 3) as $solution)
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-shadow duration-300">
                    <div class="p-8">
                        <div class="w-12 h-12 {{ $solution['bgColor'] }} rounded-xl flex items-center justify-center mb-6">
                            <i data-lucide="{{ $solution['icon'] }}" class="h-6 w-6 {{ $solution['iconColor'] }}"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">{{ $solution['title'] }}</h3>
                        <p class="text-gray-600 mb-6">{{ $solution['description'] }}</p>
                        <ul class="space-y-2 mb-6">
                            @foreach($solution['features'] as $feature)
                                <li class="flex items-center text-sm text-gray-600">
                                    <i data-lucide="check-circle" class="h-4 w-4 text-green-600 mr-2 flex-shrink-0"></i>
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                        <button class="w-full {{ $solution['buttonColor'] }} text-white py-2 px-4 rounded-lg">
                            Learn More
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
