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
		// mail test
		
		
        return view('sample/sample_ctrl');
    }
	
	public function page($id)
    {
//		echo $id;
        return view('sample/sample_ctrl_page')->with('id',$id);
    }

}
