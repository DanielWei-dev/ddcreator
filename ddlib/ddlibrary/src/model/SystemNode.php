<?php

// +----------------------------------------------------------------------
// | 版权所有 2014~2024 魏东 [ 54928382@qq.com]
// +----------------------------------------------------------------------

declare (strict_types=1);

namespace think\admin\model;

use think\admin\Model;

/**
 * 授权节点模型
 * @class SystemNode
 * @mixin \think\db\Query
 * @package think\admin\model
 */
class SystemNode extends Model
{
    /**
     * 绑定模型名称
     * @var string
     */
    protected $name = 'SystemAuthNode';
}