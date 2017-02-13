# Queen Attack Unit Testing

* A Queen Attack chess simulation app built to practice unit testing in PHP

#### February 13, 2017

#### By **Jason Brown & Zach Swanson**

## Description
  Practice unit testing in PHP.  Allowing user to attack other pieces on the board per allowable moves of a Queen.

| Behavior | Input Example | Output Example |
|----------|---------------|----------------|
| User enters X and Y coordinates to attack a piece on the board. | "c, 4" to "a,4" | 'true'|
| User enters coordinates. |"C,4" to "D,5"| 'true'|
| User enters coordinates. |"C,4" to "B,2"| 'false'|
| User enters coordinates. |"C,4" to "C,7"| 'true'|


## Setup/Installation Requirements

*  Clone github repository for places webpage
*  From your parent directory in terminal, run "$ composer install"
*  Run php server in terminal (from web directory) by typing "$ php -S localhost:8000"
*  in your browser type "localhost:8000"
*  Webpage will load.

## Known Bugs
_No known bugs exist._

## Technologies Used
* _HTML_
* _PHP_
* _TWIG_
* _SILEX_
* _Composer_


### License
*MIT

Copyright (c) 2017 Jason Brown & Zach Swanson All Rights Reserved.
