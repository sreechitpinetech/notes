<?php 
/**
 * git tocken      ghp_kmiFO5YS6gZ1EzK5gqOm5DBZLpW0Ro41WZq
 * 
 * What ?
 * Docker is an open source platform that enables developers to build, deploy, run, update and manage containers
 * It will allow isolated environment to run our application.
 * Docker is written in the Go programming language 
 * ex: need to install node for run webapp. 
 * 
 * Advantage
 * it allows easy deployement our app to another system(local/testing/production).
 * By using docker compose we can club our containers under a single file.
 * 
 * 
 * Images
 * An image is a read-only template with instructions for creating a Docker container.
 * We can download it from docker hub website.
 * so many images are available in docker hub. like mysql, apache, php 
 * 
 * Containers
 * A container is a runnable instance of an image.
 * You can create, start, stop, move, or delete a container using the Docker API or CLI.
 * By default, a container is relatively well isolated from other containers and its host machine.
 * 
 * Docker compose
 * we can use docker compose to run one or more containers more easily. Compose is a tool for defigning and running multi-containers.
 * we use docker-compose.YAML file to configure your applications.
 * with a single command we can start all services 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * For removing existing docker
 * 
 *  sudo apt-get purge docker-ce docker-ce-cli containerd.io docker-compose-plugin
 *  sudo rm -rf /var/lib/docker
 *  sudo rm -rf /var/lib/containerd
 * 
 * 
 * 
 * Install docker 
 * 
 * Before installing docker engine just need to upgrade all packages and resync file by using update. 
 * sudo apt-get upgrade
 * sudo apt-get update
 * 
 *      installing some packages/module, we need these packages before installing docker.
        sudo apt-get install \
        ca-certificates \
        curl \
        gnupg \
        lsb-release

 *      Add Docker’s official GPG key: (to check downloaded files using key)
        sudo mkdir -p /etc/apt/keyrings
        curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /etc/apt/keyrings/docker.gpg

 *      Use the following command to set up the repository
        echo \
        "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.gpg] https://download.docker.com/linux/ubuntu \
        $(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null
 * 
 *      install docker engine 
        sudo apt-get update
        //it will install latest docker version 
        sudo apt-get install docker-ce docker-ce-cli containerd.io docker-compose-plugin

 * 
 * 
 * for dowloading docker image from docker hub
       docker pull image_name(ex: nginx)
       for to know installed image run ---- docker images
 * for to know running containers run 
       docker ps
       docker ps -a ----------- for listing container of all state
 * for to run/up conatiner from image 
       docker run --name container_name -p 80:80 image_name
       docker run --name container_name -p 80:80 -d image_name  (detached mode)
 * for to stop container 
       docker stop container_name
 * for to remove container
       before removing we need to stop container
       then run
       docker rm container_name
 * for removing image
       docker rmi image_name
 * 
 * 
 * Volume
 * 
 *    for to create
      docker volume create volume_name
      run container
      docker run --name container_name -v volume_name:/use/share/nginx/html -p 8081:80 -d nginx
      /use/share/nginx/html ------ nginx server file idunnath ivideyanu
      docker contanerinte akathu kayaran
      docker exec -it contaner_name /bin/bash

      $ sudo ls /var/lib/docker/volumes/nginx_vol/_data/
 *    
 * 
 * 
 * 
 * 
 * 
 */

