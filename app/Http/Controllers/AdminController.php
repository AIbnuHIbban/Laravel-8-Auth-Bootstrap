<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function pages($pages){

        if (!view()->exists('admin.pages.'.$pages)){
            return view('page-404');
        }

        $params = [
            'dashboard' => [
                'title' => 'Dashboard'
            ],
            'kelola-audio' => [
                'title' => 'Kelola Audio'
            ],
            'kelola-video' => [
                'title' => 'Kelola Video'
            ],
            'kelola-karya' => [
                'title' => 'Kelola Karya'
            ],
            'sosial-media' => [
                'title' => 'Sosial Media'
            ],
            'pengaturan' => [
                'title' => 'Pengaturan'
            ],
            'pengaturan-akun' => [
                'title' => 'Pengaturan Akun'
            ]
        ];

        foreach ($params[$pages] as $key => $value) {
            $data[$key] = $value;
        }

        return view('admin.pages.'.$pages,$data);
    }
}
