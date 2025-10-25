---
tags:
  - exercises
  - php
---

# Jeu de devinette de nombres

## Contexte et objectifs

Dans cet exercice, vous devez coder un jeu ! Comme vous le verrez, il est important de rendre votre gameplay "naturel" et "fluide" en donnant des indices à l'utilisateur (comme l'intervalle de nombres à choisir).

## Spécifications

En utilisant `readline`, écrivez un programme qui génère un [nombre aléatoire](https://www.php.net/rand) dans un intervalle donnée (le nombre mystère) et demande à l'utilisateur d'écrire un nombre (il doit essayer de le deviner).

Voici les réponses possibles du programme :

- Ce n'est pas un nombre : "Ce n'était pas un nombre"
- Hors de l'intervalle : "Le nombre est compris entre 1 et 100"
- Trop bas : "Trop bas"
- Trop élevé : "Trop élevé"
- Succès : "Vous avez gagné !"

Une séquence de jeu complète devrait ressembler à ceci :

```
Bienvenue !
Vous devez trouver le bon nombre, entre 1 et 100 !
Bonne chance !

Saisir un nombre :

> Coucou
Ceci n'était pas un nombre

Saisir un nombre :

> 50
Trop élevé

Saisir un nombre :

> 20
Trop bas

Saisir un nombre :

> 48
Vous avez gagné !
```

La fonction `numberGame` prend un nombre minimum et un nombre maximum optionnels. Pour le nombre aléatoire généré, n'hésitez pas à considérer que le minimum est toujours égal à 1 (ou amusez-vous et essayez de générer un entier aléatoire compris entre le minimum et le maximum).

Le programme doit boucler jusqu'à ce que l'utilisateur devine le bon nombre.

## Conseil

N'hésitez pas à appuyer sur Ctrl + C pour quitter un programme en cours d'exécution.
