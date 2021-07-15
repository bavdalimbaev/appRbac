<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii RBAC project</h1>
    <br>
</p>

Login TO Project

-------------------

      role                login            password 

      admin               Admin            123123

      manager             Manager          123123

      user                User             123123


[comment]: <> (<p align="center">)

[comment]: <> (    <a href="https://github.com/yiisoft" target="_blank">)

[comment]: <> (        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">)

[comment]: <> (    </a>)

[comment]: <> (    <h1 align="center">Yii 2 Basic Project Template</h1>)

[comment]: <> (    <br>)

[comment]: <> (</p>)

[comment]: <> (Yii 2 Basic Project Template is a skeleton [Yii 2]&#40;http://www.yiiframework.com/&#41; application best for)

[comment]: <> (rapidly creating small projects.)

[comment]: <> (The template contains the basic features including user login/logout and a contact page.)

[comment]: <> (It includes all commonly used configurations that would allow you to focus on adding new)

[comment]: <> (features to your application.)

[comment]: <> ([![Latest Stable Version]&#40;https://img.shields.io/packagist/v/yiisoft/yii2-app-basic.svg&#41;]&#40;https://packagist.org/packages/yiisoft/yii2-app-basic&#41;)

[comment]: <> ([![Total Downloads]&#40;https://img.shields.io/packagist/dt/yiisoft/yii2-app-basic.svg&#41;]&#40;https://packagist.org/packages/yiisoft/yii2-app-basic&#41;)

[comment]: <> ([![build]&#40;https://github.com/yiisoft/yii2-app-basic/workflows/build/badge.svg&#41;]&#40;https://github.com/yiisoft/yii2-app-basic/actions?query=workflow%3Abuild&#41;)

[comment]: <> (DIRECTORY STRUCTURE)

[comment]: <> (-------------------)

[comment]: <> (      assets/             contains assets definition)

[comment]: <> (      commands/           contains console commands &#40;controllers&#41;)

[comment]: <> (      config/             contains application configurations)

[comment]: <> (      controllers/        contains Web controller classes)

[comment]: <> (      mail/               contains view files for e-mails)

[comment]: <> (      models/             contains model classes)

[comment]: <> (      runtime/            contains files generated during runtime)

[comment]: <> (      tests/              contains various tests for the basic application)

[comment]: <> (      vendor/             contains dependent 3rd-party packages)

[comment]: <> (      views/              contains view files for the Web application)

[comment]: <> (      web/                contains the entry script and Web resources)



[comment]: <> (REQUIREMENTS)

[comment]: <> (------------)

[comment]: <> (The minimum requirement by this project template that your Web server supports PHP 5.6.0.)


[comment]: <> (INSTALLATION)

[comment]: <> (------------)

[comment]: <> (### Install via Composer)

[comment]: <> (If you do not have [Composer]&#40;http://getcomposer.org/&#41;, you may install it by following the instructions)

[comment]: <> (at [getcomposer.org]&#40;http://getcomposer.org/doc/00-intro.md#installation-nix&#41;.)

[comment]: <> (You can then install this project template using the following command:)

[comment]: <> (~~~)

[comment]: <> (composer create-project --prefer-dist yiisoft/yii2-app-basic basic)

[comment]: <> (~~~)

[comment]: <> (Now you should be able to access the application through the following URL, assuming `basic` is the directory)

[comment]: <> (directly under the Web root.)

[comment]: <> (~~~)

[comment]: <> (http://localhost/basic/web/)

[comment]: <> (~~~)

[comment]: <> (### Install from an Archive File)

[comment]: <> (Extract the archive file downloaded from [yiiframework.com]&#40;http://www.yiiframework.com/download/&#41; to)

[comment]: <> (a directory named `basic` that is directly under the Web root.)

[comment]: <> (Set cookie validation key in `config/web.php` file to some random secret string:)

[comment]: <> (```php)

[comment]: <> ('request' => [)

[comment]: <> (    // !!! insert a secret key in the following &#40;if it is empty&#41; - this is required by cookie validation)

[comment]: <> (    'cookieValidationKey' => '<secret random string goes here>',)

[comment]: <> (],)

[comment]: <> (```)

[comment]: <> (You can then access the application through the following URL:)

[comment]: <> (~~~)

[comment]: <> (http://localhost/basic/web/)

[comment]: <> (~~~)


[comment]: <> (### Install with Docker)

[comment]: <> (Update your vendor packages)

[comment]: <> (    docker-compose run --rm php composer update --prefer-dist)
    
[comment]: <> (Run the installation triggers &#40;creating cookie validation code&#41;)

[comment]: <> (    docker-compose run --rm php composer install    )
    
[comment]: <> (Start the container)

[comment]: <> (    docker-compose up -d)
    
[comment]: <> (You can then access the application through the following URL:)

[comment]: <> (    http://127.0.0.1:8000)

[comment]: <> (**NOTES:** )

[comment]: <> (- Minimum required Docker engine version `17.04` for development &#40;see [Performance tuning for volume mounts]&#40;https://docs.docker.com/docker-for-mac/osxfs-caching/&#41;&#41;)

[comment]: <> (- The default configuration uses a host-volume in your home directory `.docker-composer` for composer caches)


[comment]: <> (CONFIGURATION)

[comment]: <> (-------------)

[comment]: <> (### Database)

[comment]: <> (Edit the file `config/db.php` with real data, for example:)

[comment]: <> (```php)

[comment]: <> (return [)

[comment]: <> (    'class' => 'yii\db\Connection',)

[comment]: <> (    'dsn' => 'mysql:host=localhost;dbname=yii2basic',)

[comment]: <> (    'username' => 'root',)

[comment]: <> (    'password' => '1234',)

[comment]: <> (    'charset' => 'utf8',)

[comment]: <> (];)

[comment]: <> (```)

[comment]: <> (**NOTES:**)

[comment]: <> (- Yii won't create the database for you, this has to be done manually before you can access it.)

[comment]: <> (- Check and edit the other files in the `config/` directory to customize your application as required.)

[comment]: <> (- Refer to the README in the `tests` directory for information specific to basic application tests.)


[comment]: <> (TESTING)

[comment]: <> (-------)

[comment]: <> (Tests are located in `tests` directory. They are developed with [Codeception PHP Testing Framework]&#40;http://codeception.com/&#41;.)

[comment]: <> (By default there are 3 test suites:)

[comment]: <> (- `unit`)

[comment]: <> (- `functional`)

[comment]: <> (- `acceptance`)

[comment]: <> (Tests can be executed by running)

[comment]: <> (```)

[comment]: <> (vendor/bin/codecept run)

[comment]: <> (```)

[comment]: <> (The command above will execute unit and functional tests. Unit tests are testing the system components, while functional)

[comment]: <> (tests are for testing user interaction. Acceptance tests are disabled by default as they require additional setup since)

[comment]: <> (they perform testing in real browser. )


[comment]: <> (### Running  acceptance tests)

[comment]: <> (To execute acceptance tests do the following:  )

[comment]: <> (1. Rename `tests/acceptance.suite.yml.example` to `tests/acceptance.suite.yml` to enable suite configuration)

[comment]: <> (2. Replace `codeception/base` package in `composer.json` with `codeception/codeception` to install full featured)

[comment]: <> (   version of Codeception)

[comment]: <> (3. Update dependencies with Composer )

[comment]: <> (    ```)

[comment]: <> (    composer update  )

[comment]: <> (    ```)

[comment]: <> (4. Download [Selenium Server]&#40;http://www.seleniumhq.org/download/&#41; and launch it:)

[comment]: <> (    ```)

[comment]: <> (    java -jar ~/selenium-server-standalone-x.xx.x.jar)

[comment]: <> (    ```)

[comment]: <> (    In case of using Selenium Server 3.0 with Firefox browser since v48 or Google Chrome since v53 you must download [GeckoDriver]&#40;https://github.com/mozilla/geckodriver/releases&#41; or [ChromeDriver]&#40;https://sites.google.com/a/chromium.org/chromedriver/downloads&#41; and launch Selenium with it:)

[comment]: <> (    ```)

[comment]: <> (    # for Firefox)

[comment]: <> (    java -jar -Dwebdriver.gecko.driver=~/geckodriver ~/selenium-server-standalone-3.xx.x.jar)
    
[comment]: <> (    # for Google Chrome)

[comment]: <> (    java -jar -Dwebdriver.chrome.driver=~/chromedriver ~/selenium-server-standalone-3.xx.x.jar)

[comment]: <> (    ``` )
    
[comment]: <> (    As an alternative way you can use already configured Docker container with older versions of Selenium and Firefox:)
    
[comment]: <> (    ```)

[comment]: <> (    docker run --net=host selenium/standalone-firefox:2.53.0)

[comment]: <> (    ```)

[comment]: <> (5. &#40;Optional&#41; Create `yii2basic_test` database and update it by applying migrations if you have them.)

[comment]: <> (   ```)

[comment]: <> (   tests/bin/yii migrate)

[comment]: <> (   ```)

[comment]: <> (   The database configuration can be found at `config/test_db.php`.)


[comment]: <> (6. Start web server:)

[comment]: <> (    ```)

[comment]: <> (    tests/bin/yii serve)

[comment]: <> (    ```)

[comment]: <> (7. Now you can run all available tests)

[comment]: <> (   ```)

[comment]: <> (   # run all available tests)

[comment]: <> (   vendor/bin/codecept run)

[comment]: <> (   # run acceptance tests)

[comment]: <> (   vendor/bin/codecept run acceptance)

[comment]: <> (   # run only unit and functional tests)

[comment]: <> (   vendor/bin/codecept run unit,functional)

[comment]: <> (   ```)

[comment]: <> (### Code coverage support)

[comment]: <> (By default, code coverage is disabled in `codeception.yml` configuration file, you should uncomment needed rows to be able)

[comment]: <> (to collect code coverage. You can run your tests and collect coverage with the following command:)

[comment]: <> (```)

[comment]: <> (#collect coverage for all tests)

[comment]: <> (vendor/bin/codecept run --coverage --coverage-html --coverage-xml)

[comment]: <> (#collect coverage only for unit tests)

[comment]: <> (vendor/bin/codecept run unit --coverage --coverage-html --coverage-xml)

[comment]: <> (#collect coverage for unit and functional tests)

[comment]: <> (vendor/bin/codecept run functional,unit --coverage --coverage-html --coverage-xml)

[comment]: <> (```)

[comment]: <> (You can see code coverage output under the `tests/_output` directory.)
