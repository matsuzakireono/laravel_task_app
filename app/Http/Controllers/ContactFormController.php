<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;
class ContactFormController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        // dd($contacts);
        /* resources/views/ContactForm/index.blade.php を呼び出す */
        return view('ContactForm.index', compact('contacts'));
    }
    public function confirm(Request $request)
    {
        // dd($request);
        // dd($request->all());
        /* バリデーションを実施する */
        $this->validate($request, [
            /* name 欄を 必須項目、2文字以上、100文字以内で形式判定する */
            'name' => ['required', 'min:2', 'max:100']
            ]
        );
        return view('ContactForm.confirm', compact('request'));
    }
    public function store(Request $request)
    {
        //本来はバリデーション
        // dd($request);
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->name;
        $contact->gender =  $request->gender;
        $contact->age =  $request->age;
        $contact->message = $request->message;
        $contact->save();
        //保存の後はredirectしないとうまく表示されない
        return redirect(route('contact.index'));
    }
    public function show($id)
    {
        $contact = Contact::find($id);

        return view('ContactForm.show', compact('contact'));
    }
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('ContactForm.edit', compact('contact'));
    }
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->name = $request->name;
        $contact->email = $request->name;
        $contact->gender =  $request->gender;
        $contact->age =  $request->age;
        $contact->message = $request->message;
        $contact->save();
        //フラッシュメッセージ(一回だけ表示されるメッセージ)を入れたりする
        return redirect(route('contact.index'));
    }
    public function delete($id)
    {
        $contact = Contact::find($id);
        //消してもいいですか的な文章をここで出す。
        $contact->delete();
        return redirect(route('contact.index'));

    }
}
