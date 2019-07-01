<?php
/**
 * Created by PhpStorm.
 * User: damai
 * Date: 2019-07-01
 * Time: 15:28
 */

namespace App\Http\Controllers\Api;

use App\Model\admin\Member;
use Illuminate\Http\Request;

class IndexController extends BaseController
{

    public function index(Request $request){

        $data = $request->all();

        if (empty($data)){
            self::returnMsg(['code'=>400,'msg'=>'error','data'=>'']);
        }

        $member = new Member();
        $member->user_name = $data['user_name'];
        $member->phone     = $data['phone'];
        $member->setting   = ['a'=>1,'b'=>2,'c'=>3,'d'=>4];
        $flag = $member->save();

        $user = Member::find(1);

        if ($flag){
            self::returnMsg(['code'=>200,'msg'=>'ok','data'=>$user]);
        }else{
            self::returnMsg(['code'=>400,'msg'=>'error','data'=>'']);
        }
    }

    public function getUser(){

        $member = Member::where(['is_del'=>1,'status'=>1])->offset(4)->limit(5)->get();

        self::returnMsg(['code'=>200,'msg'=>'ok','data'=>$member]);

    }



}