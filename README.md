# 🌟 ÉCLAT | Agencia de Modelos y Servicios Profesionales

**ÉCLAT** es una plataforma dinámica desarrollada con **Laravel**, que ofrece una experiencia digital moderna para la gestión y visualización de modelos, servicios y publicaciones relacionadas con el mundo de la moda y la imagen profesional.

El proyecto está compuesto por dos partes:

## 🧭 Estructura del Sitio

### 🖥️ Sitio Público
- Presenta la marca **ÉCLAT** con una **Home** moderna y audiovisual.
- Sección **Modelos** donde se pueden visualizar los perfiles disponibles (nombre, imagen, altura, cabello, etc.).
- Sección **Servicios**, mostrando los servicios ofrecidos por la agencia (fotografía, campañas, eventos, etc.).
- Sección **Blog / Noticias**, que presenta publicaciones y novedades del mundo de la moda.
- Estilizado completamente con **TailwindCSS**, asegurando una interfaz limpia, responsive y elegante.

### 🔐 Panel de Administración
- Acceso restringido con **autenticación de usuario (login/logout)**.
- Panel **Admin Dashboard** con control total de:
  - Modelos (ABM)
  - Servicios (ABM)
  - Posts o Noticias (ABM)
- Se aplican los principios de **Programación Orientada a Objetos (POO)**, uso de **Controllers, Models y Middlewares**.

---

## 🗄️ Base de Datos

El proyecto cuenta con al menos **3 tablas principales**:
1. `users` → Autenticación y gestión de administradores.  
2. `servicios` → Servicios ofrecidos por la agencia.  
3. `posts` → Noticias o publicaciones del blog.  
4. `modelos` → Modelos registrados con sus respectivos datos personales y profesionales.

Todas las tablas fueron generadas mediante **migrations** y cuentan con **seeders** iniciales para carga de datos base.

> 🔹 Los seeders incluyen:  
> - `ModelosSeeder`  
> - `ServiciosSeeder`  
> - `PostSeeder`  
> - `UserSeeder`  

---

## ⚙️ Tecnologías y Herramientas

- **Framework:** Laravel 11.x  
- **Lenguaje:** PHP 8.3  
- **Base de datos:** MySQL (local via MAMP)  
- **Front-end:** TailwindCSS  
- **Template Engine:** Blade  
- **ORM:** Eloquent  
- **Servidor Local:** MAMP (puerto 8888)  
- **Composer:** para gestión de dependencias  
- **Vite:** para assets y desarrollo en caliente  

---

## 🚀 Instalación y Ejecución Local

1. Clonar el repositorio o descomprimir el `.rar`.
2. Instalar dependencias PHP:
   ```bash
   composer install
   ````

## Crear el archivo .env con config local
    ```bash
    APP_NAME=Eclat
    APP_ENV=local
    APP_URL=http://localhost:8888/eclat/public
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=eclat
    DB_USERNAME=root
    DB_PASSWORD=
    ```

## Generar las tablas iniciales
    ```bash
    php artisan migrate --seed
    ```

## Iniciar el servidor
    ```bash
    php artisan serve
    ```

## Desarrolladores:
**Afonso Arruda & Lisa Bauer**
- **Carrera**: Desarrollo Web y Mobile
- **Materia**: Portales y Comercio Electrónico
- **Profesor**: Santiago Gallino
- **Entrega**: 1er Parcial (2025)




<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
