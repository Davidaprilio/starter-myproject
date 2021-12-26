<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('sapaan', 20)->unique()->after('id');
            $table->string('panggilan', 50)->unique()->after('sapaan');
            $table->string('phone')->nullable()->after('email');
            $table->string('photo')->nullable()->after('phone');
            $table->foreignId('provinsi')->nullable()->after('photo');
            $table->foreignId('kota')->nullable()->after('provinsi');
            $table->foreignId('desa')->nullable()->after('kota');
            $table->date('birthday')->nullable()->after('desa');
            $table->string('alamat')->nullable()->after('birthday');
            $table->bigInteger('bank')->nullable()->after('alamat');
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
