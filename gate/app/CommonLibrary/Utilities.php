<?php
namespace App\CommonLibrary;

class Utilities
{

    public static function test()
    {
        return 'utility test ok!';
    }
	
	public static function makeAccessHash() {
		
		$access_hash = sha1(mt_rand(000,999));
		return $access_hash;
	}
//	public static function makeAccessHash($length=16,$type=0) {
//		/**
//		* ランダム文字列生成 (英数字)
//		* $length: 生成する文字数
//		*/
//		static $chars0 = 'abcdefghijklmnopqrstuvwxyz0123456789';
//		static $chars1 = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJLKMNOPQRSTUVWXYZ0123456789';
//		static $chars2 = '0123456789';
//		
//		$offset='';
//		if ($type==0) {
//			$chars = $chars0;
//			$offset = mb_strlen($chars0);
//			var_dump($offset);
//		}
//		else if ($type==1) {
//			$chars = $chars1;
//			$offset = mb_strlen($chars1);
//		}
//		else if ($type==2) {
//			$chars = $chars2;
//			$offset = mb_strlen($chars2);
//		}
//		
//		$access_hash = '';
//		for ($i = 0; $i < $length; ++$i) {
//			$access_hash .= $chars[mt_rand(0, $offset)];
//		}
//		return $access_hash;
//	}


}