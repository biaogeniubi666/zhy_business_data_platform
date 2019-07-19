<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnitData extends Model
{
    // 定义数据列的属性！
    protected $fillable = [
        '年度',
        '事业部', '项目名称','填写日期',
        '业主','实施区域','项目类型','承接的项目阶段',
        '部门跟进人员','市场信息详细来源','项目阶段',
        '业务收入A值（万）','工单系统流程','业务收入B值（万）',
        '请款进度','项目总投资（万）','成功获取的概率',
        '实施方式','收支差','合作比例','项目进展及风险说明',
        '备注' 
        // '年度','事业部', '项目名称','填写日期',
        // '业主','实施区域','项目类型','承接的项目阶段',
        // '部门跟进人员','市场信息详细来源','项目阶段',
        // '业务收入A值（万）','工单系统流程','业务收入B值（万）',
        // '请款进度','项目总投资（万）','成功获取的概率',
        // '实施方式','收支差','合作比例','项目进展及风险说明',
        // '备注' 
    ];

}
