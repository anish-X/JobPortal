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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categorgy_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('job_position_id')->constrained();
            $table->UnsignedInteger('experience');
            $table->string('skills');
            $table->timestamps('deadline');
            $table->unsignedFloat('salary')->nullable();
            $table->unsignedInteger('vacancy');
            $table->string('description');
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
        Schema::dropIfExists('jobs');
    }
};
