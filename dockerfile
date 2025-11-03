# mon serveur web a moi 
FROM ubuntu:24.04

LABEL maintainer="ubuntu + Apache"

# eviter les interactions 
ENV DEBIAN_FRONTEND=noninteractive

# executer la mis a jour de la distrib 
RUN apt-get update && apt-get upgrade -y

# instalation des paquets apache 
RUN apt-get install apache2 -y 

# ouverture du port du contenaire 
EXPOSE 80

# lancement du service apache dans le contenaire 
CMD ["apachectl","-D","FOREGROUND"]