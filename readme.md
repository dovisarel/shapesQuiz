## install

1. run `docker-compose up -d` (run `docker-compose down` to stop)
2. connect to php container `docker-compose exec php-fpm bash`
3. run in container `composer install`
4. run migrations `php artisan migrate`
5. connect to DB `localhost:8086`, username: `root`, password: `123456`, and run `schema_init.sql`.
6. browse to `http://localhost:8084/`

## to add new shape
1. add new class `App\Shapes\NewShape`, like `app\Shapes\Square`
2. Register this class in `App\ShapesManager::$shapes`.
3. add new component like `resources/js/components/ShapeRectangle.vue`.
4. register this component in `resources/js/components/Question.vue`.
5. rebuild js, (run `yarn dev`)
