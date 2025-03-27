@extends('layouts.app')

@section('title', 'การพัฒนาบุคลิกภาพและทักษะการสื่อสาร')

@php
        $participants = [
            ["No"=>1,"Name"=>"นางสาวจิตนิรันดร์ วงละคร","Position"=>"รองผู้อำนวยการ","School"=>"แวงใหญ่พิทยาสรรค์"],
            ["No"=>2,"Name"=>"นายบุรโชติ จันเต็ม","Position"=>"รองผู้อำนวยการ","School"=>"คำป่าหลายสรรพวิทย์"],
            ["No"=>3,"Name"=>"นางจีรพร ไชยบัน","Position"=>"ครู","School"=>"คำป่าหลายสรรพวิทย์"],
            ["No"=>4,"Name"=>"นางสาวสุจิตรา การพิศมัย","Position"=>"ครู","School"=>"คำป่าหลายสรรพวิทย์"],
            ["No"=>5,"Name"=>"นายธนภัทร หลักแก้ว","Position"=>"ครูผู้ช่วย","School"=>"นาวาราชกิจพิทยานุสรณ์"],
            ["No"=>6,"Name"=>"นางสาวญานิศา ทนาปฏิ","Position"=>"ครูผู้ช่วย","School"=>"นาวาราชกิจพิทยานุสรณ์"],
            ["No"=>7,"Name"=>"นายอภินันต์ แก้วพิกุล","Position"=>"ครูผู้ช่วย","School"=>"โพธิ์ไทรวิทยา"],
            ["No"=>8,"Name"=>"นางสาวนริศรา วารินทร์","Position"=>"ครูผู้ช่วย","School"=>"ดงเย็นวิทยาคม"],
            ["No"=>9,"Name"=>"นายทวีทรัพย์ ทวีชาติ","Position"=>"ครูผู้ช่วย","School"=>"คำชะอีพิทยาคม"],
            ["No"=>10,"Name"=>"นางพรวลี ตรีประภากร","Position"=>"รองผู้อำนวยการ","School"=>"นาวาราชกิจพิทยานุสรณ์"],
            ["No"=>11,"Name"=>"นางหนึ่งฤทัย สุวรรณไตรย์","Position"=>"รองผู้อำนวยการ","School"=>"ดอนตาลวิทยา"],
            ["No"=>12,"Name"=>"นายณัฐพงษ์ จันปุ่ม","Position"=>"รองผู้อำนวยการ","School"=>"ดอนตาลวิทยา"],
            ["No"=>13,"Name"=>"นายพงศกร เฮงสวัสดิ์","Position"=>"ครูผู้ช่วย","School"=>"คำสร้อยพิทยาสรรค์"],
            ["No"=>14,"Name"=>"นางสาวสุทัศศา บรรจง","Position"=>"ครู","School"=>"คำสร้อยพิทยาสรรค์"],
            ["No"=>15,"Name"=>"นางสาวจินตนา ดีดวงพันธ์","Position"=>"รองผู้อำนวยการ","School"=>"ดงเย็นวิทยาคม"],
            ["No"=>16,"Name"=>"นายสิทธิธรรม ผิวทอง","Position"=>"รองผู้อำนวยการ","School"=>"ดอนตาลวิทยา"],
            ["No"=>17,"Name"=>"นางสุภัคชญา นารากิจศิริ","Position"=>"ผู้อำนวยการ","School"=>"ดงเย็นวิทยาคม"],
            ["No"=>18,"Name"=>"นายอนุวัฒน์ ชาวตระการ","Position"=>"ครูผู้ช่วย","School"=>"ดงเย็นวิทยาคม"],
            ["No"=>19,"Name"=>"นางสาวสุพัตรา พรหมเสนา","Position"=>"ครู","School"=>"ดอนตาลวิทยา"],
            ["No"=>20,"Name"=>"นางปานใจ สุขเสมอ","Position"=>"รองผู้อำนวยการ","School"=>"ร่มเกล้าพิทยาสรรค์"],
            ["No"=>21,"Name"=>"นางสาวกมลชนก ทองสรรค์","Position"=>"ครูผู้ช่วย","School"=>"ร่มเกล้าพิทยาสรรค์"],
            ["No"=>22,"Name"=>"นายวิชาญชัย เลิศสงคราม","Position"=>"รองผู้อำนวยการ","School"=>"อุดมวิทย์"],
            ["No"=>23,"Name"=>"นางสาวมุกดาวัลย์ ทวีรัตน์","Position"=>"ครูผู้ช่วย","School"=>"อุดมวิทย์"],
            ["No"=>24,"Name"=>"นายวิชยุต จงธนะเจริญ","Position"=>"พนักงานราชการ","School"=>"บ้านปากช่อง"],
            ["No"=>25,"Name"=>"นางสาวกรรณภิรมย์ กุลชาติ","Position"=>"ครูผู้ช่วย","School"=>"ดอนตาลวิทยา"],
            ["No"=>26,"Name"=>"นางปริญญา สลางสิงห์","Position"=>"ครู","School"=>"โพธิ์ไทรวิทยา"],
            ["No"=>27,"Name"=>"นางดวงใจ นะดาบุตร","Position"=>"ครู","School"=>"อุดมวิทย์"],
            ["No"=>28,"Name"=>"นายธนิต ทองอาจ","Position"=>"ผู้อำนวยการ","School"=>"มุกดาหาร"],
            ["No"=>29,"Name"=>"นางรพีพรรณ สิริจันทพันธุ์","Position"=>"ครู","School"=>"มุกดาหาร"],
            ["No"=>30,"Name"=>"นายวิชาญ วาปี","Position"=>"รองผู้อำนวยการ","School"=>"มุกดาหาร"],
            ["No"=>31,"Name"=>"นางสาวศุภานัน กลางประพันธ์","Position"=>"รองผู้อำนวยการ","School"=>"มุกดาหาร"],
            ["No"=>32,"Name"=>"นางสาวกชพร ภูศรีสม","Position"=>"ครู","School"=>"มุกดาหาร"],
            ["No"=>33,"Name"=>"นางสาวทิพย์สุคนธ์ วาณิชย์รุ่งเรือง","Position"=>"ครู","School"=>"มุกดาหาร"],
            ["No"=>34,"Name"=>"นายชวิศ สว่างไพศาลกุล","Position"=>"ครู","School"=>"มุกดาหาร"],
            ["No"=>35,"Name"=>"นายทศวิทย์ เส้นเศษ","Position"=>"ครู","School"=>"มุกดาหาร"],
            ["No"=>36,"Name"=>"นางสาวธัญวรัตม์ ไร่สงวน","Position"=>"ครู","School"=>"มุกดาหาร"],
            ["No"=>37,"Name"=>"นายพีรวิชญ์ สุดเสน่ห์","Position"=>"ครู","School"=>"มุกดาหาร"],
            ["No"=>38,"Name"=>"นางสาวอารีรัตน์ ทองเภา","Position"=>"ครู","School"=>"มุกดาหาร"],
            ["No"=>39,"Name"=>"นายพีฬภัทรภ์ เค้าหอม","Position"=>"ครู","School"=>"มุกดาหาร"],
            ["No"=>40,"Name"=>"นางสาวมัลลิกา ประสานชีพ","Position"=>"ครู","School"=>"มุกดาหาร"],
            ["No"=>41,"Name"=>"นางสาวเสาวภา จันทพันธ์","Position"=>"ครู","School"=>"มุกดาหาร"],
            ["No"=>42,"Name"=>"นายศุภณัฐร์ สุทธิประภา","Position"=>"ครู","School"=>"มุกดาหาร"],
            ["No"=>43,"Name"=>"นางสาวณัฐสินี ชาววัง","Position"=>"ครู","School"=>"มุกดาหาร"],
            ["No"=>44,"Name"=>"นางบุรินทร์พร อินทมานนท์","Position"=>"ครู","School"=>"มุกดาหาร"],
            ["No"=>45,"Name"=>"นางสาวณัฐวดี โชติบุญ","Position"=>"ครู","School"=>"มุกดาหาร"],
            ["No"=>46,"Name"=>"นางสาวอาริด สระบุรี","Position"=>"ครู","School"=>"มุกดาหาร"],
            ["No"=>47,"Name"=>"นายวุฒิมา อุ่นเมืองนาย","Position"=>"ครู","School"=>"มุกดาหาร"],
            ["No"=>48,"Name"=>"นางสาวสนธยา คนหาญ","Position"=>"ครู","School"=>"มุกดาหาร"],
            ["No"=>49,"Name"=>"นางสาวจรัญญา ไชยพันธ์","Position"=>"ครู","School"=>"เมืองมุกวิทยาคม"],
            ["No"=>50,"Name"=>"นางสาวพรรณธิตา พวงนาค","Position"=>"ครูผู้ช่วย","School"=>"เมืองมุกวิทยาคม"],
            ["No"=>51,"Name"=>"นางสาวน้ำทิพย์ วโรดมดำรง","Position"=>"รองผู้อำนวยการ","School"=>"ผาเทิบวิทยา"],
            ["No"=>52,"Name"=>"นางวราภา สามาอาพัฒน์","Position"=>"ศึกษานิเทศก์","School"=>"สพม.มุกดาหาร"],
            ["No"=>53,"Name"=>"นางสาวเสาวคนธ์ ฉัตรวิไล","Position"=>"รองผู้อำนวยการ","School"=>"วิทยาศาสตร์จุฬาภรณราชวิทยาลัย มุกดาหาร"],
            ["No"=>54,"Name"=>"นายกิตติกร พันธ์สุวรรณ","Position"=>"รองผู้อำนวยการ","School"=>"วิทยาศาสตร์จุฬาภรณราชวิทยาลัย มุกดาหาร"],
            ["No"=>55,"Name"=>"นางมีนารัตน์ วงศ์เสน่ห์","Position"=>"ครู","School"=>"วิทยาศาสตร์จุฬาภรณราชวิทยาลัย มุกดาหาร"],
            ["No"=>56,"Name"=>"นางสาวพรพิทักษ์ คนหาญ","Position"=>"ครู","School"=>"วิทยาศาสตร์จุฬาภรณราชวิทยาลัย มุกดาหาร"],
            ["No"=>57,"Name"=>"นางสาวดวงดาว มงคลสวัสดิ์","Position"=>"ครู","School"=>"วิทยาศาสตร์จุฬาภรณราชวิทยาลัย มุกดาหาร"],
            ["No"=>58,"Name"=>"นางเบญจรัตน์ สุคำภา","Position"=>"ครู","School"=>"วิทยาศาสตร์จุฬาภรณราชวิทยาลัย มุกดาหาร"],
            ["No"=>59,"Name"=>"นายบารเมษฐ์ สิมพร","Position"=>"ครู","School"=>"วิทยาศาสตร์จุฬาภรณราชวิทยาลัย มุกดาหาร"],
            ["No"=>60,"Name"=>"นางสาวกัลยา วิเศษศรี","Position"=>"ครู","School"=>"วิทยาศาสตร์จุฬาภรณราชวิทยาลัย มุกดาหาร"],
            ["No"=>61,"Name"=>"นางอารีรัตน์ มัฐผา","Position"=>"ครู","School"=>"วิทยาศาสตร์จุฬาภรณราชวิทยาลัย มุกดาหาร"],
            ["No"=>62,"Name"=>"นายกิตติชัย ปัญญารมย์","Position"=>"ผู้อำนวยการ","School"=>"โพธิ์ไทรวิทยา"],
            ["No"=>63,"Name"=>"ว่าที่ร้อยตรีหญิงสุนิสา คนหาญ","Position"=>"ครู","School"=>"โพธิ์ไทรวิทยา"],
            ["No"=>64,"Name"=>"นางสาวเบญจพร พิกุลศรี","Position"=>"ครู","School"=>"โพธิ์ไทรวิทยา"],
            ["No"=>65,"Name"=>"นางสาวนิดติยา พึ่งป่า","Position"=>"ครู","School"=>"หนองสูงสามัคคีวิทยา"],
            ["No"=>66,"Name"=>"นางสาวณัฐกานต์ ชัยวงค์","Position"=>"ครู","School"=>"หนองสูงสามัคคีวิทยา"],
            ["No"=>67,"Name"=>"นางสาวเยาวเรศ ศรีเมือง","Position"=>"ครู","School"=>"หนองสูงสามัคคีวิทยา"],
            ["No"=>68,"Name"=>"นางสาวอุลัยพร สิงห์ขัน","Position"=>"รองผู้อำนวยการ","School"=>"คำสร้อยพิทยาสรรค์"],
            ["No"=>69,"Name"=>"นายอนิรุทธ์ วงโยธา","Position"=>"รองผู้อำนวยการ","School"=>"ดงมอนวิทยาคม"]
        ];

