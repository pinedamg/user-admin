#!/bin/sh

docker-compose -f docker-compose-ci.yml up -d

sleep 5

docker ps -a

docker exec -it erdiko_users_php /code/scripts/dev/update-composer.sh
docker exec -it erdiko_users_php /code/scripts/install-db.sh