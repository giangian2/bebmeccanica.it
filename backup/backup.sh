#!/bin/sh
for i in $(seq 1 30); do
        mysqladmin ping -h db -u root -p"${MYSQL_ROOT_PASSWORD}" --silent
        if [ $? -eq 0 ]; then
                echo "MySQL è pronto!"
                break
        fi
        echo "Aspetto MySQL..."
        sleep 1
done

                          # Se MySQL non è pronto, esci con errore
                          # if [ $i -eq 30 ]; then
                          #   echo "MySQL non è raggiungibile, esco."
                          #     exit 1
                          #     fi
mysqldump -h db -u root -ps6Z2yGEFsKB5eJh admin_bebmeccanica > /backup/dump.sql
aws s3 cp /backup/dump.sql s3://backupservervesta/database/bebmeccanica.it/dump-$(date +%F-%H%M%S).sql
