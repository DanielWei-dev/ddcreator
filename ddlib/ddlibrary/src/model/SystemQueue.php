<?php

// +----------------------------------------------------------------------
// | 版权所有 2014~2024 魏东 [ 54928382@qq.com]
// +----------------------------------------------------------------------

declare (strict_types=1);

namespace think\admin\model;

use think\admin\Model;

/**
 * 系统任务模型
 * @class SystemQueue
 * @package think\admin\model
 */
class SystemQueue extends Model
{
    protected $createTime = 'create_at';
    protected $updateTime = false;

    /**
     * 格式化计划时间
     * @param mixed $value
     * @return string
     */
    public function getExecTimeAttr($value): string
    {
        return format_datetime($value);
    }

    /**
     * 执行开始时间处理
     * @param mixed $value
     * @return string
     */
    public function getEnterTimeAttr($value): string
    {
        return floatval($value) > 0 ? format_datetime(intval($value)) : '';
    }

    /**
     * 执行结束时间处理
     * @param mixed $value
     * @param array $data
     * @return string
     */
    public function getOuterTimeAttr($value, array $data): string
    {
        if ($value > 0 && $value > $data['enter_time']) {
            return lang("耗时 %.4f 秒", [$data['outer_time'] - $data['enter_time']]);
        } else {
            return ' - ';
        }
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
}