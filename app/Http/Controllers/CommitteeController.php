<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommitteeController extends Controller
{
    public function index()
    {
        $committees = [
            [
                'position' => 'นายกสมาคม',
                'name' => 'นายธนิต ทองอาจ',
                'school' => 'โรงเรียนมุกดาหาร',
                'image' => 'images/committee/1.png',
            ],
            [
                'position' => 'อุปนายกคนที่ 1',
                'name' => 'นายอัศดา อัญฤาชัย',
                'school' => 'โรงเรียนคำสร้อยพิทยาสรรค์',
                'image' => 'images/committee/2.png',
            ],
            [
                'position' => 'อุปนายกคนที่ 2',
                'name' => 'นายศักดิ์ รุ่งแสง',
                'school' => 'โรงเรียนวิทยาศาสตร์จุฬาภรณฯ มุกดาหาร',
                'image' => 'images/committee/3.png',
            ],
            [
                'position' => 'อุปนายกคนที่ 3',
                'name' => 'นายเนรมิต กฤตาคม',
                'school' => 'โรงเรียนหนองสูงสามัคคีวิทยา',
                'image' => 'images/committee/4.png',
            ],
            [
                'position' => 'เลขานุการ',
                'name' => 'นายธวัชชัย อยู่พุก',
                'school' => 'โรงเรียนคำป่าหลายสรรพวิทย์',
                'image' => 'images/committee/5.png',
            ],
            [
                'position' => 'ผู้ช่วยเลขานุการ',
                'name' => 'นายกิตติชัย ปัญญารมย์',
                'school' => 'โรงเรียนโพธิ์ไทรวิทยา',
                'image' => 'images/committee/6.png',
            ],
            [
                'position' => 'เหรัญญิก',
                'name' => 'นายปิโย ลุสุข',
                'school' => 'โรงเรียนผาเทิบวิทยา',
                'image' => 'images/committee/7.png',
            ],
            [
                'position' => 'ผู้ช่วยเหรัญญิก',
                'name' => 'นางทิพวรรณ สุวรรณไตรย์',
                'school' => 'โรงเรียนกกตูประชาสรรค์ฯ',
                'image' => 'images/committee/8.png',
            ],
            [
                'position' => 'ปฏิคม',
                'name' => 'นางสุภัคชญา นารากิจศิริ',
                'school' => 'โรงเรียนดงเย็นวิทยาคม',
                'image' => 'images/committee/9.png',
            ],
            [
                'position' => 'ผู้ช่วยปฏิคม',
                'name' => 'นายวัชรา สุตาวงศ์',
                'school' => 'โรงเรียนเหล่าประชาอุทิศ',
                'image' => 'images/committee/10.png',
            ],
            [
                'position' => 'นายทะเบียน',
                'name' => 'นายธวัชชัย สิงห์ขัน',
                'school' => 'โรงเรียนแวงใหญ่พิทยาสรรค์',
                'image' => 'images/committee/11.png',
            ],
            [
                'position' => 'ผู้ช่วยนายทะเบียน',
                'name' => 'นายธีระศักดิ์ คนตรง',
                'school' => 'โรงเรียนคำบกวิทยาคาร',
                'image' => 'images/committee/12.png',
            ],
            [
                'position' => 'ประชาสัมพันธ์',
                'name' => 'นายวินิจ พลธะรัตน์',
                'school' => 'โรงเรียนเมืองมุกวิทยาคม',
                'image' => 'images/committee/13.png',
            ],
            [
                'position' => 'ผู้ช่วยประชาสัมพันธ์',
                'name' => 'นายพิภพ นาทองลาย',
                'school' => 'โรงเรียนหนองแวงวิทยาคม',
                'image' => 'images/committee/14.png',
            ],
            [
                'position' => 'สันทนาการ',
                'name' => 'นายปานไทย ภูล้นแก้ว',
                'school' => 'โรงเรียนคำชะอีพิทยาคม',
                'image' => 'images/committee/15.png',
            ],
            [
                'position' => 'ผู้ช่วยสันทนาการ',
                'name' => 'นายจิตติ ช่างแกะ',
                'school' => 'โรงเรียนชัยปัญญาวิทยานุสรณ์',
                'image' => 'images/committee/16.png',
            ],
            [
                'position' => 'วิชาการ',
                'name' => 'นายบุญเลี่ยม บุญศรี',
                'school' => 'โรงเรียนดอนตาลวิทยา',
                'image' => 'images/committee/17.png',
            ],
            [
                'position' => 'ผู้ช่วยวิชาการ',
                'name' => 'นายไกรศรี ภิรมย์',
                'school' => 'โรงเรียนนาวาราชกิจพิทยานุสรณ์',
                'image' => 'images/committee/18.png',
            ],
            [
                'position' => 'สวัสดิการ',
                'name' => 'นายพรชัย ทวีโคตร',
                'school' => 'โรงเรียนนาโสกวิทยาคาร',
                'image' => 'images/committee/19.png',
            ],
            [
                'position' => 'ผู้ช่วยสวัสดิการ',
                'name' => 'นายศิริพร อินทะระ',
                'school' => 'โรงเรียนดงมอนวิทยาคม',
                'image' => 'images/committee/20.png',
            ],
        ];

        // แบ่งกลุ่มคณะกรรมการ
        $executives = array_slice($committees, 0, 4); // 4 ตำแหน่งแรกเป็นคณะผู้บริหาร
        $boardMembers = array_slice($committees, 4); // ที่เหลือเป็นคณะกรรมการ

        return view('committee', compact('executives', 'boardMembers'));
    }
}