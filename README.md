> ⚠ Ce package n'est pas une ressource officielle validée par l'ADEME

Le package Affichage développé par Altermaker propose une déclinaison stricte de la [charte graphique](doc/Charte_graphique_detaillee_(FR).pdf) officielle de l'Affichage Environnemental des biens et services de grande consommation. Ce package permet de générer un visuel d'Affichage Environnemental conforme à la charte graphique publiée par l'ADEME.

## Installation

Installez la dernière version avec :

```bash
$ composer require altermaker/affichage
```

## Utilisation basique

```php
<?php

use Altermaker\Affichage\Affichage;

// Générer un affichage pour le score "B"
$affichage = new Affichage();
$affichage->setScoreLetter('B');
$affichage->printLabel();
```

## Documentation

Comme détaillé dans la [charte graphique](doc/Charte_graphique_detaillee_(FR).pdf) de l'Affichage Environnemental, il existe 3 formats d'affichage (Lettre, Réglette et Indice) et 6 variantes (A1, A2, A3, A4, C et PS). Ce package couvre l'ensemble des formats et variantes à l'exception de la variante 'PS' ('Planète Seule').

### Configuration par défaut

Par défaut, l'affichage généré est au format "réglette", en variante "a3", son indice est à zéro, sa lettre est E et la hauteur du visuel généré est 100px.

### Définir le score

Deux méthodes sont disponibles pour définir le score en indice ou en lettre.

```php
<?php

// La méthode setScoreLetter() accepte une lettre entre A et E
$affichage->setScoreLetter('A');

// La méthode setScoreIndex() accepte une veleur numérique
$affichage->setScoreIndex(1137);
```

Un indice n'étant pas un entier est toujours arrondi à une décimale.

### Paramétrer le visuel

Il est possible de générer un affichage au format "Lettre", "Réglette" ou "Indice". Par défaut, l'affichage est au format "Réglette".

```php
<?php

// Paramétrage au format "Lettre"
$affichage->setFormat('letter');

// Paramétrage au format "Réglette"
$affichage->setFormat('range');

// Paramétrage au format "Incide"
$affichage->setFormat('index');
```

Il est possible de générer un affichage suivant l'une des variantes définie par la [charte graphique](doc/Charte_graphique_detaillee_(FR).pdf). Par défaut, l'affichage est en variante A3.

```php
<?php

// La méthode setVariant() accepte les valeurs 'a1', 'a2', 'a3', 'a4' et 'c'
$affichage->setVariant('a1');
```

Les proportions du visuel généré suivent la hauteur définie. Par défaut, la hauteur est de 100px mais peut être redéfinie.

```php
<?php

// La méthode setLabelHeight() accepte une valeur numérique en px
$affichage->setLabelHeight(180);
```

### Récupérer le visuel

Une fois un score défini et le paramétrage du visuel réalisé, il est possible d'afficher le rendu.

```php
<?php

// La méthode printLabel() génère le visuel au format HTML
$affichage->printLabel();
```

Si besoin, il est aussi possible de récupérer le contenu généré en HTML dans une variable :

```php
<?php

$affichage->htmlLabel();
```

## Exemple

Le code ci-dessous affichera un visuel de 200px de hauteur suivant les règles de la variante A1 au format "Lettre" pour un score déclaré de "A".

```php
<?php

use Altermaker\Affichage\Affichage;

$affichage = new Affichage();
$affichage->setVariant('a1')->setFormat('letter')->setLabelHeight(200)->setScoreLetter('A')->printLabel();
```

## À propos

### Prérequis

Le package Affichage `^1.0` fonctionne avec PHP 8.1 ou plus.

### Support

Le package Affichage 1.x bénéficie d'un support limité ne couvrant que les bugs importants.

### Auteur

Altermaker - <contact@altermaker.com> - <https://altermaker.com>

### Licence 

La package Affichage d'Altermaker et sous licence MIT - voir le fichier [LICENSE](LICENSE) pour plus de détails.