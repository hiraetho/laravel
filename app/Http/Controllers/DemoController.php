<?php
/**
 * Created by PhpStorm.
 * User: fuyu
 * Date: 2017/4/17
 * Time: 11:02
 */

namespace App\Http\Controllers;


use Illuminate\Routing\Controller;

class DemoController extends Controller
{
    public function demotest(){
        $obj = new inheritsCustom();
        $obj->hello();die;
    }
}

trait  custom
{
    public function hello()
    {
        echo "hello";
    }
}

trait custom2
{
    public function hello()
    {
        echo "hello2";
    }
}

class inheritsCustom
{
    use custom, custom2
    {
        custom2::hello insteadof custom;
    }
}


