<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = 'pesertas';
    protected $primaryKey = 'pin';
    public $incrementing = false;
}
