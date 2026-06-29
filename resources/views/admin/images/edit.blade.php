@extends('admin.layout')

@section('title', 'Sửa ảnh')

@section('content')
<div class="card">
    <form method="POST" action="{{ route('admin.images.update', $image) }}" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="form-group">
            <label>Tiêu đề</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $image->title) }}" required>
        </div>
        <div class="form-group">
            <label>Alt text</label>
            <input type="text" name="alt_text" class="form-control" value="{{ old('alt_text', $image->alt_text) }}">
        </div>
        <div class="form-group">
            <label>Section</label>
            <select name="section" class="form-control" id="sectionEditSelect" required onchange="toggleFileTypeEdit()">
                @foreach (['banner' => 'Banner', 'product' => 'Sản phẩm', 'gallery' => 'Bộ sưu tập', 'before_after' => 'Trước - Sau', 'video' => 'Video giới thiệu', 'usage' => 'Cách dùng', 'commitment' => 'Cam kết', 'review' => 'Đánh giá'] as $val => $label)
                    <option value="{{ $val }}" {{ $image->section == $val ? 'selected' : '' }}>{{ $label }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Thứ tự</label>
            <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $image->sort_order) }}" min="0">
        </div>
        <div class="form-group">
            <label>
                <input type="checkbox" name="is_active" value="1" {{ $image->is_active ? 'checked' : '' }}> Kích hoạt
            </label>
        </div>
        <div class="form-group">
            <label id="currentFileLabel">{{ $image->section === 'video' ? 'Video hiện tại' : 'Ảnh hiện tại' }}</label>
            <div>
                @if ($image->section === 'video')
                    <video controls style="max-width: 300px; max-height: 200px; border-radius: 6px;">
                        <source src="{{ asset('storage/' . $image->image_path) }}">
                    </video>
                @else
                    <img src="{{ asset('storage/' . $image->image_path) }}" style="max-width: 200px; border-radius: 6px;">
                @endif
            </div>
        </div>
        <div class="form-group">
            <label id="newFileLabel">{{ $image->section === 'video' ? 'Thay video mới' : 'Thay ảnh mới' }} (để trống nếu giữ cũ)</label>
            <input type="file" name="image" class="form-control" id="fileEditInput" accept="{{ $image->section === 'video' ? 'video/*' : 'image/*' }}">
        </div>
        <script>
        function toggleFileTypeEdit() {
            const s = document.getElementById('sectionEditSelect').value;
            const input = document.getElementById('fileEditInput');
            const curLabel = document.getElementById('currentFileLabel');
            const newLabel = document.getElementById('newFileLabel');
            if (s === 'video') {
                input.accept = 'video/*';
                curLabel.textContent = 'Video hiện tại';
                newLabel.textContent = 'Thay video mới (để trống nếu giữ cũ)';
            } else {
                input.accept = 'image/*';
                curLabel.textContent = 'Ảnh hiện tại';
                newLabel.textContent = 'Thay ảnh mới (để trống nếu giữ cũ)';
            }
        }
        </script>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('admin.images.index') }}" class="btn" style="background: #eee;">Hủy</a>
    </form>
</div>
@endsection
