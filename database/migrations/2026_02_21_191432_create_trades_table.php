<?php

use App\Models\Category;
use App\Models\Status;
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
        Schema::create('trades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uid')->unique();
            $table->string('link')->nullable();
            $table->boolean('isMethodAucDown')->comment('Метод аукциона: 0 - на повышение, 1 - на понижение')->default(0);
            $table->text('title_kk')->nullable();
            $table->text('title_ru')->nullable();
            $table->decimal('initialContractPrice', 15, 2)->nullable()->comment('Начальная цена договора');
            $table->decimal('minContractPrice', 15, 2)->nullable()->comment('Минимальная цена договора');
            $table->decimal('assuranceAmount', 15, 2)->nullable()->comment('Размер гарантийного взноса');
            $table->decimal('purchasePrice', 15, 2)->nullable()->comment('Цена заключенного договора');
            $table->text('description_kk')->nullable();
            $table->text('description_ru')->nullable();
            $table->foreignIdFor(Category::class)->nullable()->constrained()->nullOnDelete();
            $table->text('thumbnail')->nullable()->comment('Миниатюра картинки полная ссылка');
            $table->dateTime('registeredDate')->nullable()->comment('Дата регистрации');
            $table->dateTime('dateModified')->nullable()->comment('Дата изменения');
            $table->dateTime('bidSubmissionEndDate')->nullable()->comment('Дата окончания подачи заявок на участие в аукционе');
            $table->dateTime('tradeStartDate')->nullable()->comment('Дата начала аукциона');
            $table->foreignIdFor(Status::class)->nullable()->constrained()->nullOnDelete();
            $table->boolean('isProcessed')->default(false)->index()->comment('Флаг обработки аукциона');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trades');
    }
};
