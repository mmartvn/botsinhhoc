<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::orderBy('section')->orderBy('sort_order')->get();
        return view('admin.images.index', compact('images'));
    }

    public function create()
    {
        return view('admin.images.create');
    }

    public function store(Request $request)
    {
        $isVideo = $request->section === 'video';
        $rules = [
            'title' => 'required|string|max:255',
            'alt_text' => 'nullable|string|max:255',
            'section' => 'required|string|max:100',
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'nullable|boolean',
            'image' => $isVideo
                ? 'required|file|mimes:mp4,webm,ogg,avi,mov|max:102400'
                : 'required|image|mimes:jpeg,png,jpg,webp|max:5120',
        ];

        $data = $request->validate($rules);

        $folder = $isVideo ? 'videos' : 'images';
        $data['image_path'] = $request->file('image')->store($folder, 'public');
        $data['is_active'] = $request->boolean('is_active', true);

        Image::create($data);

        $msg = $isVideo ? 'Thêm video thành công.' : 'Thêm ảnh thành công.';
        return redirect()->route('admin.images.index')->with('success', $msg);
    }

    public function edit(Image $image)
    {
        return view('admin.images.edit', compact('image'));
    }

    public function update(Request $request, Image $image)
    {
        $isVideo = $request->section === 'video' || $image->section === 'video';
        $rules = [
            'title' => 'required|string|max:255',
            'alt_text' => 'nullable|string|max:255',
            'section' => 'required|string|max:100',
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'nullable|boolean',
            'image' => $isVideo
                ? 'nullable|file|mimes:mp4,webm,ogg,avi,mov|max:102400'
                : 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
        ];

        $data = $request->validate($rules);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($image->image_path);
            $folder = $isVideo ? 'videos' : 'images';
            $data['image_path'] = $request->file('image')->store($folder, 'public');
        }

        $data['is_active'] = $request->boolean('is_active', true);

        $image->update($data);

        $msg = $isVideo ? 'Cập nhật video thành công.' : 'Cập nhật ảnh thành công.';
        return redirect()->route('admin.images.index')->with('success', $msg);
    }

    public function destroy(Image $image)
    {
        Storage::disk('public')->delete($image->image_path);
        $image->delete();

        return redirect()->route('admin.images.index')->with('success', 'Xóa ảnh thành công.');
    }
}
