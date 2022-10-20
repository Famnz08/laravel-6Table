<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksidetail;
use DB;
class TransaksidetailController extends Controller
{
    public function index($id){
        $transaksidetail = DB::table('transaksidetail')
        ->select('transaksidetail.*','barang.barang_nama')
        ->join('barang','barang.id_barang','=','transaksidetail.id_barang')
        ->where('id_transaksi',$id)
        ->get();

        return view('transaksidetail.index',compact(['transaksidetail']));
    }
    
    public function edit($id){
        $transaksidetail = Transaksidetail::find($id);
        $barang = DB::table('barang')
        ->get();
        //return $barang;
        return view('transaksidetail/edit',compact(['barang','transaksidetail']));
    }
    public function update($id, Request $request){
        $transaksidetail = Transaksidetail::find($id);
        $transaksidetail->update($request->except('_token','Edit'));
        return redirect('transaksidetail');
    }
    public function destroy($id){
        $transaksidetail= Transaksidetail::find($id);
        $transaksidetail->delete();
        return redirect('transaksidetail');
    }
}
