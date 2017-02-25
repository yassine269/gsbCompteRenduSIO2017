# gsbCompteRenduSIO2017
Project based on symfony 3.2

Projet de gestion de compte rendu pour l'entreprise GSB

Structure du projet :
- app
  - ressources     ==> Resource général et surcharge de bundle
  - config         ==> fichiers de configurations
- bin              ==> console et check config server
- src              ==> Dossier contenant les différents bundles
  - MainBundle     ==> Bundle dédié aux traitements des actions utilisateurs
  - OCUserBundle   ==> Bundle dédié aux traitements des action d'administration
- tests            ==> Dossier contenant les différents tests unitaire et fonctionnel
- var              ==> Dossier contenant les fichiers temporaires
- vendor           ==> Dossier contenant toute les source externe (bundles et ressource symfony)
- web              ==> Dossier public (accés a ce dossier quand conexion au site)

Pour pouvoir travailler sur le projet localement suivre les étapes suivantes :

ETAPE 1 : RECUPERATION DU PROJET

- Installer et initialiser git sur son poste. (dans le répertoire voulu : git init)
- Rentrer les valeur des propriété nom et email. (git config --global user.name="retuza")
                                              et (git config --global user.email="charles.daud.cd@gmail.com")
- Paramétrer le remote. (remote add origin "https://github.com/retuza/gsbCompteRenduSIO2017")
- Récuperer les fichier depuis le repository. (git pull origin master)

//Maintenant le projet est dans votre répertoire local

ETAPE 2 : Installation vendors et parametrage

- Placez vous dans le dossier contenant le projet et lancer la commande (composer install)
- Lancez ensuite la commande (composer update)
- Initialiser la base de donnée (php bin/console dotrine:schema:create --force)
- Compléter le fichier app/config/parameters.yml

ETAPE 3 : Debug 

- En cas d'erreur lors du composer update ou composer install, lire le message d'erreur attentivement et modificier ce qui est demandé.
