<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargowiseImportLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargowise_import_logs', function (Blueprint $table) {
            $table->id('upload_reference');
            $table->string('uploaded_by')->nullable();
            $table->string('upload_type');
            $table->timestamp('upload_date');
            $table->string('upload_status');
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
        Schema::dropIfExists('cargowise_import_logs');
    }
}
