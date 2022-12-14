<?php


use App\Models\User;
use App\Models\JobCategory;
use App\Models\CompanyCategory;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->foreignIdFor(CompanyCategory::class)->constrained();
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(JobCategory::class)->constrained();
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
