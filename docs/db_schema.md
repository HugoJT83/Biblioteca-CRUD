# SCHEMA del proyecto

Aquí se detalla el SCHEMA correspondiente a la base de datos; esta query es meramente informativa, pues el proyecto cuenta con una migración disponible para crear la tabla.  

Para ejecutar la migración y sembrar datos en la BD, ejecutar el siguiente comando:

```bash
php artisan migrate:fresh --seed
```

## 1.Tabla Libros:

```sql
CREATE TABLE `libros` (
   `id` bigint unsigned NOT NULL AUTO_INCREMENT,
   `user_id` bigint unsigned NOT NULL,
   `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
   `autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
   `anio` int NOT NULL,
   `genero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
   `resumen` text COLLATE utf8mb4_unicode_ci NOT NULL,
   `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
   `created_at` timestamp NULL DEFAULT NULL,
   `updated_at` timestamp NULL DEFAULT NULL,
   PRIMARY KEY (`id`),
   KEY `libros_user_id_foreign` (`user_id`),
   CONSTRAINT `libros_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
 ) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
```