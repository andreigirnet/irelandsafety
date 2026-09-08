@extends('layouts.horizontal', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])
    <div class="dashWrapper">
        <div class="videoPractical">
            <video autoplay muted loop>
                <source src="video/practical.mp4" type="video/mp4">
            </video>
        </div>
    </div>
    <script src="//unpkg.com/alpinejs" defer></script>
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
