<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('quantitiy');
            $table->text('description');
            $table->decimal('unit_price',8,2)->default(0.00);
            $table->decimal('sub_total',8,2)->default(0.00);
            $table->decimal('total',8,2)->default(0.00);
            $table->decimal('tax',8,2)->default(0.00);
            $table->date('due_date');
            $table->boolean('is_paid')->default(0);
            $table->string('payment_method')->nullable();
            $table->unsignedBigInteger('customer_id');
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
        Schema::dropIfExists('invoices');
    }
}
