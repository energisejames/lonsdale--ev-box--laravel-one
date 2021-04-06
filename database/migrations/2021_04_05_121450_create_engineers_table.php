<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 *
 * Engineer Class
 * ============
 * EFJF : estimated vars below (for full notes see /App/Engineer.php)
 * engineerFirstName, engineerLastName, engineerCompanyName, engineerEmail, engineerCompanyRegNumber, engineerVatNumber, engineerAddressLineOne, engineerAddressLineTwo, engineerAddressCity, engineerAddressCounty, engineerAddressPostCode, engineerQualificationId
 *
 */

class CreateEngineersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engineers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            // ESJF our vars
            $table->string('engineerFirstName');
            $table->string('engineerLastName');
            $table->string('engineerCompanyName');
            $table->string('engineerEmail');
            $table->string('engineerCompanyRegNumber');
            $table->string('engineerVatNumber');
            $table->string('engineerAddressLineOne');
            $table->string('engineerAddressLineTwo');
            $table->string('engineerAddressCity');
            $table->string('engineerAddressCounty');
            $table->string('engineerAddressPostCode');
            $table->integer('engineerQualificationId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('engineers');
    }
}
