@extends('admin.layout')

@section('title', 'Chi tiết liên hệ')

@section('content')
<div class="card">
    <table style="max-width: 600px;">
        <tr><th style="width: 150px;">Tên</th><td>{{ $contact->name }}</td></tr>
        <tr><th>Điện thoại</th><td>{{ $contact->phone }}</td></tr>
        <tr><th>Email</th><td>{{ $contact->email ?? '-' }}</td></tr>
        <tr><th>Địa chỉ</th><td>{{ $contact->address ?? '-' }}</td></tr>
        <tr><th>Sản phẩm quan tâm</th><td>{{ $contact->product_interest ?? '-' }}</td></tr>
        <tr><th>Tin nhắn</th><td>{{ $contact->message ?? '-' }}</td></tr>
        <tr><th>Ngày gửi</th><td>{{ $contact->created_at->format('d/m/Y H:i:s') }}</td></tr>
    </table>
    <div style="margin-top: 20px;">
        <a href="{{ route('admin.contacts.index') }}" class="btn" style="background: #eee;">Quay lại</a>
        <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" class="inline-form" onsubmit="return confirm('Xóa liên hệ này?')">
            @csrf @method('DELETE')
            <button class="btn btn-danger">Xóa</button>
        </form>
    </div>
</div>
@endsection
