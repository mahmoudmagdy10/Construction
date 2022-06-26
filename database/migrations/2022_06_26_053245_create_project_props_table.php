<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectPropsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_props', function (Blueprint $table) {
            $table->increments('id');
            $table->double('PREDICTION',8,5);
            $table->string('OverallQual', 100);
            $table->string('Neighborhood', 100);
            $table->integer('GrLivArea',20);
            $table->integer('GarageCars',20);
            $table->string('BsmtQual', 100);
            $table->string('ExterQual', 100);
            $table->integer('GarageArea',20);
            $table->string('KitchenQual', 100);
            $table->integer('YearBuilt',20);
            $table->integer('TotalBsmtSF',20);
            $table->integer('FirstFlrSF',20);
            $table->string('GarageFinish', 100);
            $table->integer('FullBath',20);
            $table->integer('YearRemodAdd',20);
            $table->string('GarageType', 100);
            $table->string('FireplaceQu', 100);
            $table->string('Foundation', 100);
            $table->string('MSSubClass', 100);
            $table->integer('TotRmsAbvGrd',20);
            $table->integer('Fireplaces',20);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->index('project_id ');
            $table->index('user_id');
            $table->foreign('project_id')->references('id')->on('projects')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_props');
    }
}
