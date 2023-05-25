<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Book;

class TestAPIController extends Controller
{
    // indexアクションを定義（indexメソッドの定義と同義)
    public function index($id)
    {
        $contact = Contact::find($id);
        return response()->json([
            'code'     => 200,
            'contents' => $contact->name,
        ], 200);
    }
    public function getAllContacts()
    {
        $contacts = Contact::all();
        return response()->json($contacts);
    }
}