# Gousto Test

This is a test project

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes.

### Prerequisites

Before you start, you must have composer and npm installed
Also your local environment must have:
* PHP >= 7.1.3
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension
* Ctype PHP Extension
* JSON PHP Extension

### Installing

A step by step series of examples that tell you have to get a development env running

Say what the step will be

```
git clone ...
```

```
composer install
```

```
composer dump-autoload
```

```
npm install //In this case is really not necessary 
```

Configure .env with database details (If .env is not present on root folder then rename .env.example into .env)


```
php artisan config:cache
php artisan cache:clear
```

```
php artisan migrate --seed //This will generate the tables and add seed data.
```

On preview command i've also done the import for the CSV

## Deployment

This is not the case for the moment

## Built With

* [Laravel Framework](http://laravel.com/docs) - The web framework used.

## Your reasons for your choice of web application framework

I've used Laravel because of my experience with it, and because is one of the greatest PHP frameworks and ready to use for api and web applications

## Explain how your solution would cater for different API consumers that require different recipe data e.g. a mobile app and the front-end of a website

Well, beeing and API, it can be used for mobile and web integration without any issue. We can create an api page for costumers, so they can access all the routes that you allowed them to use (We can also use tools like https://swagger.io/)

## Anything else you think is relevant to your solution
What i've done is to respect all the requirements from the doc, but there are many more things to do for an applications like this:
- Authorization for access routes (Maybe with role access)
- Rate view per Recipe
- Rate edit for Recipe
- Delete Rate
- Recipe -> getRecipeBy() with any element
- Delete Recipe
- so on.



## Authors

* **Stefan Cuculeac** - [GitHUB](https://github.com/essteffan)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).