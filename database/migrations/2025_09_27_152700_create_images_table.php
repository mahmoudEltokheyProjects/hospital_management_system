<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            // image name
            $table->string('image_name');
            // 'id' of 'model' such 'doctors' , 'patients' or ....
            $table->integer('imageable_id');
            // 'model name' of 'target image' that insert for : 'App\Models\Doctor' or 'App\Models\Patient' or ....
            $table->string('imageable_type');
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
        Schema::dropIfExists('images');
    }
};
