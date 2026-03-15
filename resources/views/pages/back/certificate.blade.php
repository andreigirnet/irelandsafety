@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <div class="profile-dashboard">
        <div class="dashboard-header-flex">
            <h2 class="user-name-title">My Certificates</h2>
            <span class="status-pill">{{ count($certificates) }} Achievements</span>
        </div>

        @if(count($certificates))
            <div class="luxury-card no-padding overflow-hidden">
                <table class="exclusive-table">
                    <thead>
                    <tr>
                        <th>Course Achievement</th>
                        <th class="hiddenRows">Certificate ID</th>
                        <th class="hiddenRows">Validity</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($certificates as $certificate)
                        <tr>
                            <td>
                                <div class="course-info-cell">
                                    <div class="course-icon" style="background: #fefce8; color: #ca8a04;">🏆</div>
                                    <div>
                                        <div class="course-name-text">{{$certificate->course_name}}</div>
                                        <div class="id-badge mobile-only" style="margin-top: 5px;">#{{$certificate->unique_id}}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="hiddenRows">
                                <span class="id-badge">#{{$certificate->unique_id}}</span>
                            </td>
                            <td class="hiddenRows">
                                <div class="validity-stack">
                                    <div style="font-size: 13px; color: #1e293b; font-weight: 600;">Issued: {{ \Carbon\Carbon::parse($certificate->valid_from)->format('d M, Y') }}</div>
                                    <div style="font-size: 11px; color: #94a3b8;">Expires: {{ \Carbon\Carbon::parse($certificate->expiration_date)->format('d M, Y') }}</div>
                                </div>
                            </td>
                            <td class="text-right">
                                <a href="{{route('certificate.download', $certificate->id)}}" class="cert-link">
                                    <img class="pdf-icon" src="{{asset('images/icons/pdf.png')}}" alt="PDF">
                                    <span class="hiddenRows">Download PDF</span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="pagination-wrapper">
                {{ $certificates->links('paginator') }}
            </div>
        @else
            <div class="empty-state luxury-card">
                <div class="empty-icon">🎓</div>
                <h3>No Certificates Yet</h3>
                <p>Complete your first course to unlock your official certification.</p>
                <a href="{{route('course.index', 1)}}" class="glow-button small-width" style="max-width: 250px; margin: 20px auto;">View My Courses</a>
            </div>
        @endif
    </div>
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
