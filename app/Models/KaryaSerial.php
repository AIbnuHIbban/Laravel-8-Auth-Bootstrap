<?php

namespace App\Models;
    
use Illuminate\Database\Eloquent\Model;
    
class KaryaSerial extends Model{
    protected $table = "karyaserial";

    protected $fillable = ["id_karya","id_serial"];

    public $timestamps = false;

    /**
     * Create by LeeNuksID :D
     *
     * Thanks For Using Laragen
     */
}