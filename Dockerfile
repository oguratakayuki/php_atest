FROM php:8.2-fpm-alpine

# 必要なパッケージのインストール (apkを使用)
RUN apk update && apk add wget msmtp

# msmtpの設定ファイルをコピー
COPY msmtprc /etc/msmtprc
RUN ls -l /etc/msmtprc
RUN chmod 600 /etc/msmtprc

# mhsendmailのインストール
RUN wget https://github.com/mailhog/mhsendmail/releases/download/v0.2.0/mhsendmail_linux_amd64 -O /usr/local/bin/mhsendmail \
    && chmod +x /usr/local/bin/mhsendmail

# 作業ディレクトリを設定
WORKDIR /var/www/html

# php.iniをコピー
COPY php.ini /usr/local/etc/php/php.ini

# RUN chown root:msmtp /etc/msmtprc
RUN chown www-data:www-data /etc/msmtprc
# RUN chmod 640 /etc/msmtprc

# ソースコードをコピー
COPY register /var/www/html

RUN mkdir -p /var/log && chmod -R 777 /var/log
