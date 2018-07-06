# Light MVC Framework on PHP

This is a light PHP framework that allows you to create a project using MVC model.

This repo contains:
  - **assets** - Public files such as Css,Js,Img
  - **controller** - page controllers
  - **core** - routing and functions
  - **model** - project models
  - **tempaltes** - html templates
  - **view** - views (web pages)
  - **index.php** - the app
  - **.htaccess** - routing

# Features

  - Model-View-Controller architecture
  - Easily manageable design pattern
  - Light


What is MVC? [Click Here](http://wikipedia.org/wiki/Model-View-Controller) to learn more.

### Installation

Recommended PHP version is 7.1+

To install this project, simply clone this repo, and you should be good to go!

![Preview](https://i.imgur.com/tox8c6i.png)

### Development

Want to contribute or make your own project? Great!

Both Controller and Model folders have sample files inside. 
Sample file gives you the basic usage template. 

To create a model, view or a controller, set the name of the file, to match the next template: **<name><type>.php**
  
**Example**: 
<modelName>Model.php, <controllerName>Controller.php, <viewName>View.php

So if we want to make a /**test** page on our website, simply create:
**test**model.php, **test**Controller.php, **test**View.php

Every model declares an **app** variable:
```php
global $app;
$app = new <modelName>();
```
Which is being called inside of our controller 
```php
$data = $app;
```
Controller works with our data and generates the page, by passing a view inside of the given template.

Controllers are being called from the **route.php** file, which is loading a controller based on the URL. 
**Page URL -> Controller Name**

License
----

MIT, Created by Arthur James (Arti_Djeims)


**Free Software, Rocks!**
