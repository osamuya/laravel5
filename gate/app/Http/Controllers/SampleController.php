<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SampleController extends Controller
{
    /**
     * 指定ユーザーのプロフィール表示
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        return view('sample/sample_ctrl');
    }
}
