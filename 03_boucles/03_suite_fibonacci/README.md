---
tags:
  - exercises
  - php
---

# Suite de Fibonacci

## Contexte et objectifs

En mathématiques, la suite de Fibonacci (un mathématicien italien) est une suite de nombres entiers dans laquelle chaque nombre est la somme des deux nombres qui le précèdent. Elle commence par les nombres 0 et 1 puis se poursuit avec : 1, 2, 3, 5, 8, ... À vous de reproduire cette suite avec une boucle !

## Spécifications

Codez une boucle `for` qui reproduit la suite de Fibonacci un nombre de fois équivalent à la valeur numérique (nombre entier) d'une variable `times`.

Par exemple, si la valeur de `times` est 10, on affichera dans le terminal :

```
0
1
1
2
3
5
8
13
21
34
```

## Conseil

Le challenge de cet exercice est de bien comprendre le mécanisme de la suite de Fibonacci et d’identifier les éléments nécessaires à sa construction :

- on commence avec deux premières valeurs : 0 et 1
- on calcule ensuite la somme de ces deux nombres
- puis on "fait avancer" la suite :
  - la deuxième valeur utilisée précédemment (ici 1) devient la première pour le tour suivant, et le résultat de la somme précédente devient la seconde
  - on répète ce processus autant de fois que nécessaire

Si vous êtes en difficulté sur cet exercice, sollicitez un formateur !
