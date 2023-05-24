<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class TestAPIController extends Controller
{
    // indexアクションを定義（indexメソッドの定義と同義)
    // public function index($id)
    // {
    //     $contact = Contact::find($id);
    //     return response()->json([
    //         'code'     => 200,
    //         'contents' => $query->get()
    //     ], 200);
    // }
}
