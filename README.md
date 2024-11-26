# Friendship ended with XAMPP! Now docker is my best friend

Docker environment for local PHP development, includes the following:

| Software   |               Config file               |          Image          |                Notes                 |
|:-----------|:---------------------------------------:|:-----------------------:|:------------------------------------:|
| PHP        |              <Dockerfile>               |    `php:8.2-apache`     |                                      |
| MySQL      |          <docker-compose.yml>           |       `mysql:8.0`       |                                      |
| phpMyAdmin |          <docker-compose.yml>           | `phpmyadmin/phpmyadmin` |                                      |
| xdebug     | <xdebug.ini> (referenced in Dockerfile) |                         | Preconfigured to work with PhpStorm. |
