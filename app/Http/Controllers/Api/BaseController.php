<?php
/**
 * Created by PhpStorm.
 * User: damai
 * Date: 2019-07-01
 * Time: 15:53
 */

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;

class BaseController extends Controller
{

    public static function returnMsg($data){

        echo  response()->json(['code'=>$data['code'],'msg'=>$data['msg'],'data'=>$data['data']]);

        exit();

    }



}