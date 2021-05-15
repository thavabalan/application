<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewNewfieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('photo')->nullable()->after('firstname');
            $table->string('role')->default('applicant');
            $table->string('phone')->nullable();
            $table->string('NIN')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_phone_number')->nullable();
            $table->string('mother_name')->nullable();
            $table->text('dob')->nullable();
            $table->string('jamb_2020')->nullable();
            $table->string('jamb_reg_no')->nullable();
            $table->string('jambfile')->nullable();
            $table->string('jambscore')->nullable();
            $table->string('waecorneco')->nullable();
            $table->string('waecorresults')->nullable();
            $table->string('primarschool')->nullable();
            $table->string('ssceresults')->nullable();
            $table->string('state')->nullable();
            $table->string('lga')->nullable();
            $table->string('program')->nullable();
            $table->boolean('status')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
