@extends('admin.layout')

@section('title', 'Quản lý ảnh')

@section('content')
<div style="margin-bottom: 16px;">
    <a href="{{ route('admin.images.create') }}" class="btn btn-primary">+ Thêm ảnh</a>
</div>
<div class="card">
    <table>
        <thead>
            <tr>
                <th>Ảnh</th>
                <th>Tiêu đề</th>
                <th>Section</th>
                <th>Thứ tự</th>
                <th>Kích hoạt</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($images as $image)
                <tr>
                    <td>
                        @if ($image->section === 'video')
                            <video style="width:80px;height:60px;object-fit:cover;border-radius:4px;" muted>
                                <source src="{{ asset('storage/' . $image->image_path) }}">
                            </video>
                        @else
                            <img src="{{ asset('storage/' . $image->image_path) }}" class="thumb" alt="{{ $image->alt_text }}">
                        @endif
                    </td>
                    <td>{{ $image->title }}</td>
                    <td><span class="section-badge">{{ $image->section }}</span></td>
                    <td>{{ $image->sort_order }}</td>
                    <td>{{ $image->is_active ? 'Có' : 'Không' }}</td>
                    <td>
                        <a href="{{ route('admin.images.edit', $image) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('admin.images.destroy', $image) }}" method="POST" class="inline-form" onsubmit="return confirm('Xóa ảnh này?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm">Xóa</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6" style="color: #999; text-align: center; padding: 40px;">Chưa có ảnh nào.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
