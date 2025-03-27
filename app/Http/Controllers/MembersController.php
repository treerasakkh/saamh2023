<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class MembersController extends Controller
{
    public function index()
    {
        // ข้อมูลจำนวนสมาชิกแต่ละประเภท
        $counters = [
            'normals' => Member::where('type', 'normal')->where('status', 'active')->count(), // สมาชิกสามัญ
            'extras' => Member::where('type', 'extra')->where('status', 'active')->count(),   // สมาชิกวิสามัญ
            'honors' => Member::where('type', 'honor')->where('status', 'active')->count()    // สมาชิกกิตติมศักดิ์
        ];

        // ข้อมูลสมาชิกทั้งหมด
        $members = Member::orderBy('member_id')->get();
        

        return view('members', compact('counters', 'members'));
    }
}