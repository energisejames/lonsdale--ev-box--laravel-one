<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//use Eloquent;

/**
 * The Engineer Class is to represent a physical engineer
 *
 * Engineer Class Notes:
 * =====================
 * ESJF: They will have to ablility to apply for jobs 
 * we will store this in a relational (pivot) table called EngineerJob
 * EngineeerJob will be Many to Many
 * BECAUSE : One Engineer can apply for many jobs
 * AND : Many Engineers can apply for One Job
 * The Job Also contains an "assigned engineer id" for when one engineer is assigned
 * Although not strictly neccesary, this will make look-up logic simpler
 * and data recovery easier from the Database Direct
 *
 * LARAVEL EXPECTATION:
 * --------------------
 * ESJF: EngineerJob named alphabetically from the class names 
 * as per : https://laravel.com/docs/8.x/eloquent-relationships#many-to-many
 */

class Engineer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     
     * Engineer Sign Up Form:
     * ----------------------
     * ESJF: Jonathan said: initially collect:
     * firstName, lastName, companyName, country and email address
     *
     * Engineer Class (all vars needed) 
     * --------------------------------
     * ESJF : estimated total vars we will need... 
     * engineerFirstName, engineerLastName, engineerCompanyName, engineerEmail, engineerCompanyRegNumber, engineerVatNumber, engineerAddressLineOne, engineerAddressLineTwo, engineerAddressCity, engineerAddressCounty, engineerAddressPostCode, engineerQualificationId
     * Array ending in comma as per Laravel Best Practices code style
     */
    protected $fillable = [
        'engineerFirstName', 'engineerLastName', 'engineerCompanyName', 'engineerEmail', 'engineerCompanyRegNumber', 'engineerVatNumber', 'engineerAddressLineOne', 'engineerAddressLineTwo', 'engineerAddressCity', 'engineerAddressCounty', 'engineerAddressPostCode', 'engineerQualificationId', 
    ];
    
    // ESJF : Establishing Many to Many Relationship
    public function jobs() {
        // ESJF Laravel arguments as follows 
        // (should we need to override expected defaults)
        //return $this->belongsToMany('App\Job', 'engineer_job', 'engineer_id', 'job_id');
        // HOWEVER - we don't need to specify as we are already using expected defaults...
        return $this->belongsToMany('App\Job')->withTimestamps();
    }
    
    
    /*
    public function getPosts()
    {
        return $session->get('posts');
    }
    */
}





