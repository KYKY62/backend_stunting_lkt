#!/bin/bash

echo "Running build script..."

echo "[1/6] Pulling from github"
git config --global --add safe.directory "${pwd}"
git pull origin 

echo "[3/6] ubah ke devtest"
exit

echo "[3/6] installing packages use composer"
composer install

echo "[5/6] migrate database if one isnt found"
php artisan migrate

echo "[6/6] setting up npm"
npm run install
npm run build

echo "Build script complete."