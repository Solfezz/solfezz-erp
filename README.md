Solfezz ERP
An open-source ERP platform in active development, built with Laravel 11, Vue.js 3, and Inertia.js. Scoped around the real-world domain of manufacturing, warehousing, order processing, and shipment tracking.
This is a long-running personal project, developed in the open. Features are implemented progressively rather than all at once.
Current Status
Early development. The current focus is establishing the data model for the core domains.
Implemented

Database schema and Eloquent models for core entities (products, inventory, orders, warehouses, shipments)
Laravel 11 scaffolding with Breeze authentication
Vite + Tailwind + Inertia.js frontend setup

In progress / upcoming

Product and inventory management (controllers, views, business logic)
Order processing workflow
Warehouse operations
Shipment tracking
Reporting and analytics
AI-assisted workflows

The commit history reflects ongoing work. Nothing listed under "in progress" should be assumed complete until the corresponding code lands.
Background
The project draws on a decade of production ERP development experience in e-commerce and dropship logistics, including work on inventory systems, EDI-based order automation, and warehouse workflows. Solfezz ERP is a ground-up reimagining of those patterns on a modern Laravel 11 / Vue 3 / Inertia stack — designed, implemented, and released openly.
Planned Scope

Authentication and user management
Product and inventory management with atomic-SKU and kit composition modeling
Order processing and order lifecycle tracking
Warehouse management (receiving, picking, packing)
Shipment tracking integration
Reporting and analytics
AI integration for assisted workflows

Tech Stack

Backend: Laravel 11, PHP 8.3, MySQL 8
Frontend: Vue.js 3, Inertia.js, Tailwind CSS
Auth: Laravel Breeze
Testing: Pest
Build: Vite

Requirements

PHP 8.2+
Composer 2.x
Node.js 20+
MySQL 8.0+

Running Locally

Note: The project is in early development. Running it locally will expose schema and scaffolding but minimal working features until more modules are implemented.

bashgit clone <repo-url>
cd solfezz-erp
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run dev
php artisan serve
Contributing
This is primarily a personal portfolio and learning project. Issues and suggestions are welcome. Pull requests are accepted case-by-case as the architecture stabilizes.
License
[Add your chosen license — MIT is a reasonable default for personal open-source projects.]
MIT License — see LICENSE file for details.
