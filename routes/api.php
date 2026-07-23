<?php

use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\PackageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/courses', [CourseController::class, 'index']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/mobile-packages', [PackageController::class, 'getApiPackages']);

Route::middleware('auth:sanctum')->get('/certificates', [CertificateController::class, 'getApiCertificates']);

Route::middleware('auth:sanctum')->get('/certificates/{id}/download', [CertificateController::class, 'getApiCertificateDownload']);
