# Builder
FROM gliderlabs/herokuish
COPY . /tmp/app
ARG BUILDPACK_URL
ENV USER=herokuishuser
RUN /bin/herokuish buildpack build

RUN rm -rf /tmp/app

# Installing cron to shedule jobs
RUN apt update && apt install -y cron rsyslog
COPY cron /etc/cron.d/sheduler
RUN chmod 0600 /etc/cron.d/sheduler

# Post-install
ENV PATH $PATH:/app/.heroku/php/bin
RUN cd /app/ && composer run-script post-root-package-install

ENV USER=herokuishuser

ARG APP_PORT=5000
ENV PORT ${APP_PORT}
ENV APP_PORT ${APP_PORT}

### Laravel settings
# Dockerfile args, need to setup in .build.script [AUTO_DEVOPS_BUILD_IMAGE_EXTRA_ARGS]
ARG APP_URL="https://localhost"
ARG APP_SECURE="true"
ARG APP_ENV="local"
ARG APP_DEBUG="true"
ARG DB_DATABASE="database"
ARG DB_CONNECTION="mysql"

# Custom laravel env-s arg-loader
# ARG SENTRY_LARAVEL_DSN=""

# Container env-s
ENV APP_URL "${APP_URL}:${APP_PORT}"
ENV APP_ENV ${APP_ENV}
ENV APP_DEBUG ${APP_DEBUG}
ENV APP_SECURE ${APP_SECURE}
ENV DB_DATABASE ${DB_DATABASE}
ENV DB_CONNECTION ${DB_CONNECTION}

# Custom laravel env-s setup
# ENV SENTRY_LARAVEL_DSN ${SENTRY_LARAVEL_DSN}

EXPOSE ${APP_PORT}

# Run Application
CMD env >> /etc/environment; service cron start; service rsyslog start; /bin/herokuish procfile start web
