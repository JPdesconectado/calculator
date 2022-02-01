<?php

use IMC\Calculator\Http\Controllers\CalculatorController;

Route::get('/imc', [CalculatorController::class, 'create'])->name('imc.create');
Route::post('/imc/store', [CalculatorController::class, 'calculate'])->name('imc.store');
