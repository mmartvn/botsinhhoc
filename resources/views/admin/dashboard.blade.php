@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="stats">
    <div class="stat-card">
        <div class="num">{{ $totalImages }}</div>
        <div class="label">Tổng số ảnh</div>
    </div>
    <div class="stat-card">
        <div class="num">{{ $totalContacts }}</div>
        <div class="label">Lượt liên hệ</div>
    </div>
</div>

<div class="card">
    <h4 style="margin-bottom: 16px; color: #333;">Liên hệ gần đây</h4>
    <table>
        <thead>
            <tr>
                <th>Tên</th>
                <th>Điện thoại</th>
                <th>Sản phẩm</th>
                <th>Ngày</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($recentContacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->product_interest ?? '-' }}</td>
                    <td>{{ $contact->created_at->format('d/m/Y H:i') }}</td>
                </tr>
            @empty
                <tr><td colspan="4" style="color: #999;">Chưa có liên hệ nào.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
