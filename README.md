https://documenter.getpostman.com/view/42740215/2sBXqCQ4Xq# 🛒 E-Commerce Laravel API

![Laravel](https://img.shields.io/badge/Laravel-API-red)
![PHP](https://img.shields.io/badge/PHP-8.x-blue)
![License](https://img.shields.io/badge/License-MIT-green)

---

## 📌 Overview
A RESTful API built with **Laravel** for an e-commerce system.  
Supports multiple roles:

- 👤 Users  
- 🛍️ Traders  
- 🚚 Delivery  
- 🛠️ Admin  

Handles products, orders, categories, notifications, and authentication.

---

## ⚙️ Features
- 🔐 Authentication (Register / Login / Verify)
- 📦 Product Management
- 🧾 Order System
- 🛍️ Trader System
- 🚚 Delivery Management
- 🔔 Notifications
- 🛠️ Admin Approval

---

## 🛠️ Installation

```bash
git clone https://github.com/ahmedsamy00-sa/ZH-Store-api
cd your-repo
composer install
cp .env.example .env
php artisan key:generate

⚙️ Configure Database
DB_DATABASE=your_db
DB_USERNAME=root
DB_PASSWORD=

php artisan migrate
php artisan serve

🔐 Authentication

Using Laravel Sanctum

Authorization: Bearer {token}

📡 API Endpoints

👤 User:
| Method | Endpoint                  | Description     |
| ------ | ------------------------- | --------------- |
| GET    | /api/                     | Get all users   |
| GET    | /api/getUsers/{id}        | Admin users     |
| POST   | /api/register             | Register        |
| POST   | /api/login                | Login           |
| POST   | /api/verify/{id}          | Verify          |
| PUT    | /api/forget/{id}          | Forget password |
| PUT    | /api/reset/{id}           | Reset password  |
| GET    | /api/user/orders/{id}     | User orders     |
| GET    | /api/user/deliveries/{id} | User deliveries |


📦 Product
| Method | Endpoint            | Description    |
| ------ | ------------------- | -------------- |
| GET    | /api/product        | All products   |
| GET    | /api/product/{id}   | Single product |

🧾 Order
| Method | Endpoint               | Description  |
| ------ | ---------------------- | ------------ |
| GET    | /api/order             | All orders   |
| GET    | /api/order/{id}        | Single order |
| POST   | /api/order/create/{id} | Create order |

🗂️ Category
| Method | Endpoint             | Description     |
| ------ | -------------------- | --------------- |
| GET    | /api/category        | All categories  |
| GET    | /api/category/{id}   | Single category |
| POST   | /api/category/create | Create category |

🛍️ Trader
| Method | Endpoint                    | Description       |
| ------ | --------------------------- | ----------------- |
| GET    | /api/trader                 | All traders       |
| POST   | /api/trader/add             | Add trader        |
| POST   | /api/trader/upload          | Upload product    |
| GET    | /api/trader/products/{id}   | Trader products   |
| GET    | /api/trader/orders/{id}     | Trader orders     |
| GET    | /api/trader/deliveries/{id} | Trader deliveries |

🚚 Delivery
| Method | Endpoint            | Description     |
| ------ | ------------------- | --------------- |
| GET    | /api/deliver        | All deliveries  |
| POST   | /api/deliver/create | Create delivery |

🔔 Notifications
| Method | Endpoint    | Description       |
| ------ | ----------- | ----------------- |
| GET    | /api/notify | All notifications |

🛠️ Admin
| Method | Endpoint                 | Description    |
| ------ | ------------------------ | -------------- |
| PATCH  | /api/trader/confirm/{id} | Confirm trader |

💬 Chat System
| Method | Endpoint              | Description               |
| ------ | --------------------- | ------------------------- |
| GET    | /api/conv             | All conversations         |
| POST   | /api/conv/create/{id} | Create conversation       |
| GET    | /api/message          | All messages              |
| GET    | /api/message/{id}     | Messages for conversation |
| POST   | /api/message/add/{id} | Send message              |

📩 Contact
| Method | Endpoint              | Description  |
| ------ | --------------------- | ------------ |
| GET    | /api/contact          | All messages |
| POST   | /api/contact/add/{id} | Add message  |

🖼️ Banner
| Method | Endpoint             | Description |
| ------ | -------------------- | ----------- |
| GET    | /api/banner          | All banners |
| POST   | /api/banner/add/{id} | Add banner  |

🎁 Offers & Coupons
| Method | Endpoint                  | Description         |
| ------ | ------------------------- | ------------------- |
| GET    | /api/offer                | All offers          |
| GET    | /api/offer/discounts/{id} | Discounted products |
| POST   | /api/offer/create/{id}    | Create offer        |
| GET    | /api/coupon               | All coupons         |
| POST   | /api/coupon/create/{id}   | Create coupon       |

🧪 Testing
Postman Documentation : https://documenter.getpostman.com/view/42740215/2sBXqCQ4Xq