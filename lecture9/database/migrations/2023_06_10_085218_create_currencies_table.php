<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrenciesTable extends Migration
{
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->string('currency_code')->primary();
            $table->decimal('exchange_rate', 10, 4);
        });
    }

    public function down()
    {
        Schema::dropIfExists('currencies');
    }
}

