<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargowiseImportLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'uploaded_by',
        'upload_type',
        'upload_date',
        'upload_status',
    ];

    // data import relationship
    public function upload_data()
    {
        return $this->hasMany(CargowiseDataImport);
    }

     // data import relationship
    public function validated_data()
    {
        return $this->hasMany(CargowiseValidatedImport);
    }
}
