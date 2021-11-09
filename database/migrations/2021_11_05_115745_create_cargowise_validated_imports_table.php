<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargowiseValidatedImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargowise_validated_imports', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cargowise_import_logs_id')->nullable();
            $table->dateTime('transfer_timestamp')->default(now());
            $table->string('client_code')->nullable();
            $table->string('container_no')->nullable();
            $table->string('cont_mode')->nullable();
            $table->string('cont_type')->nullable();
            $table->string('house_ref')->nullable();
            $table->string('master_ref')->nullable();
            $table->string('job_ref')->nullable();
            $table->string('job_type')->nullable();
            $table->string('trans_mode')->nullable();
            $table->string('vessel')->nullable();
            $table->string('voyage')->nullable();
            $table->string('unpack_loco')->nullable();
            $table->string('disc_port_name')->nullable();
            $table->string('disc_port_code')->nullable();
            $table->string('cw_eta')->nullable();
            $table->string('time_slot')->nullable();
            $table->string('cartage_advise_issued')->nullable();
            $table->string('cartage_company_code')->nullable();
            $table->string('cartage_company_name')->nullable();
            $table->string('estimated_delivery')->nullable();
            $table->string('actual_delivery')->nullable();
            $table->string('deliver_to_organisation')->nullable();
            $table->string('container_detention_starts')->nullable();
            $table->string('empty_ready')->nullable();
            $table->string('empty_returned')->nullable();
            $table->string('days_away_from_cw_eta_to_avalibility')->nullable();
            $table->string('days_to_return_by_date')->nullable();
            $table->string('days_past_empty_return_date')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cargowise_validated_imports');
    }
}
