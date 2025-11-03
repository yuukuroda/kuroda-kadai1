<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::with('category')->get();
        $categories = Category::all();
        return view('index', compact('contacts', 'categories'));
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel_1', 'tel_2', 'tel_3', 'address', 'building', 'category_id', 'detail']);

        if (!isset($contact['gender'])) {
            $contact['gender'] = null;
        }

        if (!empty($contact['category_id'])) {
            $category = Category::find($contact['category_id']);
            $contact['category_name'] = $category ? $category->name : '不明なカテゴリ';
        }
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        $fullTel = $request->input('tel_1') . '-' .
            $request->input('tel_2') . '-' .
            $request->input('tel_3');
        $contactData = $request->only(['last_name', 'first_name', 'gender', 'email', 'address', 'building', 'category_id', 'detail']);
        $contactData['tel'] = $fullTel;
        Contact::create($contactData);
        return redirect('thanks');
    }
}
