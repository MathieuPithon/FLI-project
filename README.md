# FLI-project (Fast Lend Inventory)
 le Fast Lend Inventory Project est un projet scolaire en Laravel/Livewire qui a pour but de créer une application de gestion d'inventaire et de prêt pour l'école à destination des étudiants
 
 ## Présentation
 
C'est une application web (utilisable en mobile) nécessitant une connexion, qui permet à l'administration de l'école de gérer les stocks, de controller les emprunts et configurer différents paramètres (nombre d'emprunt max, durée de prêt etc), et aux élèves de se connecter à leur nom et de parcourir le stock de produits disponible, et de sélectionner celui qu'ils souhaitent emprunter.

## fonctionnement:
- un utilisateur se connecte, choisit un produit dans la liste des produits disponible, le réserve à son nom et passe le chercher
- pour la récupération, c'est un admin qui valide le retour en stock


### core features:
- voir les stocks / les emprunts et trier par catégorie
- compte admin pour gérer les stocks et les retours 
- compte utilisateur pour réserver/emprunter un produit et voir les produits dispo

### suppléments:
- possibilité d'avoir une date de rendue personnalisable + prolongeable en cas de besoin
- possibilité de contacter un administrateur via un chat
- alerte admin si manque de stock
- des stats sur les emprunts
- pouvoir noter l'état du produit et signaler une malfonction
- voir l'historique d'emprunt d'un utilisateur/ d'un produit

### à voir?
- possibilité d'emprunt sans compte (ajouter sécurité genre dépot piece identité ou autre)


## fonctionnalités
- [x] Afficher la liste des objets
- [x] pouvoir emprunter un objet
- [ ] gestion utilisateurs

### fonctionnalités étudiants
- [ ] trier la liste des objets par disponibilité
- [ ] voir les dates de retour prévu 
- [ ] pouvoir filtrer par catégorie d'objet / faire une recherche
- [ ] voir la liste des objets empruntés 
- [ ] voir l'historique d'emprunt
- [ ] pouvoir contacter l'administration (via mail) 

### fonctionnalités administration
- [ ] gérer les comptes élèves/administration
- [x] ajouter de nouveaux objets
- [ ] voir ce que chaque élève a emprunté / son historique
- [ ] pouvoir contacter un élève (via mail)
- [ ] gérer les règles d'emprunt (nombre d'emprunt max par personne, durée par défaut de l'emprunt/durée max)
- [ ] gérer les tags/catégories des objets
- [ ] voir les dates de dernier emprunt
- [ ] voir des statistiques sur les objets/étudiants

## Objet
chaque objet doit avoir les informations suivantes:
- nom
- description
- image (facultatif)
- (admin) date d'ajout dans l'inventaire
- (admin) date de dernier emprunt
- (admin) emprunteur actuel
- date de retour prévu
- état (à voir)
- tags (exemple: un stylo aura comme tag "papeterie" et "stylo")
- quantité (dans le cas des objets interchangeable)
