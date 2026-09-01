@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])
    <div class="profile-dashboard">
        <div class="luxury-card profile-main">
            <div class="avatar-container">
                <div class="avatar-ring">
                    @if(auth()->user()->profilePic)
                        <img src="{{asset('images/profilePic/'. auth()->user()->profilePic)}}" class="profile-img">
                    @else
                        <img src="{{asset('images/avatars/profile.png')}}" class="profile-img">
                    @endif
                    <form action="{{route('store.profileImg')}}" method="POST" enctype="multipart/form-data" class="upload-overlay">
                        @csrf
                        @method('PUT')
                        <label for="img-input" class="icon-btn-float"><i class="mgc_camera_line"></i></label>
                        <input type="file" id="img-input" name="image" onchange="this.form.submit()" hidden>
                    </form>
                </div>
                <h2 class="user-name-title">{{auth()->user()->name}}</h2>
                <span class="status-pill">Active Account</span>
            </div>

            <div class="stats-row">
                <div class="stat-item">
                    <span class="stat-label">Email</span>
                    <span class="text-avg">{{auth()->user()->email}}</span>
                </div>
                <div class="stat-item">
                    <span class="stat-label">Joined</span>
                    <span class="text-avg">{{auth()->user()->created_at->format('d M, Y')}}</span>
                </div>
            </div>
        </div>

        <div class="luxury-card">
            <h3 class="card-header-text">Security Settings</h3>
            <form class="premium-form" action="{{route('password.dashboard.update', auth()->user()->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="field-stack">
                    <div class="input-wrapper">
                        <label>Current Password</label>
                        <input type="password" name="oldPassword" placeholder="••••••••">
                    </div>

                    <div class="input-grid-mobile">
                        <div class="input-wrapper">
                            <label>New Password</label>
                            <input type="password" name="newPassword" placeholder="Min. 8 characters">
                        </div>
                        <div class="input-wrapper">
                            <label>Confirm Password</label>
                            <input type="password" name="confirmNewPassword" placeholder="Repeat password">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-check-label text-secondary ms-1" style="font-size: 12px;">
                        By submitting this form, you acknowledge our
                        <a href="{{ route('front.privacy') }}">Privacy Policy</a>.
                    </label>
                </div>

                <button type="submit" class="glow-button">Update Credentials</button>
            </form>
        </div>
    </div>
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
