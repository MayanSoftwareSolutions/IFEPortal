<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CargowiseDataImport;
use App\Models\CargowiseValidatedImport;
use App\Models\CargowiseImportLog;
use App\Imports\CWDataImport;
use Illuminate\Support\Facades\Auth;
use Excel;

class ImportController extends Controller
{

    public function create()
    {
        return view('import.create');
    }

   public function import(Request $request)
    {
            $createLog = CargowiseImportLog::create([
            'uploaded_by' => Auth::user()->name,
            'upload_type' => 'manually uploaded',
            'upload_date' => now(),
            'upload_status' => 'complete',
        ]);

        Excel::import(new CWDataImport, $request->file);
        
        $importedData = CargowiseDataImport::get();
        $validatedData = CargowiseValidatedImport::get();

        if($validatedData->count() > 0)
        {
            foreach( $importedData as $import)
            {
                foreach($validatedData->where('client_code', $import->client_code) as $valid)
                {
                     if($valid->cw_eta != $import->cw_eta)
                        {
                            $valid->update([
                                'cw_eta' => $import->cw_eta
                            ]);
                        }
                }

                foreach($validatedData->whereNotIn('client_code', $import->client_code) as $valid)
                {
                    $valid->create([
                        "cargowise_import_logs_id" => $data->cargowise_import_logs_id,
                        "transfer_timestamp" => now(),
                        "client_code"  => $data->client_code,
                        "container_no" => $data->container_no,
                        "cont_mode" => $data->cont_mode,
                        "cont_type" => $data->cont_type,
                        "house_ref" => $data->house_ref,
                        "master_ref" => $data->master_ref,
                        "job_ref" => $data->job_ref,
                        "job_type" => $data->job_type,
                        "trans_mode" => $data->trans_mode,
                        "vessel" => $data->vessel,
                        "voyage" => $data->voyage,
                        "unpack_loco" => $data->unpack_loco,
                        "disc_port_name" => $data->disc_port_name,
                        "disc_port_code" => $data->disc_port_code,
                        "cw_eta" => $data->cw_eta,
                        "time_slot" => $data->time_slot,
                        "cartage_advise_issued" => $data->cartage_advise_issued,
                        "cartage_company_code" => $data->cartage_company_code,
                        "cartage_company_name" => $data->cartage_company_name,
                        "estimated_delivery" => $data->estimated_delivery,
                        "actual_delivery" => $data->actual_delivery,
                        "deliver_to_organisation" => $data->deliver_to_organisation,
                        "container_detention_starts" => $data->container_detention_starts,
                        "empty_ready" => $data->empty_ready,
                        "empty_returned" => $data->empty_returned,
                        "days_away_from_cw_eta_to_avalibility" => $data->days_away_from_cw_eta_to_avalibility,
                        "days_to_return_by_date" => $data->days_to_return_by_date,
                        "days_past_empty_return_date" => $data->days_past_empty_return_date,
                    ]);
                }
            }
            }
            else
            {
                foreach($validatedData->whereNotIn('client_code', $importedData->client_code) as $valid)
                {
                    $valid->create([
                        "cargowise_import_logs_id" => $data->cargowise_import_logs_id,
                        "transfer_timestamp" => now(),
                        "client_code"  => $data->client_code,
                        "container_no" => $data->container_no,
                        "cont_mode" => $data->cont_mode,
                        "cont_type" => $data->cont_type,
                        "house_ref" => $data->house_ref,
                        "master_ref" => $data->master_ref,
                        "job_ref" => $data->job_ref,
                        "job_type" => $data->job_type,
                        "trans_mode" => $data->trans_mode,
                        "vessel" => $data->vessel,
                        "voyage" => $data->voyage,
                        "unpack_loco" => $data->unpack_loco,
                        "disc_port_name" => $data->disc_port_name,
                        "disc_port_code" => $data->disc_port_code,
                        "cw_eta" => $data->cw_eta,
                        "time_slot" => $data->time_slot,
                        "cartage_advise_issued" => $data->cartage_advise_issued,
                        "cartage_company_code" => $data->cartage_company_code,
                        "cartage_company_name" => $data->cartage_company_name,
                        "estimated_delivery" => $data->estimated_delivery,
                        "actual_delivery" => $data->actual_delivery,
                        "deliver_to_organisation" => $data->deliver_to_organisation,
                        "container_detention_starts" => $data->container_detention_starts,
                        "empty_ready" => $data->empty_ready,
                        "empty_returned" => $data->empty_returned,
                        "days_away_from_cw_eta_to_avalibility" => $data->days_away_from_cw_eta_to_avalibility,
                        "days_to_return_by_date" => $data->days_to_return_by_date,
                        "days_past_empty_return_date" => $data->days_past_empty_return_date,
                    ]);
                }
            }
    }


}
