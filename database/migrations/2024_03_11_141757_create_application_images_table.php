<?php

use App\Models\Application;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('application_images', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Application::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('status', ['Выполнено', 'В процессе', 'Отклонено', 'Создано']);
            $table->string('color', 50)->default('#fff');
            $table->string('background', 50)->default('#009999');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('application_images');
    }
};