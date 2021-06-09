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
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('cpf');
            $table->string('password');
            $table->date("birth_date");
            $table->string("user_type");
            $table->rememberToken();
            $table->timestamps();

            $table->unsignedBigInteger("department_id")->nullable()->default(NULL);
            $table->foreign("department_id")->references("id")->on("departments")->nullable()->default(NULL)->onDelete('cascade');
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
