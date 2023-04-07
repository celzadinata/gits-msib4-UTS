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
        Schema::table('detail_transactions', function (Blueprint $table) {
            $table->string('products_id')->after('id');
            $table->foreign('products_id')->references('id_products')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_transactions', function (Blueprint $table) {
            $table->dropForeign(['products_id']);
            $table->dropColumn('products_id');
        });
    }
};
