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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('track_number');

            $table->string('name')->nullable();
            $table->string('weight')->nullable();
            $table->string('description');

            $table->string('origin')->nullable();
            $table->string('origin_terminal')->nullable();
            $table->string('destination')->nullable();
            $table->string('destination_terminal')->nullable();

            $table->string('status')->nullable();
            $table->string('current_location')->nullable();
            $table->string('delivery_route')->nullable();
            $table->string('delivery_itinerary')->nullable();
            $table->string('delivery_date')->nullable();
            $table->string('registered_by');
            $table->string('registered_by_id');

            $table->string('image_front')->nullable();
            $table->string('image_back')->nullable();
            $table->string('image_left')->nullable();
            $table->string('image_right')->nullable();

            $table->string('belongs_to_company')->nullable();
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
        Schema::dropIfExists('tickets');
    }
};
