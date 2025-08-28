#!/bin/bash
set -euo pipefail
chmod 755 "$0"

echo "Running build script..."

echo "[0/7] Fixing permissions"
chown -R devtest:devtest /home/devtest/public_html
chmod -R 775 /home/devtest/public_html/storage
chmod -R 775 /home/devtest/public_html/bootstrap/cache
chmod -R 775 /home/devtest/public_html/public

echo "[1/4] Pulling from github"
# git config --global --add safe.directory "${pwd}"
sudo -u devtest -H bash -lc "cd /home/devtest/public_html && git fetch origin main && git reset --hard origin/main"


echo "[2/4] ubah ke devtest installing packages use composer"
sudo -u devtest -H bash -lc "cd /home/devtest/public_html && composer install"

echo "[3/4] migrate database if one isnt found"
php artisan migrate

echo "[4/4] setting up npm"
npm install
npm run build

echo "Berhasil Ges"