<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contactus;

class ContactusController extends Controller
{
        public function dashboard()
    {
        return view('dashboard');
    }

    public function create_form(Request $request)
    {
        $validator = \Validator::make($request->all(),[
            "nama_lengkap"   => "required",
            "email"     => "required",
            "phone"     => "required",
            "message"    => "required",
        ]);

        if($validator->passes()){

            Contactus::insert([
                'nama_lengkap'   => $request->get("nama_lengkap"),
                'email'   => $request->get("email"),
                'phone'     => $request->get("phone"),
                'message'    => $request->get("message"),
            ]);
            return redirect()->back()->with("success"," Berhasil Insert Data ! ");
        }
        else{
            return redirect()->back()->with("failed"," Gagal Insert Data ! ");
        }
    }

}
