<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SessionController extends Controller
{
    /**
     * 指定ユーザーのプロフィール表示
     *
     * @param  int  $id
     * @return Response
     */
    public function index(Request $request, $id)
    {
		
		$data = $request->session()->all();
		var_dump($data);
		
		$value = $request->session()->get('_token', 'default');
		var_dump($value);
		
		$_SESSION['hoge'] = 'dadadadsada';
		var_dump($_SESSION['hoge']);
		
		$testvalue = session('testkey', 'testvalue');
		var_dump($testvalue);
		
		$request->session()->put('key', 'value');
		
		$request->session()->put('foo', 'bar');

        return view('sessions/index')->with('id',$id);
    }

}
