# SaaSrv

A saas boilerplate app developed in Laravel 5.

Tasks implemented:

- User authentication and account activation.
- Manage user account.
- Setting up and enabling/disabling Two Factor authentication.
- Deleting account.
- Subscribe user to a plan (member or team plan).
- Manage user's subscription (e.g. cancel, update subscription).
- Manage team member subscriptions and billing.
- Admins can impersonate members.

### Setup the app locally

- Pull the repository locally.
- If running Docker run `docker-compose up`.
- Run migrations via `php artisan migrate`. If running on Docker you need to run them in the app container (so `docker-compose exec app bash` and then migrate)
- Seed the databse by `php artisan db:seed`


### Notes

1. To run the app within the container, needs to owned by www-data user and group, so need to 

```
chown -R www-data:www-data .
```


2. To edit the files on localhost, run this in local terminal from the repo root directory

```
sudo setfacl -Rm u:<username>:rwx,d:u:<username>:rwx application/
```

3. When generating new files need to chown them too, so in local terminal run (or see bullet 1)

```
sudo chown <username>:<username> ./application
```