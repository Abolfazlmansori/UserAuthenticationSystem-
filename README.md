# User Authentication System

یک سیستم ساده احراز هویت کاربر با **لاراول** که شامل **ثبت‌نام و ورود با ایمیل و رمزعبور** است.

>

## Features

- ثبت‌نام کاربر با ایمیل و رمزعبور
- ورود کاربر با ایمیل و رمزعبور
- هدایت به صفحه اصلی (`home`) بعد از ورود موفق
- رابط کاربری ساده و واکنش‌گرا با TailwindCSS

### فیچرهایی که هنوز اضافه نشده‌اند

- Social Login (GitHub, Google, …)
- تایید ایمیل و middleware `verified`
- فراموشی رمزعبور

## پیش‌نیازها

- PHP >= 8.2
- Laravel >= 12
- MySQL یا هر پایگاه داده‌ی سازگار
- Composer
- محیط توسعه محلی (XAMPP / Laragon / Valet …)

## نصب و راه‌اندازی

```bash
git clone https://github.com/Abolfazlmansori/UserAuthenticationSystem-.git
cd User-Authentication-System
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
