<?php

namespace App\Imports;

use App\Models\CargowiseDataImport;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use App\Models\CargowiseImportLog;

class CWDataImport implements ToModel, WithHeadingRow
{

    public function model(array $row)
    {
        $importLogId = CargowiseImportLog::latest()->first();

        return new CargowiseDataImport([
         "cargowise_import_logs_id" => $importLogId->upload_reference,
         "client_code"  => $row["client_code"],
         "container_no" => $row["container"],
         "cont_mode" => $row["cont_mode"],
         "cont_type" => $row["cont_type"],
         "house_ref" => $row["house_ref"],
         "master_ref" => $row["master_ref"],
         "job_ref" => $row["job_ref"],
         "job_type" => $row["job_type"],
         "trans_mode" => $row["trans_mode"],
         "vessel" => $row["vessel"],
         "voyage" => $row["voyage"],
         "unpack_loco" => $row["unpack_unloco"],
         "disc_port_name" => $row["disch_port_unloco_translation"],
         "disc_port_code" => $row["disch_port"],
         "cw_eta" => $row["eta"],
         "time_slot" => $row["time_slot"],
         "cartage_advise_issued" => $row["cartage_advice_issued"],
         "cartage_company_code" => $row["cartage_company_code"],
         "cartage_company_name" => $row["cartage_company_name"],
         "estimated_delivery" => $row["estimated_delivery"],
         "actual_delivery" => $row["actual_delivery"],
         "deliver_to_organisation" => $row["deliver_to_organization"],
         "container_detention_starts" => $row["container_detention_starts"],
         "empty_ready" => $row["empty_ready"],
         "empty_returned" => $row["empty_returned"],
         "days_away_from_cw_eta_to_avalibility" => $row["days_from_eta_to_availability"],
         "days_to_return_by_date" => $row["days_to_return_by_date"],
         "days_past_empty_return_date" => $row["days_past_empty_return_date"],
        ]);
        
    }
}
