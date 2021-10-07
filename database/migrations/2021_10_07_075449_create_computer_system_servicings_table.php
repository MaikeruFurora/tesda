<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputerSystemServicingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computer_system_servicings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->boolean('coc1_c1')->default(false);
            $table->boolean('coc1_c2')->default(false);
            $table->boolean('coc1_c3')->default(false);
            $table->boolean('coc1_c4')->default(false);
            $table->boolean('coc1_c5')->default(false);
            $table->boolean('coc1_c6')->default(false);
            $table->boolean('coc1_c7')->default(false);
            $table->boolean('coc1_c8')->default(false);
            $table->boolean('coc1_c9')->default(false);
            $table->boolean('coc1_c10')->default(false);
            $table->boolean('coc1_c11')->default(false);
            $table->boolean('coc1_c12')->default(false);
            $table->boolean('coc1_c13')->default(false);
            $table->boolean('coc1_c14')->default(false);
            $table->boolean('coc1_c15')->default(false);
            $table->boolean('coc1_c16')->default(false);
            $table->boolean('coc1_c17')->default(false);
            $table->boolean('coc1_c18')->default(false);
            $table->boolean('coc1_c19')->default(false);
            //coc 2
            $table->boolean('coc2_c1')->default(false);
            $table->boolean('coc2_c2')->default(false);
            $table->boolean('coc2_c3')->default(false);
            $table->boolean('coc2_c4')->default(false);
            $table->boolean('coc2_c5')->default(false);
            $table->boolean('coc2_c6')->default(false);
            $table->boolean('coc2_c7')->default(false);
            $table->boolean('coc2_c8')->default(false);
            $table->boolean('coc2_c9')->default(false);
            $table->boolean('coc2_c10')->default(false);
            $table->boolean('coc2_c11')->default(false);
            $table->boolean('coc2_c12')->default(false);
            $table->boolean('coc2_c13')->default(false);
            $table->boolean('coc2_c14')->default(false);
            $table->boolean('coc2_c15')->default(false);
            $table->boolean('coc2_c16')->default(false);
            $table->boolean('coc2_c17')->default(false);
            $table->boolean('coc2_c18')->default(false);
            $table->boolean('coc2_c19')->default(false);
            $table->boolean('coc2_c20')->default(false);
            $table->boolean('coc2_c21')->default(false);
            $table->boolean('coc2_c22')->default(false);
            $table->boolean('coc2_c23')->default(false);
            //coc3
            $table->boolean('coc3_c1')->default(false);
            $table->boolean('coc3_c2')->default(false);
            $table->boolean('coc3_c3')->default(false);
            $table->boolean('coc3_c4')->default(false);
            $table->boolean('coc3_c5')->default(false);
            $table->boolean('coc3_c6')->default(false);
            $table->boolean('coc3_c7')->default(false);
            $table->boolean('coc3_c8')->default(false);
            $table->boolean('coc3_c9')->default(false);
            $table->boolean('coc3_c10')->default(false);
            $table->boolean('coc3_c11')->default(false);
            $table->boolean('coc3_c12')->default(false);
            //coc4
            $table->boolean('coc4_c1')->default(false);
            $table->boolean('coc4_c2')->default(false);
            $table->boolean('coc4_c3')->default(false);
            $table->boolean('coc4_c4')->default(false);
            $table->boolean('coc4_c5')->default(false);
            $table->boolean('coc4_c6')->default(false);
            $table->boolean('coc4_c7')->default(false);
            $table->boolean('coc4_c8')->default(false);
            $table->boolean('coc4_c9')->default(false);
            $table->boolean('coc4_c10')->default(false);
            $table->boolean('coc4_c11')->default(false);
            $table->boolean('coc4_c12')->default(false);
            $table->boolean('coc4_c13')->default(false);
            $table->boolean('coc4_c14')->default(false);
            $table->boolean('coc4_c15')->default(false);
            $table->boolean('coc4_c16')->default(false);
            $table->boolean('coc4_c17')->default(false);
            $table->boolean('coc4_c18')->default(false);
            $table->boolean('coc4_c19')->default(false);
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
        Schema::dropIfExists('computer_system_servicings');
    }
}
