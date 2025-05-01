<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact; 

class InquiryController extends Controller
{
    public function index()
    {
        return view('inquiry.index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['first_name','last_name','gender','email','tel_area','tel_local','tel_number','address','bilding','inquiry_type','content']);

        $genderJp = '';
        switch ($contact['gender']) {
        case 'male':
            $genderJp = '男性';
            break;
        case 'female':
            $genderJp = '女性';
            break;
        case 'other':
            $genderJp = 'その他';
            break;
        default:
            $genderJp = '未選択'; // デフォルト値
            break;
            }

        $contact['gender_jp'] = $genderJp; 
        
        $inquiryTypeJp = '';
        switch ($contact['inquiry_type']) {
        case 'delivery':
            $inquiryTypeJp = '商品のお届けについて';
            break;
        case 'service':
            $inquiryTypeJp = '商品交換について';
            break;
        case 'trouble':
            $inquiryTypeJp = '商品トラブルについて';
            break;
        case 'shop':
            $inquiryTypeJp = 'ショップへのお問い合わせ';
            break;
        case 'other':
            $inquiryTypeJp = 'その他';
            break;
        default:
            $inquiryTypeJp = '選択されていません';
            break;
             }
        $contact['inquiry_type_jp'] = $inquiryTypeJp;

        return view('inquiry.confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['first_name','last_name','gender','email','tel_area','tel_local','tel_number','address','bilding','inquiry_type','content']);
        Contact::create($contact);
        return view('inquiry.thanks');
    }
    
}