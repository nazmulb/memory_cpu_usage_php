# memory-cpu-php
A library to get Memory and CPU usage in PHP

***Author:*** Md. Nazmul Basher
***Email:*** nazmul.basher@gmail.com

## Installation

```js
composer require nazmulb/memory-cpu-php dev-master
```

## Example

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use \NazmulB\MemoryCpuPhpLib\MemoryCpuUsage;

echo 'Server Memory Usage: ' . MemoryCpuUsage::getServerMemoryUsage().'<br />';
echo 'Server CPU Usage: ' . MemoryCpuUsage::getServerCpuUsage();
```