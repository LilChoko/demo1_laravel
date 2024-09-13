<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('e-commerce.contact');
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
    if ($request->isMethod('post')) {
        $request->validate([
            'fullname' => 'required|max:100',
            'email' => 'required|email|max:50',
            'subject' => 'required|max:50',
            'message' => 'required',
        ], [
            'fullname.required' => 'Proporciona nombre completo.',
            'email.max' => 'Email con máximo 50 caracteres.',
            'subject.required' => 'Proporciona el asunto.',
            'message.required' => 'Favor de escribir el mensaje.',
        ]);

        // Guardar el mensaje en la base de datos
        $contact = new Contact();
        $contact->fullname = $request->input('fullname');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();

        // Enviar el correo electrónico con los detalles del contacto
        Mail::to('leonardotorres@example.com')->send(new ContactMessage($contact));

        // Redirigir al usuario con un mensaje de éxito
        return redirect()->route('contact.index')->with('success', 'Tu mensaje ha sido enviado.');
    }
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
