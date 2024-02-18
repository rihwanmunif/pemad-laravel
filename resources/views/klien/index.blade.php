
@extends('layout.template')
        <!-- START DATA -->
        @section('konten')
            
       
        <div class="my-3 p-3 bg-body rounded shadow-sm">

            <!-- TOMBOL TAMBAH DATA -->
            <div class="pb-3">
                <a href='{{url('klien/create')}}' class="btn btn-primary">+ Tambah Data</a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-1">NO</th>
                        <th class="col-md-1">ID</th>
                        <th class="col-md-2">User</th>
                        <th class="col-md-2">Klien</th>
                        <th class="col-md-2">Tipe Pekerjaan</th>
                        <th class="col-md-2">Pekerjaan</th>
                        <th class="col-md-2">Proyek</th>
                        <th class="col-md-2">Penawaran Jasa</th>
                        <th class="col-md-2">Permintaan Jasa</th>
                        <th class="col-md-2">Tagihan</th>
                        <th class="col-md-2">Pembayaran Pembelian</th>
                        <th class="col-md-2">Pesanan Pembelian</th>
                        <th class="col-md-2">Refrensi Perusahaan</th>
                        <th class="col-md-2">Refrensi Bahasa</th>
                        <th class="col-md-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = $data->firstItem()?>
                    @foreach ($data as $item)
                        
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->id}}</td>
                        <td>{{$item->user}}</td>
                        <td>{{$item->klien}}</td>
                        <td>{{$item->tipe_pekerjaan}}</td>
                        <td>{{$item->pekerjaan}}</td>
                        <td>{{$item->proyek}}</td>
                        <td>{{$item->penawaran_jasa}}</td>
                        <td>{{$item->permintaan_jasa}}</td>
                        <td>{{$item->tagihan}}</td>
                        <td>{{$item->pembayaran_pembelian}}</td>
                        <td>{{$item->pesanan_pembelian}}</td>
                        <td>{{$item->refrensi_perusahaan}}</td>
                        <td>{{$item->refrensi_bahasa}}</td>
                        <td>
                            <a href='{{url('klien/'.$item->id.'/edit')}}' class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm('Yakin delete ?')" class="d-inline" action="{{url('klien/'.$item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                            <button type="submit" name="submit" 
                            class="btn btn-danger btn-sm">
                               del </button></form>
                        </td>
                    </tr>
                    <?php $i++?>
                    @endforeach
                </tbody>
            </table>
{{$data->links()}}
        </div>
        <!-- AKHIR DATA -->
        @endsection
