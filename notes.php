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
 * sudo apt-get upgrade
 * sudo apt-get update
 * 
 *      installing some packages
        sudo apt-get install \
        ca-certificates \
        curl \
        gnupg \
        lsb-release
 * 
 *      Add Docker’s official GPG key:
        sudo mkdir -p /etc/apt/keyrings
        curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /etc/apt/keyrings/docker.gpg

 *      Use the following command to set up the repository
        echo \
        "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.gpg] https://download.docker.com/linux/ubuntu \
        $(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null
 * 
 *      install docker engine 
        sudo apt-get update
        sudo apt-get install docker-ce docker-ce-cli containerd.io docker-compose-plugin

 * 
 * 
 * 
 * 
 * 
 * 
 * 
 */

