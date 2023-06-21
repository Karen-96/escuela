# Sistema Escuela de musica
### _SOFTWARE ADMINISTRATIVO_

Se busca la manera de que tanto el equipo de trabajo como los estudiantes y flias, puedan trabajar y/o acceder de manera
rápida y efectiva a la información exclusiva que requieran, mediante la asignación de permisos/perfiles según corresponda y,
a través del uso de las funciones informáticas que permitan simplificar las tareas.

- Blade para manejo de templates
- jQuery para interacción con Navegador
- Bootstrap 5.1.x (con sus íconos) - Como framework de frontend
- Sanctum como librería de autentificación API
- Fontawesone (iconos)

### Funcionalidades

- Gestión de Administración
- Módulo de Instructores
- Módulo Directores
- Módulo Estudiante

### Mejoras a Futuro

- Posibilidad de agregar futuros módulos

# Instalar proyecto 

### Requisitos:

- PHP 7.4.x
- Apache 2.4
- MySQL
- Composer

### Extensiones de PHP:

- BCMath PHP Extension
- Ctype PHP Extension
- Fileinfo PHP extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- MySQLI PHP Extension
- PDO_MYSQL PHP Extension

_Para entornos de desarrollo:_
```sh
git clone https://github.com/Karen-96/escuela.git
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
```

Para entornos de producción, hasta migraciones es lo mismo. Luego:

```sh
npm run prod
php artisan optimize
php artisan config:cache
php artisan route:cache
```

En entornos linux, usualmente el _git clone_ se debería ejecutar en: _/var/www_. Dentro de _/var/www_ hay una carpeta _html_ que es donde debería copiarse el **contenido** de la carpeta _public_ de lo clonado. 
Por lo que despues de haber ejecutado todos los comandos anteriores, lo siguiente es:

```sh
cp -R /var/www/escuela/public/* /var/www/html
mv /var/www/html/index.php.linuxenv /var/www/html/index.php
```

Para finalizar, es necesario revisar cuestiones de permisos. Si todo esto se ejecuta como root, hay que colocar los permisos adecuados en la carpeta _/var/www/html_ 

## License

APACHE2