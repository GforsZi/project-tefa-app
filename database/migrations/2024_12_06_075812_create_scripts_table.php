<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create("scripts", function (Blueprint $table) {
      $table->id();
      $table
        ->foreignId("user_id")
        ->constrained(table: "users", indexName: "BY_user_id");
      $table->string("name_script");
      $table->string("file");
      $table->string("caption")->nullable();
      $table->string("description")->nullable();
      $table->integer("likes")->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists("scripts");
  }
};
