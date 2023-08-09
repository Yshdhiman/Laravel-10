<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/students', [StudentController::class, 'showStudents']);

Route::get('/student/{id}', [StudentController::class, 'singleStudent'])->name('view.student');


// Route::get('/{id?}', function ($id) {
//     return view('viewStudent', ['id' => $id]);
// })->name('view.student');