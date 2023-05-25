<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $sort = $request->input('sort');

        if ($sort === 'newest') {
            $furnitures = Furniture::orderBy('created_at', 'desc')->get();
        } elseif ($sort === 'popular') {
            // 人気順でソートする処理を記述する（例えば売上数や評価などに基づいてソート）
            $furnitures = Furniture::orderBy('review', 'desc')->get();
        } else {
            $furnitures = Furniture::all();
        }
        return view('furnitures.index', compact('furnitures'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}