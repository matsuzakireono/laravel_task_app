<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function index()
    {
        /* resources/views/ContactForm/index.blade.php を呼び出す */
        return view('ContactForm.index');
    }
    public function confirm(Request $request)
    {
        /* Request で送信された内容をデバッグ表示する */
        // dd($request->all());
        /* バリデーションを実施する */
        $this->validate($request, [
            /* name 欄を 必須項目、2文字以上、100文字以内で形式判定する */
            'name' => ['required', 'min:2', 'max:100']
        ]);
        return view('ContactForm.confirm', compact('request'));
    }
}