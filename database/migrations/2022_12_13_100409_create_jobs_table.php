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
            $table->string('description');
            $table->foreignIdFor(JobCategory::class)->constrained();
            $table->foreignIdFor(Company::class)->constrained();
            $table->string('gender');
            $table->enum('salary_type',
                [
                    'Hourly',
                    'Daily',
                    'Weekly',
                    'Monthly',
                    'Yearly'
                ]);
            $table->unsignedDecimal('min_salary');
            $table->unsignedDecimal('max_salary');
            $table->UnsignedInteger('experience');
            $table->enum('qualification',
                [
                    'Certificate',
                    'Diploma Degree',
                    'Bachelor Degree',
                    'Master Degree',
                    'Doctorate Degree'
                ]);
            $table->date('deadline');
            $table->unsignedInteger('vacancy');
            $table->string('location');
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
