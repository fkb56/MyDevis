
# Projet mini erp

Pour commencer ce projet j’ai utilisé les frameworks **Laravel** et **Vue.js**.

Pour pouvoir faire la connexion entre ces 2 frameworks **Laravel** installe de lui-même grâce à la commande:

```shell
laravel new MyDevis --jet
```

Cette commande permet de créer un nouveau projet **Laravel** et installe le framework **Vue.js**, ainsi que les plugins **Jetstream** et **Inertia.js**.

Le framework **Laravel** est un framework **PHP MVC** qui facilite la vie des développeurs, j’ai choisi ce framework pour ça facilité d’intégration avec **Vue.js**, grâce à **jetstream** qui va gérer la connexion, les authentifications, vérification des e-mail ect...

En parallèle de **jetstream** laravel va aussi installé le plugin **inertia.js**, qui va faire le lien avec entre **Laravel** et **Vue.js**.

### Modification du fichier .env

Pour commencer mon projet, je commence par modifier mon fichier .env à la racine de mon projet pour me connecter à ma base de donnée de développement

### Modification du fichier `config/app.php`

Je modifie le fichier `config/app.php` en lui précisant:
- pour la variable `locale`, je précise que je veux la langue française comme traduction.
- même chose pour la variable `fallback_locale`
- pour la variable `faker_locale` je précise que je veux la langue française pour les noms, prénom, numéro de téléphone, etc...

### Création des fichiers nécessaires

Ensuite je crée mes fichiers de travail grâce à cette commande cela me permet de créer tous les fichiers nécessaire

- Un model
- Un controller
- Un factory
- Un seeder
- Une migration

```shell
php artisan make:model Category --all
php artisan make:model Product --all
php artisan make:model MeasureUnit --all
php artisan make:model Civility --all
php artisan make:model Clients --all
```

Et un fichier de migration regroupant toutes les relations nécessaire

```shell
php artisan make:migration relations
```

### Modification des fichiers de migration:

- user
- categorie
- products
- measure_unit
- civility
- client

Pour y ajouter les informations correspondant à la base de donnée

### Modification des fichiers seeder et factory

Je peuple ma base de donnée en modifiant les fichiers seeder et factory créer précédemment

Je supprime tout d’abord les fichiers:

- CategoryFactory
- CivilityFactory
- MeasureUnitFactory

Je ne garde que les fichiers:

- ClientFactory
- ProductFactory
- UserFactory (Générer par laravel et rempli par jetstream)

En gardant ces 2 fichiers je vais pouvoir utiliser la library faker installé par défaut avec laravel, pour peupler ma base de donnée de fausse donnée générer aléatoirement par faker.

Ensuite je supprime les fichiers 

- ProductSeeder
- ClientSeeder

Et je garde les fichiers:

- CategorySeeder
- CivilitySeeder
- DatabaseSeeder (Générer automatiquement par laravel)
- MeasureUnitSeeder

Une fois les fichiers de migration, factory et seeder rempli, je peux effectuer ma migration et seed.

### Peuplement de la base de donnée

Pour peupler ma base de donnée j’exécute cette commande:

```shell
php artisan migration --seed
```

N’ayant pas réussi du premier mais migration j’ai trouvé cette commande qui permet de supprimer toutes les tables de la base de donnée et les recrée et effectue un seed dans la foulée.

```shell
php artisan migration:fresh --seed
```

Le premier problème s’étant posé étant un problème d’encodage 

![alt text](../Rapport%20de%20stage/Ereur%20de%20migration.png)

J’ai eu un peu de mal à trouver d’où venais cet erreur ces sur ce site que j’ai trouvé la réponse

https://florent.poinsaut.fr/2018/08/17/mysql-mariadb-index-column-size-too-large-the-maximum-column-size-is-767-bytes/

Le problème vient de ma base de donnée travaillant avec ma base de donnée sur mon nas personnel. Ma base de donnée est à la version 10.0.28, comme expliquer sur le site, en dessous de la version 10.2 de mariadb, la taille de l’index est plus petite que dans les versions ultérieures, la façon que j’ai trouvé pour ne plus avoir cet erreur a été de changer mon encodage de utf8mb4_unicode_ci en utf8_general_ci.

Pour ce faire j’ai modifié le fichier `config/database.php`

Une fois cela fais j’ai peuplé ma base de donnée.

### Modification fichier model

