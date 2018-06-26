# SyliusAttributeEnablerPlugin

SyliusAttributeEnablerPlugin allows to enable/disable attributes in Admin panel.

## Installation

Require plugin with composer:

```bash
composer require dvasilcenko/sylius-attribute-enabler-plugin
```

Import configuration:

```yaml
imports:
    - { resource: "@DvasilcenkoSyliusAttributeEnablerPlugin/Resources/config/app/config.yml" }
```

Import services:

````yaml
    - { resource: "@DvasilcenkoSyliusAttributeEnablerPlugin/Resources/config/app/services.yml" }
````

Add plugin class to your `AppKernel`:

```php
$bundles = [
    new \Dvasilcenko\SyliusAttributeEnablerPlugin\DvasilcenkoSyliusAttributeEnablerPlugin(),
];
```

Update the database schema
```
bin/console doctrine:schema:update --force
```

Copy templates from

```
vendor/dvasilcenko/sylius-attribute-enabler-plugin/src/Resources/views/SyliusAdminBundle/
```
to
```
app/Resources/SyliusAdminBundle/
```

Clear cache:

```bash
bin/console cache:clear
```

To see form label translations refresh administrators language