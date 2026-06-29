<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Image;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $images = Image::where('is_active', true)->orderBy('sort_order')->get()->groupBy('section');
        return view('landing', compact('images'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string|max:500',
            'province' => 'nullable|string|max:100',
            'district' => 'nullable|string|max:100',
            'ward' => 'nullable|string|max:100',
            'product_interest' => 'nullable|string|max:255',
            'message' => 'nullable|string|max:2000',
        ]);

        Contact::create($data);

        return back()->with('success', 'Đăng ký thành công! Chúng tôi sẽ liên hệ bạn sớm nhất.');
    }
}
