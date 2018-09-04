# PHP Example App: OOP and Some Other Best Practices


## What is this?

The goal of this project is to create a very basic web app in PHP that follows leading standards in regards to OOP; we hope it will eventually become a good way for beginners (and ourselves) to learn OOP and some other best PHP practices. We plan on creating additional projects that will highlight other best practices.

It is well worth stating though: there are *many* ways to program great applications. OOP is not the only way, and in fact the authors of this project have been using other paradigms in their web app. They created this example app to help themselves learn and improve their OOP knowledge.


## How to run the project

You’ll need what’s called a “server” with PHP running on your machine. A simple way to accomplish this is using a tool called XAMPP. (Since we’re talking about best practices, note that using XAMPP while developing is probably no longer considered a best practice in cutting edge PHP. It is likely the quickest way to get a server running PHP up though. Vagrant and Docker are the newer tools in this realm you may want to look into, but that is currently outside of the scope of this project.)


## Fake Database

In order to make using and learning from this project as easy as possible, we have not included a real database. Instead, we have created a bit of a fake database by putting some data into PHP arrays. In the future we're thinking we'll fork this project and add a MySQL database.


## What’s missing?

-Dependency Injection Container (coming soon)

-Automated tests. This is a very important part of modern PHP development (coming soon)

-External dependencies using Composer. Most production web applications use “packages” from 3rd parties; this can save you a lot of time. Instead of writing code to, for example, get a file from an Amazon AWS S3 bucket, you could use Amazon’s “package”. Composer is a tool that helps manage these packages, and is used in most PHP projects.

-Visit <https://www.phptherightway.com/> for ideas on many other things we are not showing in this project. Xdebug, Templating, Caching, PHPDoc, etc.


## What could be different?

-Use Composer’s autoloader. Composer is a very popular package manager for PHP, and it includes an “autoloader”. An autoloader allows loading classes (from the /classes folder and from a /vendor folder, a place where your external Composer packages would typically be stored) to be used throughout your project easily. Currently we are using a simple script autoloader; typically though, an industry best practice would be to use Composer’s autoloader.


## Learning Resources

Some resources that we have found helpful:

<https://www.phptherightway.com/>

<https://leanpub.com/mlaphp>
