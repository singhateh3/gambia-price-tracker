Dockerfile:21
Menu
--------------------
  20 |
  21 | >>> RUN php artisan config:clear && \
  22 | >>>     php artisan route:clear && \
  23 | >>>     php artisan cache:clear
  24 |
--------------------
error: failed to solve: process "/bin/sh -c php artisan config:clear &&     php artisan route:clear &&     php artisan cache:clear" did not complete successfully: exit code: 1
error: exit status 1
