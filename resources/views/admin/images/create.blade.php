@extends('admin.layout')

@section('title', 'Thêm ảnh / Video')

@section('content')
<div class="card">
    <form method="POST" action="{{ route('admin.images.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Tiêu đề</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
        </div>
        <div class="form-group">
            <label>Alt text</label>
            <input type="text" name="alt_text" class="form-control" value="{{ old('alt_text') }}">
        </div>
        <div class="form-group">
            <label>Section</label>
            <select name="section" class="form-control" id="sectionSelect" required onchange="toggleFileType()">
                <option value="banner">Banner</option>
                <option value="product">Sản phẩm</option>
                <option value="gallery">Bộ sưu tập</option>
                <option value="before_after">Trước - Sau</option>
                <option value="video">Video giới thiệu</option>
                <option value="usage">Cách dùng</option>
                <option value="commitment">Cam kết</option>
                <option value="review">Đánh giá</option>
            </select>
        </div>
        <div class="form-group">
            <label>Thứ tự</label>
            <input type="number" name="sort_order" class="form-control" value="0" min="0">
        </div>
        <div class="form-group">
            <label>
                <input type="checkbox" name="is_active" value="1" checked> Kích hoạt
            </label>
        </div>
        <div class="form-group">
            <label id="fileLabel">Chọn ảnh</label>
            <input type="file" name="image" class="form-control" id="fileInput" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
        <a href="{{ route('admin.images.index') }}" class="btn" style="background: #eee;">Hủy</a>
    </form>
</div>
<script>
function toggleFileType() {
    const s = document.getElementById('sectionSelect').value;
    const input = document.getElementById('fileInput');
    const label = document.getElementById('fileLabel');
    if (s === 'video') {
        input.accept = 'video/*';
        input.required = true;
        label.textContent = 'Chọn video (mp4, webm, ogg)';
    } else {
        input.accept = 'image/*';
        input.required = true;
        label.textContent = 'Chọn ảnh';
    }
}
</script>
@endsection
