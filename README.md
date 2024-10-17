# Ynov exercices tests unitaires

NB : Veillez a executer les commandes depuis un CMD (!= VSCode terminal)

### Installation sur Windows
- Installez xampp : `https://www.apachefriends.org/fr/index.html`
- Cloner le projet dans `C:\xampp\htdocs\projects\`
- Installez composer si besoin : `https://getcomposer.org/download/`
- Aller dans le dossier du projet et lancer la commande : `composer install`
- Installez composer si besoin : `https://xdebug.org/download`, avec version de PHP correspondante à Xampp
- Déplacer le fichier `php_xdebug-3.0.4-8.0-vc16-x86_64.dll` dans le dossier `C:\xampp\php\ext\`
- Modifier le fichier `C:\xampp\php\php.ini` de xampp pour activer xdebug : `
```
zend_extension = "C:\xampp\php\ext\php_xdebug-3.0.4-8.0-vc16-x86_64.dll"
xdebug.mode = coverage
xdebug.start_with_request = yes
```
- Redémarrer Apache
- Vérifier que xdebug est bien activé : `php -m | findstr xdebug`

### Tests unitaires
  
Exemples:

- Run test: `vendor/bin/phpunit --bootstrap src/Addition.php tests/AdditionTest.php`
- Run coverage: `vendor/bin/phpunit --coverage-html coverage-report --bootstrap src/Addition.php tests`

- Run test: `vendor/bin/phpunit --bootstrap src/HanoiTower.class.php tests/HanoiTowerTest.php`
- Run coverage: `vendor/bin/phpunit --coverage-html coverage-report --bootstrap src/HanoiTower.class.php tests`

- Run test: `vendor/bin/phpunit --bootstrap src/Librairie.class.php tests/LibrairieTest.php`
- Run coverage: `vendor/bin/phpunit --coverage-html coverage-report --bootstrap src/Librairie.class.php tests`
