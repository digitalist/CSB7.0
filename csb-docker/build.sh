#!/usr/bin/env bash

docker build -t csb_web:latest .
docker build -t csb_php -f  csb-docker/php.dockerfile .

