<?php

use App\Models\Student;
use App\Models\Subject;
use App\Models\Term;
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
        Schema::create('examination', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Student::class)->constrained();
            $table->foreignIdFor(Subject::class)->constrained();
            $table->foreignIdFor(Term::class)->constrained();
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
        Schema::dropIfExists('examination');
    }
};
