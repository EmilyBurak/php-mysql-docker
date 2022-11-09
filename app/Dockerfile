FROM php:7.4-cli
RUN docker-php-ext-install mysqli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
RUN echo "$(php ./script.php)" > ./result
CMD ["bash"]

# 