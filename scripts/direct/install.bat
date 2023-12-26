@REM install PHP packges
CALL composer install

@REM laravel app key
CALL php artisan key:generate

@REM link storage folder
CALL php artisan storage:link

@REM install NPM packges
CALL npm i -s

@REM run build scripts
CALL npm run vite:build
