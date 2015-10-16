<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrenciesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            
            
             Schema::create('currencies', function(Blueprint $table) {

               //old thing
               /* $table->increments('id');  
                $table->string('code'); 
                $table->string('symbol');
                $table->string('unicode');
                $table->string('position');
                $table->string('comments');*/
               
                 /*'priority=>100',
                        'iso_code =>AED',
                        'name=>United Arab Emirates Dirham',
                        'symbol=>د.إ',
                        'subunit=>Fils',
                        'subunit_to_unit=>100',
                        'symbol_first=>true',
                        'html_entity=>',
                        'decimal_mark=>.',
                        'thousands_separator=>,',
                        'iso_numeric=>784'*/
                 $table->increments('id');
                 $table->integer('priority');
                 $table->string('iso_code');
                 $table->string('name');
                 $table->string('symbol');
                 $table->string('subunit');
                 $table->integer('subunit_to_unit');
                 $table->boolean('symbol_first');
                 $table->string('html_entity');
                 $table->string('decimal_mark');
                 $table->string('thousands_separator');
                 $table->integer('iso_numeric');
                 
                 
        
        });
 
            
        }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
