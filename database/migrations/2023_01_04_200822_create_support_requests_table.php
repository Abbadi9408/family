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
        Schema::create('support_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('id_number');
            $table->string('mobile_number');
            $table->text('house_type');
            $table->text('income');
            $table->string('family_members_number');
            $table->string('address');
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
        Schema::dropIfExists('support_requests');
    }
};
