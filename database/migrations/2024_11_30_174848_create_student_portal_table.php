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
        Schema::create('student_portal', function (Blueprint $table) {
            $table->id('portal_id');
            $table->string('stud_name');
            $table->string('stud_father');
            $table->string('stud_mother');
            $table->string('stud_class');
            $table->string('stud_section');
            $table->string('stud_rollNo');
            $table->string('stud_email');
            $table->string('stud_phone');
            $table->string('stud_address');
            $table->string('stud_password');
            $table->string('stud_image');
            $table->string('portal_email');
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
        Schema::dropIfExists('student_portal');
    }
};
