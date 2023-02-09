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
            $table->string('user_id');
            $table->string('fullname')->nullable();
            $table->string('armada_id');
            $table->string('bookingcode');
            $table->bigInteger('total');
            $table->string('no_telp', '15')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->text('alamat')->nullable();
            $table->integer('durasi_sewa');
            $table->enum('status', ['pending','success','completed']) -> default('pending');
            $table->enum('supir', ['tanpa supir','dalam kota','luar kota']) -> default('tanpa supir');
            $table->enum('pengantaran', ['self pick-up','Delivery']) -> default('self pick-up');
            $table->string('dp_invoice')->nullable();
            $table->string('ktp')->nullable();
            $table->string('sim')->nullable();

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
