<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PlanController;

Route::any('admin/plans/search', [PlanController::class, 'search'])->name('plans.search');
Route::get('admin/plans/create',[PlanController::class, 'create'])->name('plans.create'); 
Route::delete('admin/plans/{url}', [PlanController::class, 'destroy'])->name('plans.destroy');
Route::get('admin/plans/{url}',[PlanController::class, 'show'])->name('plans.show'); 
Route::post('admin/plans',[PlanController::class, 'store'])->name('plans.store'); 
Route::get('admin/plans', [PlanController::class, 'index'])->name('plans.index');

Route::get('admin', [PlanController::class, 'index'])->name('admin.index');

Route::get('/', function () {
    return view('welcome');
});
