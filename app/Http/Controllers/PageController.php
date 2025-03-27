<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function personalityCommunication()
    {
        return view('pages.personality_communication');
    }

    public function expertTraining()
    {
        return view('pages.expert_training');
    }
}
