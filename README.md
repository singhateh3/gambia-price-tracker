## Live Demo

- Frontend: https://your-vercel-app.vercel.app
- API: https://gambia-price-tracker-api.onrender.com

# Gambia Crop Price Tracker

A full-stack web application that displays real-time crop prices across major markets in The Gambia. Built to help farmers and traders make informed decisions without having to travel between markets.

---

## The Problem

Most farmers in The Gambia sell at whatever price a middleman offers because they have no visibility into what prices look like in other markets. This app solves that by showing weekly crop prices across Serrekunda, Brikama, Farafenni, and Basse markets in one place.

---

## Tech Stack

| Layer             | Technology                 |
| ----------------- | -------------------------- |
| Backend           | Laravel 12 (PHP)           |
| Database          | MySQL                      |
| Frontend          | React + Vite               |
| Styling           | Tailwind CSS v4            |
| Charts            | Chart.js + react-chartjs-2 |
| API Communication | Axios                      |

---

## Project Structure

```
gambia-price-tracker/          ← Laravel backend
├── app/
│   ├── Http/Controllers/Api/
│   │   └── PriceController.php
│   └── Models/
│       ├── Crop.php
│       ├── Market.php
│       └── Price.php
├── database/
│   ├── migrations/
│   │   ├── create_markets_table.php
│   │   ├── create_crops_table.php
│   │   └── create_prices_table.php
│   └── seeders/
│       ├── MarketSeeder.php
│       ├── CropSeeder.php
│       └── PriceSeeder.php
├── routes/
│   └── api.php
└── config/
    └── cors.php

gambia-price-tracker-frontend/ ← React frontend
├── src/
│   ├── api/
│   │   └── index.js
│   ├── components/
│   │   ├── PriceTable.jsx
│   │   ├── BarChart.jsx
│   │   └── LineChart.jsx
│   ├── pages/
│   │   └── Home.jsx
│   └── App.jsx
└── vite.config.js
```

---

## Database Schema

### markets

| Column                  | Type      | Description                          |
| ----------------------- | --------- | ------------------------------------ |
| id                      | bigint    | Primary key                          |
| name                    | string    | Market name (e.g. Serrekunda Market) |
| region                  | string    | Region in Gambia                     |
| created_at / updated_at | timestamp | Auto-managed                         |

### crops

| Column                  | Type      | Description                       |
| ----------------------- | --------- | --------------------------------- |
| id                      | bigint    | Primary key                       |
| name                    | string    | Crop name (e.g. Groundnut)        |
| unit                    | string    | Unit of measurement (e.g. per kg) |
| created_at / updated_at | timestamp | Auto-managed                      |

### prices

| Column                  | Type          | Description                 |
| ----------------------- | ------------- | --------------------------- |
| id                      | bigint        | Primary key                 |
| crop_id                 | foreign key   | References crops table      |
| market_id               | foreign key   | References markets table    |
| amount                  | decimal(10,2) | Price in GMD                |
| recorded_at             | date          | Date the price was observed |
| created_at / updated_at | timestamp     | Auto-managed                |

---

## API Endpoints

| Method | Endpoint             | Description                                     |
| ------ | -------------------- | ----------------------------------------------- |
| GET    | /api/crops           | Returns all crops                               |
| GET    | /api/markets         | Returns all markets                             |
| GET    | /api/prices          | Returns all prices with crop and market details |
| GET    | /api/prices/{cropId} | Returns prices for a specific crop              |

### Example Response — GET /api/prices/1

```json
[
    {
        "id": 1,
        "crop_id": 1,
        "market_id": 1,
        "amount": "50.00",
        "recorded_at": "2026-04-03",
        "crop": {
            "id": 1,
            "name": "Groundnut",
            "unit": "per kg"
        },
        "market": {
            "id": 1,
            "name": "Serrekunda Market",
            "region": "West Coast Region"
        }
    }
]
```

---

## Getting Started

### Requirements

- PHP 8.2+
- Composer
- Node.js 18+
- MySQL

### Backend Setup

```bash
# Clone and install dependencies
composer create-project laravel/laravel gambia-price-tracker
cd gambia-price-tracker

# Configure your .env file
DB_CONNECTION=mysql
DB_DATABASE=gambia_price_tracker
DB_USERNAME=root
DB_PASSWORD=your_password

# Install API routes and Sanctum
php artisan install:api

# Run migrations and seed data
php artisan migrate --seed

# Start the server
php artisan serve
```

### Frontend Setup

```bash
# Create React app
npm create vite@latest gambia-price-tracker-frontend -- --template react
cd gambia-price-tracker-frontend

# Install dependencies
npm install axios chart.js react-chartjs-2
npm install tailwindcss @tailwindcss/vite

# Start the dev server
npm run dev
```

The app will be available at `http://localhost:5173`

---

## Features

- View current crop prices across all 4 major Gambian markets
- Filter prices by crop using a dropdown selector
- Bar chart comparing prices across markets for any selected crop
- Line chart showing price trends over time
- Mobile-responsive layout

---

## Markets Covered

- Serrekunda Market — Kanifing Municipality
- Brikama Market — West Coast Region
- Farafenni Market — North Bank Region
- Basse Market — Upper River Region

## Crops Tracked

- Groundnut
- Millet
- Maize
- Rice
- Onion

---

## Roadmap

- [ ] Admin panel with JWT authentication (Phase 3)
- [ ] Price submission form for market reporters
- [ ] SMS/WhatsApp price alerts
- [ ] Community submissions with moderation
- [ ] Mobile app (React Native)

---

## Author

Built by Ebrima Singhateh, a junior developer based in Serrekunda, The Gambia.  
A civic-tech project aimed at empowering farmers and traders with market information.
