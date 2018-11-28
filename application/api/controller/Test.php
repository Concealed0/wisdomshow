<?php
namespace app\api\controller;
use think\Controller;

class Test extends Controller
{
    public function index()
    {
        return $this->fetch('ceshi');
        //return 'safdfa';
    }
    public function api()
    {
        return $this->fetch('ceshi');
        //return 'safdfa';
    }
}