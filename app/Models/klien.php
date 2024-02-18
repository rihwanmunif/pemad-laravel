<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class klien extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'user', 'klien', 'tipe_pekerjaan', 'pekerjaan', 'proyek', 'penawaran_jasa', 
    'permintaan_jasa', 'tagihan', 'pembayaran_pembelian', 'pesanan_pembelian', 'refrensi_perusahaan', 'refrensi_bahasa'];
    protected $table = 'klien';
    public $timestamps = false;
}
