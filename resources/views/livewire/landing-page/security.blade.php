<section id="security" class="py-20 bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Heading --}}
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold mb-4">
                Security You Can Trust
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Built with enterprise-grade security and compliance at its core, HealthCloud protects sensitive patient data with the highest industry standards.
            </p>
        </div>

        @php
            $securityFeatures = [
                [
                    'title' => 'HIPAA Compliant',
                    'description' => 'Full compliance with healthcare privacy regulations',
                    'color' => 'text-green-600',
                    'bgColor' => 'bg-green-600/20'
                ],
                [
                    'title' => 'End-to-End Encryption',
                    'description' => '256-bit AES encryption for data at rest and in transit',
                    'color' => 'text-blue-600',
                    'bgColor' => 'bg-blue-600/20'
                ],
                [
                    'title' => 'Role-Based Access',
                    'description' => 'Granular permissions and multi-factor authentication',
                    'color' => 'text-purple-600',
                    'bgColor' => 'bg-purple-600/20'
                ],
                [
                    'title' => 'SOC 2 Certified',
                    'description' => 'Independently audited security controls',
                    'color' => 'text-orange-500',
                    'bgColor' => 'bg-orange-500/20'
                ],
            ];

            $certifications = [
                ['name' => 'HIPAA', 'description' => 'Privacy & Security Rule', 'color' => 'text-green-600', 'bgColor' => 'bg-green-600/10'],
                ['name' => 'SOC 2 Type II', 'description' => 'Security & Availability', 'color' => 'text-blue-600', 'bgColor' => 'bg-blue-600/10'],
                ['name' => 'HL7 FHIR', 'description' => 'Interoperability Standard', 'color' => 'text-purple-600', 'bgColor' => 'bg-purple-600/10'],
                ['name' => 'ISO 27001', 'description' => 'Information Security', 'color' => 'text-orange-500', 'bgColor' => 'bg-orange-500/10'],
            ];

            $stats = [
                ['value' => '256-bit', 'label' => 'AES Encryption', 'color' => 'text-green-600'],
                ['value' => '99.9%', 'label' => 'Uptime Guarantee', 'color' => 'text-blue-600'],
                ['value' => '24/7', 'label' => 'Security Monitoring', 'color' => 'text-purple-600'],
                ['value' => '0', 'label' => 'Data Breaches', 'color' => 'text-orange-500'],
            ];
        @endphp

        <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
            
            {{-- Security Features --}}
            <div>
                <div class="grid grid-cols-2 gap-6">
                    @foreach($securityFeatures as $feature)
                        <div class="bg-gray-800 border border-gray-700 rounded-xl p-6">
                            <div class="w-12 h-12 {{ $feature['bgColor'] }} rounded-lg flex items-center justify-center mb-4">
                                {{-- Replace icon with SVG/icon component --}}
                                <span class="h-6 w-6 {{ $feature['color'] }}">🔒</span>
                            </div>
                            <h3 class="font-semibold mb-2 text-white">{{ $feature['title'] }}</h3>
                            <p class="text-gray-400 text-sm">{{ $feature['description'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Compliance Badges --}}
            <div class="text-center">
                <div class="bg-gray-800 border border-gray-700 rounded-2xl p-8">
                    <h3 class="text-2xl font-bold mb-6 text-white">Compliance & Certifications</h3>
                    <div class="grid grid-cols-2 gap-6 mb-8">
                        @foreach($certifications as $cert)
                            <div class="text-center">
                                <div class="w-20 h-20 {{ $cert['bgColor'] }} rounded-2xl flex items-center justify-center mx-auto mb-3">
                                    {{-- Replace with actual icon --}}
                                    <span class="h-10 w-10 {{ $cert['color'] }}">🛡️</span>
                                </div>
                                <div class="font-semibold text-white">{{ $cert['name'] }}</div>
                                <div class="text-sm text-gray-400">{{ $cert['description'] }}</div>
                            </div>
                        @endforeach
                    </div>

                    <div class="bg-gray-700 border border-gray-600 rounded-xl p-6">
                        <div class="flex items-center justify-center space-x-2 mb-2">
                            <span class="h-5 w-5 text-green-600">✅</span>
                            <span class="font-semibold text-white">99.9% Uptime SLA</span>
                        </div>
                        <p class="text-sm text-gray-300">Built for modern health systems with enterprise-grade reliability</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Security Stats --}}
        <div class="grid md:grid-cols-4 gap-8 text-center">
            @foreach($stats as $stat)
                <div>
                    <div class="text-4xl font-bold {{ $stat['color'] }} mb-2">{{ $stat['value'] }}</div>
                    <div class="text-gray-300">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>

    </div>
</section>
