# Attributes

## 📦 Install

```bash

composer require grupo-cometa/attributes

```

## 🔨 Usage

```php

<?php

require __DIR__.'/vendor/autoload.php';

use Cometa\Attributes;

$empresa = new Attributes;

$empresa->nome = 'Grupo Cometa';
$empresa->slogan = 'Paixão em Servir';
$empresa->endereco->cidade = 'Cáceres';
$empresa->endereco->estado = 'Mato Grosso';

```

## Example

<h1 align="center">
  <br>
  <a href="https://nuclei.projectdiscovery.io"><img src="result.png" width="300px" alt="Exemplo"></a>
</h1>
