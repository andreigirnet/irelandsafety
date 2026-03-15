@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <div class="profile-dashboard">
        <div class="dashboard-header-flex">
            <h2 class="user-name-title">Order History</h2>
            <span class="status-pill">{{ count($orders) }} Transactions</span>
        </div>

        @if(count($orders))
            <div class="luxury-card no-padding overflow-hidden">
                <table class="exclusive-table">
                    <thead>
                    <tr>
                        <th class="hiddenRows">Purchase Date</th>
                        <th>Order Reference</th>
                        <th>Total Amount</th>
                        <th>Quantity</th>
                        <th class="hiddenRows">Status</th>
                        <th class="text-right">Invoice</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td class="hiddenRows">
                                <div class="stat-value" style="font-size: 14px; color: #64748b;">
                                    {{ $order->created_at->format('M d, Y') }}
                                </div>
                            </td>
                            <td>
                                <div class="course-info-cell">
                                    <div class="course-icon">💳</div>
                                    <div class="course-name-text">#{{ $order->id }}</div>
                                </div>
                            </td>
                            <td>
                                <div class="stat-value" style="font-weight: 800; color: #1e293b; font-size: 18px;">
                                    €{{ number_format($order->paid, 2) }}
                                </div>
                            </td>
                            <td>
                                <span class="id-badge">{{ $order->quantity }} {{ Str::plural('Course', $order->quantity) }}</span>
                            </td>
                            <td class="hiddenRows">
                                    <span class="status-indicator {{ $order->status === 'completed' ? 'status-active' : 'status-completed' }}">
                                        {{ $order->status }}
                                    </span>
                            </td>
                            <td class="text-right">
                                <a href="{{route('invoice.download', $order->id)}}" class="cert-link">
                                    <img class="pdf-icon" src="{{asset('images/icons/pdf.png')}}" alt="PDF">
                                    <span class="hiddenRows">Download</span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="pagination-wrapper">
                {{ $orders->links('paginator') }}
            </div>
        @else
            <div class="empty-state luxury-card">
                <div class="empty-icon">🛒</div>
                <h3>No Orders Yet</h3>
                <p>Your transaction history will appear here once you make a purchase.</p>
                <a href="/home" class="glow-button small-width">Start Shopping</a>
            </div>
        @endif
    </div>
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
