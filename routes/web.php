<?php
use App\Http\Controllers\PresencaController;

Route::get('/presencas/export-txt', [PresencaController::class, 'exportarTxt'])->name('presencas.exportarTxt');


Route::resource('presencas', PresencaController::class);


Route::get('/', [PresencaController::class, 'index']);
