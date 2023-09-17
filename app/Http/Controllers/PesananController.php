<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::all();
        $title = "Pesanan";
        return view('admin.pesanan.index', compact('pesanan', 'title'));
    }
    public function update(Request $request, string $id){
        $pesanan = Pesanan::find($id);
        $pesanan->status = $request->status;
        $pesanan->save();
        return redirect()->back()->with('success', 'Berhasil mengubah status pesanan');
    }
}
