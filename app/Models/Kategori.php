<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';

    protected $primaryKey = 'id_kategori';

    protected $fillable = [
        'nama_kategori',
        'keterangan_kategori',
    ];
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_kategori', 'id_kategori');
    }
}
