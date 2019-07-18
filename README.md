Web Services de AFIP

Installation
============

```

Applications that use Symfony 2.x
----------------------------------------

### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require thedarsideofit/afip-bundle
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

### Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `config/bundles.php` file of your project:

```php
<?php

return [
    // ...
    Thedarsideofit\AfipBundle\AfipBundle::class => ['all' => true],
];

```

### Step 3: Add file config

In the `app/config/config.yml` file of your project:

```yaml
afip:
    parameters:
        CUIT: 20111111112
        production: false
        res_folder: 'Resources/afip/'
        ta_folder: 'Resources/afip/'
        cert: 'cert'
        key: 'key'
        passphrase: ''


```

### Step 4: Create res_folder

Add files cert and key

### Example use Afip in Controller
```php
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Gonzakpo\AfipBundle\Controller\AfipController;

class AppController extends AbstractController
{
    /**
     * @Route("/app", name="app")
     */
    public function index(AfipController $afip)
    {
        dump($afip->getWS());

        return $this->render('app/index.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }
}

```
### Other Example use Afip dependency injection
```php
...
use Gonzakpo\AfipBundle\Controller\AfipController;
...
    public function index()
    {
        $afip = $this->container->get(AfipController::class);
    }
...
```

## Dependencias
- El bundle implementa a thedarsideofit fork for [afipsdk-afip.php](https://github.com/thedarsideofit/afip.php) .

## Author
Gonzalo Alonso - gonkpo@gmail.com

## Adapter for Symfony 2 - Diego Ramirez dramirez@hydras.com.ar 
