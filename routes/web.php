<?php

    use App\Http\Controllers\Controller;
    use App\Http\Controllers\GetController;


    Route::get('/pessoa/{id}', [GetController::class, 'getPersonagem']);
    Route::get('/pessoas', [GetController::class, 'getPage']);
