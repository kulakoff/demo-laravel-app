<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller{

    public function submit(ContactRequest $req){
//        $validation = $req->validate([
//            'subject' => 'required|min:5|max:20',
//            'message' => 'required|max:50'
//        ]);
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('home')->with('success','Сообщение добавлено');
    }

    public function allData(){
//        dd(Contact::all());
        $contact = new Contact();
        return view('messages', ['data'=>$contact->all()]);
    }
}
