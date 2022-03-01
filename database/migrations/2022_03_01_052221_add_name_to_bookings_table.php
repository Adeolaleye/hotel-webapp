<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameToBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('type')->nullable();
            $table->string('arrival_date')->nullable();
            $table->string('departure_date')->nullable();
            $table->string('adult_no')->nullable();
            $table->string('no_of_night')->nullable();
            $table->string('children_no')->nullable();
            $table->string('comments')->nullable();
            $table->string('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn([
                'name',
                'phone',
                'email',
                'type',
                'arrival_date',
                'departure_date',
                'adult_no',
                'no_of_night',
                'children_no',
                'comments',
                'status',
            ]);
        });
    }
}
