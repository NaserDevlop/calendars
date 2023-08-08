<?php
  
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
  
class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('serial-no');
            $table->integer('month');
            $table->integer('day');
            $table->string('title');
            $table->date('start-date');
            $table->date('end-date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->text('info');
            $table->text('note');
            $table->boolean('has_email')->default(0);
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
        Schema::dropIfExists('events');
    }
}