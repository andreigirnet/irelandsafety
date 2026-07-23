<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index()
    {
        $courses = DB::table('products')
            ->where('isActive', true)
            ->get();

        // Map through courses to build the exact asset URL
        $courses = $courses->map(function ($course) {
            if ($course->image) {
                // If it doesn't already start with http, prepend your domain and folder path
                if (!preg_match('/^http/', $course->image)) {
                    $course->image = asset('images/productAdd/' . $course->image);
                }
            }
            return $course;
        });

        return response()->json([
            'success' => true,
            'data' => $courses
        ]);
    }
}
