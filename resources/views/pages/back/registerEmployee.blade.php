@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <div class="profile-dashboard centered-onboarding">
        <div class="onboarding-header">
            <h2 class="user-name-title">Register Your Team</h2>
            <p class="stat-label">Follow the steps below to onboard your employees</p>
        </div>

        <div class="horizontal-stepper">
            <div class="h-step active">
                <div class="h-step-icon">1</div>
                <span>Register</span>
            </div>
            <div class="h-step-line"></div>
            <div class="h-step active">
                <div class="h-step-icon">2</div>
                <span>Dashboard</span>
            </div>
            <div class="h-step-line"></div>
            <div class="h-step active">
                <div class="h-step-icon">3</div>
                <span>Share</span>
            </div>
        </div>

        @if (session('registered'))
            <div class="luxury-overlay">
                <div class="luxury-card modal-popup">
                    <div class="success-icon-animate">Checkmark</div>
                    <h3>Registration Complete!</h3>
                    <p>Login details have been dispatched to the employee's email.</p>
                    <a href="{{route('dashboard.employer')}}"><button class="glow-button" id="understoodButton">Continue</button></a>
                </div>
            </div>
        @endif

        <div class="luxury-card jumbo-form-card">
            <form action="{{route('register.employee.store')}}" method="POST" class="premium-form-stack"
                  onsubmit="if(this.submitted) return false; this.submitted = true; var btn = document.getElementById('submitBtn'); btn.disabled = true; btn.innerText = 'Registering...'; btn.style.opacity = '0.6'; btn.style.cursor = 'not-allowed'; btn.style.pointerEvents = 'none';">
                @csrf
                <div class="input-grid-mobile">
                    <div class="input-wrapper">
                        <label>EMPLOYEE FULL NAME</label>
                        <input type="text" name="name" placeholder="e.g. John Doe" required>
                    </div>

                    <div class="input-wrapper">
                        <label>EMAIL ADDRESS</label>
                        <input type="email" name="email" placeholder="john@example.com" required>
                    </div>
                </div>

                <div class="input-wrapper">
                    <label>PHONE NUMBER (OPTIONAL)</label>
                    <input type="text" name="phone" placeholder="+353 00 000 0000">
                </div>

                <button type="submit" id="submitBtn" class="glow-button jumbo-btn">
                    Register Employee
                </button>
            </form>

            @if ($errors->any())
                <div class="error-box">
                    @foreach ($errors->all() as $error)
                        <p><i class="mgc_error_line"></i> {{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
