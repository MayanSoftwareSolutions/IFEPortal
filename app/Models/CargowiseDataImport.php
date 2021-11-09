<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargowiseDataImport extends Model
{
    use HasFactory;

     protected $fillable = [
         'cargowise_import_logs_id',
         'client_code',
         'container_no',
         'cont_mode',
         'cont_type',
         'house_ref',
         'master_ref',
         'job_ref',
         'job_type',
         'trans_mode',
         'vessel',
         'voyage',
         'unpack_loco',
         'disc_port_name',
         'disc_port_code',
         'cw_eta',
         'time_slot',
         'cartage_advise_issued',
         'cartage_company_code',
         'cartage_company_name',
         'estimated_delivery',
         'actual_delivery',
         'deliver_to_organisation',
         'container_detention_starts',
         'empty_ready',
         'empty_returned',
         'days_away_from_cw_eta_to_avalibility',
         'days_to_return_by_date',
         'days_past_empty_return_date',
     ];

     // import log relationship
     public function upload_log()
     {
        return $this->hasOne(CargowiseImportLog::class);
     }
}
