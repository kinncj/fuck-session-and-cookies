Symfony JWT
========================

This is a symfony standard with JWT authentication configured.

Check composer.json for dependencies.

#### Usage

```
php -S 127.0.0.1:80 app_dev.php
```

* Go to ```http://localhost/api/login```
* Login as any in_memory user at security.yml
* Send the token through a header "Authorization: bearer {token}" or query string ?bearer={token} to /api/example
