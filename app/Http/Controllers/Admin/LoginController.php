<?php
/**
 * Created by PhpStorm.
 * User: damai
 * Date: 2019-07-01
 * Time: 17:56
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    /**
     *  登录
     */
    public function login(){

        return view('admin.login.login');

    }

}