#!/bin/bash

echo "Running build script..."

echo "[1/5] Pulling from github"
git config --global --add safe.directory "${pwd}"
git pull origin 

echo "[2/5] ubah ke devtest"
sudo -u devtest -H bash -lc "cd /home/devtest/public_html && composer install"

echo "[3/5] installing packages use composer"
composer install

echo "[4/5] migrate database if one isnt found"
php artisan migrate

echo "[5/5] setting up npm"
npm run install
npm run build

echo "Build script complete."