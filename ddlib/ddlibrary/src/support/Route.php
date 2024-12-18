<?php

// +----------------------------------------------------------------------
// | 版权所有 2014~2024 魏东 [ 54928382@qq.com]
// +----------------------------------------------------------------------

declare (strict_types=1);

namespace think\admin\support;

use think\Route as ThinkRoute;

/**
 * 自定义路由对象
 * @class Route
 * @package think\admin\support
 */
class Route extends ThinkRoute
{
    /**
     * 重载路由配置
     * @return $this
     */
    public function reload(): Route
    {
        $this->config = array_merge($this->config, $this->app->config->get('route'));
        return $this;
    }
}