@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <div class="profile-dashboard"> <div class="dashboard-header-flex">
            <h2 class="user-name-title">My Learning Journey</h2>
            <span class="status-pill">{{ count($packages) }} Courses</span>
        </div>

        @if(count($packages))
            <div class="luxury-card no-padding overflow-hidden">
                <table class="exclusive-table">
                    <thead>
                    <tr>
                        <th>Course Details</th>
                        <th class="hiddenRows">ID</th>
                        <th class="hiddenRows">Status</th>
                        <th>Certificate</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($packages as $package)
                        <tr>
                            <td>
                                <div class="course-info-cell">
                                    <div class="course-icon">📚</div>
                                    <div class="course-name-text">{{$package->course_name}}</div>
                                </div>
                            </td>
                            <td class="hiddenRows id-badge">#{{$package->id}}</td>
                            <td class="hiddenRows">
                                    <span class="status-indicator {{ $package->status === 'purchased' ? 'status-active' : 'status-completed' }}">
                                        {{ ucfirst($package->status) }}
                                    </span>
                            </td>
                            <td>
                                @if($package->certificate_id)
                                    <a href="{{route('certificate.download', $package->certificate_id)}}" class="cert-link">
                                        <img class="pdf-icon" src="{{asset('images/icons/pdf.png')}}" alt="PDF">
                                        <span>Download</span>
                                    </a>
                                @else
                                    <span class="no-cert">Certificate - Not available</span>
                                @endif
                            </td>
                            <td class="text-right">
                                <div class="action-btn-group">
                                    @if($package->status === 'purchased')
                                        <a href="{{route('package.share',$package->id)}}" class="btn-outline-sm">Send</a>
                                        <a href="{{route('course.index',$package->id)}}" class="btn-premium-sm">Start</a>
                                    @else
                                        <a href="{{route('course.index',$package->id)}}" class="btn-view-sm">Review</a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="pagination-wrapper">
                {{ $packages->links('paginator') }}
            </div>
        @else
            <div class="empty-state luxury-card">
                <div class="empty-icon">📂</div>
                <h3>No Courses Found</h3>
                <p>Ready to level up your skills?</p>
                <a href="/home" class="glow-button small-width">Browse Catalog</a>
            </div>
        @endif
    </div>
@endsection
@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
