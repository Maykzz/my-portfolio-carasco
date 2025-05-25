#!/bin/bash

echo "🚀 Starting Laravel deployment on Railway..."

# Install composer dependencies
echo "📦 Installing dependencies..."
composer install --no-dev --optimize-autoloader

# Clear any existing caches
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

# Generate application key if not set
if [ -z "$APP_KEY" ]; then
    echo "⚠️  Generating application key..."
    php artisan key:generate --force
fi

# Run database migrations
echo "📦 Running database migrations..."
php artisan migrate --force

# Optimize Laravel for production
echo "⚡ Optimizing Laravel for production..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Create storage link for images
echo "🔗 Creating storage link..."
php artisan storage:link

echo "✅ Laravel deployment completed successfully!"
