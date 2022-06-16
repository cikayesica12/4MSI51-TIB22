<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;
// use App\Exports\contactusexport; 
use Illuminate\Support\Facades\DB;

class ContactusadminController extends Controller
{
    public function index(Request $request)
    {
        $contact_us = Contactus::all();
        $data = [
            'contact_us'    => $contact_us->last()->paginate(5), 
            'request'       => $request,
        ];
        return view('layouts.admin.contactusadmin', $data);
    }

    public function delete_form(Request $request, $id)
    {
        $contact_us = Contactus::findOrFail($id);
        $contact_us->delete();
        return redirect()->back()->with("success"," Berhasil Delete Data Produk ! ");
    }
}
