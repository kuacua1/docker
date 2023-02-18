#!/bin/bash

//	chmod +x miarchivo.sh

cd docker/login
docker-compose up --no-start
cd ..
cd wordpress
docker-compose up --no-start
cd ..
cd registro
docker-compose up --no-start
