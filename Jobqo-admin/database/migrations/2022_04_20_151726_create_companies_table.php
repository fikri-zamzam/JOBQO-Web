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
            $table->String('kode_pos',6);
            $table->String('email',100);
            $table->String('contact',20);
            $table->foreignId('company_sector_id',10);
            $table->foreignId('company_type_id',10);
            $table->String('website');
            $table->integer('jumlah_job')->nullable();
            $table->enum('status_izin', ['Y', 'N']);
            $table->String('img_logo');
            $table->foreignId('company_place_id')->nullable();
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
