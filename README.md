## Информация

- Разработка производилась в виртуальной среде [VirtualBox](https://www.virtualbox.org/)
- Кнопки доступа в админ панель со страниц сайта нету. Используйте _url_/login для авторизации и _url_/register для регистрации пользователя. Доступ для залогиненого пользователя: _url_/dashboard
- Текстовый редактор контента статьи использовался [CKEditor4](https://ckeditor.com/)
- Файловый менеджер, работающий в паре с CKEditor [CKFinder3](https://ckeditor.com/docs/ckfinder/ckfinder3/)

## Установка и настройка

```bash
$ git clone https://github.com/Scarletfaith/blog.git
$ cd blog
$ cp .env.example .env
```

Обязательно открываем в редакторе файл .env и настраиваем доступ к базе данных:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1 [Или полный url, если настраиваете на сервере]
DB_PORT=3306 [Не меняете, если не используется другой порт]
DB_DATABASE=laravel [Название БД]
DB_USERNAME=root [Логин к БД]
DB_PASSWORD= [Пароль к БД]
```

Продолжаем настройку

```bash
$ composer install
$ php artisan key:generate
$ php artisan migrate:fresh
$ php artisan storage:link
```

## Добавление Seeds

- Изображения на обложке статей (Preview image) находятся в /storage/images
- Изображения в контенте поста имеют гиперссылки на исходники в оригинальных постах с сайта https://blog.laravel.com и не хранятся в storage
- Имеется лишь один пользователь в базе для демонстрации админ панели. Login: jb@laravel.ll // Password: 123456789
- В БД created_at и updated_at будут установлены на момент выгрузки сида

```bash
$ php artisan db:seed
```
