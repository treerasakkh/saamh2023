@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-blue-50 to-white">
    <!-- Hero Section -->
    <div class="w-full bg-white shadow-sm">
        <div class="container mx-auto px-4 py-8">
            <h1 class="font-prompt text-4xl font-bold text-gray-800 mb-4 text-center">
                ทำเนียบสมาชิก
            </h1>
            <div class="w-24 h-1 bg-blue-500 mx-auto mb-4"></div>
            <p class="text-gray-600 text-center max-w-2xl mx-auto">
                รายชื่อสมาชิกสามัญและวิสามัญของสมาคมผู้บริหารโรงเรียนมัธยมศึกษาจังหวัดมุกดาหาร
            </p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="container mx-auto px-4">
        <div class="py-8">
            <!-- Info Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h3 class="font-prompt text-lg font-semibold text-gray-800 mb-2">
                        สมาชิกสามัญ
                    </h3>
                    <p class="text-3xl font-bold text-blue-600">
                        {{ $counters['normals'] ?? 0 }}
                    </p>
                    <p class="text-sm text-gray-500">ผู้บริหารโรงเรียนปัจจุบัน</p>
                </div>
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h3 class="font-prompt text-lg font-semibold text-gray-800 mb-2">
                        สมาชิกวิสามัญ
                    </h3>
                    <p class="text-3xl font-bold text-green-600">
                        {{ $counters['extras'] ?? 0 }}
                    </p>
                    <p class="text-sm text-gray-500">รองผู้อำนวยการโรงเรียน</p>
                </div>
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h3 class="font-prompt text-lg font-semibold text-gray-800 mb-2">
                        สมาชิกกิตติมศักดิ์
                    </h3>
                    <p class="text-3xl font-bold text-orange-600">
                        {{ $counters['honors'] ?? 0 }}
                    </p>
                    <p class="text-sm text-gray-500">สมาชิกกิตติมศักดิ์</p>
                </div>
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h3 class="font-prompt text-lg font-semibold text-gray-800 mb-2">
                        สมาชิกทั้งหมด
                    </h3>
                    <p class="text-3xl font-bold text-purple-600">
                        {{ ($counters['normals'] ?? 0) + ($counters['extras'] ?? 0) + ($counters['honors'] ?? 0) }}
                    </p>
                    <p class="text-sm text-gray-500">จำนวนสมาชิกรวม</p>
                </div>
            </div>

            <!-- Members Table Section -->
            <div class="bg-white rounded-lg shadow-sm">
                @include('components.members-table')
            </div>

            <!-- Footer Note -->
            <div class="mt-8 text-center text-sm text-gray-500">
                {{-- <p>ข้อมูล ณ วันที่ {{ now()->format('d F Y') }}</p> --}}
                <p>สมาคมผู้บริหารโรงเรียนมัธยมศึกษาจังหวัดมุกดาหาร</p>
            </div>
        </div>
    </div>
</div>
@endsection