<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Users Table
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->string('phone_number', 20)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->text('address')->nullable();
            $table->enum('role', ['user', 'merchant'])->default('user');
            $table->string('business_name')->nullable();
            $table->text('business_address')->nullable();
            $table->timestamps();
        });

        // Categories Table
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('image_url');
            $table->timestamps();
        });

        // Products Table
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('image_url');
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->bigInteger('discounted_price')->nullable();
            $table->integer('stock');
            $table->integer('viewcount');
            $table->integer('stars');
            $table->foreignId('category_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });

        // Addresses Table
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->text('address');
            $table->string('city');
            $table->string('state');
            $table->string('postal_code', 20);
            $table->string('country', 100);
            $table->timestamps();
        });

        // Cache Table
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->mediumText('value');
            $table->integer('expiration');
        });

        // Cache Locks Table
        Schema::create('cache_locks', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->string('owner');
            $table->integer('expiration');
        });

        // Failed Jobs Table
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });

        // Hero Table
        Schema::create('hero', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->text('image_url');
        });

        // Jobs Table
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('queue')->index();
            $table->longText('payload');
            $table->unsignedTinyInteger('attempts');
            $table->unsignedInteger('reserved_at')->nullable();
            $table->unsignedInteger('available_at');
            $table->unsignedInteger('created_at');
        });

        // Job Batches Table
        Schema::create('job_batches', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name');
            $table->integer('total_jobs');
            $table->integer('pending_jobs');
            $table->integer('failed_jobs');
            $table->longText('failed_job_ids');
            $table->mediumText('options')->nullable();
            $table->integer('cancelled_at')->nullable();
            $table->integer('created_at');
            $table->integer('finished_at')->nullable();
        });

        // Orders Table
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('user_order_id');
            $table->decimal('total_price', 10, 2)->nullable();
            $table->string('status', 50);
            $table->timestamps();
            
            $table->foreign('user_order_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

        // Order Items Table
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->integer('quantity');
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });

        // Merchant Payments Table
        Schema::create('merchant_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('order_id')->constrained();
            $table->decimal('amount', 10, 2);
            $table->string('status', 50);
            $table->timestamps();
        });

        // Merchant Reviews Table
        Schema::create('merchant_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->unsignedBigInteger('merchant_id');
            $table->integer('rating');
            $table->text('comment');
            $table->timestamps();
            
            $table->foreign('merchant_id')->references('id')->on('users');
        });

        // Password Reset Tokens Table
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        // Payments Table
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained();
            $table->string('payment_method', 100);
            $table->decimal('amount', 10, 2);
            $table->string('status', 50);
            $table->timestamps();
        });

        // Personal Access Tokens Table
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->morphs('tokenable');
            $table->string('name');
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
        });

        // Posts Table
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('image_url');
            $table->text('text');
        });

        // Recommendation Table
        Schema::create('recomendation', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->foreignId('product_id')->constrained()->onDelete('no action')->onUpdate('no action');
        });

        // Reviews Table
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->integer('rating');
            $table->text('comment');
            $table->timestamps();
        });

        // Sessions Table
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        // Shopping Cart Table
        Schema::create('shopping_cart', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->integer('quantity')->default(1);
            $table->timestamps();
        });

        // Website Settings Table
        Schema::create('website_settings', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->text('description');
            $table->string('phone_number', 14);
        });

        // Website Person Table
        Schema::create('website_person', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->text('name');
            $table->text('image_url');
            $table->bigInteger('website_setting_id');
            
            $table->foreign('website_setting_id')->references('id')->on('website_settings')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop tables in reverse order to avoid foreign key constraints issues
        Schema::dropIfExists('website_person');
        Schema::dropIfExists('website_settings');
        Schema::dropIfExists('shopping_cart');
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('reviews');
        Schema::dropIfExists('recomendation');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('personal_access_tokens');
        Schema::dropIfExists('payments');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('merchant_reviews');
        Schema::dropIfExists('merchant_payments');
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('job_batches');
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('hero');
        Schema::dropIfExists('failed_jobs');
        Schema::dropIfExists('cache_locks');
        Schema::dropIfExists('cache');
        Schema::dropIfExists('addresses');
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('users');
    }
};