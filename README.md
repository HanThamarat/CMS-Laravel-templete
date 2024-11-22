# Chookiat Care

# In this project about insruancing and management insruancing system of chookiat company.

# Let Get started.

# Quick start.

Step 1: you must install all packages this project want, you can used following this command for this step.
```
composer install

and

npm install
```

Step 2: In this step you must create .env file following this command for creating .env file
```
cp .env.example .env
```

# Note
if u don't have database engine, also you can use this command for creating database engine, but also you must have docker you can use this command
```
docker compose up -d --build
```

step 3: when you run this project success, you should migrating the database and initialize data started to the database
```
for migration table to database
- php artisan migrate

for initial data to database
- php artisan db:seed
```
