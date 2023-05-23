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
        // dd($request);
        // dd($request->all());
        /* バリデーションを実施する */
        $this->validate($request, [
            /* name 欄を 必須項目、2文字以上、100文字以内で形式判定する */
            'name' => ['required', 'min:2', 'max:100']
        ]);

        // if ($request->has('back')) {
        //     /* withInput() で、現在の入力内容をリダイレクトのリクエストに付加する */
        //     return redirect('/ContactForm')->withInput();
        // }

        return view('ContactForm.confirm', compact('request'));
        /* 戻るボタンが押されたとき(リクエストに、back の内容がある)
         * -> 入力内容を持たせた状態で、入力画面にリダイレクトする
         */
    }
}