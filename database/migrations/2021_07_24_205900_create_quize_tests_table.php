<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizeTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quize_tests', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('image');
            $table->text('description');
            $table->string('introText');
            $table->text('thirty_persent_right');
            $table->text('fifty_persent_right');
            $table->text('seventy_persent_right');
            $table->text('hundred_right');
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
        Schema::dropIfExists('quize_tests');
    }
}
