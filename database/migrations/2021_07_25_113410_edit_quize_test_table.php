<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditQuizeTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quize_tests', function (Blueprint $table) {
            $table->string('image')->nullable(true)->change();
            $table->text('description')->nullable(true)->change();
            $table->string('introText')->nullable(true)->change();
            $table->text('thirty_persent_right')->nullable(true)->change();
            $table->text('fifty_persent_right')->nullable(true)->change();
            $table->text('seventy_persent_right')->nullable(true)->change();
            $table->text('hundred_right')->nullable(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quize_tests', function (Blueprint $table) {
            $table->string('image')->nullable(false)->change();
            $table->text('description')->nullable(false)->change();
            $table->string('introText')->nullable(false)->change();
            $table->text('thirty_persent_right')->nullable(false)->change();
            $table->text('fifty_persent_right')->nullable(false)->change();
            $table->text('seventy_persent_right')->nullable(false)->change();
            $table->text('hundred_right')->nullable(false)->change();
        });
    }
}
