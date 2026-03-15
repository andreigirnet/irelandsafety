@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <div class="profile-dashboard">
        <div class="onboarding-header" style="text-align: left; margin-bottom: 40px;">
            <h2 class="user-name-title">Consulting & Advisory Services</h2>
            <p class="stat-label">Expert health and safety solutions tailored to your organization</p>
        </div>

        <div class="services-grid">
            @php
                $services = [
                    'Safe-T-Cert Management Systems', 'Workplace Inspections',
                    'Comprehensive Safety Audits', 'Cloud Safety File Setup',
                    'Health & Safety Policies', 'Risk & COSHH Assessments',
                    'Company Safety Statements', 'Health & Safety Plans',
                    'Method Statements', 'Risk Assessments',
                    'Accident Investigation', 'Training Needs Analysis'
                ];
            @endphp

            @foreach($services as $service)
                <div class="luxury-card service-card">
                    <div class="service-icon-box">
                        <i class="ri-checkbox-circle-line"></i>
                    </div>
                    <div class="service-content">
                        <h4>{{ $service }}</h4>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="luxury-card approach-section" style="margin-top: 40px; background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);">
            <div class="approach-header">
                <h2 class="user-name-title" style="font-size: 28px;">Our Approach</h2>
                <div class="accent-line"></div>
            </div>

            <div class="approach-body">
                <p class="approach-text">
                    We provide support to employers who require third-party assistance in achieving their health and safety objectives for their workplace or on a project basis.
                </p>
                <p class="approach-text">
                    Through our <strong>discovery process</strong>, we work together to determine your unique objectives and requirements, establishing key results to align our work with your measurement of success.
                </p>

                <div class="info-callout">
                    <i class="mgc_information_line"></i>
                    <p>Questions about our Advisory service or legislation? Schedule a consultation with our team directly in the chat below.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
