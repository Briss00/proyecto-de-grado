<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmninistratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admninistrators', function (Blueprint $table) {
            $table->id();
            $table->string('position');
            $table->timestamps();
        });
    }

    public function model()
    {
        return $this->morphMany(Employee::class, 'model');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admninistrators');
    }
}
