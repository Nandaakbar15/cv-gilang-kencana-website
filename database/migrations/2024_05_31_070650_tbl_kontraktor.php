<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Tbl_Kontraktor', function (Blueprint $table) {
            $table->id("id_kontraktor");
            $table->string("nama");
            $table->string("email")->unique();
            $table->string("no_telp");
            $table->string("specialist");
            $table->string("foto");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Tbl_Kontraktor');
    }
};
