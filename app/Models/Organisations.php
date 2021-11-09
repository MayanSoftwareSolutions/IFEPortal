<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Model;

class Organisations extends Model
{
    use HasFactory;
    use Notifiable;
    use LogsActivity;

        protected $fillable = [
            'organisation_name',
            'organisation_code',
        ];

        // Activity Logging
        public function getActivitylogOptions(): LogOptions
        {
            return LogOptions::defaults()->logOnly([
            'organisation_name',
            'organisation_code',]);
        }

        protected static $recordEvents = ['created', 'updated', 'deleted'];

        protected static $logName = 'company';

        public function getDescriptionForEvent(string $eventName): string
        {
            return "{$eventName}";
        }

        protected static $logOnlyDirty = true;

        protected static $submitEmptyLogs = false;


        protected static $logAttributes = [
            'organisation_name',
            'organisation_code',
        ];

        //Users relationship
        public function users()
        {
            return $this->hasMany(User::class);
        }
}
