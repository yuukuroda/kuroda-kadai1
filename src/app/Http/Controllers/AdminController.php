<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class AdminController extends Controller
{
    public function admin()
    {
        $contacts = Contact::with('category')->paginate(5);

        $categories = Category::all();
        
        return view('admin.index', compact('contacts', 'categories'));

        return view('index', ['contacts' => $contacts]);
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $gender = $request->input('gender');
        $categoryId = $request->input('category_id');
        $date = $request->input('date');

        $query = Contact::with('category');

        if (!empty($keyword)) {
            $query->where(function ($q) use ($keyword) {
                $q->where('last_name', 'LIKE', "%{$keyword}%")
                    ->orWhere('first_name', 'LIKE', "%{$keyword}%")
                    ->orWhere('email', 'LIKE', "%{$keyword}%");
            });
        }

        if (!empty($gender)) {
            $query->where('gender', $gender);
        }

            if (!empty($categoryId)) {
            $query->where('category_id', $categoryId);
        }

            if (!empty($date)) {
            $query->whereDate('created_at', $date);
        }

        $contacts = $query->paginate(10)->appends($request->all());

        $categories = Category::all();

        return view('admin.index', compact('contacts', 'categories'));
    }
}
