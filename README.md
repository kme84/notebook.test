# Notebook
 Задание на вакансию

## Документация API
https://app.swaggerhub.com/apis-docs/KME84_1/Notebook/1.0.0
### Краткое перечисление:
- GET /api/v1/notebook (список записей)
- POST /api/v1/notebook (добавление записи в список)
- GET /api/v1/notebook/{id} (просмотр конкретной записи)
- POST /api/v1/notebook/{id} (обновление конкретной записи)
- DELETE /api/v1/notebook/{id} (удаление конкретной записи)

Список записей выводится постранично, для выбора страницы используйте параметр запроса page=номер_страницы (/api/v1/notebook?page=7)

Заполняемые поля при добавлении записи:
1. ФИО (обязательное)
2. Компания
3. Телефон (обязательное)
4. Email (обязательное)
5. Дата рождения 
6. Фото

Запускается в **docker** с использованием **laravel/sail**

Тестировал приложение в ручном режиме при помощи **Postman**

После первого запуска необходимо выполнить миграцию `php artisan migrate`

Если нужен тестовый набор данных, то можно использовать `php artisan migrate --seed`
