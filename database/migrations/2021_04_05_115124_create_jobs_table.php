<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 *
 * Job Class
 * ============
 * EFJF : estimated vars below (for full notes see /App/Job.php)
 * jobDetailsUrl, unitNumber, jobLocationIdWithinSite, jobSiteName, jobAddressLineOne, jobAddressLineTwo, jobAddressCity, jobAddressCounty, jobAddressPostCode, jobStatus, jobEvidenceImageId, 
 *
 */

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            // ESJF our vars
            $table->string('jobDetailsUrl');
            $table->string('unitNumber');
            $table->string('jobLocationIdWithinSite');
            $table->string('jobSiteName');
            $table->string('jobAddressLineOne');
            $table->string('jobAddressLineTwo');
            $table->string('jobAddressCity');
            $table->string('jobAddressCounty');
            $table->string('jobAddressPostCode');
            $table->string('jobStatus');
            $table->integer('jobEvidenceImageId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
