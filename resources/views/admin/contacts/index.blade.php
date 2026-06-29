@extends('admin.layout')

@section('title', 'Danh sách liên hệ')

@section('content')
<div class="card">
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Điện thoại</th>
                <th>Email</th>
                <th>Sản phẩm</th>
                <th>Ngày</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($contacts as $index => $contact)
                <tr>
                    <td>{{ $contacts->firstItem() + $index }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->email ?? '-' }}</td>
                    <td>{{ $contact->product_interest ?? '-' }}</td>
                    <td>{{ $contact->created_at->format('d/m/Y H:i') }}</td>
                    <td>
                        <a href="{{ route('admin.contacts.show', $contact) }}" class="btn btn-primary btn-sm">Xem</a>
                        <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" class="inline-form" onsubmit="return confirm('Xóa liên hệ này?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm">Xóa</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="7" style="color: #999; text-align: center; padding: 40px;">Chưa có liên hệ nào.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
<div class="pagination">
    {{ $contacts->links() }}
</div>
@endsection
