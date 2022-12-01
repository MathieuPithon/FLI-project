# FLI-project (Fast Lend Inventory)
 le Fast Lend Inventory Project est un projet scolaire en Laravel/Livewire qui a pour but de créer une application de gestion d'inventaire et de prêt pour l'école à destination des étudiants
 
 ## Présentation
 
C'est une application web (utilisable en mobile) nécessitant une connexion, qui permet à l'administration de l'école de gérer les stocks, de controller les emprunts et configurer différents paramètres (nombre d'emprunt max, durée de prêt etc), et aux élèves de se connecter à leur nom et de parcourir le stock de produits disponible, et de sélectionner celui qu'ils souhaitent emprunter.

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
