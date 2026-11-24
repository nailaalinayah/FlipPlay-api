
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MediaController;
use App\Http\Controllers\Api\CollectionController;

Route::apiResource('media', MediaController::class);

Route::post('/users/{userId}/collection', [CollectionController::class, 'attach']);
Route::delete('/users/{userId}/collection/{mediaId}', [CollectionController::class, 'detach']);
