<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaymentInfoToEnrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enrolls', function (Blueprint $table) {
            $table->string('phone_number');
            $table->string('trx_id')->unique()->nullable();
            $table->string('email');
            $table->enum('approval',['Approved','Cancel','Pending'])->default('Pending');
            $table->datetime('expeire_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enrolls', function (Blueprint $table) {
            $table->string('phone_number');
            $table->string('trx_id')->unique()->nullable();
            $table->string('email');
            $table->enum('approval',['Approved','Cancel','Pending'])->default('Pending');
            $table->datetime('expeire_at')->nullable();
        });
    }
}
