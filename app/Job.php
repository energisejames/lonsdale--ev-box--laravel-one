<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * The Job Class is to represent a actual job (individual fix) of which there may be many at a physical location
 *
 * Job Class Notes:
 * =====================
 * ESJF: Engineers will have to ablility to apply for jobs 
 * we will store this in a relational (pivot) table called EngineerJob
 * EngineeerJob will be Many to Many
 * BECAUSE : One Engineer can apply for many jobs
 * AND : Many Engineers can apply for One Job
 * This Job Class Also contains an "assigned engineer id" for when one engineer is assigned
 * Although not strictly neccesary, this will make look-up logic simpler
 * and data recovery easier from the Database Direct
 *
 * LARAVEL EXPECTATION:
 * --------------------
 * ESJF: EngineerJob named alphabetically from the class names 
 * as per : https://laravel.com/docs/8.x/eloquent-relationships#many-to-many
 */

class Job extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     *
     *Job Class (all vars needed) 
     * --------------------------------
     * ESJF : estimated total vars we will need... 
     * jobDetailsUrl, unitNumber, jobLocationIdWithinSite, jobSiteName, jobAddressLineOne, jobAddressLineTwo, jobAddressCity, jobAddressCounty, jobAddressPostCode, jobStatus, jobEvidenceImageId, 
     * 
     * JobStatus allowed values:
     * sandbox, available,  requested_by_engineer, allocated_to_engineer, evidence_supplied, approved_by_lonsdale, payment_made
     */
    protected $fillable = [
        'jobDetailsUrl', 'unitNumber', 'jobLocationIdWithinSite', 'jobSiteName', 'jobAddressLineOne', 'obAddressLineTwo', 'jobAddressCity', 'jobAddressCounty', 'jobAddressPostCode', 'jobStatus', 'jobEvidenceImageId', 
    ];
    
    
    // ESJF : Establishing Many to Many Relationship
    public function engineers() {
        // ESJF Laravel arguments as follows 
        // (should we need to override expected defaults)
        //return $this->belongsToMany('App\Engineer', 'engineer_job', 'engineer_id', 'job_id');
        // HOWEVER - we don't need to specify as we are already using expected defaults...
        return $this->belongsToMany('App\Engineer')->withTimestamps();
    }
    
}







