<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->string('housing_location');
            $table->timestamps();
        });
    }

    public function model()
    {
        return $this->morphMany(Employee::class, 'model');
    }

    public function down()
    {
        Schema::dropIfExists('workers');
    }
}
