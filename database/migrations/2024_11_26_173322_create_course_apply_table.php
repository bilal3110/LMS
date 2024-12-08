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
        Schema::create('course_apply', function (Blueprint $table) {
            $table->id('ca_id');
            $table->string('name');
            $table->string('father_name');
            $table->string('contact');
            $table->string('email');
            $table->text('address');
            $table->boolean('is_horizon_student')->default(false); 
            $table->unsignedBigInteger('course_id'); 
            $table->timestamps();
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_apply');
    }
};
