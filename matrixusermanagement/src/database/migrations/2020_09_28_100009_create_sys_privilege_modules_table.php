<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysPrivilegeModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_privilege_modules', function (Blueprint $table) {
            $table->unsignedBigInteger('sys_user_id');
            $table->foreign('sys_user_id')->references('id')->on('sys_users')->onDelete('cascade');
            $table->unsignedBigInteger('sys_module_id');
            $table->foreign('sys_module_id')->references('id')->on('sys_modules')->onDelete('cascade');
            $table->unsignedBigInteger('sys_role_id');
            $table->foreign('sys_role_id')->references('id')->on('sys_user_roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_privilege_modules');
    }
}
