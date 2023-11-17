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
        Schema::create('arsenals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tournament');
            $table->string('date');
            $table->string('oiling_lenght');
            $table->string('remarks');
            $table->string('atl_centre');
            $table->string('atl_track');
            $table->string('atl_outside');
            $table->string('btf_back');
            $table->string('btf_middle');
            $table->string('btf_front');
            $table->string('sanding');
            $table->string('polishing');
            $table->string('img');
            $table->foreignId('user_details_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arsenals');
    }
};
