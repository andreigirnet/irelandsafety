@extends('layouts.horizontal', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])
    <div class="dashWrapper">
        <div class="adminHomePageTitle">Blog Content</div>
        <img src="{{asset('images/blogImages/'. $blog->image)}}" alt="" style="width: 100%; margin-top: 50px">
        <div style="font-size: 20px; margin-top: 30px; width: 100%"><span style="font-size: 30px; font-weight: 600">Blog Title: </span>{{$blog->title}}</div>
        <div style="font-size: 20px; margin-top: 30px; width: 100%"><span style="font-size: 30px; font-weight: 600">Blog Descrition: </span>{{$blog->description}}</div>
        <p style="margin-top: 20px">{!! $blog->content !!}</p>
    </div>
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
