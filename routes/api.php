<?php

use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\PackageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\File;
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

// API Route to serve JSON data files with CORS protection handled automatically
Route::get('/data/{filename}', function ($filename) {
    $path = public_path('data/' . basename($filename));

    if (!File::exists($path)) {
        abort(404);
    }

    return response()->file($path);
});

// API Route to serve images with wildcard paths
Route::get('/images/{path}', function ($path) {
    // Strip out 'images/' if it was accidentally prefixed twice
    $cleanPath = str_replace('images/', '', $path);
    $fullPath = public_path('images/' . $cleanPath);

    if (!\Illuminate\Support\Facades\File::exists($fullPath)) {
        abort(404);
    }

    return response()->file($fullPath);
})->where('path', '.*');
