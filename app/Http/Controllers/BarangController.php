<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use DB;
class BarangController extends Controller
{
    public function index(){
        $barang= DB::table('barang')
        ->select('barang.*','jenis.jenis_nama','supllier.suplier_nama')
        ->join('jenis','barang.id_jenis','=','jenis.id_jenis')
        ->join('supllier','barang.id_suplier','=','supllier.id_suplier')
        ->get();
        //tampilkan view supplier dan kirim datanya ke view tersebut
        return view('barang/index',compact('barang'));
    }
    public function create(){
        $supllier = DB::table('supllier')
        ->get();
        $jenis = DB::table('jenis')
        ->get();
        return view('barang/tambah',compact(['supllier','jenis']));
    }
    public function store(request $request){
        //dd($request);
        $barang=Barang::create([
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'id_jenis'=> $request->id_jenis,
            'id_suplier'=> $request->id_suplier,
            'harga_jual'=> $request->harga_jual,
            'barang_status'=> $request->barang_status
        ]);
            echo $barang->id_barang;

        return redirect('barang');
    }
    public function edit($id){
        $barang = Barang::find($id);
        $jenis = DB::table('jenis')
        ->get();
        $supllier = DB::table('supllier')
        ->get();
        //return $barang;
        return view('barang/edit',compact(['barang','jenis','supllier']));
    }
    public function update($id, Request $request){
        $barang = Barang::find($id);
        $barang->update($request->except('_token','Edit'));
        return redirect('barang');
    }
    public function destroy($id){
        $barang= Barang::find($id);
        $barang->delete();
        return redirect('barang');
    }
}
