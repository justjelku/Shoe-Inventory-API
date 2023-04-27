<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('shoes', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('brand');
        $table->integer('price');
        $table->string('details');
        $table->timestamps();
    });
}
    public function down()
    {
    Schema::dropIfExists('shoes');
    }
};
