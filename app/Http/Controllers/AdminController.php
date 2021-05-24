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
        ];

        foreach ($params[$pages] as $key => $value) {
            $data[$key] = $value;
        }

        return view('admin.pages.'.$pages,$data);
    }
}
