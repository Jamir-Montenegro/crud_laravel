📘 Laboratorio CRUD con Laravel
📌 Introducción

Este laboratorio tiene como objetivo desarrollar una aplicación web utilizando el framework Laravel, implementando un sistema CRUD (Create, Read, Update, Delete) para la gestión de productos, aplicando la arquitectura MVC.

🧠 Arquitectura MVC
Modelos (Models): Manejan la lógica de la base de datos (Product).
Vistas (Views): Interfaz gráfica del sistema (formularios y tablas).
Controladores (Controllers): Gestionan la lógica del CRUD.
Rutas (Routes): Definen las URLs del sistema.
🎯 Objetivo del laboratorio

Desarrollar un sistema CRUD funcional en Laravel que permita:

Crear productos
Listar productos
Editar productos
Eliminar productos
⚙️ Prerrequisitos
🧩 Ecosistema de desarrollo
🐘 PHP ≥ 8.1
📦 Composer
🚀 Laravel
🌐 WampServer
🗄️ MySQL
💻 Visual Studio Code
🟡 Node.js (para Vite)
🛠️ Instalación del proyecto
1️⃣ Crear proyecto
laravel new crud_laravel
2️⃣ Entrar al proyecto
cd crud_laravel
3️⃣ Instalar dependencias
composer install
npm install
⚙️ Configuración del entorno

Editar archivo .env:

DB_DATABASE=crudLaravel
DB_USERNAME=root
DB_PASSWORD=
🔐 Generar clave de aplicación
php artisan key:generate
🗄️ Base de Datos
Crear base de datos
CREATE DATABASE crudLaravel;
Ejecutar migraciones
php artisan migrate
🧱 Creación del CRUD
1️⃣ Crear modelo + migración
php artisan make:model Product -m
2️⃣ Editar migración
$table->id();
$table->string('description');
$table->double('price', 8, 2);
$table->integer('stock');
$table->timestamps();
3️⃣ Ejecutar migración
php artisan migrate
⚡ Generador CRUD automático
Instalar paquete
composer require ibex/crud-generator --dev
Publicar archivos
php artisan vendor:publish --tag=crud
Generar CRUD
php artisan make:crud products
🧾 Configuración de rutas

En routes/web.php:

use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);
🔐 Seguridad del modelo

En app/Models/Product.php:

protected $fillable = ['description', 'price', 'stock'];
📥 Validación de datos

Crear request:

php artisan make:request ProductRequest

Editar:

public function authorize(): bool
{
    return true;
}

public function rules(): array
{
    return [
        'description' => 'required',
        'price' => 'required|numeric',
        'stock' => 'required|integer',
    ];
}
🚀 Ejecución del proyecto
Backend
php artisan serve
Frontend
npm run dev
🌐 Acceso
http://127.0.0.1:8000/products
📸 Resultado

Sistema CRUD funcional con:

Listado de productos
Formulario de creación
Edición de productos
Eliminación
⚠️ Dificultades y soluciones

❌ Error: vendor/autoload.php not found
✔ Solución:

composer install

❌ Error: No application encryption key
✔ Solución:

php artisan key:generate

❌ Error: Vite manifest not found
✔ Solución:

npm install
npm run dev

❌ Error: ProductRequest no existe
✔ Solución:

php artisan make:request ProductRequest

❌ Error de base de datos
✔ Solución:

Verificar .env
Crear base de datos
📚 Referencias
https://laravel.com/docs
https://getcomposer.org
https://nodejs.org
https://www.php.net
📅 Fecha de ejecución

Abril 2026

👨‍💻 Autor

Este laboratorio fue desarrollado por:

Nombre: Jamir Montenegro
Correo: jamir.montenegro@utp.ac.pa

Curso: DS7
Instructor: Irina Fong

