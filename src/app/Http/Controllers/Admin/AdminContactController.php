<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Routing\Controller;

class AdminContactController extends Controller
{
    public function index(Request $request)
    {
        $query = Contact::query();

        if ($request->has('keyword')) {
            $keyword = $request->input('keyword');
            $query->where('first_name', 'LIKE', "%{$keyword}%")
                  ->orWhere('last_name', 'LIKE', "%{$keyword}%")
                  ->orWhere('email', 'LIKE', "%{$keyword}%");
        }

        if ($request->has('gender')) {
            $gender = $request->input('gender');
            if ($gender !== '') {
                $query->where('gender', $gender);
            }
        }

        if ($request->has('inquiry_type')) {
            $inquiryType = $request->input('inquiry_type');
            if ($inquiryType !== '') {
                $query->where('inquiry_type', $inquiryType);
            }
        }

        if ($request->has('date')) {
            $date = $request->input('date');
            $query->whereDate('created_at', $date);
        }

        $contacts = $query->paginate(20); // ページネーション

        return view('admin.contacts.index', compact('contacts'));
    }

}
