# Web-NANGCAO
Bài giữa kì

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## 🛍️ Shop Mini - Laravel E-Commerce Website

> Một dự án web bán hàng mini được xây dựng bằng **Laravel**, mô phỏng giao diện và trải nghiệm của trang **Adidas Vietnam**, với mục tiêu giúp sinh viên thực hành lập trình web hiện đại, MVC, Blade template, và kết nối cơ sở dữ liệu MySQL.

---

## Giới thiệu

**Shop Mini** là một website thương mại điện tử mô phỏng cửa hàng thể thao trực tuyến (E-Store), nơi người dùng có thể xem sản phẩm, xem danh mục (Nam, Nữ, Trẻ em, Thể thao, Sale...), tìm kiếm, và quản lý giỏ hàng.

Website được phát triển dựa trên **Laravel Framework** kết hợp **Blade Template**, **TailwindCSS** và **MySQL**.

---

##  Công nghệ sử dụng

| Thành phần | Mô tả |
|-------------|-------|
| **Laravel 12.x** | Framework chính theo mô hình MVC |
| **PHP 8.3+** | Ngôn ngữ backend |
| **MySQL / MariaDB** | Cơ sở dữ liệu lưu trữ sản phẩm & người dùng |
| **Blade Template** | Template engine tích hợp của Laravel |
| **TailwindCSS** | Thiết kế giao diện gọn nhẹ, hiện đại |
| **Vite** | Dùng để build CSS và JS (vite.config.js) |


---

## Mô hình MVC :

![MVC](image.png)

---

## 🧩 Cài đặt & Chạy dự án

### 1. Clone project
```bash
git clone https://github.com/phamngocvu-pka/Web-NANGCAO
cd Shop-mini

```

### 2.Cài môi trường:
```
cp .env.example .env
php artisan key:generate 
```
## 3. Chạy :
```
php artisan serve
```