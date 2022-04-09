SONDAGE

STRUCTURE DE SONDAGE

POUR CLONER LE PROJET

https://github.com/Hulkbuster1987/sondage.git

Installation
composer install
symfony console doctrine:database:create
symfony console make:migration
symfony console doctrine:migrations:migrate
composer require symfony/webpack-encore-bundle
npm install


Webpack Encore
npm install sass-loader@^12.0.0 sass --save-dev
npm install postcss-loader@^6.0.0 --save-dev
npm install autoprefixer --save-dev
npm i bootstrap --save-dev
npm install jquery
npm install --save @fortawesome/fontawesome-free
