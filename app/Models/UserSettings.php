<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class UserSettings extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable = [
        'user_id',
        'user_profile_widget',
        'user_activity_log_widget',
        'user_notifications',
    ];

    // Activity Logging
        public function getActivitylogOptions(): LogOptions
        {
            return LogOptions::defaults()->logOnly([
            'user_id',
            'user_profile_widget',
            'user_activity_log_widget',
            'user_notifications',
            ]);
        }

        protected static $recordEvents = ['created', 'updated', 'deleted'];

        protected static $logName = 'configuration';

        public function getDescriptionForEvent(string $eventName): string
        {
            return "{$eventName}";
        }

        protected static $logOnlyDirty = true;

        protected static $submitEmptyLogs = false;

        protected $dates = [
            'created_at',
            'updated_at'
        ];

        protected static $logAttributes = [
            'user_id',
            'user_profile_widget',
            'user_activity_log_widget',
            'user_notifications',
            'created_at',
            'updated_at',
        ];


    //Role Relationship
    public function users()
    {
        return $this->hasOne(UserSettings::class);
    }
}
