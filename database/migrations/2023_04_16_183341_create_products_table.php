<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('ProductID');
            $table->string('ProductName', 40);
            $table->string('SupplierID', 40);
            $table->string('CategoryID', 40);
            $table->string('QuantityPerUnit', 40);
            $table->decimal('UnitPrice', 10, 4);
            $table->smallInteger('UnitsInStock');
            $table->smallInteger('UnitsOnOrder');
            $table->smallInteger('ReorderLevel');
            $table->string('Discontinued', 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
