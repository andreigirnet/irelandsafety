@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <div class="profile-dashboard">
        <div class="dashboard-header-flex">
            <div>
                <a href="{{route('dashboard.employer')}}" class="back-link">
                    <i class="mgc_arrow_left_line"></i> Back to Team
                </a>
                <h2 class="user-name-title" style="margin-top: 10px;">{{$employee->name}}'s Courses</h2>
            </div>
            <span class="status-pill">{{ count($employeePackages) }} Courses Found</span>
        </div>

        @if(count($employeePackages))
            <div class="luxury-card no-padding overflow-hidden">
                <table class="exclusive-table">
                    <thead>
                    <tr>
                        <th class="hiddenRows">Package ID</th>
                        <th>Course Name</th>
                        <th class="hiddenRows">Status</th>
                        <th class="hiddenRows">Enrolled Date</th>
                        <th class="text-right">Certificate</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($employeePackages as $package)
                        <tr>
                            <td class="hiddenRows">
                                <span class="id-badge">#{{$package->id}}</span>
                            </td>
                            <td>
                                <div class="course-info-cell">
                                    <div class="course-icon" style="background: #eef2ff; color: #4f46e5;">📘</div>
                                    <div class="course-name-text">{{$package->course_name}}</div>
                                </div>
                            </td>
                            <td class="hiddenRows">
                                    <span class="status-indicator {{ $package->status === 'completed' ? 'status-active' : 'status-completed' }}">
                                        {{ ucfirst($package->status) }}
                                    </span>
                            </td>
                            <td class="hiddenRows">
                                <div class="stat-value" style="font-size: 14px; color: #64748b;">
                                    {{ \Carbon\Carbon::parse($package->created_at)->format('d M, Y') }}
                                </div>
                            </td>
                            <td class="text-right">
                                @if($package->certificate_id)
                                    <a href="{{route('certificate.download', $package->certificate_id)}}" class="cert-link">
                                        <img class="pdf-icon" src="{{asset('images/icons/pdf.png')}}" alt="PDF">
                                        <span class="hiddenRows">Download</span>
                                    </a>
                                @else
                                    <span class="id-badge" style="background: transparent; border: 1px dashed #e2e8f0;">In Progress</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="empty-state luxury-card">
                <div class="empty-icon">📂</div>
                <h3>No Courses Assigned</h3>
                <p>{{$employee->name}} hasn't started any training yet.</p>
                <a href="{{route('dashboard.employer')}}" class="glow-button small-width" style="max-width: 250px; margin: 20px auto;">Assign a Course</a>
            </div>
        @endif
    </div>
@endsection
