<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
{
Schema::create('superheroes', function (Blueprint $table) {
$table->bigIncrements('id');
$table->string('hero_name');
$table->string('secret_identity')->nullable();
$table->string('powers');
$table->string('power_catagory');
$table->string('origin');

});
}
public function down(): void
{
Schema::dropIfExists('superheroes');
}
};
