#!/bin/bash

# install all PHP dependencies
if [ "$BUILD_ARGUMENT_ENV" = "dev" ] || [ "$BUILD_ARGUMENT_ENV" = "test" ]; then COMPOSER_MEMORY_LIMIT=-1 composer install --optimize-autoloader --no-interaction --no-progress; \
    else COMPOSER_MEMORY_LIMIT=-1 composer install --optimize-autoloader --no-interaction; \
fi
 #COMPOSER_MEMORY_LIMIT=-1 composer install --optimize-autoloader --no-interaction --no-progress --no-dev;

#change ownership of our applications
chown -R www-data:www-data $APP_HOME

apachectl -D FOREGROUND
