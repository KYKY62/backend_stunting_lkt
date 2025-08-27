echo "Running build script..."

echo "[1/4] Pulling from github"
git pull origin 

echo "[2/4] migrate database if one isnt found"
php artisan migrate

echo "[3/4] installing packages use composer"
composer install

echo "[4/4] npm run build"
npm run build

echo "Build script complete."