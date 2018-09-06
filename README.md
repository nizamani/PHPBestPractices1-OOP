# PHP Example App: OOP and Some Other Best Practices


## Overview

The goal of this project is to create a very basic example web app in PHP that follows leading standards primarily regarding OOP, along with some other best practices. We hope it will eventually become a good way for other OOP PHP beginners to learn OOP and some other best PHP practices. We plan on creating additional projects that will highlight other best practices in PHP.

A primary source of information and a highly recommended book is “Modernizing Legacy Applications in PHP” by Paul Jones.

It is well worth stating: there are *many* ways to program great applications. OOP is not the only way, and in fact the authors of this project have been using other paradigms in their web app. They created this example app to help themselves learn and improve their OOP knowledge.


## How to run

You’ll need what’s called a “server” with PHP running on your machine. A simple way to accomplish this is using a tool called XAMPP. (Since we’re talking about best practices, note that using XAMPP for local development is probably no longer considered a best practice in cutting edge PHP. It is likely the quickest way to get a server running PHP up though. Vagrant and Docker are the newer tools in this realm you may want to look into, but that is currently outside of the scope of this project.)

After you have a server, copy the contents of /src from this project into the root folder and then visit this URL  localhost/displaySingleUser/    You should see information displayed about a user in our “fake” db, including their favorite food and restaurant.


## Fake database

In order to make using and learning from this project as easy as possible, we have not included a real database. Instead, we created a bit of a fake database by putting some data into PHP arrays. In the future we're thinking we'll fork this project and add a MySQL database.


## What’s missing?

-Automated tests. This is a very important part of modern PHP development (coming soon, maybe in a fork of this project?)

-External dependencies using Composer. Most production web applications use “packages” from 3rd parties; this can save you a lot of time. Instead of writing code to, for example, get a file from an Amazon AWS S3 bucket, you could use Amazon’s “package”. Composer is a tool that helps manage these packages, and is used in most PHP projects.

-Visit <https://www.phptherightway.com/> for ideas on many other things we are not showing in this project. Xdebug, Templating, Caching, PHPDoc, etc.


## What could be different?

-Use Composer’s autoloader. Composer is a very popular package manager for PHP, and it includes an “autoloader”. An autoloader allows loading classes (from the /classes folder and from a /vendor folder, a place where your external Composer packages would typically be stored) to be used throughout your project easily. Currently we are using a simple script autoloader; typically though, an industry best practice would be to use Composer’s autoloader.


## Learning Resources

Some resources that we have found helpful:

<https://www.phptherightway.com/>

<https://leanpub.com/mlaphp>
