# Jobrecruita

Jobrecruita is a Laravel-based job portal application featuring AdminLTE v3.1.0 for the admin dashboard. It allows companies to post jobs, candidates to apply, and supports multiple payment gateways for premium features.

## Features

- Job posting and management
- Candidate registration and application
- Company profiles
- Flexible pricing plans and subscriptions
- Multiple payment gateways (PayPal, Stripe, Razorpay, Paystack, Flutterwave, Mollie, Instamojo, Midtrans, SSLCommerz)
- Admin dashboard with user and job management
- Responsive frontend

## Requirements

- PHP >= 7.3
- Composer
- Node.js & npm or Yarn
- MySQL or compatible database

## Installation

1. **Clone the repository**
   ```bash
   git clone <your-repo-url>
   cd jobrecruita
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install frontend dependencies**
   ```bash
   npm install
   npm run dev
   # or use yarn
   # yarn install
   # yarn dev
   ```

4. **Copy and configure environment file**
   - Copy `.env.example` to `.env`  
     On Windows:
     ```cmd
     copy .env.example .env
     ```
     On Linux/macOS:
     ```bash
     cp .env.example .env
     ```
   - Edit `.env` and set your database credentials and other environment variables.

5. **Generate application key**
   ```bash
   php artisan key:generate
   ```

6. **Run migrations**
   ```bash
   php artisan migrate
   ```

7. **(Optional) Seed the database**
   ```bash
   php artisan db:seed
   ```

8. **Start the development server**
   ```bash
   php artisan serve
   ```

9. **Access the application**
   - Open [http://localhost:8000/](http://localhost:8000/) in your browser.

## License

This project is licensed under the MIT License.

---

For any issues or contributions, please open an issue or submit a pull request.
