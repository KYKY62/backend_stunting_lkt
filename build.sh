#!/bin/bash
set -euo pipefail
chmod 755 "$0"

echo "Running build script..."

echo "[0/7] Fixing permissions"
chown -R devtest:devtest /home/devtest/public_html
chmod -R 775 /home/devtest/public_html/storage
chmod -R 775 /home/devtest/public_html/bootstrap/cache
chmod -R 775 /home/devtest/public_html/public

echo "[1/5] Pulling from github"
# git config --global --add safe.directory "${pwd}"
sudo -u devtest -H bash -lc "cd /home/devtest/public_html && git fetch origin main && git reset --hard origin/main"

echo "[2/5] ubah ke devtest installing packages use composer"
sudo -u devtest -H bash -lc "cd /home/devtest/public_html && composer install"

echo "[3/5] migrate database if one isnt found"
php artisan migrate

# seeder"
echo "[4/5] migrate database if one isnt found"
sudo -u devtest -H bash -lc "cd /home/devtest/public_html && php artisan db:seed --force"

echo "[5/5] setting up npm"
npm install
npm run build

echo "Berhasil Ges"