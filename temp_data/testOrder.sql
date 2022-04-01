-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               PostgreSQL 12.2, compiled by Visual C++ build 1914, 64-bit
-- Операционная система:         
-- HeidiSQL Версия:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES  */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Дамп данных таблицы public.failed_jobs: 0 rows
/*!40000 ALTER TABLE "failed_jobs" DISABLE KEYS */;
/*!40000 ALTER TABLE "failed_jobs" ENABLE KEYS */;

-- Дамп данных таблицы public.migrations: 0 rows
/*!40000 ALTER TABLE "migrations" DISABLE KEYS */;
INSERT INTO "migrations" ("id", "migration", "batch") VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
	(6, '2022_04_01_090900_create_permission_tables', 2);
/*!40000 ALTER TABLE "migrations" ENABLE KEYS */;

-- Дамп данных таблицы public.model_has_permissions: 0 rows
/*!40000 ALTER TABLE "model_has_permissions" DISABLE KEYS */;
/*!40000 ALTER TABLE "model_has_permissions" ENABLE KEYS */;

-- Дамп данных таблицы public.model_has_roles: 0 rows
/*!40000 ALTER TABLE "model_has_roles" DISABLE KEYS */;
INSERT INTO "model_has_roles" ("role_id", "model_type", "model_id") VALUES
	(1, 'App\Models\User', 1),
	(2, 'App\Models\User', 2);
/*!40000 ALTER TABLE "model_has_roles" ENABLE KEYS */;

-- Дамп данных таблицы public.password_resets: 0 rows
/*!40000 ALTER TABLE "password_resets" DISABLE KEYS */;
/*!40000 ALTER TABLE "password_resets" ENABLE KEYS */;

-- Дамп данных таблицы public.permissions: 0 rows
/*!40000 ALTER TABLE "permissions" DISABLE KEYS */;
/*!40000 ALTER TABLE "permissions" ENABLE KEYS */;

-- Дамп данных таблицы public.personal_access_tokens: 0 rows
/*!40000 ALTER TABLE "personal_access_tokens" DISABLE KEYS */;
/*!40000 ALTER TABLE "personal_access_tokens" ENABLE KEYS */;

-- Дамп данных таблицы public.roles: 0 rows
/*!40000 ALTER TABLE "roles" DISABLE KEYS */;
INSERT INTO "roles" ("id", "name", "guard_name", "created_at", "updated_at") VALUES
	(1, 'user', 'web', '2022-04-01 09:15:05', '2022-04-01 09:15:05'),
	(2, 'admin', 'web', '2022-04-01 09:15:34', '2022-04-01 09:15:34');
/*!40000 ALTER TABLE "roles" ENABLE KEYS */;

-- Дамп данных таблицы public.role_has_permissions: 0 rows
/*!40000 ALTER TABLE "role_has_permissions" DISABLE KEYS */;
/*!40000 ALTER TABLE "role_has_permissions" ENABLE KEYS */;

-- Дамп данных таблицы public.users: 0 rows
/*!40000 ALTER TABLE "users" DISABLE KEYS */;
INSERT INTO "users" ("id", "name", "email", "email_verified_at", "password", "remember_token", "created_at", "updated_at", "two_factor_secret", "two_factor_recovery_codes", "two_factor_confirmed_at") VALUES
	(1, 'Rhino', 'Rhino@mail.com', NULL, '$2y$10$vCM8oROioq./AmlHH5w4KOvZrOqIHwVAQJUMGBqzQfTac5TCQiO1G', NULL, '2022-04-01 09:33:38', '2022-04-01 09:33:38', NULL, NULL, NULL),
	(2, 'Admin', 'Admin@mail.com', NULL, '$2y$10$vmW6db42ZCv8KHj/B.1UhepHZ80Apf43Xy5SDSMsL2tFlR8oodyKK', NULL, '2022-04-01 09:34:01', '2022-04-01 09:34:01', NULL, NULL, NULL);
/*!40000 ALTER TABLE "users" ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
