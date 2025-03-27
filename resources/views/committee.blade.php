@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-blue-50 to-white">
    <div class="container mx-auto px-4 py-12">
        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="font-prompt text-4xl font-bold text-gray-800 mb-4">
                คณะกรรมการสมาคม
            </h1>
            <div class="w-24 h-1 bg-blue-500 mx-auto"></div>
        </div>

        <!-- Executives Section -->
        <div class="mb-16">
            <h2 class="font-prompt text-3xl font-semibold text-gray-800 text-center mb-8">
                คณะผู้บริหาร
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
                @foreach($executives as $index => $member)
                <div
                    class="bg-white rounded-xl shadow-lg p-6 transform transition duration-300 hover:scale-[1.02] hover:shadow-xl"
                >
                    <div class="text-center">
                        <div class="mb-4 relative">
                            <div class="w-32 h-32 mx-auto rounded-full overflow-hidden border-4 border-blue-500">
                                <img
                                    src="{{ asset($member['image']) }}"
                                    alt="{{ $member['name'] }}"
                                    class="w-full h-full object-cover"
                                />
                            </div>
                        </div>
                        <h3 class="font-prompt text-xl font-semibold text-blue-600 mb-2">
                            {{ $member['position'] }}
                        </h3>
                        <h4 class="font-noto-thai text-lg font-medium text-gray-800 mb-2">
                            {{ $member['name'] }}
                        </h4>
                        <p class="font-noto-thai text-gray-600">
                            {{ $member['school'] }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Board Members Section -->
        <div>
            <h2 class="font-prompt text-3xl font-semibold text-gray-800 text-center mb-8">
                คณะกรรมการ
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">
                @foreach($boardMembers as $index => $member)
                <div
                    class="bg-white rounded-xl shadow-md p-4 transform transition duration-300 hover:scale-[1.02] hover:shadow-lg"
                >
                    <div class="text-center">
                        <div class="mb-4">
                            <div class="w-24 h-24 mx-auto rounded-full overflow-hidden border-2 border-gray-300">
                                <img
                                    src="{{ asset($member['image']) }}"
                                    alt="{{ $member['name'] }}"
                                    class="w-full h-full object-cover"
                                />
                            </div>
                        </div>
                        <h3 class="font-prompt text-lg font-semibold text-gray-700 mb-2">
                            {{ $member['position'] }}
                        </h3>
                        <h4 class="font-noto-thai text-base font-medium text-gray-800 mb-1">
                            {{ $member['name'] }}
                        </h4>
                        <p class="font-noto-thai text-sm text-gray-600">
                            {{ $member['school'] }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection