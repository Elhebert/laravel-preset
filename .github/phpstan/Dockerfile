FROM php:7.2-alpine

LABEL maintainer="Dieter Stinglhamber"

LABEL com.github.actions.name="PHPStan"
LABEL com.github.actions.description="Analyse your code using phpstan"
LABEL com.github.actions.icon="search"
LABEL com.github.actions.color="green"

RUN apk --update add curl
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

COPY entrypoint.sh /
RUN chmod +x /entrypoint.sh
ENTRYPOINT ["/entrypoint.sh"]
