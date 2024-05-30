<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('nids', function (Blueprint $table) {
            $table->id();
            $table->string('id_number');
            $table->string('full_name');
            $table->string('common_name')->nullable();
            $table->string('sex');
            $table->string('address');
            $table->string('date_of_birth');
            $table->string('atoll');
            $table->string('island');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nids');
    }
};
