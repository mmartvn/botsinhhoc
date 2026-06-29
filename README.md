# Landing Page Ads

Landing page bán hàng + Admin panel quản lý ảnh & liên hệ.

Built with Laravel {{ version }}.

## Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan storage:link
php artisan serve
```

## Admin

- URL: `/admin/login`
- Email: `admin@admin.com`
- Password: `admin123`
