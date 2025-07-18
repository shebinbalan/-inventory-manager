# 📦 Laravel Inventory Manager API & Web App

A simple inventory management system built with **Laravel 12**, featuring product CRUD operations, RESTful API endpoints, and a clean Bootstrap-based UI. Ideal for learning or small business use cases.

---

## 🚀 Features

✅ Product management (Add, Edit, Delete, List)  
✅ REST API (GET, POST, PUT, DELETE)  
✅ Bootstrap 5 UI – responsive design  
✅ Laravel Breeze authentication  
✅ Data seeding with demo product entries  
✅ Validations using Laravel form request  
✅ Postman-friendly JSON API  
✅ Git version controlled & open source

---

## 🛠️ Tech Stack

- **Backend:** Laravel 10 (PHP)
- **Frontend:** Blade, Bootstrap 5
- **Database:** MySQL
- **Auth:** Laravel Breeze (Login/Register)
- **API:** Laravel API Resource Routes
- **Testing:** Postman

---

## 📂 Project Structure

```bash
.
├── app/
├── routes/
│   ├── web.php
│   └── api.php
├── database/
│   ├── seeders/
│   └── migrations/
├── resources/
│   └── views/products/
├── public/
└── README.md
🔐 Authentication (UI only)
Uses Laravel Breeze (lightweight auth with Blade templates)

No API token auth yet (coming soon)

📮 API Endpoints
Method	Endpoint	Action
GET	/api/products	List all products
GET	/api/products/{id}	View one product
POST	/api/products	Create product
PUT	/api/products/{id}	Update product
DELETE	/api/products/{id}	Delete product

🧪 Test with Postman (use Accept: application/json header)

🧪 Sample POST Request (JSON)

{
  "name": "Test Product",
  "price": 999.99,
  "quantity": 10,
  "description": "Posted via API"
}
🧾 Installation & Setup

git clone https://github.com/shebinbalan/-inventory-manager.git
cd inventory-manager

composer install
cp .env.example .env
php artisan key:generate

# Update your .env DB credentials
php artisan migrate --seed

npm install && npm run dev
php artisan serve
Open in browser: http://127.0.0.1:8000

