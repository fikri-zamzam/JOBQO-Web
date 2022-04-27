<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->String('name_company');
            $table->text('alamat');
            $table->String('kode_pos');
            $table->String('email');
            $table->String('contact');
            $table->String('img_logo');
            $table->foreignId('company_sector_id');
            $table->foreignId('company_type_id');
            $table->foreignId('company_place_id');
            $table->String('website');
            $table->integer('jumlah_job')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
