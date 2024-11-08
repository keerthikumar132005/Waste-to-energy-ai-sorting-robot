# Setup Guide for Waste to Energy AI Sorting Robots

## Prerequisites

1. **PHP** (version 8.0 or later) and **Composer**
2. **Node.js** (version 14 or later) and **npm**
3. **MySQL** (or any compatible database)
4. **Redis** (for caching, optional)
5. **Vultr Cloud** (or another cloud provider for deployment)

## 1. Clone the Repository

Clone the repository to your local environment:

```bash
git clone https://github.com/keerthikumar132005/Waste-to-energy-ai-sorting-robot.git
cd project-root
```

## 2. Backend Setup
### 1. Install Composer dependencies:

```bash
cd src/backend
composer install
```

### 2. Configure Environment Variables:

-   Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
```
-   *Update .env with your database credentials, cache settings, and other environment-specific settings.*

###  3. Run Migrations:

-   *Set up the database tables by running migrations*:

```bash
php artisan migrate
```

### 4.  Run the Backend Server:

```bash
php artisan serve
```
## 3. Frontend Setup

### 1. Install npm dependencies:

```bash
cd src/frontend
npm install
```

### 2. Configure Environment Variables:

-   *If you’re using .env in the frontend, update it with the backend API URL.*

### 3. Build and Run the Frontend:

-   *For development*:

```bash
npm run dev
```

-   *For production*:

```bash
npm run build
```

### 4. Running Tests

-   *To run backend tests, use:*

```bash
php artisan test
```

-   *To run frontend tests, use:*

```bash
npm run test
```

### 5.  Deployment

-   *Deploy the backend to a cloud provider (e.g., Vultr or AWS).*
-   *Configure caching and logging for production settings.*
-   *Set up monitoring for error tracking (e.g., Sentry) and performance.*




