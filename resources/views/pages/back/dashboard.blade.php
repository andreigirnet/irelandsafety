@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <div class="profile-dashboard">
        <div class="dashboard-header-flex">
            <h2 class="user-name-title">Team Management</h2>
            <div class="header-actions">
                <span class="status-pill">{{ count($employees) }} Members</span>
            </div>
        </div>

        @if($employees && count($employees) > 0)
            <div class="luxury-card no-padding overflow-hidden">
                <table class="exclusive-table">
                    <thead>
                    <tr>
                        <th class="hiddenRows">Joined</th>
                        <th>Employee Details</th>
                        <th class="hiddenRows">Assignment</th>
                        <th>Certificate</th>
                        <th class="text-right">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($employees as $employee)
                        <tr>
                            <td class="hiddenRows">
                                <div class="stat-value" style="font-size: 13px; color: #94a3b8;">
                                    {{ \Carbon\Carbon::parse($employee->created_at)->format('d M, Y') }}
                                </div>
                            </td>

                            <td>
                                <div class="course-info-cell">
                                    <div class="course-icon" style="background: #f1f5f9; color: #6366f1;">👤</div>
                                    <div>
                                        <div class="course-name-text">{{$employee->name}}</div>
                                        <div style="font-size: 13px; color: #64748b;">{{$employee->email}}</div>
                                    </div>
                                </div>
                            </td>

                            <td class="hiddenRows">
                                @if($employee->assigned)
                                    <span class="status-indicator status-active">Course Active</span>
                                @else
                                    <span class="status-indicator" style="background: #f1f5f9; color: #94a3b8;">No Course</span>
                                @endif
                            </td>

                            <td>
                                @if($employee->certificate_id)
                                    <a href="{{route('certificate.download', $employee->certificate_id)}}" class="cert-link">
                                        <img class="pdf-icon" src="{{asset('images/icons/pdf.png')}}" alt="PDF">
                                        <span class="hiddenRows">View PDF</span>
                                    </a>
                                @else
                                    <span class="id-badge" style="background: transparent; border: 1px dashed #e2e8f0;">Pending</span>
                                @endif
                            </td>

                            <td class="text-right">
                                <a href="{{route('employer.employee', $employee->id)}}" class="btn-view-sm" style="display: inline-flex; align-items: center; gap: 5px;">
                                    <span>Details</span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="empty-state luxury-card">
                <div class="empty-icon">👥</div>
                <h3>No Employees Registered</h3>
                <p>Register your employees first to begin sharing and tracking courses.</p>
                <a href="{{route('register.employee')}}" class="glow-button small-width" style="max-width: 280px; margin: 20px auto;">Register Employees Now</a>
            </div>
        @endif
    </div>
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
