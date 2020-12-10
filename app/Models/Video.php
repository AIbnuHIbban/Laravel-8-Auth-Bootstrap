<?php

namespace App\Models;
    
use Illuminate\Database\Eloquent\Model;
    
class Video extends Model{
    protected $table = "video";

    protected $fillable = ["title","pengisi","deskripsi","video","type"];

    // public $timestamps = false;

    /**
     * Create by LeeNuksID :D
     *
     * Thanks For Using Laragen
     */
}