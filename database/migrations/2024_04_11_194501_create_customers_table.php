<?php

use App\Models\User;
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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'first_name', length: 255);
            $table->string(column: 'last_name', length: 255);
            $table->string(column: 'email', length: 255);
            $table->string(column: 'phone', length: 255);
            $table->string(column: 'status', length: 45)->nullable();
            $table->foreignIdFor(model: User::class, column: 'created_by')->nullable();
            $table->foreignIdFor(model: User::class, column: 'updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
