# ci3.base
Skeleton base for CodeIgniter version 3.x, so we add
* layout (multiple)
* config (var)
* router (var)

### Edicion `rapida`

Administrable edicion rapida, opcional para no editar por base de datos, unica opción

```
// Edicion para titutulo en ingles 'preponer el numero id del idioma' se
// 1 = spanish
// 2 = english
```

Para editar el contenido tenemos estas opciones

1 : *editar post en español*

```
http://lasercenter.dev/admin/edit/la-mejor-solucion-a-sus-problemas-visuales
http://lasercenter.dev/admin/edit/1la-mejor-solucion-a-sus-problemas-visuales
```

2 : *editar post en ingles*

```
http://lasercenter.dev/admin/edit/2services-of-ophthalmology-quito-ecuador
```

## Mail Contact

For send mail require `config application/config/email.php`

```
<?php
    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'ssl://smtp.gmail.com';
    $config['smtp_port'] = '465';
    $config['smtp_user'] = 'xxx@gmail.com'; //change this
    $config['smtp_pass'] = 'xxx';
    $config['mailtype'] = 'html';
	$config['charset'] = 'UTF-8';
    $config['wordwrap'] = TRUE;
    $config['newline'] = "\r\n";
```

Send mail to contact config `application/config/config_site.php`

```
	//Email contact
	$config['cs_email_contact'] = 'peperios@mailinator.com';
```
