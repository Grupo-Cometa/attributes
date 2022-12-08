# Attributes

## 📦 Install

```bash

composer require grupo-cometa/attributes

```

## 🔨 Usage

```php

<?php

require __DIR__.'/vendor/autoload.php';

use PedroSouza\Attributes;

$attribute = new Attributes();

$attribute->name = 'Pedro';
$attribute->endereco->cidade = 'Cáceres';
$attribute->endereco->uf = 'MT';

print_r($attribute);

```
