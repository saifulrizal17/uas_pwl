<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    use HasFactory;
    protected $table = 'laundry';
    protected $fillable = [
      'nama',
      'nomerhp',
      'alamat',
      'berat',
      'jenis_paket',
      'total_harga',
      'status'
    ];
}
