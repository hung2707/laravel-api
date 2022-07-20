FROM phpdockerio/php:8.0-fpm
WORKDIR "/application"

RUN apt-get update; \
    apt-get -y --no-install-recommends install \
        php8.0-mysql php8.0-xdebug php8.0-imagick php8.0-imap php8.0-gd php8.0-pgsql php8.0-redis \
        php8.0-redis; \
    apt-get clean; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

    # Install git
    RUN apt-get update \
        && apt-get -y install git \
        && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

    # Install npm
    COPY --from=node /usr/local/lib/node_modules /usr/local/lib/node_modules
    COPY --from=node /usr/local/bin/node /usr/local/bin/node
    RUN ln -s /usr/local/lib/node_modules/npm/bin/npm-cli.js /usr/local/bin/npm
    RUN npm install -g yarn
    RUN npm i -g npx