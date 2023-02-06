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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('user_id');
            $table->string('fullname');
            $table->foreignId('armada_id');
            $table->string('bookingcode', '8')->nullable();
            $table->double('total', '30');
            $table->string('no_telp', '15');
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->text('alamat');
            $table->integer('durasi_sewa');
            $table->binary('dp_invoice')->nullable();
            $table->enum('status', ['pending','success','completed']) -> default('pending');
            $table->enum('supir', ['tanpa supir','dalam kota','luar kota']) -> default('tanpa supir');
            $table->enum('pengantaran', ['self pick-up','Delivery']) -> default('self pick-up');
            $table->binary('ktp')->nullable();
            $table->binary('sim')->nullable();

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
        Schema::dropIfExists('transactions');
    }
};
