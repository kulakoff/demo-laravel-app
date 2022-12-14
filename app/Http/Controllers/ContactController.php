<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{

    public function submit(ContactRequest $req)
    {
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

        return redirect()->route('home')->with('success', 'Сообщение добавлено');
    }

    public function allData()
    {
//        dd(Contact::all());
        $contact = new Contact();
        return view('messages', ['data' => $contact->all()]);
    }

    public function showOneMessage($message_id)
    {
        $contact = new Contact();
        return view('one-message', ['data' => $contact->find($message_id)]);
    }

    public function updateMessage($message_id)
    {
        $contact = new Contact();
        return view('update-message', ['data' => $contact->find($message_id)]);
    }

    public function updateMessageSubmit($message_id, ContactRequest $req)
    {
        $contact = Contact::find($message_id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('contact-data-one', $message_id)->with('success', 'Сообщение обновлено');
    }

    public function deleteMessage($message_id)
    {
        Contact::find($message_id)->delete();
        return redirect()->route('contact-data')->with('success', 'Сообщение удалено');
    }

}
