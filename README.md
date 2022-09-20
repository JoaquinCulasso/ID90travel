# Challenge ID90TRAVEL


### Steps to follow: 

1. clone repository
2. change directory root directory project
3. run command docker compose
```bash
docker-compose up -d --build
```
4. enter container
```bash
docker exec -it id_90_travel /bin/sh
```
5. install composer dependency
```bash
composer install
```
6. run all tests with command
```bash
composer run-tests
```

### Requirements project [here](./requirements.md)