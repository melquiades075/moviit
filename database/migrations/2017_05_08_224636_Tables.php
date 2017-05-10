<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 
     */
    public function up()
    {

        Schema::create('clients', function (Blueprint $table) {
            
            $table->increments('id');
            
            $table->string('name',20);
            
            $table->timestamps();                        

        });

        Schema::create('technicians', function (Blueprint $table) {
            
            $table->increments('id');
            
            $table->string('name',20);

            $table->boolean('available');   
            
            $table->timestamps();                        

        });

        Schema::create('visits', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('clientId')->unsigned();

            $table->foreign('clientId')->references('id')->on('clients')
                  ->onUpdate('cascade')->onDelete('cascade');

            $table->integer('technicianId')->unsigned();   

            $table->foreign('technicianId')->references('id')->on('technicians')
                  ->onUpdate('cascade')->onDelete('cascade');
         
            $table->date('date'); 
         
            $table->decimal('waterUsage', 10, 2);    

            $table->decimal('electricityUsage', 10, 2);    
            
            $table->decimal('cost', 10, 2);    

            $table->timestamps();                        

        });


        Schema::create('requests', function (Blueprint $table) {
            
            $table->increments('id');
            
            $table->string('controller',20);

            $table->string('action',20);

            $table->longText('parameter');
            
            $table->timestamps();                        

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('visits');

        Schema::dropIfExists('clients');      

        Schema::dropIfExists('technicians');      

        Schema::dropIfExists('requests');      

    }
}