Une fois cela fais j’ai commencé a remplir mes fichiers de model qui vont faire le lien et les relations entre ma base de donnée et mon serveur.

### Création des routes

Une fois cela fais je passe à la création de mes routes, en passant par des ressources gentillement fournis par laravel, et qui va permettre en une seule ligne de créer toutes les routes et méthodes nécessaires `GET, POST, PUT et DELETE`

- Une ressource `categories`
- Une ressource `clients`
- Une ressource `produits`

Et je crée 2 routes avec la méthode `GET`:

- Une route `/contact`
- Une route `/about`

### Modification des controlleurs

Une fois cela fais je passe à mes controllers qui vont faire passer mes informations de mon model à ma vue grâce à Inertia.js

J’ai commencé par supprimer les controlleurs dont je n’aurai pas besoin:

- CivilityController
- MeasureUnitController

## Front-end

Une fois tous cela fais je peux commencer à faire mon front.

### Modification langue

Pour commencer je traduis les fichiers `Vue.js`, qui ont été générer par `JetStream` et qui sont tous en anglais. N’ayant pas trouvé de solution pour traduire automatiquement les fichiers `Vue.js`, je les ai traduits manuellement.

Je télécharge aussi un dossier de traduction sur github qui contient les fichiers disponibles pour 77 langues.
https://github.com/Laravel-Lang/lang

Je récupère le dossier fr et le déplace dans mon projet dans le dossier `resources/lang`

J’installe ensuite le plugin `moment` pour formatter les dates, et les plugins `sass-loader` et `node-sass` pour pouvoir compiler mes styles css

```shell
yarn add moment 
```

```shell
yarn add -d sass-loader node-sass
```

J’en profite aussi pour inclure le cdn de fontawesome pour les icones

Pour le front-end utilisant tailwindcss j’ai récupéré le template tailwindadmin fournis par tailwind sur ce site.
https://github.com/tailwindadmin/admin

Je me suis aussi aidé d’un outil très sympathique permettant de générer les classes pour le flex, le grid, les table, les typography et les couleurs.
https://www.tailwind-tools.com


Modification du composant `NavLink.vue` fournis par **Jetstream** pour correspondre a mon thème

https://tailwindcomponents.com/component/product-card-6

image
https://www.google.com/url?sa=i&url=https%3A%2F%2Ftpr-peinture.com%2F&psig=AOvVaw0elGMYK1JbySN6n9Hc0ed5&ust=1625390748663000&source=images&cd=vfe&ved=0CAgQjhxqFwoTCPDcr8PKxvECFQAAAAAdAAAAABAG

https://fr.freepik.com/icones-gratuites/rouleau-peinture_14374367.htm#&position=5

https://www.akilischool.com/cours/laravel-envoyer-un-mail-via-le-serveur-smtp-google

https://tailwindcomponents.com/component/basic-contact-form

https://fr.vecteezy.com/art-vectoriel/2734621-peinture-logo-business-vector-icon
https://fr.vecteezy.com/art-vectoriel/2734633-peinture-logo-business-vector-icon
https://fr.vecteezy.com/art-vectoriel/2570845-icone-isole-outil-rouleau-peinture
https://fr.vecteezy.com/art-vectoriel/2734625-peinture-logo-business-vector-icon
https://fr.vecteezy.com/art-vectoriel/2734626-peinture-logo-business-vector-icon
https://www.istockphoto.com/fr/vectoriel/peintres-bricolage-et-r%C3%A9parateur-gm165969744-22497846
https://www.google.com/imgres?imgurl=https%3A%2F%2Fstatic.vecteezy.com%2Fti%2Fvecteur-libre%2Ft2%2F2609129-rouleau-brosse-peinture-outil-reparation-entretien-et-construction-equipement-ligne-et-remplissage-gratuit-vectoriel.jpg&imgrefurl=https%3A%2F%2Ffr.vecteezy.com%2Fvecteur-libre%2Frouleau-peinture&tbnid=0n4tyaEfJQd6rM&vet=12ahUKEwjq3IGvzcfxAhVC0-AKHc1SCmIQMygLegUIARDuAQ..i&docid=I4I6h68vYSLWCM&w=200&h=200&q=icons8-rouleau-%C3%A0-peinture&client=firefox-b-d&ved=2ahUKEwjq3IGvzcfxAhVC0-AKHc1SCmIQMygLegUIARDuAQ
