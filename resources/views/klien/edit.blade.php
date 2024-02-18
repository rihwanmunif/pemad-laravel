@extends('layout.template')
<!-- START FORM -->
@section('konten')

<form action='{{url('klien/'.$data->id)}}' method='post'>
    @csrf
    @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href=""></a>
        <a href="{{url ('klien')}}" class="btn btn-secondary"> kembali </a>
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10"> 
                {{$data->id}}
               </div>
        </div>
        <div class="mb-3 row">
            <label for="user" class="col-sm-2 col-form-label">user</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='user' value="{{$data->user}}" id="user">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="klien" class="col-sm-2 col-form-label">klien</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='klien' value="{{$data->klien}}" id="klien">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tipe_pekerjaan" class="col-sm-2 col-form-label">tipe_pekerjaan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='tipe_pekerjaan' value="{{$data->tipe_pekerjaan}}" id="tipe_pekerjaan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="pekerjaan" class="col-sm-2 col-form-label">pekerjaan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='pekerjaan' value="{{$data->pekerjaan}}" id="pekerjaan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="proyek" class="col-sm-2 col-form-label">proyek</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='proyek' value="{{$data->proyek}}" id="proyek">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="penawaran_jasa" class="col-sm-2 col-form-label">penawaran_jasa</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='penawaran_jasa' value="{{$data->penawaran_jasa}}" id="penawaran_jasa">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="permintaan_jasa" class="col-sm-2 col-form-label">permintaan_jasa</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='permintaan_jasa' value="{{$data->permintaan_jasa}}" id="permintaan_jasa">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tagihan" class="col-sm-2 col-form-label">tagihan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='tagihan' value="{{$data->tagihan}}" id="tagihan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="pembayaran_pembelian" class="col-sm-2 col-form-label">pembayaran_pembelian</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='pembayaran_pembelian' value="{{$data->pembayaran_pembelian}}" id="pembayaran_pembelian">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="pesanan_pembelian" class="col-sm-2 col-form-label">pesanan_pembelian</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='pesanan_pembelian' value="{{$data->pesanan_pembelian}}" id="pesanan_pembelian">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="refrensi_perusahaan" class="col-sm-2 col-form-label">refrensi_perusahaan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='refrensi_perusahaan' value="{{$data->refrensi_perusahaan}}" id="refrensi_perusahaan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="refrensi_bahasa" class="col-sm-2 col-form-label">refrensi_bahasa</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='refrensi_bahasa' value="{{$data->refrensi_bahasa}}" id="refrensi_bahasa">
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