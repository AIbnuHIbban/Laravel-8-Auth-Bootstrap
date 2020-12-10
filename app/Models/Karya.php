<?php

namespace App\Models;
    
use Illuminate\Database\Eloquent\Model;
    
class Karya extends Model{
    protected $table = "karya";

    protected $fillable = ["title","penulis","deskripsi","karya","type"];

    // public $timestamps = false;

    /**
     * Create by LeeNuksID :D
     *
     * Thanks For Using Laragen
     */
}