<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * 指定ユーザーのプロフィール表示
     *
     * @param  int  $id
     * @return Response
     */	
	public function page($id)
    {
//		$test = DB::connection('mysql');
//		$results = DB::select('select * from latest');
//		DB::statement('drop table latest');
//		var_dump($test);
//		echo $id;
        return view('users/page')->with('id',$id);
    }

}
