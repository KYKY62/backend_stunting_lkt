#!/bin/bash

echo "Running build script..."

echo "[1/4] Pulling from github"
git pull origin 
git config --global --add safe.directory "${pwd}"

echo "[2/4] migrate database if one isnt found"
php artisan migrate

echo "[3/4] installing packages use composer"
composer install

echo "[4/4] setting up npm"
npm run intall
npm run build

echo "Build script complete."