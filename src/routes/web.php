<?php


use Illuminate\Support\Facades\Route;
use Ui\Component\Http\Controllers\InterfaceController;

Route::get("/", [InterfaceController::class, 'index']);

Route::get("/dashboard", [InterfaceController::class, 'dashboard']);
