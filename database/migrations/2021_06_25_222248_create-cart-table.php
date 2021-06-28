<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('carts',  function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable()->default(NULL);
            $table->boolean("is_list")->nullable()->default(NULL);
            $table->string("status")->nullable()->default("in_separation");
            $table->float("total");
            $table->timestamps();

            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")->references("id")->on("users")->onDelete('cascade');
        }
       );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
