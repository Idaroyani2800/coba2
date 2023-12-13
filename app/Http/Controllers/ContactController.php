<?php

namespace App\Http\Controllers;
// use app\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
// use Illuminate\Http\RedirectResponse;
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function contact() :View{
         return view('contact');

    }
    public function prosesKirim(Request $request){
         $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'message' => 'required',
         ]);

         $contact = [
            'nama' => $request->nama,
            'email' => $request->email,
            'message' => $request->message
         ];

         Mail::to('royaniida483@gmail.com')->send(new ContactMail($contact));

         return back()->with(['sukses' => 'Terima Kasih']);
    }

}
//         //get products
//         $contacts = Contact::latest()->paginate(5);

//         //render view with products
//         return view('contacts.index', compact('contacts'));

//     }
//     public function create(): View
//     {
//         return view('contacts.create');
//     }

//     public function store(Request $request): RedirectResponse
    
//     {

//         //validate form
//         $this->validate($request, [
//             'nama' => 'required',
//             'email' => 'required',
//             'subjek' => 'required',
//             'pesan' => 'required',
//         ]);

//             //create post
//             Contact::create([
//             'nama' => $request->nama,
//             'email' => $request->email,
//             'subjek' => $request->subjek,
//             'pesan' => $request->pesan,
//         ]);
//             //redirect to index
//             return redirect()->route('contact.index')->with(['success' => 'Data
//             Berhasil Disimpan!']);
//     }
// }
