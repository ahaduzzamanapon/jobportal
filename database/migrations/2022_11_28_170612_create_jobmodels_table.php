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
        Schema::create('jobmodels', function (Blueprint $table) {
            $table->id();
            $table->string('jobtitle');
            $table->text('jobdescription');
            $table->text('jobcompany');
            $table->text('jobstutus');
            $table->text('jobeducation');
            $table->text('jobresponsibilities');
            $table->string('jobemail');
            $table->string('jobcategories');
            $table->string('offeredsalary');
            $table->text('jobexperience');
            $table->string('jobgender');
            $table->date('deadline');
            $table->string('jobcity');
            $table->string('jobaddress');
            $table->integer('employid');
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
        Schema::dropIfExists('jobmodels');
    }
};
