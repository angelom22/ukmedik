<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMessageReceived;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ukmedik_web.contacto');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $message = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phone' => 'required|numeric',
            'message' => 'required|min:5'
        ]);

        // cambiar el correo por el de Ukmedik
        Mail::to('angelo.jm2202@gmail.com')->send(new ContactMessageReceived($message));

        return redirect()->route('contacto.index')->with('flash', 'Menesaje enviado, pronto le estaremos dando una respuesta via correo electrónico');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
