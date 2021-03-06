<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Meta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meta', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->uuid('object_id')->collation('ascii_bin');
            $table->string('key', 255);
            $table->longText('value');
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->unique(['object_id', 'key']);
            // $table->index(['object_id', 'key', 'value(255)']);
            $table->foreign('object_id')->references('id')->on('registry')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
        DB::statement('CREATE INDEX full_meta_index ON `meta` (`object_id`, `key`, `value`(255));');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $tables = [
            'meta'
        ];
        Schema::table('meta', function($table) {
            $table->dropIndex('full_meta_index');
        });
        foreach ($tables as $table) {
            if (Schema::hasTable($table)) {
                Schema::drop($table);
            }
        }
    }
}
