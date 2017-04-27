<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\DataProject;

class ModelController extends Controller
{
    /**
     * 指定ユーザーのプロフィール表示
     *
     * @param  int  $id
     * @return Response
     */
    public function index($id)
    {

//        $test = DB::connection('mysql');
//        $results = DB::select('select * from latest where id = :id',[ 'id'=> $id ]);
//        var_dump($results);
//        echo $id;

        // model all
        $data_projects = DataProject::all();

        // model where
        $data_projects = DataProject::where('id', 1)->get();
        foreach($data_projects as $key=>$val) {
//            $val = preg_replace_callback('|\\\\u([0-9a-f]{4})|i', function($matched){
//            return mb_convert_encoding(pack('H*', $matched[1]), 'UTF-8', 'UTF-16');}, $val);
//            $val = '';
//            echo "{$key}=>{$val}<br>\n";
        }
        echo "<pre>";
        var_dump($data_projects[0]->remark);
        echo "</pre>";

//        echo "<pre>";
//        var_dump($data_projects);
//        echo "</pre>";
        return view('users/page')->with('id',$id);
    }

}
