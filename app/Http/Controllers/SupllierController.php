<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supllier;
class SupllierController extends Controller
{
    public function index(){
        $supllier = Supllier::all();

        //tampilkan view supplier dan kirim datanya ke view tersebut
        return view('supllier/index',compact(['supllier']));
    }
    public function create(){
        
        return view('supllier/tambah');
    }
    public function store(request $request){
        //dd($request);
        $supllier = Supllier::create([
            'suplier_nama' => $request->suplier_nama,
            'suplier_alamat' => $request->suplier_alamat,
            'suplier_phone'=> $request->suplier_phone,
            'suplier_status'=> $request->suplier_status
        ]);
            echo $supllier->id_suplier;

        return redirect('supllier');
    }
    public function edit($id){
        $supllier = Supllier::find($id);
        return view('supllier/edit',compact(['supllier']));
    }
    public function update($id, request $request){
        $supllier = Supllier::find($id);
        $supllier->update($request->except('_token','Edit'));
        return redirect('supllier');
    }
    public function destroy($id){
        $supllier = Supllier::find($id);
        $supllier->delete();
        return redirect('supllier');
    }
}
