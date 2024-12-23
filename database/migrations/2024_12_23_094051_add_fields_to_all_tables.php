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
        Schema::table('categories', function (Blueprint $table) {
            $table->string('image');
            $table->string('name');
            $table->string('slug');
        });

        Schema::table('boarding_houses', function (Blueprint $table) {
            $table->string('name');
            $table->string('slug');
            $table->string('thumbnail');
            $table->foreignId('city_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->text('description');
            $table->integer('price');
            $table->text('address');
        });

        Schema::table('rooms', function (Blueprint $table) {
            $table->foreignId('boarding_house_id')->constained();
            $table->string('name');
            $table->string('room_type');
            $table->integer('square_feet');
            $table->integer('price_per_month');
            $table->boolean('is_available');
        });

        Schema::table('room_images', function (Blueprint $table) {
            $table->foreignId('room_id')->constrained();
            $table->string('image');
        });

        Schema::table('bonuses', function (Blueprint $table) {
            $table->foreignId('boarding_house_id')->constrained();
            $table->string('image');
            $table->string('name');
            $table->string('description');
        });

        Schema::table('testimonials', function (Blueprint $table) {
            $table->foreignId('boarding_house_id')->constrained();
            $table->string('photo');
            $table->string('content');
            $table->integer('rating');
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->string('code');
            $table->foreignId('boarding_house_id')->constrained();
            $table->foreignId('room_id')->constrained();
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->enum('payment_method', ['down_payment', 'full_payment'])->nullable();
            $table->string('payment_status')->nullable();
            $table->date('start_date');
            $table->integer('duration');
            $table->integer('total_amount')->nullable();
            $table->date('transaction_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('image');
            $table->string('name');
            $table->string('slug');
        });

        Schema::table('boarding_houses', function (Blueprint $table) {
            $table->string('name');
            $table->string('slug');
            $table->string('thumbnail');
            $table->foreignId('city_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->text('description');
            $table->integer('price');
            $table->text('address');
        });

        Schema::table('rooms', function (Blueprint $table) {
            $table->foreignId('boarding_house_id')->constained();
            $table->string('name');
            $table->string('room_type');
            $table->integer('square_feet');
            $table->integer('price_per_month');
            $table->boolean('is_available');
        });

        Schema::table('room_images', function (Blueprint $table) {
            $table->foreignId('room_id')->constrained();
            $table->string('image');
        });

        Schema::table('bonuses', function (Blueprint $table) {
            $table->foreignId('boarding_house_id')->constrained();
            $table->string('image');
            $table->string('name');
            $table->string('description');
        });

        Schema::table('testimonials', function (Blueprint $table) {
            $table->foreignId('boarding_house_id')->constrained();
            $table->string('photo');
            $table->string('content');
            $table->integer('rating');
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->string('code');
            $table->foreignId('boarding_house_id')->constrained();
            $table->foreignId('room_id')->constrained();
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->enum('payment_method', ['down_payment', 'full_payment'])->nullable();
            $table->string('payment_status')->nullable();
            $table->date('start_date');
            $table->integer('duration');
            $table->integer('total_amount')->nullable();
            $table->date('transaction_date')->nullable();
        });
    }
};
