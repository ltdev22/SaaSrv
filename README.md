# SaaSrv

A saas boilerplate app developed in Laravel 5.


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