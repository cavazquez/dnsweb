# dnsweb

![](https://github.com/cavazquez/dnsweb/blob/master/dnsweb.gif)

Dnsweb is a software to map FQDN with ip

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
