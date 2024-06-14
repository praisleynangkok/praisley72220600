<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

Route::get('/payment-form', [PaymentController::class, 'showForm'])->name('payment.form');
Route::post('/calculate-payment', [PaymentController::class, 'calculatePayment'])->name('calculate.payment');