@endphp

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- หัวข้อหลัก -->
        <div class="text-center mb-12">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">
                สมาคมผู้บริหารโรงเรียนมัธยมศึกษาจังหวัดมุกดาหาร
            </h1>
            <h2 class="text-xl text-gray-600">
                การอบรมเชิงปฏิบัติการการพัฒนาบุคลิกภาพและทักษะการพูดสื่อสารสาธารณะ
            </h2>
        </div>

        <!-- ลิงก์ดาวน์โหลด -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <a href="https://drive.google.com/drive/folders/1rc9AiJUyNnigfh4_XsMoix-3ny5D6umQ?usp=sharing" 
                   class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-200 text-center">
                    ดาวน์โหลดเกียรติบัตร
                </a>
                
                <a href="https://drive.google.com/drive/folders/1jpsHLMtXz-NN9rG25lPgy8eNSBef4v10?usp=sharing" 
                   class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition duration-200 text-center">
                    ดาวน์โหลดใบเสร็จ
                </a>
            </div>
        </div>

        <!-- ตารางข้อมูล -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ลำดับ
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ชื่อ-สกุล
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ตำแหน่ง
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                โรงเรียน
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($participants as $index => $participant)
                        <tr class="{{ $index % 2 === 0 ? 'bg-white' : 'bg-gray-50' }} hover:bg-gray-100">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                {{ $index + 1 }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $participant['Name'] }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $participant['Position'] }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $participant['School'] }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection