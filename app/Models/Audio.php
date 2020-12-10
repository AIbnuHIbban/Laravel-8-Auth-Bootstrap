<?php

namespace App\Models;
    
use Illuminate\Database\Eloquent\Model;
    
class Audio extends Model{
    protected $table = "audio";

    protected $fillable = ["title","pengisi","deskripsi","audio","type"];

    // public $timestamps = false;

    /**
     * Create by LeeNuksID :D
     *
     * Thanks For Using Laragen
     */
}