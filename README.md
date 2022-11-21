# Prueba tecnica techpump

Instalación
```bash
composer install
```
### BBDD
Configurar base de datos en el fichero .env (crear .env.local) , modificar variable "DATABASE_URL"

Creacion base de datos
```bash
php bin/console doctrine:database:create
```
Creacion tablas necesarias e incluir la información de afiliados
```bash
php bin/console doctrine:migrations:migrate