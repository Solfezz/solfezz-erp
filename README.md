<div align="center">

# Solfezz ERP

**An open-source ERP platform in active development**

Built with Laravel 11, Vue 3, and Inertia.js · Scoped around manufacturing, warehousing, order processing, and shipment tracking

![Laravel](https://img.shields.io/badge/Laravel-11-FF2D20?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.3-777BB4?logo=php&logoColor=white)
![Vue.js](https://img.shields.io/badge/Vue.js-3-4FC08D?logo=vuedotjs&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8-4479A1?logo=mysql&logoColor=white)
![Status](https://img.shields.io/badge/status-early%20development-orange)

</div>

---

This is a long-running personal project, developed in the open. Features are implemented progressively rather than all at once.

## 📌 Current Status

> **Early development.** The current focus is establishing the data model for the core domains.

### ✅ Implemented

- Database schema and Eloquent models for core entities (products, inventory, orders, warehouses, shipments)
- Laravel 11 scaffolding with Breeze authentication
- Vite + Tailwind + Inertia.js frontend setup

### 🚧 In Progress / Upcoming

- Product and inventory management (controllers, views, business logic)
- Order processing workflow
- Warehouse operations
- Shipment tracking
- Reporting and analytics
- AI-assisted workflows

> The commit history reflects ongoing work. Nothing listed under "In Progress" should be assumed complete until the corresponding code lands.

---

## 🧭 Background

This project draws on a decade of production ERP development experience in e-commerce and dropship logistics — including work on inventory systems, EDI-based order automation, and warehouse workflows.

**Solfezz ERP** is a ground-up reimagining of those patterns on a modern Laravel 11 / Vue 3 / Inertia stack — designed, implemented, and released openly.

---

## 🗺️ Planned Scope

| Module | Description |
| --- | --- |
| 🔐 **Authentication & Users** | Role-based access control |
| 📦 **Product & Inventory** | Atomic-SKU + kit composition modeling |
| 🧾 **Order Processing** | Full order lifecycle tracking |
| 🏭 **Warehouse Management** | Receiving, picking, packing |
| 🚚 **Shipment Tracking** | Carrier integration and status |
| 📊 **Reporting & Analytics** | Operational dashboards |
| 🤖 **AI Integration** | Assisted workflows |

---

## 🛠️ Tech Stack

| Layer | Technology |
| --- | --- |
| **Backend** | Laravel 11, PHP 8.3 |
| **Database** | MySQL 8 |
| **Frontend** | Vue.js 3, Inertia.js, Tailwind CSS |
| **Auth** | Laravel Breeze |
| **Testing** | Pest |
| **Build** | Vite |

---

## 📋 Requirements

- PHP **8.2+**
- Composer **2.x**
- Node.js **20+**
- MySQL **8.0+**

---

## 🚀 Running Locally

> ⚠️ **Note:** The project is in early development. Running it locally will expose schema and scaffolding, but minimal working features until more modules are implemented.

```bash
# Clone the repository
git clone <repo-url>
cd solfezz-erp

# Install dependencies
composer install
npm install

# Environment setup
cp .env.example .env
php artisan key:generate

# Database
php artisan migrate

# Run development servers
npm run dev
php artisan serve
```

---

## 🤝 Contributing

This is primarily a personal portfolio and learning project. Issues and suggestions are welcome. Pull requests are accepted case-by-case as the architecture stabilizes.

---

## 📄 License

Released under the [MIT License](LICENSE).

---

<div align="center">

Built by [@solfezz](https://github.com/solfezz) · Part of an ongoing return to full-time engineering work

</div>
