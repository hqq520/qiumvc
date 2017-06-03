<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-06-02
 * Time: 23:23
 */

namespace core;

use Gregwar\Captcha\CaptchaBuilder;
class qiumvc
{
    public static function run()
    {
        // 初始化错误提示
        $whoops = new \Whoops\Run;
        $errorPage = new \Whoops\Handler\PrettyPageHandler;
        $errorPage->setPageTitle("程序出大事啦!!!");
        $whoops->pushHandler($errorPage);
        $whoops->register();
        // P('框架正在初始化中！');
        // echo 9/0;

        //验证码
        $builder = new CaptchaBuilder;
        $builder->build($width = 300, $height = 60);
        header('Content-type: image/jpeg');
        $builder->output();
    }
}