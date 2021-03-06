<?php

return [

    /*
    |--------------------------------------------------------------------------
    | 接口地址域名
    |--------------------------------------------------------------------------
    |
    | 不开通VIP都是默认的域名
    */

    'domain_name' => env('EASEMOB_DOMAIN_NAME', 'https://a1.easemob.com'),

    /*
    |--------------------------------------------------------------------------
    | 企业的唯一标识
    |--------------------------------------------------------------------------
    |
    | 开发者在环信开发者管理后台注册账号时填写的企业 ID
    | AppKey 后，会得到一个 xxxx#xxxx 格式的字符串，org_name 对应#前面部分
    */

    'org_name' => env('EASEMOB_ORG_NAME', ''),

    /*
    |--------------------------------------------------------------------------
    | “APP”唯一标识
    |--------------------------------------------------------------------------
    |
    | 开发者在环信开发者管理后台创建应用时填写的“应用名称”
    | AppKey 后，会得到一个 xxxx#xxxx 格式的字符串，app_name 对应#后面部分
    */

    'app_name'       => env('EASEMOB_APP_NAME', ''),

    /*
    |--------------------------------------------------------------------------
    | 客户ID
    |--------------------------------------------------------------------------
    |
    */

    'client_id'       => env('EASEMOB_CLIENT_ID', ''),

    /*
    |--------------------------------------------------------------------------
    | 客户秘钥
    |--------------------------------------------------------------------------
    |
    */

    'client_secret'       => env('EASEMOB_CLIENT_SECRET', ''),

];