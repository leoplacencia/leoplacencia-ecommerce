# Maqueta Web E-commerce
Maqueta para proyectos e-commerce creada en laravel 5.6 por **Leonardo Placencia**.

## Instalación del proyecto
- Clonar el proyecto y abrir terminal en su carpeta.

### Instalar dependencias de composer
``` $ composer install ```

### Crear archivo env en laravel
Al crear el archivo *.env* tomará como base el archivo *.env.example*

```$  cp  .env.example  .env ```

### Crear nuevo API Key
```$  php artisan key:generate ```

### Entrar a Mysql y crear una base de datos
``` mysql>  CREATE DATABASE nombre_base_de_datos; ```

### Editar Archivo .env
``` DB_HOST=localhost ```

```DB_DATABASE=tu_base_de_datos```

```DB_USERNAME=usuario_mysql```

```DB_PASSWORD=password_mysql ```

### Usar migraciones de laravel
- En caso de contar con seeders agregar *--seed*
``` $  php artisan migrate --seed ```

### Abrir servidor del proyecto
``` $ php artisan serve ```

---

Ante cualquier consulta [LeoPlacencia](mailto:placencia.leo@gmail.com)