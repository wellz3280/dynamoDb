FROM bref/php-81-fpm

ADD . $LAMBDA_TASK_ROOT

CMD ["public/index.php" ]