# Yayasan Seulanga Insan Mulia - Company Profile Website

Aplikasi web company profile modern, cepat, aman, dan SEO friendly untuk Yayasan Seulanga Insan Mulia. Dibangun dengan Laravel 11, Bootstrap 5, dan fitur keamanan tingkat tinggi.

## 🚀 Fitur Utama

### 👥 Role & Akses

**Guest (Pengunjung)**
- Beranda dengan hero section dan highlight program
- Halaman Tentang Kami dengan visi, misi, dan sejarah
- Struktur Organisasi dengan foto dan jabatan
- Program Kerja dengan detail lengkap
- Berita dengan pagination dan SEO optimized
- Galeri foto dengan lightbox
- Form kontak dengan validasi

**Admin**
- Dashboard dengan statistik real-time
- CRUD lengkap untuk Berita, Galeri, Program, Struktur Organisasi
- Manajemen Tentang Kami
- Manajemen User (Super Admin only)
- Login dengan rate limiting dan brute force protection

### 🔒 Keamanan Tinggi

- Hash password dengan bcrypt
- Validasi input backend & frontend
- CSRF Protection
- XSS Protection dengan middleware khusus
- Rate limiting login (5 attempts per 15 menit)
- Role-based access control (RBAC)
- File upload sanitization (hanya gambar, max 2MB, rename UUID)
- SQL Injection prevention dengan ORM

### 🎨 Frontend Modern

- UI responsive dengan Bootstrap 5
- Design modern dan profesional
- Animasi smooth dan interaktif
- SEO best practices:
  - Meta tags unik per halaman
  - Schema markup (Organization, NewsArticle)
  - Breadcrumb navigation
  - HTML semantic
  - Sitemap.xml otomatis
  - Open Graph & Twitter Cards

### ⚡ Backend Powerful

- Arsitektur MVC rapi
- REST API ready
- Pagination, search, dan sorting
- File management dengan Storage
- Middleware protection
- Error handling yang baik

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## 📋 Prerequisites

- PHP 8.1 atau lebih tinggi
- Composer
- Node.js & NPM
- MySQL atau database lainnya
- Web server (Apache/Nginx)

## 🛠️ Instalasi

1. **Clone repository**
   ```bash
   git clone <repository-url>
   cd seulanga-insan-mulia
   ```

2. **Install dependencies PHP**
   ```bash
   composer install
   ```

3. **Install dependencies JavaScript**
   ```bash
   npm install
   ```

4. **Setup environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Konfigurasi database**
   Edit file `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=seulanga_insan_mulia
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Jalankan migrations dan seeders**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

7. **Build assets**
   ```bash
   npm run build
   # atau untuk development
   npm run dev
   ```

8. **Setup storage link**
   ```bash
   php artisan storage:link
   ```

9. **Jalankan aplikasi**
   ```bash
   php artisan serve
   ```

## 🚀 Deployment

### Hosting Requirements

- **PHP Version**: 8.1+
- **Database**: MySQL 5.7+ / PostgreSQL / SQLite
- **Web Server**: Apache with mod_rewrite / Nginx
- **SSL Certificate**: Recommended untuk production
- **Storage**: 500MB+ untuk file uploads

### Rekomendasi Hosting

1. **VPS/Cloud Server**
   - DigitalOcean Droplets
   - AWS EC2
   - Google Cloud Compute Engine
   - Minimum 1GB RAM, 20GB storage

2. **Shared Hosting dengan Laravel Support**
   - SiteGround
   - A2 Hosting
   - Hostinger (Business plan+)

3. **Managed Laravel Hosting**
   - Laravel Forge
   - Vapor
   - Heroku

### Langkah Deployment

1. **Upload files** ke hosting
2. **Setup database** dan jalankan migrations
3. **Konfigurasi environment** (.env)
4. **Setup SSL certificate**
5. **Configure web server** (Apache/Nginx)
6. **Setup cron jobs** untuk scheduled tasks
7. **Test semua functionality**

### Nginx Configuration Example

```nginx
server {
    listen 80;
    server_name yourdomain.com;
    root /path/to/public;

    index index.php index.html;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include fastcgi_params;
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }

    location ~ /\.ht {
        deny all;
    }
}
```

## 🔧 Konfigurasi

### Environment Variables

```env
# App
APP_NAME="Yayasan Seulanga Insan Mulia"
APP_ENV=production
APP_KEY=base64:key
APP_DEBUG=false
APP_URL=https://yourdomain.com

# Database
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=seulanga_db
DB_USERNAME=db_user
DB_PASSWORD=db_password

# Mail (untuk form kontak)
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=app-password
MAIL_ENCRYPTION=tls

# Google Analytics (ganti GA_MEASUREMENT_ID)
GA_MEASUREMENT_ID=GA-XXXXXXXXXX
```

### File Permissions

```bash
chmod -R 755 storage
chmod -R 755 bootstrap/cache
chown -R www-data:www-data storage
chown -R www-data:www-data bootstrap/cache
```

## 📊 SEO & Security Checklist

### SEO Checklist
- [x] Meta title unik per halaman
- [x] Meta description untuk setiap halaman
- [x] Schema.org markup (Organization, NewsArticle)
- [x] Open Graph tags
- [x] Twitter Cards
- [x] Sitemap.xml otomatis
- [x] Robots.txt
- [x] Breadcrumb navigation
- [x] URL structure yang bersih
- [x] HTML semantic elements

### Security Checklist
- [x] CSRF protection aktif
- [x] XSS protection dengan middleware
- [x] Rate limiting pada login
- [x] Password hashing dengan bcrypt
- [x] File upload validation
- [x] SQL injection prevention (ORM)
- [x] Input sanitization
- [x] Role-based access control
- [x] Security headers (XSS, CSRF, etc.)

## 🐛 Testing

```bash
# Jalankan semua tests
php artisan test

# Jalankan specific test
php artisan test --filter=BeritaTest

# Jalankan dengan coverage
php artisan test --coverage
```

## 📝 API Documentation

### Authentication Endpoints

```
POST   /login
POST   /logout
```

### Admin Endpoints

```
GET    /admin/dashboard
GET    /admin/berita
POST   /admin/berita
PUT    /admin/berita/{id}
DELETE /admin/berita/{id}
# ... (similar untuk galeri, program, struktur-organisasi, users)
```

### Public Endpoints

```
GET    /
GET    /tentang-kami
GET    /struktur-organisasi
GET    /program
GET    /berita
GET    /galeri
GET    /kontak
POST   /kontak
GET    /sitemap.xml
```

## 🤝 Contributing

1. Fork repository
2. Create feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to branch (`git push origin feature/AmazingFeature`)
5. Open Pull Request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 📞 Support

Untuk support atau pertanyaan, silakan hubungi:
- Email: admin@seulanga.org
- Website: https://seulanga.org

---

**Dibuat dengan ❤️ untuk Yayasan Seulanga Insan Mulia**
