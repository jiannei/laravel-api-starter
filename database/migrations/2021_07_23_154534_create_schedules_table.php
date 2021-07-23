<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Config::get('schedule.table', 'schedules'), function (Blueprint $table) {
            $table->id();
            $table->string('description')->default('');
            $table->string('command')->default('');
            $table->string('parameters')->nullable();
            $table->string('expression')->default('');
            $table->boolean('active')->default(false);
            $table->string('timezone');
            $table->json('environments')->nullable();
            $table->unsignedInteger('without_overlapping')->default(0);
            $table->boolean('on_one_server')->default(false);
            $table->boolean('in_background')->default(false);
            $table->boolean('in_maintenance_mode')->default(false);
            $table->string('output_file_path')->nullable();
            $table->boolean('output_append')->default(false);
            $table->string('output_email')->nullable();
            $table->boolean('output_email_on_failure')->default(false);
            $table->timestamps();

            $table->index('active');
            $table->index('command');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('schedule.table', 'schedules'));
    }
}
