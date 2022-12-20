<?php


use App\Models\Company;
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
            $table->string('title');
            $table->foreignIdFor(Company::class)->constrained();
            // $table->foreignIdFor(User::class)->constrained()->nullable();
            $table->foreignIdFor(JobCategory::class)->constrained();
            $table->UnsignedInteger('experience');
            $table->string('skills');
            $table->date('deadline');
            $table->unsignedFloat('salary')->nullable();
            $table->unsignedInteger('vacancy');
            $table->string('description');
            $table->boolean('is_active')->default(true);
            $table->softDeletes();
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
