# hiring-tech-challenges

## General
Please complete both challenges below, and make sure you fully understand the challenges before you start on them. If you have any question, feel free to ask us. 

You're free to use any technology of your choice and any resources that are available to you. 

You're free to use any method of your choice to submit your code or share your code with us on finish.  

This is the opportunity for you to showcase your skills and knowledge of good programming practices and methodologies.

Thank you! 

## Challenge 1 - Fizz Buzz

Write a program that prints the numbers from 1 to 100. For numbers which are multiples of 3 print "Fizz" instead of the actual number and for the multiples of 5 print "Buzz". For numbers which are multiples of both 3 and 5 print "FizzBuzz".

## Challenge 2 - Twitter Feed 

Write a web application that dynamically feeds 10 Twitter Tweets that contains the word "engineering". 

Please include a list of technologies and resources used in your application. 

Please include a brief instruction of how to run your application.   

Please outline any possible improvements (any aspect) could be made, if you were to make your application production-ready. 

# Overview

## Requirement

[PHP](http://php.net) >= 5.6.4

[Composer](https://getcomposer.org) >= 1.2.4

## Resources

[Lumen](https://lumen.laravel.com) >= 5.3

[Vuejs](https://vuejs.org) >= 2.0

# Installation

    composer create-project

# Solution

## Challenge 1 - Fizz Buzz

    php artisan salmat:fizzbuzz
    
> file: app/Console/Commands/FizzBuzz.php

## Challenge 2 - Twitter Feed

Register and add twitter api key and token into `.env` from [twitter apps](https://apps.twitter.com)

    TWITTER_CONSUMER_KEY=
    TWITTER_CONSUMER_SECRET=
    TWITTER_ACCESS_TOKEN=
    TWITTER_ACCESS_TOKEN_SECRET=

Start up the server

    php -S localhost:8000 -t public
    
Open the url in the browser

    http://localhost:8000/search
    
As default, it will search 'engineering' from twitter,
you can type the keyword you want to search

It will get json output that search tweets from twitter, api addresss:

    http://localhost:8000/q/{keyword}
    
> files:

    app/Http/Controllers/TwitterController.php
    app/Providers/TwitterServiceProvider.php
    public/assets/search.js
    resources/views/twitter/search.php
    
### Resources of JavaScript and CSS

    bootstrap
    vuejs
    axios
    lodash
    moment

# TODO

- show images in tweet
- CROS
- handle mention
- handle tweet thread
- handle twitter api rate limit
- handle retweet details
- auto refresh tweets (streaming api?)