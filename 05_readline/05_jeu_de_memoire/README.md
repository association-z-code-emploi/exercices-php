---
tags:
  - exercises
  - php
---

# Jeu de mémoire

## Contexte et objectifs

Le _Memory_ est un jeu où vous avez des cartes retournées devant vous et devez trouver des paires. Vous pouvez retourner deux cartes à la fois ; si elles sont identiques, elles restent visibles ; sinon, elles se retournent à nouveau.

Une séquence de jeu complète devrait ressembler à ceci :

```
Welcome in the Memory Game!
--------------------------------
[ '1:🐰', '2:🎃', '3:🐰', '4:🎃' ]
Press [Enter] to start!
>

--------------------------------
[ '1:❔', '2:❔', '3:❔', '4:❔' ]
choose a card
> 1

--------------------------------
[ '1:🐰', '2:❔', '3:❔', '4:❔' ]
choose a card
> 2

--------------------------------
[ '1:🐰', '2:🎃', '3:❔', '4:❔' ]
Wrong!
Press [enter] to continue!

--------------------------------
[ '1:❔', '2:❔', '3:❔', '4:❔' ]
choose a card
> 1

--------------------------------
[ '1:🐰', '2:❔', '3:❔', '4:❔' ]
choose a card
> 3

--------------------------------
[ '1:🐰', '2:❔', '3:🐰', '4:❔' ]
choose a card
> 2

--------------------------------
[ '1:🐰', '2:🎃', '3:🐰', '4:❔' ]
choose a card
> 4

--------------------------------
[ '1:🐰', '2:🎃', '3:🐰', '4:🎃' ]
You won!
```

Pour cet exercice, la seule validation disponible est "faire fonctionner votre jeu" !

## Comment démarrer ?

### L'interface de jeu

Vous aurez besoin d'une interface de jeu, et vous devrez passer par `readline` et `echo` comme nous l'avons vu dans les exercices précédents !

### Le plateau

Pour que le jeu fonctionne, vous devrez présenter un plateau au joueur. Ce plateau doit contenir au moins deux paires de symboles, mais n'hésitez pas à en placer autant que vous le souhaitez !

Pour cette partie, vous aurez besoin :

- d'une fonction `createBoard()` qui renvoie le plateau ;
- d'une fonction `shuffle()` pour mélanger le plateau.

Si vous le souhaitez, `createBoard()` peut initialement renvoyer un tableau codé "en dur". Une fois que tout fonctionne, n'hésitez pas à implémenter une version plus complexe pour sélectionner aléatoirement des symboles, par exemple.

Mais n'oubliez pas :

- chaque symbole du plateau doit être présent par paire ;
- vous devrez stocker les informations indiquant si le symbole a été découvert par le joueur ou non.

### L'affichage

Voici quelques conseils pour l'affichage du plateau :

- même si aucun symbole n'a encore été découvert, vous autre besoin d'un moyen de tous les afficher, comme au début de la partie :

```
Welcome in the Memory Game!
--------------------------------
[ '1:🐰', '2:🎃', '3:🐰', '4:🎃' ]
Press [Enter] to start!
>
```

- lorsqu'un symbole est choisi par l'utilisateur, son état change. L'affichage de `[ '1:🐰', '2:🎃', '3:🐰', '4:🎃' ]` ne signifie pas que cet exact symbole est stocké dans une variable...

- lorsque les éléments de votre tableau ont leur état, celui-ci devrait changer en fonction des choix de l'utilisateur :

```
--------------------------------
[ '1:🐰', '2:❔', '3:❔', '4:❔' ]
choose a card
> 2

--------------------------------
[ '1:🐰', '2:🎃', '3:❔', '4:❔' ]
Wrong!
Press [enter] to continue!
```

### La boucle de jeu

La logique de votre jeu repose sur les boucles de jeu. Tant que le joueur ne gagne pas, il continue à jouer, alors... que se passe-t-il ?

- Le joueur choisit une carte.
- Le joueur choisir une autre carte :
  - si les deux cartes correspondent, elles restent visibles
  - si c'était la dernière carte cachée du jeu, le joueur gagne !
  - si ce n'est pas le cas, il essaie de trouver une autre paire
  - si les deux cartes ne correspondent pas, elles redeviennent cachées et le joueur retente sa chance

### Que pourrait-il se passer pendant la partie ?

Dans un programme comme un jeu, comme celui que vous coder ici, il est important de prendre soin de vos utilisateurs. Donnez-leur quelques indices, comme le type d'entrée que vous attendez (un nombre ? une chaîne ?), et attendez-vous à ce qu'ils ne fassent pas comme vous le feriez si vous jouiez à votre propre jeu ou utilisiez votre propre application.

Comme le dit un vieil adage ancestral : "Si un utilisateur peut mal faire quelque chose, il le fera."
