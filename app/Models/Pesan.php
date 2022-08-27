<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\PesanController;

class Pesan extends Model
{
    protected $table = 'pesan';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'pesan'];
}
