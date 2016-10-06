# phing-simple-deployment
## Description
Simple phing deployment for basic web projects.

## Install
Checkout or download the project and copy the build folder to your own project. Change values in /build/config/project.properties and in
/build/config/env/*.

Install composer in /build (https://getcomposer.org/download/). Then run hello to check phing.

    cd build
    curl -sS https://getcomposer.org/installer | php
    php composer.phar install
    vendor/bin/phing hello

Run install.

    vendor/bin/phing install

## Available commands:
* hello - say hello
* install - install the project
* update - update the project
* prepare - recreate project config

## Available Features
* create configs from .dist files
* install and update composer and dependencies

## Planned Features
* compress files for sync
* sync files to remote host
* deploy database to remote host

## Changelog

### v0.0.2
* add php skeleton to test phing

### v0.0.1
* initial release
    * basic features