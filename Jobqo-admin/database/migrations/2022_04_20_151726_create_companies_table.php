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
            $table->foreignId('users_id')->nullable();
            $table->String('name_company');
            $table->text('alamat');
            $table->String('kode_pos',6);
            $table->String('email',100);
            $table->String('contact',20);
            $table->foreignId('company_sector_id',10);
            $table->foreignId('company_type_id',10);
            $table->String('website');
            $table->enum('status_izin', ['Y', 'N'])->default('N');
            $table->String('img_logo')->nullable();
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
