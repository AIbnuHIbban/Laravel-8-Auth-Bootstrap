<?php

namespace App\Models;
    
use Illuminate\Database\Eloquent\Model;
    
class AudioSerial extends Model{
    protected $table = "audioserial";

    protected $fillable = ["id_audio","id_serial"];

    public $timestamps = false;

    /**
     * Create by LeeNuksID :D
     *
     * Thanks For Using Laragen
     */
}