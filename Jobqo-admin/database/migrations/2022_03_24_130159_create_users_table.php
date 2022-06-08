<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_details_id')->nullable();
            $table->foreignId('companies_id')->nullable();
            $table->string('name')->nullable();
            $table->string('username')->nullable();
            $table->enum('gender', ['L', 'P'])->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('alamat')->nullable();
            $table->enum('roles', ['Admin', 'HRD', 'Pekerja'])->default('Pekerja');
            $table->string('img')->nullable();
            $table->string('cv_doc')->nullable();
            $table->string('cv_name')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
