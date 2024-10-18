### Run docker compose
```
docker-compose up --build
```
## Open an interactive bash shell inside the `kali_pentest` container
```
docker exec -it kali_pentest /bin/bash
```

## Update the package lists for upgrades and new package installations
```bash
apt-get update
```

## Install the `iputils-ping` package, which provides the `ping` command
```bash
apt-get install -y iputils-ping
```

## Use the `ping` command to check the connectivity to `php_web`
```bash
ping php_web
```

## Use the `ping` command to check the connectivity to `internal_api`
```bash
ping interal_api
```
