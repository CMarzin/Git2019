# learning-symfony

This project contains what I learn at school about [Symfony](http://symfony.com/). :school_satchel:

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

## Generate a Bundle

You can easily generate a bundle with the Symfony CLI with the command :
`php bin/console generate:bundle` and then follow the Bundle Assistant instructions.
