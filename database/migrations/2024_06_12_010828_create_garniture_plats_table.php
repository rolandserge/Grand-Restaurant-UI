<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garniture_plats', function (Blueprint $table) {
            $table->id();
            $table->foreignId("plat_id")->constrained()->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("garniture_id")->constrained()->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('garniture_plats');
    }
};