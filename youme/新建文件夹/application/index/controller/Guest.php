<?php
namespace app\index\controller;
use think\Controller;
class Guest extends Base
{
    public function index(){
        return $this->fetch('guest');
    }
}
