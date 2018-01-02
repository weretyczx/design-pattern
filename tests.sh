#!/bin/bash
set -eo pipefail

if [ "$1" = "" ]
then
    for i in $(find Tests -type f -name "*Test.php" | xargs -I {} basename {} .php)
    do
        ./vendor/bin/phpunit --colors --configuration phpunit.xml --filter $i
    done
else
    ./vendor/bin/phpunit --colors --filter="$1"
fi
