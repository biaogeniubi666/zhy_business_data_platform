<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_data', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->text('id')->nullable();
            $table->text('年度')->nullable();
            $table->text('事业部')->nullable();
            $table->text('项目名称')->nullable();
            $table->text('填写日期')->nullable();
            $table->text('业主')->nullable();
            $table->text('实施区域')->nullable();
            $table->text('实施地市')->nullable();
            $table->text('项目类型')->nullable();
            $table->text('承接的项目阶段')->nullable();
            $table->text('部门跟进人员')->nullable();
            $table->text('市场信息详细来源')->nullable();
            $table->text('项目阶段')->nullable();
            $table->text('业务收入A值（万）')->nullable();
            $table->text('工单系统流程')->nullable();
            $table->text('业务收入B值（万）')->nullable();
            $table->text('情况进度')->nullable();
            $table->text('项目总投资（万）')->nullable();
            $table->text('成功获取的概率')->nullable();
            $table->text('实施方式')->nullable();
            $table->text('收支差')->nullable();
            $table->text('合作比例')->nullable();
            $table->text('项目进展及风险说明')->nullable();
            $table->text('备注')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unit_data');
    }
}
