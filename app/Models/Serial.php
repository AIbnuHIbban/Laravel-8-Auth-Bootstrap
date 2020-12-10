<?php

namespace App\Models;
    
use Illuminate\Database\Eloquent\Model;
    
class Serial extends Model{
    protected $table = "serial";

    protected $fillable = ["title","image","deskripsi","type"];

    // public $timestamps = false;

    /**
     * Create by LeeNuksID :D
     *
     * Thanks For Using Laragen
     */
}