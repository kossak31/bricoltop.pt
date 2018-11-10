# bricoltop.pt

website do bricoltop


[bricoltop.pt](https://bricoltop.pt)

[bricoltop.online](https://bricoltop.online)


# activar SSL

## config nginx
listen 443 ssl;

ssl_certificate cert.pem;

ssl_certificate_key privatekey.pem;

## é necessario parar o webservice para usar o certbot
> systemctl stop nginx

### criar certificados com certbot
> certbot certonly --stanlone -d bricoltop.pt
