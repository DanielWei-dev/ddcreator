<?php

// +----------------------------------------------------------------------
// | 版权所有 2014~2024 魏东 [ 54928382@qq.com]
// +----------------------------------------------------------------------

declare (strict_types=1);

namespace think\admin\model;

use think\admin\Model;
use think\model\relation\HasOne;

/**
 * 文件管理系统
 * @class SystemFile
 * @package think\admin\model
 */
class SystemFile extends Model
{
    /**
     * 创建字段
     * @var string
     */
    protected $createTime = 'create_at';

    /**
     * 更新字段
     * @var string
     */
    protected $updateTime = 'update_at';

    /**
     * 关联用户数据
     * @return \think\model\relation\HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(SystemUser::class, 'id', 'uuid')->field('id,username,nickname');
    }

    /**
     * 格式化创建时间
     * @param mixed $value
     * @return string
     */
    public function getCreateAtAttr($value): string
    {
        return format_datetime($value);
    }

    /**
     * 格式化更新时间
     * @param mixed $value
     * @return string
     */
    public function getUpdateAtAttr($value): string
    {
        return format_datetime($value);
    }
}