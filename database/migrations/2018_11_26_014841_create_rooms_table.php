<?php
    
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;
    
    class CreateRoomsTable extends Migration
    {
        public function up()
        {
            Schema::create('rooms', function (Blueprint $table) {
                           $table->unsignedInteger('id')->unique();
                           $table->string('name');
                           $table->string('created_by_id');
                           $table->boolean('private')->default(true);
                           $table->string('created_at');
                           $table->string('updated_at');
                           });
        }
        
        public function down()
        {
            Schema::dropIfExists('rooms');
        }
    }
