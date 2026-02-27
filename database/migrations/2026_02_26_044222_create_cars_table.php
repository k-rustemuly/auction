<?php

use App\Models\CarModel;
use App\Models\Color;
use App\Models\EngineType;
use App\Models\Mark;
use App\Models\Status;
use App\Models\Trade;
use App\Models\TransmissonType;
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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Trade::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Status::class)->constrained();
            $table->foreignIdFor(Mark::class)->constrained();
            $table->foreignIdFor(CarModel::class)->constrained();
            $table->year('year')->nullable();
            $table->unsignedInteger('mileage')->nullable()->comment('Пробег');
            $table->decimal('engine_capacity', 3, 1)->nullable();
            $table->foreignIdFor(EngineType::class)->nullable()->constrained();
            $table->foreignIdFor(TransmissonType::class)->nullable()->constrained();
            $table->foreignIdFor(Color::class)->nullable()->constrained();
            $table->string('vin')->nullable();
            $table->boolean('is_method_auc_down')->comment('Метод аукциона: 0 - на повышение, 1 - на понижение')->default(0);
            $table->text('title_kk')->nullable();
            $table->text('title_ru')->nullable();
            $table->decimal('initial_contract_price', 15, 2)->nullable()->comment('Начальная цена договора');
            $table->decimal('min_contract_price', 15, 2)->nullable()->comment('Минимальная цена договора');
            $table->decimal('assurance_amount', 15, 2)->nullable()->comment('Размер гарантийного взноса');
            $table->decimal('purchased_price', 15, 2)->nullable()->comment('Цена заключенного договора');
            $table->text('thumbnail')->nullable()->comment('Миниатюра картинки полная ссылка');
            $table->dateTime('registered_date')->nullable()->comment('Дата регистрации');
            $table->dateTime('bid_submission_end_date')->nullable()->comment('Дата окончания подачи заявок на участие в аукционе');
            $table->dateTime('start_date')->nullable()->comment('Дата начала аукциона');
            $table->unsignedBigInteger('viewed_count')->default(0);
            $table->unsignedBigInteger('added_to_favorites_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
