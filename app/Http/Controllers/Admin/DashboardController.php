<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Image;

class DashboardController extends Controller
{
    public function index()
    {
        $totalImages = Image::count();
        $totalContacts = Contact::count();
        $recentContacts = Contact::latest()->take(5)->get();
        return view('admin.dashboard', compact('totalImages', 'totalContacts', 'recentContacts'));
    }
}
