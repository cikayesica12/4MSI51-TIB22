<?php

namespace App\Http\Controllers;

use App\Models\Listrental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListrentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listrentals = DB::table('listrentals')->get();
        return view('layouts.user.listrental', compact('listrentals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listrentals = DB::table('listrentals')->get();
        return view('layouts.admin.create-listrental', compact('listrentals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nm = $request->imagevehicle;
        $namaFile =time().rand(100,99).".".$nm->getClientOriginalExtension();
        $dtUpload = new Listrental;
        $dtUpload->typerental = $request->typerental;
        $dtUpload->brand = $request->brand;
        $dtUpload->price = $request->price;
        $dtUpload->status = $request->status;
        $dtUpload->imagevehicle = $namaFile;

        $nm->move(public_path().'/uploadimage', $namaFile);
        $dtUpload->save();
        return redirect()->back();
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
        $listrentals = Listrental::findOrFail($id);
        $listrentals->delete();
        return redirect()->back()->with("success"," Berhasil Delete Data Produk ! ");
    }
}
