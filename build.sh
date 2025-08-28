#!/bin/bash

echo "Running build script..."

echo "[1/4] Pulling from github"
# git config --global --add safe.directory "${pwd}"
git pull origin main

echo "[2/4] ubah ke devtest installing packages use composer"
sudo -u devtest -H bash -lc "cd /home/devtest/public_html && composer install"

echo "[3/4] migrate database if one isnt found"
php artisan migrate

echo "[4/4] setting up npm"
npm install
npm run build

echo "Berhasil Ges"