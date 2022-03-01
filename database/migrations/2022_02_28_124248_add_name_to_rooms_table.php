<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameToRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->string('name')->nullable();
            $table->string('price')->nullable();
            $table->string('feature_image')->nullable();
            $table->string('other_images')->nullable();
            $table->string('description')->nullable();
            $table->string('facilities')->nullable();
            $table->string('unit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->dropColumn([
            'name',
            'price',
            'feature_image',
            'other_images',
            'description',
            'facilities',
            'unit',
        ]);
        });
    }
}
