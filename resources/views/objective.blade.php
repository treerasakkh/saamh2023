@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-blue-50 to-white">
    <div class="container mx-auto px-4 py-12">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                วัตถุประสงค์ของสมาคม
            </h1>
            <div class="w-24 h-1 bg-blue-500 mx-auto"></div>
        </div>

        <!-- Objectives List -->
        <div class="max-w-4xl mx-auto space-y-6">
            @php
                $objectives = [
                    "เพื่อเสริมสร้างความสามัคคีและความเข้าใจอันดีระหว่างครู ผู้บริหารที่จัดการศึกษาระดับ มัธยมศึกษาจังหวัดมุกดาหาร",
                    "เพื่อสนับสนุนและช่วยเหลือสมาชิก ในการทำกิจกรรมเพื่อส่วนรวม",
                    "เพื่อพัฒนายกระดับมาตรฐานการศึกษาระดับมัธยมศึกษาจังหวัดมุกดาหารให้มีคุณภาพสูงขึ้น",
                    "เพื่อเป็นศูนย์กลางการสนับสนุนส่งเสริมด้านการศึกษาของภาคราชการและภาคเอกชนในพื้นที่ บริการและทั่วไป",
                    "ไม่ดำเนินการใดๆอันอาจเป็นภัยต่อการศึกษาและไม่จัดโต๊ะบิลเลียดตามหนังสือที่ ศธ 1304/ว7971 ลงวันที่ 12 ตุลาคม 2532"
                ];
            @endphp

            @foreach($objectives as $index => $objective)
                <div 
                    class="bg-white rounded-xl shadow-md p-6 transform transition duration-300 hover:scale-[1.02] hover:shadow-lg"
                >
                    <div class="flex items-start space-x-4">
                        <!-- Number Circle -->
                        <div class="flex-shrink-0">
                            <span class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-500 text-white font-semibold">
                                {{ $index + 1 }}
                            </span>
                        </div>
                        
                        <!-- Objective Text -->
                        <div class="flex-grow">
                            <p class="text-gray-700 text-lg leading-relaxed">
                                {{ $objective }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Decorative Element -->
        <div class="mt-12 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-blue-100">
                <svg 
                    class="w-8 h-8 text-blue-500" 
                    fill="none" 
                    stroke="currentColor" 
                    viewBox="0 0 24 24"
                >
                    <path 
                        stroke-linecap="round" 
                        stroke-linejoin="round" 
                        stroke-width="2" 
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" 
                    />
                </svg>
            </div>
        </div>
    </div>
</div>
@endsection