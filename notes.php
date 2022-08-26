<?php 
/**
 * git tocken      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
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
 * for to create
       docker volume create volume_name
 * 
 * 
 * 
 * 
 * 
 * 
 */

