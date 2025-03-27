<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommitteeController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/objective', function () {
    return view('objective');
});

Route::get('/committee', [CommitteeController::class, 'index']);

Route::get('/members', [MembersController::class, 'index']);

Route::get('/pages/personality-communication', [PageController::class, 'personalityCommunication']);
Route::get('/pages/expert-training', [PageController::class, 'expertTraining']);