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
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('address', 100);
            $table->string('reference', 100)->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->unsignedBigInteger('country_id')->default(173);
            $table->char('ubigeo_code', 6)->default('000000');
            $table->boolean('is_active')->default(1);
            $table->timestamps();

            // Indexes
            $table->fulltext(['name', 'address', 'reference'], 'idx_full_name');

            // Foreign keys
            $table->foreign('country_id')->references('id')->on('countries')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ubigeo_code')->references('code')->on('ubigeos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};
