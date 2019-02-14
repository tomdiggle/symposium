<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddApprovedFieldToConferences extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('conferences', function (Blueprint $table) {
            $table->boolean('is_approved')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('conferences', function (Blueprint $table) {
            $table->dropColumn('is_approved');
        });
    }
}
