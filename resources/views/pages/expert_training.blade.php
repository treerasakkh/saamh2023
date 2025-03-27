@extends('layouts.app')

@section('title', 'สมาคมผู้บริหารโรงเรียนมัธยมศึกษาจังหวัดมุกดาหาร')

@section('content')
    <!-- Header -->
    <div class="container mx-auto px-4 py-12">


        <!-- News Section -->
        <div class="max-w-4xl mx-auto">
            <section class="bg-white rounded-2xl shadow-lg p-8 transform transition duration-300 hover:shadow-xl">
                <h2 class="font-prompt text-2xl font-semibold text-gray-800 mb-6 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info w-6 h-6 text-blue-500 mr-2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="16" x2="12" y2="12"></line>
                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                    </svg>
                    ข่าวสาร
                </h2>
                
                <section class="bg-white rounded-2xl shadow-lg p-8 transform transition duration-300 hover:shadow-xl max-w-4xl mx-auto my-8">
                    <div class="space-y-6">
                        <h2 class="font-prompt text-3xl text-center text-blue-600 font-bold flex items-center justify-center gap-2">
                            <span class="text-2xl">🌟</span> เชิญร่วมพัฒนาความก้าวหน้าในวิชาชีพ
                        </h2>

                        <div class="font-noto-thai space-y-4">
                            <p class="text-gray-700 leading-relaxed">
                                สมาคมผู้บริหารโรงเรียนมัธยมศึกษาจังหวัดมุกดาหาร (ส.บ.ม.ม.ห.)
                                ขอเชิญท่านเข้าร่วมโครงการที่จะเปลี่ยนเส้นทางวิชาชีพของท่านสู่ระดับเชี่ยวชาญ
                            </p>

                            <div class="bg-blue-50 p-6 rounded-xl">
                                <h3 class="text-xl font-semibold text-blue-700 mb-2 flex items-center gap-2">
                                    <span>📚</span> โครงการอบรมเชิงปฏิบัติการ:
                                </h3>
                                <p class="text-lg text-blue-800 font-medium">
                                    "การพัฒนาวิชาชีพสู่วิทยฐานะเชี่ยวชาญและเชี่ยวชาญพิเศษ"
                                </p>
                                <p class="text-gray-600 mt-2">
                                    สำหรับ: ผู้บริหารสถานศึกษา ศึกษานิเทศก์ และครู
                                </p>
                            </div>

                            <div class="bg-gray-50 p-6 rounded-xl">
                                <h3 class="text-xl font-semibold text-gray-700 mb-4 flex items-center gap-2">
                                    <span>💫</span> รายละเอียดโครงการ:
                                </h3>
                                <ul class="space-y-2 text-gray-600">
                                    <li class="flex items-center gap-2">
                                        <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                                        จัดอบรม 5 ครั้ง
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                                        ค่าลงทะเบียน: 4,000 บาท/ครั้ง
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                                        จำนวนจำกัดเพียง 20 ท่าน/ห้อง
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                                        เปิดรับสมัครเพียงรุ่นเดียวเท่านั้น
                                    </li>
                                </ul>
                            </div>

                            <p class="text-center text-lg font-medium text-blue-600 mt-6">
                                <span class="mr-2">🎯</span>
                                โอกาสพิเศษนี้รอคุณอยู่! สำรองที่นั่งด่วน
                                เพื่อก้าวสู่ความเป็นผู้เชี่ยวชาญในวิชาชีพของท่าน
                            </p>
                        </div>
                    </div>
                </section>
                
                
                <div>
                    <img src="{{ asset('images/page/project-label') }}" alt="Project Label" class="w-full">
                </div>
                <div class="mt-4">
                    <img src="{{ asset('images/pages/timeline-project-label.jpg') }}" alt="Timeline Project Label" class="w-full">
                </div>
                
                <div class="font-noto-thai text-gray-600 mt-6">
                    <!-- Additional news content can go here -->
                </div>
            </section>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white py-8 mt-12 border-t border-gray-200">
        <div class="container mx-auto px-4 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe mx-auto w-6 h-6 text-blue-500 mb-2">
                <circle cx="12" cy="12" r="10"></circle>
                <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                <path d="M2 12h20"></path>
            </svg>
            <p class="font-noto-thai text-gray-600">
                © {{ now()->year }} S.A.A.M.H. All rights reserved.
            </p>
        </div>
    </footer>
@endsection