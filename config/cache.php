<?php

// +----------------------------------------------------------------------
// | 版权所有 2014~2024 魏东 [ 54928382@qq.com]
// +----------------------------------------------------------------------

return [
    // 默认缓存驱动
    'default' => env('CACHE_TYPE', 'file'),
    // 缓存连接配置
    'stores'  => [
        'file'  => [
            // 驱动方式
            'type'       => 'File',
            // 缓存保存目录
            'path'       => '',
            // 缓存名称前缀
            'prefix'     => '',
            // 缓存有效期 0 表示永久缓存
            'expire'     => 0,
            // 缓存标签前缀
            'tag_prefix' => 'tag:',
            // 序列化机制
            'serialize'  => [],
        ],
        'safe'  => [
            // 驱动方式
            'type'       => 'File',
            // 缓存保存目录
            'path'       => syspath('safefile/cache/'),
            // 缓存名称前缀
            'prefix'     => '',
            // 缓存有效期 0 表示永久缓存
            'expire'     => 0,
            // 缓存标签前缀
            'tag_prefix' => 'tag:',
            // 序列化机制
            'serialize'  => [],
        ],
        'redis' => [
            // 驱动方式
            'type'     => 'redis',
            'host'     => env('CACHE_REDIS_HOST', '127.0.0.1'),
            'port'     => env('CACHE_REDIS_PORT', 6379),
            'select'   => env('CACHE_REDIS_SELECT', 0),
            'password' => env('CACHE_REDIS_PASSWORD', ''),
        ]
    ],
];