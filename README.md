## Laravel 4.2 PHP Framework Boilerplate
----------------------------------------

While setting up any Laravel app, you need to setup many things like some of your favourite plugins, your common Utils, Exceptions, Constants etc.

I have created this boilerplate for my personal use and thought like it can also help some other people who are also tired with this type of setup every time.

This boilerplate includes following things:

* Plugins
    * [jenssegers/mongodb](https://github.com/jenssegers/laravel-mongodb) - MongoDB Development with you app
    * [jenssegers/mongodb-session](https://github.com/jenssegers/laravel-mongodb-session) - MongoDB session package for Laravel
    * [cviebrock/eloquent-typecast](https://github.com/cviebrock/eloquent-typecast) - A trait Type caster - when you are working with APIs with strict data types front-ends
    * [barryvdh/laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper) - ide helper
    * [doctrine/dbal](https://github.com/doctrine/dbal) - As a dependency of ide helper
* Custom Libraries
    * Base controller for all Controllers
    * Constants file - Can be used as default constants of your app, no need to setup a new constants file
    * AppRunTimeException - Exception to abort request at anytime and send error response to user
    * AppDataValidationException - Exception to handle validator messages by Laravel validator and send error to user
    * AppControllersFactory - Factory to store created instances of controllers
    * CommonAppUtils - Common Util functions like generateUUID, castObject, makeAssocArrOfObjectsByField etc.
    * Response Manager - Response Manager to setup a response structure
    * events.php - Put all your event listeners here


## Install
-----------

Here are the steps to get started:

* Clone this repository - `git clone`
* Run composer update command `composer update`

And you are ready to go.

## Credits

This Laravel App Boilerplate is created by [Mitul Golakiya](https://github.com/mitulgolakiya).

