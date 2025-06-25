# Ecommerce App (Laravel 12)

This is the primary system in a multi-system login architecture. When a user logs in here, it automatically logs them into the `foodpanda-app` using a secure SSO token-based system.

## 🔧 Laravel Version

-   Laravel: **v12**

---

## 🚀 Setup Guide

### 1. Clone the Repository

```bash
git clone https://github.com/nrshagor/ecommerce-app.git
cd ecommerce-app
```

### 2. Install Dependencies

```bash
composer install
npm install
npm run build
```

### 3. Configure .env

```bash
cp .env.example .env
```

#### Update the following lines in .env:

```bash
APP_NAME=Ecommerce
APP_URL=http://ecommerce.local:8000

DB_CONNECTION=mysql
DB_DATABASE=ecommerce-app
DB_USERNAME=root
DB_PASSWORD=

SESSION_DOMAIN=.local
SESSION_COOKIE=shared_session

# Use same APP_KEY as foodpanda-app
APP_KEY=base64:YOUR_SHARED_APP_KEY

```

### 4. Generate Application Key

```bash
php artisan key:generate

```

##### ⚠️ Only generate once, then copy this APP_KEY into the other app’s .env

### 5. Run Migrations

```bash
php artisan migrate
```

### 6. Serve the App

```bash
php artisan serve --host=ecommerce.local --port=8000

```

##### Make sure ecommerce.local is mapped in your hosts file:

```bash
127.0.0.1 ecommerce.local
```

#### The hosts file on Windows is located here:

```bash
C:\Windows\System32\drivers\etc\hosts
```

#### Add these lines at the bottom:

```bash
127.0.0.1 ecommerce.local
127.0.0.1 foodpanda.local
```

### 🔐 Auth & SSO

-   When user logs in here, the app generates a token and opens foodpanda-app in a new tab.
-   The session cookie shared_session is used to maintain login state across both apps.

### ✅ Features

-   Login / Register
-   Dashboard with Go to Foodpanda button
-   Shared SSO session
-   Logout from both systems

### 🧪 Testing

-   Login at: http://ecommerce.local:8000/login
-   Dashboard auto-opens foodpanda login via secure SSO

### 📂 Related App

Be sure to set up Foodpanda App alongside this.
