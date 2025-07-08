<?php

use Illuminate\Support\Facades\Route;
use Modules\Validation\Http\Controllers\ValidationController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('validations', ValidationController::class)->names('validation');
});
