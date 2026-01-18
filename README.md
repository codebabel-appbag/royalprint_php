#  [![jackal-11-24-v2-32-inverted.png](https://i.postimg.cc/wBPhM5Lv/jackal-11-24-v2-32-inverted.png)]()  CODEBABEL

# royalprint: 1.0.0
## 📃 Description / Descrição
~~~
{EN}

royalprint is perfect for simplifying the information that needs to go to the console,
similar to printing in C++ command cout, PHP echo, log("Hi"), go("Hello ..."),
cout("whoami?"), puts("She Knows")... and more.

{PTBR}

royalprint é perfeita para simplificar as informações que precisam ir para o console,
com similaridade de impressão em C++ comando cout, PHP echo, log("Oi"), go("Olá ..."),
cout("whoami?"), puts("She Knows")... e mais.
~~~

![](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white)
![](https://img.shields.io/badge/license-MIT-blue)


[![](https://i.postimg.cc/HLxCjz9S/royalprint.png)]()

## 🌐 Content / Conteúdo
* [Installation](#installation)
* [All print formats](#formats)
* [Basic use](#basic)
* [Complete use](#complete)
* [Change log](#changelog)

### installation
## 💻 Installation / Instalação:
> `composer require codebabel/royalprint`

> `composer require codebabel/royalprint:v0.0.1`

## 📦 no 7zip install (no 7zip error)
> `composer require codebabel/royalprint --prefer-source`

## ✅ Codebabel go
~~~php
# codebabel go minimum syntax
<?php
require __DIR__.'/vendor/autoload.php';
use function royalprint\go;

$SayMyName = "SayMyName.";
go(sayMyName);

//> SayMyName.
~~~

## ✅ Codebabel show
~~~php
# codebabel show
<?php
require __DIR__.'/vendor/autoload.php';
use royalprint\show;

$seEuLargarOFreio = "Não diga que sou ruim!";
show($seEuLargarOFreio);

//> Não diga que sou ruim!
~~~

## ✅ Laravel xPrint
~~~php
# Laravel xPrint
<?php
require __DIR__.'/vendor/autoload.php';
use royalprint\xLaravel;

$showThis = "Do your jumps!";
xlaravel($showThis);

//> Do your jumps!
~~~
### formats
## 📊 All print formats / Todos os formatos
~~~
go
puts
show
cout
display
putline
printin
println
xlaravel

codebabel
devdalua
~~~
### basic
## 🔹 Basic use
~~~php
# easy pease fela / uso básico fela
<?php
require __DIR__.'/vendor/autoload.php';
use function royalprint\go;

$msgBox = "I am tea pot!";
go(msgBox); // simple console message > ...
~~~
### complete
## 🔹🔹 Complete use
~~~php
# complete use
<?php
require __DIR__.'/vendor/autoload.php';
use royalprint\go;
use royalprint\puts;
use royalprint\show;
use royalprint\cout;
use royalprint\display;
use royalprint\putline;
use royalprint\printin;
use royalprint\println;
use royalprint\codebabel;
use royalprint\devdalua;

$msgBox = "I am tea pot!";

// basic...
codebabel($msgBox);// [scm] simple console message > ...
devdalua($msgBox); // [scm] simple console message > ...

// Aesthetic Print...
go($msgBox);       // codebabel go
show($msgBox);     // codebabel show
puts($msgBox);     // Ruby puts
display($msgBox);  // cobol display
putline($msgBox);  // ada putline
cout($msgBox);     // c++ cout <
printin($msgBox);  // scala printin
println($msgBox);  // java println

// Aesthetic xPrint Thematic
xlaravel($msgBox); // Laravel xPrint
~~~
### changelog
## 🚨 Change Log
|Version| Version Name | Upgrade Latency |
|-------|--------------|-----------------|
| 1.0.0 |  royalprint  |    START LIB    |

## 💜 Thank's 🧡
~~~
{EN}
Thank you for using the royalprint library.
see ya!

{PTBR}
Valeu por usar a biblioteca royalprint.
tmj!
~~~
© Copyright 2026, Codebabel royalprint cross-language library.