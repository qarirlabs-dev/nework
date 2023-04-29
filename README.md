# Qarir Generator App

## Local Installation
1. Run <code>composer install</code>
2. Run <code>npm install</code>
3. Run <code>php artisan migrate</code>
4. Run <code>php artisan key:generate</code>
5. Copy <code>.env.example</code> to <code>.env</code>
5. Set Your <code>.env</code> file
    - APP_NAME
    - etc.   

## Run On Local ENV
1. Run <code>php artisan server</code>
2. Run <code>npm run dev</code>

## Build For Deploy
1. Stop All Process
2. Run <code>npm run build</code>
3. Deploy source code to server