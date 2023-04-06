# Requêtes de l'application

[Syntaxe Markdown](https://www.markdownguide.org/basic-syntax/)

## Sélectionner les nombres d'événements groupés par lieux

Afficher le nombre d'événements regroupés par lieux. On utilise COUNT(*) en combinaison avec GROUP BY pour compter les événements par lieu.

``` sql
SELECT lieux.id_lieux, lieux.nom, COUNT(*) FROM evenements
JOIN lieux on evenements.id_lieux=lieux.id_lieux
GROUP BY id_lieux;
```

---

## Une autre requête
> bla *bla* **bla**
>
> bla bla

>une image
>d'un aigle

![logo](./images/bird.jpg)

---
## Moyenne d'utilisateurs à des événements

> On utilise une sous-requête qui compte les utilisateurs par événement.
> On fait ensuite la moyenne de ces valeurs
> On doit attribuer un alias pour la sous-requête

``` sql
SELECT AVG(nb) FROM
(SELECT COUNT(*) as nb
FROM inscrire
GROUP BY `id_events`) sub
```