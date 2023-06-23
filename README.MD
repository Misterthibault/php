# Environnement pour projet Symfony avec stack docker

### Pour faire fonctionner un projet symfony sous docker suivez les étapes suivantes.
> installer docker suivant votre "opérateur system".
>- **sous linux** (https://docs.docker.com/engine/install/ubuntu/) .
>- **sous mac OS**(https://docs.docker.com/desktop/install/mac-install/).
>- **sous windows**(https://docs.docker.com/desktop/install/windows-install/).
### Puis installer Docker compose.
> le lien suivant vous donne la marche à suivre pour chaque "opérateur system" (https://docs.docker.com/compose/install/).

### Installation du projet (nouveau projet).
>Cloner ce repo en tapant en ligne de commande dans le dossier souhaité la commande suivante :
>- **"git clone https://github.com/guillaumeLeBot/env-project.git"**.
>- Renommer les variables d'environnement et mot de passe de la base de donnée dans les fichiers Dockerfile, docker-compose.yml et  default.conf, afin qu'il reflète votre nouveau projet.
#### Lancer les commandes docker suivantes :
>- docker compose build
>- docker compose up -d
>( Cela peut être un peu long la première fois car les images doivent être créés...).
#### Création du nouveau projet Symfony
>- En ligne de commande via votre éditeur (exemple : vscode) taper la commande suivante :
>- symfony new webapp .
> La commande symfony va creer un dossier 'app' avec tous les fichiers et dossier du framework.
#### Dernière étape la connexion à la base de donnée
> En ligne de commande sur votre Editeur, rendez vous dans le dossier 'app' et taper la commande suivante :
>- cp .env .en.local
>- Remplacer la ligne DATABASE_URL par la ligne suivante (commentez les autres dans le fichier .env et .env.local).
>- DATABASE_URL="mysql://USER:MDP@database:3306/DATABASE_NAME?serverVersion=8&charset=utf8mb4"
## Toutes les commandes Symfony sont à traiter dans Le container 'php'
> Pour se connecter au container soit via vscode avec l'extension 'docker' :
> - Dans ce cas clic gauche sur le container 'nom du projet-php' puis Attach Shell.
#### ou
>En ligne de commande  via l'EDI directement avec les commande docker :
>- docker-compose exec php /bin/bash
## Enjoy :)
