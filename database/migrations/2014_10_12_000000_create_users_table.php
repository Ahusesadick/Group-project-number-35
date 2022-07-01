<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('RegNo');
            $table->string('Programme');
            $table->integer('PhoneNo');
            $table->string('Orgname');
            $table->string('Orglocation');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
           // $table->unsignedBigInteger('supervisor_id');
           // $table->foregn('supervisor_id')->references('id')->on('supervisors')->onUpdate('cascade')->onDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
