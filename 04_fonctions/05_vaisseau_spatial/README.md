---
tags:
  - exercises
  - php
---

# Préparation d'un vaisseau spatial

## Contexte et objectifs

Qui ne rêve pas d'aller dans l'espace ? Alors préparons-nous et vérifions si notre vaisseau spatial est prêt à voler !

## Spécifications

Codez deux fonctions :

- `checkFuelLevel` qui prend **un entier** comme _paramètre d'entrée_ et _renvoie_ **une string** en fonction du niveau de carburant :
- si le niveau de carburant est supérieur à 20, c'est "green"
- si le niveau de carburant est supérieur à 10, c'est "yellow"
- sinon, c'est "red"

Exemple :

```php
$fullFuelLevel = checkFuelLevel(30); // => Fuel level : green

$mediumFuelLevel = checkFuelLevel(12); // => Fuel level : yellow

$lowFuelLevel = checkFuelLevel(1); // => Fuel level : red
```

- `checkCargoHold` qui prend **un tableau** comme _paramètre d'entrée_ et _renvoie_ **une string** en fonction de l'espace restant :
- si la cargaison contient quatre articles, vous êtes plein
- si elle contient moins de quatre articles, vous devez calculer l'espace restant
- si elle dépasse quatre articles, vous devez calculer le nombre d'articles à éliminer

Exemple :

```php
$fullCargo = checkCargoHold([<4 articles>]); // => Full

$spaciousCargo = checkCargoHold(<2 articles>); // => `Spaces available: 2`

$overfullCargo = checkCargoHold(<8 articles>); // => `Overweight of 4 elements`
```
