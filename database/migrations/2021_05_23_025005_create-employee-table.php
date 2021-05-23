<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function(Blueprint $table){
            $table->id();
            $table->string("name");
            $table->string("lastName");
            $table->string("email")->unique();
            $table->string("cpf");
            $table->string("password");
            $table->unsignedBigInteger("departments_id");
        });

        Schema::table('employees', function(Blueprint $table) {
            $table->foreign("departments_id")->references("id")->on("departments");    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');

        if (Schema::hasColumn("employees", "departments_id")) {
            Schema::table("employees", function (Blueprint $table) {
                $table->dropColumn("departments_id");
            });
        }
    }
}