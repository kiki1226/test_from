<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function confirm(LoginRequest $request)
    {           
        $contact = $request->only(['name','email','password']);
        Contact::create($contact);
        return view('login.login', compact('contact'));
    }
}
