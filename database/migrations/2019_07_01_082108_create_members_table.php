<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name')->comment('用户名称');
            $table->tinyInteger('sex')->comment('性别;1:男；2:女；0：保密')->default(0);
            $table->string('phone')->comment('账号');
            $table->tinyInteger('status')->comment('状态；0：禁用；1：启用')->default(1);
            $table->tinyInteger('sort')->comment('排序')->default(100);
            $table->integer('create_time');
            $table->integer('update_time');
            $table->integer('is_del')->comment('是否删除；0：删除；1：未删除')->default(1);
            $table->text('setting')->comment('设置')->default(null);
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
