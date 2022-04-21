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
        Schema::create('terms', function (Blueprint $table) {
            $table->id();
            $table->string('name', 16);
            $table->foreignIdFor(\App\Models\Student::class);
            $table->foreignIdFor(\App\Models\Subject::class);
            $table->foreignIdFor(\App\Models\Term::class);
            $table->decimal('mark',3,2);
            $table->decimal('min_mark',3,2);
            $table->decimal('max_mark',3,2);
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
        Schema::dropIfExists('terms');
    }
};
