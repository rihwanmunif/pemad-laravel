<?php

namespace App\Http\Controllers;

use App\Models\klien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;




class klienController extends Controller
{
    /**
     * php namespace App\Http\Controllers;
     */
    public function index()
    {
        $data = klien::orderBy('id', 'desc')->paginate(2);
        return view('klien.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('klien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Session::flash('id', $request->id);
        Session::flash('user', $request->user);
        Session::flash('klien', $request->klien);
        Session::flash('tipe_pekerjaan', $request->tipe_pekerjaan);
        Session::flash('pekerjaan', $request->pekerjaan);
        Session::flash('proyek', $request->proyek);
        Session::flash('penawaran_jasa', $request->penawaran_jasa);
        Session::flash('permintaan_jasa', $request->permintaan_jasa);
        Session::flash('tagihan', $request->tagihan);
        Session::flash('pembayaran_pembelian', $request->pembayaran_pembelian);
        Session::flash('pesanan_pembelian', $request->pesanan_pembelian);
        Session::flash('refrensi_perusahaan', $request->refrensi_perusahaan);
        Session::flash('refrensi_bahasa', $request->refrensi_bahasa);




        $request->validate([
            'id' => 'required|numeric|unique:klien,id',
            'user' => 'required',
            'klien' => 'required',
            'tipe_pekerjaan' => 'required',
            'pekerjaan' => 'required',
            'proyek' => 'required',
            'penawaran_jasa' => 'required',
            'permintaan_jasa' => 'required',
            'tagihan' => 'required',
            'pembayaran_pembelian' => 'required',
            'pesanan_pembelian' => 'required',
            'refrensi_perusahaan' => 'required',
            'refrensi_bahasa' => 'required',
        ], [
            'id.required' => 'Id Wajib diisi !!',
            'id.unique' => 'Id sudah terdaftar !!',
            'user.required' => 'user Wajib diisi !!',
            'klien.required' => 'klien Wajib diisi !!',
            'tipe_pekerjaan.required' => 'tipe_pekerjaan Wajib Angka !!',
            'pekerjaan.required' => 'pekerjaan Wajib diisi !!',
            'proyek.required' => 'proyek Wajib diisi !!',
            'penawaran_jasa.required' => 'penawaran_jasa Wajib diisi !!',
            'permintaan_jasa.required' => 'permintaan_jasa Wajib diisi !!',
            'tagihan.required' => 'tagihan Wajib diisi !!',
            'pembayaran_pembelian.required' => 'pembayaran_pembelian Wajib diisi !!',
            'pesanan_pembelian.required' => 'pesanan_pembelian Wajib diisi !!',
            'refrensi_perusahaan.required' => 'refrensi_perusahaan Wajib diisi !!',
            'refrensi_bahasa.required' => 'refrensi_bahasa Wajib diisi !!',

        ]);
        $data = [
            'id' => $request->id,
            'user' => $request->user,
            'klien' => $request->klien,
            'tipe_pekerjaan' => $request->tipe_pekerjaan,
            'pekerjaan' => $request->pekerjaan,
            'proyek' => $request->proyek,
            'penawaran_jasa' => $request->penawaran_jasa,
            'permintaan_jasa' => $request->permintaan_jasa,
            'tagihan' => $request->tagihan,
            'pembayaran_pembelian' => $request->pembayaran_pembelian,
            'pesanan_pembelian' => $request->pesanan_pembelian,
            'refrensi_perusahaan' => $request->refrensi_perusahaan,
            'refrensi_bahasa' => $request->refrensi_bahasa,
        ];
        klien::create($data);
        return redirect()->to('klien')->with('success', 'Berhasil menambahkan data');
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
        $data = klien::where('id', $id)->first();
        return view('klien.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        'user' => 'required',
        'klien' => 'required',
        'tipe_pekerjaan' => 'required',
        'pekerjaan' => 'required',
        'proyek' => 'required',
        'penawaran_jasa' => 'required',
        'permintaan_jasa' => 'required',
        'tagihan' => 'required',
        'pembayaran_pembelian' => 'required',
        'pesanan_pembelian' => 'required',
        'refrensi_perusahaan' => 'required',
        'refrensi_bahasa' => 'required',
        ], [
            'user.required' => 'user Wajib diisi !!',
            'klien.required' => 'klien Wajib diisi !!',
            'tipe_pekerjaan.required' => 'tipe_pekerjaan Wajib Angka !!',
            'pekerjaan.required' => 'pekerjaan Wajib diisi !!',
            'proyek.required' => 'proyek Wajib diisi !!',
            'penawaran_jasa.required' => 'penawaran_jasa Wajib diisi !!',
            'permintaan_jasa.required' => 'permintaan_jasa Wajib diisi !!',
            'tagihan.required' => 'tagihan Wajib diisi !!',
            'pembayaran_pembelian.required' => 'pembayaran_pembelian Wajib diisi !!',
            'pesanan_pembelian.required' => 'pesanan_pembelian Wajib diisi !!',
            'refrensi_perusahaan.required' => 'refrensi_perusahaan Wajib diisi !!',
            'refrensi_bahasa.required' => 'refrensi_bahasa Wajib diisi !!',

        ]);
        $data = [
            'user' => $request->user,
            'klien' => $request->klien,
            'tipe_pekerjaan' => $request->tipe_pekerjaan,
            'pekerjaan' => $request->pekerjaan,
            'proyek' => $request->proyek,
            'penawaran_jasa' => $request->penawaran_jasa,
            'permintaan_jasa' => $request->permintaan_jasa,
            'tagihan' => $request->tagihan,
            'pembayaran_pembelian' => $request->pembayaran_pembelian,
            'pesanan_pembelian' => $request->pesanan_pembelian,
            'refrensi_perusahaan' => $request->refrensi_perusahaan,
            'refrensi_bahasa' => $request->refrensi_bahasa,
        ];
        klien::where('id', $id)->update($data);
        return redirect()->to('klien')->with('success', 'Berhasil edit data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        klien::where('id', $id)->delete();
        return redirect()->to('klien')->with('success', 'Berhasil delete data');
    }
}
