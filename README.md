Этот проект реализует API для создания, получения, обновления и удаления задач.  
---

## Функционал

- Создание задачи — `POST /api/tasks`
- Получение списка задач — `GET /api/tasks`
- Получение одной задачи — `GET /api/tasks/{id}`
- Обновление задачи — `PUT /api/tasks/{id}`
- Удаление задачи — `DELETE /api/tasks/{id}`
- Валидация данных  
- Использование SQLite  
- Сервисный слой, DTO, слои разделения
---

## Установка

1. Клонируйте репозиторий:

   ```bash
   git clone https://github.com/dartanool/ToDoListApi.git
   cd ToDoListApi
   ```
2. Установите зависимости:

     ```bash
   composer install
   ```

3. Создайте .env файл и настройте подключение к базе данных

4. Выполните миграции базы данных:

     ```bash
   php artisan migrate
   ```

5. Заполните базу тестовыми данными (сидами):

     ```bash
   php artisan db:seed
   ```

6. Запустите встроенный сервер Laravel:

     ```bash
   php artisan serve
   ```
