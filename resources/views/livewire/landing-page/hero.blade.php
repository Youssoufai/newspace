<section class="relative gradient-bg pt-16 pb-20 overflow-hidden">
    {{-- Background Pattern --}}
    <div class="absolute inset-0 bg-grid-gray-100/50"></div>

    {{-- Medical Icons Background --}}
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-20 left-10 w-8 h-8 text-blue-600/10 rotate-12">
            <x-heroicon-o-shield-check class="w-full h-full" />
        </div>
        <div class="absolute top-32 right-20 w-6 h-6 text-green-600/10 -rotate-12">
            <x-heroicon-o-check-circle class="w-full h-full" />
        </div>
        <div class="absolute bottom-40 left-1/4 w-10 h-10 text-purple-600/10 rotate-45">
            <x-heroicon-o-plus class="w-full h-full" />
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="lg:grid lg:grid-cols-2 lg:gap-12 items-center">
            {{-- Left Content --}}
            <div class="max-w-xl">
                {{-- Security Badge --}}
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-white/80 border border-gray-200 shadow-sm mb-6">
                    <x-heroicon-o-shield-check class="h-4 w-4 text-green-600 mr-2" />
                    <span class="text-sm font-medium text-gray-700">HIPAA-Compliant & Encrypted</span>
                </div>

                <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                    Unifying Healthcare Through
                    <span class="text-blue-600">Intelligent Digital Records</span>
                </h1>

                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    HealthCloud connects hospitals, clinics, labs, doctors, nurses, and patients in one secure platform — empowering healthcare providers to digitize operations, access real-time patient data, and collaborate more efficiently.
                </p>

                {{-- CTAs --}}
                <div class="flex flex-col sm:flex-row gap-4 mb-8">
                    <button class="px-6 py-3 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transform hover:scale-105 transition-all duration-200 shadow-lg">
                        Start Free Trial
                    </button>
                    <button class="px-6 py-3 rounded-lg border border-gray-300 text-gray-700 hover:border-blue-600 hover:text-blue-600">
                        Schedule Demo
                    </button>
                </div>

                {{-- Trust Indicators --}}
                <div class="flex items-center space-x-8 text-sm text-gray-500">
                    <div class="flex items-center">
                        <x-heroicon-o-check-circle class="h-5 w-5 text-green-600 mr-2" />
                        SOC 2 Certified
                    </div>
                    <div class="flex items-center">
                        <x-heroicon-o-check-circle class="h-5 w-5 text-green-600 mr-2" />
                        HL7 FHIR Ready
                    </div>
                    <div class="flex items-center">
                        <x-heroicon-o-check-circle class="h-5 w-5 text-green-600 mr-2" />
                        24/7 Support
                    </div>
                </div>
            </div>

            {{-- Right Content - Dashboard Mockup --}}
            <div class="mt-12 lg:mt-0">
                <div class="relative">
                    {{-- Dashboard Card --}}
                    <div class="rounded-2xl shadow-2xl transform rotate-1 overflow-hidden">
                        {{-- Header --}}
                        <div class="bg-gradient-to-r from-blue-600 to-blue-600 px-6 py-4 text-white">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center">
                                        <x-heroicon-o-shield-check class="h-5 w-5 text-white" />
                                    </div>
                                    <div>
                                        <h3 class="text-white font-semibold">HealthCloud Dashboard</h3>
                                        <p class="text-blue-100 text-sm">Real-time Healthcare Data</p>
                                    </div>
                                </div>
                                <div class="flex space-x-2">
                                    <div class="w-3 h-3 bg-green-400 rounded-full"></div>
                                    <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
                                    <div class="w-3 h-3 bg-red-400 rounded-full"></div>
                                </div>
                            </div>
                        </div>

                        {{-- Body --}}
                        <div class="p-6 space-y-6 bg-white">
                            {{-- Stats --}}
                            <div class="grid grid-cols-3 gap-4">
                                <div class="bg-blue-50 p-4 rounded-xl">
                                    <div class="text-2xl font-bold text-blue-600">1,247</div>
                                    <div class="text-sm text-gray-600">Active Patients</div>
                                </div>
                                <div class="bg-green-50 p-4 rounded-xl">
                                    <div class="text-2xl font-bold text-green-600">98%</div>
                                    <div class="text-sm text-gray-600">System Uptime</div>
                                </div>
                                <div class="bg-purple-50 p-4 rounded-xl">
                                    <div class="text-2xl font-bold text-purple-600">156</div>
                                    <div class="text-sm text-gray-600">Connected Labs</div>
                                </div>
                            </div>

                            {{-- Patient List --}}
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-3">Recent Patient Records</h4>
                                <div class="space-y-3">
                                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white text-sm font-semibold">JD</div>
                                            <div>
                                                <div class="font-medium text-gray-900">John Doe</div>
                                                <div class="text-sm text-gray-500">ID: #HC001247</div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-sm font-medium text-green-600">Updated</div>
                                            <div class="text-xs text-gray-500">2 min ago</div>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center text-white text-sm font-semibold">SM</div>
                                            <div>
                                                <div class="font-medium text-gray-900">Sarah Miller</div>
                                                <div class="text-sm text-gray-500">ID: #HC001248</div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-sm font-medium text-blue-600">Lab Results</div>
                                            <div class="text-xs text-gray-500">5 min ago</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Quick Actions --}}
                            <div class="flex space-x-2">
                                <button class="flex-1 px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">
                                    Add Patient
                                </button>
                                <button class="flex-1 px-4 py-2 rounded-lg border border-gray-300 hover:border-blue-600">
                                    View Reports
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- Floating Cards --}}
                    <div class="absolute -top-4 -right-4 p-4 bg-white rounded-xl shadow-lg transform -rotate-3">
                        <div class="flex items-center space-x-2">
                            <x-heroicon-o-check-circle class="h-5 w-5 text-green-600" />
                            <span class="text-sm font-medium text-gray-700">Lab Results Synced</span>
                        </div>
                    </div>

                    <div class="absolute -bottom-4 -left-4 p-4 bg-white rounded-xl shadow-lg transform rotate-2">
                        <div class="flex items-center space-x-2">
                            <x-heroicon-o-calendar class="h-5 w-5 text-blue-600" />
                            <span class="text-sm font-medium text-gray-700">New Appointment</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
