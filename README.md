# Solfezz ERP

A full-scale open source ERP platform built with Laravel 11, 
Vue.js 3, and Inertia.js — covering manufacturing tracking, 
warehouse management, order processing, and shipment tracking.

## Tech Stack

- **Backend:** Laravel 11, PHP 8.3, MySQL
- **Frontend:** Vue.js 3, Inertia.js, Tailwind CSS
- **Auth:** Laravel Breeze
- **Testing:** Pest
- **Build:** Vite

## Modules

- [ ] Authentication & User Management
- [ ] Product & Inventory Management
- [ ] Order Processing & Tracking
- [ ] Warehouse Management
- [ ] Shipment Tracking
- [ ] Reporting & Analytics
- [ ] AI Integration

## Requirements

- PHP 8.2+
- Composer 2.x
- Node.js 20+
- MySQL 8.0+

## Installation
```bash
# Clone the repository
git clone https://github.com/solfezz/solfezz-erp.git
cd solfezz-erp

# Install PHP dependencies
composer install

# Install NPM dependencies
npm install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure your database in .env then run migrations
php artisan migrate

# Start development servers
php artisan serve
npm run dev
```

## License

MIT License — see LICENSE file for details.
