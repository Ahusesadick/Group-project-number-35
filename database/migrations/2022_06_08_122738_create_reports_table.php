<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('Sname');
            $table->string('RegNo');
            $table->string('programe');
            $table->date('date_reported');
            $table->date('date_finished');
            $table->integer('day_attend');
            $table->integer('day_missing');
            $table->string('Org_name');
            $table->string('Attitude');
            $table->string('organizes');
            $table->string('panctual');
            $table->string('resourcefulness');
            $table->string('accuracy');
            $table->string('adapts');
            $table->string('has_ability_to_get_along_with_others_work');
            $table->string('Follows_upon_assignments');
            $table->string('ability_to_communicate_with_supervisor');
            $table->string('ability_to_apply_theory_in_practice');
            $table->string('ability_to_judge');
            $table->string('Adherence_to_general_code_of_conduct');
            $table->text('comments');
            $table->string('name');
            $table->string('designation');
            $table->integer('contact');
            $table->string('email');
            $table->date('date');
            $table->string('signature');
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
        Schema::dropIfExists('reports');
    }
}
