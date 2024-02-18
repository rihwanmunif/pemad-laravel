@extends('layout.template')
<!-- START FORM -->
@section('konten')

<form action='{{url('klien')}}' method='post'>
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{ url ('klien')}}' class="btn btn-secondary">kembali</a>
<div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='id' value="{{Session::get
                ('id')}}" id="id">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="user" class="col-sm-2 col-form-label">User</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='user' value="{{Session::get
                    ('user')}}" id="user">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="klien" class="col-sm-2 col-form-label">Klien</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='klien' value="{{Session::get
                    ('klien')}}" id="klien">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tipe_pekerjaan" class="col-sm-2 col-form-label">Tipe Pekerjaan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='tipe_pekerjaan' value="{{Session::get
                    ('tipe_pekerjaan')}}" id="tipe_pekerjaan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='pekerjaan' value="{{Session::get
                    ('pekerjaan')}}" id="pekerjaan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="proyek" class="col-sm-2 col-form-label">Proyek</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='proyek' value="{{Session::get
                    ('proyek')}}" id="proyek">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="penawaran_jasa" class="col-sm-2 col-form-label">Penawaran Jasa</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='penawaran_jasa' value="{{Session::get
                    ('penawaran_jasa')}}" id="penawaran_jasa">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="permintaan_jasa" class="col-sm-2 col-form-label">Permintaan Jasa</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='permintaan_jasa' value="{{Session::get
                    ('permintaan_jasa')}}" id="permintaan_jasa">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tagihan" class="col-sm-2 col-form-label">Tagihan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='tagihan' value="{{Session::get
                    ('tagihan')}}" id="tagihan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="pembayaran_pembelian" class="col-sm-2 col-form-label">Pembayaran Pembelian</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='pembayaran_pembelian' value="{{Session::get
                    ('pembayaran_pembelian')}}" id="pembayaran_pembelian">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="pesanan_pembelian" class="col-sm-2 col-form-label">Pesanan Pembelian</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='pesanan_pembelian' value="{{Session::get
                    ('pesanan_pembelian')}}" id="pesanan_pembelian">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="refrensi_perusahaan" class="col-sm-2 col-form-label">Refrensi Perusahaan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='refrensi_perusahaan' value="{{Session::get
                    ('refrensi_perusahaan')}}" id="refrensi_perusahaan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="refrensi_bahasa" class="col-sm-2 col-form-label">Refrensi Bahasa</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='refrensi_bahasa' value="{{Session::get
                    ('refrensi_bahasa')}}" id="refrensi_bahasa">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>
<!-- AKHIR FORM -->
@endsection