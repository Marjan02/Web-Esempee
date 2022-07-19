<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'kelamin', 'nisn', 'nik', 'asalsekolah', 'lahir', 'email', 'no_hp', 'namaortu', 'alamat', 'hportu'];
}
