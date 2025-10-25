---
tags:
  - exercises
  - php
---

# Are you readyyyy ?

## Contexte et objectifs

Rendons nos programmes plus actifs en faisant participer un utilisateur ! [`readline`](https://www.php.net/manual/fr/function.readline.php), une fonction intégrée à PHP, va nous permettre de récupérer une **string** donnée par l'utilisateur.

## Spécifications

La fonction `readyForm()` doit demander à un utilisateur s'il est prêt et afficher un message de motivation avant de fermer le "flux de transmission". Ce message doit répéter les propos de l'utilisateur.

Par exemple :

```
Bonjour utilisateur !
Es-tu prêt pour aujourd'hui ?!
> Chaud patate!
Wow, "Chaud patate!" ? Allons-y alors !
```

> ℹ️ Dans l'exemple ci-dessus, le signe ">" indique le moment où l'utilisateur a pu entrer du texte directement dans le terminal.

## Conseil

Faîtes attention aux boucles infinies : n'oubliez pas de faire Ctrl+C dans le terminal pour arrêter de force votre programme !
