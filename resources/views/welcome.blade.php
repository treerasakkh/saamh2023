@extends('layouts.app')
@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mx-auto mt-10 p-8">
            <div class="w-full">
                <h1 class="text-center text-3xl font-bold text-gray-900 mb-8">
                    ยินดีต้อนรับสู่เว็บไซต์สมาคมผู้บริหารโรงเรียนมัธยมศึกษาจังหวัดมุกดาหาร</h1>
                <section id="link-to-pages" class="mt-6 space-y-6">
                    <a href="{{ url('pages/personality-communication') }}"
                        class="block transform hover:scale-105 transition duration-300">
                        <div class="bg-white rounded-xl shadow-md p-8 hover:shadow-xl border border-gray-100 hover:border-blue-200">
                            <h2 class="text-xl font-semibold text-gray-800 hover:text-blue-600 transition duration-300">
                                การอบรมเชิงปฏิบัติการการพัฒนาบุคลิกภาพและทักษะการพูดสื่อสารสาธารณะ
                            </h2>
                        </div>
                    </a>
                    <a href="{{ url('pages/expert-training') }}"
                        class="block transform hover:scale-105 transition duration-300">
                        <div class="bg-white rounded-xl shadow-md p-8 hover:shadow-xl border border-gray-100 hover:border-blue-200">
                            <h2 class="text-xl font-semibold text-gray-800 hover:text-blue-600 transition duration-300">
                                โครงการอบรมเชิงปฏิบัติการ: "การพัฒนาวิชาชีพสู่วิทยฐานะเชี่ยวชาญและเชี่ยวชาญพิเศษ"
                            </h2>
                        </div>
                    </a>
                </section>            </div>
        </div>
    </div>
@endsection
