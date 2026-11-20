# QosqoFarma v1.0 (MVP) · API RESTful

Backend desarrollado en Laravel y PostgreSQL para la gestión logística de medicamentos, control de vencimientos FEFO (*First Expired, First Out*), kardex inmutable y transferencias en los establecimientos de salud de la región Cusco.

Proyecto integrador de **DSI406 · Tecnología Backend** – IES Público Túpac Amaru.

## Requisitos
- PHP 8.3 o superior con extensiones `pdo_pgsql` y `pgsql`
- Composer 2 y PostgreSQL 15+

## Instalación
1. `git clone https://github.com/DiegoQuispe2510/qosqofarma.git`
2. `cd qosqofarma`
3. `composer install`
4. `copy .env.example .env` (configurar `DB_PASSWORD`)
5. `php artisan key:generate`
6. Crear la base de datos `qosqofarma` en PostgreSQL
7. `php artisan migrate`
8. `php artisan serve`
9. Verificar estado en: `GET http://127.0.0.1:8000`

## Autor
- Diego Quispe