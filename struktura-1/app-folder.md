# Папка app



{% tabs %}
{% tab title="config" %}
Здесь могут содержаться большое кол-во файлов настроек с применением стандартов JSON

{% hint style="info" %}
Стандартный файл с настройками называется **config.json**
{% endhint %}
{% endtab %}

{% tab title="controllers" %}
Здесь хранятся классы которые наследуются от главного класса **Controller**

```php
<?php

// Главный метод который можно вызвать

Controller()->request(App $app);
```
{% endtab %}

{% tab title="routes" %}
Здесь находятся файлы маршрутов **URL**

{% code title="web.php" %}
```php
<?php

$Router->respond('GET', '/', function () use ($App) {
    return $App->getView()->get("index");
});
```
{% endcode %}

{% code title="ajax.php" %}
```php
<?php

$Router->respond('GET', '/', function () use ($App) {
    return $App->getView()->get("index");
});
```
{% endcode %}
{% endtab %}
{% endtabs %}



