<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateEntryOutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entry_outs', function (Blueprint $table) {
            $table->id();
            $table->timestamp('entrance')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->date("out")->nullable()->default(NULL);

            $table->unsignedBigInteger("cart_id");
            $table->foreign("cart_id")->references("id")->on("carts")->onDelete('cascade');
            
            $table->unsignedBigInteger("department_id");
            $table->foreign("department_id")->references("id")->on("departments")->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entry_outs');
    }
}
