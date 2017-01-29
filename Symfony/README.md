# Git2019 > Symfony

This project contains what we learn at school about [Symfony](http://symfony.com/). :school_satchel:

# Nomanclature Exo

Créer une nouvelle branche à partir de la branche symfony, ensuite dans le dossier Exo puis dans le dossier avec la date du jour. Créer votre propre dossier avec comme nomanclature votre pseudo Github, votre prenom et puis votre groupe
Exemple :
CMarzin-corentin-g2

En fin de cours vous pouvez merger votre branche avec la branche symfony.

# Requirements

## Composer

This project (and usually all Symfony Projects) is using [Composer](https://getcomposer.org/) as a Dependency Manager. Be sure it is installed correctly in your machine.

## php.ini

If not already done, you need to set your php.ini file.

1. Go to the path of your `php.ini` and open it in text editor. You can find this path with :
```bash
php --ini
```

2. Then you need to set
```bash
pdo_mysql.default_socket = [path/to/your/mysql/socket.sock]
```
with the path to your MySQL socket. On Mac OSX you can find it by simply run :
```bash
netstat -ln | grep mysql
```

3. Set also your Time Zone to whatever is yours.
```bash
date.timezone = Your/Timezone
```

# Installation

```bash
git clone git@github.com:H-L/learning-symfony.git && cd learning-symfony
composer install
```

Then test installation by running :
```bash
php bin/symfony_requirements
```

And that's all ! :sparkles:

# Symfony CLI and Console

To check all the Symfony commands line available in the Symfony Console, you can access to its list by running `php bin/console` in your current project directory.

Feel free to add an alias as you will use this CLI a lot in your projects:

```bash
#.bash_profile or .zshrc
alias sfc= "php bin/console"

```

*Note:* The Symfony CLIs are independent from the Symfony Project itself and are used in other projects like Laravel for example.

## Create Services
1. First create `YourBundle/Services/YourClass.php` and declare its namespace (which typically would be `namespace HeticBundle\Services;`)
2. Then create the methods you want to reuse later in YourClass.
3. Declare YourClass
```yaml
# YourBundle/Ressources/config/services.yml
services:
  yourbundle.services.your_class:
      class: YourBundle\Services\YourClassService
```
4. Now you can call YourClass in a new Action:
```php
<?php
// YourBundle/YourEntityController
public function indexAction()
{
	$service = $this->get('yourbundle.services.your_class');
	// ... rest of your code
}
```
5. (Optionnal but recommended)
If you want to use all the datas on a particular Entity, you can add this:
```php
<?php
// YourBundle/Repository/YourEntityRepository.php
public function getAllDatas ()
{
	$data = $this->findAll();
	return $data;
}
```
It will be useful to call datas in your Controller:
```php
<?php
// YourBundle/YourEntityController
public function indexAction()
	{
		$service = $this->get('yourbundle.services.your_class');

    // Declare the Doctrine Entity Manager in $em for easier usage.
    $em = $this->getDoctrine()->getManager();

    // Get the Repository that correspond to YourEntity and use the method created above in the precedent code block.
    $datas = $em->getRepository('YourBundle:YourEntity')->getAllDatas();
  }
```
Now `$datas`  stocks all the datas from the tables of YourEntity.

6. Finally you need to tell YourController to return something. Usually it is rendering a view, with some datas as variables to be reused in this particular view.
```php
<?php
// YourBundle/YourEntityController
public function indexAction()
	{
		$service = $this->get('yourbundle.services.your_class');

    // Declare the Doctrine Entity Manager in $em for easier usage.
    $em = $this->getDoctrine()->getManager();

    // Get the Repository that correspond to YourEntity and use the method created above in the precedent code block.
    $datas = $em->getRepository('YourBundle:YourEntity')->getAllDatas();

    // Return a rendered view, with $datas as a variable.
    return $this->render('yourentity/index.html.twig',  array(
	    'datas' => $datas,
    ));
}
```
And in your view you will be able to use this variable and display it.
```twig
  {% extends "base.html.twig" %}

  {% block body %}
  	<p>{{ dump(datas) }}</p>
  {% endblock %}
```
