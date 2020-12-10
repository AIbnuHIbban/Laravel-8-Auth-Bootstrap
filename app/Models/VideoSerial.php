<?php

namespace App\Models;
    
use Illuminate\Database\Eloquent\Model;
    
class VideoSerial extends Model{
    protected $table = "videoserial";

    protected $fillable = ["id_video","id_serial"];

    public $timestamps = false;

    /**
     * Create by LeeNuksID :D
     *
     * Thanks For Using Laragen
     */
}