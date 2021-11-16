# dnsweb

Dnsweb is a software for map FQDN with ip

## Installation

### Vagrant

```bash
vagrant up
```

Open http://localhost:8080

### Docker

```bash
docker build . -t dnsweb
docker run -d dnsweb  --name dnsweb
```

### Docker-compose

```bash
docker-compose up -d dnsweb
```
