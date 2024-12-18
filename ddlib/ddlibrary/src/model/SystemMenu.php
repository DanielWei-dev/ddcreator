<?php

// +----------------------------------------------------------------------
// | 版权所有 2014~2024 魏东 [ 54928382@qq.com]
// +----------------------------------------------------------------------

declare (strict_types=1);

namespace think\admin\model;

use think\admin\Model;

/**
 * 系统菜单模型
 * @class SystemMenu
 * @package think\admin\model
 */
class SystemMenu extends Model
{
    protected $createTime = 'create_at';
    protected $updateTime = false;

    /**
     * 日志名称
     * @var string
     */
    protected $oplogName = '系统菜单';

    /**
     * 日志类型
     * @var string
     */
    protected $oplogType = '系统菜单管理';

    /**
     * 格式化创建时间
     * @param mixed $value
     * @return string
     */
    public function getCreateAtAttr($value): string
    {
        return format_datetime($value);
    }
}