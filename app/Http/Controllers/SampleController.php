<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller
{
    public function index()
    {
        //★マーク基本的にはこれを使う
        $eloquent = Contact::all();
        $queryBuilderGet = DB::table('contacts')->get();
        $queryBuilderFirst = DB::table('contacts')->first();
        $collection = collect(['aaa', 'bbb']);

        dd(
            $eloquent,
            $queryBuilderGet,
            $queryBuilderFirst,
            $collection
        );
    }
}
