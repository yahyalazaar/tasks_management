#Task Management

## **Quick Installation**
First, clone repo and install all dependencies.

`$ git clone https://github.com/yahyalazaar/tasks_management.git task_management`
`$ cd task_management`
`$ composer install`

After that, setting up database config in .env file and then run migrate command.
`$ php artisan migrate`

You're ready to go! :)

## **Project tree**
.
├── app
│   ├── Console
│   │   └── Kernel.php
│   ├── Exceptions
│   │   └── Handler.php
│   ├── Http
│   │   ├── Controllers
│   │   │   ├── Auth
│   │   │   │   ├── ForgotPasswordController.php
│   │   │   │   ├── LoginController.php
│   │   │   │   ├── RegisterController.php
│   │   │   │   ├── ResetPasswordController.php
│   │   │   │   └── VerificationController.php
│   │   │   ├── Controller.php
│   │   │   ├── TaskController.php
│   │   │   └── TasksByUserController.php
│   │   ├── Kernel.php
│   │   └── Middleware
│   │       ├── Authenticate.php
│   │       ├── CheckForMaintenanceMode.php
│   │       ├── EncryptCookies.php
│   │       ├── RedirectIfAuthenticated.php
│   │       ├── TrimStrings.php
│   │       ├── TrustProxies.php
│   │       └── VerifyCsrfToken.php
│   ├── Models
│   │   ├── Task.php
│   │   └── User.php
│   ├── Policies
│   │   └── TaskPolicy.php
│   └── Providers
│       ├── AppServiceProvider.php
│       ├── AuthServiceProvider.php
│       ├── BroadcastServiceProvider.php
│       ├── EventServiceProvider.php
│       └── RouteServiceProvider.php
├── artisan
├── bootstrap
│   ├── app.php
│   └── cache
│       ├── packages.php
│       └── services.php
├── composer.json
├── composer.lock
├── config
│   ├── app.php
│   ├── auth.php
│   ├── broadcasting.php
│   ├── cache.php
│   ├── database.php
│   ├── filesystems.php
│   ├── hashing.php
│   ├── logging.php
│   ├── mail.php
│   ├── queue.php
│   ├── services.php
│   ├── session.php
│   └── view.php
├── database
│   ├── factories
│   │   ├── TaskFactory.php
│   │   └── UserFactory.php
│   ├── migrations
│   │   ├── 2019_07_10_000000_create_users_table.php
│   │   ├── 2019_07_10_024623_create_tasks_table.php
│   │   └── 2019_07_10_100000_create_password_resets_table.php
│   └── seeds
│       ├── DatabaseSeeder.php
│       ├── TasksTableSeeder.php
│       └── UsersTableSeeder.php
├── package.json
├── phpunit.xml
├── public
│   ├── css
│   │   └── app.css
│   ├── favicon.ico
│   ├── index.php
│   ├── js
│   │   └── app.js
│   ├── robots.txt
│   └── svg
│       ├── 403.svg
│       ├── 404.svg
│       ├── 500.svg
│       └── 503.svg
├── README.md
├── resources
│   ├── js
│   │   ├── app.js
│   │   ├── bootstrap.js
│   │   └── components
│   │       └── ExampleComponent.vue
│   ├── lang
│   │   └── en
│   │       ├── auth.php
│   │       ├── pagination.php
│   │       ├── passwords.php
│   │       └── validation.php
│   ├── sass
│   │   ├── app.scss
│   │   └── _variables.scss
│   └── views
│       ├── auth
│       │   ├── login.blade.php
│       │   ├── passwords
│       │   │   ├── email.blade.php
│       │   │   └── reset.blade.php
│       │   ├── register.blade.php
│       │   └── verify.blade.php
│       ├── layouts
│       │   └── app.blade.php
│       ├── tasks.blade.php
│       ├── tasksByUser.blade.php
│       └── welcome.blade.php
├── routes
│   ├── api.php
│   ├── channels.php
│   ├── console.php
│   └── web.php
├── server.php
├── storage
│   ├── app
│   │   └── public
│   ├── framework
│   │   ├── cache
│   │   │   └── data
│   │   │       ├── b0
│   │   │       │   └── 6c
│   │   │       └── b7
│   │   │           └── ff
│   │   ├── sessions
│   │   │   └── v6OUUQqZWwouRwMq0Y7CWUAnJ1OmfVrRYbzEFFsh
│   │   ├── testing
│   │   └── views
│   │       ├── 10060265308601b5bb158cc40e1ab17776c9ca49.php
│   │       ├── 10f4e8227a9e5868fa755e3064791514af44cd9a.php
│   │       ├── 1d868c855149d8620e3e75942b4b0d800bdcf7fd.php
│   │       ├── 2c5877696c2efd509a25590859afa794d9f52ebf.php
│   │       ├── 3adf8ff2b9fad1fd410c4dd7d801102cebd96376.php
│   │       ├── 3db20801f5eb88ff9c9b038695c612eaea2e3469.php
│   │       ├── 530091d58f1c2ab4b92198d58ae11b701d2f828d.php
│   │       ├── 58cc707a8c94e35120d73f2deb42fce1a4570e69.php
│   │       ├── 6cd18ecc6c0c939db5d4dc31b6ceeb154f961b79.php
│   │       ├── 81ba325abeea0a0b8efb099a2a3a7767c2460cfe.php
│   │       ├── 8a04da8f50580d8f13417dbdc9060682c2eea7c5.php
│   │       ├── 8c92a21b5d3fd1b19d3263127f54965bf3b390e3.php
│   │       ├── 9470d9f9df864893ab9ee97ff8ff656798210882.php
│   │       ├── a16fc049f825ef0fb90f3d3ba64120457b3b4e70.php
│   │       ├── b12b8142fc10b728877901232630216e8d7ad75d.php
│   │       ├── cadb00c66601fa862c6ea5240cb83a4105e3478c.php
│   │       ├── d2f24d572ca1aa4cff5cbf3c789a7220aa4f7324.php
│   │       ├── e76239ea98f30a0c742ee2ecb6363ddd0f55606c.php
│   │       └── f242f5aa28ea2a32bad9801d998e58b947a60b06.php
│   └── logs
│       ├── laravel-2019-07-10.log
│       └── laravel-2019-07-11.log
├── tests
│   ├── CreatesApplication.php
│   ├── Feature
│   │   └── ExampleTest.php
│   ├── TestCase.php
│   └── Unit
│       └── ExampleTest.php
├── vendor
│   ├── autoload.php
│   ├── beyondcode
│   │   └── laravel-dump-server
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── config
│   │       │   └── config.php
│   │       ├── CONTRIBUTING.md
│   │       ├── helpers.php
│   │       ├── LICENSE.md
│   │       ├── README.md
│   │       └── src
│   │           ├── Dumper.php
│   │           ├── DumpServerCommand.php
│   │           ├── DumpServerServiceProvider.php
│   │           └── RequestContextProvider.php
│   ├── bin
│   │   ├── php-parse -> ../nikic/php-parser/bin/php-parse
│   │   ├── phpunit -> ../phpunit/phpunit/phpunit
│   │   ├── psysh -> ../psy/psysh/bin/psysh
│   │   └── var-dump-server -> ../symfony/var-dumper/Resources/bin/var-dump-server
│   ├── composer
│   │   ├── autoload_classmap.php
│   │   ├── autoload_files.php
│   │   ├── autoload_namespaces.php
│   │   ├── autoload_psr4.php
│   │   ├── autoload_real.php
│   │   ├── autoload_static.php
│   │   ├── ClassLoader.php
│   │   ├── installed.json
│   │   └── LICENSE
│   ├── dnoegel
│   │   └── php-xdg-base-dir
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── phpunit.xml.dist
│   │       ├── README.md
│   │       ├── src
│   │       │   └── Xdg.php
│   │       └── tests
│   │           └── XdgTest.php
│   ├── doctrine
│   │   ├── inflector
│   │   │   ├── composer.json
│   │   │   ├── lib
│   │   │   │   └── Doctrine
│   │   │   │       └── Common
│   │   │   │           └── Inflector
│   │   │   │               └── Inflector.php
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── instantiator
│   │   │   ├── composer.json
│   │   │   ├── CONTRIBUTING.md
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       └── Doctrine
│   │   │           └── Instantiator
│   │   │               ├── Exception
│   │   │               │   ├── ExceptionInterface.php
│   │   │               │   ├── InvalidArgumentException.php
│   │   │               │   └── UnexpectedValueException.php
│   │   │               ├── InstantiatorInterface.php
│   │   │               └── Instantiator.php
│   │   └── lexer
│   │       ├── composer.json
│   │       ├── lib
│   │       │   └── Doctrine
│   │       │       └── Common
│   │       │           └── Lexer
│   │       │               └── AbstractLexer.php
│   │       ├── LICENSE
│   │       └── README.md
│   ├── dragonmantank
│   │   └── cron-expression
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       ├── src
│   │       │   └── Cron
│   │       │       ├── AbstractField.php
│   │       │       ├── CronExpression.php
│   │       │       ├── DayOfMonthField.php
│   │       │       ├── DayOfWeekField.php
│   │       │       ├── FieldFactory.php
│   │       │       ├── FieldInterface.php
│   │       │       ├── HoursField.php
│   │       │       ├── MinutesField.php
│   │       │       └── MonthField.php
│   │       └── tests
│   │           └── Cron
│   │               ├── AbstractFieldTest.php
│   │               ├── CronExpressionTest.php
│   │               ├── DayOfMonthFieldTest.php
│   │               ├── DayOfWeekFieldTest.php
│   │               ├── FieldFactoryTest.php
│   │               ├── HoursFieldTest.php
│   │               ├── MinutesFieldTest.php
│   │               └── MonthFieldTest.php
│   ├── egulias
│   │   └── email-validator
│   │       ├── composer.json
│   │       ├── EmailValidator
│   │       │   ├── EmailLexer.php
│   │       │   ├── EmailParser.php
│   │       │   ├── EmailValidator.php
│   │       │   ├── Exception
│   │       │   │   ├── AtextAfterCFWS.php
│   │       │   │   ├── CharNotAllowed.php
│   │       │   │   ├── CommaInDomain.php
│   │       │   │   ├── ConsecutiveAt.php
│   │       │   │   ├── ConsecutiveDot.php
│   │       │   │   ├── CRLFAtTheEnd.php
│   │       │   │   ├── CRLFX2.php
│   │       │   │   ├── CRNoLF.php
│   │       │   │   ├── DomainHyphened.php
│   │       │   │   ├── DotAtEnd.php
│   │       │   │   ├── DotAtStart.php
│   │       │   │   ├── ExpectingATEXT.php
│   │       │   │   ├── ExpectingAT.php
│   │       │   │   ├── ExpectingCTEXT.php
│   │       │   │   ├── ExpectingDomainLiteralClose.php
│   │       │   │   ├── ExpectingDTEXT.php
│   │       │   │   ├── ExpectingQPair.php
│   │       │   │   ├── InvalidEmail.php
│   │       │   │   ├── NoDNSRecord.php
│   │       │   │   ├── NoDomainPart.php
│   │       │   │   ├── NoLocalPart.php
│   │       │   │   ├── UnclosedComment.php
│   │       │   │   ├── UnclosedQuotedString.php
│   │       │   │   └── UnopenedComment.php
│   │       │   ├── Parser
│   │       │   │   ├── DomainPart.php
│   │       │   │   ├── LocalPart.php
│   │       │   │   └── Parser.php
│   │       │   ├── Validation
│   │       │   │   ├── DNSCheckValidation.php
│   │       │   │   ├── EmailValidation.php
│   │       │   │   ├── Error
│   │       │   │   │   ├── RFCWarnings.php
│   │       │   │   │   └── SpoofEmail.php
│   │       │   │   ├── Exception
│   │       │   │   │   └── EmptyValidationList.php
│   │       │   │   ├── MultipleErrors.php
│   │       │   │   ├── MultipleValidationWithAnd.php
│   │       │   │   ├── NoRFCWarningsValidation.php
│   │       │   │   ├── RFCValidation.php
│   │       │   │   └── SpoofCheckValidation.php
│   │       │   └── Warning
│   │       │       ├── AddressLiteral.php
│   │       │       ├── CFWSNearAt.php
│   │       │       ├── CFWSWithFWS.php
│   │       │       ├── Comment.php
│   │       │       ├── DeprecatedComment.php
│   │       │       ├── DomainLiteral.php
│   │       │       ├── DomainTooLong.php
│   │       │       ├── EmailTooLong.php
│   │       │       ├── IPV6BadChar.php
│   │       │       ├── IPV6ColonEnd.php
│   │       │       ├── IPV6ColonStart.php
│   │       │       ├── IPV6Deprecated.php
│   │       │       ├── IPV6DoubleColon.php
│   │       │       ├── IPV6GroupCount.php
│   │       │       ├── IPV6MaxGroups.php
│   │       │       ├── LabelTooLong.php
│   │       │       ├── LocalTooLong.php
│   │       │       ├── NoDNSMXRecord.php
│   │       │       ├── ObsoleteDTEXT.php
│   │       │       ├── QuotedPart.php
│   │       │       ├── QuotedString.php
│   │       │       ├── TLD.php
│   │       │       └── Warning.php
│   │       ├── LICENSE
│   │       ├── phpunit.xml.dist
│   │       └── README.md
│   ├── erusev
│   │   └── parsedown
│   │       ├── composer.json
│   │       ├── LICENSE.txt
│   │       ├── Parsedown.php
│   │       └── README.md
│   ├── fideloper
│   │   └── proxy
│   │       ├── composer.json
│   │       ├── config
│   │       │   └── trustedproxy.php
│   │       ├── LICENSE.md
│   │       └── src
│   │           ├── TrustedProxyServiceProvider.php
│   │           └── TrustProxies.php
│   ├── filp
│   │   └── whoops
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE.md
│   │       └── src
│   │           └── Whoops
│   │               ├── Exception
│   │               │   ├── ErrorException.php
│   │               │   ├── Formatter.php
│   │               │   ├── FrameCollection.php
│   │               │   ├── Frame.php
│   │               │   └── Inspector.php
│   │               ├── Handler
│   │               │   ├── CallbackHandler.php
│   │               │   ├── HandlerInterface.php
│   │               │   ├── Handler.php
│   │               │   ├── JsonResponseHandler.php
│   │               │   ├── PlainTextHandler.php
│   │               │   ├── PrettyPageHandler.php
│   │               │   └── XmlResponseHandler.php
│   │               ├── Resources
│   │               │   ├── css
│   │               │   │   └── whoops.base.css
│   │               │   ├── js
│   │               │   │   ├── clipboard.min.js
│   │               │   │   ├── prettify.min.js
│   │               │   │   ├── whoops.base.js
│   │               │   │   └── zepto.min.js
│   │               │   └── views
│   │               │       ├── env_details.html.php
│   │               │       ├── frame_code.html.php
│   │               │       ├── frame_list.html.php
│   │               │       ├── frames_container.html.php
│   │               │       ├── frames_description.html.php
│   │               │       ├── header.html.php
│   │               │       ├── header_outer.html.php
│   │               │       ├── layout.html.php
│   │               │       ├── panel_details.html.php
│   │               │       ├── panel_details_outer.html.php
│   │               │       ├── panel_left.html.php
│   │               │       └── panel_left_outer.html.php
│   │               ├── RunInterface.php
│   │               ├── Run.php
│   │               └── Util
│   │                   ├── HtmlDumperOutput.php
│   │                   ├── Misc.php
│   │                   ├── SystemFacade.php
│   │                   └── TemplateHelper.php
│   ├── fzaninotto
│   │   └── faker
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── CONTRIBUTING.md
│   │       ├── LICENSE
│   │       ├── Makefile
│   │       ├── phpunit.xml.dist
│   │       ├── readme.md
│   │       ├── src
│   │       │   ├── autoload.php
│   │       │   └── Faker
│   │       │       ├── Calculator
│   │       │       │   ├── Iban.php
│   │       │       │   ├── Inn.php
│   │       │       │   ├── Luhn.php
│   │       │       │   └── TCNo.php
│   │       │       ├── DefaultGenerator.php
│   │       │       ├── Documentor.php
│   │       │       ├── Factory.php
│   │       │       ├── Generator.php
│   │       │       ├── Guesser
│   │       │       │   └── Name.php
│   │       │       ├── ORM
│   │       │       │   ├── CakePHP
│   │       │       │   │   ├── ColumnTypeGuesser.php
│   │       │       │   │   ├── EntityPopulator.php
│   │       │       │   │   └── Populator.php
│   │       │       │   ├── Doctrine
│   │       │       │   │   ├── ColumnTypeGuesser.php
│   │       │       │   │   ├── EntityPopulator.php
│   │       │       │   │   └── Populator.php
│   │       │       │   ├── Mandango
│   │       │       │   │   ├── ColumnTypeGuesser.php
│   │       │       │   │   ├── EntityPopulator.php
│   │       │       │   │   └── Populator.php
│   │       │       │   ├── Propel
│   │       │       │   │   ├── ColumnTypeGuesser.php
│   │       │       │   │   ├── EntityPopulator.php
│   │       │       │   │   └── Populator.php
│   │       │       │   ├── Propel2
│   │       │       │   │   ├── ColumnTypeGuesser.php
│   │       │       │   │   ├── EntityPopulator.php
│   │       │       │   │   └── Populator.php
│   │       │       │   └── Spot
│   │       │       │       ├── ColumnTypeGuesser.php
│   │       │       │       ├── EntityPopulator.php
│   │       │       │       └── Populator.php
│   │       │       ├── Provider
│   │       │       │   ├── Address.php
│   │       │       │   ├── ar_JO
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── ar_SA
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Color.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── at_AT
│   │       │       │   │   └── Payment.php
│   │       │       │   ├── Barcode.php
│   │       │       │   ├── Base.php
│   │       │       │   ├── bg_BG
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── Biased.php
│   │       │       │   ├── bn_BD
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   ├── PhoneNumber.php
│   │       │       │   │   └── Utils.php
│   │       │       │   ├── Color.php
│   │       │       │   ├── Company.php
│   │       │       │   ├── cs_CZ
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── DateTime.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   ├── PhoneNumber.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── da_DK
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── DateTime.php
│   │       │       │   ├── de_AT
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   ├── PhoneNumber.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── de_CH
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   ├── PhoneNumber.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── de_DE
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   ├── PhoneNumber.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── el_CY
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── el_GR
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   ├── PhoneNumber.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── en_AU
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── en_CA
│   │       │       │   │   ├── Address.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── en_GB
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── en_HK
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── en_IN
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── en_NG
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── en_NZ
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── en_PH
│   │       │       │   │   ├── Address.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── en_SG
│   │       │       │   │   ├── Address.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── en_UG
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── en_US
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   ├── PhoneNumber.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── en_ZA
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── es_AR
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── es_ES
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   ├── PhoneNumber.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── es_PE
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── es_VE
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── fa_IR
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   ├── PhoneNumber.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── fi_FI
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── File.php
│   │       │       │   ├── fr_BE
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── fr_CA
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   └── Person.php
│   │       │       │   ├── fr_CH
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   ├── PhoneNumber.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── fr_FR
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   ├── PhoneNumber.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── he_IL
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── hr_HR
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── HtmlLorem.php
│   │       │       │   ├── hu_HU
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   ├── PhoneNumber.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── hy_AM
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Color.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── id_ID
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── Image.php
│   │       │       │   ├── Internet.php
│   │       │       │   ├── is_IS
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── it_CH
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   ├── PhoneNumber.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── it_IT
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   ├── PhoneNumber.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── ja_JP
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   ├── PhoneNumber.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── ka_GE
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Color.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── DateTime.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   ├── PhoneNumber.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── kk_KZ
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Color.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   ├── PhoneNumber.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── ko_KR
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   ├── PhoneNumber.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── Lorem.php
│   │       │       │   ├── lt_LT
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── lv_LV
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Color.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── me_ME
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── Miscellaneous.php
│   │       │       │   ├── mn_MN
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── ms_MY
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Miscellaneous.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── nb_NO
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── ne_NP
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── nl_BE
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   ├── PhoneNumber.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── nl_NL
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Color.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   ├── PhoneNumber.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── Payment.php
│   │       │       │   ├── Person.php
│   │       │       │   ├── PhoneNumber.php
│   │       │       │   ├── pl_PL
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   ├── PhoneNumber.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── pt_BR
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── check_digit.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── pt_PT
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── ro_MD
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   ├── PhoneNumber.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── ro_RO
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   ├── PhoneNumber.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── ru_RU
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Color.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   ├── PhoneNumber.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── sk_SK
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── sl_SI
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── sr_Cyrl_RS
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   └── Person.php
│   │       │       │   ├── sr_Latn_RS
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   └── Person.php
│   │       │       │   ├── sr_RS
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   └── Person.php
│   │       │       │   ├── sv_SE
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── Text.php
│   │       │       │   ├── th_TH
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Color.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── tr_TR
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Color.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── DateTime.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── uk_UA
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Color.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   ├── PhoneNumber.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── UserAgent.php
│   │       │       │   ├── Uuid.php
│   │       │       │   ├── vi_VN
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Color.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   ├── zh_CN
│   │       │       │   │   ├── Address.php
│   │       │       │   │   ├── Color.php
│   │       │       │   │   ├── Company.php
│   │       │       │   │   ├── DateTime.php
│   │       │       │   │   ├── Internet.php
│   │       │       │   │   ├── Payment.php
│   │       │       │   │   ├── Person.php
│   │       │       │   │   └── PhoneNumber.php
│   │       │       │   └── zh_TW
│   │       │       │       ├── Address.php
│   │       │       │       ├── Color.php
│   │       │       │       ├── Company.php
│   │       │       │       ├── DateTime.php
│   │       │       │       ├── Internet.php
│   │       │       │       ├── Payment.php
│   │       │       │       ├── Person.php
│   │       │       │       ├── PhoneNumber.php
│   │       │       │       └── Text.php
│   │       │       ├── UniqueGenerator.php
│   │       │       └── ValidGenerator.php
│   │       └── test
│   │           ├── documentor.php
│   │           ├── Faker
│   │           │   ├── Calculator
│   │           │   │   ├── IbanTest.php
│   │           │   │   ├── InnTest.php
│   │           │   │   ├── LuhnTest.php
│   │           │   │   └── TCNoTest.php
│   │           │   ├── DefaultGeneratorTest.php
│   │           │   ├── GeneratorTest.php
│   │           │   └── Provider
│   │           │       ├── AddressTest.php
│   │           │       ├── ar_JO
│   │           │       │   └── InternetTest.php
│   │           │       ├── ar_SA
│   │           │       │   └── InternetTest.php
│   │           │       ├── at_AT
│   │           │       │   └── PaymentTest.php
│   │           │       ├── BarcodeTest.php
│   │           │       ├── BaseTest.php
│   │           │       ├── bg_BG
│   │           │       │   └── PaymentTest.php
│   │           │       ├── BiasedTest.php
│   │           │       ├── bn_BD
│   │           │       │   └── PersonTest.php
│   │           │       ├── ColorTest.php
│   │           │       ├── CompanyTest.php
│   │           │       ├── cs_CZ
│   │           │       │   └── PersonTest.php
│   │           │       ├── da_DK
│   │           │       │   └── InternetTest.php
│   │           │       ├── DateTimeTest.php
│   │           │       ├── de_AT
│   │           │       │   ├── InternetTest.php
│   │           │       │   └── PhoneNumberTest.php
│   │           │       ├── de_CH
│   │           │       │   ├── AddressTest.php
│   │           │       │   ├── InternetTest.php
│   │           │       │   └── PhoneNumberTest.php
│   │           │       ├── de_DE
│   │           │       │   └── InternetTest.php
│   │           │       ├── el_GR
│   │           │       │   └── TextTest.php
│   │           │       ├── en_AU
│   │           │       │   └── AddressTest.php
│   │           │       ├── en_CA
│   │           │       │   └── AddressTest.php
│   │           │       ├── en_GB
│   │           │       │   └── AddressTest.php
│   │           │       ├── en_IN
│   │           │       │   └── AddressTest.php
│   │           │       ├── en_NG
│   │           │       │   ├── AddressTest.php
│   │           │       │   ├── InternetTest.php
│   │           │       │   ├── PersonTest.php
│   │           │       │   └── PhoneNumberTest.php
│   │           │       ├── en_NZ
│   │           │       │   └── PhoneNumberTest.php
│   │           │       ├── en_PH
│   │           │       │   └── AddressTest.php
│   │           │       ├── en_SG
│   │           │       │   ├── AddressTest.php
│   │           │       │   └── PhoneNumberTest.php
│   │           │       ├── en_UG
│   │           │       │   └── AddressTest.php
│   │           │       ├── en_US
│   │           │       │   ├── CompanyTest.php
│   │           │       │   ├── PaymentTest.php
│   │           │       │   ├── PersonTest.php
│   │           │       │   └── PhoneNumberTest.php
│   │           │       ├── en_ZA
│   │           │       │   ├── CompanyTest.php
│   │           │       │   ├── InternetTest.php
│   │           │       │   ├── PersonTest.php
│   │           │       │   └── PhoneNumberTest.php
│   │           │       ├── es_ES
│   │           │       │   ├── PaymentTest.php
│   │           │       │   ├── PersonTest.php
│   │           │       │   └── TextTest.php
│   │           │       ├── es_PE
│   │           │       │   └── PersonTest.php
│   │           │       ├── es_VE
│   │           │       │   ├── CompanyTest.php
│   │           │       │   └── PersonTest.php
│   │           │       ├── fi_FI
│   │           │       │   ├── InternetTest.php
│   │           │       │   └── PersonTest.php
│   │           │       ├── fr_BE
│   │           │       │   └── PaymentTest.php
│   │           │       ├── fr_CH
│   │           │       │   ├── AddressTest.php
│   │           │       │   ├── InternetTest.php
│   │           │       │   └── PhoneNumberTest.php
│   │           │       ├── fr_FR
│   │           │       │   ├── AddressTest.php
│   │           │       │   ├── CompanyTest.php
│   │           │       │   ├── PaymentTest.php
│   │           │       │   ├── PersonTest.php
│   │           │       │   ├── PhoneNumberTest.php
│   │           │       │   └── TextTest.php
│   │           │       ├── HtmlLoremTest.php
│   │           │       ├── id_ID
│   │           │       │   └── PersonTest.php
│   │           │       ├── ImageTest.php
│   │           │       ├── InternetTest.php
│   │           │       ├── it_CH
│   │           │       │   ├── AddressTest.php
│   │           │       │   ├── InternetTest.php
│   │           │       │   └── PhoneNumberTest.php
│   │           │       ├── it_IT
│   │           │       │   ├── CompanyTest.php
│   │           │       │   └── PersonTest.php
│   │           │       ├── ja_JP
│   │           │       │   ├── InternetTest.php
│   │           │       │   ├── PersonTest.php
│   │           │       │   └── PhoneNumberTest.php
│   │           │       ├── ka_GE
│   │           │       │   └── TextTest.php
│   │           │       ├── kk_KZ
│   │           │       │   ├── CompanyTest.php
│   │           │       │   ├── PersonTest.php
│   │           │       │   └── TextTest.php
│   │           │       ├── ko_KR
│   │           │       │   └── TextTest.php
│   │           │       ├── LocalizationTest.php
│   │           │       ├── LoremTest.php
│   │           │       ├── MiscellaneousTest.php
│   │           │       ├── mn_MN
│   │           │       │   └── PersonTest.php
│   │           │       ├── ms_MY
│   │           │       │   └── PersonTest.php
│   │           │       ├── nl_BE
│   │           │       │   ├── PaymentTest.php
│   │           │       │   └── PersonTest.php
│   │           │       ├── nl_NL
│   │           │       │   ├── CompanyTest.php
│   │           │       │   └── PersonTest.php
│   │           │       ├── PaymentTest.php
│   │           │       ├── PersonTest.php
│   │           │       ├── PhoneNumberTest.php
│   │           │       ├── pl_PL
│   │           │       │   ├── AddressTest.php
│   │           │       │   └── PersonTest.php
│   │           │       ├── ProviderOverrideTest.php
│   │           │       ├── pt_BR
│   │           │       │   ├── CompanyTest.php
│   │           │       │   └── PersonTest.php
│   │           │       ├── pt_PT
│   │           │       │   ├── AddressTest.php
│   │           │       │   ├── PersonTest.php
│   │           │       │   └── PhoneNumberTest.php
│   │           │       ├── ro_RO
│   │           │       │   ├── PersonTest.php
│   │           │       │   └── PhoneNumberTest.php
│   │           │       ├── ru_RU
│   │           │       │   ├── CompanyTest.php
│   │           │       │   └── TextTest.php
│   │           │       ├── sv_SE
│   │           │       │   └── PersonTest.php
│   │           │       ├── TextTest.php
│   │           │       ├── tr_TR
│   │           │       │   ├── CompanyTest.php
│   │           │       │   ├── PaymentTest.php
│   │           │       │   ├── PersonTest.php
│   │           │       │   └── PhoneNumberTest.php
│   │           │       ├── uk_UA
│   │           │       │   ├── AddressTest.php
│   │           │       │   ├── PersonTest.php
│   │           │       │   └── PhoneNumberTest.php
│   │           │       ├── UserAgentTest.php
│   │           │       ├── UuidTest.php
│   │           │       └── zh_TW
│   │           │           ├── CompanyTest.php
│   │           │           ├── PersonTest.php
│   │           │           └── TextTest.php
│   │           └── test.php
│   ├── hamcrest
│   │   └── hamcrest-php
│   │       ├── CHANGES.txt
│   │       ├── composer.json
│   │       ├── composer.lock
│   │       ├── generator
│   │       │   ├── FactoryCall.php
│   │       │   ├── FactoryClass.php
│   │       │   ├── FactoryFile.php
│   │       │   ├── FactoryGenerator.php
│   │       │   ├── FactoryMethod.php
│   │       │   ├── FactoryParameter.php
│   │       │   ├── GlobalFunctionFile.php
│   │       │   ├── parts
│   │       │   │   ├── file_header.txt
│   │       │   │   ├── functions_footer.txt
│   │       │   │   ├── functions_header.txt
│   │       │   │   ├── functions_imports.txt
│   │       │   │   ├── matchers_footer.txt
│   │       │   │   ├── matchers_header.txt
│   │       │   │   └── matchers_imports.txt
│   │       │   ├── run.php
│   │       │   └── StaticMethodFile.php
│   │       ├── hamcrest
│   │       │   ├── Hamcrest
│   │       │   │   ├── Arrays
│   │       │   │   │   ├── IsArrayContainingInAnyOrder.php
│   │       │   │   │   ├── IsArrayContainingInOrder.php
│   │       │   │   │   ├── IsArrayContainingKey.php
│   │       │   │   │   ├── IsArrayContainingKeyValuePair.php
│   │       │   │   │   ├── IsArrayContaining.php
│   │       │   │   │   ├── IsArray.php
│   │       │   │   │   ├── IsArrayWithSize.php
│   │       │   │   │   ├── MatchingOnce.php
│   │       │   │   │   └── SeriesMatchingOnce.php
│   │       │   │   ├── AssertionError.php
│   │       │   │   ├── BaseDescription.php
│   │       │   │   ├── BaseMatcher.php
│   │       │   │   ├── Collection
│   │       │   │   │   ├── IsEmptyTraversable.php
│   │       │   │   │   └── IsTraversableWithSize.php
│   │       │   │   ├── Core
│   │       │   │   │   ├── AllOf.php
│   │       │   │   │   ├── AnyOf.php
│   │       │   │   │   ├── CombinableMatcher.php
│   │       │   │   │   ├── DescribedAs.php
│   │       │   │   │   ├── Every.php
│   │       │   │   │   ├── HasToString.php
│   │       │   │   │   ├── IsAnything.php
│   │       │   │   │   ├── IsCollectionContaining.php
│   │       │   │   │   ├── IsEqual.php
│   │       │   │   │   ├── IsIdentical.php
│   │       │   │   │   ├── IsInstanceOf.php
│   │       │   │   │   ├── IsNot.php
│   │       │   │   │   ├── IsNull.php
│   │       │   │   │   ├── Is.php
│   │       │   │   │   ├── IsSame.php
│   │       │   │   │   ├── IsTypeOf.php
│   │       │   │   │   ├── Set.php
│   │       │   │   │   └── ShortcutCombination.php
│   │       │   │   ├── Description.php
│   │       │   │   ├── DiagnosingMatcher.php
│   │       │   │   ├── FeatureMatcher.php
│   │       │   │   ├── Internal
│   │       │   │   │   └── SelfDescribingValue.php
│   │       │   │   ├── MatcherAssert.php
│   │       │   │   ├── Matcher.php
│   │       │   │   ├── Matchers.php
│   │       │   │   ├── NullDescription.php
│   │       │   │   ├── Number
│   │       │   │   │   ├── IsCloseTo.php
│   │       │   │   │   └── OrderingComparison.php
│   │       │   │   ├── SelfDescribing.php
│   │       │   │   ├── StringDescription.php
│   │       │   │   ├── Text
│   │       │   │   │   ├── IsEmptyString.php
│   │       │   │   │   ├── IsEqualIgnoringCase.php
│   │       │   │   │   ├── IsEqualIgnoringWhiteSpace.php
│   │       │   │   │   ├── MatchesPattern.php
│   │       │   │   │   ├── StringContainsIgnoringCase.php
│   │       │   │   │   ├── StringContainsInOrder.php
│   │       │   │   │   ├── StringContains.php
│   │       │   │   │   ├── StringEndsWith.php
│   │       │   │   │   ├── StringStartsWith.php
│   │       │   │   │   └── SubstringMatcher.php
│   │       │   │   ├── Type
│   │       │   │   │   ├── IsArray.php
│   │       │   │   │   ├── IsBoolean.php
│   │       │   │   │   ├── IsCallable.php
│   │       │   │   │   ├── IsDouble.php
│   │       │   │   │   ├── IsInteger.php
│   │       │   │   │   ├── IsNumeric.php
│   │       │   │   │   ├── IsObject.php
│   │       │   │   │   ├── IsResource.php
│   │       │   │   │   ├── IsScalar.php
│   │       │   │   │   └── IsString.php
│   │       │   │   ├── TypeSafeDiagnosingMatcher.php
│   │       │   │   ├── TypeSafeMatcher.php
│   │       │   │   ├── Util.php
│   │       │   │   └── Xml
│   │       │   │       └── HasXPath.php
│   │       │   └── Hamcrest.php
│   │       ├── LICENSE.txt
│   │       ├── README.md
│   │       ├── tests
│   │       │   ├── bootstrap.php
│   │       │   ├── Hamcrest
│   │       │   │   ├── AbstractMatcherTest.php
│   │       │   │   ├── Array
│   │       │   │   │   ├── IsArrayContainingInAnyOrderTest.php
│   │       │   │   │   ├── IsArrayContainingInOrderTest.php
│   │       │   │   │   ├── IsArrayContainingKeyTest.php
│   │       │   │   │   ├── IsArrayContainingKeyValuePairTest.php
│   │       │   │   │   ├── IsArrayContainingTest.php
│   │       │   │   │   ├── IsArrayTest.php
│   │       │   │   │   └── IsArrayWithSizeTest.php
│   │       │   │   ├── BaseMatcherTest.php
│   │       │   │   ├── Collection
│   │       │   │   │   ├── IsEmptyTraversableTest.php
│   │       │   │   │   └── IsTraversableWithSizeTest.php
│   │       │   │   ├── Core
│   │       │   │   │   ├── AllOfTest.php
│   │       │   │   │   ├── AnyOfTest.php
│   │       │   │   │   ├── CombinableMatcherTest.php
│   │       │   │   │   ├── DescribedAsTest.php
│   │       │   │   │   ├── EveryTest.php
│   │       │   │   │   ├── HasToStringTest.php
│   │       │   │   │   ├── IsAnythingTest.php
│   │       │   │   │   ├── IsCollectionContainingTest.php
│   │       │   │   │   ├── IsEqualTest.php
│   │       │   │   │   ├── IsIdenticalTest.php
│   │       │   │   │   ├── IsInstanceOfTest.php
│   │       │   │   │   ├── IsNotTest.php
│   │       │   │   │   ├── IsNullTest.php
│   │       │   │   │   ├── IsSameTest.php
│   │       │   │   │   ├── IsTest.php
│   │       │   │   │   ├── IsTypeOfTest.php
│   │       │   │   │   ├── SampleBaseClass.php
│   │       │   │   │   ├── SampleSubClass.php
│   │       │   │   │   └── SetTest.php
│   │       │   │   ├── FeatureMatcherTest.php
│   │       │   │   ├── MatcherAssertTest.php
│   │       │   │   ├── Number
│   │       │   │   │   ├── IsCloseToTest.php
│   │       │   │   │   └── OrderingComparisonTest.php
│   │       │   │   ├── StringDescriptionTest.php
│   │       │   │   ├── Text
│   │       │   │   │   ├── IsEmptyStringTest.php
│   │       │   │   │   ├── IsEqualIgnoringCaseTest.php
│   │       │   │   │   ├── IsEqualIgnoringWhiteSpaceTest.php
│   │       │   │   │   ├── MatchesPatternTest.php
│   │       │   │   │   ├── StringContainsIgnoringCaseTest.php
│   │       │   │   │   ├── StringContainsInOrderTest.php
│   │       │   │   │   ├── StringContainsTest.php
│   │       │   │   │   ├── StringEndsWithTest.php
│   │       │   │   │   └── StringStartsWithTest.php
│   │       │   │   ├── Type
│   │       │   │   │   ├── IsArrayTest.php
│   │       │   │   │   ├── IsBooleanTest.php
│   │       │   │   │   ├── IsCallableTest.php
│   │       │   │   │   ├── IsDoubleTest.php
│   │       │   │   │   ├── IsIntegerTest.php
│   │       │   │   │   ├── IsNumericTest.php
│   │       │   │   │   ├── IsObjectTest.php
│   │       │   │   │   ├── IsResourceTest.php
│   │       │   │   │   ├── IsScalarTest.php
│   │       │   │   │   └── IsStringTest.php
│   │       │   │   ├── UtilTest.php
│   │       │   │   └── Xml
│   │       │   │       └── HasXPathTest.php
│   │       │   └── phpunit.xml.dist
│   │       └── TODO.txt
│   ├── jakub-onderka
│   │   ├── php-console-color
│   │   │   ├── build.xml
│   │   │   ├── composer.json
│   │   │   ├── example.php
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml
│   │   │   ├── README.md
│   │   │   ├── src
│   │   │   │   ├── ConsoleColor.php
│   │   │   │   └── InvalidStyleException.php
│   │   │   └── tests
│   │   │       └── ConsoleColorTest.php
│   │   └── php-console-highlighter
│   │       ├── build.xml
│   │       ├── composer.json
│   │       ├── examples
│   │       │   ├── snippet.php
│   │       │   ├── whole_file_line_numbers.php
│   │       │   └── whole_file.php
│   │       ├── LICENSE
│   │       ├── phpunit.xml
│   │       ├── README.md
│   │       ├── src
│   │       │   └── JakubOnderka
│   │       │       └── PhpConsoleHighlighter
│   │       │           └── Highlighter.php
│   │       └── tests
│   │           ├── bootstrap.php
│   │           └── JakubOnderka
│   │               └── PhpConsoleHighligter
│   │                   └── HigligterTest.php
│   ├── laravel
│   │   ├── framework
│   │   │   ├── composer.json
│   │   │   ├── LICENSE.md
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       └── Illuminate
│   │   │           ├── Auth
│   │   │           │   ├── Access
│   │   │           │   │   ├── AuthorizationException.php
│   │   │           │   │   ├── Gate.php
│   │   │           │   │   ├── HandlesAuthorization.php
│   │   │           │   │   └── Response.php
│   │   │           │   ├── Authenticatable.php
│   │   │           │   ├── AuthenticationException.php
│   │   │           │   ├── AuthManager.php
│   │   │           │   ├── AuthServiceProvider.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Console
│   │   │           │   │   ├── AuthMakeCommand.php
│   │   │           │   │   ├── ClearResetsCommand.php
│   │   │           │   │   └── stubs
│   │   │           │   │       └── make
│   │   │           │   │           ├── controllers
│   │   │           │   │           │   └── HomeController.stub
│   │   │           │   │           ├── routes.stub
│   │   │           │   │           └── views
│   │   │           │   │               ├── auth
│   │   │           │   │               │   ├── login.stub
│   │   │           │   │               │   ├── passwords
│   │   │           │   │               │   │   ├── email.stub
│   │   │           │   │               │   │   └── reset.stub
│   │   │           │   │               │   ├── register.stub
│   │   │           │   │               │   └── verify.stub
│   │   │           │   │               ├── home.stub
│   │   │           │   │               └── layouts
│   │   │           │   │                   └── app.stub
│   │   │           │   ├── CreatesUserProviders.php
│   │   │           │   ├── DatabaseUserProvider.php
│   │   │           │   ├── EloquentUserProvider.php
│   │   │           │   ├── Events
│   │   │           │   │   ├── Attempting.php
│   │   │           │   │   ├── Authenticated.php
│   │   │           │   │   ├── Failed.php
│   │   │           │   │   ├── Lockout.php
│   │   │           │   │   ├── Login.php
│   │   │           │   │   ├── Logout.php
│   │   │           │   │   ├── PasswordReset.php
│   │   │           │   │   ├── Registered.php
│   │   │           │   │   └── Verified.php
│   │   │           │   ├── GenericUser.php
│   │   │           │   ├── GuardHelpers.php
│   │   │           │   ├── Listeners
│   │   │           │   │   └── SendEmailVerificationNotification.php
│   │   │           │   ├── Middleware
│   │   │           │   │   ├── Authenticate.php
│   │   │           │   │   ├── AuthenticateWithBasicAuth.php
│   │   │           │   │   ├── Authorize.php
│   │   │           │   │   └── EnsureEmailIsVerified.php
│   │   │           │   ├── MustVerifyEmail.php
│   │   │           │   ├── Notifications
│   │   │           │   │   ├── ResetPassword.php
│   │   │           │   │   └── VerifyEmail.php
│   │   │           │   ├── Passwords
│   │   │           │   │   ├── CanResetPassword.php
│   │   │           │   │   ├── DatabaseTokenRepository.php
│   │   │           │   │   ├── PasswordBrokerManager.php
│   │   │           │   │   ├── PasswordBroker.php
│   │   │           │   │   ├── PasswordResetServiceProvider.php
│   │   │           │   │   └── TokenRepositoryInterface.php
│   │   │           │   ├── Recaller.php
│   │   │           │   ├── RequestGuard.php
│   │   │           │   ├── SessionGuard.php
│   │   │           │   └── TokenGuard.php
│   │   │           ├── Broadcasting
│   │   │           │   ├── BroadcastController.php
│   │   │           │   ├── Broadcasters
│   │   │           │   │   ├── Broadcaster.php
│   │   │           │   │   ├── LogBroadcaster.php
│   │   │           │   │   ├── NullBroadcaster.php
│   │   │           │   │   ├── PusherBroadcaster.php
│   │   │           │   │   └── RedisBroadcaster.php
│   │   │           │   ├── BroadcastEvent.php
│   │   │           │   ├── BroadcastException.php
│   │   │           │   ├── BroadcastManager.php
│   │   │           │   ├── BroadcastServiceProvider.php
│   │   │           │   ├── Channel.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── InteractsWithSockets.php
│   │   │           │   ├── PendingBroadcast.php
│   │   │           │   ├── PresenceChannel.php
│   │   │           │   └── PrivateChannel.php
│   │   │           ├── Bus
│   │   │           │   ├── BusServiceProvider.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Dispatcher.php
│   │   │           │   └── Queueable.php
│   │   │           ├── Cache
│   │   │           │   ├── ApcStore.php
│   │   │           │   ├── ApcWrapper.php
│   │   │           │   ├── ArrayStore.php
│   │   │           │   ├── CacheManager.php
│   │   │           │   ├── CacheServiceProvider.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Console
│   │   │           │   │   ├── CacheTableCommand.php
│   │   │           │   │   ├── ClearCommand.php
│   │   │           │   │   ├── ForgetCommand.php
│   │   │           │   │   └── stubs
│   │   │           │   │       └── cache.stub
│   │   │           │   ├── DatabaseStore.php
│   │   │           │   ├── Events
│   │   │           │   │   ├── CacheEvent.php
│   │   │           │   │   ├── CacheHit.php
│   │   │           │   │   ├── CacheMissed.php
│   │   │           │   │   ├── KeyForgotten.php
│   │   │           │   │   └── KeyWritten.php
│   │   │           │   ├── FileStore.php
│   │   │           │   ├── Lock.php
│   │   │           │   ├── MemcachedConnector.php
│   │   │           │   ├── MemcachedLock.php
│   │   │           │   ├── MemcachedStore.php
│   │   │           │   ├── NullStore.php
│   │   │           │   ├── RateLimiter.php
│   │   │           │   ├── RedisLock.php
│   │   │           │   ├── RedisStore.php
│   │   │           │   ├── RedisTaggedCache.php
│   │   │           │   ├── Repository.php
│   │   │           │   ├── RetrievesMultipleKeys.php
│   │   │           │   ├── TaggableStore.php
│   │   │           │   ├── TaggedCache.php
│   │   │           │   └── TagSet.php
│   │   │           ├── Config
│   │   │           │   ├── composer.json
│   │   │           │   └── Repository.php
│   │   │           ├── Console
│   │   │           │   ├── Application.php
│   │   │           │   ├── Command.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── ConfirmableTrait.php
│   │   │           │   ├── DetectsApplicationNamespace.php
│   │   │           │   ├── Events
│   │   │           │   │   ├── ArtisanStarting.php
│   │   │           │   │   ├── CommandFinished.php
│   │   │           │   │   └── CommandStarting.php
│   │   │           │   ├── GeneratorCommand.php
│   │   │           │   ├── OutputStyle.php
│   │   │           │   ├── Parser.php
│   │   │           │   └── Scheduling
│   │   │           │       ├── CacheEventMutex.php
│   │   │           │       ├── CacheSchedulingMutex.php
│   │   │           │       ├── CallbackEvent.php
│   │   │           │       ├── CommandBuilder.php
│   │   │           │       ├── EventMutex.php
│   │   │           │       ├── Event.php
│   │   │           │       ├── ManagesFrequencies.php
│   │   │           │       ├── ScheduleFinishCommand.php
│   │   │           │       ├── Schedule.php
│   │   │           │       ├── ScheduleRunCommand.php
│   │   │           │       └── SchedulingMutex.php
│   │   │           ├── Container
│   │   │           │   ├── BoundMethod.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Container.php
│   │   │           │   ├── ContextualBindingBuilder.php
│   │   │           │   └── EntryNotFoundException.php
│   │   │           ├── Contracts
│   │   │           │   ├── Auth
│   │   │           │   │   ├── Access
│   │   │           │   │   │   ├── Authorizable.php
│   │   │           │   │   │   └── Gate.php
│   │   │           │   │   ├── Authenticatable.php
│   │   │           │   │   ├── CanResetPassword.php
│   │   │           │   │   ├── Factory.php
│   │   │           │   │   ├── Guard.php
│   │   │           │   │   ├── MustVerifyEmail.php
│   │   │           │   │   ├── PasswordBrokerFactory.php
│   │   │           │   │   ├── PasswordBroker.php
│   │   │           │   │   ├── StatefulGuard.php
│   │   │           │   │   ├── SupportsBasicAuth.php
│   │   │           │   │   └── UserProvider.php
│   │   │           │   ├── Broadcasting
│   │   │           │   │   ├── Broadcaster.php
│   │   │           │   │   ├── Factory.php
│   │   │           │   │   ├── ShouldBroadcastNow.php
│   │   │           │   │   └── ShouldBroadcast.php
│   │   │           │   ├── Bus
│   │   │           │   │   ├── Dispatcher.php
│   │   │           │   │   └── QueueingDispatcher.php
│   │   │           │   ├── Cache
│   │   │           │   │   ├── Factory.php
│   │   │           │   │   ├── Lock.php
│   │   │           │   │   ├── LockProvider.php
│   │   │           │   │   ├── LockTimeoutException.php
│   │   │           │   │   ├── Repository.php
│   │   │           │   │   └── Store.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Config
│   │   │           │   │   └── Repository.php
│   │   │           │   ├── Console
│   │   │           │   │   ├── Application.php
│   │   │           │   │   └── Kernel.php
│   │   │           │   ├── Container
│   │   │           │   │   ├── BindingResolutionException.php
│   │   │           │   │   ├── Container.php
│   │   │           │   │   └── ContextualBindingBuilder.php
│   │   │           │   ├── Cookie
│   │   │           │   │   ├── Factory.php
│   │   │           │   │   └── QueueingFactory.php
│   │   │           │   ├── Database
│   │   │           │   │   └── ModelIdentifier.php
│   │   │           │   ├── Debug
│   │   │           │   │   └── ExceptionHandler.php
│   │   │           │   ├── Encryption
│   │   │           │   │   ├── DecryptException.php
│   │   │           │   │   ├── Encrypter.php
│   │   │           │   │   └── EncryptException.php
│   │   │           │   ├── Events
│   │   │           │   │   └── Dispatcher.php
│   │   │           │   ├── Filesystem
│   │   │           │   │   ├── Cloud.php
│   │   │           │   │   ├── Factory.php
│   │   │           │   │   ├── FileExistsException.php
│   │   │           │   │   ├── FileNotFoundException.php
│   │   │           │   │   └── Filesystem.php
│   │   │           │   ├── Foundation
│   │   │           │   │   └── Application.php
│   │   │           │   ├── Hashing
│   │   │           │   │   └── Hasher.php
│   │   │           │   ├── Http
│   │   │           │   │   └── Kernel.php
│   │   │           │   ├── Mail
│   │   │           │   │   ├── Mailable.php
│   │   │           │   │   ├── Mailer.php
│   │   │           │   │   └── MailQueue.php
│   │   │           │   ├── Notifications
│   │   │           │   │   ├── Dispatcher.php
│   │   │           │   │   └── Factory.php
│   │   │           │   ├── Pagination
│   │   │           │   │   ├── LengthAwarePaginator.php
│   │   │           │   │   └── Paginator.php
│   │   │           │   ├── Pipeline
│   │   │           │   │   ├── Hub.php
│   │   │           │   │   └── Pipeline.php
│   │   │           │   ├── Queue
│   │   │           │   │   ├── EntityNotFoundException.php
│   │   │           │   │   ├── EntityResolver.php
│   │   │           │   │   ├── Factory.php
│   │   │           │   │   ├── Job.php
│   │   │           │   │   ├── Monitor.php
│   │   │           │   │   ├── QueueableCollection.php
│   │   │           │   │   ├── QueueableEntity.php
│   │   │           │   │   ├── Queue.php
│   │   │           │   │   └── ShouldQueue.php
│   │   │           │   ├── Redis
│   │   │           │   │   ├── Connection.php
│   │   │           │   │   ├── Factory.php
│   │   │           │   │   └── LimiterTimeoutException.php
│   │   │           │   ├── Routing
│   │   │           │   │   ├── BindingRegistrar.php
│   │   │           │   │   ├── Registrar.php
│   │   │           │   │   ├── ResponseFactory.php
│   │   │           │   │   ├── UrlGenerator.php
│   │   │           │   │   └── UrlRoutable.php
│   │   │           │   ├── Session
│   │   │           │   │   └── Session.php
│   │   │           │   ├── Support
│   │   │           │   │   ├── Arrayable.php
│   │   │           │   │   ├── Htmlable.php
│   │   │           │   │   ├── Jsonable.php
│   │   │           │   │   ├── MessageBag.php
│   │   │           │   │   ├── MessageProvider.php
│   │   │           │   │   ├── Renderable.php
│   │   │           │   │   └── Responsable.php
│   │   │           │   ├── Translation
│   │   │           │   │   ├── HasLocalePreference.php
│   │   │           │   │   ├── Loader.php
│   │   │           │   │   └── Translator.php
│   │   │           │   ├── Validation
│   │   │           │   │   ├── Factory.php
│   │   │           │   │   ├── ImplicitRule.php
│   │   │           │   │   ├── Rule.php
│   │   │           │   │   ├── ValidatesWhenResolved.php
│   │   │           │   │   └── Validator.php
│   │   │           │   └── View
│   │   │           │       ├── Engine.php
│   │   │           │       ├── Factory.php
│   │   │           │       └── View.php
│   │   │           ├── Cookie
│   │   │           │   ├── composer.json
│   │   │           │   ├── CookieJar.php
│   │   │           │   ├── CookieServiceProvider.php
│   │   │           │   └── Middleware
│   │   │           │       ├── AddQueuedCookiesToResponse.php
│   │   │           │       └── EncryptCookies.php
│   │   │           ├── Database
│   │   │           │   ├── Capsule
│   │   │           │   │   └── Manager.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Concerns
│   │   │           │   │   ├── BuildsQueries.php
│   │   │           │   │   └── ManagesTransactions.php
│   │   │           │   ├── ConnectionInterface.php
│   │   │           │   ├── Connection.php
│   │   │           │   ├── ConnectionResolverInterface.php
│   │   │           │   ├── ConnectionResolver.php
│   │   │           │   ├── Connectors
│   │   │           │   │   ├── ConnectionFactory.php
│   │   │           │   │   ├── ConnectorInterface.php
│   │   │           │   │   ├── Connector.php
│   │   │           │   │   ├── MySqlConnector.php
│   │   │           │   │   ├── PostgresConnector.php
│   │   │           │   │   ├── SQLiteConnector.php
│   │   │           │   │   └── SqlServerConnector.php
│   │   │           │   ├── Console
│   │   │           │   │   ├── Factories
│   │   │           │   │   │   ├── FactoryMakeCommand.php
│   │   │           │   │   │   └── stubs
│   │   │           │   │   │       └── factory.stub
│   │   │           │   │   ├── Migrations
│   │   │           │   │   │   ├── BaseCommand.php
│   │   │           │   │   │   ├── FreshCommand.php
│   │   │           │   │   │   ├── InstallCommand.php
│   │   │           │   │   │   ├── MigrateCommand.php
│   │   │           │   │   │   ├── MigrateMakeCommand.php
│   │   │           │   │   │   ├── RefreshCommand.php
│   │   │           │   │   │   ├── ResetCommand.php
│   │   │           │   │   │   ├── RollbackCommand.php
│   │   │           │   │   │   ├── StatusCommand.php
│   │   │           │   │   │   └── TableGuesser.php
│   │   │           │   │   └── Seeds
│   │   │           │   │       ├── SeedCommand.php
│   │   │           │   │       ├── SeederMakeCommand.php
│   │   │           │   │       └── stubs
│   │   │           │   │           └── seeder.stub
│   │   │           │   ├── DatabaseManager.php
│   │   │           │   ├── DatabaseServiceProvider.php
│   │   │           │   ├── DetectsDeadlocks.php
│   │   │           │   ├── DetectsLostConnections.php
│   │   │           │   ├── Eloquent
│   │   │           │   │   ├── Builder.php
│   │   │           │   │   ├── Collection.php
│   │   │           │   │   ├── Concerns
│   │   │           │   │   │   ├── GuardsAttributes.php
│   │   │           │   │   │   ├── HasAttributes.php
│   │   │           │   │   │   ├── HasEvents.php
│   │   │           │   │   │   ├── HasGlobalScopes.php
│   │   │           │   │   │   ├── HasRelationships.php
│   │   │           │   │   │   ├── HasTimestamps.php
│   │   │           │   │   │   ├── HidesAttributes.php
│   │   │           │   │   │   └── QueriesRelationships.php
│   │   │           │   │   ├── FactoryBuilder.php
│   │   │           │   │   ├── Factory.php
│   │   │           │   │   ├── JsonEncodingException.php
│   │   │           │   │   ├── MassAssignmentException.php
│   │   │           │   │   ├── ModelNotFoundException.php
│   │   │           │   │   ├── Model.php
│   │   │           │   │   ├── QueueEntityResolver.php
│   │   │           │   │   ├── RelationNotFoundException.php
│   │   │           │   │   ├── Relations
│   │   │           │   │   │   ├── BelongsToMany.php
│   │   │           │   │   │   ├── BelongsTo.php
│   │   │           │   │   │   ├── Concerns
│   │   │           │   │   │   │   ├── AsPivot.php
│   │   │           │   │   │   │   ├── InteractsWithPivotTable.php
│   │   │           │   │   │   │   └── SupportsDefaultModels.php
│   │   │           │   │   │   ├── HasMany.php
│   │   │           │   │   │   ├── HasManyThrough.php
│   │   │           │   │   │   ├── HasOneOrMany.php
│   │   │           │   │   │   ├── HasOne.php
│   │   │           │   │   │   ├── MorphMany.php
│   │   │           │   │   │   ├── MorphOneOrMany.php
│   │   │           │   │   │   ├── MorphOne.php
│   │   │           │   │   │   ├── MorphPivot.php
│   │   │           │   │   │   ├── MorphToMany.php
│   │   │           │   │   │   ├── MorphTo.php
│   │   │           │   │   │   ├── Pivot.php
│   │   │           │   │   │   └── Relation.php
│   │   │           │   │   ├── Scope.php
│   │   │           │   │   ├── SoftDeletes.php
│   │   │           │   │   └── SoftDeletingScope.php
│   │   │           │   ├── Events
│   │   │           │   │   ├── ConnectionEvent.php
│   │   │           │   │   ├── QueryExecuted.php
│   │   │           │   │   ├── StatementPrepared.php
│   │   │           │   │   ├── TransactionBeginning.php
│   │   │           │   │   ├── TransactionCommitted.php
│   │   │           │   │   └── TransactionRolledBack.php
│   │   │           │   ├── Grammar.php
│   │   │           │   ├── Migrations
│   │   │           │   │   ├── DatabaseMigrationRepository.php
│   │   │           │   │   ├── MigrationCreator.php
│   │   │           │   │   ├── Migration.php
│   │   │           │   │   ├── MigrationRepositoryInterface.php
│   │   │           │   │   ├── Migrator.php
│   │   │           │   │   └── stubs
│   │   │           │   │       ├── blank.stub
│   │   │           │   │       ├── create.stub
│   │   │           │   │       └── update.stub
│   │   │           │   ├── MigrationServiceProvider.php
│   │   │           │   ├── MySqlConnection.php
│   │   │           │   ├── PostgresConnection.php
│   │   │           │   ├── Query
│   │   │           │   │   ├── Builder.php
│   │   │           │   │   ├── Expression.php
│   │   │           │   │   ├── Grammars
│   │   │           │   │   │   ├── Grammar.php
│   │   │           │   │   │   ├── MySqlGrammar.php
│   │   │           │   │   │   ├── PostgresGrammar.php
│   │   │           │   │   │   ├── SQLiteGrammar.php
│   │   │           │   │   │   └── SqlServerGrammar.php
│   │   │           │   │   ├── JoinClause.php
│   │   │           │   │   ├── JsonExpression.php
│   │   │           │   │   └── Processors
│   │   │           │   │       ├── MySqlProcessor.php
│   │   │           │   │       ├── PostgresProcessor.php
│   │   │           │   │       ├── Processor.php
│   │   │           │   │       ├── SQLiteProcessor.php
│   │   │           │   │       └── SqlServerProcessor.php
│   │   │           │   ├── QueryException.php
│   │   │           │   ├── README.md
│   │   │           │   ├── Schema
│   │   │           │   │   ├── Blueprint.php
│   │   │           │   │   ├── Builder.php
│   │   │           │   │   ├── ColumnDefinition.php
│   │   │           │   │   ├── Grammars
│   │   │           │   │   │   ├── ChangeColumn.php
│   │   │           │   │   │   ├── Grammar.php
│   │   │           │   │   │   ├── MySqlGrammar.php
│   │   │           │   │   │   ├── PostgresGrammar.php
│   │   │           │   │   │   ├── RenameColumn.php
│   │   │           │   │   │   ├── SQLiteGrammar.php
│   │   │           │   │   │   └── SqlServerGrammar.php
│   │   │           │   │   ├── MySqlBuilder.php
│   │   │           │   │   ├── PostgresBuilder.php
│   │   │           │   │   ├── SQLiteBuilder.php
│   │   │           │   │   └── SqlServerBuilder.php
│   │   │           │   ├── Seeder.php
│   │   │           │   ├── SQLiteConnection.php
│   │   │           │   └── SqlServerConnection.php
│   │   │           ├── Encryption
│   │   │           │   ├── composer.json
│   │   │           │   ├── Encrypter.php
│   │   │           │   └── EncryptionServiceProvider.php
│   │   │           ├── Events
│   │   │           │   ├── CallQueuedListener.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Dispatcher.php
│   │   │           │   └── EventServiceProvider.php
│   │   │           ├── Filesystem
│   │   │           │   ├── Cache.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── FilesystemAdapter.php
│   │   │           │   ├── FilesystemManager.php
│   │   │           │   ├── Filesystem.php
│   │   │           │   └── FilesystemServiceProvider.php
│   │   │           ├── Foundation
│   │   │           │   ├── AliasLoader.php
│   │   │           │   ├── Application.php
│   │   │           │   ├── Auth
│   │   │           │   │   ├── Access
│   │   │           │   │   │   ├── Authorizable.php
│   │   │           │   │   │   └── AuthorizesRequests.php
│   │   │           │   │   ├── AuthenticatesUsers.php
│   │   │           │   │   ├── RedirectsUsers.php
│   │   │           │   │   ├── RegistersUsers.php
│   │   │           │   │   ├── ResetsPasswords.php
│   │   │           │   │   ├── SendsPasswordResetEmails.php
│   │   │           │   │   ├── ThrottlesLogins.php
│   │   │           │   │   ├── User.php
│   │   │           │   │   └── VerifiesEmails.php
│   │   │           │   ├── Bootstrap
│   │   │           │   │   ├── BootProviders.php
│   │   │           │   │   ├── HandleExceptions.php
│   │   │           │   │   ├── LoadConfiguration.php
│   │   │           │   │   ├── LoadEnvironmentVariables.php
│   │   │           │   │   ├── RegisterFacades.php
│   │   │           │   │   ├── RegisterProviders.php
│   │   │           │   │   └── SetRequestForConsole.php
│   │   │           │   ├── Bus
│   │   │           │   │   ├── Dispatchable.php
│   │   │           │   │   ├── DispatchesJobs.php
│   │   │           │   │   ├── PendingChain.php
│   │   │           │   │   └── PendingDispatch.php
│   │   │           │   ├── ComposerScripts.php
│   │   │           │   ├── Console
│   │   │           │   │   ├── AppNameCommand.php
│   │   │           │   │   ├── ChannelMakeCommand.php
│   │   │           │   │   ├── ClearCompiledCommand.php
│   │   │           │   │   ├── ClosureCommand.php
│   │   │           │   │   ├── ConfigCacheCommand.php
│   │   │           │   │   ├── ConfigClearCommand.php
│   │   │           │   │   ├── ConsoleMakeCommand.php
│   │   │           │   │   ├── DownCommand.php
│   │   │           │   │   ├── EnvironmentCommand.php
│   │   │           │   │   ├── EventGenerateCommand.php
│   │   │           │   │   ├── EventMakeCommand.php
│   │   │           │   │   ├── ExceptionMakeCommand.php
│   │   │           │   │   ├── JobMakeCommand.php
│   │   │           │   │   ├── Kernel.php
│   │   │           │   │   ├── KeyGenerateCommand.php
│   │   │           │   │   ├── ListenerMakeCommand.php
│   │   │           │   │   ├── MailMakeCommand.php
│   │   │           │   │   ├── ModelMakeCommand.php
│   │   │           │   │   ├── NotificationMakeCommand.php
│   │   │           │   │   ├── ObserverMakeCommand.php
│   │   │           │   │   ├── OptimizeClearCommand.php
│   │   │           │   │   ├── OptimizeCommand.php
│   │   │           │   │   ├── PackageDiscoverCommand.php
│   │   │           │   │   ├── PolicyMakeCommand.php
│   │   │           │   │   ├── PresetCommand.php
│   │   │           │   │   ├── Presets
│   │   │           │   │   │   ├── Bootstrap.php
│   │   │           │   │   │   ├── bootstrap-stubs
│   │   │           │   │   │   │   ├── app.scss
│   │   │           │   │   │   │   └── _variables.scss
│   │   │           │   │   │   ├── None.php
│   │   │           │   │   │   ├── none-stubs
│   │   │           │   │   │   │   ├── app.js
│   │   │           │   │   │   │   └── bootstrap.js
│   │   │           │   │   │   ├── Preset.php
│   │   │           │   │   │   ├── React.php
│   │   │           │   │   │   ├── react-stubs
│   │   │           │   │   │   │   ├── app.js
│   │   │           │   │   │   │   ├── Example.js
│   │   │           │   │   │   │   └── webpack.mix.js
│   │   │           │   │   │   ├── Vue.php
│   │   │           │   │   │   └── vue-stubs
│   │   │           │   │   │       ├── app.js
│   │   │           │   │   │       ├── ExampleComponent.vue
│   │   │           │   │   │       └── webpack.mix.js
│   │   │           │   │   ├── ProviderMakeCommand.php
│   │   │           │   │   ├── QueuedCommand.php
│   │   │           │   │   ├── RequestMakeCommand.php
│   │   │           │   │   ├── ResourceMakeCommand.php
│   │   │           │   │   ├── RouteCacheCommand.php
│   │   │           │   │   ├── RouteClearCommand.php
│   │   │           │   │   ├── RouteListCommand.php
│   │   │           │   │   ├── RuleMakeCommand.php
│   │   │           │   │   ├── ServeCommand.php
│   │   │           │   │   ├── StorageLinkCommand.php
│   │   │           │   │   ├── stubs
│   │   │           │   │   │   ├── channel.stub
│   │   │           │   │   │   ├── console.stub
│   │   │           │   │   │   ├── event-handler-queued.stub
│   │   │           │   │   │   ├── event-handler.stub
│   │   │           │   │   │   ├── event.stub
│   │   │           │   │   │   ├── exception-render-report.stub
│   │   │           │   │   │   ├── exception-render.stub
│   │   │           │   │   │   ├── exception-report.stub
│   │   │           │   │   │   ├── exception.stub
│   │   │           │   │   │   ├── job-queued.stub
│   │   │           │   │   │   ├── job.stub
│   │   │           │   │   │   ├── listener-duck.stub
│   │   │           │   │   │   ├── listener-queued-duck.stub
│   │   │           │   │   │   ├── listener-queued.stub
│   │   │           │   │   │   ├── listener.stub
│   │   │           │   │   │   ├── mail.stub
│   │   │           │   │   │   ├── markdown-mail.stub
│   │   │           │   │   │   ├── markdown-notification.stub
│   │   │           │   │   │   ├── markdown.stub
│   │   │           │   │   │   ├── model.stub
│   │   │           │   │   │   ├── notification.stub
│   │   │           │   │   │   ├── observer.plain.stub
│   │   │           │   │   │   ├── observer.stub
│   │   │           │   │   │   ├── pivot.model.stub
│   │   │           │   │   │   ├── policy.plain.stub
│   │   │           │   │   │   ├── policy.stub
│   │   │           │   │   │   ├── provider.stub
│   │   │           │   │   │   ├── request.stub
│   │   │           │   │   │   ├── resource-collection.stub
│   │   │           │   │   │   ├── resource.stub
│   │   │           │   │   │   ├── routes.stub
│   │   │           │   │   │   ├── rule.stub
│   │   │           │   │   │   ├── test.stub
│   │   │           │   │   │   └── unit-test.stub
│   │   │           │   │   ├── TestMakeCommand.php
│   │   │           │   │   ├── UpCommand.php
│   │   │           │   │   ├── VendorPublishCommand.php
│   │   │           │   │   ├── ViewCacheCommand.php
│   │   │           │   │   └── ViewClearCommand.php
│   │   │           │   ├── EnvironmentDetector.php
│   │   │           │   ├── Events
│   │   │           │   │   ├── Dispatchable.php
│   │   │           │   │   └── LocaleUpdated.php
│   │   │           │   ├── Exceptions
│   │   │           │   │   ├── Handler.php
│   │   │           │   │   ├── views
│   │   │           │   │   │   ├── 401.blade.php
│   │   │           │   │   │   ├── 403.blade.php
│   │   │           │   │   │   ├── 404.blade.php
│   │   │           │   │   │   ├── 419.blade.php
│   │   │           │   │   │   ├── 429.blade.php
│   │   │           │   │   │   ├── 500.blade.php
│   │   │           │   │   │   ├── 503.blade.php
│   │   │           │   │   │   ├── illustrated-layout.blade.php
│   │   │           │   │   │   └── layout.blade.php
│   │   │           │   │   └── WhoopsHandler.php
│   │   │           │   ├── helpers.php
│   │   │           │   ├── Http
│   │   │           │   │   ├── Events
│   │   │           │   │   │   └── RequestHandled.php
│   │   │           │   │   ├── Exceptions
│   │   │           │   │   │   └── MaintenanceModeException.php
│   │   │           │   │   ├── FormRequest.php
│   │   │           │   │   ├── Kernel.php
│   │   │           │   │   └── Middleware
│   │   │           │   │       ├── CheckForMaintenanceMode.php
│   │   │           │   │       ├── ConvertEmptyStringsToNull.php
│   │   │           │   │       ├── TransformsRequest.php
│   │   │           │   │       ├── TrimStrings.php
│   │   │           │   │       ├── ValidatePostSize.php
│   │   │           │   │       └── VerifyCsrfToken.php
│   │   │           │   ├── Inspiring.php
│   │   │           │   ├── PackageManifest.php
│   │   │           │   ├── ProviderRepository.php
│   │   │           │   ├── Providers
│   │   │           │   │   ├── ArtisanServiceProvider.php
│   │   │           │   │   ├── ComposerServiceProvider.php
│   │   │           │   │   ├── ConsoleSupportServiceProvider.php
│   │   │           │   │   ├── FormRequestServiceProvider.php
│   │   │           │   │   └── FoundationServiceProvider.php
│   │   │           │   ├── stubs
│   │   │           │   │   └── facade.stub
│   │   │           │   ├── Support
│   │   │           │   │   └── Providers
│   │   │           │   │       ├── AuthServiceProvider.php
│   │   │           │   │       ├── EventServiceProvider.php
│   │   │           │   │       └── RouteServiceProvider.php
│   │   │           │   ├── Testing
│   │   │           │   │   ├── Concerns
│   │   │           │   │   │   ├── InteractsWithAuthentication.php
│   │   │           │   │   │   ├── InteractsWithConsole.php
│   │   │           │   │   │   ├── InteractsWithContainer.php
│   │   │           │   │   │   ├── InteractsWithDatabase.php
│   │   │           │   │   │   ├── InteractsWithExceptionHandling.php
│   │   │           │   │   │   ├── InteractsWithRedis.php
│   │   │           │   │   │   ├── InteractsWithSession.php
│   │   │           │   │   │   ├── MakesHttpRequests.php
│   │   │           │   │   │   └── MocksApplicationServices.php
│   │   │           │   │   ├── Constraints
│   │   │           │   │   │   ├── HasInDatabase.php
│   │   │           │   │   │   ├── SeeInOrder.php
│   │   │           │   │   │   └── SoftDeletedInDatabase.php
│   │   │           │   │   ├── DatabaseMigrations.php
│   │   │           │   │   ├── DatabaseTransactions.php
│   │   │           │   │   ├── HttpException.php
│   │   │           │   │   ├── PendingCommand.php
│   │   │           │   │   ├── RefreshDatabase.php
│   │   │           │   │   ├── RefreshDatabaseState.php
│   │   │           │   │   ├── TestCase.php
│   │   │           │   │   ├── TestResponse.php
│   │   │           │   │   ├── WithFaker.php
│   │   │           │   │   ├── WithoutEvents.php
│   │   │           │   │   └── WithoutMiddleware.php
│   │   │           │   └── Validation
│   │   │           │       └── ValidatesRequests.php
│   │   │           ├── Hashing
│   │   │           │   ├── AbstractHasher.php
│   │   │           │   ├── Argon2IdHasher.php
│   │   │           │   ├── ArgonHasher.php
│   │   │           │   ├── BcryptHasher.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── HashManager.php
│   │   │           │   └── HashServiceProvider.php
│   │   │           ├── Http
│   │   │           │   ├── composer.json
│   │   │           │   ├── Concerns
│   │   │           │   │   ├── InteractsWithContentTypes.php
│   │   │           │   │   ├── InteractsWithFlashData.php
│   │   │           │   │   └── InteractsWithInput.php
│   │   │           │   ├── Exceptions
│   │   │           │   │   ├── HttpResponseException.php
│   │   │           │   │   ├── PostTooLargeException.php
│   │   │           │   │   └── ThrottleRequestsException.php
│   │   │           │   ├── FileHelpers.php
│   │   │           │   ├── File.php
│   │   │           │   ├── JsonResponse.php
│   │   │           │   ├── Middleware
│   │   │           │   │   ├── CheckResponseForModifications.php
│   │   │           │   │   ├── FrameGuard.php
│   │   │           │   │   └── SetCacheHeaders.php
│   │   │           │   ├── RedirectResponse.php
│   │   │           │   ├── Request.php
│   │   │           │   ├── Resources
│   │   │           │   │   ├── CollectsResources.php
│   │   │           │   │   ├── ConditionallyLoadsAttributes.php
│   │   │           │   │   ├── DelegatesToResource.php
│   │   │           │   │   ├── Json
│   │   │           │   │   │   ├── AnonymousResourceCollection.php
│   │   │           │   │   │   ├── JsonResource.php
│   │   │           │   │   │   ├── PaginatedResourceResponse.php
│   │   │           │   │   │   ├── ResourceCollection.php
│   │   │           │   │   │   ├── Resource.php
│   │   │           │   │   │   └── ResourceResponse.php
│   │   │           │   │   ├── MergeValue.php
│   │   │           │   │   ├── MissingValue.php
│   │   │           │   │   └── PotentiallyMissing.php
│   │   │           │   ├── Response.php
│   │   │           │   ├── ResponseTrait.php
│   │   │           │   ├── Testing
│   │   │           │   │   ├── FileFactory.php
│   │   │           │   │   ├── File.php
│   │   │           │   │   └── MimeType.php
│   │   │           │   └── UploadedFile.php
│   │   │           ├── Log
│   │   │           │   ├── composer.json
│   │   │           │   ├── Events
│   │   │           │   │   └── MessageLogged.php
│   │   │           │   ├── Logger.php
│   │   │           │   ├── LogManager.php
│   │   │           │   ├── LogServiceProvider.php
│   │   │           │   └── ParsesLogConfiguration.php
│   │   │           ├── Mail
│   │   │           │   ├── composer.json
│   │   │           │   ├── Events
│   │   │           │   │   ├── MessageSending.php
│   │   │           │   │   └── MessageSent.php
│   │   │           │   ├── Mailable.php
│   │   │           │   ├── Mailer.php
│   │   │           │   ├── MailServiceProvider.php
│   │   │           │   ├── Markdown.php
│   │   │           │   ├── Message.php
│   │   │           │   ├── PendingMail.php
│   │   │           │   ├── resources
│   │   │           │   │   └── views
│   │   │           │   │       ├── html
│   │   │           │   │       │   ├── button.blade.php
│   │   │           │   │       │   ├── footer.blade.php
│   │   │           │   │       │   ├── header.blade.php
│   │   │           │   │       │   ├── layout.blade.php
│   │   │           │   │       │   ├── message.blade.php
│   │   │           │   │       │   ├── panel.blade.php
│   │   │           │   │       │   ├── promotion
│   │   │           │   │       │   │   └── button.blade.php
│   │   │           │   │       │   ├── promotion.blade.php
│   │   │           │   │       │   ├── subcopy.blade.php
│   │   │           │   │       │   ├── table.blade.php
│   │   │           │   │       │   └── themes
│   │   │           │   │       │       └── default.css
│   │   │           │   │       └── markdown
│   │   │           │   │           ├── button.blade.php
│   │   │           │   │           ├── footer.blade.php
│   │   │           │   │           ├── header.blade.php
│   │   │           │   │           ├── layout.blade.php
│   │   │           │   │           ├── message.blade.php
│   │   │           │   │           ├── panel.blade.php
│   │   │           │   │           ├── promotion
│   │   │           │   │           │   └── button.blade.php
│   │   │           │   │           ├── promotion.blade.php
│   │   │           │   │           ├── subcopy.blade.php
│   │   │           │   │           └── table.blade.php
│   │   │           │   ├── SendQueuedMailable.php
│   │   │           │   ├── Transport
│   │   │           │   │   ├── ArrayTransport.php
│   │   │           │   │   ├── LogTransport.php
│   │   │           │   │   ├── MailgunTransport.php
│   │   │           │   │   ├── MandrillTransport.php
│   │   │           │   │   ├── SesTransport.php
│   │   │           │   │   ├── SparkPostTransport.php
│   │   │           │   │   └── Transport.php
│   │   │           │   └── TransportManager.php
│   │   │           ├── Notifications
│   │   │           │   ├── Action.php
│   │   │           │   ├── AnonymousNotifiable.php
│   │   │           │   ├── ChannelManager.php
│   │   │           │   ├── Channels
│   │   │           │   │   ├── BroadcastChannel.php
│   │   │           │   │   ├── DatabaseChannel.php
│   │   │           │   │   ├── MailChannel.php
│   │   │           │   │   ├── NexmoSmsChannel.php
│   │   │           │   │   └── SlackWebhookChannel.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Console
│   │   │           │   │   ├── NotificationTableCommand.php
│   │   │           │   │   └── stubs
│   │   │           │   │       └── notifications.stub
│   │   │           │   ├── DatabaseNotificationCollection.php
│   │   │           │   ├── DatabaseNotification.php
│   │   │           │   ├── Events
│   │   │           │   │   ├── BroadcastNotificationCreated.php
│   │   │           │   │   ├── NotificationFailed.php
│   │   │           │   │   ├── NotificationSending.php
│   │   │           │   │   └── NotificationSent.php
│   │   │           │   ├── HasDatabaseNotifications.php
│   │   │           │   ├── Messages
│   │   │           │   │   ├── BroadcastMessage.php
│   │   │           │   │   ├── DatabaseMessage.php
│   │   │           │   │   ├── MailMessage.php
│   │   │           │   │   ├── NexmoMessage.php
│   │   │           │   │   ├── SimpleMessage.php
│   │   │           │   │   ├── SlackAttachmentField.php
│   │   │           │   │   ├── SlackAttachment.php
│   │   │           │   │   └── SlackMessage.php
│   │   │           │   ├── Notifiable.php
│   │   │           │   ├── Notification.php
│   │   │           │   ├── NotificationSender.php
│   │   │           │   ├── NotificationServiceProvider.php
│   │   │           │   ├── resources
│   │   │           │   │   └── views
│   │   │           │   │       └── email.blade.php
│   │   │           │   ├── RoutesNotifications.php
│   │   │           │   └── SendQueuedNotifications.php
│   │   │           ├── Pagination
│   │   │           │   ├── AbstractPaginator.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── LengthAwarePaginator.php
│   │   │           │   ├── PaginationServiceProvider.php
│   │   │           │   ├── Paginator.php
│   │   │           │   ├── resources
│   │   │           │   │   └── views
│   │   │           │   │       ├── bootstrap-4.blade.php
│   │   │           │   │       ├── default.blade.php
│   │   │           │   │       ├── semantic-ui.blade.php
│   │   │           │   │       ├── simple-bootstrap-4.blade.php
│   │   │           │   │       └── simple-default.blade.php
│   │   │           │   └── UrlWindow.php
│   │   │           ├── Pipeline
│   │   │           │   ├── composer.json
│   │   │           │   ├── Hub.php
│   │   │           │   ├── Pipeline.php
│   │   │           │   └── PipelineServiceProvider.php
│   │   │           ├── Queue
│   │   │           │   ├── BeanstalkdQueue.php
│   │   │           │   ├── CallQueuedClosure.php
│   │   │           │   ├── CallQueuedHandler.php
│   │   │           │   ├── Capsule
│   │   │           │   │   └── Manager.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Connectors
│   │   │           │   │   ├── BeanstalkdConnector.php
│   │   │           │   │   ├── ConnectorInterface.php
│   │   │           │   │   ├── DatabaseConnector.php
│   │   │           │   │   ├── NullConnector.php
│   │   │           │   │   ├── RedisConnector.php
│   │   │           │   │   ├── SqsConnector.php
│   │   │           │   │   └── SyncConnector.php
│   │   │           │   ├── Console
│   │   │           │   │   ├── FailedTableCommand.php
│   │   │           │   │   ├── FlushFailedCommand.php
│   │   │           │   │   ├── ForgetFailedCommand.php
│   │   │           │   │   ├── ListenCommand.php
│   │   │           │   │   ├── ListFailedCommand.php
│   │   │           │   │   ├── RestartCommand.php
│   │   │           │   │   ├── RetryCommand.php
│   │   │           │   │   ├── stubs
│   │   │           │   │   │   ├── failed_jobs.stub
│   │   │           │   │   │   └── jobs.stub
│   │   │           │   │   ├── TableCommand.php
│   │   │           │   │   └── WorkCommand.php
│   │   │           │   ├── DatabaseQueue.php
│   │   │           │   ├── Events
│   │   │           │   │   ├── JobExceptionOccurred.php
│   │   │           │   │   ├── JobFailed.php
│   │   │           │   │   ├── JobProcessed.php
│   │   │           │   │   ├── JobProcessing.php
│   │   │           │   │   ├── Looping.php
│   │   │           │   │   └── WorkerStopping.php
│   │   │           │   ├── Failed
│   │   │           │   │   ├── DatabaseFailedJobProvider.php
│   │   │           │   │   ├── FailedJobProviderInterface.php
│   │   │           │   │   └── NullFailedJobProvider.php
│   │   │           │   ├── FailingJob.php
│   │   │           │   ├── InteractsWithQueue.php
│   │   │           │   ├── InvalidPayloadException.php
│   │   │           │   ├── Jobs
│   │   │           │   │   ├── BeanstalkdJob.php
│   │   │           │   │   ├── DatabaseJob.php
│   │   │           │   │   ├── DatabaseJobRecord.php
│   │   │           │   │   ├── JobName.php
│   │   │           │   │   ├── Job.php
│   │   │           │   │   ├── RedisJob.php
│   │   │           │   │   ├── SqsJob.php
│   │   │           │   │   └── SyncJob.php
│   │   │           │   ├── ListenerOptions.php
│   │   │           │   ├── Listener.php
│   │   │           │   ├── LuaScripts.php
│   │   │           │   ├── ManuallyFailedException.php
│   │   │           │   ├── MaxAttemptsExceededException.php
│   │   │           │   ├── NullQueue.php
│   │   │           │   ├── QueueManager.php
│   │   │           │   ├── Queue.php
│   │   │           │   ├── QueueServiceProvider.php
│   │   │           │   ├── README.md
│   │   │           │   ├── RedisQueue.php
│   │   │           │   ├── SerializableClosure.php
│   │   │           │   ├── SerializesAndRestoresModelIdentifiers.php
│   │   │           │   ├── SerializesModels.php
│   │   │           │   ├── SqsQueue.php
│   │   │           │   ├── SyncQueue.php
│   │   │           │   ├── WorkerOptions.php
│   │   │           │   └── Worker.php
│   │   │           ├── Redis
│   │   │           │   ├── composer.json
│   │   │           │   ├── Connections
│   │   │           │   │   ├── Connection.php
│   │   │           │   │   ├── PhpRedisClusterConnection.php
│   │   │           │   │   ├── PhpRedisConnection.php
│   │   │           │   │   ├── PredisClusterConnection.php
│   │   │           │   │   └── PredisConnection.php
│   │   │           │   ├── Connectors
│   │   │           │   │   ├── PhpRedisConnector.php
│   │   │           │   │   └── PredisConnector.php
│   │   │           │   ├── Events
│   │   │           │   │   └── CommandExecuted.php
│   │   │           │   ├── Limiters
│   │   │           │   │   ├── ConcurrencyLimiterBuilder.php
│   │   │           │   │   ├── ConcurrencyLimiter.php
│   │   │           │   │   ├── DurationLimiterBuilder.php
│   │   │           │   │   └── DurationLimiter.php
│   │   │           │   ├── RedisManager.php
│   │   │           │   └── RedisServiceProvider.php
│   │   │           ├── Routing
│   │   │           │   ├── composer.json
│   │   │           │   ├── Console
│   │   │           │   │   ├── ControllerMakeCommand.php
│   │   │           │   │   ├── MiddlewareMakeCommand.php
│   │   │           │   │   └── stubs
│   │   │           │   │       ├── controller.api.stub
│   │   │           │   │       ├── controller.invokable.stub
│   │   │           │   │       ├── controller.model.api.stub
│   │   │           │   │       ├── controller.model.stub
│   │   │           │   │       ├── controller.nested.api.stub
│   │   │           │   │       ├── controller.nested.stub
│   │   │           │   │       ├── controller.plain.stub
│   │   │           │   │       ├── controller.stub
│   │   │           │   │       └── middleware.stub
│   │   │           │   ├── Contracts
│   │   │           │   │   └── ControllerDispatcher.php
│   │   │           │   ├── ControllerDispatcher.php
│   │   │           │   ├── ControllerMiddlewareOptions.php
│   │   │           │   ├── Controller.php
│   │   │           │   ├── Events
│   │   │           │   │   └── RouteMatched.php
│   │   │           │   ├── Exceptions
│   │   │           │   │   ├── InvalidSignatureException.php
│   │   │           │   │   └── UrlGenerationException.php
│   │   │           │   ├── ImplicitRouteBinding.php
│   │   │           │   ├── Matching
│   │   │           │   │   ├── HostValidator.php
│   │   │           │   │   ├── MethodValidator.php
│   │   │           │   │   ├── SchemeValidator.php
│   │   │           │   │   ├── UriValidator.php
│   │   │           │   │   └── ValidatorInterface.php
│   │   │           │   ├── Middleware
│   │   │           │   │   ├── SubstituteBindings.php
│   │   │           │   │   ├── ThrottleRequests.php
│   │   │           │   │   ├── ThrottleRequestsWithRedis.php
│   │   │           │   │   └── ValidateSignature.php
│   │   │           │   ├── MiddlewareNameResolver.php
│   │   │           │   ├── PendingResourceRegistration.php
│   │   │           │   ├── Pipeline.php
│   │   │           │   ├── RedirectController.php
│   │   │           │   ├── Redirector.php
│   │   │           │   ├── ResourceRegistrar.php
│   │   │           │   ├── ResponseFactory.php
│   │   │           │   ├── RouteAction.php
│   │   │           │   ├── RouteBinding.php
│   │   │           │   ├── RouteCollection.php
│   │   │           │   ├── RouteCompiler.php
│   │   │           │   ├── RouteDependencyResolverTrait.php
│   │   │           │   ├── RouteGroup.php
│   │   │           │   ├── RouteParameterBinder.php
│   │   │           │   ├── Route.php
│   │   │           │   ├── RouteRegistrar.php
│   │   │           │   ├── Router.php
│   │   │           │   ├── RouteSignatureParameters.php
│   │   │           │   ├── RouteUrlGenerator.php
│   │   │           │   ├── RoutingServiceProvider.php
│   │   │           │   ├── SortedMiddleware.php
│   │   │           │   ├── UrlGenerator.php
│   │   │           │   └── ViewController.php
│   │   │           ├── Session
│   │   │           │   ├── CacheBasedSessionHandler.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Console
│   │   │           │   │   ├── SessionTableCommand.php
│   │   │           │   │   └── stubs
│   │   │           │   │       └── database.stub
│   │   │           │   ├── CookieSessionHandler.php
│   │   │           │   ├── DatabaseSessionHandler.php
│   │   │           │   ├── EncryptedStore.php
│   │   │           │   ├── ExistenceAwareInterface.php
│   │   │           │   ├── FileSessionHandler.php
│   │   │           │   ├── Middleware
│   │   │           │   │   ├── AuthenticateSession.php
│   │   │           │   │   └── StartSession.php
│   │   │           │   ├── NullSessionHandler.php
│   │   │           │   ├── SessionManager.php
│   │   │           │   ├── SessionServiceProvider.php
│   │   │           │   ├── Store.php
│   │   │           │   └── TokenMismatchException.php
│   │   │           ├── Support
│   │   │           │   ├── AggregateServiceProvider.php
│   │   │           │   ├── Arr.php
│   │   │           │   ├── Carbon.php
│   │   │           │   ├── Collection.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Composer.php
│   │   │           │   ├── Facades
│   │   │           │   │   ├── App.php
│   │   │           │   │   ├── Artisan.php
│   │   │           │   │   ├── Auth.php
│   │   │           │   │   ├── Blade.php
│   │   │           │   │   ├── Broadcast.php
│   │   │           │   │   ├── Bus.php
│   │   │           │   │   ├── Cache.php
│   │   │           │   │   ├── Config.php
│   │   │           │   │   ├── Cookie.php
│   │   │           │   │   ├── Crypt.php
│   │   │           │   │   ├── DB.php
│   │   │           │   │   ├── Event.php
│   │   │           │   │   ├── Facade.php
│   │   │           │   │   ├── File.php
│   │   │           │   │   ├── Gate.php
│   │   │           │   │   ├── Hash.php
│   │   │           │   │   ├── Input.php
│   │   │           │   │   ├── Lang.php
│   │   │           │   │   ├── Log.php
│   │   │           │   │   ├── Mail.php
│   │   │           │   │   ├── Notification.php
│   │   │           │   │   ├── Password.php
│   │   │           │   │   ├── Queue.php
│   │   │           │   │   ├── Redirect.php
│   │   │           │   │   ├── Redis.php
│   │   │           │   │   ├── Request.php
│   │   │           │   │   ├── Response.php
│   │   │           │   │   ├── Route.php
│   │   │           │   │   ├── Schema.php
│   │   │           │   │   ├── Session.php
│   │   │           │   │   ├── Storage.php
│   │   │           │   │   ├── URL.php
│   │   │           │   │   ├── Validator.php
│   │   │           │   │   └── View.php
│   │   │           │   ├── Fluent.php
│   │   │           │   ├── helpers.php
│   │   │           │   ├── HigherOrderCollectionProxy.php
│   │   │           │   ├── HigherOrderTapProxy.php
│   │   │           │   ├── HtmlString.php
│   │   │           │   ├── InteractsWithTime.php
│   │   │           │   ├── Manager.php
│   │   │           │   ├── MessageBag.php
│   │   │           │   ├── NamespacedItemResolver.php
│   │   │           │   ├── Optional.php
│   │   │           │   ├── Pluralizer.php
│   │   │           │   ├── ProcessUtils.php
│   │   │           │   ├── ServiceProvider.php
│   │   │           │   ├── Str.php
│   │   │           │   ├── Testing
│   │   │           │   │   └── Fakes
│   │   │           │   │       ├── BusFake.php
│   │   │           │   │       ├── EventFake.php
│   │   │           │   │       ├── MailFake.php
│   │   │           │   │       ├── NotificationFake.php
│   │   │           │   │       ├── PendingMailFake.php
│   │   │           │   │       └── QueueFake.php
│   │   │           │   ├── Traits
│   │   │           │   │   ├── CapsuleManagerTrait.php
│   │   │           │   │   ├── ForwardsCalls.php
│   │   │           │   │   ├── Localizable.php
│   │   │           │   │   └── Macroable.php
│   │   │           │   └── ViewErrorBag.php
│   │   │           ├── Translation
│   │   │           │   ├── ArrayLoader.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── FileLoader.php
│   │   │           │   ├── MessageSelector.php
│   │   │           │   ├── TranslationServiceProvider.php
│   │   │           │   └── Translator.php
│   │   │           ├── Validation
│   │   │           │   ├── ClosureValidationRule.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Concerns
│   │   │           │   │   ├── FormatsMessages.php
│   │   │           │   │   ├── ReplacesAttributes.php
│   │   │           │   │   └── ValidatesAttributes.php
│   │   │           │   ├── DatabasePresenceVerifier.php
│   │   │           │   ├── Factory.php
│   │   │           │   ├── PresenceVerifierInterface.php
│   │   │           │   ├── Rule.php
│   │   │           │   ├── Rules
│   │   │           │   │   ├── DatabaseRule.php
│   │   │           │   │   ├── Dimensions.php
│   │   │           │   │   ├── Exists.php
│   │   │           │   │   ├── In.php
│   │   │           │   │   ├── NotIn.php
│   │   │           │   │   ├── RequiredIf.php
│   │   │           │   │   └── Unique.php
│   │   │           │   ├── UnauthorizedException.php
│   │   │           │   ├── ValidatesWhenResolvedTrait.php
│   │   │           │   ├── ValidationData.php
│   │   │           │   ├── ValidationException.php
│   │   │           │   ├── ValidationRuleParser.php
│   │   │           │   ├── ValidationServiceProvider.php
│   │   │           │   └── Validator.php
│   │   │           └── View
│   │   │               ├── Compilers
│   │   │               │   ├── BladeCompiler.php
│   │   │               │   ├── CompilerInterface.php
│   │   │               │   ├── Compiler.php
│   │   │               │   └── Concerns
│   │   │               │       ├── CompilesAuthorizations.php
│   │   │               │       ├── CompilesComments.php
│   │   │               │       ├── CompilesComponents.php
│   │   │               │       ├── CompilesConditionals.php
│   │   │               │       ├── CompilesEchos.php
│   │   │               │       ├── CompilesHelpers.php
│   │   │               │       ├── CompilesIncludes.php
│   │   │               │       ├── CompilesInjections.php
│   │   │               │       ├── CompilesJson.php
│   │   │               │       ├── CompilesLayouts.php
│   │   │               │       ├── CompilesLoops.php
│   │   │               │       ├── CompilesRawPhp.php
│   │   │               │       ├── CompilesStacks.php
│   │   │               │       └── CompilesTranslations.php
│   │   │               ├── composer.json
│   │   │               ├── Concerns
│   │   │               │   ├── ManagesComponents.php
│   │   │               │   ├── ManagesEvents.php
│   │   │               │   ├── ManagesLayouts.php
│   │   │               │   ├── ManagesLoops.php
│   │   │               │   ├── ManagesStacks.php
│   │   │               │   └── ManagesTranslations.php
│   │   │               ├── Engines
│   │   │               │   ├── CompilerEngine.php
│   │   │               │   ├── Engine.php
│   │   │               │   ├── EngineResolver.php
│   │   │               │   ├── FileEngine.php
│   │   │               │   └── PhpEngine.php
│   │   │               ├── Factory.php
│   │   │               ├── FileViewFinder.php
│   │   │               ├── Middleware
│   │   │               │   └── ShareErrorsFromSession.php
│   │   │               ├── ViewFinderInterface.php
│   │   │               ├── ViewName.php
│   │   │               ├── View.php
│   │   │               └── ViewServiceProvider.php
│   │   └── tinker
│   │       ├── composer.json
│   │       ├── config
│   │       │   └── tinker.php
│   │       ├── LICENSE.txt
│   │       ├── README.md
│   │       └── src
│   │           ├── ClassAliasAutoloader.php
│   │           ├── Console
│   │           │   └── TinkerCommand.php
│   │           ├── TinkerCaster.php
│   │           └── TinkerServiceProvider.php
│   ├── league
│   │   └── flysystem
│   │       ├── composer.json
│   │       ├── deprecations.md
│   │       ├── LICENSE
│   │       └── src
│   │           ├── Adapter
│   │           │   ├── AbstractAdapter.php
│   │           │   ├── AbstractFtpAdapter.php
│   │           │   ├── CanOverwriteFiles.php
│   │           │   ├── Ftpd.php
│   │           │   ├── Ftp.php
│   │           │   ├── Local.php
│   │           │   ├── NullAdapter.php
│   │           │   ├── Polyfill
│   │           │   │   ├── NotSupportingVisibilityTrait.php
│   │           │   │   ├── StreamedCopyTrait.php
│   │           │   │   ├── StreamedReadingTrait.php
│   │           │   │   ├── StreamedTrait.php
│   │           │   │   └── StreamedWritingTrait.php
│   │           │   └── SynologyFtp.php
│   │           ├── AdapterInterface.php
│   │           ├── ConfigAwareTrait.php
│   │           ├── Config.php
│   │           ├── Directory.php
│   │           ├── Exception.php
│   │           ├── FileExistsException.php
│   │           ├── FileNotFoundException.php
│   │           ├── File.php
│   │           ├── FilesystemInterface.php
│   │           ├── FilesystemNotFoundException.php
│   │           ├── Filesystem.php
│   │           ├── Handler.php
│   │           ├── MountManager.php
│   │           ├── NotSupportedException.php
│   │           ├── Plugin
│   │           │   ├── AbstractPlugin.php
│   │           │   ├── EmptyDir.php
│   │           │   ├── ForcedCopy.php
│   │           │   ├── ForcedRename.php
│   │           │   ├── GetWithMetadata.php
│   │           │   ├── ListFiles.php
│   │           │   ├── ListPaths.php
│   │           │   ├── ListWith.php
│   │           │   ├── PluggableTrait.php
│   │           │   └── PluginNotFoundException.php
│   │           ├── PluginInterface.php
│   │           ├── ReadInterface.php
│   │           ├── RootViolationException.php
│   │           ├── SafeStorage.php
│   │           ├── UnreadableFileException.php
│   │           ├── Util
│   │           │   ├── ContentListingFormatter.php
│   │           │   ├── MimeType.php
│   │           │   └── StreamHasher.php
│   │           └── Util.php
│   ├── mockery
│   │   └── mockery
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── CONTRIBUTING.md
│   │       ├── docker
│   │       │   └── php56
│   │       │       └── Dockerfile
│   │       ├── docs
│   │       │   ├── conf.py
│   │       │   ├── cookbook
│   │       │   │   ├── big_parent_class.rst
│   │       │   │   ├── class_constants.rst
│   │       │   │   ├── default_expectations.rst
│   │       │   │   ├── detecting_mock_objects.rst
│   │       │   │   ├── index.rst
│   │       │   │   ├── map.rst.inc
│   │       │   │   ├── mockery_on.rst
│   │       │   │   ├── mocking_hard_dependencies.rst
│   │       │   │   └── not_calling_the_constructor.rst
│   │       │   ├── getting_started
│   │       │   │   ├── index.rst
│   │       │   │   ├── installation.rst
│   │       │   │   ├── map.rst.inc
│   │       │   │   ├── quick_reference.rst
│   │       │   │   ├── simple_example.rst
│   │       │   │   └── upgrading.rst
│   │       │   ├── index.rst
│   │       │   ├── Makefile
│   │       │   ├── mockery
│   │       │   │   ├── configuration.rst
│   │       │   │   ├── exceptions.rst
│   │       │   │   ├── gotchas.rst
│   │       │   │   ├── index.rst
│   │       │   │   ├── map.rst.inc
│   │       │   │   └── reserved_method_names.rst
│   │       │   ├── README.md
│   │       │   └── reference
│   │       │       ├── alternative_should_receive_syntax.rst
│   │       │       ├── argument_validation.rst
│   │       │       ├── creating_test_doubles.rst
│   │       │       ├── demeter_chains.rst
│   │       │       ├── expectations.rst
│   │       │       ├── final_methods_classes.rst
│   │       │       ├── index.rst
│   │       │       ├── instance_mocking.rst
│   │       │       ├── magic_methods.rst
│   │       │       ├── map.rst.inc
│   │       │       ├── partial_mocks.rst
│   │       │       ├── pass_by_reference_behaviours.rst
│   │       │       ├── phpunit_integration.rst
│   │       │       ├── protected_methods.rst
│   │       │       ├── public_properties.rst
│   │       │       ├── public_static_properties.rst
│   │       │       └── spies.rst
│   │       ├── library
│   │       │   ├── helpers.php
│   │       │   ├── Mockery
│   │       │   │   ├── Adapter
│   │       │   │   │   └── Phpunit
│   │       │   │   │       ├── Legacy
│   │       │   │   │       │   ├── TestListenerForV5.php
│   │       │   │   │       │   ├── TestListenerForV6.php
│   │       │   │   │       │   ├── TestListenerForV7.php
│   │       │   │   │       │   └── TestListenerTrait.php
│   │       │   │   │       ├── MockeryPHPUnitIntegration.php
│   │       │   │   │       ├── MockeryTestCase.php
│   │       │   │   │       └── TestListener.php
│   │       │   │   ├── ClosureWrapper.php
│   │       │   │   ├── CompositeExpectation.php
│   │       │   │   ├── Configuration.php
│   │       │   │   ├── Container.php
│   │       │   │   ├── CountValidator
│   │       │   │   │   ├── AtLeast.php
│   │       │   │   │   ├── AtMost.php
│   │       │   │   │   ├── CountValidatorAbstract.php
│   │       │   │   │   ├── Exact.php
│   │       │   │   │   └── Exception.php
│   │       │   │   ├── Exception
│   │       │   │   │   ├── BadMethodCallException.php
│   │       │   │   │   ├── InvalidArgumentException.php
│   │       │   │   │   ├── InvalidCountException.php
│   │       │   │   │   ├── InvalidOrderException.php
│   │       │   │   │   ├── NoMatchingExpectationException.php
│   │       │   │   │   └── RuntimeException.php
│   │       │   │   ├── Exception.php
│   │       │   │   ├── ExpectationDirector.php
│   │       │   │   ├── ExpectationInterface.php
│   │       │   │   ├── Expectation.php
│   │       │   │   ├── ExpectsHigherOrderMessage.php
│   │       │   │   ├── Generator
│   │       │   │   │   ├── CachingGenerator.php
│   │       │   │   │   ├── DefinedTargetClass.php
│   │       │   │   │   ├── Generator.php
│   │       │   │   │   ├── Method.php
│   │       │   │   │   ├── MockConfigurationBuilder.php
│   │       │   │   │   ├── MockConfiguration.php
│   │       │   │   │   ├── MockDefinition.php
│   │       │   │   │   ├── Parameter.php
│   │       │   │   │   ├── StringManipulation
│   │       │   │   │   │   └── Pass
│   │       │   │   │   │       ├── CallTypeHintPass.php
│   │       │   │   │   │       ├── ClassNamePass.php
│   │       │   │   │   │       ├── ClassPass.php
│   │       │   │   │   │       ├── ConstantsPass.php
│   │       │   │   │   │       ├── InstanceMockPass.php
│   │       │   │   │   │       ├── InterfacePass.php
│   │       │   │   │   │       ├── MagicMethodTypeHintsPass.php
│   │       │   │   │   │       ├── MethodDefinitionPass.php
│   │       │   │   │   │       ├── Pass.php
│   │       │   │   │   │       ├── RemoveBuiltinMethodsThatAreFinalPass.php
│   │       │   │   │   │       ├── RemoveDestructorPass.php
│   │       │   │   │   │       ├── RemoveUnserializeForInternalSerializableClassesPass.php
│   │       │   │   │   │       └── TraitPass.php
│   │       │   │   │   ├── StringManipulationGenerator.php
│   │       │   │   │   ├── TargetClassInterface.php
│   │       │   │   │   └── UndefinedTargetClass.php
│   │       │   │   ├── HigherOrderMessage.php
│   │       │   │   ├── Instantiator.php
│   │       │   │   ├── Loader
│   │       │   │   │   ├── EvalLoader.php
│   │       │   │   │   ├── Loader.php
│   │       │   │   │   └── RequireLoader.php
│   │       │   │   ├── Matcher
│   │       │   │   │   ├── AndAnyOtherArgs.php
│   │       │   │   │   ├── AnyArgs.php
│   │       │   │   │   ├── AnyOf.php
│   │       │   │   │   ├── Any.php
│   │       │   │   │   ├── ArgumentListMatcher.php
│   │       │   │   │   ├── Closure.php
│   │       │   │   │   ├── Contains.php
│   │       │   │   │   ├── Ducktype.php
│   │       │   │   │   ├── HasKey.php
│   │       │   │   │   ├── HasValue.php
│   │       │   │   │   ├── MatcherAbstract.php
│   │       │   │   │   ├── MultiArgumentClosure.php
│   │       │   │   │   ├── MustBe.php
│   │       │   │   │   ├── NoArgs.php
│   │       │   │   │   ├── NotAnyOf.php
│   │       │   │   │   ├── Not.php
│   │       │   │   │   ├── Pattern.php
│   │       │   │   │   ├── PHPUnitConstraint.php
│   │       │   │   │   ├── Subset.php
│   │       │   │   │   └── Type.php
│   │       │   │   ├── MethodCall.php
│   │       │   │   ├── MockInterface.php
│   │       │   │   ├── Mock.php
│   │       │   │   ├── ReceivedMethodCalls.php
│   │       │   │   ├── Undefined.php
│   │       │   │   ├── VerificationDirector.php
│   │       │   │   └── VerificationExpectation.php
│   │       │   └── Mockery.php
│   │       ├── LICENSE
│   │       ├── Makefile
│   │       ├── phpunit.xml.dist
│   │       ├── README.md
│   │       └── tests
│   │           ├── Bootstrap.php
│   │           ├── Mockery
│   │           │   ├── Adapter
│   │           │   │   └── Phpunit
│   │           │   │       ├── MockeryPHPUnitIntegrationTest.php
│   │           │   │       └── TestListenerTest.php
│   │           │   ├── AdhocTest.php
│   │           │   ├── AllowsExpectsSyntaxTest.php
│   │           │   ├── CallableSpyTest.php
│   │           │   ├── ContainerTest.php
│   │           │   ├── DemeterChainTest.php
│   │           │   ├── DummyClasses
│   │           │   │   ├── DemeterChain.php
│   │           │   │   └── Namespaced.php
│   │           │   ├── ExpectationTest.php
│   │           │   ├── _files
│   │           │   │   └── file.txt
│   │           │   ├── Fixtures
│   │           │   │   ├── ClassWithAllLowerCaseMethod.php
│   │           │   │   ├── ClassWithConstants.php
│   │           │   │   ├── EmptyTestCaseV5.php
│   │           │   │   ├── EmptyTestCaseV6.php
│   │           │   │   ├── EmptyTestCaseV7.php
│   │           │   │   ├── MethodWithHHVMReturnType.php
│   │           │   │   ├── MethodWithIterableTypeHints.php
│   │           │   │   ├── MethodWithNullableReturnType.php
│   │           │   │   ├── MethodWithNullableTypedParameter.php
│   │           │   │   ├── MethodWithParametersWithDefaultValues.php
│   │           │   │   ├── MethodWithVoidReturnType.php
│   │           │   │   └── SemiReservedWordsAsMethods.php
│   │           │   ├── Generator
│   │           │   │   ├── DefinedTargetClassTest.php
│   │           │   │   ├── MockConfigurationBuilderTest.php
│   │           │   │   ├── MockConfigurationTest.php
│   │           │   │   └── StringManipulation
│   │           │   │       └── Pass
│   │           │   │           ├── CallTypeHintPassTest.php
│   │           │   │           ├── ClassNamePassTest.php
│   │           │   │           ├── ConstantsPassTest.php
│   │           │   │           ├── InstanceMockPassTest.php
│   │           │   │           └── InterfacePassTest.php
│   │           │   ├── GlobalHelpersTest.php
│   │           │   ├── HamcrestExpectationTest.php
│   │           │   ├── Loader
│   │           │   │   ├── EvalLoaderTest.php
│   │           │   │   ├── LoaderTestCase.php
│   │           │   │   └── RequireLoaderTest.php
│   │           │   ├── Matcher
│   │           │   │   ├── PHPUnitConstraintTest.php
│   │           │   │   └── SubsetTest.php
│   │           │   ├── MockClassWithFinalWakeupTest.php
│   │           │   ├── MockClassWithMethodOverloadingTest.php
│   │           │   ├── MockClassWithUnknownTypeHintTest.php
│   │           │   ├── MockeryCanMockClassesWithSemiReservedWordsTest.php
│   │           │   ├── MockeryCanMockMultipleInterfacesWhichOverlapTest.php
│   │           │   ├── MockingAllLowerCasedMethodsTest.php
│   │           │   ├── MockingClassConstantsTest.php
│   │           │   ├── MockingHHVMMethodsTest.php
│   │           │   ├── MockingMethodsWithIterableTypeHintsTest.php
│   │           │   ├── MockingMethodsWithNullableParametersTest.php
│   │           │   ├── MockingNullableMethodsTest.php
│   │           │   ├── MockingProtectedMethodsTest.php
│   │           │   ├── MockingVariadicArgumentsTest.php
│   │           │   ├── MockingVoidMethodsTest.php
│   │           │   ├── MockTest.php
│   │           │   ├── NamedMockTest.php
│   │           │   ├── SpyTest.php
│   │           │   ├── Stubs
│   │           │   │   ├── Animal.php
│   │           │   │   └── Habitat.php
│   │           │   ├── TraitsTest.php
│   │           │   └── WithFormatterExpectationTest.php
│   │           ├── PHP56
│   │           │   └── MockingOldStyleConstructorTest.php
│   │           ├── PHP70
│   │           │   ├── Generator
│   │           │   │   └── StringManipulation
│   │           │   │       └── Pass
│   │           │   │           └── MagicMethodTypeHintsPassTest.php
│   │           │   └── MockingParameterAndReturnTypesTest.php
│   │           └── PHP72
│   │               └── Php72LanguageFeaturesTest.php
│   ├── monolog
│   │   └── monolog
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── doc
│   │       │   ├── 01-usage.md
│   │       │   ├── 02-handlers-formatters-processors.md
│   │       │   ├── 03-utilities.md
│   │       │   ├── 04-extending.md
│   │       │   └── sockets.md
│   │       ├── LICENSE
│   │       ├── phpunit.xml.dist
│   │       ├── README.md
│   │       ├── src
│   │       │   └── Monolog
│   │       │       ├── ErrorHandler.php
│   │       │       ├── Formatter
│   │       │       │   ├── ChromePHPFormatter.php
│   │       │       │   ├── ElasticaFormatter.php
│   │       │       │   ├── FlowdockFormatter.php
│   │       │       │   ├── FluentdFormatter.php
│   │       │       │   ├── FormatterInterface.php
│   │       │       │   ├── GelfMessageFormatter.php
│   │       │       │   ├── HtmlFormatter.php
│   │       │       │   ├── JsonFormatter.php
│   │       │       │   ├── LineFormatter.php
│   │       │       │   ├── LogglyFormatter.php
│   │       │       │   ├── LogstashFormatter.php
│   │       │       │   ├── MongoDBFormatter.php
│   │       │       │   ├── NormalizerFormatter.php
│   │       │       │   ├── ScalarFormatter.php
│   │       │       │   └── WildfireFormatter.php
│   │       │       ├── Handler
│   │       │       │   ├── AbstractHandler.php
│   │       │       │   ├── AbstractProcessingHandler.php
│   │       │       │   ├── AbstractSyslogHandler.php
│   │       │       │   ├── AmqpHandler.php
│   │       │       │   ├── BrowserConsoleHandler.php
│   │       │       │   ├── BufferHandler.php
│   │       │       │   ├── ChromePHPHandler.php
│   │       │       │   ├── CouchDBHandler.php
│   │       │       │   ├── CubeHandler.php
│   │       │       │   ├── Curl
│   │       │       │   │   └── Util.php
│   │       │       │   ├── DeduplicationHandler.php
│   │       │       │   ├── DoctrineCouchDBHandler.php
│   │       │       │   ├── DynamoDbHandler.php
│   │       │       │   ├── ElasticSearchHandler.php
│   │       │       │   ├── ErrorLogHandler.php
│   │       │       │   ├── FilterHandler.php
│   │       │       │   ├── FingersCrossed
│   │       │       │   │   ├── ActivationStrategyInterface.php
│   │       │       │   │   ├── ChannelLevelActivationStrategy.php
│   │       │       │   │   └── ErrorLevelActivationStrategy.php
│   │       │       │   ├── FingersCrossedHandler.php
│   │       │       │   ├── FirePHPHandler.php
│   │       │       │   ├── FleepHookHandler.php
│   │       │       │   ├── FlowdockHandler.php
│   │       │       │   ├── GelfHandler.php
│   │       │       │   ├── GroupHandler.php
│   │       │       │   ├── HandlerInterface.php
│   │       │       │   ├── HandlerWrapper.php
│   │       │       │   ├── HipChatHandler.php
│   │       │       │   ├── IFTTTHandler.php
│   │       │       │   ├── InsightOpsHandler.php
│   │       │       │   ├── LogEntriesHandler.php
│   │       │       │   ├── LogglyHandler.php
│   │       │       │   ├── MailHandler.php
│   │       │       │   ├── MandrillHandler.php
│   │       │       │   ├── MissingExtensionException.php
│   │       │       │   ├── MongoDBHandler.php
│   │       │       │   ├── NativeMailerHandler.php
│   │       │       │   ├── NewRelicHandler.php
│   │       │       │   ├── NullHandler.php
│   │       │       │   ├── PHPConsoleHandler.php
│   │       │       │   ├── PsrHandler.php
│   │       │       │   ├── PushoverHandler.php
│   │       │       │   ├── RavenHandler.php
│   │       │       │   ├── RedisHandler.php
│   │       │       │   ├── RollbarHandler.php
│   │       │       │   ├── RotatingFileHandler.php
│   │       │       │   ├── SamplingHandler.php
│   │       │       │   ├── Slack
│   │       │       │   │   └── SlackRecord.php
│   │       │       │   ├── SlackbotHandler.php
│   │       │       │   ├── SlackHandler.php
│   │       │       │   ├── SlackWebhookHandler.php
│   │       │       │   ├── SocketHandler.php
│   │       │       │   ├── StreamHandler.php
│   │       │       │   ├── SwiftMailerHandler.php
│   │       │       │   ├── SyslogHandler.php
│   │       │       │   ├── SyslogUdp
│   │       │       │   │   └── UdpSocket.php
│   │       │       │   ├── SyslogUdpHandler.php
│   │       │       │   ├── TestHandler.php
│   │       │       │   ├── WhatFailureGroupHandler.php
│   │       │       │   └── ZendMonitorHandler.php
│   │       │       ├── Logger.php
│   │       │       ├── Processor
│   │       │       │   ├── GitProcessor.php
│   │       │       │   ├── IntrospectionProcessor.php
│   │       │       │   ├── MemoryPeakUsageProcessor.php
│   │       │       │   ├── MemoryProcessor.php
│   │       │       │   ├── MemoryUsageProcessor.php
│   │       │       │   ├── MercurialProcessor.php
│   │       │       │   ├── ProcessIdProcessor.php
│   │       │       │   ├── ProcessorInterface.php
│   │       │       │   ├── PsrLogMessageProcessor.php
│   │       │       │   ├── TagProcessor.php
│   │       │       │   ├── UidProcessor.php
│   │       │       │   └── WebProcessor.php
│   │       │       ├── Registry.php
│   │       │       ├── ResettableInterface.php
│   │       │       ├── SignalHandler.php
│   │       │       └── Utils.php
│   │       └── tests
│   │           └── Monolog
│   │               ├── ErrorHandlerTest.php
│   │               ├── Formatter
│   │               │   ├── ChromePHPFormatterTest.php
│   │               │   ├── ElasticaFormatterTest.php
│   │               │   ├── FlowdockFormatterTest.php
│   │               │   ├── FluentdFormatterTest.php
│   │               │   ├── GelfMessageFormatterTest.php
│   │               │   ├── JsonFormatterTest.php
│   │               │   ├── LineFormatterTest.php
│   │               │   ├── LogglyFormatterTest.php
│   │               │   ├── LogstashFormatterTest.php
│   │               │   ├── MongoDBFormatterTest.php
│   │               │   ├── NormalizerFormatterTest.php
│   │               │   ├── ScalarFormatterTest.php
│   │               │   └── WildfireFormatterTest.php
│   │               ├── Handler
│   │               │   ├── AbstractHandlerTest.php
│   │               │   ├── AbstractProcessingHandlerTest.php
│   │               │   ├── AmqpHandlerTest.php
│   │               │   ├── BrowserConsoleHandlerTest.php
│   │               │   ├── BufferHandlerTest.php
│   │               │   ├── ChromePHPHandlerTest.php
│   │               │   ├── CouchDBHandlerTest.php
│   │               │   ├── DeduplicationHandlerTest.php
│   │               │   ├── DoctrineCouchDBHandlerTest.php
│   │               │   ├── DynamoDbHandlerTest.php
│   │               │   ├── ElasticSearchHandlerTest.php
│   │               │   ├── ErrorLogHandlerTest.php
│   │               │   ├── FilterHandlerTest.php
│   │               │   ├── FingersCrossedHandlerTest.php
│   │               │   ├── FirePHPHandlerTest.php
│   │               │   ├── Fixtures
│   │               │   ├── FleepHookHandlerTest.php
│   │               │   ├── FlowdockHandlerTest.php
│   │               │   ├── GelfHandlerLegacyTest.php
│   │               │   ├── GelfHandlerTest.php
│   │               │   ├── GelfMockMessagePublisher.php
│   │               │   ├── GroupHandlerTest.php
│   │               │   ├── HandlerWrapperTest.php
│   │               │   ├── HipChatHandlerTest.php
│   │               │   ├── InsightOpsHandlerTest.php
│   │               │   ├── LogEntriesHandlerTest.php
│   │               │   ├── MailHandlerTest.php
│   │               │   ├── MockRavenClient.php
│   │               │   ├── MongoDBHandlerTest.php
│   │               │   ├── NativeMailerHandlerTest.php
│   │               │   ├── NewRelicHandlerTest.php
│   │               │   ├── NullHandlerTest.php
│   │               │   ├── PHPConsoleHandlerTest.php
│   │               │   ├── PsrHandlerTest.php
│   │               │   ├── PushoverHandlerTest.php
│   │               │   ├── RavenHandlerTest.php
│   │               │   ├── RedisHandlerTest.php
│   │               │   ├── RollbarHandlerTest.php
│   │               │   ├── RotatingFileHandlerTest.php
│   │               │   ├── SamplingHandlerTest.php
│   │               │   ├── Slack
│   │               │   │   └── SlackRecordTest.php
│   │               │   ├── SlackbotHandlerTest.php
│   │               │   ├── SlackHandlerTest.php
│   │               │   ├── SlackWebhookHandlerTest.php
│   │               │   ├── SocketHandlerTest.php
│   │               │   ├── StreamHandlerTest.php
│   │               │   ├── SwiftMailerHandlerTest.php
│   │               │   ├── SyslogHandlerTest.php
│   │               │   ├── SyslogUdpHandlerTest.php
│   │               │   ├── TestHandlerTest.php
│   │               │   ├── UdpSocketTest.php
│   │               │   ├── WhatFailureGroupHandlerTest.php
│   │               │   └── ZendMonitorHandlerTest.php
│   │               ├── LoggerTest.php
│   │               ├── Processor
│   │               │   ├── GitProcessorTest.php
│   │               │   ├── IntrospectionProcessorTest.php
│   │               │   ├── MemoryPeakUsageProcessorTest.php
│   │               │   ├── MemoryUsageProcessorTest.php
│   │               │   ├── MercurialProcessorTest.php
│   │               │   ├── ProcessIdProcessorTest.php
│   │               │   ├── PsrLogMessageProcessorTest.php
│   │               │   ├── TagProcessorTest.php
│   │               │   ├── UidProcessorTest.php
│   │               │   └── WebProcessorTest.php
│   │               ├── PsrLogCompatTest.php
│   │               ├── RegistryTest.php
│   │               ├── SignalHandlerTest.php
│   │               └── TestCase.php
│   ├── myclabs
│   │   └── deep-copy
│   │       ├── composer.json
│   │       ├── doc
│   │       │   ├── clone.png
│   │       │   ├── deep-clone.png
│   │       │   ├── deep-copy.png
│   │       │   └── graph.png
│   │       ├── fixtures
│   │       │   ├── f001
│   │       │   │   ├── A.php
│   │       │   │   └── B.php
│   │       │   ├── f002
│   │       │   │   └── A.php
│   │       │   ├── f003
│   │       │   │   └── Foo.php
│   │       │   ├── f004
│   │       │   │   └── UnclonableItem.php
│   │       │   ├── f005
│   │       │   │   └── Foo.php
│   │       │   ├── f006
│   │       │   │   ├── A.php
│   │       │   │   └── B.php
│   │       │   ├── f007
│   │       │   │   ├── FooDateInterval.php
│   │       │   │   └── FooDateTimeZone.php
│   │       │   └── f008
│   │       │       ├── A.php
│   │       │       └── B.php
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── src
│   │           └── DeepCopy
│   │               ├── deep_copy.php
│   │               ├── DeepCopy.php
│   │               ├── Exception
│   │               │   ├── CloneException.php
│   │               │   └── PropertyException.php
│   │               ├── Filter
│   │               │   ├── Doctrine
│   │               │   │   ├── DoctrineCollectionFilter.php
│   │               │   │   ├── DoctrineEmptyCollectionFilter.php
│   │               │   │   └── DoctrineProxyFilter.php
│   │               │   ├── Filter.php
│   │               │   ├── KeepFilter.php
│   │               │   ├── ReplaceFilter.php
│   │               │   └── SetNullFilter.php
│   │               ├── Matcher
│   │               │   ├── Doctrine
│   │               │   │   └── DoctrineProxyMatcher.php
│   │               │   ├── Matcher.php
│   │               │   ├── PropertyMatcher.php
│   │               │   ├── PropertyNameMatcher.php
│   │               │   └── PropertyTypeMatcher.php
│   │               ├── Reflection
│   │               │   └── ReflectionHelper.php
│   │               ├── TypeFilter
│   │               │   ├── Date
│   │               │   │   └── DateIntervalFilter.php
│   │               │   ├── ReplaceFilter.php
│   │               │   ├── ShallowCopyFilter.php
│   │               │   ├── Spl
│   │               │   │   ├── SplDoublyLinkedListFilter.php
│   │               │   │   └── SplDoublyLinkedList.php
│   │               │   └── TypeFilter.php
│   │               └── TypeMatcher
│   │                   └── TypeMatcher.php
│   ├── nesbot
│   │   └── carbon
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── readme.md
│   │       └── src
│   │           ├── Carbon
│   │           │   ├── CarbonInterval.php
│   │           │   ├── CarbonPeriod.php
│   │           │   ├── Carbon.php
│   │           │   ├── Exceptions
│   │           │   │   └── InvalidDateException.php
│   │           │   ├── Lang
│   │           │   │   ├── af.php
│   │           │   │   ├── ar.php
│   │           │   │   ├── ar_Shakl.php
│   │           │   │   ├── az.php
│   │           │   │   ├── bg.php
│   │           │   │   ├── bn.php
│   │           │   │   ├── bs_BA.php
│   │           │   │   ├── ca.php
│   │           │   │   ├── cs.php
│   │           │   │   ├── cy.php
│   │           │   │   ├── da.php
│   │           │   │   ├── de.php
│   │           │   │   ├── dv_MV.php
│   │           │   │   ├── el.php
│   │           │   │   ├── en.php
│   │           │   │   ├── eo.php
│   │           │   │   ├── es.php
│   │           │   │   ├── et.php
│   │           │   │   ├── eu.php
│   │           │   │   ├── fa.php
│   │           │   │   ├── fi.php
│   │           │   │   ├── fo.php
│   │           │   │   ├── fr.php
│   │           │   │   ├── gl.php
│   │           │   │   ├── gu.php
│   │           │   │   ├── he.php
│   │           │   │   ├── hi.php
│   │           │   │   ├── hr.php
│   │           │   │   ├── hu.php
│   │           │   │   ├── hy.php
│   │           │   │   ├── id.php
│   │           │   │   ├── is.php
│   │           │   │   ├── it.php
│   │           │   │   ├── ja.php
│   │           │   │   ├── ka.php
│   │           │   │   ├── kk.php
│   │           │   │   ├── km.php
│   │           │   │   ├── ko.php
│   │           │   │   ├── lt.php
│   │           │   │   ├── lv.php
│   │           │   │   ├── mk.php
│   │           │   │   ├── mn.php
│   │           │   │   ├── ms.php
│   │           │   │   ├── my.php
│   │           │   │   ├── ne.php
│   │           │   │   ├── nl.php
│   │           │   │   ├── no.php
│   │           │   │   ├── oc.php
│   │           │   │   ├── pl.php
│   │           │   │   ├── ps.php
│   │           │   │   ├── pt_BR.php
│   │           │   │   ├── pt.php
│   │           │   │   ├── ro.php
│   │           │   │   ├── ru.php
│   │           │   │   ├── sh.php
│   │           │   │   ├── sk.php
│   │           │   │   ├── sl.php
│   │           │   │   ├── sq.php
│   │           │   │   ├── sr_Cyrl_ME.php
│   │           │   │   ├── sr_Cyrl.php
│   │           │   │   ├── sr_Latn_ME.php
│   │           │   │   ├── sr_ME.php
│   │           │   │   ├── sr.php
│   │           │   │   ├── sv.php
│   │           │   │   ├── sw.php
│   │           │   │   ├── th.php
│   │           │   │   ├── tr.php
│   │           │   │   ├── uk.php
│   │           │   │   ├── ur.php
│   │           │   │   ├── uz.php
│   │           │   │   ├── vi.php
│   │           │   │   ├── zh.php
│   │           │   │   └── zh_TW.php
│   │           │   ├── Laravel
│   │           │   │   └── ServiceProvider.php
│   │           │   └── Translator.php
│   │           └── JsonSerializable.php
│   ├── nikic
│   │   └── php-parser
│   │       ├── bin
│   │       │   └── php-parse
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── doc
│   │       │   ├── 0_Introduction.markdown
│   │       │   ├── 2_Usage_of_basic_components.markdown
│   │       │   ├── component
│   │       │   │   ├── AST_builders.markdown
│   │       │   │   ├── Constant_expression_evaluation.markdown
│   │       │   │   ├── Error_handling.markdown
│   │       │   │   ├── FAQ.markdown
│   │       │   │   ├── JSON_representation.markdown
│   │       │   │   ├── Lexer.markdown
│   │       │   │   ├── Name_resolution.markdown
│   │       │   │   ├── Performance.markdown
│   │       │   │   ├── Pretty_printing.markdown
│   │       │   │   └── Walking_the_AST.markdown
│   │       │   └── README.md
│   │       ├── grammar
│   │       │   ├── parser.template
│   │       │   ├── php5.y
│   │       │   ├── php7.y
│   │       │   ├── README.md
│   │       │   ├── rebuildParsers.php
│   │       │   ├── tokens.template
│   │       │   └── tokens.y
│   │       ├── lib
│   │       │   └── PhpParser
│   │       │       ├── Builder
│   │       │       │   ├── Class_.php
│   │       │       │   ├── Declaration.php
│   │       │       │   ├── FunctionLike.php
│   │       │       │   ├── Function_.php
│   │       │       │   ├── Interface_.php
│   │       │       │   ├── Method.php
│   │       │       │   ├── Namespace_.php
│   │       │       │   ├── Param.php
│   │       │       │   ├── Property.php
│   │       │       │   ├── Trait_.php
│   │       │       │   ├── TraitUseAdaptation.php
│   │       │       │   ├── TraitUse.php
│   │       │       │   └── Use_.php
│   │       │       ├── BuilderFactory.php
│   │       │       ├── BuilderHelpers.php
│   │       │       ├── Builder.php
│   │       │       ├── Comment
│   │       │       │   └── Doc.php
│   │       │       ├── Comment.php
│   │       │       ├── ConstExprEvaluationException.php
│   │       │       ├── ConstExprEvaluator.php
│   │       │       ├── ErrorHandler
│   │       │       │   ├── Collecting.php
│   │       │       │   └── Throwing.php
│   │       │       ├── ErrorHandler.php
│   │       │       ├── Error.php
│   │       │       ├── Internal
│   │       │       │   ├── DiffElem.php
│   │       │       │   ├── Differ.php
│   │       │       │   ├── PrintableNewAnonClassNode.php
│   │       │       │   └── TokenStream.php
│   │       │       ├── JsonDecoder.php
│   │       │       ├── Lexer
│   │       │       │   └── Emulative.php
│   │       │       ├── Lexer.php
│   │       │       ├── NameContext.php
│   │       │       ├── Node
│   │       │       │   ├── Arg.php
│   │       │       │   ├── Const_.php
│   │       │       │   ├── Expr
│   │       │       │   │   ├── ArrayDimFetch.php
│   │       │       │   │   ├── ArrayItem.php
│   │       │       │   │   ├── Array_.php
│   │       │       │   │   ├── AssignOp
│   │       │       │   │   │   ├── BitwiseAnd.php
│   │       │       │   │   │   ├── BitwiseOr.php
│   │       │       │   │   │   ├── BitwiseXor.php
│   │       │       │   │   │   ├── Concat.php
│   │       │       │   │   │   ├── Div.php
│   │       │       │   │   │   ├── Minus.php
│   │       │       │   │   │   ├── Mod.php
│   │       │       │   │   │   ├── Mul.php
│   │       │       │   │   │   ├── Plus.php
│   │       │       │   │   │   ├── Pow.php
│   │       │       │   │   │   ├── ShiftLeft.php
│   │       │       │   │   │   └── ShiftRight.php
│   │       │       │   │   ├── AssignOp.php
│   │       │       │   │   ├── Assign.php
│   │       │       │   │   ├── AssignRef.php
│   │       │       │   │   ├── BinaryOp
│   │       │       │   │   │   ├── BitwiseAnd.php
│   │       │       │   │   │   ├── BitwiseOr.php
│   │       │       │   │   │   ├── BitwiseXor.php
│   │       │       │   │   │   ├── BooleanAnd.php
│   │       │       │   │   │   ├── BooleanOr.php
│   │       │       │   │   │   ├── Coalesce.php
│   │       │       │   │   │   ├── Concat.php
│   │       │       │   │   │   ├── Div.php
│   │       │       │   │   │   ├── Equal.php
│   │       │       │   │   │   ├── GreaterOrEqual.php
│   │       │       │   │   │   ├── Greater.php
│   │       │       │   │   │   ├── Identical.php
│   │       │       │   │   │   ├── LogicalAnd.php
│   │       │       │   │   │   ├── LogicalOr.php
│   │       │       │   │   │   ├── LogicalXor.php
│   │       │       │   │   │   ├── Minus.php
│   │       │       │   │   │   ├── Mod.php
│   │       │       │   │   │   ├── Mul.php
│   │       │       │   │   │   ├── NotEqual.php
│   │       │       │   │   │   ├── NotIdentical.php
│   │       │       │   │   │   ├── Plus.php
│   │       │       │   │   │   ├── Pow.php
│   │       │       │   │   │   ├── ShiftLeft.php
│   │       │       │   │   │   ├── ShiftRight.php
│   │       │       │   │   │   ├── SmallerOrEqual.php
│   │       │       │   │   │   ├── Smaller.php
│   │       │       │   │   │   └── Spaceship.php
│   │       │       │   │   ├── BinaryOp.php
│   │       │       │   │   ├── BitwiseNot.php
│   │       │       │   │   ├── BooleanNot.php
│   │       │       │   │   ├── Cast
│   │       │       │   │   │   ├── Array_.php
│   │       │       │   │   │   ├── Bool_.php
│   │       │       │   │   │   ├── Double.php
│   │       │       │   │   │   ├── Int_.php
│   │       │       │   │   │   ├── Object_.php
│   │       │       │   │   │   ├── String_.php
│   │       │       │   │   │   └── Unset_.php
│   │       │       │   │   ├── Cast.php
│   │       │       │   │   ├── ClassConstFetch.php
│   │       │       │   │   ├── Clone_.php
│   │       │       │   │   ├── Closure.php
│   │       │       │   │   ├── ClosureUse.php
│   │       │       │   │   ├── ConstFetch.php
│   │       │       │   │   ├── Empty_.php
│   │       │       │   │   ├── Error.php
│   │       │       │   │   ├── ErrorSuppress.php
│   │       │       │   │   ├── Eval_.php
│   │       │       │   │   ├── Exit_.php
│   │       │       │   │   ├── FuncCall.php
│   │       │       │   │   ├── Include_.php
│   │       │       │   │   ├── Instanceof_.php
│   │       │       │   │   ├── Isset_.php
│   │       │       │   │   ├── List_.php
│   │       │       │   │   ├── MethodCall.php
│   │       │       │   │   ├── New_.php
│   │       │       │   │   ├── PostDec.php
│   │       │       │   │   ├── PostInc.php
│   │       │       │   │   ├── PreDec.php
│   │       │       │   │   ├── PreInc.php
│   │       │       │   │   ├── Print_.php
│   │       │       │   │   ├── PropertyFetch.php
│   │       │       │   │   ├── ShellExec.php
│   │       │       │   │   ├── StaticCall.php
│   │       │       │   │   ├── StaticPropertyFetch.php
│   │       │       │   │   ├── Ternary.php
│   │       │       │   │   ├── UnaryMinus.php
│   │       │       │   │   ├── UnaryPlus.php
│   │       │       │   │   ├── Variable.php
│   │       │       │   │   ├── YieldFrom.php
│   │       │       │   │   └── Yield_.php
│   │       │       │   ├── Expr.php
│   │       │       │   ├── FunctionLike.php
│   │       │       │   ├── Identifier.php
│   │       │       │   ├── Name
│   │       │       │   │   ├── FullyQualified.php
│   │       │       │   │   └── Relative.php
│   │       │       │   ├── Name.php
│   │       │       │   ├── NullableType.php
│   │       │       │   ├── Param.php
│   │       │       │   ├── Scalar
│   │       │       │   │   ├── DNumber.php
│   │       │       │   │   ├── Encapsed.php
│   │       │       │   │   ├── EncapsedStringPart.php
│   │       │       │   │   ├── LNumber.php
│   │       │       │   │   ├── MagicConst
│   │       │       │   │   │   ├── Class_.php
│   │       │       │   │   │   ├── Dir.php
│   │       │       │   │   │   ├── File.php
│   │       │       │   │   │   ├── Function_.php
│   │       │       │   │   │   ├── Line.php
│   │       │       │   │   │   ├── Method.php
│   │       │       │   │   │   ├── Namespace_.php
│   │       │       │   │   │   └── Trait_.php
│   │       │       │   │   ├── MagicConst.php
│   │       │       │   │   └── String_.php
│   │       │       │   ├── Scalar.php
│   │       │       │   ├── Stmt
│   │       │       │   │   ├── Break_.php
│   │       │       │   │   ├── Case_.php
│   │       │       │   │   ├── Catch_.php
│   │       │       │   │   ├── ClassConst.php
│   │       │       │   │   ├── ClassLike.php
│   │       │       │   │   ├── ClassMethod.php
│   │       │       │   │   ├── Class_.php
│   │       │       │   │   ├── Const_.php
│   │       │       │   │   ├── Continue_.php
│   │       │       │   │   ├── DeclareDeclare.php
│   │       │       │   │   ├── Declare_.php
│   │       │       │   │   ├── Do_.php
│   │       │       │   │   ├── Echo_.php
│   │       │       │   │   ├── ElseIf_.php
│   │       │       │   │   ├── Else_.php
│   │       │       │   │   ├── Expression.php
│   │       │       │   │   ├── Finally_.php
│   │       │       │   │   ├── Foreach_.php
│   │       │       │   │   ├── For_.php
│   │       │       │   │   ├── Function_.php
│   │       │       │   │   ├── Global_.php
│   │       │       │   │   ├── Goto_.php
│   │       │       │   │   ├── GroupUse.php
│   │       │       │   │   ├── HaltCompiler.php
│   │       │       │   │   ├── If_.php
│   │       │       │   │   ├── InlineHTML.php
│   │       │       │   │   ├── Interface_.php
│   │       │       │   │   ├── Label.php
│   │       │       │   │   ├── Namespace_.php
│   │       │       │   │   ├── Nop.php
│   │       │       │   │   ├── Property.php
│   │       │       │   │   ├── PropertyProperty.php
│   │       │       │   │   ├── Return_.php
│   │       │       │   │   ├── Static_.php
│   │       │       │   │   ├── StaticVar.php
│   │       │       │   │   ├── Switch_.php
│   │       │       │   │   ├── Throw_.php
│   │       │       │   │   ├── Trait_.php
│   │       │       │   │   ├── TraitUseAdaptation
│   │       │       │   │   │   ├── Alias.php
│   │       │       │   │   │   └── Precedence.php
│   │       │       │   │   ├── TraitUseAdaptation.php
│   │       │       │   │   ├── TraitUse.php
│   │       │       │   │   ├── TryCatch.php
│   │       │       │   │   ├── Unset_.php
│   │       │       │   │   ├── Use_.php
│   │       │       │   │   ├── UseUse.php
│   │       │       │   │   └── While_.php
│   │       │       │   ├── Stmt.php
│   │       │       │   └── VarLikeIdentifier.php
│   │       │       ├── NodeAbstract.php
│   │       │       ├── NodeDumper.php
│   │       │       ├── NodeFinder.php
│   │       │       ├── Node.php
│   │       │       ├── NodeTraverserInterface.php
│   │       │       ├── NodeTraverser.php
│   │       │       ├── NodeVisitor
│   │       │       │   ├── CloningVisitor.php
│   │       │       │   ├── FindingVisitor.php
│   │       │       │   ├── FirstFindingVisitor.php
│   │       │       │   └── NameResolver.php
│   │       │       ├── NodeVisitorAbstract.php
│   │       │       ├── NodeVisitor.php
│   │       │       ├── Parser
│   │       │       │   ├── Multiple.php
│   │       │       │   ├── Php5.php
│   │       │       │   ├── Php7.php
│   │       │       │   └── Tokens.php
│   │       │       ├── ParserAbstract.php
│   │       │       ├── ParserFactory.php
│   │       │       ├── Parser.php
│   │       │       ├── PrettyPrinter
│   │       │       │   └── Standard.php
│   │       │       └── PrettyPrinterAbstract.php
│   │       ├── LICENSE
│   │       ├── phpunit.xml.dist
│   │       ├── README.md
│   │       ├── test
│   │       │   ├── bootstrap.php
│   │       │   ├── code
│   │       │   │   ├── formatPreservation
│   │       │   │   │   ├── anonClasses.test
│   │       │   │   │   ├── basic.test
│   │       │   │   │   ├── blockConversion.test
│   │       │   │   │   ├── comments.test
│   │       │   │   │   ├── fixup.test
│   │       │   │   │   ├── inlineHtml.test
│   │       │   │   │   ├── insertionOfNullable.test
│   │       │   │   │   ├── listInsertionIndentation.test
│   │       │   │   │   ├── listInsertion.test
│   │       │   │   │   ├── listRemoval.test
│   │       │   │   │   ├── modifierChange.test
│   │       │   │   │   ├── nopCommentAtEnd.test
│   │       │   │   │   ├── removalViaNull.test
│   │       │   │   │   └── traitAlias.test
│   │       │   │   ├── parser
│   │       │   │   │   ├── blockComments.test
│   │       │   │   │   ├── commentAtEndOfClass.test
│   │       │   │   │   ├── comments.test
│   │       │   │   │   ├── errorHandling
│   │       │   │   │   │   ├── eofError.test
│   │       │   │   │   │   ├── lexerErrors.test
│   │       │   │   │   │   └── recovery.test
│   │       │   │   │   ├── expr
│   │       │   │   │   │   ├── arrayDef.test
│   │       │   │   │   │   ├── arrayDestructuring.test
│   │       │   │   │   │   ├── assignNewByRef.test
│   │       │   │   │   │   ├── assign.test
│   │       │   │   │   │   ├── cast.test
│   │       │   │   │   │   ├── clone.test
│   │       │   │   │   │   ├── closure.test
│   │       │   │   │   │   ├── comparison.test
│   │       │   │   │   │   ├── constant_expr.test
│   │       │   │   │   │   ├── errorSuppress.test
│   │       │   │   │   │   ├── exit.test
│   │       │   │   │   │   ├── fetchAndCall
│   │       │   │   │   │   │   ├── args.test
│   │       │   │   │   │   │   ├── constantDeref.test
│   │       │   │   │   │   │   ├── constFetch.test
│   │       │   │   │   │   │   ├── funcCall.test
│   │       │   │   │   │   │   ├── newDeref.test
│   │       │   │   │   │   │   ├── objectAccess.test
│   │       │   │   │   │   │   ├── simpleArrayAccess.test
│   │       │   │   │   │   │   ├── staticCall.test
│   │       │   │   │   │   │   └── staticPropertyFetch.test
│   │       │   │   │   │   ├── includeAndEval.test
│   │       │   │   │   │   ├── issetAndEmpty.test
│   │       │   │   │   │   ├── listReferences.test
│   │       │   │   │   │   ├── listWithKeys.test
│   │       │   │   │   │   ├── logic.test
│   │       │   │   │   │   ├── math.test
│   │       │   │   │   │   ├── new.test
│   │       │   │   │   │   ├── newWithoutClass.test
│   │       │   │   │   │   ├── print.test
│   │       │   │   │   │   ├── shellExec.test
│   │       │   │   │   │   ├── ternaryAndCoalesce.test
│   │       │   │   │   │   ├── trailingCommas.test
│   │       │   │   │   │   ├── uvs
│   │       │   │   │   │   │   ├── globalNonSimpleVarError.test
│   │       │   │   │   │   │   ├── indirectCall.test
│   │       │   │   │   │   │   ├── isset.test
│   │       │   │   │   │   │   ├── misc.test
│   │       │   │   │   │   │   ├── new.test
│   │       │   │   │   │   │   └── staticProperty.test
│   │       │   │   │   │   └── variable.test
│   │       │   │   │   ├── exprStmtMode.test
│   │       │   │   │   ├── scalar
│   │       │   │   │   │   ├── constantString.test
│   │       │   │   │   │   ├── docStringNewlines.test
│   │       │   │   │   │   ├── docString.test
│   │       │   │   │   │   ├── encapsedNegVarOffset.test
│   │       │   │   │   │   ├── encapsedString.test
│   │       │   │   │   │   ├── flexibleDocStringErrors.test
│   │       │   │   │   │   ├── flexibleDocString.test
│   │       │   │   │   │   ├── float.test
│   │       │   │   │   │   ├── int.test
│   │       │   │   │   │   ├── invalidOctal.test
│   │       │   │   │   │   ├── magicConst.test
│   │       │   │   │   │   └── unicodeEscape.test
│   │       │   │   │   ├── semiReserved.test
│   │       │   │   │   └── stmt
│   │       │   │   │       ├── blocklessStatement.test
│   │       │   │   │       ├── class
│   │       │   │   │       │   ├── abstract.test
│   │       │   │   │       │   ├── anonymous.test
│   │       │   │   │       │   ├── conditional.test
│   │       │   │   │       │   ├── constModifierErrors.test
│   │       │   │   │       │   ├── constModifiers.test
│   │       │   │   │       │   ├── final.test
│   │       │   │   │       │   ├── implicitPublic.test
│   │       │   │   │       │   ├── interface.test
│   │       │   │   │       │   ├── modifier.test
│   │       │   │   │       │   ├── name.test
│   │       │   │   │       │   ├── php4Style.test
│   │       │   │   │       │   ├── simple.test
│   │       │   │   │       │   ├── staticMethod.test
│   │       │   │   │       │   └── trait.test
│   │       │   │   │       ├── const.test
│   │       │   │   │       ├── controlFlow.test
│   │       │   │   │       ├── declare.test
│   │       │   │   │       ├── echo.test
│   │       │   │   │       ├── function
│   │       │   │   │       │   ├── builtinTypeDeclarations.test
│   │       │   │   │       │   ├── byRef.test
│   │       │   │   │       │   ├── conditional.test
│   │       │   │   │       │   ├── defaultValues.test
│   │       │   │   │       │   ├── nullableTypes.test
│   │       │   │   │       │   ├── returnTypes.test
│   │       │   │   │       │   ├── specialVars.test
│   │       │   │   │       │   ├── typeDeclarations.test
│   │       │   │   │       │   ├── variadicDefaultValue.test
│   │       │   │   │       │   └── variadic.test
│   │       │   │   │       ├── generator
│   │       │   │   │       │   ├── basic.test
│   │       │   │   │       │   ├── yieldPrecedence.test
│   │       │   │   │       │   └── yieldUnaryPrecedence.test
│   │       │   │   │       ├── haltCompilerInvalidSyntax.test
│   │       │   │   │       ├── haltCompilerOffset.test
│   │       │   │   │       ├── haltCompilerOutermostScope.test
│   │       │   │   │       ├── haltCompiler.test
│   │       │   │   │       ├── hashbang.test
│   │       │   │   │       ├── if.test
│   │       │   │   │       ├── inlineHTML.test
│   │       │   │   │       ├── loop
│   │       │   │   │       │   ├── do.test
│   │       │   │   │       │   ├── foreach.test
│   │       │   │   │       │   ├── for.test
│   │       │   │   │       │   └── while.test
│   │       │   │   │       ├── multiCatch.test
│   │       │   │   │       ├── namespace
│   │       │   │   │       │   ├── alias.test
│   │       │   │   │       │   ├── braced.test
│   │       │   │   │       │   ├── commentAfterNamespace.test
│   │       │   │   │       │   ├── groupUseErrors.test
│   │       │   │   │       │   ├── groupUsePositions.test
│   │       │   │   │       │   ├── groupUse.test
│   │       │   │   │       │   ├── groupUseTrailingComma.test
│   │       │   │   │       │   ├── invalidName.test
│   │       │   │   │       │   ├── mix.test
│   │       │   │   │       │   ├── name.test
│   │       │   │   │       │   ├── nested.test
│   │       │   │   │       │   ├── notBraced.test
│   │       │   │   │       │   ├── nsAfterHashbang.test
│   │       │   │   │       │   ├── outsideStmtInvalid.test
│   │       │   │   │       │   └── outsideStmt.test
│   │       │   │   │       ├── switch.test
│   │       │   │   │       ├── tryCatch.test
│   │       │   │   │       ├── tryWithoutCatch.test
│   │       │   │   │       └── unset.test
│   │       │   │   └── prettyPrinter
│   │       │   │       ├── commentsInCommaList.test
│   │       │   │       ├── comments.test
│   │       │   │       ├── expr
│   │       │   │       │   ├── anonymousClass.test
│   │       │   │       │   ├── arrayDestructuring.test
│   │       │   │       │   ├── call.test
│   │       │   │       │   ├── closure.test
│   │       │   │       │   ├── constant_deref.test
│   │       │   │       │   ├── docStrings.test
│   │       │   │       │   ├── include.test
│   │       │   │       │   ├── intrinsics.test
│   │       │   │       │   ├── list.test
│   │       │   │       │   ├── literals.test
│   │       │   │       │   ├── numbers.test
│   │       │   │       │   ├── operators.test
│   │       │   │       │   ├── parentheses.test
│   │       │   │       │   ├── shortArraySyntax.test
│   │       │   │       │   ├── stringEscaping.test
│   │       │   │       │   ├── uvs.test
│   │       │   │       │   ├── variables.test
│   │       │   │       │   └── yield.test
│   │       │   │       ├── inlineHTMLandPHPtest.file-test
│   │       │   │       ├── nestedInlineHTML.test
│   │       │   │       ├── onlyInlineHTML.file-test
│   │       │   │       ├── onlyPHP.file-test
│   │       │   │       └── stmt
│   │       │   │           ├── alias.test
│   │       │   │           ├── break_continue.test
│   │       │   │           ├── class_const.test
│   │       │   │           ├── class.test
│   │       │   │           ├── const.test
│   │       │   │           ├── declare.test
│   │       │   │           ├── do_while.test
│   │       │   │           ├── foreach.test
│   │       │   │           ├── for.test
│   │       │   │           ├── function_signatures.test
│   │       │   │           ├── global_static_variables.test
│   │       │   │           ├── goto.test
│   │       │   │           ├── groupUse.test
│   │       │   │           ├── haltCompiler.file-test
│   │       │   │           ├── if.test
│   │       │   │           ├── multiCatch.test
│   │       │   │           ├── namespaces.test
│   │       │   │           ├── nullable_types.test
│   │       │   │           ├── switch.test
│   │       │   │           ├── throw.test
│   │       │   │           ├── traitUse.test
│   │       │   │           ├── tryCatch.test
│   │       │   │           └── while.test
│   │       │   ├── PhpParser
│   │       │   │   ├── Builder
│   │       │   │   │   ├── ClassTest.php
│   │       │   │   │   ├── FunctionTest.php
│   │       │   │   │   ├── InterfaceTest.php
│   │       │   │   │   ├── MethodTest.php
│   │       │   │   │   ├── NamespaceTest.php
│   │       │   │   │   ├── ParamTest.php
│   │       │   │   │   ├── PropertyTest.php
│   │       │   │   │   ├── TraitTest.php
│   │       │   │   │   ├── TraitUseAdaptationTest.php
│   │       │   │   │   ├── TraitUseTest.php
│   │       │   │   │   └── UseTest.php
│   │       │   │   ├── BuilderFactoryTest.php
│   │       │   │   ├── CodeParsingTest.php
│   │       │   │   ├── CodeTestAbstract.php
│   │       │   │   ├── CodeTestParser.php
│   │       │   │   ├── CommentTest.php
│   │       │   │   ├── ConstExprEvaluatorTest.php
│   │       │   │   ├── ErrorHandler
│   │       │   │   │   ├── CollectingTest.php
│   │       │   │   │   └── ThrowingTest.php
│   │       │   │   ├── ErrorTest.php
│   │       │   │   ├── Internal
│   │       │   │   │   └── DifferTest.php
│   │       │   │   ├── JsonDecoderTest.php
│   │       │   │   ├── Lexer
│   │       │   │   │   └── EmulativeTest.php
│   │       │   │   ├── LexerTest.php
│   │       │   │   ├── NameContextTest.php
│   │       │   │   ├── Node
│   │       │   │   │   ├── IdentifierTest.php
│   │       │   │   │   ├── NameTest.php
│   │       │   │   │   ├── Scalar
│   │       │   │   │   │   ├── MagicConstTest.php
│   │       │   │   │   │   └── StringTest.php
│   │       │   │   │   └── Stmt
│   │       │   │   │       ├── ClassConstTest.php
│   │       │   │   │       ├── ClassMethodTest.php
│   │       │   │   │       ├── ClassTest.php
│   │       │   │   │       ├── InterfaceTest.php
│   │       │   │   │       └── PropertyTest.php
│   │       │   │   ├── NodeAbstractTest.php
│   │       │   │   ├── NodeDumperTest.php
│   │       │   │   ├── NodeFinderTest.php
│   │       │   │   ├── NodeTraverserTest.php
│   │       │   │   ├── NodeVisitor
│   │       │   │   │   ├── FindingVisitorTest.php
│   │       │   │   │   ├── FirstFindingVisitorTest.php
│   │       │   │   │   └── NameResolverTest.php
│   │       │   │   ├── Parser
│   │       │   │   │   ├── MultipleTest.php
│   │       │   │   │   ├── Php5Test.php
│   │       │   │   │   └── Php7Test.php
│   │       │   │   ├── ParserFactoryTest.php
│   │       │   │   ├── ParserTest.php
│   │       │   │   └── PrettyPrinterTest.php
│   │       │   └── updateTests.php
│   │       ├── test_old
│   │       │   ├── run.php
│   │       │   └── run-php-src.sh
│   │       ├── UPGRADE-1.0.md
│   │       ├── UPGRADE-2.0.md
│   │       ├── UPGRADE-3.0.md
│   │       └── UPGRADE-4.0.md
│   ├── nunomaduro
│   │   └── collision
│   │       ├── composer.json
│   │       ├── LICENSE.md
│   │       ├── phpstan.neon.dist
│   │       ├── phpunit.xml.dist
│   │       ├── README.md
│   │       └── src
│   │           ├── Adapters
│   │           │   ├── Laravel
│   │           │   │   ├── CollisionServiceProvider.php
│   │           │   │   ├── ExceptionHandler.php
│   │           │   │   └── Inspector.php
│   │           │   └── Phpunit
│   │           │       └── Listener.php
│   │           ├── ArgumentFormatter.php
│   │           ├── Contracts
│   │           │   ├── Adapters
│   │           │   │   └── Phpunit
│   │           │   │       └── Listener.php
│   │           │   ├── ArgumentFormatter.php
│   │           │   ├── Handler.php
│   │           │   ├── Highlighter.php
│   │           │   ├── Provider.php
│   │           │   └── Writer.php
│   │           ├── Handler.php
│   │           ├── Highlighter.php
│   │           ├── Provider.php
│   │           └── Writer.php
│   ├── opis
│   │   └── closure
│   │       ├── autoload.php
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── functions.php
│   │       ├── LICENSE
│   │       ├── NOTICE
│   │       ├── README.md
│   │       └── src
│   │           ├── Analyzer.php
│   │           ├── ClosureContext.php
│   │           ├── ClosureScope.php
│   │           ├── ClosureStream.php
│   │           ├── ISecurityProvider.php
│   │           ├── ReflectionClosure.php
│   │           ├── SecurityException.php
│   │           ├── SecurityProvider.php
│   │           ├── SelfReference.php
│   │           └── SerializableClosure.php
│   ├── paragonie
│   │   └── random_compat
│   │       ├── build-phar.sh
│   │       ├── composer.json
│   │       ├── dist
│   │       │   ├── random_compat.phar.pubkey
│   │       │   └── random_compat.phar.pubkey.asc
│   │       ├── lib
│   │       │   └── random.php
│   │       ├── LICENSE
│   │       ├── other
│   │       │   └── build_phar.php
│   │       ├── psalm-autoload.php
│   │       └── psalm.xml
│   ├── phar-io
│   │   ├── manifest
│   │   │   ├── build.xml
│   │   │   ├── composer.json
│   │   │   ├── composer.lock
│   │   │   ├── examples
│   │   │   │   └── example-01.php
│   │   │   ├── LICENSE
│   │   │   ├── phive.xml
│   │   │   ├── phpunit.xml
│   │   │   ├── README.md
│   │   │   ├── src
│   │   │   │   ├── exceptions
│   │   │   │   │   ├── Exception.php
│   │   │   │   │   ├── InvalidApplicationNameException.php
│   │   │   │   │   ├── InvalidEmailException.php
│   │   │   │   │   ├── InvalidUrlException.php
│   │   │   │   │   ├── ManifestDocumentException.php
│   │   │   │   │   ├── ManifestDocumentMapperException.php
│   │   │   │   │   ├── ManifestElementException.php
│   │   │   │   │   └── ManifestLoaderException.php
│   │   │   │   ├── ManifestDocumentMapper.php
│   │   │   │   ├── ManifestLoader.php
│   │   │   │   ├── ManifestSerializer.php
│   │   │   │   ├── values
│   │   │   │   │   ├── ApplicationName.php
│   │   │   │   │   ├── Application.php
│   │   │   │   │   ├── AuthorCollectionIterator.php
│   │   │   │   │   ├── AuthorCollection.php
│   │   │   │   │   ├── Author.php
│   │   │   │   │   ├── BundledComponentCollectionIterator.php
│   │   │   │   │   ├── BundledComponentCollection.php
│   │   │   │   │   ├── BundledComponent.php
│   │   │   │   │   ├── CopyrightInformation.php
│   │   │   │   │   ├── Email.php
│   │   │   │   │   ├── Extension.php
│   │   │   │   │   ├── Library.php
│   │   │   │   │   ├── License.php
│   │   │   │   │   ├── Manifest.php
│   │   │   │   │   ├── PhpExtensionRequirement.php
│   │   │   │   │   ├── PhpVersionRequirement.php
│   │   │   │   │   ├── RequirementCollectionIterator.php
│   │   │   │   │   ├── RequirementCollection.php
│   │   │   │   │   ├── Requirement.php
│   │   │   │   │   ├── Type.php
│   │   │   │   │   └── Url.php
│   │   │   │   └── xml
│   │   │   │       ├── AuthorElementCollection.php
│   │   │   │       ├── AuthorElement.php
│   │   │   │       ├── BundlesElement.php
│   │   │   │       ├── ComponentElementCollection.php
│   │   │   │       ├── ComponentElement.php
│   │   │   │       ├── ContainsElement.php
│   │   │   │       ├── CopyrightElement.php
│   │   │   │       ├── ElementCollection.php
│   │   │   │       ├── ExtElementCollection.php
│   │   │   │       ├── ExtElement.php
│   │   │   │       ├── ExtensionElement.php
│   │   │   │       ├── LicenseElement.php
│   │   │   │       ├── ManifestDocumentLoadingException.php
│   │   │   │       ├── ManifestDocument.php
│   │   │   │       ├── ManifestElement.php
│   │   │   │       ├── PhpElement.php
│   │   │   │       └── RequiresElement.php
│   │   │   └── tests
│   │   │       ├── exceptions
│   │   │       │   └── ManifestDocumentLoadingExceptionTest.php
│   │   │       ├── _fixture
│   │   │       │   ├── custom.xml
│   │   │       │   ├── extension-invalidcompatible.xml
│   │   │       │   ├── extension.xml
│   │   │       │   ├── invalidversionconstraint.xml
│   │   │       │   ├── invalidversion.xml
│   │   │       │   ├── library.xml
│   │   │       │   ├── manifest.xml
│   │   │       │   ├── phpunit-5.6.5.xml
│   │   │       │   └── test.phar
│   │   │       ├── ManifestDocumentMapperTest.php
│   │   │       ├── ManifestLoaderTest.php
│   │   │       ├── ManifestSerializerTest.php
│   │   │       ├── values
│   │   │       │   ├── ApplicationNameTest.php
│   │   │       │   ├── ApplicationTest.php
│   │   │       │   ├── AuthorCollectionTest.php
│   │   │       │   ├── AuthorTest.php
│   │   │       │   ├── BundledComponentCollectionTest.php
│   │   │       │   ├── BundledComponentTest.php
│   │   │       │   ├── CopyrightInformationTest.php
│   │   │       │   ├── EmailTest.php
│   │   │       │   ├── ExtensionTest.php
│   │   │       │   ├── LibraryTest.php
│   │   │       │   ├── LicenseTest.php
│   │   │       │   ├── ManifestTest.php
│   │   │       │   ├── PhpExtensionRequirementTest.php
│   │   │       │   ├── PhpVersionRequirementTest.php
│   │   │       │   ├── RequirementCollectionTest.php
│   │   │       │   └── UrlTest.php
│   │   │       └── xml
│   │   │           ├── AuthorElementCollectionTest.php
│   │   │           ├── AuthorElementTest.php
│   │   │           ├── BundlesElementTest.php
│   │   │           ├── ComponentElementCollectionTest.php
│   │   │           ├── ComponentElementTest.php
│   │   │           ├── ContainsElementTest.php
│   │   │           ├── CopyrightElementTest.php
│   │   │           ├── ExtElementCollectionTest.php
│   │   │           ├── ExtElementTest.php
│   │   │           ├── ExtensionElementTest.php
│   │   │           ├── LicenseElementTest.php
│   │   │           ├── ManifestDocumentTest.php
│   │   │           ├── PhpElementTest.php
│   │   │           └── RequiresElementTest.php
│   │   └── version
│   │       ├── build.xml
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── phive.xml
│   │       ├── phpunit.xml
│   │       ├── README.md
│   │       ├── src
│   │       │   ├── constraints
│   │       │   │   ├── AbstractVersionConstraint.php
│   │       │   │   ├── AndVersionConstraintGroup.php
│   │       │   │   ├── AnyVersionConstraint.php
│   │       │   │   ├── ExactVersionConstraint.php
│   │       │   │   ├── GreaterThanOrEqualToVersionConstraint.php
│   │       │   │   ├── OrVersionConstraintGroup.php
│   │       │   │   ├── SpecificMajorAndMinorVersionConstraint.php
│   │       │   │   ├── SpecificMajorVersionConstraint.php
│   │       │   │   └── VersionConstraint.php
│   │       │   ├── exceptions
│   │       │   │   ├── Exception.php
│   │       │   │   ├── InvalidPreReleaseSuffixException.php
│   │       │   │   ├── InvalidVersionException.php
│   │       │   │   └── UnsupportedVersionConstraintException.php
│   │       │   ├── PreReleaseSuffix.php
│   │       │   ├── VersionConstraintParser.php
│   │       │   ├── VersionConstraintValue.php
│   │       │   ├── VersionNumber.php
│   │       │   └── Version.php
│   │       └── tests
│   │           ├── Integration
│   │           │   └── VersionConstraintParserTest.php
│   │           └── Unit
│   │               ├── AbstractVersionConstraintTest.php
│   │               ├── AndVersionConstraintGroupTest.php
│   │               ├── AnyVersionConstraintTest.php
│   │               ├── ExactVersionConstraintTest.php
│   │               ├── GreaterThanOrEqualToVersionConstraintTest.php
│   │               ├── OrVersionConstraintGroupTest.php
│   │               ├── PreReleaseSuffixTest.php
│   │               ├── SpecificMajorAndMinorVersionConstraintTest.php
│   │               ├── SpecificMajorVersionConstraintTest.php
│   │               └── VersionTest.php
│   ├── phpdocumentor
│   │   ├── reflection-common
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       ├── Element.php
│   │   │       ├── File.php
│   │   │       ├── Fqsen.php
│   │   │       ├── Location.php
│   │   │       ├── ProjectFactory.php
│   │   │       └── Project.php
│   │   ├── reflection-docblock
│   │   │   ├── composer.json
│   │   │   ├── easy-coding-standard.neon
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       ├── DocBlock
│   │   │       │   ├── DescriptionFactory.php
│   │   │       │   ├── Description.php
│   │   │       │   ├── ExampleFinder.php
│   │   │       │   ├── Serializer.php
│   │   │       │   ├── StandardTagFactory.php
│   │   │       │   ├── TagFactory.php
│   │   │       │   ├── Tag.php
│   │   │       │   └── Tags
│   │   │       │       ├── Author.php
│   │   │       │       ├── BaseTag.php
│   │   │       │       ├── Covers.php
│   │   │       │       ├── Deprecated.php
│   │   │       │       ├── Example.php
│   │   │       │       ├── Factory
│   │   │       │       │   ├── StaticMethod.php
│   │   │       │       │   └── Strategy.php
│   │   │       │       ├── Formatter
│   │   │       │       │   ├── AlignFormatter.php
│   │   │       │       │   └── PassthroughFormatter.php
│   │   │       │       ├── Formatter.php
│   │   │       │       ├── Generic.php
│   │   │       │       ├── Link.php
│   │   │       │       ├── Method.php
│   │   │       │       ├── Param.php
│   │   │       │       ├── Property.php
│   │   │       │       ├── PropertyRead.php
│   │   │       │       ├── PropertyWrite.php
│   │   │       │       ├── Reference
│   │   │       │       │   ├── Fqsen.php
│   │   │       │       │   ├── Reference.php
│   │   │       │       │   └── Url.php
│   │   │       │       ├── Return_.php
│   │   │       │       ├── See.php
│   │   │       │       ├── Since.php
│   │   │       │       ├── Source.php
│   │   │       │       ├── Throws.php
│   │   │       │       ├── Uses.php
│   │   │       │       ├── Var_.php
│   │   │       │       └── Version.php
│   │   │       ├── DocBlockFactoryInterface.php
│   │   │       ├── DocBlockFactory.php
│   │   │       └── DocBlock.php
│   │   └── type-resolver
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── src
│   │           ├── FqsenResolver.php
│   │           ├── Type.php
│   │           ├── TypeResolver.php
│   │           └── Types
│   │               ├── Array_.php
│   │               ├── Boolean.php
│   │               ├── Callable_.php
│   │               ├── Compound.php
│   │               ├── ContextFactory.php
│   │               ├── Context.php
│   │               ├── Float_.php
│   │               ├── Integer.php
│   │               ├── Iterable_.php
│   │               ├── Mixed_.php
│   │               ├── Nullable.php
│   │               ├── Null_.php
│   │               ├── Object_.php
│   │               ├── Parent_.php
│   │               ├── Resource_.php
│   │               ├── Scalar.php
│   │               ├── Self_.php
│   │               ├── Static_.php
│   │               ├── String_.php
│   │               ├── This.php
│   │               └── Void_.php
│   ├── phpspec
│   │   └── prophecy
│   │       ├── CHANGES.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── src
│   │           └── Prophecy
│   │               ├── Argument
│   │               │   ├── ArgumentsWildcard.php
│   │               │   └── Token
│   │               │       ├── AnyValuesToken.php
│   │               │       ├── AnyValueToken.php
│   │               │       ├── ApproximateValueToken.php
│   │               │       ├── ArrayCountToken.php
│   │               │       ├── ArrayEntryToken.php
│   │               │       ├── ArrayEveryEntryToken.php
│   │               │       ├── CallbackToken.php
│   │               │       ├── ExactValueToken.php
│   │               │       ├── IdenticalValueToken.php
│   │               │       ├── LogicalAndToken.php
│   │               │       ├── LogicalNotToken.php
│   │               │       ├── ObjectStateToken.php
│   │               │       ├── StringContainsToken.php
│   │               │       ├── TokenInterface.php
│   │               │       └── TypeToken.php
│   │               ├── Argument.php
│   │               ├── Call
│   │               │   ├── CallCenter.php
│   │               │   └── Call.php
│   │               ├── Comparator
│   │               │   ├── ClosureComparator.php
│   │               │   ├── Factory.php
│   │               │   └── ProphecyComparator.php
│   │               ├── Doubler
│   │               │   ├── CachedDoubler.php
│   │               │   ├── ClassPatch
│   │               │   │   ├── ClassPatchInterface.php
│   │               │   │   ├── DisableConstructorPatch.php
│   │               │   │   ├── HhvmExceptionPatch.php
│   │               │   │   ├── KeywordPatch.php
│   │               │   │   ├── MagicCallPatch.php
│   │               │   │   ├── ProphecySubjectPatch.php
│   │               │   │   ├── ReflectionClassNewInstancePatch.php
│   │               │   │   ├── SplFileInfoPatch.php
│   │               │   │   ├── ThrowablePatch.php
│   │               │   │   └── TraversablePatch.php
│   │               │   ├── DoubleInterface.php
│   │               │   ├── Doubler.php
│   │               │   ├── Generator
│   │               │   │   ├── ClassCodeGenerator.php
│   │               │   │   ├── ClassCreator.php
│   │               │   │   ├── ClassMirror.php
│   │               │   │   ├── Node
│   │               │   │   │   ├── ArgumentNode.php
│   │               │   │   │   ├── ClassNode.php
│   │               │   │   │   └── MethodNode.php
│   │               │   │   ├── ReflectionInterface.php
│   │               │   │   └── TypeHintReference.php
│   │               │   ├── LazyDouble.php
│   │               │   └── NameGenerator.php
│   │               ├── Exception
│   │               │   ├── Call
│   │               │   │   └── UnexpectedCallException.php
│   │               │   ├── Doubler
│   │               │   │   ├── ClassCreatorException.php
│   │               │   │   ├── ClassMirrorException.php
│   │               │   │   ├── ClassNotFoundException.php
│   │               │   │   ├── DoubleException.php
│   │               │   │   ├── DoublerException.php
│   │               │   │   ├── InterfaceNotFoundException.php
│   │               │   │   ├── MethodNotExtendableException.php
│   │               │   │   ├── MethodNotFoundException.php
│   │               │   │   └── ReturnByReferenceException.php
│   │               │   ├── Exception.php
│   │               │   ├── InvalidArgumentException.php
│   │               │   ├── Prediction
│   │               │   │   ├── AggregateException.php
│   │               │   │   ├── FailedPredictionException.php
│   │               │   │   ├── NoCallsException.php
│   │               │   │   ├── PredictionException.php
│   │               │   │   ├── UnexpectedCallsCountException.php
│   │               │   │   └── UnexpectedCallsException.php
│   │               │   └── Prophecy
│   │               │       ├── MethodProphecyException.php
│   │               │       ├── ObjectProphecyException.php
│   │               │       └── ProphecyException.php
│   │               ├── PhpDocumentor
│   │               │   ├── ClassAndInterfaceTagRetriever.php
│   │               │   ├── ClassTagRetriever.php
│   │               │   ├── LegacyClassTagRetriever.php
│   │               │   └── MethodTagRetrieverInterface.php
│   │               ├── Prediction
│   │               │   ├── CallbackPrediction.php
│   │               │   ├── CallPrediction.php
│   │               │   ├── CallTimesPrediction.php
│   │               │   ├── NoCallsPrediction.php
│   │               │   └── PredictionInterface.php
│   │               ├── Promise
│   │               │   ├── CallbackPromise.php
│   │               │   ├── PromiseInterface.php
│   │               │   ├── ReturnArgumentPromise.php
│   │               │   ├── ReturnPromise.php
│   │               │   └── ThrowPromise.php
│   │               ├── Prophecy
│   │               │   ├── MethodProphecy.php
│   │               │   ├── ObjectProphecy.php
│   │               │   ├── ProphecyInterface.php
│   │               │   ├── ProphecySubjectInterface.php
│   │               │   ├── RevealerInterface.php
│   │               │   └── Revealer.php
│   │               ├── Prophet.php
│   │               └── Util
│   │                   ├── ExportUtil.php
│   │                   └── StringUtil.php
│   ├── phpunit
│   │   ├── php-code-coverage
│   │   │   ├── build.xml
│   │   │   ├── ChangeLog-6.1.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml
│   │   │   ├── README.md
│   │   │   ├── src
│   │   │   │   ├── CodeCoverage.php
│   │   │   │   ├── Driver
│   │   │   │   │   ├── Driver.php
│   │   │   │   │   ├── PHPDBG.php
│   │   │   │   │   └── Xdebug.php
│   │   │   │   ├── Exception
│   │   │   │   │   ├── CoveredCodeNotExecutedException.php
│   │   │   │   │   ├── Exception.php
│   │   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   │   ├── MissingCoversAnnotationException.php
│   │   │   │   │   ├── RuntimeException.php
│   │   │   │   │   └── UnintentionallyCoveredCodeException.php
│   │   │   │   ├── Filter.php
│   │   │   │   ├── Node
│   │   │   │   │   ├── AbstractNode.php
│   │   │   │   │   ├── Builder.php
│   │   │   │   │   ├── Directory.php
│   │   │   │   │   ├── File.php
│   │   │   │   │   └── Iterator.php
│   │   │   │   ├── Report
│   │   │   │   │   ├── Clover.php
│   │   │   │   │   ├── Crap4j.php
│   │   │   │   │   ├── Html
│   │   │   │   │   │   ├── Facade.php
│   │   │   │   │   │   ├── Renderer
│   │   │   │   │   │   │   ├── Dashboard.php
│   │   │   │   │   │   │   ├── Directory.php
│   │   │   │   │   │   │   ├── File.php
│   │   │   │   │   │   │   └── Template
│   │   │   │   │   │   │       ├── coverage_bar.html.dist
│   │   │   │   │   │   │       ├── css
│   │   │   │   │   │   │       │   ├── bootstrap.min.css
│   │   │   │   │   │   │       │   ├── custom.css
│   │   │   │   │   │   │       │   ├── nv.d3.min.css
│   │   │   │   │   │   │       │   ├── octicons.css
│   │   │   │   │   │   │       │   └── style.css
│   │   │   │   │   │   │       ├── dashboard.html.dist
│   │   │   │   │   │   │       ├── directory.html.dist
│   │   │   │   │   │   │       ├── directory_item.html.dist
│   │   │   │   │   │   │       ├── file.html.dist
│   │   │   │   │   │   │       ├── file_item.html.dist
│   │   │   │   │   │   │       ├── icons
│   │   │   │   │   │   │       │   ├── file-code.svg
│   │   │   │   │   │   │       │   └── file-directory.svg
│   │   │   │   │   │   │       ├── js
│   │   │   │   │   │   │       │   ├── bootstrap.min.js
│   │   │   │   │   │   │       │   ├── d3.min.js
│   │   │   │   │   │   │       │   ├── file.js
│   │   │   │   │   │   │       │   ├── jquery.min.js
│   │   │   │   │   │   │       │   ├── nv.d3.min.js
│   │   │   │   │   │   │       │   └── popper.min.js
│   │   │   │   │   │   │       └── method_item.html.dist
│   │   │   │   │   │   └── Renderer.php
│   │   │   │   │   ├── PHP.php
│   │   │   │   │   ├── Text.php
│   │   │   │   │   └── Xml
│   │   │   │   │       ├── BuildInformation.php
│   │   │   │   │       ├── Coverage.php
│   │   │   │   │       ├── Directory.php
│   │   │   │   │       ├── Facade.php
│   │   │   │   │       ├── File.php
│   │   │   │   │       ├── Method.php
│   │   │   │   │       ├── Node.php
│   │   │   │   │       ├── Project.php
│   │   │   │   │       ├── Report.php
│   │   │   │   │       ├── Source.php
│   │   │   │   │       ├── Tests.php
│   │   │   │   │       ├── Totals.php
│   │   │   │   │       └── Unit.php
│   │   │   │   ├── Util.php
│   │   │   │   └── Version.php
│   │   │   └── tests
│   │   │       ├── bootstrap.php
│   │   │       ├── _files
│   │   │       │   ├── BankAccount-clover.xml
│   │   │       │   ├── BankAccount-crap4j.xml
│   │   │       │   ├── BankAccount.php
│   │   │       │   ├── BankAccountTest.php
│   │   │       │   ├── BankAccount-text.txt
│   │   │       │   ├── class-with-anonymous-function-clover.xml
│   │   │       │   ├── class-with-anonymous-function-crap4j.xml
│   │   │       │   ├── class-with-anonymous-function-text.txt
│   │   │       │   ├── CoverageClassExtendedTest.php
│   │   │       │   ├── CoverageClassTest.php
│   │   │       │   ├── CoverageFunctionParenthesesTest.php
│   │   │       │   ├── CoverageFunctionParenthesesWhitespaceTest.php
│   │   │       │   ├── CoverageFunctionTest.php
│   │   │       │   ├── CoverageMethodOneLineAnnotationTest.php
│   │   │       │   ├── CoverageMethodParenthesesTest.php
│   │   │       │   ├── CoverageMethodParenthesesWhitespaceTest.php
│   │   │       │   ├── CoverageMethodTest.php
│   │   │       │   ├── CoverageNoneTest.php
│   │   │       │   ├── CoverageNothingTest.php
│   │   │       │   ├── CoverageNotPrivateTest.php
│   │   │       │   ├── CoverageNotProtectedTest.php
│   │   │       │   ├── CoverageNotPublicTest.php
│   │   │       │   ├── CoveragePrivateTest.php
│   │   │       │   ├── CoverageProtectedTest.php
│   │   │       │   ├── CoveragePublicTest.php
│   │   │       │   ├── CoverageTwoDefaultClassAnnotations.php
│   │   │       │   ├── CoveredClass.php
│   │   │       │   ├── CoveredFunction.php
│   │   │       │   ├── Crash.php
│   │   │       │   ├── ignored-lines-clover.xml
│   │   │       │   ├── ignored-lines-crap4j.xml
│   │   │       │   ├── ignored-lines-text.txt
│   │   │       │   ├── NamespaceCoverageClassExtendedTest.php
│   │   │       │   ├── NamespaceCoverageClassTest.php
│   │   │       │   ├── NamespaceCoverageCoversClassPublicTest.php
│   │   │       │   ├── NamespaceCoverageCoversClassTest.php
│   │   │       │   ├── NamespaceCoverageMethodTest.php
│   │   │       │   ├── NamespaceCoverageNotPrivateTest.php
│   │   │       │   ├── NamespaceCoverageNotProtectedTest.php
│   │   │       │   ├── NamespaceCoverageNotPublicTest.php
│   │   │       │   ├── NamespaceCoveragePrivateTest.php
│   │   │       │   ├── NamespaceCoverageProtectedTest.php
│   │   │       │   ├── NamespaceCoveragePublicTest.php
│   │   │       │   ├── NamespaceCoveredClass.php
│   │   │       │   ├── NotExistingCoveredElementTest.php
│   │   │       │   ├── Report
│   │   │       │   │   ├── HTML
│   │   │       │   │   │   ├── CoverageForBankAccount
│   │   │       │   │   │   │   ├── BankAccount.php.html
│   │   │       │   │   │   │   ├── dashboard.html
│   │   │       │   │   │   │   └── index.html
│   │   │       │   │   │   ├── CoverageForClassWithAnonymousFunction
│   │   │       │   │   │   │   ├── dashboard.html
│   │   │       │   │   │   │   ├── index.html
│   │   │       │   │   │   │   └── source_with_class_and_anonymous_function.php.html
│   │   │       │   │   │   └── CoverageForFileWithIgnoredLines
│   │   │       │   │   │       ├── dashboard.html
│   │   │       │   │   │       ├── index.html
│   │   │       │   │   │       └── source_with_ignore.php.html
│   │   │       │   │   └── XML
│   │   │       │   │       ├── CoverageForBankAccount
│   │   │       │   │       │   ├── BankAccount.php.xml
│   │   │       │   │       │   └── index.xml
│   │   │       │   │       ├── CoverageForClassWithAnonymousFunction
│   │   │       │   │       │   ├── index.xml
│   │   │       │   │       │   └── source_with_class_and_anonymous_function.php.xml
│   │   │       │   │       └── CoverageForFileWithIgnoredLines
│   │   │       │   │           ├── index.xml
│   │   │       │   │           └── source_with_ignore.php.xml
│   │   │       │   ├── source_with_class_and_anonymous_function.php
│   │   │       │   ├── source_with_ignore.php
│   │   │       │   ├── source_with_namespace.php
│   │   │       │   ├── source_with_oneline_annotations.php
│   │   │       │   ├── source_without_ignore.php
│   │   │       │   └── source_without_namespace.php
│   │   │       ├── TestCase.php
│   │   │       └── tests
│   │   │           ├── BuilderTest.php
│   │   │           ├── CloverTest.php
│   │   │           ├── CodeCoverageTest.php
│   │   │           ├── Crap4jTest.php
│   │   │           ├── FilterTest.php
│   │   │           ├── HTMLTest.php
│   │   │           ├── TextTest.php
│   │   │           ├── UtilTest.php
│   │   │           └── XmlTest.php
│   │   ├── php-file-iterator
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml
│   │   │   ├── README.md
│   │   │   ├── src
│   │   │   │   ├── Facade.php
│   │   │   │   ├── Factory.php
│   │   │   │   └── Iterator.php
│   │   │   └── tests
│   │   │       └── FactoryTest.php
│   │   ├── php-text-template
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       └── Template.php
│   │   ├── php-timer
│   │   │   ├── build.xml
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml
│   │   │   ├── README.md
│   │   │   ├── src
│   │   │   │   ├── Exception.php
│   │   │   │   ├── RuntimeException.php
│   │   │   │   └── Timer.php
│   │   │   └── tests
│   │   │       └── TimerTest.php
│   │   ├── php-token-stream
│   │   │   ├── build.xml
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml
│   │   │   ├── README.md
│   │   │   ├── src
│   │   │   │   ├── Token
│   │   │   │   │   ├── Stream
│   │   │   │   │   │   └── CachingFactory.php
│   │   │   │   │   └── Stream.php
│   │   │   │   └── Token.php
│   │   │   └── tests
│   │   │       ├── bootstrap.php
│   │   │       ├── _fixture
│   │   │       │   ├── classExtendsNamespacedClass.php
│   │   │       │   ├── classInNamespace.php
│   │   │       │   ├── classInScopedNamespace.php
│   │   │       │   ├── classUsesNamespacedFunction.php
│   │   │       │   ├── class_with_method_named_empty.php
│   │   │       │   ├── class_with_method_that_declares_anonymous_class2.php
│   │   │       │   ├── class_with_method_that_declares_anonymous_class.php
│   │   │       │   ├── class_with_multiple_anonymous_classes_and_functions.php
│   │   │       │   ├── closure.php
│   │   │       │   ├── issue19.php
│   │   │       │   ├── issue30.php
│   │   │       │   ├── multipleNamespacesWithOneClassUsingBraces.php
│   │   │       │   ├── multipleNamespacesWithOneClassUsingNonBraceSyntax.php
│   │   │       │   ├── php-code-coverage-issue-424.php
│   │   │       │   ├── source2.php
│   │   │       │   ├── source3.php
│   │   │       │   ├── source4.php
│   │   │       │   ├── source5.php
│   │   │       │   └── source.php
│   │   │       └── Token
│   │   │           ├── ClassTest.php
│   │   │           ├── ClosureTest.php
│   │   │           ├── FunctionTest.php
│   │   │           ├── IncludeTest.php
│   │   │           ├── InterfaceTest.php
│   │   │           └── NamespaceTest.php
│   │   └── phpunit
│   │       ├── appveyor.yml
│   │       ├── build.xml
│   │       ├── ChangeLog-6.5.md
│   │       ├── ChangeLog-7.0.md
│   │       ├── ChangeLog-7.1.md
│   │       ├── ChangeLog-7.2.md
│   │       ├── ChangeLog-7.3.md
│   │       ├── ChangeLog-7.4.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── phive.xml
│   │       ├── phpunit
│   │       ├── phpunit.xml
│   │       ├── phpunit.xsd
│   │       ├── README.md
│   │       ├── src
│   │       │   ├── Exception.php
│   │       │   ├── Framework
│   │       │   │   ├── Assert
│   │       │   │   │   └── Functions.php
│   │       │   │   ├── AssertionFailedError.php
│   │       │   │   ├── Assert.php
│   │       │   │   ├── CodeCoverageException.php
│   │       │   │   ├── Constraint
│   │       │   │   │   ├── ArrayHasKey.php
│   │       │   │   │   ├── ArraySubset.php
│   │       │   │   │   ├── Attribute.php
│   │       │   │   │   ├── Callback.php
│   │       │   │   │   ├── ClassHasAttribute.php
│   │       │   │   │   ├── ClassHasStaticAttribute.php
│   │       │   │   │   ├── Composite.php
│   │       │   │   │   ├── Constraint.php
│   │       │   │   │   ├── Count.php
│   │       │   │   │   ├── DirectoryExists.php
│   │       │   │   │   ├── ExceptionCode.php
│   │       │   │   │   ├── ExceptionMessage.php
│   │       │   │   │   ├── ExceptionMessageRegularExpression.php
│   │       │   │   │   ├── Exception.php
│   │       │   │   │   ├── FileExists.php
│   │       │   │   │   ├── GreaterThan.php
│   │       │   │   │   ├── IsAnything.php
│   │       │   │   │   ├── IsEmpty.php
│   │       │   │   │   ├── IsEqual.php
│   │       │   │   │   ├── IsFalse.php
│   │       │   │   │   ├── IsFinite.php
│   │       │   │   │   ├── IsIdentical.php
│   │       │   │   │   ├── IsInfinite.php
│   │       │   │   │   ├── IsInstanceOf.php
│   │       │   │   │   ├── IsJson.php
│   │       │   │   │   ├── IsNan.php
│   │       │   │   │   ├── IsNull.php
│   │       │   │   │   ├── IsReadable.php
│   │       │   │   │   ├── IsTrue.php
│   │       │   │   │   ├── IsType.php
│   │       │   │   │   ├── IsWritable.php
│   │       │   │   │   ├── JsonMatchesErrorMessageProvider.php
│   │       │   │   │   ├── JsonMatches.php
│   │       │   │   │   ├── LessThan.php
│   │       │   │   │   ├── LogicalAnd.php
│   │       │   │   │   ├── LogicalNot.php
│   │       │   │   │   ├── LogicalOr.php
│   │       │   │   │   ├── LogicalXor.php
│   │       │   │   │   ├── ObjectHasAttribute.php
│   │       │   │   │   ├── RegularExpression.php
│   │       │   │   │   ├── SameSize.php
│   │       │   │   │   ├── StringContains.php
│   │       │   │   │   ├── StringEndsWith.php
│   │       │   │   │   ├── StringMatchesFormatDescription.php
│   │       │   │   │   ├── StringStartsWith.php
│   │       │   │   │   ├── TraversableContainsOnly.php
│   │       │   │   │   └── TraversableContains.php
│   │       │   │   ├── CoveredCodeNotExecutedException.php
│   │       │   │   ├── DataProviderTestSuite.php
│   │       │   │   ├── Error
│   │       │   │   │   ├── Deprecated.php
│   │       │   │   │   ├── Error.php
│   │       │   │   │   ├── Notice.php
│   │       │   │   │   └── Warning.php
│   │       │   │   ├── Exception.php
│   │       │   │   ├── ExceptionWrapper.php
│   │       │   │   ├── ExpectationFailedException.php
│   │       │   │   ├── IncompleteTestCase.php
│   │       │   │   ├── IncompleteTestError.php
│   │       │   │   ├── IncompleteTest.php
│   │       │   │   ├── InvalidCoversTargetException.php
│   │       │   │   ├── MissingCoversAnnotationException.php
│   │       │   │   ├── MockObject
│   │       │   │   │   ├── Builder
│   │       │   │   │   │   ├── Identity.php
│   │       │   │   │   │   ├── InvocationMocker.php
│   │       │   │   │   │   ├── Match.php
│   │       │   │   │   │   ├── MethodNameMatch.php
│   │       │   │   │   │   ├── NamespaceMatch.php
│   │       │   │   │   │   ├── ParametersMatch.php
│   │       │   │   │   │   └── Stub.php
│   │       │   │   │   ├── Exception
│   │       │   │   │   │   ├── BadMethodCallException.php
│   │       │   │   │   │   ├── Exception.php
│   │       │   │   │   │   └── RuntimeException.php
│   │       │   │   │   ├── ForwardCompatibility
│   │       │   │   │   │   └── MockObject.php
│   │       │   │   │   ├── Generator
│   │       │   │   │   │   ├── deprecation.tpl.dist
│   │       │   │   │   │   ├── mocked_class_method.tpl.dist
│   │       │   │   │   │   ├── mocked_class.tpl.dist
│   │       │   │   │   │   ├── mocked_clone.tpl.dist
│   │       │   │   │   │   ├── mocked_method.tpl.dist
│   │       │   │   │   │   ├── mocked_method_void.tpl.dist
│   │       │   │   │   │   ├── mocked_static_method.tpl.dist
│   │       │   │   │   │   ├── proxied_method.tpl.dist
│   │       │   │   │   │   ├── proxied_method_void.tpl.dist
│   │       │   │   │   │   ├── trait_class.tpl.dist
│   │       │   │   │   │   ├── unmocked_clone.tpl.dist
│   │       │   │   │   │   ├── wsdl_class.tpl.dist
│   │       │   │   │   │   └── wsdl_method.tpl.dist
│   │       │   │   │   ├── Generator.php
│   │       │   │   │   ├── Invocation
│   │       │   │   │   │   ├── Invocation.php
│   │       │   │   │   │   ├── ObjectInvocation.php
│   │       │   │   │   │   └── StaticInvocation.php
│   │       │   │   │   ├── InvocationMocker.php
│   │       │   │   │   ├── Invokable.php
│   │       │   │   │   ├── Matcher
│   │       │   │   │   │   ├── AnyInvokedCount.php
│   │       │   │   │   │   ├── AnyParameters.php
│   │       │   │   │   │   ├── ConsecutiveParameters.php
│   │       │   │   │   │   ├── DeferredError.php
│   │       │   │   │   │   ├── Invocation.php
│   │       │   │   │   │   ├── InvokedAtIndex.php
│   │       │   │   │   │   ├── InvokedAtLeastCount.php
│   │       │   │   │   │   ├── InvokedAtLeastOnce.php
│   │       │   │   │   │   ├── InvokedAtMostCount.php
│   │       │   │   │   │   ├── InvokedCount.php
│   │       │   │   │   │   ├── InvokedRecorder.php
│   │       │   │   │   │   ├── MethodName.php
│   │       │   │   │   │   ├── Parameters.php
│   │       │   │   │   │   └── StatelessInvocation.php
│   │       │   │   │   ├── Matcher.php
│   │       │   │   │   ├── MockBuilder.php
│   │       │   │   │   ├── MockMethod.php
│   │       │   │   │   ├── MockMethodSet.php
│   │       │   │   │   ├── MockObject.php
│   │       │   │   │   ├── Stub
│   │       │   │   │   │   ├── ConsecutiveCalls.php
│   │       │   │   │   │   ├── Exception.php
│   │       │   │   │   │   ├── MatcherCollection.php
│   │       │   │   │   │   ├── ReturnArgument.php
│   │       │   │   │   │   ├── ReturnCallback.php
│   │       │   │   │   │   ├── ReturnReference.php
│   │       │   │   │   │   ├── ReturnSelf.php
│   │       │   │   │   │   ├── ReturnStub.php
│   │       │   │   │   │   └── ReturnValueMap.php
│   │       │   │   │   ├── Stub.php
│   │       │   │   │   └── Verifiable.php
│   │       │   │   ├── OutputError.php
│   │       │   │   ├── RiskyTestError.php
│   │       │   │   ├── RiskyTest.php
│   │       │   │   ├── SelfDescribing.php
│   │       │   │   ├── SkippedTestCase.php
│   │       │   │   ├── SkippedTestError.php
│   │       │   │   ├── SkippedTest.php
│   │       │   │   ├── SkippedTestSuiteError.php
│   │       │   │   ├── SyntheticError.php
│   │       │   │   ├── TestCase.php
│   │       │   │   ├── TestFailure.php
│   │       │   │   ├── TestListenerDefaultImplementation.php
│   │       │   │   ├── TestListener.php
│   │       │   │   ├── Test.php
│   │       │   │   ├── TestResult.php
│   │       │   │   ├── TestSuiteIterator.php
│   │       │   │   ├── TestSuite.php
│   │       │   │   ├── UnintentionallyCoveredCodeError.php
│   │       │   │   ├── Warning.php
│   │       │   │   └── WarningTestCase.php
│   │       │   ├── Runner
│   │       │   │   ├── BaseTestRunner.php
│   │       │   │   ├── Exception.php
│   │       │   │   ├── Filter
│   │       │   │   │   ├── ExcludeGroupFilterIterator.php
│   │       │   │   │   ├── Factory.php
│   │       │   │   │   ├── GroupFilterIterator.php
│   │       │   │   │   ├── IncludeGroupFilterIterator.php
│   │       │   │   │   └── NameFilterIterator.php
│   │       │   │   ├── Hook
│   │       │   │   │   ├── AfterIncompleteTestHook.php
│   │       │   │   │   ├── AfterLastTestHook.php
│   │       │   │   │   ├── AfterRiskyTestHook.php
│   │       │   │   │   ├── AfterSkippedTestHook.php
│   │       │   │   │   ├── AfterSuccessfulTestHook.php
│   │       │   │   │   ├── AfterTestErrorHook.php
│   │       │   │   │   ├── AfterTestFailureHook.php
│   │       │   │   │   ├── AfterTestWarningHook.php
│   │       │   │   │   ├── BeforeFirstTestHook.php
│   │       │   │   │   ├── BeforeTestHook.php
│   │       │   │   │   ├── Hook.php
│   │       │   │   │   ├── TestHook.php
│   │       │   │   │   └── TestListenerAdapter.php
│   │       │   │   ├── PhptTestCase.php
│   │       │   │   ├── ResultCacheExtension.php
│   │       │   │   ├── StandardTestSuiteLoader.php
│   │       │   │   ├── TestSuiteLoader.php
│   │       │   │   ├── TestSuiteSorter.php
│   │       │   │   └── Version.php
│   │       │   ├── TextUI
│   │       │   │   ├── Command.php
│   │       │   │   ├── ResultPrinter.php
│   │       │   │   └── TestRunner.php
│   │       │   └── Util
│   │       │       ├── Blacklist.php
│   │       │       ├── ConfigurationGenerator.php
│   │       │       ├── Configuration.php
│   │       │       ├── ErrorHandler.php
│   │       │       ├── FileLoader.php
│   │       │       ├── Filesystem.php
│   │       │       ├── Filter.php
│   │       │       ├── Getopt.php
│   │       │       ├── GlobalState.php
│   │       │       ├── InvalidArgumentHelper.php
│   │       │       ├── Json.php
│   │       │       ├── Log
│   │       │       │   ├── JUnit.php
│   │       │       │   └── TeamCity.php
│   │       │       ├── NullTestResultCache.php
│   │       │       ├── PHP
│   │       │       │   ├── AbstractPhpProcess.php
│   │       │       │   ├── DefaultPhpProcess.php
│   │       │       │   ├── eval-stdin.php
│   │       │       │   ├── Template
│   │       │       │   │   ├── PhptTestCase.tpl.dist
│   │       │       │   │   ├── TestCaseClass.tpl.dist
│   │       │       │   │   └── TestCaseMethod.tpl.dist
│   │       │       │   └── WindowsPhpProcess.php
│   │       │       ├── Printer.php
│   │       │       ├── RegularExpression.php
│   │       │       ├── TestDox
│   │       │       │   ├── CliTestDoxPrinter.php
│   │       │       │   ├── HtmlResultPrinter.php
│   │       │       │   ├── NamePrettifier.php
│   │       │       │   ├── ResultPrinter.php
│   │       │       │   ├── TestResult.php
│   │       │       │   ├── TextResultPrinter.php
│   │       │       │   └── XmlResultPrinter.php
│   │       │       ├── Test.php
│   │       │       ├── TestResultCacheInterface.php
│   │       │       ├── TestResultCache.php
│   │       │       ├── TextTestListRenderer.php
│   │       │       ├── Type.php
│   │       │       ├── XdebugFilterScriptGenerator.php
│   │       │       ├── Xml.php
│   │       │       └── XmlTestListRenderer.php
│   │       └── tests
│   │           ├── bootstrap.php
│   │           ├── end-to-end
│   │           │   ├── abstract-test-class.phpt
│   │           │   ├── assertion.phpt
│   │           │   ├── cache-result.phpt
│   │           │   ├── code-coverage-ignore.phpt
│   │           │   ├── code-coverage-phpt.phpt
│   │           │   ├── colors-always.phpt
│   │           │   ├── concrete-test-class.phpt
│   │           │   ├── custom-printer-debug.phpt
│   │           │   ├── custom-printer-verbose.phpt
│   │           │   ├── dataprovider-debug.phpt
│   │           │   ├── dataprovider-issue-2833.phpt
│   │           │   ├── dataprovider-issue-2859.phpt
│   │           │   ├── dataprovider-issue-2922.phpt
│   │           │   ├── dataprovider-log-xml-isolation.phpt
│   │           │   ├── dataprovider-log-xml.phpt
│   │           │   ├── dataprovider-testdox.phpt
│   │           │   ├── debug.phpt
│   │           │   ├── default-isolation.phpt
│   │           │   ├── default.phpt
│   │           │   ├── defaulttestsuite.phpt
│   │           │   ├── defaulttestsuite-using-testsuite.phpt
│   │           │   ├── defects-first-order-via-cli.phpt
│   │           │   ├── dependencies2-isolation.phpt
│   │           │   ├── dependencies2.phpt
│   │           │   ├── dependencies3-isolation.phpt
│   │           │   ├── dependencies3.phpt
│   │           │   ├── dependencies-clone.phpt
│   │           │   ├── dependencies-isolation.phpt
│   │           │   ├── dependencies.phpt
│   │           │   ├── disable-code-coverage-ignore.phpt
│   │           │   ├── dump-xdebug-filter.phpt
│   │           │   ├── empty-testcase.phpt
│   │           │   ├── exception-stack.phpt
│   │           │   ├── exclude-group-isolation.phpt
│   │           │   ├── exclude-group.phpt
│   │           │   ├── execution-order-options-via-config.phpt
│   │           │   ├── failure-isolation.phpt
│   │           │   ├── failure.phpt
│   │           │   ├── failure-reverse-list.phpt
│   │           │   ├── fatal-isolation.phpt
│   │           │   ├── _files
│   │           │   │   ├── expect_external.txt
│   │           │   │   ├── Extension.php
│   │           │   │   ├── hooks.xml
│   │           │   │   ├── HookTest.php
│   │           │   │   ├── NullPrinter.php
│   │           │   │   ├── phpt-env.expected.txt
│   │           │   │   └── phpt_external.php
│   │           │   ├── filter-class-isolation.phpt
│   │           │   ├── filter-class.phpt
│   │           │   ├── filter-dataprovider-by-classname-and-range-isolation.phpt
│   │           │   ├── filter-dataprovider-by-classname-and-range.phpt
│   │           │   ├── filter-dataprovider-by-number-isolation.phpt
│   │           │   ├── filter-dataprovider-by-number.phpt
│   │           │   ├── filter-dataprovider-by-only-range-isolation.phpt
│   │           │   ├── filter-dataprovider-by-only-range.phpt
│   │           │   ├── filter-dataprovider-by-only-regexp-isolation.phpt
│   │           │   ├── filter-dataprovider-by-only-regexp.phpt
│   │           │   ├── filter-dataprovider-by-only-string-isolation.phpt
│   │           │   ├── filter-dataprovider-by-only-string.phpt
│   │           │   ├── filter-dataprovider-by-range-isolation.phpt
│   │           │   ├── filter-dataprovider-by-range.phpt
│   │           │   ├── filter-dataprovider-by-regexp-isolation.phpt
│   │           │   ├── filter-dataprovider-by-regexp.phpt
│   │           │   ├── filter-dataprovider-by-string-isolation.phpt
│   │           │   ├── filter-dataprovider-by-string.phpt
│   │           │   ├── filter-method-case-insensitive.phpt
│   │           │   ├── filter-method-case-sensitive-no-result.phpt
│   │           │   ├── filter-method-isolation.phpt
│   │           │   ├── filter-method.phpt
│   │           │   ├── filter-no-results.phpt
│   │           │   ├── forward-compatibility.phpt
│   │           │   ├── group-isolation.phpt
│   │           │   ├── group.phpt
│   │           │   ├── help2.phpt
│   │           │   ├── help.phpt
│   │           │   ├── hooks.phpt
│   │           │   ├── ini-isolation.phpt
│   │           │   ├── list-groups.phpt
│   │           │   ├── list-suites.phpt
│   │           │   ├── list-tests-dataprovider.phpt
│   │           │   ├── list-tests-xml-dataprovider.phpt
│   │           │   ├── log-junit.phpt
│   │           │   ├── log-teamcity.phpt
│   │           │   ├── mock-objects
│   │           │   │   ├── generator
│   │           │   │   │   ├── 232.phpt
│   │           │   │   │   ├── 3154_namespaced_constant_resolving.phpt
│   │           │   │   │   ├── 397.phpt
│   │           │   │   │   ├── abstract_class.phpt
│   │           │   │   │   ├── class_call_parent_clone.phpt
│   │           │   │   │   ├── class_call_parent_constructor.phpt
│   │           │   │   │   ├── class_dont_call_parent_clone.phpt
│   │           │   │   │   ├── class_dont_call_parent_constructor.phpt
│   │           │   │   │   ├── class_implementing_interface_call_parent_constructor.phpt
│   │           │   │   │   ├── class_implementing_interface_dont_call_parent_constructor.phpt
│   │           │   │   │   ├── class_nonexistent_method.phpt
│   │           │   │   │   ├── class_partial.phpt
│   │           │   │   │   ├── class.phpt
│   │           │   │   │   ├── class_with_deprecated_method.phpt
│   │           │   │   │   ├── class_with_final_method.phpt
│   │           │   │   │   ├── class_with_method_named_method.phpt
│   │           │   │   │   ├── class_with_method_with_nullable_typehinted_variadic_arguments.phpt
│   │           │   │   │   ├── class_with_method_with_typehinted_variadic_arguments.phpt
│   │           │   │   │   ├── class_with_method_with_variadic_arguments.phpt
│   │           │   │   │   ├── constant_as_parameter_default_value.phpt
│   │           │   │   │   ├── interface.phpt
│   │           │   │   │   ├── invocation_object_clone_object.phpt
│   │           │   │   │   ├── namespaced_class_call_parent_clone.phpt
│   │           │   │   │   ├── namespaced_class_call_parent_constructor.phpt
│   │           │   │   │   ├── namespaced_class_dont_call_parent_clone.phpt
│   │           │   │   │   ├── namespaced_class_dont_call_parent_constructor.phpt
│   │           │   │   │   ├── namespaced_class_implementing_interface_call_parent_constructor.phpt
│   │           │   │   │   ├── namespaced_class_implementing_interface_dont_call_parent_constructor.phpt
│   │           │   │   │   ├── namespaced_class_partial.phpt
│   │           │   │   │   ├── namespaced_class.phpt
│   │           │   │   │   ├── namespaced_interface.phpt
│   │           │   │   │   ├── nonexistent_class.phpt
│   │           │   │   │   ├── nonexistent_class_with_namespace.phpt
│   │           │   │   │   ├── nonexistent_class_with_namespace_starting_with_separator.phpt
│   │           │   │   │   ├── nullable_types.phpt
│   │           │   │   │   ├── proxy.phpt
│   │           │   │   │   ├── return_type_declarations_closure.phpt
│   │           │   │   │   ├── return_type_declarations_final.phpt
│   │           │   │   │   ├── return_type_declarations_generator.phpt
│   │           │   │   │   ├── return_type_declarations_nullable.phpt
│   │           │   │   │   ├── return_type_declarations_object_method.phpt
│   │           │   │   │   ├── return_type_declarations_parent.phpt
│   │           │   │   │   ├── return_type_declarations_self.phpt
│   │           │   │   │   ├── return_type_declarations_static_method.phpt
│   │           │   │   │   ├── return_type_declarations_void.phpt
│   │           │   │   │   ├── scalar_type_declarations.phpt
│   │           │   │   │   ├── wsdl_class_namespace.phpt
│   │           │   │   │   ├── wsdl_class_partial.phpt
│   │           │   │   │   └── wsdl_class.phpt
│   │           │   │   └── mock-method
│   │           │   │       ├── call_original.phpt
│   │           │   │       ├── call_original_with_argument.phpt
│   │           │   │       ├── call_original_with_argument_variadic.phpt
│   │           │   │       ├── call_original_with_return_type_void.phpt
│   │           │   │       ├── clone_method_arguments.phpt
│   │           │   │       ├── deprecated_with_description.phpt
│   │           │   │       ├── deprecated_without_description.phpt
│   │           │   │       ├── private_method.phpt
│   │           │   │       ├── protected_method.phpt
│   │           │   │       ├── return_by_reference.phpt
│   │           │   │       ├── return_by_reference_with_return_type.phpt
│   │           │   │       ├── return_type_parent.phpt
│   │           │   │       ├── return_type.phpt
│   │           │   │       ├── return_type_self.phpt
│   │           │   │       ├── static_method.phpt
│   │           │   │       ├── static_method_with_return_type.phpt
│   │           │   │       ├── with_argument_default_constant.phpt
│   │           │   │       ├── with_argument_default_null.phpt
│   │           │   │       ├── with_argument_default.phpt
│   │           │   │       ├── with_argument_nullable.phpt
│   │           │   │       ├── with_argument.phpt
│   │           │   │       ├── with_argument_reference.phpt
│   │           │   │       ├── with_arguments.phpt
│   │           │   │       ├── with_argument_typed_array.phpt
│   │           │   │       ├── with_argument_typed_callable.phpt
│   │           │   │       ├── with_argument_typed_class.phpt
│   │           │   │       ├── with_argument_typed_scalar.phpt
│   │           │   │       ├── with_argument_typed_self.phpt
│   │           │   │       ├── with_argument_typed_unkown_class.phpt
│   │           │   │       ├── with_argument_typed_variadic.phpt
│   │           │   │       └── with_argument_variadic.phpt
│   │           │   ├── mycommand.phpt
│   │           │   ├── options-after-arguments.phpt
│   │           │   ├── order-by-default-invalid-via-cli.phpt
│   │           │   ├── output-isolation.phpt
│   │           │   ├── phar-extension.phpt
│   │           │   ├── phar-extension-suppressed.phpt
│   │           │   ├── phpt-args.phpt
│   │           │   ├── phpt-env.phpt
│   │           │   ├── phpt-external.phpt
│   │           │   ├── phpt-stderr.phpt
│   │           │   ├── phpt-stdin.phpt
│   │           │   ├── phpt-xfail.phpt
│   │           │   ├── regression
│   │           │   │   ├── GitHub
│   │           │   │   │   ├── 1149
│   │           │   │   │   │   └── Issue1149Test.php
│   │           │   │   │   ├── 1149.phpt
│   │           │   │   │   ├── 1216
│   │           │   │   │   │   ├── bootstrap1216.php
│   │           │   │   │   │   ├── Issue1216Test.php
│   │           │   │   │   │   └── phpunit1216.xml
│   │           │   │   │   ├── 1216.phpt
│   │           │   │   │   ├── 1265
│   │           │   │   │   │   ├── Issue1265Test.php
│   │           │   │   │   │   └── phpunit1265.xml
│   │           │   │   │   ├── 1265.phpt
│   │           │   │   │   ├── 1330
│   │           │   │   │   │   ├── Issue1330Test.php
│   │           │   │   │   │   └── phpunit1330.xml
│   │           │   │   │   ├── 1330.phpt
│   │           │   │   │   ├── 1335
│   │           │   │   │   │   ├── bootstrap1335.php
│   │           │   │   │   │   └── Issue1335Test.php
│   │           │   │   │   ├── 1335.phpt
│   │           │   │   │   ├── 1337
│   │           │   │   │   │   └── Issue1337Test.php
│   │           │   │   │   ├── 1337.phpt
│   │           │   │   │   ├── 1348
│   │           │   │   │   │   └── Issue1348Test.php
│   │           │   │   │   ├── 1348.phpt
│   │           │   │   │   ├── 1351
│   │           │   │   │   │   ├── ChildProcessClass1351.php
│   │           │   │   │   │   └── Issue1351Test.php
│   │           │   │   │   ├── 1351.phpt
│   │           │   │   │   ├── 1374
│   │           │   │   │   │   └── Issue1374Test.php
│   │           │   │   │   ├── 1374.phpt
│   │           │   │   │   ├── 1437
│   │           │   │   │   │   └── Issue1437Test.php
│   │           │   │   │   ├── 1437.phpt
│   │           │   │   │   ├── 1468
│   │           │   │   │   │   └── Issue1468Test.php
│   │           │   │   │   ├── 1468.phpt
│   │           │   │   │   ├── 1471
│   │           │   │   │   │   └── Issue1471Test.php
│   │           │   │   │   ├── 1471.phpt
│   │           │   │   │   ├── 1472
│   │           │   │   │   │   └── Issue1472Test.php
│   │           │   │   │   ├── 1472.phpt
│   │           │   │   │   ├── 1570
│   │           │   │   │   │   └── Issue1570Test.php
│   │           │   │   │   ├── 1570.phpt
│   │           │   │   │   ├── 2085
│   │           │   │   │   │   ├── configuration_enforce_time_limit_options.xml
│   │           │   │   │   │   └── Issue2085Test.php
│   │           │   │   │   ├── 2085-enforce-time-limit-options-via-config-without-invoker.phpt
│   │           │   │   │   ├── 2085.phpt
│   │           │   │   │   ├── 2085-without-invoker.phpt
│   │           │   │   │   ├── 2137
│   │           │   │   │   │   └── Issue2137Test.php
│   │           │   │   │   ├── 2137-filter.phpt
│   │           │   │   │   ├── 2137-no_filter.phpt
│   │           │   │   │   ├── 2145
│   │           │   │   │   │   └── Issue2145Test.php
│   │           │   │   │   ├── 2145.phpt
│   │           │   │   │   ├── 2158
│   │           │   │   │   │   ├── constant.inc
│   │           │   │   │   │   └── Issue2158Test.php
│   │           │   │   │   ├── 2158.phpt
│   │           │   │   │   ├── 2366
│   │           │   │   │   │   └── Issue2366Test.php
│   │           │   │   │   ├── 2366.phpt
│   │           │   │   │   ├── 2380
│   │           │   │   │   │   └── Issue2380Test.php
│   │           │   │   │   ├── 2380.phpt
│   │           │   │   │   ├── 2382
│   │           │   │   │   │   └── Issue2382Test.php
│   │           │   │   │   ├── 2382.phpt
│   │           │   │   │   ├── 2435
│   │           │   │   │   │   └── Issue2435Test.php
│   │           │   │   │   ├── 2435.phpt
│   │           │   │   │   ├── 244
│   │           │   │   │   │   └── Issue244Test.php
│   │           │   │   │   ├── 2448
│   │           │   │   │   │   └── Test.php
│   │           │   │   │   ├── 2448-existing-test.phpt
│   │           │   │   │   ├── 2448-not-existing-test.phpt
│   │           │   │   │   ├── 244.phpt
│   │           │   │   │   ├── 2591
│   │           │   │   │   │   ├── bootstrapNoBootstrap.php
│   │           │   │   │   │   ├── bootstrapWithBootstrapNoGlobal.php
│   │           │   │   │   │   ├── bootstrapWithBootstrap.php
│   │           │   │   │   │   ├── SeparateClassPreserveTest.php
│   │           │   │   │   │   ├── SeparateFunctionNoPreserveTest.php
│   │           │   │   │   │   └── SeparateFunctionPreserveTest.php
│   │           │   │   │   ├── 2591-separate-class-preserve-no-bootstrap.phpt
│   │           │   │   │   ├── 2591-separate-class-preserve.phpt
│   │           │   │   │   ├── 2591-separate-function-no-preserve-no-bootstrap-php73.phpt
│   │           │   │   │   ├── 2591-separate-function-no-preserve-no-bootstrap.phpt
│   │           │   │   │   ├── 2591-separate-function-no-preserve-no-bootstrap-xdebug.phpt
│   │           │   │   │   ├── 2591-separate-function-no-preserve.phpt
│   │           │   │   │   ├── 2591-separate-function-preserve.phpt
│   │           │   │   │   ├── 2724
│   │           │   │   │   │   └── SeparateClassRunMethodInNewProcessTest.php
│   │           │   │   │   ├── 2724-diff-pid-from-master-process.phpt
│   │           │   │   │   ├── 2725
│   │           │   │   │   │   └── BeforeAfterClassPidTest.php
│   │           │   │   │   ├── 2725-separate-class-before-after-pid.phpt
│   │           │   │   │   ├── 2731
│   │           │   │   │   │   └── Issue2731Test.php
│   │           │   │   │   ├── 2731.phpt
│   │           │   │   │   ├── 2811
│   │           │   │   │   │   └── Issue2811Test.php
│   │           │   │   │   ├── 2811.phpt
│   │           │   │   │   ├── 2830
│   │           │   │   │   │   └── Issue2830Test.php
│   │           │   │   │   ├── 2830.phpt
│   │           │   │   │   ├── 2972
│   │           │   │   │   │   ├── issue-2972-test.phpt
│   │           │   │   │   │   └── unconventiallyNamedIssue2972Test.php
│   │           │   │   │   ├── 2972.phpt
│   │           │   │   │   ├── 3093
│   │           │   │   │   │   ├── Issue3093Test.php
│   │           │   │   │   │   └── issue-3093-test.phpt
│   │           │   │   │   ├── 3107
│   │           │   │   │   │   ├── Issue3107Test.php
│   │           │   │   │   │   └── issue-3107-test.phpt
│   │           │   │   │   ├── 3156
│   │           │   │   │   │   └── Issue3156Test.php
│   │           │   │   │   ├── 322
│   │           │   │   │   │   ├── Issue322Test.php
│   │           │   │   │   │   └── phpunit322.xml
│   │           │   │   │   ├── 322.phpt
│   │           │   │   │   ├── 433
│   │           │   │   │   │   └── Issue433Test.php
│   │           │   │   │   ├── 433.phpt
│   │           │   │   │   ├── 445
│   │           │   │   │   │   └── Issue445Test.php
│   │           │   │   │   ├── 445.phpt
│   │           │   │   │   ├── 498
│   │           │   │   │   │   └── Issue498Test.php
│   │           │   │   │   ├── 498.phpt
│   │           │   │   │   ├── 503
│   │           │   │   │   │   └── Issue503Test.php
│   │           │   │   │   ├── 503.phpt
│   │           │   │   │   ├── 581
│   │           │   │   │   │   └── Issue581Test.php
│   │           │   │   │   ├── 581.phpt
│   │           │   │   │   ├── 74
│   │           │   │   │   │   ├── Issue74Test.php
│   │           │   │   │   │   └── NewException.php
│   │           │   │   │   ├── 74.phpt
│   │           │   │   │   ├── 765
│   │           │   │   │   │   └── Issue765Test.php
│   │           │   │   │   ├── 765.phpt
│   │           │   │   │   ├── 797
│   │           │   │   │   │   ├── bootstrap797.php
│   │           │   │   │   │   └── Issue797Test.php
│   │           │   │   │   ├── 797.phpt
│   │           │   │   │   ├── 863.phpt
│   │           │   │   │   ├── 873
│   │           │   │   │   │   └── Issue873Test.php
│   │           │   │   │   └── 873.phpt
│   │           │   │   └── Trac
│   │           │   │       ├── 1021
│   │           │   │       │   └── Issue1021Test.php
│   │           │   │       ├── 1021.phpt
│   │           │   │       ├── 523
│   │           │   │       │   └── Issue523Test.php
│   │           │   │       ├── 523.phpt
│   │           │   │       ├── 578
│   │           │   │       │   └── Issue578Test.php
│   │           │   │       ├── 578.phpt
│   │           │   │       ├── 684
│   │           │   │       │   └── Issue684Test.php
│   │           │   │       ├── 684.phpt
│   │           │   │       ├── 783
│   │           │   │       │   ├── ChildSuite.php
│   │           │   │       │   ├── OneTest.php
│   │           │   │       │   ├── ParentSuite.php
│   │           │   │       │   └── TwoTest.php
│   │           │   │       └── 783.phpt
│   │           │   ├── repeat.phpt
│   │           │   ├── report-tests-performing-assertions-when-annotated-with-does-not-perform-assertions.phpt
│   │           │   ├── report-useless-tests-incomplete.phpt
│   │           │   ├── report-useless-tests-isolation.phpt
│   │           │   ├── report-useless-tests.phpt
│   │           │   ├── stop-on-defect-via-cli.phpt
│   │           │   ├── stop-on-defect-via-config.phpt
│   │           │   ├── stop-on-error-via-cli.phpt
│   │           │   ├── stop-on-error-via-config.phpt
│   │           │   ├── stop-on-incomplete-via-cli.phpt
│   │           │   ├── stop-on-incomplete-via-config.phpt
│   │           │   ├── stop-on-warning-via-cli.phpt
│   │           │   ├── stop-on-warning-via-config.phpt
│   │           │   ├── teamcity-inner-exceptions.phpt
│   │           │   ├── teamcity.phpt
│   │           │   ├── testdox-dataprovider-placeholder.phpt
│   │           │   ├── testdox-exclude-group.phpt
│   │           │   ├── testdox-group.phpt
│   │           │   ├── testdox-html.phpt
│   │           │   ├── testdox.phpt
│   │           │   ├── testdox-text.phpt
│   │           │   ├── testdox-verbose.phpt
│   │           │   ├── testdox-xml.phpt
│   │           │   ├── test-order-randomized-seed-with-dependency-resolution.phpt
│   │           │   ├── test-order-randomized-with-dependency-resolution.phpt
│   │           │   ├── test-order-reversed-with-dependency-resolution.phpt
│   │           │   ├── test-order-reversed-without-dependency-resolution.phpt
│   │           │   ├── test-suffix-multiple.phpt
│   │           │   └── test-suffix-single.phpt
│   │           ├── fail
│   │           │   └── fail.phpt
│   │           ├── _files
│   │           │   ├── 3194.php
│   │           │   ├── AbstractMockTestClass.php
│   │           │   ├── AbstractTest.php
│   │           │   ├── AbstractTrait.php
│   │           │   ├── AnInterface.php
│   │           │   ├── AnInterfaceWithReturnType.php
│   │           │   ├── AnotherInterface.php
│   │           │   ├── ArrayAccessible.php
│   │           │   ├── AssertionExample.php
│   │           │   ├── AssertionExampleTest.php
│   │           │   ├── Author.php
│   │           │   ├── BankAccount.php
│   │           │   ├── BankAccountTest2.php
│   │           │   ├── BankAccountTest.php
│   │           │   ├── BankAccountTest.test.php
│   │           │   ├── Bar.php
│   │           │   ├── bar.xml
│   │           │   ├── BeforeAndAfterTest.php
│   │           │   ├── BeforeClassAndAfterClassTest.php
│   │           │   ├── BeforeClassWithOnlyDataProviderTest.php
│   │           │   ├── Book.php
│   │           │   ├── Calculator.php
│   │           │   ├── ChangeCurrentWorkingDirectoryTest.php
│   │           │   ├── ClassThatImplementsSerializable.php
│   │           │   ├── ClassWithAllPossibleReturnTypes.php
│   │           │   ├── ClassWithNonPublicAttributes.php
│   │           │   ├── ClassWithScalarTypeDeclarations.php
│   │           │   ├── ClassWithSelfTypeHint.php
│   │           │   ├── ClassWithStaticMethod.php
│   │           │   ├── ClassWithToString.php
│   │           │   ├── ClassWithVariadicArgumentMethod.php
│   │           │   ├── ClonedDependencyTest.php
│   │           │   ├── ConcreteTest.my.php
│   │           │   ├── ConcreteTest.php
│   │           │   ├── configuration.colors.empty.xml
│   │           │   ├── configuration.colors.false.xml
│   │           │   ├── configuration.colors.invalid.xml
│   │           │   ├── configuration.colors.true.xml
│   │           │   ├── configuration.columns.default.xml
│   │           │   ├── configuration.custom-printer.xml
│   │           │   ├── configuration.defaulttestsuite.xml
│   │           │   ├── configuration_empty.xml
│   │           │   ├── configuration_execution_order_options.xml
│   │           │   ├── configuration.one-file-suite.xml
│   │           │   ├── configuration_stop_on_defect.xml
│   │           │   ├── configuration_stop_on_error.xml
│   │           │   ├── configuration_stop_on_incomplete.xml
│   │           │   ├── configuration_stop_on_warning.xml
│   │           │   ├── configuration.suites.xml
│   │           │   ├── configuration_whitelist.xml
│   │           │   ├── configuration_xinclude.xml
│   │           │   ├── configuration.xml
│   │           │   ├── CountConstraint.php
│   │           │   ├── CoverageClassExtendedTest.php
│   │           │   ├── CoverageClassTest.php
│   │           │   ├── CoverageCoversOverridesCoversNothingTest.php
│   │           │   ├── CoverageFunctionParenthesesTest.php
│   │           │   ├── CoverageFunctionParenthesesWhitespaceTest.php
│   │           │   ├── CoverageFunctionTest.php
│   │           │   ├── CoverageMethodOneLineAnnotationTest.php
│   │           │   ├── CoverageMethodParenthesesTest.php
│   │           │   ├── CoverageMethodParenthesesWhitespaceTest.php
│   │           │   ├── CoverageMethodTest.php
│   │           │   ├── CoverageNamespacedFunctionTest.php
│   │           │   ├── CoverageNoneTest.php
│   │           │   ├── CoverageNothingTest.php
│   │           │   ├── CoverageNotPrivateTest.php
│   │           │   ├── CoverageNotProtectedTest.php
│   │           │   ├── CoverageNotPublicTest.php
│   │           │   ├── CoveragePrivateTest.php
│   │           │   ├── CoverageProtectedTest.php
│   │           │   ├── CoveragePublicTest.php
│   │           │   ├── CoverageTwoDefaultClassAnnotations.php
│   │           │   ├── CoveredClass.php
│   │           │   ├── CoveredFunction.php
│   │           │   ├── CustomPrinter.php
│   │           │   ├── DataProviderDebugTest.php
│   │           │   ├── DataProviderDependencyTest.php
│   │           │   ├── DataProviderFilterTest.php
│   │           │   ├── DataProviderIncompleteTest.php
│   │           │   ├── DataProviderIssue2833
│   │           │   │   ├── FirstTest.php
│   │           │   │   └── SecondTest.php
│   │           │   ├── DataProviderIssue2859
│   │           │   │   ├── phpunit.xml
│   │           │   │   └── tests
│   │           │   │       └── another
│   │           │   │           └── TestWithDataProviderTest.php
│   │           │   ├── DataProviderIssue2922
│   │           │   │   ├── FirstTest.php
│   │           │   │   └── SecondTest.php
│   │           │   ├── DataProviderSkippedTest.php
│   │           │   ├── DataProviderTestDoxTest.php
│   │           │   ├── DataProviderTest.php
│   │           │   ├── DependencyFailureTest.php
│   │           │   ├── DependencySuccessTest.php
│   │           │   ├── DependencyTestSuite.php
│   │           │   ├── DoesNotPerformAssertionsButPerformingAssertionsTest.php
│   │           │   ├── DoNoAssertionTestCase.php
│   │           │   ├── DoubleTestCase.php
│   │           │   ├── DummyBarTest.php
│   │           │   ├── DummyException.php
│   │           │   ├── DummyFooTest.php
│   │           │   ├── EmptyTestCaseTest.php
│   │           │   ├── ExampleTrait.php
│   │           │   ├── ExceptionInAssertPostConditionsTest.php
│   │           │   ├── ExceptionInAssertPreConditionsTest.php
│   │           │   ├── ExceptionInSetUpTest.php
│   │           │   ├── ExceptionInTearDownTest.php
│   │           │   ├── ExceptionInTestDetectedInTeardown.php
│   │           │   ├── ExceptionInTest.php
│   │           │   ├── ExceptionNamespaceTest.php
│   │           │   ├── ExceptionStackTest.php
│   │           │   ├── ExceptionTest.php
│   │           │   ├── ExceptionWithThrowable.php
│   │           │   ├── expectedFileFormat.txt
│   │           │   ├── Failure.php
│   │           │   ├── FailureTest.php
│   │           │   ├── FalsyConstraint.php
│   │           │   ├── FatalTest.php
│   │           │   ├── Foo.php
│   │           │   ├── foo.xml
│   │           │   ├── FunctionCallback.php
│   │           │   ├── Go ogle-Sea.rch.wsdl
│   │           │   ├── GoogleSearch.wsdl
│   │           │   ├── IgnoreCodeCoverageClass.php
│   │           │   ├── IgnoreCodeCoverageClassTest.php
│   │           │   ├── IncompleteTest.php
│   │           │   ├── Inheritance
│   │           │   │   ├── InheritanceA.php
│   │           │   │   └── InheritanceB.php
│   │           │   ├── InheritedTestCase.php
│   │           │   ├── IniTest.php
│   │           │   ├── InterfaceWithSemiReservedMethodName.php
│   │           │   ├── InterfaceWithStaticMethod.php
│   │           │   ├── IsolationTest.php
│   │           │   ├── JsonData
│   │           │   │   ├── arrayObject.json
│   │           │   │   └── simpleObject.json
│   │           │   ├── MethodCallbackByReference.php
│   │           │   ├── MethodCallback.php
│   │           │   ├── Mockable.php
│   │           │   ├── MockRunner.php
│   │           │   ├── MockTestInterface.php
│   │           │   ├── MultiDependencyTest.php
│   │           │   ├── MultiDependencyTest_result_cache.txt
│   │           │   ├── MultipleDataProviderTest.php
│   │           │   ├── MyCommand.php
│   │           │   ├── NamedConstraint.php
│   │           │   ├── NamespaceCoverageClassExtendedTest.php
│   │           │   ├── NamespaceCoverageClassTest.php
│   │           │   ├── NamespaceCoverageCoversClassPublicTest.php
│   │           │   ├── NamespaceCoverageCoversClassTest.php
│   │           │   ├── NamespaceCoverageMethodTest.php
│   │           │   ├── NamespaceCoverageNotPrivateTest.php
│   │           │   ├── NamespaceCoverageNotProtectedTest.php
│   │           │   ├── NamespaceCoverageNotPublicTest.php
│   │           │   ├── NamespaceCoveragePrivateTest.php
│   │           │   ├── NamespaceCoverageProtectedTest.php
│   │           │   ├── NamespaceCoveragePublicTest.php
│   │           │   ├── NamespaceCoveredClass.php
│   │           │   ├── NamespaceCoveredFunction.php
│   │           │   ├── NoArgTestCaseTest.php
│   │           │   ├── NonStatic.php
│   │           │   ├── NoTestCaseClass.php
│   │           │   ├── NoTestCases.php
│   │           │   ├── NotExistingCoveredElementTest.php
│   │           │   ├── NothingTest.php
│   │           │   ├── NotPublicTestCase.php
│   │           │   ├── NotVoidTestCase.php
│   │           │   ├── OneTestCase.php
│   │           │   ├── OutputTestCase.php
│   │           │   ├── OverrideTestCase.php
│   │           │   ├── ParseTestMethodAnnotationsMock.php
│   │           │   ├── PartialMockTestClass.php
│   │           │   ├── phpt-for-coverage.phpt
│   │           │   ├── phpt-xfail.phpt
│   │           │   ├── phpunit-example-extension
│   │           │   │   ├── phpunit.xml
│   │           │   │   ├── tests
│   │           │   │   │   └── OneTest.php
│   │           │   │   └── tools
│   │           │   │       └── phpunit.d
│   │           │   │           └── phpunit-example-extension-3.0.3.phar
│   │           │   ├── RequirementsClassBeforeClassHookTest.php
│   │           │   ├── RequirementsClassDocBlockTest.php
│   │           │   ├── RequirementsTest.php
│   │           │   ├── RouterTest.php
│   │           │   ├── SampleArrayAccess.php
│   │           │   ├── SampleClass.php
│   │           │   ├── SingletonClass.php
│   │           │   ├── Singleton.php
│   │           │   ├── SomeClass.php
│   │           │   ├── StackTest.php
│   │           │   ├── StaticMockTestClass.php
│   │           │   ├── StatusTest.php
│   │           │   ├── StopOnErrorTestSuite.php
│   │           │   ├── StopOnWarningTestSuite.php
│   │           │   ├── StopsOnWarningTest.php
│   │           │   ├── StringableClass.php
│   │           │   ├── Struct.php
│   │           │   ├── structureAttributesAreSameButValuesAreNot.xml
│   │           │   ├── structureExpected.xml
│   │           │   ├── structureIgnoreTextNodes.xml
│   │           │   ├── structureIsSameButDataIsNot.xml
│   │           │   ├── structureWrongNumberOfAttributes.xml
│   │           │   ├── structureWrongNumberOfNodes.xml
│   │           │   ├── Success.php
│   │           │   ├── TemplateMethodsTest.php
│   │           │   ├── TestableCliTestDoxPrinter.php
│   │           │   ├── TestAutoreferenced.php
│   │           │   ├── TestDoxGroupTest.php
│   │           │   ├── TestGeneratorMaker.php
│   │           │   ├── TestIncomplete.php
│   │           │   ├── TestIterator2.php
│   │           │   ├── TestIteratorAggregate2.php
│   │           │   ├── TestIteratorAggregate.php
│   │           │   ├── TestIterator.php
│   │           │   ├── TestRisky.php
│   │           │   ├── TestSkipped.php
│   │           │   ├── TestTestError.php
│   │           │   ├── TestWarning.php
│   │           │   ├── TestWithTest.php
│   │           │   ├── ThrowExceptionTestCase.php
│   │           │   ├── ThrowNoExceptionTestCase.php
│   │           │   ├── TraversableMockTestInterface.php
│   │           │   ├── TruthyConstraint.php
│   │           │   ├── VariousIterableDataProviderTest.php
│   │           │   ├── WasRun.php
│   │           │   └── WrapperIteratorAggregate.php
│   │           └── unit
│   │               ├── Framework
│   │               │   ├── AssertTest.php
│   │               │   ├── Constraint
│   │               │   │   ├── ArrayHasKeyTest.php
│   │               │   │   ├── ArraySubsetTest.php
│   │               │   │   ├── AttributeTest.php
│   │               │   │   ├── CallbackTest.php
│   │               │   │   ├── ClassHasAttributeTest.php
│   │               │   │   ├── ClassHasStaticAttributeTest.php
│   │               │   │   ├── ConstraintTestCase.php
│   │               │   │   ├── CountTest.php
│   │               │   │   ├── DirectoryExistsTest.php
│   │               │   │   ├── ExceptionMessageRegExpTest.php
│   │               │   │   ├── ExceptionMessageTest.php
│   │               │   │   ├── FileExistsTest.php
│   │               │   │   ├── GreaterThanTest.php
│   │               │   │   ├── IsEmptyTest.php
│   │               │   │   ├── IsEqualTest.php
│   │               │   │   ├── IsIdenticalTest.php
│   │               │   │   ├── IsInstanceOfTest.php
│   │               │   │   ├── IsJsonTest.php
│   │               │   │   ├── IsNullTest.php
│   │               │   │   ├── IsReadableTest.php
│   │               │   │   ├── IsTypeTest.php
│   │               │   │   ├── IsWritableTest.php
│   │               │   │   ├── JsonMatchesErrorMessageProviderTest.php
│   │               │   │   ├── JsonMatchesTest.php
│   │               │   │   ├── LessThanTest.php
│   │               │   │   ├── LogicalAndTest.php
│   │               │   │   ├── LogicalOrTest.php
│   │               │   │   ├── LogicalXorTest.php
│   │               │   │   ├── ObjectHasAttributeTest.php
│   │               │   │   ├── RegularExpressionTest.php
│   │               │   │   ├── SameSizeTest.php
│   │               │   │   ├── StringContainsTest.php
│   │               │   │   ├── StringEndsWithTest.php
│   │               │   │   ├── StringMatchesFormatDescriptionTest.php
│   │               │   │   ├── StringStartsWithTest.php
│   │               │   │   └── TraversableContainsTest.php
│   │               │   ├── ConstraintTest.php
│   │               │   ├── ExceptionWrapperTest.php
│   │               │   ├── MockObject
│   │               │   │   ├── Builder
│   │               │   │   │   └── InvocationMockerTest.php
│   │               │   │   ├── GeneratorTest.php
│   │               │   │   ├── Invocation
│   │               │   │   │   ├── ObjectInvocationTest.php
│   │               │   │   │   └── StaticInvocationTest.php
│   │               │   │   ├── Matcher
│   │               │   │   │   └── ConsecutiveParametersTest.php
│   │               │   │   ├── MockBuilderTest.php
│   │               │   │   ├── MockMethodTest.php
│   │               │   │   ├── MockObjectTest.php
│   │               │   │   └── ProxyObjectTest.php
│   │               │   ├── TestCaseTest.php
│   │               │   ├── TestFailureTest.php
│   │               │   ├── TestImplementorTest.php
│   │               │   ├── TestListenerTest.php
│   │               │   ├── TestResultTest.php
│   │               │   └── TestSuiteTest.php
│   │               ├── Runner
│   │               │   ├── Filter
│   │               │   │   └── NameFilterIteratorTest.php
│   │               │   ├── PhptTestCaseTest.php
│   │               │   ├── ResultCacheExtensionTest.php
│   │               │   └── TestSuiteSorterTest.php
│   │               ├── TextUI
│   │               │   └── TestRunnerTest.php
│   │               └── Util
│   │                   ├── ConfigurationGeneratorTest.php
│   │                   ├── ConfigurationTest.php
│   │                   ├── _files
│   │                   │   └── expectedXDebugFilterScript.txt
│   │                   ├── GetoptTest.php
│   │                   ├── GlobalStateTest.php
│   │                   ├── JsonTest.php
│   │                   ├── NullTestResultCacheTest.php
│   │                   ├── PHP
│   │                   │   └── AbstractPhpProcessTest.php
│   │                   ├── RegularExpressionTest.php
│   │                   ├── TestDox
│   │                   │   ├── CliTestDoxPrinterTest.php
│   │                   │   └── NamePrettifierTest.php
│   │                   ├── TestResultCacheTest.php
│   │                   ├── TestTest.php
│   │                   ├── XDebugFilterScriptGeneratorTest.php
│   │                   └── XmlTest.php
│   ├── psr
│   │   ├── container
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       ├── ContainerExceptionInterface.php
│   │   │       ├── ContainerInterface.php
│   │   │       └── NotFoundExceptionInterface.php
│   │   ├── log
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── Psr
│   │   │   │   └── Log
│   │   │   │       ├── AbstractLogger.php
│   │   │   │       ├── InvalidArgumentException.php
│   │   │   │       ├── LoggerAwareInterface.php
│   │   │   │       ├── LoggerAwareTrait.php
│   │   │   │       ├── LoggerInterface.php
│   │   │   │       ├── LoggerTrait.php
│   │   │   │       ├── LogLevel.php
│   │   │   │       ├── NullLogger.php
│   │   │   │       └── Test
│   │   │   │           └── LoggerInterfaceTest.php
│   │   │   └── README.md
│   │   └── simple-cache
│   │       ├── composer.json
│   │       ├── LICENSE.md
│   │       ├── README.md
│   │       └── src
│   │           ├── CacheException.php
│   │           ├── CacheInterface.php
│   │           └── InvalidArgumentException.php
│   ├── psy
│   │   └── psysh
│   │       ├── bin
│   │       │   ├── build-stub
│   │       │   └── psysh
│   │       ├── box.json.dist
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── Makefile
│   │       ├── phpunit.xml.dist
│   │       ├── README.md
│   │       ├── src
│   │       │   ├── CodeCleaner
│   │       │   │   ├── AbstractClassPass.php
│   │       │   │   ├── AssignThisVariablePass.php
│   │       │   │   ├── CalledClassPass.php
│   │       │   │   ├── CallTimePassByReferencePass.php
│   │       │   │   ├── CodeCleanerPass.php
│   │       │   │   ├── ExitPass.php
│   │       │   │   ├── FinalClassPass.php
│   │       │   │   ├── FunctionContextPass.php
│   │       │   │   ├── FunctionReturnInWriteContextPass.php
│   │       │   │   ├── ImplicitReturnPass.php
│   │       │   │   ├── InstanceOfPass.php
│   │       │   │   ├── LeavePsyshAlonePass.php
│   │       │   │   ├── LegacyEmptyPass.php
│   │       │   │   ├── ListPass.php
│   │       │   │   ├── LoopContextPass.php
│   │       │   │   ├── MagicConstantsPass.php
│   │       │   │   ├── NamespaceAwarePass.php
│   │       │   │   ├── NamespacePass.php
│   │       │   │   ├── NoReturnValue.php
│   │       │   │   ├── PassableByReferencePass.php
│   │       │   │   ├── RequirePass.php
│   │       │   │   ├── StrictTypesPass.php
│   │       │   │   ├── UseStatementPass.php
│   │       │   │   ├── ValidClassNamePass.php
│   │       │   │   ├── ValidConstantPass.php
│   │       │   │   ├── ValidConstructorPass.php
│   │       │   │   └── ValidFunctionNamePass.php
│   │       │   ├── CodeCleaner.php
│   │       │   ├── Command
│   │       │   │   ├── BufferCommand.php
│   │       │   │   ├── ClearCommand.php
│   │       │   │   ├── Command.php
│   │       │   │   ├── DocCommand.php
│   │       │   │   ├── DumpCommand.php
│   │       │   │   ├── EditCommand.php
│   │       │   │   ├── ExitCommand.php
│   │       │   │   ├── HelpCommand.php
│   │       │   │   ├── HistoryCommand.php
│   │       │   │   ├── ListCommand
│   │       │   │   │   ├── ClassConstantEnumerator.php
│   │       │   │   │   ├── ClassEnumerator.php
│   │       │   │   │   ├── ConstantEnumerator.php
│   │       │   │   │   ├── Enumerator.php
│   │       │   │   │   ├── FunctionEnumerator.php
│   │       │   │   │   ├── GlobalVariableEnumerator.php
│   │       │   │   │   ├── InterfaceEnumerator.php
│   │       │   │   │   ├── MethodEnumerator.php
│   │       │   │   │   ├── PropertyEnumerator.php
│   │       │   │   │   ├── TraitEnumerator.php
│   │       │   │   │   └── VariableEnumerator.php
│   │       │   │   ├── ListCommand.php
│   │       │   │   ├── ParseCommand.php
│   │       │   │   ├── PsyVersionCommand.php
│   │       │   │   ├── ReflectingCommand.php
│   │       │   │   ├── ShowCommand.php
│   │       │   │   ├── SudoCommand.php
│   │       │   │   ├── ThrowUpCommand.php
│   │       │   │   ├── TimeitCommand
│   │       │   │   │   └── TimeitVisitor.php
│   │       │   │   ├── TimeitCommand.php
│   │       │   │   ├── TraceCommand.php
│   │       │   │   ├── WhereamiCommand.php
│   │       │   │   └── WtfCommand.php
│   │       │   ├── ConfigPaths.php
│   │       │   ├── Configuration.php
│   │       │   ├── ConsoleColorFactory.php
│   │       │   ├── ContextAware.php
│   │       │   ├── Context.php
│   │       │   ├── Exception
│   │       │   │   ├── BreakException.php
│   │       │   │   ├── DeprecatedException.php
│   │       │   │   ├── ErrorException.php
│   │       │   │   ├── Exception.php
│   │       │   │   ├── FatalErrorException.php
│   │       │   │   ├── ParseErrorException.php
│   │       │   │   ├── RuntimeException.php
│   │       │   │   ├── ThrowUpException.php
│   │       │   │   └── TypeErrorException.php
│   │       │   ├── ExecutionClosure.php
│   │       │   ├── ExecutionLoop
│   │       │   │   ├── AbstractListener.php
│   │       │   │   ├── Listener.php
│   │       │   │   ├── ProcessForker.php
│   │       │   │   └── RunkitReloader.php
│   │       │   ├── ExecutionLoopClosure.php
│   │       │   ├── ExecutionLoop.php
│   │       │   ├── Formatter
│   │       │   │   ├── CodeFormatter.php
│   │       │   │   ├── DocblockFormatter.php
│   │       │   │   ├── Formatter.php
│   │       │   │   └── SignatureFormatter.php
│   │       │   ├── functions.php
│   │       │   ├── Input
│   │       │   │   ├── CodeArgument.php
│   │       │   │   ├── FilterOptions.php
│   │       │   │   ├── ShellInput.php
│   │       │   │   └── SilentInput.php
│   │       │   ├── Output
│   │       │   │   ├── OutputPager.php
│   │       │   │   ├── PassthruPager.php
│   │       │   │   ├── ProcOutputPager.php
│   │       │   │   └── ShellOutput.php
│   │       │   ├── ParserFactory.php
│   │       │   ├── Readline
│   │       │   │   ├── GNUReadline.php
│   │       │   │   ├── HoaConsole.php
│   │       │   │   ├── Libedit.php
│   │       │   │   ├── Readline.php
│   │       │   │   └── Transient.php
│   │       │   ├── Reflection
│   │       │   │   ├── ReflectionClassConstant.php
│   │       │   │   ├── ReflectionConstant.php
│   │       │   │   ├── ReflectionConstant_.php
│   │       │   │   ├── ReflectionLanguageConstructParameter.php
│   │       │   │   └── ReflectionLanguageConstruct.php
│   │       │   ├── Shell.php
│   │       │   ├── Sudo
│   │       │   │   └── SudoVisitor.php
│   │       │   ├── Sudo.php
│   │       │   ├── TabCompletion
│   │       │   │   ├── AutoCompleter.php
│   │       │   │   └── Matcher
│   │       │   │       ├── AbstractContextAwareMatcher.php
│   │       │   │       ├── AbstractDefaultParametersMatcher.php
│   │       │   │       ├── AbstractMatcher.php
│   │       │   │       ├── ClassAttributesMatcher.php
│   │       │   │       ├── ClassMethodDefaultParametersMatcher.php
│   │       │   │       ├── ClassMethodsMatcher.php
│   │       │   │       ├── ClassNamesMatcher.php
│   │       │   │       ├── CommandsMatcher.php
│   │       │   │       ├── ConstantsMatcher.php
│   │       │   │       ├── FunctionDefaultParametersMatcher.php
│   │       │   │       ├── FunctionsMatcher.php
│   │       │   │       ├── KeywordsMatcher.php
│   │       │   │       ├── MongoClientMatcher.php
│   │       │   │       ├── MongoDatabaseMatcher.php
│   │       │   │       ├── ObjectAttributesMatcher.php
│   │       │   │       ├── ObjectMethodDefaultParametersMatcher.php
│   │       │   │       ├── ObjectMethodsMatcher.php
│   │       │   │       └── VariablesMatcher.php
│   │       │   ├── Util
│   │       │   │   ├── Docblock.php
│   │       │   │   ├── Json.php
│   │       │   │   ├── Mirror.php
│   │       │   │   └── Str.php
│   │       │   ├── VarDumper
│   │       │   │   ├── Cloner.php
│   │       │   │   ├── Dumper.php
│   │       │   │   ├── PresenterAware.php
│   │       │   │   └── Presenter.php
│   │       │   └── VersionUpdater
│   │       │       ├── Checker.php
│   │       │       ├── GitHubChecker.php
│   │       │       ├── IntervalChecker.php
│   │       │       └── NoopChecker.php
│   │       ├── test
│   │       │   ├── ClassWithSecrets.php
│   │       │   ├── CodeCleaner
│   │       │   │   ├── AbstractClassPassTest.php
│   │       │   │   ├── AssignThisVariablePassTest.php
│   │       │   │   ├── CalledClassPassTest.php
│   │       │   │   ├── CallTimePassByReferencePassTest.php
│   │       │   │   ├── CodeCleanerTestCase.php
│   │       │   │   ├── ExitPassTest.php
│   │       │   │   ├── FinalClassPassTest.php
│   │       │   │   ├── Fixtures
│   │       │   │   │   ├── ClassWithCallStatic.php
│   │       │   │   │   ├── ClassWithStatic.php
│   │       │   │   │   └── TraitWithStatic.php
│   │       │   │   ├── FunctionContextPassTest.php
│   │       │   │   ├── FunctionReturnInWriteContextPassTest.php
│   │       │   │   ├── ImplicitReturnPassTest.php
│   │       │   │   ├── InstanceOfPassTest.php
│   │       │   │   ├── LeavePsyshAlonePassTest.php
│   │       │   │   ├── LegacyEmptyPassTest.php
│   │       │   │   ├── ListPassTest.php
│   │       │   │   ├── LoopContextPassTest.php
│   │       │   │   ├── MagicConstantsPassTest.php
│   │       │   │   ├── NamespacePassTest.php
│   │       │   │   ├── NoReturnValueTest.php
│   │       │   │   ├── PassableByReferencePassTest.php
│   │       │   │   ├── RequirePassTest.php
│   │       │   │   ├── StrictTypesPassTest.php
│   │       │   │   ├── UseStatementPassTest.php
│   │       │   │   ├── ValidClassNamePassTest.php
│   │       │   │   ├── ValidConstantPassTest.php
│   │       │   │   ├── ValidConstructorPassTest.php
│   │       │   │   └── ValidFunctionNamePassTest.php
│   │       │   ├── CodeCleanerTest.php
│   │       │   ├── Command
│   │       │   │   ├── ExitCommandTest.php
│   │       │   │   ├── ThrowUpCommandTest.php
│   │       │   │   └── TimeitCommand
│   │       │   │       └── TimeitVisitorTest.php
│   │       │   ├── ConfigurationTest.php
│   │       │   ├── ConsoleColorFactoryTest.php
│   │       │   ├── ContextTest.php
│   │       │   ├── Exception
│   │       │   │   ├── BreakExceptionTest.php
│   │       │   │   ├── ErrorExceptionTest.php
│   │       │   │   ├── FatalErrorExceptionTest.php
│   │       │   │   ├── ParseErrorExceptionTest.php
│   │       │   │   ├── RuntimeExceptionTest.php
│   │       │   │   ├── ThrowUpExceptionTest.php
│   │       │   │   └── TypeErrorExceptionTest.php
│   │       │   ├── FakeShell.php
│   │       │   ├── fixtures
│   │       │   │   ├── config.php
│   │       │   │   ├── default
│   │       │   │   ├── empty.php
│   │       │   │   ├── legacy
│   │       │   │   ├── mixed
│   │       │   │   ├── project
│   │       │   │   └── unvis_fixtures.json
│   │       │   ├── Formatter
│   │       │   │   ├── CodeFormatterTest.php
│   │       │   │   ├── DocblockFormatterTest.php
│   │       │   │   ├── Fixtures
│   │       │   │   │   ├── BoringTrait.php
│   │       │   │   │   └── SomeClass.php
│   │       │   │   └── SignatureFormatterTest.php
│   │       │   ├── Input
│   │       │   │   ├── CodeArgumentTest.php
│   │       │   │   ├── FilterOptionsTest.php
│   │       │   │   └── ShellInputTest.php
│   │       │   ├── ParserTestCase.php
│   │       │   ├── Readline
│   │       │   │   ├── GNUReadlineTest.php
│   │       │   │   ├── HoaConsoleTest.php
│   │       │   │   ├── LibeditTest.php
│   │       │   │   └── TransientTest.php
│   │       │   ├── Reflection
│   │       │   │   ├── ReflectionClassConstantTest.php
│   │       │   │   ├── ReflectionConstantBCTest.php
│   │       │   │   ├── ReflectionConstantTest.php
│   │       │   │   ├── ReflectionLanguageConstructParameterTest.php
│   │       │   │   └── ReflectionLanguageConstructTest.php
│   │       │   ├── ShellTest.php
│   │       │   ├── Sudo
│   │       │   │   └── SudoVisitorTest.php
│   │       │   ├── SudoTest.php
│   │       │   ├── TabCompletion
│   │       │   │   ├── AutoCompleterTest.php
│   │       │   │   └── StaticSample.php
│   │       │   ├── tools
│   │       │   │   ├── gen_unvis_fixtures.py
│   │       │   │   └── vis.py
│   │       │   ├── Util
│   │       │   │   ├── DocblockTest.php
│   │       │   │   ├── MirrorTest.php
│   │       │   │   └── StrTest.php
│   │       │   └── VersionUpdater
│   │       │       ├── GitHubCheckerTest.php
│   │       │       └── NoopCheckerTest.php
│   │       └── vendor-bin
│   │           └── box
│   │               ├── composer.json
│   │               └── composer.lock
│   ├── ramsey
│   │   └── uuid
│   │       ├── CHANGELOG.md
│   │       ├── CODE_OF_CONDUCT.md
│   │       ├── composer.json
│   │       ├── CONTRIBUTING.md
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── src
│   │           ├── BinaryUtils.php
│   │           ├── Builder
│   │           │   ├── DefaultUuidBuilder.php
│   │           │   ├── DegradedUuidBuilder.php
│   │           │   └── UuidBuilderInterface.php
│   │           ├── Codec
│   │           │   ├── CodecInterface.php
│   │           │   ├── GuidStringCodec.php
│   │           │   ├── OrderedTimeCodec.php
│   │           │   ├── StringCodec.php
│   │           │   ├── TimestampFirstCombCodec.php
│   │           │   └── TimestampLastCombCodec.php
│   │           ├── Converter
│   │           │   ├── Number
│   │           │   │   ├── BigNumberConverter.php
│   │           │   │   └── DegradedNumberConverter.php
│   │           │   ├── NumberConverterInterface.php
│   │           │   ├── Time
│   │           │   │   ├── BigNumberTimeConverter.php
│   │           │   │   ├── DegradedTimeConverter.php
│   │           │   │   └── PhpTimeConverter.php
│   │           │   └── TimeConverterInterface.php
│   │           ├── DegradedUuid.php
│   │           ├── Exception
│   │           │   ├── InvalidUuidStringException.php
│   │           │   ├── UnsatisfiedDependencyException.php
│   │           │   └── UnsupportedOperationException.php
│   │           ├── FeatureSet.php
│   │           ├── Generator
│   │           │   ├── CombGenerator.php
│   │           │   ├── DefaultTimeGenerator.php
│   │           │   ├── MtRandGenerator.php
│   │           │   ├── OpenSslGenerator.php
│   │           │   ├── PeclUuidRandomGenerator.php
│   │           │   ├── PeclUuidTimeGenerator.php
│   │           │   ├── RandomBytesGenerator.php
│   │           │   ├── RandomGeneratorFactory.php
│   │           │   ├── RandomGeneratorInterface.php
│   │           │   ├── RandomLibAdapter.php
│   │           │   ├── SodiumRandomGenerator.php
│   │           │   ├── TimeGeneratorFactory.php
│   │           │   └── TimeGeneratorInterface.php
│   │           ├── Provider
│   │           │   ├── Node
│   │           │   │   ├── FallbackNodeProvider.php
│   │           │   │   ├── RandomNodeProvider.php
│   │           │   │   └── SystemNodeProvider.php
│   │           │   ├── NodeProviderInterface.php
│   │           │   ├── Time
│   │           │   │   ├── FixedTimeProvider.php
│   │           │   │   └── SystemTimeProvider.php
│   │           │   └── TimeProviderInterface.php
│   │           ├── UuidFactoryInterface.php
│   │           ├── UuidFactory.php
│   │           ├── UuidInterface.php
│   │           └── Uuid.php
│   ├── sebastian
│   │   ├── code-unit-reverse-lookup
│   │   │   ├── build.xml
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml
│   │   │   ├── README.md
│   │   │   ├── src
│   │   │   │   └── Wizard.php
│   │   │   └── tests
│   │   │       └── WizardTest.php
│   │   ├── comparator
│   │   │   ├── build.xml
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml
│   │   │   ├── README.md
│   │   │   ├── src
│   │   │   │   ├── ArrayComparator.php
│   │   │   │   ├── Comparator.php
│   │   │   │   ├── ComparisonFailure.php
│   │   │   │   ├── DateTimeComparator.php
│   │   │   │   ├── DOMNodeComparator.php
│   │   │   │   ├── DoubleComparator.php
│   │   │   │   ├── ExceptionComparator.php
│   │   │   │   ├── Factory.php
│   │   │   │   ├── MockObjectComparator.php
│   │   │   │   ├── NumericComparator.php
│   │   │   │   ├── ObjectComparator.php
│   │   │   │   ├── ResourceComparator.php
│   │   │   │   ├── ScalarComparator.php
│   │   │   │   ├── SplObjectStorageComparator.php
│   │   │   │   └── TypeComparator.php
│   │   │   └── tests
│   │   │       ├── ArrayComparatorTest.php
│   │   │       ├── ComparisonFailureTest.php
│   │   │       ├── DateTimeComparatorTest.php
│   │   │       ├── DOMNodeComparatorTest.php
│   │   │       ├── DoubleComparatorTest.php
│   │   │       ├── ExceptionComparatorTest.php
│   │   │       ├── FactoryTest.php
│   │   │       ├── _fixture
│   │   │       │   ├── Author.php
│   │   │       │   ├── Book.php
│   │   │       │   ├── ClassWithToString.php
│   │   │       │   ├── SampleClass.php
│   │   │       │   ├── Struct.php
│   │   │       │   ├── TestClassComparator.php
│   │   │       │   └── TestClass.php
│   │   │       ├── MockObjectComparatorTest.php
│   │   │       ├── NumericComparatorTest.php
│   │   │       ├── ObjectComparatorTest.php
│   │   │       ├── ResourceComparatorTest.php
│   │   │       ├── ScalarComparatorTest.php
│   │   │       ├── SplObjectStorageComparatorTest.php
│   │   │       └── TypeComparatorTest.php
│   │   ├── diff
│   │   │   ├── build.xml
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml
│   │   │   ├── README.md
│   │   │   ├── src
│   │   │   │   ├── Chunk.php
│   │   │   │   ├── Differ.php
│   │   │   │   ├── Diff.php
│   │   │   │   ├── Exception
│   │   │   │   │   ├── ConfigurationException.php
│   │   │   │   │   ├── Exception.php
│   │   │   │   │   └── InvalidArgumentException.php
│   │   │   │   ├── Line.php
│   │   │   │   ├── LongestCommonSubsequenceCalculator.php
│   │   │   │   ├── MemoryEfficientLongestCommonSubsequenceCalculator.php
│   │   │   │   ├── Output
│   │   │   │   │   ├── AbstractChunkOutputBuilder.php
│   │   │   │   │   ├── DiffOnlyOutputBuilder.php
│   │   │   │   │   ├── DiffOutputBuilderInterface.php
│   │   │   │   │   ├── StrictUnifiedDiffOutputBuilder.php
│   │   │   │   │   └── UnifiedDiffOutputBuilder.php
│   │   │   │   ├── Parser.php
│   │   │   │   └── TimeEfficientLongestCommonSubsequenceCalculator.php
│   │   │   └── tests
│   │   │       ├── ChunkTest.php
│   │   │       ├── DifferTest.php
│   │   │       ├── DiffTest.php
│   │   │       ├── Exception
│   │   │       │   ├── ConfigurationExceptionTest.php
│   │   │       │   └── InvalidArgumentExceptionTest.php
│   │   │       ├── fixtures
│   │   │       │   ├── out
│   │   │       │   ├── patch2.txt
│   │   │       │   ├── patch.txt
│   │   │       │   ├── serialized_diff.bin
│   │   │       │   └── UnifiedDiffAssertTraitIntegrationTest
│   │   │       │       ├── 1_a.txt
│   │   │       │       ├── 1_b.txt
│   │   │       │       ├── 2_a.txt
│   │   │       │       └── 2_b.txt
│   │   │       ├── LineTest.php
│   │   │       ├── LongestCommonSubsequenceTest.php
│   │   │       ├── MemoryEfficientImplementationTest.php
│   │   │       ├── Output
│   │   │       │   ├── AbstractChunkOutputBuilderTest.php
│   │   │       │   ├── DiffOnlyOutputBuilderTest.php
│   │   │       │   ├── Integration
│   │   │       │   │   ├── StrictUnifiedDiffOutputBuilderIntegrationTest.php
│   │   │       │   │   └── UnifiedDiffOutputBuilderIntegrationTest.php
│   │   │       │   ├── StrictUnifiedDiffOutputBuilderDataProvider.php
│   │   │       │   ├── StrictUnifiedDiffOutputBuilderTest.php
│   │   │       │   ├── UnifiedDiffOutputBuilderDataProvider.php
│   │   │       │   └── UnifiedDiffOutputBuilderTest.php
│   │   │       ├── ParserTest.php
│   │   │       ├── TimeEfficientImplementationTest.php
│   │   │       └── Utils
│   │   │           ├── FileUtils.php
│   │   │           ├── UnifiedDiffAssertTraitIntegrationTest.php
│   │   │           ├── UnifiedDiffAssertTrait.php
│   │   │           └── UnifiedDiffAssertTraitTest.php
│   │   ├── environment
│   │   │   ├── build.xml
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml
│   │   │   ├── README.md
│   │   │   ├── src
│   │   │   │   ├── Console.php
│   │   │   │   ├── OperatingSystem.php
│   │   │   │   └── Runtime.php
│   │   │   └── tests
│   │   │       ├── ConsoleTest.php
│   │   │       ├── OperatingSystemTest.php
│   │   │       └── RuntimeTest.php
│   │   ├── exporter
│   │   │   ├── build.xml
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml
│   │   │   ├── README.md
│   │   │   ├── src
│   │   │   │   └── Exporter.php
│   │   │   └── tests
│   │   │       └── ExporterTest.php
│   │   ├── global-state
│   │   │   ├── build.xml
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml
│   │   │   ├── README.md
│   │   │   ├── src
│   │   │   │   ├── Blacklist.php
│   │   │   │   ├── CodeExporter.php
│   │   │   │   ├── exceptions
│   │   │   │   │   ├── Exception.php
│   │   │   │   │   └── RuntimeException.php
│   │   │   │   ├── Restorer.php
│   │   │   │   └── Snapshot.php
│   │   │   └── tests
│   │   │       ├── BlacklistTest.php
│   │   │       ├── CodeExporterTest.php
│   │   │       ├── _fixture
│   │   │       │   ├── BlacklistedChildClass.php
│   │   │       │   ├── BlacklistedClass.php
│   │   │       │   ├── BlacklistedImplementor.php
│   │   │       │   ├── BlacklistedInterface.php
│   │   │       │   ├── SnapshotClass.php
│   │   │       │   ├── SnapshotDomDocument.php
│   │   │       │   ├── SnapshotFunctions.php
│   │   │       │   └── SnapshotTrait.php
│   │   │       ├── RestorerTest.php
│   │   │       └── SnapshotTest.php
│   │   ├── object-enumerator
│   │   │   ├── build.xml
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml
│   │   │   ├── README.md
│   │   │   ├── src
│   │   │   │   ├── Enumerator.php
│   │   │   │   ├── Exception.php
│   │   │   │   └── InvalidArgumentException.php
│   │   │   └── tests
│   │   │       ├── EnumeratorTest.php
│   │   │       └── _fixture
│   │   │           └── ExceptionThrower.php
│   │   ├── object-reflector
│   │   │   ├── build.xml
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml
│   │   │   ├── README.md
│   │   │   ├── src
│   │   │   │   ├── Exception.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   └── ObjectReflector.php
│   │   │   └── tests
│   │   │       ├── _fixture
│   │   │       │   ├── ChildClass.php
│   │   │       │   ├── ClassWithIntegerAttributeName.php
│   │   │       │   └── ParentClass.php
│   │   │       └── ObjectReflectorTest.php
│   │   ├── recursion-context
│   │   │   ├── build.xml
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml
│   │   │   ├── README.md
│   │   │   ├── src
│   │   │   │   ├── Context.php
│   │   │   │   ├── Exception.php
│   │   │   │   └── InvalidArgumentException.php
│   │   │   └── tests
│   │   │       └── ContextTest.php
│   │   ├── resource-operations
│   │   │   ├── build
│   │   │   │   └── generate.php
│   │   │   ├── build.xml
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── src
│   │   │   │   └── ResourceOperations.php
│   │   │   └── tests
│   │   │       └── ResourceOperationsTest.php
│   │   └── version
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── src
│   │           └── Version.php
│   ├── swiftmailer
│   │   └── swiftmailer
│   │       ├── CHANGES
│   │       ├── composer.json
│   │       ├── doc
│   │       │   ├── headers.rst
│   │       │   ├── index.rst
│   │       │   ├── introduction.rst
│   │       │   ├── japanese.rst
│   │       │   ├── messages.rst
│   │       │   ├── plugins.rst
│   │       │   └── sending.rst
│   │       ├── lib
│   │       │   ├── classes
│   │       │   │   ├── Swift
│   │       │   │   │   ├── AddressEncoder
│   │       │   │   │   │   ├── IdnAddressEncoder.php
│   │       │   │   │   │   └── Utf8AddressEncoder.php
│   │       │   │   │   ├── AddressEncoderException.php
│   │       │   │   │   ├── AddressEncoder.php
│   │       │   │   │   ├── Attachment.php
│   │       │   │   │   ├── ByteStream
│   │       │   │   │   │   ├── AbstractFilterableInputStream.php
│   │       │   │   │   │   ├── ArrayByteStream.php
│   │       │   │   │   │   ├── FileByteStream.php
│   │       │   │   │   │   └── TemporaryFileByteStream.php
│   │       │   │   │   ├── CharacterReader
│   │       │   │   │   │   ├── GenericFixedWidthReader.php
│   │       │   │   │   │   ├── UsAsciiReader.php
│   │       │   │   │   │   └── Utf8Reader.php
│   │       │   │   │   ├── CharacterReaderFactory
│   │       │   │   │   │   └── SimpleCharacterReaderFactory.php
│   │       │   │   │   ├── CharacterReaderFactory.php
│   │       │   │   │   ├── CharacterReader.php
│   │       │   │   │   ├── CharacterStream
│   │       │   │   │   │   ├── ArrayCharacterStream.php
│   │       │   │   │   │   └── NgCharacterStream.php
│   │       │   │   │   ├── CharacterStream.php
│   │       │   │   │   ├── ConfigurableSpool.php
│   │       │   │   │   ├── DependencyContainer.php
│   │       │   │   │   ├── DependencyException.php
│   │       │   │   │   ├── EmbeddedFile.php
│   │       │   │   │   ├── Encoder
│   │       │   │   │   │   ├── Base64Encoder.php
│   │       │   │   │   │   ├── QpEncoder.php
│   │       │   │   │   │   └── Rfc2231Encoder.php
│   │       │   │   │   ├── Encoder.php
│   │       │   │   │   ├── Events
│   │       │   │   │   │   ├── CommandEvent.php
│   │       │   │   │   │   ├── CommandListener.php
│   │       │   │   │   │   ├── EventDispatcher.php
│   │       │   │   │   │   ├── EventListener.php
│   │       │   │   │   │   ├── EventObject.php
│   │       │   │   │   │   ├── Event.php
│   │       │   │   │   │   ├── ResponseEvent.php
│   │       │   │   │   │   ├── ResponseListener.php
│   │       │   │   │   │   ├── SendEvent.php
│   │       │   │   │   │   ├── SendListener.php
│   │       │   │   │   │   ├── SimpleEventDispatcher.php
│   │       │   │   │   │   ├── TransportChangeEvent.php
│   │       │   │   │   │   ├── TransportChangeListener.php
│   │       │   │   │   │   ├── TransportExceptionEvent.php
│   │       │   │   │   │   └── TransportExceptionListener.php
│   │       │   │   │   ├── FailoverTransport.php
│   │       │   │   │   ├── FileSpool.php
│   │       │   │   │   ├── FileStream.php
│   │       │   │   │   ├── Filterable.php
│   │       │   │   │   ├── IdGenerator.php
│   │       │   │   │   ├── Image.php
│   │       │   │   │   ├── InputByteStream.php
│   │       │   │   │   ├── IoException.php
│   │       │   │   │   ├── KeyCache
│   │       │   │   │   │   ├── ArrayKeyCache.php
│   │       │   │   │   │   ├── DiskKeyCache.php
│   │       │   │   │   │   ├── KeyCacheInputStream.php
│   │       │   │   │   │   ├── NullKeyCache.php
│   │       │   │   │   │   └── SimpleKeyCacheInputStream.php
│   │       │   │   │   ├── KeyCache.php
│   │       │   │   │   ├── LoadBalancedTransport.php
│   │       │   │   │   ├── Mailer
│   │       │   │   │   │   ├── ArrayRecipientIterator.php
│   │       │   │   │   │   └── RecipientIterator.php
│   │       │   │   │   ├── Mailer.php
│   │       │   │   │   ├── MemorySpool.php
│   │       │   │   │   ├── Message.php
│   │       │   │   │   ├── Mime
│   │       │   │   │   │   ├── Attachment.php
│   │       │   │   │   │   ├── CharsetObserver.php
│   │       │   │   │   │   ├── ContentEncoder
│   │       │   │   │   │   │   ├── Base64ContentEncoder.php
│   │       │   │   │   │   │   ├── NativeQpContentEncoder.php
│   │       │   │   │   │   │   ├── NullContentEncoder.php
│   │       │   │   │   │   │   ├── PlainContentEncoder.php
│   │       │   │   │   │   │   ├── QpContentEncoder.php
│   │       │   │   │   │   │   ├── QpContentEncoderProxy.php
│   │       │   │   │   │   │   └── RawContentEncoder.php
│   │       │   │   │   │   ├── ContentEncoder.php
│   │       │   │   │   │   ├── EmbeddedFile.php
│   │       │   │   │   │   ├── EncodingObserver.php
│   │       │   │   │   │   ├── HeaderEncoder
│   │       │   │   │   │   │   ├── Base64HeaderEncoder.php
│   │       │   │   │   │   │   └── QpHeaderEncoder.php
│   │       │   │   │   │   ├── HeaderEncoder.php
│   │       │   │   │   │   ├── Header.php
│   │       │   │   │   │   ├── Headers
│   │       │   │   │   │   │   ├── AbstractHeader.php
│   │       │   │   │   │   │   ├── DateHeader.php
│   │       │   │   │   │   │   ├── IdentificationHeader.php
│   │       │   │   │   │   │   ├── MailboxHeader.php
│   │       │   │   │   │   │   ├── OpenDKIMHeader.php
│   │       │   │   │   │   │   ├── ParameterizedHeader.php
│   │       │   │   │   │   │   ├── PathHeader.php
│   │       │   │   │   │   │   └── UnstructuredHeader.php
│   │       │   │   │   │   ├── IdGenerator.php
│   │       │   │   │   │   ├── MimePart.php
│   │       │   │   │   │   ├── SimpleHeaderFactory.php
│   │       │   │   │   │   ├── SimpleHeaderSet.php
│   │       │   │   │   │   ├── SimpleMessage.php
│   │       │   │   │   │   └── SimpleMimeEntity.php
│   │       │   │   │   ├── MimePart.php
│   │       │   │   │   ├── NullTransport.php
│   │       │   │   │   ├── OutputByteStream.php
│   │       │   │   │   ├── Plugins
│   │       │   │   │   │   ├── AntiFloodPlugin.php
│   │       │   │   │   │   ├── BandwidthMonitorPlugin.php
│   │       │   │   │   │   ├── Decorator
│   │       │   │   │   │   │   └── Replacements.php
│   │       │   │   │   │   ├── DecoratorPlugin.php
│   │       │   │   │   │   ├── ImpersonatePlugin.php
│   │       │   │   │   │   ├── Logger.php
│   │       │   │   │   │   ├── LoggerPlugin.php
│   │       │   │   │   │   ├── Loggers
│   │       │   │   │   │   │   ├── ArrayLogger.php
│   │       │   │   │   │   │   └── EchoLogger.php
│   │       │   │   │   │   ├── MessageLogger.php
│   │       │   │   │   │   ├── Pop
│   │       │   │   │   │   │   ├── Pop3Connection.php
│   │       │   │   │   │   │   └── Pop3Exception.php
│   │       │   │   │   │   ├── PopBeforeSmtpPlugin.php
│   │       │   │   │   │   ├── RedirectingPlugin.php
│   │       │   │   │   │   ├── Reporter.php
│   │       │   │   │   │   ├── ReporterPlugin.php
│   │       │   │   │   │   ├── Reporters
│   │       │   │   │   │   │   ├── HitReporter.php
│   │       │   │   │   │   │   └── HtmlReporter.php
│   │       │   │   │   │   ├── Sleeper.php
│   │       │   │   │   │   ├── ThrottlerPlugin.php
│   │       │   │   │   │   └── Timer.php
│   │       │   │   │   ├── Preferences.php
│   │       │   │   │   ├── ReplacementFilterFactory.php
│   │       │   │   │   ├── RfcComplianceException.php
│   │       │   │   │   ├── SendmailTransport.php
│   │       │   │   │   ├── Signer.php
│   │       │   │   │   ├── Signers
│   │       │   │   │   │   ├── BodySigner.php
│   │       │   │   │   │   ├── DKIMSigner.php
│   │       │   │   │   │   ├── DomainKeySigner.php
│   │       │   │   │   │   ├── HeaderSigner.php
│   │       │   │   │   │   ├── OpenDKIMSigner.php
│   │       │   │   │   │   └── SMimeSigner.php
│   │       │   │   │   ├── SmtpTransport.php
│   │       │   │   │   ├── Spool.php
│   │       │   │   │   ├── SpoolTransport.php
│   │       │   │   │   ├── StreamFilter.php
│   │       │   │   │   ├── StreamFilters
│   │       │   │   │   │   ├── ByteArrayReplacementFilter.php
│   │       │   │   │   │   ├── StringReplacementFilterFactory.php
│   │       │   │   │   │   └── StringReplacementFilter.php
│   │       │   │   │   ├── SwiftException.php
│   │       │   │   │   ├── Transport
│   │       │   │   │   │   ├── AbstractSmtpTransport.php
│   │       │   │   │   │   ├── Esmtp
│   │       │   │   │   │   │   ├── Auth
│   │       │   │   │   │   │   │   ├── CramMd5Authenticator.php
│   │       │   │   │   │   │   │   ├── LoginAuthenticator.php
│   │       │   │   │   │   │   │   ├── NTLMAuthenticator.php
│   │       │   │   │   │   │   │   ├── PlainAuthenticator.php
│   │       │   │   │   │   │   │   └── XOAuth2Authenticator.php
│   │       │   │   │   │   │   ├── Authenticator.php
│   │       │   │   │   │   │   ├── AuthHandler.php
│   │       │   │   │   │   │   ├── EightBitMimeHandler.php
│   │       │   │   │   │   │   └── SmtpUtf8Handler.php
│   │       │   │   │   │   ├── EsmtpHandler.php
│   │       │   │   │   │   ├── EsmtpTransport.php
│   │       │   │   │   │   ├── FailoverTransport.php
│   │       │   │   │   │   ├── IoBuffer.php
│   │       │   │   │   │   ├── LoadBalancedTransport.php
│   │       │   │   │   │   ├── NullTransport.php
│   │       │   │   │   │   ├── SendmailTransport.php
│   │       │   │   │   │   ├── SmtpAgent.php
│   │       │   │   │   │   ├── SpoolTransport.php
│   │       │   │   │   │   └── StreamBuffer.php
│   │       │   │   │   ├── TransportException.php
│   │       │   │   │   └── Transport.php
│   │       │   │   └── Swift.php
│   │       │   ├── dependency_maps
│   │       │   │   ├── cache_deps.php
│   │       │   │   ├── message_deps.php
│   │       │   │   ├── mime_deps.php
│   │       │   │   └── transport_deps.php
│   │       │   ├── mime_types.php
│   │       │   ├── preferences.php
│   │       │   ├── swiftmailer_generate_mimes_config.php
│   │       │   └── swift_required.php
│   │       ├── LICENSE
│   │       ├── phpunit.xml.dist
│   │       ├── README
│   │       └── tests
│   │           ├── acceptance
│   │           │   └── Swift
│   │           │       ├── AttachmentAcceptanceTest.php
│   │           │       ├── ByteStream
│   │           │       │   └── FileByteStreamAcceptanceTest.php
│   │           │       ├── CharacterReaderFactory
│   │           │       │   └── SimpleCharacterReaderFactoryAcceptanceTest.php
│   │           │       ├── DependencyContainerAcceptanceTest.php
│   │           │       ├── EmbeddedFileAcceptanceTest.php
│   │           │       ├── Encoder
│   │           │       │   ├── Base64EncoderAcceptanceTest.php
│   │           │       │   ├── QpEncoderAcceptanceTest.php
│   │           │       │   └── Rfc2231EncoderAcceptanceTest.php
│   │           │       ├── KeyCache
│   │           │       │   ├── ArrayKeyCacheAcceptanceTest.php
│   │           │       │   └── DiskKeyCacheAcceptanceTest.php
│   │           │       ├── MessageAcceptanceTest.php
│   │           │       ├── Mime
│   │           │       │   ├── AttachmentAcceptanceTest.php
│   │           │       │   ├── ContentEncoder
│   │           │       │   │   ├── Base64ContentEncoderAcceptanceTest.php
│   │           │       │   │   ├── NativeQpContentEncoderAcceptanceTest.php
│   │           │       │   │   ├── PlainContentEncoderAcceptanceTest.php
│   │           │       │   │   └── QpContentEncoderAcceptanceTest.php
│   │           │       │   ├── EmbeddedFileAcceptanceTest.php
│   │           │       │   ├── HeaderEncoder
│   │           │       │   │   └── Base64HeaderEncoderAcceptanceTest.php
│   │           │       │   ├── MimePartAcceptanceTest.php
│   │           │       │   └── SimpleMessageAcceptanceTest.php
│   │           │       ├── MimePartAcceptanceTest.php
│   │           │       └── Transport
│   │           │           └── StreamBuffer
│   │           │               ├── AbstractStreamBufferAcceptanceTest.php
│   │           │               ├── BasicSocketAcceptanceTest.php
│   │           │               ├── ProcessAcceptanceTest.php
│   │           │               ├── SocketTimeoutTest.php
│   │           │               ├── SslSocketAcceptanceTest.php
│   │           │               └── TlsSocketAcceptanceTest.php
│   │           ├── acceptance.conf.php.default
│   │           ├── bootstrap.php
│   │           ├── bug
│   │           │   └── Swift
│   │           │       ├── Bug111Test.php
│   │           │       ├── Bug118Test.php
│   │           │       ├── Bug206Test.php
│   │           │       ├── Bug274Test.php
│   │           │       ├── Bug34Test.php
│   │           │       ├── Bug35Test.php
│   │           │       ├── Bug38Test.php
│   │           │       ├── Bug518Test.php
│   │           │       ├── Bug51Test.php
│   │           │       ├── Bug534Test.php
│   │           │       ├── Bug650Test.php
│   │           │       ├── Bug71Test.php
│   │           │       ├── Bug76Test.php
│   │           │       └── BugFileByteStreamConsecutiveReadCallsTest.php
│   │           ├── fixtures
│   │           │   └── MimeEntityFixture.php
│   │           ├── IdenticalBinaryConstraint.php
│   │           ├── _samples
│   │           │   ├── charsets
│   │           │   │   ├── iso-2022-jp
│   │           │   │   │   └── one.txt
│   │           │   │   ├── iso-8859-1
│   │           │   │   │   └── one.txt
│   │           │   │   └── utf-8
│   │           │   │       ├── one.txt
│   │           │   │       ├── three.txt
│   │           │   │       └── two.txt
│   │           │   ├── dkim
│   │           │   │   ├── dkim.test.priv
│   │           │   │   └── dkim.test.pub
│   │           │   ├── files
│   │           │   │   ├── data.txt
│   │           │   │   ├── swiftmailer.png
│   │           │   │   └── textfile.zip
│   │           │   └── smime
│   │           │       ├── ca.crt
│   │           │       ├── ca.key
│   │           │       ├── CA.srl
│   │           │       ├── create-cert.sh
│   │           │       ├── encrypt2.crt
│   │           │       ├── encrypt2.key
│   │           │       ├── encrypt.crt
│   │           │       ├── encrypt.key
│   │           │       ├── intermediate.crt
│   │           │       ├── intermediate.key
│   │           │       ├── sign2.crt
│   │           │       ├── sign2.key
│   │           │       ├── sign.crt
│   │           │       └── sign.key
│   │           ├── smoke
│   │           │   └── Swift
│   │           │       └── Smoke
│   │           │           ├── AttachmentSmokeTest.php
│   │           │           ├── BasicSmokeTest.php
│   │           │           ├── HtmlWithAttachmentSmokeTest.php
│   │           │           └── InternationalSmokeTest.php
│   │           ├── smoke.conf.php.default
│   │           ├── StreamCollector.php
│   │           ├── SwiftMailerSmokeTestCase.php
│   │           ├── SwiftMailerTestCase.php
│   │           └── unit
│   │               └── Swift
│   │                   ├── ByteStream
│   │                   │   └── ArrayByteStreamTest.php
│   │                   ├── CharacterReader
│   │                   │   ├── GenericFixedWidthReaderTest.php
│   │                   │   ├── UsAsciiReaderTest.php
│   │                   │   └── Utf8ReaderTest.php
│   │                   ├── CharacterStream
│   │                   │   └── ArrayCharacterStreamTest.php
│   │                   ├── DependencyContainerTest.php
│   │                   ├── Encoder
│   │                   │   ├── Base64EncoderTest.php
│   │                   │   ├── QpEncoderTest.php
│   │                   │   └── Rfc2231EncoderTest.php
│   │                   ├── Events
│   │                   │   ├── CommandEventTest.php
│   │                   │   ├── EventObjectTest.php
│   │                   │   ├── ResponseEventTest.php
│   │                   │   ├── SendEventTest.php
│   │                   │   ├── SimpleEventDispatcherTest.php
│   │                   │   ├── TransportChangeEventTest.php
│   │                   │   └── TransportExceptionEventTest.php
│   │                   ├── KeyCache
│   │                   │   ├── ArrayKeyCacheTest.php
│   │                   │   └── SimpleKeyCacheInputStreamTest.php
│   │                   ├── Mailer
│   │                   │   └── ArrayRecipientIteratorTest.php
│   │                   ├── MailerTest.php
│   │                   ├── MessageTest.php
│   │                   ├── Mime
│   │                   │   ├── AbstractMimeEntityTest.php
│   │                   │   ├── AttachmentTest.php
│   │                   │   ├── ContentEncoder
│   │                   │   │   ├── Base64ContentEncoderTest.php
│   │                   │   │   ├── PlainContentEncoderTest.php
│   │                   │   │   └── QpContentEncoderTest.php
│   │                   │   ├── EmbeddedFileTest.php
│   │                   │   ├── HeaderEncoder
│   │                   │   │   ├── Base64HeaderEncoderTest.php
│   │                   │   │   └── QpHeaderEncoderTest.php
│   │                   │   ├── Headers
│   │                   │   │   ├── DateHeaderTest.php
│   │                   │   │   ├── IdentificationHeaderTest.php
│   │                   │   │   ├── MailboxHeaderTest.php
│   │                   │   │   ├── ParameterizedHeaderTest.php
│   │                   │   │   ├── PathHeaderTest.php
│   │                   │   │   └── UnstructuredHeaderTest.php
│   │                   │   ├── IdGeneratorTest.php
│   │                   │   ├── MimePartTest.php
│   │                   │   ├── SimpleHeaderFactoryTest.php
│   │                   │   ├── SimpleHeaderSetTest.php
│   │                   │   ├── SimpleMessageTest.php
│   │                   │   └── SimpleMimeEntityTest.php
│   │                   ├── Plugins
│   │                   │   ├── AntiFloodPluginTest.php
│   │                   │   ├── BandwidthMonitorPluginTest.php
│   │                   │   ├── DecoratorPluginTest.php
│   │                   │   ├── LoggerPluginTest.php
│   │                   │   ├── Loggers
│   │                   │   │   ├── ArrayLoggerTest.php
│   │                   │   │   └── EchoLoggerTest.php
│   │                   │   ├── PopBeforeSmtpPluginTest.php
│   │                   │   ├── RedirectingPluginTest.php
│   │                   │   ├── ReporterPluginTest.php
│   │                   │   ├── Reporters
│   │                   │   │   ├── HitReporterTest.php
│   │                   │   │   └── HtmlReporterTest.php
│   │                   │   └── ThrottlerPluginTest.php
│   │                   ├── Signers
│   │                   │   ├── DKIMSignerTest.php
│   │                   │   ├── OpenDKIMSignerTest.php
│   │                   │   └── SMimeSignerTest.php
│   │                   ├── StreamFilters
│   │                   │   ├── ByteArrayReplacementFilterTest.php
│   │                   │   ├── StringReplacementFilterFactoryTest.php
│   │                   │   └── StringReplacementFilterTest.php
│   │                   └── Transport
│   │                       ├── AbstractSmtpEventSupportTest.php
│   │                       ├── AbstractSmtpTest.php
│   │                       ├── Esmtp
│   │                       │   ├── Auth
│   │                       │   │   ├── CramMd5AuthenticatorTest.php
│   │                       │   │   ├── LoginAuthenticatorTest.php
│   │                       │   │   ├── NTLMAuthenticatorTest.php
│   │                       │   │   └── PlainAuthenticatorTest.php
│   │                       │   └── AuthHandlerTest.php
│   │                       ├── EsmtpTransport
│   │                       │   └── ExtensionSupportTest.php
│   │                       ├── EsmtpTransportTest.php
│   │                       ├── FailoverTransportTest.php
│   │                       ├── LoadBalancedTransportTest.php
│   │                       ├── SendmailTransportTest.php
│   │                       └── StreamBufferTest.php
│   ├── symfony
│   │   ├── console
│   │   │   ├── Application.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── Command
│   │   │   │   ├── Command.php
│   │   │   │   ├── HelpCommand.php
│   │   │   │   ├── ListCommand.php
│   │   │   │   └── LockableTrait.php
│   │   │   ├── CommandLoader
│   │   │   │   ├── CommandLoaderInterface.php
│   │   │   │   ├── ContainerCommandLoader.php
│   │   │   │   └── FactoryCommandLoader.php
│   │   │   ├── composer.json
│   │   │   ├── ConsoleEvents.php
│   │   │   ├── DependencyInjection
│   │   │   │   └── AddConsoleCommandPass.php
│   │   │   ├── Descriptor
│   │   │   │   ├── ApplicationDescription.php
│   │   │   │   ├── DescriptorInterface.php
│   │   │   │   ├── Descriptor.php
│   │   │   │   ├── JsonDescriptor.php
│   │   │   │   ├── MarkdownDescriptor.php
│   │   │   │   ├── TextDescriptor.php
│   │   │   │   └── XmlDescriptor.php
│   │   │   ├── Event
│   │   │   │   ├── ConsoleCommandEvent.php
│   │   │   │   ├── ConsoleErrorEvent.php
│   │   │   │   ├── ConsoleEvent.php
│   │   │   │   └── ConsoleTerminateEvent.php
│   │   │   ├── EventListener
│   │   │   │   └── ErrorListener.php
│   │   │   ├── Exception
│   │   │   │   ├── CommandNotFoundException.php
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── InvalidOptionException.php
│   │   │   │   ├── LogicException.php
│   │   │   │   ├── NamespaceNotFoundException.php
│   │   │   │   └── RuntimeException.php
│   │   │   ├── Formatter
│   │   │   │   ├── OutputFormatterInterface.php
│   │   │   │   ├── OutputFormatter.php
│   │   │   │   ├── OutputFormatterStyleInterface.php
│   │   │   │   ├── OutputFormatterStyle.php
│   │   │   │   └── OutputFormatterStyleStack.php
│   │   │   ├── Helper
│   │   │   │   ├── DebugFormatterHelper.php
│   │   │   │   ├── DescriptorHelper.php
│   │   │   │   ├── FormatterHelper.php
│   │   │   │   ├── HelperInterface.php
│   │   │   │   ├── Helper.php
│   │   │   │   ├── HelperSet.php
│   │   │   │   ├── InputAwareHelper.php
│   │   │   │   ├── ProcessHelper.php
│   │   │   │   ├── ProgressBar.php
│   │   │   │   ├── ProgressIndicator.php
│   │   │   │   ├── QuestionHelper.php
│   │   │   │   ├── SymfonyQuestionHelper.php
│   │   │   │   ├── TableCell.php
│   │   │   │   ├── Table.php
│   │   │   │   ├── TableRows.php
│   │   │   │   ├── TableSeparator.php
│   │   │   │   └── TableStyle.php
│   │   │   ├── Input
│   │   │   │   ├── ArgvInput.php
│   │   │   │   ├── ArrayInput.php
│   │   │   │   ├── InputArgument.php
│   │   │   │   ├── InputAwareInterface.php
│   │   │   │   ├── InputDefinition.php
│   │   │   │   ├── InputInterface.php
│   │   │   │   ├── InputOption.php
│   │   │   │   ├── Input.php
│   │   │   │   ├── StreamableInputInterface.php
│   │   │   │   └── StringInput.php
│   │   │   ├── LICENSE
│   │   │   ├── Logger
│   │   │   │   └── ConsoleLogger.php
│   │   │   ├── Output
│   │   │   │   ├── BufferedOutput.php
│   │   │   │   ├── ConsoleOutputInterface.php
│   │   │   │   ├── ConsoleOutput.php
│   │   │   │   ├── ConsoleSectionOutput.php
│   │   │   │   ├── NullOutput.php
│   │   │   │   ├── OutputInterface.php
│   │   │   │   ├── Output.php
│   │   │   │   └── StreamOutput.php
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── Question
│   │   │   │   ├── ChoiceQuestion.php
│   │   │   │   ├── ConfirmationQuestion.php
│   │   │   │   └── Question.php
│   │   │   ├── README.md
│   │   │   ├── Resources
│   │   │   │   └── bin
│   │   │   │       └── hiddeninput.exe
│   │   │   ├── Style
│   │   │   │   ├── OutputStyle.php
│   │   │   │   ├── StyleInterface.php
│   │   │   │   └── SymfonyStyle.php
│   │   │   ├── Terminal.php
│   │   │   ├── Tester
│   │   │   │   ├── ApplicationTester.php
│   │   │   │   ├── CommandTester.php
│   │   │   │   └── TesterTrait.php
│   │   │   └── Tests
│   │   │       ├── ApplicationTest.php
│   │   │       ├── Command
│   │   │       │   ├── CommandTest.php
│   │   │       │   ├── HelpCommandTest.php
│   │   │       │   ├── ListCommandTest.php
│   │   │       │   └── LockableTraitTest.php
│   │   │       ├── CommandLoader
│   │   │       │   ├── ContainerCommandLoaderTest.php
│   │   │       │   └── FactoryCommandLoaderTest.php
│   │   │       ├── DependencyInjection
│   │   │       │   └── AddConsoleCommandPassTest.php
│   │   │       ├── Descriptor
│   │   │       │   ├── AbstractDescriptorTest.php
│   │   │       │   ├── JsonDescriptorTest.php
│   │   │       │   ├── MarkdownDescriptorTest.php
│   │   │       │   ├── ObjectsProvider.php
│   │   │       │   ├── TextDescriptorTest.php
│   │   │       │   └── XmlDescriptorTest.php
│   │   │       ├── EventListener
│   │   │       │   └── ErrorListenerTest.php
│   │   │       ├── Fixtures
│   │   │       │   ├── application_1.json
│   │   │       │   ├── application_1.md
│   │   │       │   ├── application_1.txt
│   │   │       │   ├── application_1.xml
│   │   │       │   ├── application_2.json
│   │   │       │   ├── application_2.md
│   │   │       │   ├── application_2.txt
│   │   │       │   ├── application_2.xml
│   │   │       │   ├── application_filtered_namespace.txt
│   │   │       │   ├── application_gethelp.txt
│   │   │       │   ├── application_mbstring.md
│   │   │       │   ├── application_mbstring.txt
│   │   │       │   ├── application_renderexception1.txt
│   │   │       │   ├── application_renderexception2.txt
│   │   │       │   ├── application_renderexception3decorated.txt
│   │   │       │   ├── application_renderexception3.txt
│   │   │       │   ├── application_renderexception4.txt
│   │   │       │   ├── application_renderexception_doublewidth1decorated.txt
│   │   │       │   ├── application_renderexception_doublewidth1.txt
│   │   │       │   ├── application_renderexception_doublewidth2.txt
│   │   │       │   ├── application_renderexception_escapeslines.txt
│   │   │       │   ├── application_renderexception_linebreaks.txt
│   │   │       │   ├── application_run1.txt
│   │   │       │   ├── application_run2.txt
│   │   │       │   ├── application_run3.txt
│   │   │       │   ├── application_run4.txt
│   │   │       │   ├── BarBucCommand.php
│   │   │       │   ├── command_1.json
│   │   │       │   ├── command_1.md
│   │   │       │   ├── command_1.txt
│   │   │       │   ├── command_1.xml
│   │   │       │   ├── command_2.json
│   │   │       │   ├── command_2.md
│   │   │       │   ├── command_2.txt
│   │   │       │   ├── command_2.xml
│   │   │       │   ├── command_mbstring.md
│   │   │       │   ├── command_mbstring.txt
│   │   │       │   ├── DescriptorApplication1.php
│   │   │       │   ├── DescriptorApplication2.php
│   │   │       │   ├── DescriptorApplicationMbString.php
│   │   │       │   ├── DescriptorCommand1.php
│   │   │       │   ├── DescriptorCommand2.php
│   │   │       │   ├── DescriptorCommand3.php
│   │   │       │   ├── DescriptorCommand4.php
│   │   │       │   ├── DescriptorCommandMbString.php
│   │   │       │   ├── DummyOutput.php
│   │   │       │   ├── Foo1Command.php
│   │   │       │   ├── Foo2Command.php
│   │   │       │   ├── Foo3Command.php
│   │   │       │   ├── Foo4Command.php
│   │   │       │   ├── Foo5Command.php
│   │   │       │   ├── Foo6Command.php
│   │   │       │   ├── FoobarCommand.php
│   │   │       │   ├── FooCommand.php
│   │   │       │   ├── FooLock2Command.php
│   │   │       │   ├── FooLockCommand.php
│   │   │       │   ├── FooOptCommand.php
│   │   │       │   ├── FooSameCaseLowercaseCommand.php
│   │   │       │   ├── FooSameCaseUppercaseCommand.php
│   │   │       │   ├── FooSubnamespaced1Command.php
│   │   │       │   ├── FooSubnamespaced2Command.php
│   │   │       │   ├── FooWithoutAliasCommand.php
│   │   │       │   ├── input_argument_1.json
│   │   │       │   ├── input_argument_1.md
│   │   │       │   ├── input_argument_1.txt
│   │   │       │   ├── input_argument_1.xml
│   │   │       │   ├── input_argument_2.json
│   │   │       │   ├── input_argument_2.md
│   │   │       │   ├── input_argument_2.txt
│   │   │       │   ├── input_argument_2.xml
│   │   │       │   ├── input_argument_3.json
│   │   │       │   ├── input_argument_3.md
│   │   │       │   ├── input_argument_3.txt
│   │   │       │   ├── input_argument_3.xml
│   │   │       │   ├── input_argument_4.json
│   │   │       │   ├── input_argument_4.md
│   │   │       │   ├── input_argument_4.txt
│   │   │       │   ├── input_argument_4.xml
│   │   │       │   ├── input_argument_with_default_inf_value.json
│   │   │       │   ├── input_argument_with_default_inf_value.md
│   │   │       │   ├── input_argument_with_default_inf_value.txt
│   │   │       │   ├── input_argument_with_default_inf_value.xml
│   │   │       │   ├── input_argument_with_style.json
│   │   │       │   ├── input_argument_with_style.md
│   │   │       │   ├── input_argument_with_style.txt
│   │   │       │   ├── input_argument_with_style.xml
│   │   │       │   ├── input_definition_1.json
│   │   │       │   ├── input_definition_1.md
│   │   │       │   ├── input_definition_1.txt
│   │   │       │   ├── input_definition_1.xml
│   │   │       │   ├── input_definition_2.json
│   │   │       │   ├── input_definition_2.md
│   │   │       │   ├── input_definition_2.txt
│   │   │       │   ├── input_definition_2.xml
│   │   │       │   ├── input_definition_3.json
│   │   │       │   ├── input_definition_3.md
│   │   │       │   ├── input_definition_3.txt
│   │   │       │   ├── input_definition_3.xml
│   │   │       │   ├── input_definition_4.json
│   │   │       │   ├── input_definition_4.md
│   │   │       │   ├── input_definition_4.txt
│   │   │       │   ├── input_definition_4.xml
│   │   │       │   ├── input_option_1.json
│   │   │       │   ├── input_option_1.md
│   │   │       │   ├── input_option_1.txt
│   │   │       │   ├── input_option_1.xml
│   │   │       │   ├── input_option_2.json
│   │   │       │   ├── input_option_2.md
│   │   │       │   ├── input_option_2.txt
│   │   │       │   ├── input_option_2.xml
│   │   │       │   ├── input_option_3.json
│   │   │       │   ├── input_option_3.md
│   │   │       │   ├── input_option_3.txt
│   │   │       │   ├── input_option_3.xml
│   │   │       │   ├── input_option_4.json
│   │   │       │   ├── input_option_4.md
│   │   │       │   ├── input_option_4.txt
│   │   │       │   ├── input_option_4.xml
│   │   │       │   ├── input_option_5.json
│   │   │       │   ├── input_option_5.md
│   │   │       │   ├── input_option_5.txt
│   │   │       │   ├── input_option_5.xml
│   │   │       │   ├── input_option_6.json
│   │   │       │   ├── input_option_6.md
│   │   │       │   ├── input_option_6.txt
│   │   │       │   ├── input_option_6.xml
│   │   │       │   ├── input_option_with_default_inf_value.json
│   │   │       │   ├── input_option_with_default_inf_value.md
│   │   │       │   ├── input_option_with_default_inf_value.txt
│   │   │       │   ├── input_option_with_default_inf_value.xml
│   │   │       │   ├── input_option_with_style_array.json
│   │   │       │   ├── input_option_with_style_array.md
│   │   │       │   ├── input_option_with_style_array.txt
│   │   │       │   ├── input_option_with_style_array.xml
│   │   │       │   ├── input_option_with_style.json
│   │   │       │   ├── input_option_with_style.md
│   │   │       │   ├── input_option_with_style.txt
│   │   │       │   ├── input_option_with_style.xml
│   │   │       │   ├── Style
│   │   │       │   │   └── SymfonyStyle
│   │   │       │   │       ├── command
│   │   │       │   │       │   ├── command_0.php
│   │   │       │   │       │   ├── command_10.php
│   │   │       │   │       │   ├── command_11.php
│   │   │       │   │       │   ├── command_12.php
│   │   │       │   │       │   ├── command_13.php
│   │   │       │   │       │   ├── command_14.php
│   │   │       │   │       │   ├── command_15.php
│   │   │       │   │       │   ├── command_16.php
│   │   │       │   │       │   ├── command_17.php
│   │   │       │   │       │   ├── command_1.php
│   │   │       │   │       │   ├── command_2.php
│   │   │       │   │       │   ├── command_3.php
│   │   │       │   │       │   ├── command_4.php
│   │   │       │   │       │   ├── command_4_with_iterators.php
│   │   │       │   │       │   ├── command_5.php
│   │   │       │   │       │   ├── command_6.php
│   │   │       │   │       │   ├── command_7.php
│   │   │       │   │       │   ├── command_8.php
│   │   │       │   │       │   ├── command_9.php
│   │   │       │   │       │   └── interactive_command_1.php
│   │   │       │   │       └── output
│   │   │       │   │           ├── interactive_output_1.txt
│   │   │       │   │           ├── output_0.txt
│   │   │       │   │           ├── output_10.txt
│   │   │       │   │           ├── output_11.txt
│   │   │       │   │           ├── output_12.txt
│   │   │       │   │           ├── output_13.txt
│   │   │       │   │           ├── output_14.txt
│   │   │       │   │           ├── output_15.txt
│   │   │       │   │           ├── output_16.txt
│   │   │       │   │           ├── output_17.txt
│   │   │       │   │           ├── output_1.txt
│   │   │       │   │           ├── output_2.txt
│   │   │       │   │           ├── output_3.txt
│   │   │       │   │           ├── output_4.txt
│   │   │       │   │           ├── output_4_with_iterators.txt
│   │   │       │   │           ├── output_5.txt
│   │   │       │   │           ├── output_6.txt
│   │   │       │   │           ├── output_7.txt
│   │   │       │   │           ├── output_8.txt
│   │   │       │   │           └── output_9.txt
│   │   │       │   ├── TestCommand.php
│   │   │       │   ├── TestTiti.php
│   │   │       │   └── TestToto.php
│   │   │       ├── Formatter
│   │   │       │   ├── OutputFormatterStyleStackTest.php
│   │   │       │   ├── OutputFormatterStyleTest.php
│   │   │       │   └── OutputFormatterTest.php
│   │   │       ├── Helper
│   │   │       │   ├── AbstractQuestionHelperTest.php
│   │   │       │   ├── FormatterHelperTest.php
│   │   │       │   ├── HelperSetTest.php
│   │   │       │   ├── HelperTest.php
│   │   │       │   ├── ProcessHelperTest.php
│   │   │       │   ├── ProgressBarTest.php
│   │   │       │   ├── ProgressIndicatorTest.php
│   │   │       │   ├── QuestionHelperTest.php
│   │   │       │   ├── SymfonyQuestionHelperTest.php
│   │   │       │   ├── TableStyleTest.php
│   │   │       │   └── TableTest.php
│   │   │       ├── Input
│   │   │       │   ├── ArgvInputTest.php
│   │   │       │   ├── ArrayInputTest.php
│   │   │       │   ├── InputArgumentTest.php
│   │   │       │   ├── InputDefinitionTest.php
│   │   │       │   ├── InputOptionTest.php
│   │   │       │   ├── InputTest.php
│   │   │       │   └── StringInputTest.php
│   │   │       ├── Logger
│   │   │       │   └── ConsoleLoggerTest.php
│   │   │       ├── Output
│   │   │       │   ├── ConsoleOutputTest.php
│   │   │       │   ├── ConsoleSectionOutputTest.php
│   │   │       │   ├── NullOutputTest.php
│   │   │       │   ├── OutputTest.php
│   │   │       │   └── StreamOutputTest.php
│   │   │       ├── Style
│   │   │       │   └── SymfonyStyleTest.php
│   │   │       ├── TerminalTest.php
│   │   │       └── Tester
│   │   │           ├── ApplicationTesterTest.php
│   │   │           └── CommandTesterTest.php
│   │   ├── css-selector
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── CssSelectorConverter.php
│   │   │   ├── Exception
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── ExpressionErrorException.php
│   │   │   │   ├── InternalErrorException.php
│   │   │   │   ├── ParseException.php
│   │   │   │   └── SyntaxErrorException.php
│   │   │   ├── LICENSE
│   │   │   ├── Node
│   │   │   │   ├── AbstractNode.php
│   │   │   │   ├── AttributeNode.php
│   │   │   │   ├── ClassNode.php
│   │   │   │   ├── CombinedSelectorNode.php
│   │   │   │   ├── ElementNode.php
│   │   │   │   ├── FunctionNode.php
│   │   │   │   ├── HashNode.php
│   │   │   │   ├── NegationNode.php
│   │   │   │   ├── NodeInterface.php
│   │   │   │   ├── PseudoNode.php
│   │   │   │   ├── SelectorNode.php
│   │   │   │   └── Specificity.php
│   │   │   ├── Parser
│   │   │   │   ├── Handler
│   │   │   │   │   ├── CommentHandler.php
│   │   │   │   │   ├── HandlerInterface.php
│   │   │   │   │   ├── HashHandler.php
│   │   │   │   │   ├── IdentifierHandler.php
│   │   │   │   │   ├── NumberHandler.php
│   │   │   │   │   ├── StringHandler.php
│   │   │   │   │   └── WhitespaceHandler.php
│   │   │   │   ├── ParserInterface.php
│   │   │   │   ├── Parser.php
│   │   │   │   ├── Reader.php
│   │   │   │   ├── Shortcut
│   │   │   │   │   ├── ClassParser.php
│   │   │   │   │   ├── ElementParser.php
│   │   │   │   │   ├── EmptyStringParser.php
│   │   │   │   │   └── HashParser.php
│   │   │   │   ├── Tokenizer
│   │   │   │   │   ├── TokenizerEscaping.php
│   │   │   │   │   ├── TokenizerPatterns.php
│   │   │   │   │   └── Tokenizer.php
│   │   │   │   ├── Token.php
│   │   │   │   └── TokenStream.php
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   ├── Tests
│   │   │   │   ├── CssSelectorConverterTest.php
│   │   │   │   ├── Node
│   │   │   │   │   ├── AbstractNodeTest.php
│   │   │   │   │   ├── AttributeNodeTest.php
│   │   │   │   │   ├── ClassNodeTest.php
│   │   │   │   │   ├── CombinedSelectorNodeTest.php
│   │   │   │   │   ├── ElementNodeTest.php
│   │   │   │   │   ├── FunctionNodeTest.php
│   │   │   │   │   ├── HashNodeTest.php
│   │   │   │   │   ├── NegationNodeTest.php
│   │   │   │   │   ├── PseudoNodeTest.php
│   │   │   │   │   ├── SelectorNodeTest.php
│   │   │   │   │   └── SpecificityTest.php
│   │   │   │   ├── Parser
│   │   │   │   │   ├── Handler
│   │   │   │   │   │   ├── AbstractHandlerTest.php
│   │   │   │   │   │   ├── CommentHandlerTest.php
│   │   │   │   │   │   ├── HashHandlerTest.php
│   │   │   │   │   │   ├── IdentifierHandlerTest.php
│   │   │   │   │   │   ├── NumberHandlerTest.php
│   │   │   │   │   │   ├── StringHandlerTest.php
│   │   │   │   │   │   └── WhitespaceHandlerTest.php
│   │   │   │   │   ├── ParserTest.php
│   │   │   │   │   ├── ReaderTest.php
│   │   │   │   │   ├── Shortcut
│   │   │   │   │   │   ├── ClassParserTest.php
│   │   │   │   │   │   ├── ElementParserTest.php
│   │   │   │   │   │   ├── EmptyStringParserTest.php
│   │   │   │   │   │   └── HashParserTest.php
│   │   │   │   │   └── TokenStreamTest.php
│   │   │   │   └── XPath
│   │   │   │       ├── Fixtures
│   │   │   │       │   ├── ids.html
│   │   │   │       │   ├── lang.xml
│   │   │   │       │   └── shakespear.html
│   │   │   │       └── TranslatorTest.php
│   │   │   └── XPath
│   │   │       ├── Extension
│   │   │       │   ├── AbstractExtension.php
│   │   │       │   ├── AttributeMatchingExtension.php
│   │   │       │   ├── CombinationExtension.php
│   │   │       │   ├── ExtensionInterface.php
│   │   │       │   ├── FunctionExtension.php
│   │   │       │   ├── HtmlExtension.php
│   │   │       │   ├── NodeExtension.php
│   │   │       │   └── PseudoClassExtension.php
│   │   │       ├── TranslatorInterface.php
│   │   │       ├── Translator.php
│   │   │       └── XPathExpr.php
│   │   ├── debug
│   │   │   ├── BufferingLogger.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── DebugClassLoader.php
│   │   │   ├── Debug.php
│   │   │   ├── ErrorHandler.php
│   │   │   ├── Exception
│   │   │   │   ├── ClassNotFoundException.php
│   │   │   │   ├── FatalErrorException.php
│   │   │   │   ├── FatalThrowableError.php
│   │   │   │   ├── FlattenException.php
│   │   │   │   ├── OutOfMemoryException.php
│   │   │   │   ├── SilencedErrorContext.php
│   │   │   │   ├── UndefinedFunctionException.php
│   │   │   │   └── UndefinedMethodException.php
│   │   │   ├── ExceptionHandler.php
│   │   │   ├── FatalErrorHandler
│   │   │   │   ├── ClassNotFoundFatalErrorHandler.php
│   │   │   │   ├── FatalErrorHandlerInterface.php
│   │   │   │   ├── UndefinedFunctionFatalErrorHandler.php
│   │   │   │   └── UndefinedMethodFatalErrorHandler.php
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   └── Tests
│   │   │       ├── DebugClassLoaderTest.php
│   │   │       ├── ErrorHandlerTest.php
│   │   │       ├── Exception
│   │   │       │   └── FlattenExceptionTest.php
│   │   │       ├── ExceptionHandlerTest.php
│   │   │       ├── FatalErrorHandler
│   │   │       │   ├── ClassNotFoundFatalErrorHandlerTest.php
│   │   │       │   ├── UndefinedFunctionFatalErrorHandlerTest.php
│   │   │       │   └── UndefinedMethodFatalErrorHandlerTest.php
│   │   │       ├── Fixtures
│   │   │       │   ├── AnnotatedClass.php
│   │   │       │   ├── casemismatch.php
│   │   │       │   ├── ClassAlias.php
│   │   │       │   ├── DeprecatedClass.php
│   │   │       │   ├── DeprecatedInterface.php
│   │   │       │   ├── ExtendedFinalMethod.php
│   │   │       │   ├── FinalClass.php
│   │   │       │   ├── FinalMethod2Trait.php
│   │   │       │   ├── FinalMethod.php
│   │   │       │   ├── InternalClass.php
│   │   │       │   ├── InternalInterface.php
│   │   │       │   ├── InternalTrait2.php
│   │   │       │   ├── InternalTrait.php
│   │   │       │   ├── NonDeprecatedInterface.php
│   │   │       │   ├── notPsr0Bis.php
│   │   │       │   ├── PEARClass.php
│   │   │       │   ├── psr4
│   │   │       │   │   └── Psr4CaseMismatch.php
│   │   │       │   ├── reallyNotPsr0.php
│   │   │       │   ├── Throwing.php
│   │   │       │   ├── ToStringThrower.php
│   │   │       │   └── TraitWithInternalMethod.php
│   │   │       ├── Fixtures2
│   │   │       │   └── RequiredTwice.php
│   │   │       ├── HeaderMock.php
│   │   │       ├── MockExceptionHandler.php
│   │   │       └── phpt
│   │   │           ├── debug_class_loader.phpt
│   │   │           ├── decorate_exception_hander.phpt
│   │   │           ├── exception_rethrown.phpt
│   │   │           └── fatal_with_nested_handlers.phpt
│   │   ├── event-dispatcher
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── Debug
│   │   │   │   ├── TraceableEventDispatcherInterface.php
│   │   │   │   ├── TraceableEventDispatcher.php
│   │   │   │   └── WrappedListener.php
│   │   │   ├── DependencyInjection
│   │   │   │   └── RegisterListenersPass.php
│   │   │   ├── EventDispatcherInterface.php
│   │   │   ├── EventDispatcher.php
│   │   │   ├── Event.php
│   │   │   ├── EventSubscriberInterface.php
│   │   │   ├── GenericEvent.php
│   │   │   ├── ImmutableEventDispatcher.php
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   └── Tests
│   │   │       ├── AbstractEventDispatcherTest.php
│   │   │       ├── Debug
│   │   │       │   └── TraceableEventDispatcherTest.php
│   │   │       ├── DependencyInjection
│   │   │       │   └── RegisterListenersPassTest.php
│   │   │       ├── EventDispatcherTest.php
│   │   │       ├── EventTest.php
│   │   │       ├── GenericEventTest.php
│   │   │       └── ImmutableEventDispatcherTest.php
│   │   ├── finder
│   │   │   ├── CHANGELOG.md
│   │   │   ├── Comparator
│   │   │   │   ├── Comparator.php
│   │   │   │   ├── DateComparator.php
│   │   │   │   └── NumberComparator.php
│   │   │   ├── composer.json
│   │   │   ├── Exception
│   │   │   │   └── AccessDeniedException.php
│   │   │   ├── Finder.php
│   │   │   ├── Glob.php
│   │   │   ├── Iterator
│   │   │   │   ├── CustomFilterIterator.php
│   │   │   │   ├── DateRangeFilterIterator.php
│   │   │   │   ├── DepthRangeFilterIterator.php
│   │   │   │   ├── ExcludeDirectoryFilterIterator.php
│   │   │   │   ├── FilecontentFilterIterator.php
│   │   │   │   ├── FilenameFilterIterator.php
│   │   │   │   ├── FileTypeFilterIterator.php
│   │   │   │   ├── MultiplePcreFilterIterator.php
│   │   │   │   ├── PathFilterIterator.php
│   │   │   │   ├── RecursiveDirectoryIterator.php
│   │   │   │   ├── SizeRangeFilterIterator.php
│   │   │   │   └── SortableIterator.php
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   ├── SplFileInfo.php
│   │   │   └── Tests
│   │   │       ├── Comparator
│   │   │       │   ├── ComparatorTest.php
│   │   │       │   ├── DateComparatorTest.php
│   │   │       │   └── NumberComparatorTest.php
│   │   │       ├── FinderTest.php
│   │   │       ├── Fixtures
│   │   │       │   ├── A
│   │   │       │   │   ├── a.dat
│   │   │       │   │   └── B
│   │   │       │   │       ├── ab.dat
│   │   │       │   │       └── C
│   │   │       │   │           └── abc.dat
│   │   │       │   ├── copy
│   │   │       │   │   └── A
│   │   │       │   │       ├── a.dat.copy
│   │   │       │   │       └── B
│   │   │       │   │           ├── ab.dat.copy
│   │   │       │   │           └── C
│   │   │       │   │               └── abc.dat.copy
│   │   │       │   ├── dolor.txt
│   │   │       │   ├── ipsum.txt
│   │   │       │   ├── lorem.txt
│   │   │       │   ├── one
│   │   │       │   │   ├── a
│   │   │       │   │   └── b
│   │   │       │   │       ├── c.neon
│   │   │       │   │       └── d.neon
│   │   │       │   ├── r+e.gex[c]a(r)s
│   │   │       │   │   └── dir
│   │   │       │   │       └── bar.dat
│   │   │       │   └── with space
│   │   │       │       └── foo.txt
│   │   │       ├── GlobTest.php
│   │   │       └── Iterator
│   │   │           ├── CustomFilterIteratorTest.php
│   │   │           ├── DateRangeFilterIteratorTest.php
│   │   │           ├── DepthRangeFilterIteratorTest.php
│   │   │           ├── ExcludeDirectoryFilterIteratorTest.php
│   │   │           ├── FilecontentFilterIteratorTest.php
│   │   │           ├── FilenameFilterIteratorTest.php
│   │   │           ├── FileTypeFilterIteratorTest.php
│   │   │           ├── Iterator.php
│   │   │           ├── IteratorTestCase.php
│   │   │           ├── MockFileListIterator.php
│   │   │           ├── MockSplFileInfo.php
│   │   │           ├── MultiplePcreFilterIteratorTest.php
│   │   │           ├── PathFilterIteratorTest.php
│   │   │           ├── RealIteratorTestCase.php
│   │   │           ├── RecursiveDirectoryIteratorTest.php
│   │   │           ├── SizeRangeFilterIteratorTest.php
│   │   │           └── SortableIteratorTest.php
│   │   ├── http-foundation
│   │   │   ├── AcceptHeaderItem.php
│   │   │   ├── AcceptHeader.php
│   │   │   ├── ApacheRequest.php
│   │   │   ├── BinaryFileResponse.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── Cookie.php
│   │   │   ├── Exception
│   │   │   │   ├── ConflictingHeadersException.php
│   │   │   │   ├── RequestExceptionInterface.php
│   │   │   │   └── SuspiciousOperationException.php
│   │   │   ├── ExpressionRequestMatcher.php
│   │   │   ├── File
│   │   │   │   ├── Exception
│   │   │   │   │   ├── AccessDeniedException.php
│   │   │   │   │   ├── CannotWriteFileException.php
│   │   │   │   │   ├── ExtensionFileException.php
│   │   │   │   │   ├── FileException.php
│   │   │   │   │   ├── FileNotFoundException.php
│   │   │   │   │   ├── FormSizeFileException.php
│   │   │   │   │   ├── IniSizeFileException.php
│   │   │   │   │   ├── NoFileException.php
│   │   │   │   │   ├── NoTmpDirFileException.php
│   │   │   │   │   ├── PartialFileException.php
│   │   │   │   │   ├── UnexpectedTypeException.php
│   │   │   │   │   └── UploadException.php
│   │   │   │   ├── File.php
│   │   │   │   ├── MimeType
│   │   │   │   │   ├── ExtensionGuesserInterface.php
│   │   │   │   │   ├── ExtensionGuesser.php
│   │   │   │   │   ├── FileBinaryMimeTypeGuesser.php
│   │   │   │   │   ├── FileinfoMimeTypeGuesser.php
│   │   │   │   │   ├── MimeTypeExtensionGuesser.php
│   │   │   │   │   ├── MimeTypeGuesserInterface.php
│   │   │   │   │   └── MimeTypeGuesser.php
│   │   │   │   ├── Stream.php
│   │   │   │   └── UploadedFile.php
│   │   │   ├── FileBag.php
│   │   │   ├── HeaderBag.php
│   │   │   ├── HeaderUtils.php
│   │   │   ├── IpUtils.php
│   │   │   ├── JsonResponse.php
│   │   │   ├── LICENSE
│   │   │   ├── ParameterBag.php
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   ├── RedirectResponse.php
│   │   │   ├── RequestMatcherInterface.php
│   │   │   ├── RequestMatcher.php
│   │   │   ├── Request.php
│   │   │   ├── RequestStack.php
│   │   │   ├── ResponseHeaderBag.php
│   │   │   ├── Response.php
│   │   │   ├── ServerBag.php
│   │   │   ├── Session
│   │   │   │   ├── Attribute
│   │   │   │   │   ├── AttributeBagInterface.php
│   │   │   │   │   ├── AttributeBag.php
│   │   │   │   │   └── NamespacedAttributeBag.php
│   │   │   │   ├── Flash
│   │   │   │   │   ├── AutoExpireFlashBag.php
│   │   │   │   │   ├── FlashBagInterface.php
│   │   │   │   │   └── FlashBag.php
│   │   │   │   ├── SessionBagInterface.php
│   │   │   │   ├── SessionBagProxy.php
│   │   │   │   ├── SessionInterface.php
│   │   │   │   ├── Session.php
│   │   │   │   └── Storage
│   │   │   │       ├── Handler
│   │   │   │       │   ├── AbstractSessionHandler.php
│   │   │   │       │   ├── MemcachedSessionHandler.php
│   │   │   │       │   ├── MigratingSessionHandler.php
│   │   │   │       │   ├── MongoDbSessionHandler.php
│   │   │   │       │   ├── NativeFileSessionHandler.php
│   │   │   │       │   ├── NullSessionHandler.php
│   │   │   │       │   ├── PdoSessionHandler.php
│   │   │   │       │   ├── RedisSessionHandler.php
│   │   │   │       │   └── StrictSessionHandler.php
│   │   │   │       ├── MetadataBag.php
│   │   │   │       ├── MockArraySessionStorage.php
│   │   │   │       ├── MockFileSessionStorage.php
│   │   │   │       ├── NativeSessionStorage.php
│   │   │   │       ├── PhpBridgeSessionStorage.php
│   │   │   │       ├── Proxy
│   │   │   │       │   ├── AbstractProxy.php
│   │   │   │       │   └── SessionHandlerProxy.php
│   │   │   │       └── SessionStorageInterface.php
│   │   │   ├── StreamedResponse.php
│   │   │   └── Tests
│   │   │       ├── AcceptHeaderItemTest.php
│   │   │       ├── AcceptHeaderTest.php
│   │   │       ├── ApacheRequestTest.php
│   │   │       ├── BinaryFileResponseTest.php
│   │   │       ├── CookieTest.php
│   │   │       ├── ExpressionRequestMatcherTest.php
│   │   │       ├── File
│   │   │       │   ├── FakeFile.php
│   │   │       │   ├── FileTest.php
│   │   │       │   ├── Fixtures
│   │   │       │   │   ├── directory
│   │   │       │   │   ├── other-file.example
│   │   │       │   │   ├── test
│   │   │       │   │   └── test.gif
│   │   │       │   ├── MimeType
│   │   │       │   │   └── MimeTypeTest.php
│   │   │       │   └── UploadedFileTest.php
│   │   │       ├── FileBagTest.php
│   │   │       ├── Fixtures
│   │   │       │   └── response-functional
│   │   │       │       ├── common.inc
│   │   │       │       ├── cookie_max_age.expected
│   │   │       │       ├── cookie_max_age.php
│   │   │       │       ├── cookie_raw_urlencode.expected
│   │   │       │       ├── cookie_raw_urlencode.php
│   │   │       │       ├── cookie_samesite_lax.expected
│   │   │       │       ├── cookie_samesite_lax.php
│   │   │       │       ├── cookie_samesite_strict.expected
│   │   │       │       ├── cookie_samesite_strict.php
│   │   │       │       ├── cookie_urlencode.expected
│   │   │       │       ├── cookie_urlencode.php
│   │   │       │       ├── invalid_cookie_name.expected
│   │   │       │       └── invalid_cookie_name.php
│   │   │       ├── HeaderBagTest.php
│   │   │       ├── HeaderUtilsTest.php
│   │   │       ├── IpUtilsTest.php
│   │   │       ├── JsonResponseTest.php
│   │   │       ├── ParameterBagTest.php
│   │   │       ├── RedirectResponseTest.php
│   │   │       ├── RequestMatcherTest.php
│   │   │       ├── RequestStackTest.php
│   │   │       ├── RequestTest.php
│   │   │       ├── ResponseFunctionalTest.php
│   │   │       ├── ResponseHeaderBagTest.php
│   │   │       ├── ResponseTestCase.php
│   │   │       ├── ResponseTest.php
│   │   │       ├── schema
│   │   │       │   ├── http-status-codes.rng
│   │   │       │   └── iana-registry.rng
│   │   │       ├── ServerBagTest.php
│   │   │       ├── Session
│   │   │       │   ├── Attribute
│   │   │       │   │   ├── AttributeBagTest.php
│   │   │       │   │   └── NamespacedAttributeBagTest.php
│   │   │       │   ├── Flash
│   │   │       │   │   ├── AutoExpireFlashBagTest.php
│   │   │       │   │   └── FlashBagTest.php
│   │   │       │   ├── SessionTest.php
│   │   │       │   └── Storage
│   │   │       │       ├── Handler
│   │   │       │       │   ├── AbstractRedisSessionHandlerTestCase.php
│   │   │       │       │   ├── AbstractSessionHandlerTest.php
│   │   │       │       │   ├── Fixtures
│   │   │       │       │   │   ├── common.inc
│   │   │       │       │   │   ├── empty_destroys.expected
│   │   │       │       │   │   ├── empty_destroys.php
│   │   │       │       │   │   ├── read_only.expected
│   │   │       │       │   │   ├── read_only.php
│   │   │       │       │   │   ├── regenerate.expected
│   │   │       │       │   │   ├── regenerate.php
│   │   │       │       │   │   ├── storage.expected
│   │   │       │       │   │   ├── storage.php
│   │   │       │       │   │   ├── with_cookie_and_session.expected
│   │   │       │       │   │   ├── with_cookie_and_session.php
│   │   │       │       │   │   ├── with_cookie.expected
│   │   │       │       │   │   └── with_cookie.php
│   │   │       │       │   ├── MemcachedSessionHandlerTest.php
│   │   │       │       │   ├── MigratingSessionHandlerTest.php
│   │   │       │       │   ├── MongoDbSessionHandlerTest.php
│   │   │       │       │   ├── NativeFileSessionHandlerTest.php
│   │   │       │       │   ├── NullSessionHandlerTest.php
│   │   │       │       │   ├── PdoSessionHandlerTest.php
│   │   │       │       │   ├── PredisClusterSessionHandlerTest.php
│   │   │       │       │   ├── PredisSessionHandlerTest.php
│   │   │       │       │   ├── RedisArraySessionHandlerTest.php
│   │   │       │       │   ├── RedisClusterSessionHandlerTest.php
│   │   │       │       │   ├── RedisSessionHandlerTest.php
│   │   │       │       │   └── StrictSessionHandlerTest.php
│   │   │       │       ├── MetadataBagTest.php
│   │   │       │       ├── MockArraySessionStorageTest.php
│   │   │       │       ├── MockFileSessionStorageTest.php
│   │   │       │       ├── NativeSessionStorageTest.php
│   │   │       │       ├── PhpBridgeSessionStorageTest.php
│   │   │       │       └── Proxy
│   │   │       │           ├── AbstractProxyTest.php
│   │   │       │           └── SessionHandlerProxyTest.php
│   │   │       └── StreamedResponseTest.php
│   │   ├── http-kernel
│   │   │   ├── Bundle
│   │   │   │   ├── BundleInterface.php
│   │   │   │   └── Bundle.php
│   │   │   ├── CacheClearer
│   │   │   │   ├── CacheClearerInterface.php
│   │   │   │   ├── ChainCacheClearer.php
│   │   │   │   └── Psr6CacheClearer.php
│   │   │   ├── CacheWarmer
│   │   │   │   ├── CacheWarmerAggregate.php
│   │   │   │   ├── CacheWarmerInterface.php
│   │   │   │   ├── CacheWarmer.php
│   │   │   │   └── WarmableInterface.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── Client.php
│   │   │   ├── composer.json
│   │   │   ├── Config
│   │   │   │   └── FileLocator.php
│   │   │   ├── Controller
│   │   │   │   ├── ArgumentResolver
│   │   │   │   │   ├── DefaultValueResolver.php
│   │   │   │   │   ├── RequestAttributeValueResolver.php
│   │   │   │   │   ├── RequestValueResolver.php
│   │   │   │   │   ├── ServiceValueResolver.php
│   │   │   │   │   ├── SessionValueResolver.php
│   │   │   │   │   ├── TraceableValueResolver.php
│   │   │   │   │   └── VariadicValueResolver.php
│   │   │   │   ├── ArgumentResolverInterface.php
│   │   │   │   ├── ArgumentResolver.php
│   │   │   │   ├── ArgumentValueResolverInterface.php
│   │   │   │   ├── ContainerControllerResolver.php
│   │   │   │   ├── ControllerReference.php
│   │   │   │   ├── ControllerResolverInterface.php
│   │   │   │   ├── ControllerResolver.php
│   │   │   │   ├── TraceableArgumentResolver.php
│   │   │   │   └── TraceableControllerResolver.php
│   │   │   ├── ControllerMetadata
│   │   │   │   ├── ArgumentMetadataFactoryInterface.php
│   │   │   │   ├── ArgumentMetadataFactory.php
│   │   │   │   └── ArgumentMetadata.php
│   │   │   ├── DataCollector
│   │   │   │   ├── AjaxDataCollector.php
│   │   │   │   ├── ConfigDataCollector.php
│   │   │   │   ├── DataCollectorInterface.php
│   │   │   │   ├── DataCollector.php
│   │   │   │   ├── DumpDataCollector.php
│   │   │   │   ├── EventDataCollector.php
│   │   │   │   ├── ExceptionDataCollector.php
│   │   │   │   ├── LateDataCollectorInterface.php
│   │   │   │   ├── LoggerDataCollector.php
│   │   │   │   ├── MemoryDataCollector.php
│   │   │   │   ├── RequestDataCollector.php
│   │   │   │   ├── RouterDataCollector.php
│   │   │   │   └── TimeDataCollector.php
│   │   │   ├── Debug
│   │   │   │   ├── FileLinkFormatter.php
│   │   │   │   └── TraceableEventDispatcher.php
│   │   │   ├── DependencyInjection
│   │   │   │   ├── AddAnnotatedClassesToCachePass.php
│   │   │   │   ├── ConfigurableExtension.php
│   │   │   │   ├── ControllerArgumentValueResolverPass.php
│   │   │   │   ├── Extension.php
│   │   │   │   ├── FragmentRendererPass.php
│   │   │   │   ├── LazyLoadingFragmentHandler.php
│   │   │   │   ├── LoggerPass.php
│   │   │   │   ├── MergeExtensionConfigurationPass.php
│   │   │   │   ├── RegisterControllerArgumentLocatorsPass.php
│   │   │   │   ├── RemoveEmptyControllerArgumentLocatorsPass.php
│   │   │   │   ├── ResettableServicePass.php
│   │   │   │   └── ServicesResetter.php
│   │   │   ├── Event
│   │   │   │   ├── FilterControllerArgumentsEvent.php
│   │   │   │   ├── FilterControllerEvent.php
│   │   │   │   ├── FilterResponseEvent.php
│   │   │   │   ├── FinishRequestEvent.php
│   │   │   │   ├── GetResponseEvent.php
│   │   │   │   ├── GetResponseForControllerResultEvent.php
│   │   │   │   ├── GetResponseForExceptionEvent.php
│   │   │   │   ├── KernelEvent.php
│   │   │   │   └── PostResponseEvent.php
│   │   │   ├── EventListener
│   │   │   │   ├── AbstractSessionListener.php
│   │   │   │   ├── AbstractTestSessionListener.php
│   │   │   │   ├── AddRequestFormatsListener.php
│   │   │   │   ├── DebugHandlersListener.php
│   │   │   │   ├── DumpListener.php
│   │   │   │   ├── ExceptionListener.php
│   │   │   │   ├── FragmentListener.php
│   │   │   │   ├── LocaleListener.php
│   │   │   │   ├── ProfilerListener.php
│   │   │   │   ├── ResponseListener.php
│   │   │   │   ├── RouterListener.php
│   │   │   │   ├── SaveSessionListener.php
│   │   │   │   ├── SessionListener.php
│   │   │   │   ├── StreamedResponseListener.php
│   │   │   │   ├── SurrogateListener.php
│   │   │   │   ├── TestSessionListener.php
│   │   │   │   ├── TranslatorListener.php
│   │   │   │   └── ValidateRequestListener.php
│   │   │   ├── Exception
│   │   │   │   ├── AccessDeniedHttpException.php
│   │   │   │   ├── BadRequestHttpException.php
│   │   │   │   ├── ConflictHttpException.php
│   │   │   │   ├── GoneHttpException.php
│   │   │   │   ├── HttpExceptionInterface.php
│   │   │   │   ├── HttpException.php
│   │   │   │   ├── LengthRequiredHttpException.php
│   │   │   │   ├── MethodNotAllowedHttpException.php
│   │   │   │   ├── NotAcceptableHttpException.php
│   │   │   │   ├── NotFoundHttpException.php
│   │   │   │   ├── PreconditionFailedHttpException.php
│   │   │   │   ├── PreconditionRequiredHttpException.php
│   │   │   │   ├── ServiceUnavailableHttpException.php
│   │   │   │   ├── TooManyRequestsHttpException.php
│   │   │   │   ├── UnauthorizedHttpException.php
│   │   │   │   ├── UnprocessableEntityHttpException.php
│   │   │   │   └── UnsupportedMediaTypeHttpException.php
│   │   │   ├── Fragment
│   │   │   │   ├── AbstractSurrogateFragmentRenderer.php
│   │   │   │   ├── EsiFragmentRenderer.php
│   │   │   │   ├── FragmentHandler.php
│   │   │   │   ├── FragmentRendererInterface.php
│   │   │   │   ├── HIncludeFragmentRenderer.php
│   │   │   │   ├── InlineFragmentRenderer.php
│   │   │   │   ├── RoutableFragmentRenderer.php
│   │   │   │   └── SsiFragmentRenderer.php
│   │   │   ├── HttpCache
│   │   │   │   ├── AbstractSurrogate.php
│   │   │   │   ├── Esi.php
│   │   │   │   ├── HttpCache.php
│   │   │   │   ├── ResponseCacheStrategyInterface.php
│   │   │   │   ├── ResponseCacheStrategy.php
│   │   │   │   ├── Ssi.php
│   │   │   │   ├── StoreInterface.php
│   │   │   │   ├── Store.php
│   │   │   │   ├── SubRequestHandler.php
│   │   │   │   └── SurrogateInterface.php
│   │   │   ├── HttpKernelInterface.php
│   │   │   ├── HttpKernel.php
│   │   │   ├── KernelEvents.php
│   │   │   ├── KernelInterface.php
│   │   │   ├── Kernel.php
│   │   │   ├── LICENSE
│   │   │   ├── Log
│   │   │   │   ├── DebugLoggerInterface.php
│   │   │   │   └── Logger.php
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── Profiler
│   │   │   │   ├── FileProfilerStorage.php
│   │   │   │   ├── Profile.php
│   │   │   │   ├── Profiler.php
│   │   │   │   └── ProfilerStorageInterface.php
│   │   │   ├── README.md
│   │   │   ├── RebootableInterface.php
│   │   │   ├── Resources
│   │   │   │   └── welcome.html.php
│   │   │   ├── TerminableInterface.php
│   │   │   ├── Tests
│   │   │   │   ├── Bundle
│   │   │   │   │   └── BundleTest.php
│   │   │   │   ├── CacheClearer
│   │   │   │   │   ├── ChainCacheClearerTest.php
│   │   │   │   │   └── Psr6CacheClearerTest.php
│   │   │   │   ├── CacheWarmer
│   │   │   │   │   ├── CacheWarmerAggregateTest.php
│   │   │   │   │   └── CacheWarmerTest.php
│   │   │   │   ├── ClientTest.php
│   │   │   │   ├── Config
│   │   │   │   │   └── FileLocatorTest.php
│   │   │   │   ├── Controller
│   │   │   │   │   ├── ArgumentResolver
│   │   │   │   │   │   ├── ServiceValueResolverTest.php
│   │   │   │   │   │   └── TraceableValueResolverTest.php
│   │   │   │   │   ├── ArgumentResolverTest.php
│   │   │   │   │   ├── ContainerControllerResolverTest.php
│   │   │   │   │   └── ControllerResolverTest.php
│   │   │   │   ├── ControllerMetadata
│   │   │   │   │   ├── ArgumentMetadataFactoryTest.php
│   │   │   │   │   └── ArgumentMetadataTest.php
│   │   │   │   ├── DataCollector
│   │   │   │   │   ├── Compiler.log
│   │   │   │   │   ├── ConfigDataCollectorTest.php
│   │   │   │   │   ├── DataCollectorTest.php
│   │   │   │   │   ├── DumpDataCollectorTest.php
│   │   │   │   │   ├── ExceptionDataCollectorTest.php
│   │   │   │   │   ├── LoggerDataCollectorTest.php
│   │   │   │   │   ├── MemoryDataCollectorTest.php
│   │   │   │   │   ├── RequestDataCollectorTest.php
│   │   │   │   │   └── TimeDataCollectorTest.php
│   │   │   │   ├── Debug
│   │   │   │   │   ├── FileLinkFormatterTest.php
│   │   │   │   │   └── TraceableEventDispatcherTest.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   ├── AddAnnotatedClassesToCachePassTest.php
│   │   │   │   │   ├── ControllerArgumentValueResolverPassTest.php
│   │   │   │   │   ├── FragmentRendererPassTest.php
│   │   │   │   │   ├── LazyLoadingFragmentHandlerTest.php
│   │   │   │   │   ├── LoggerPassTest.php
│   │   │   │   │   ├── MergeExtensionConfigurationPassTest.php
│   │   │   │   │   ├── RegisterControllerArgumentLocatorsPassTest.php
│   │   │   │   │   ├── RemoveEmptyControllerArgumentLocatorsPassTest.php
│   │   │   │   │   ├── ResettableServicePassTest.php
│   │   │   │   │   └── ServicesResetterTest.php
│   │   │   │   ├── Event
│   │   │   │   │   ├── FilterControllerArgumentsEventTest.php
│   │   │   │   │   └── GetResponseForExceptionEventTest.php
│   │   │   │   ├── EventListener
│   │   │   │   │   ├── AddRequestFormatsListenerTest.php
│   │   │   │   │   ├── DebugHandlersListenerTest.php
│   │   │   │   │   ├── DumpListenerTest.php
│   │   │   │   │   ├── ExceptionListenerTest.php
│   │   │   │   │   ├── FragmentListenerTest.php
│   │   │   │   │   ├── LocaleListenerTest.php
│   │   │   │   │   ├── ProfilerListenerTest.php
│   │   │   │   │   ├── ResponseListenerTest.php
│   │   │   │   │   ├── RouterListenerTest.php
│   │   │   │   │   ├── SaveSessionListenerTest.php
│   │   │   │   │   ├── SessionListenerTest.php
│   │   │   │   │   ├── SurrogateListenerTest.php
│   │   │   │   │   ├── TestSessionListenerTest.php
│   │   │   │   │   ├── TranslatorListenerTest.php
│   │   │   │   │   └── ValidateRequestListenerTest.php
│   │   │   │   ├── Exception
│   │   │   │   │   ├── AccessDeniedHttpExceptionTest.php
│   │   │   │   │   ├── BadRequestHttpExceptionTest.php
│   │   │   │   │   ├── ConflictHttpExceptionTest.php
│   │   │   │   │   ├── GoneHttpExceptionTest.php
│   │   │   │   │   ├── HttpExceptionTest.php
│   │   │   │   │   ├── LengthRequiredHttpExceptionTest.php
│   │   │   │   │   ├── MethodNotAllowedHttpExceptionTest.php
│   │   │   │   │   ├── NotAcceptableHttpExceptionTest.php
│   │   │   │   │   ├── NotFoundHttpExceptionTest.php
│   │   │   │   │   ├── PreconditionFailedHttpExceptionTest.php
│   │   │   │   │   ├── PreconditionRequiredHttpExceptionTest.php
│   │   │   │   │   ├── ServiceUnavailableHttpExceptionTest.php
│   │   │   │   │   ├── TooManyRequestsHttpExceptionTest.php
│   │   │   │   │   ├── UnauthorizedHttpExceptionTest.php
│   │   │   │   │   ├── UnprocessableEntityHttpExceptionTest.php
│   │   │   │   │   └── UnsupportedMediaTypeHttpExceptionTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── 123
│   │   │   │   │   │   └── Kernel123.php
│   │   │   │   │   ├── BaseBundle
│   │   │   │   │   │   └── Resources
│   │   │   │   │   │       ├── foo.txt
│   │   │   │   │   │       └── hide.txt
│   │   │   │   │   ├── Bundle1Bundle
│   │   │   │   │   │   ├── bar.txt
│   │   │   │   │   │   ├── foo.txt
│   │   │   │   │   │   └── Resources
│   │   │   │   │   │       └── foo.txt
│   │   │   │   │   ├── Bundle2Bundle
│   │   │   │   │   │   └── foo.txt
│   │   │   │   │   ├── ChildBundle
│   │   │   │   │   │   └── Resources
│   │   │   │   │   │       ├── foo.txt
│   │   │   │   │   │       └── hide.txt
│   │   │   │   │   ├── ClearableService.php
│   │   │   │   │   ├── Controller
│   │   │   │   │   │   ├── BasicTypesController.php
│   │   │   │   │   │   ├── ExtendingRequest.php
│   │   │   │   │   │   ├── ExtendingSession.php
│   │   │   │   │   │   ├── NullableController.php
│   │   │   │   │   │   └── VariadicController.php
│   │   │   │   │   ├── DataCollector
│   │   │   │   │   │   └── CloneVarDataCollector.php
│   │   │   │   │   ├── ExtensionAbsentBundle
│   │   │   │   │   │   └── ExtensionAbsentBundle.php
│   │   │   │   │   ├── ExtensionLoadedBundle
│   │   │   │   │   │   ├── DependencyInjection
│   │   │   │   │   │   │   └── ExtensionLoadedExtension.php
│   │   │   │   │   │   └── ExtensionLoadedBundle.php
│   │   │   │   │   ├── ExtensionNotValidBundle
│   │   │   │   │   │   ├── DependencyInjection
│   │   │   │   │   │   │   └── ExtensionNotValidExtension.php
│   │   │   │   │   │   └── ExtensionNotValidBundle.php
│   │   │   │   │   ├── ExtensionPresentBundle
│   │   │   │   │   │   ├── Command
│   │   │   │   │   │   │   ├── BarCommand.php
│   │   │   │   │   │   │   └── FooCommand.php
│   │   │   │   │   │   ├── DependencyInjection
│   │   │   │   │   │   │   └── ExtensionPresentExtension.php
│   │   │   │   │   │   └── ExtensionPresentBundle.php
│   │   │   │   │   ├── KernelForOverrideName.php
│   │   │   │   │   ├── KernelForTest.php
│   │   │   │   │   ├── KernelWithoutBundles.php
│   │   │   │   │   ├── ResettableService.php
│   │   │   │   │   ├── Resources
│   │   │   │   │   │   ├── BaseBundle
│   │   │   │   │   │   │   └── hide.txt
│   │   │   │   │   │   ├── Bundle1Bundle
│   │   │   │   │   │   │   └── foo.txt
│   │   │   │   │   │   ├── ChildBundle
│   │   │   │   │   │   │   └── foo.txt
│   │   │   │   │   │   └── FooBundle
│   │   │   │   │   │       └── foo.txt
│   │   │   │   │   ├── TestClient.php
│   │   │   │   │   └── TestEventDispatcher.php
│   │   │   │   ├── Fragment
│   │   │   │   │   ├── EsiFragmentRendererTest.php
│   │   │   │   │   ├── FragmentHandlerTest.php
│   │   │   │   │   ├── HIncludeFragmentRendererTest.php
│   │   │   │   │   ├── InlineFragmentRendererTest.php
│   │   │   │   │   ├── RoutableFragmentRendererTest.php
│   │   │   │   │   └── SsiFragmentRendererTest.php
│   │   │   │   ├── HttpCache
│   │   │   │   │   ├── EsiTest.php
│   │   │   │   │   ├── HttpCacheTestCase.php
│   │   │   │   │   ├── HttpCacheTest.php
│   │   │   │   │   ├── ResponseCacheStrategyTest.php
│   │   │   │   │   ├── SsiTest.php
│   │   │   │   │   ├── StoreTest.php
│   │   │   │   │   ├── SubRequestHandlerTest.php
│   │   │   │   │   ├── TestHttpKernel.php
│   │   │   │   │   └── TestMultipleHttpKernel.php
│   │   │   │   ├── HttpKernelTest.php
│   │   │   │   ├── KernelTest.php
│   │   │   │   ├── Log
│   │   │   │   │   └── LoggerTest.php
│   │   │   │   ├── Logger.php
│   │   │   │   ├── Profiler
│   │   │   │   │   ├── FileProfilerStorageTest.php
│   │   │   │   │   └── ProfilerTest.php
│   │   │   │   ├── TestHttpKernel.php
│   │   │   │   └── UriSignerTest.php
│   │   │   └── UriSigner.php
│   │   ├── polyfill-ctype
│   │   │   ├── bootstrap.php
│   │   │   ├── composer.json
│   │   │   ├── Ctype.php
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── polyfill-mbstring
│   │   │   ├── bootstrap.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── Mbstring.php
│   │   │   ├── README.md
│   │   │   └── Resources
│   │   │       └── unidata
│   │   │           ├── lowerCase.php
│   │   │           ├── titleCaseRegexp.php
│   │   │           └── upperCase.php
│   │   ├── polyfill-php72
│   │   │   ├── bootstrap.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── Php72.php
│   │   │   └── README.md
│   │   ├── process
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── Exception
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── LogicException.php
│   │   │   │   ├── ProcessFailedException.php
│   │   │   │   ├── ProcessSignaledException.php
│   │   │   │   ├── ProcessTimedOutException.php
│   │   │   │   └── RuntimeException.php
│   │   │   ├── ExecutableFinder.php
│   │   │   ├── InputStream.php
│   │   │   ├── LICENSE
│   │   │   ├── PhpExecutableFinder.php
│   │   │   ├── PhpProcess.php
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── Pipes
│   │   │   │   ├── AbstractPipes.php
│   │   │   │   ├── PipesInterface.php
│   │   │   │   ├── UnixPipes.php
│   │   │   │   └── WindowsPipes.php
│   │   │   ├── Process.php
│   │   │   ├── ProcessUtils.php
│   │   │   ├── README.md
│   │   │   └── Tests
│   │   │       ├── ExecutableFinderTest.php
│   │   │       ├── NonStopableProcess.php
│   │   │       ├── PhpExecutableFinderTest.php
│   │   │       ├── PhpProcessTest.php
│   │   │       ├── PipeStdinInStdoutStdErrStreamSelect.php
│   │   │       ├── ProcessFailedExceptionTest.php
│   │   │       ├── ProcessTest.php
│   │   │       └── SignalListener.php
│   │   ├── routing
│   │   │   ├── Annotation
│   │   │   │   └── Route.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── CompiledRoute.php
│   │   │   ├── composer.json
│   │   │   ├── DependencyInjection
│   │   │   │   └── RoutingResolverPass.php
│   │   │   ├── Exception
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── InvalidParameterException.php
│   │   │   │   ├── MethodNotAllowedException.php
│   │   │   │   ├── MissingMandatoryParametersException.php
│   │   │   │   ├── NoConfigurationException.php
│   │   │   │   ├── ResourceNotFoundException.php
│   │   │   │   └── RouteNotFoundException.php
│   │   │   ├── Generator
│   │   │   │   ├── ConfigurableRequirementsInterface.php
│   │   │   │   ├── Dumper
│   │   │   │   │   ├── GeneratorDumperInterface.php
│   │   │   │   │   ├── GeneratorDumper.php
│   │   │   │   │   └── PhpGeneratorDumper.php
│   │   │   │   ├── UrlGeneratorInterface.php
│   │   │   │   └── UrlGenerator.php
│   │   │   ├── LICENSE
│   │   │   ├── Loader
│   │   │   │   ├── AnnotationClassLoader.php
│   │   │   │   ├── AnnotationDirectoryLoader.php
│   │   │   │   ├── AnnotationFileLoader.php
│   │   │   │   ├── ClosureLoader.php
│   │   │   │   ├── Configurator
│   │   │   │   │   ├── CollectionConfigurator.php
│   │   │   │   │   ├── ImportConfigurator.php
│   │   │   │   │   ├── RouteConfigurator.php
│   │   │   │   │   ├── RoutingConfigurator.php
│   │   │   │   │   └── Traits
│   │   │   │   │       ├── AddTrait.php
│   │   │   │   │       └── RouteTrait.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   └── ServiceRouterLoader.php
│   │   │   │   ├── DirectoryLoader.php
│   │   │   │   ├── GlobFileLoader.php
│   │   │   │   ├── ObjectRouteLoader.php
│   │   │   │   ├── PhpFileLoader.php
│   │   │   │   ├── schema
│   │   │   │   │   └── routing
│   │   │   │   │       └── routing-1.0.xsd
│   │   │   │   ├── XmlFileLoader.php
│   │   │   │   └── YamlFileLoader.php
│   │   │   ├── Matcher
│   │   │   │   ├── Dumper
│   │   │   │   │   ├── MatcherDumperInterface.php
│   │   │   │   │   ├── MatcherDumper.php
│   │   │   │   │   ├── PhpMatcherDumper.php
│   │   │   │   │   └── StaticPrefixCollection.php
│   │   │   │   ├── RedirectableUrlMatcherInterface.php
│   │   │   │   ├── RedirectableUrlMatcher.php
│   │   │   │   ├── RequestMatcherInterface.php
│   │   │   │   ├── TraceableUrlMatcher.php
│   │   │   │   ├── UrlMatcherInterface.php
│   │   │   │   └── UrlMatcher.php
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   ├── RequestContextAwareInterface.php
│   │   │   ├── RequestContext.php
│   │   │   ├── RouteCollectionBuilder.php
│   │   │   ├── RouteCollection.php
│   │   │   ├── RouteCompilerInterface.php
│   │   │   ├── RouteCompiler.php
│   │   │   ├── Route.php
│   │   │   ├── RouterInterface.php
│   │   │   ├── Router.php
│   │   │   └── Tests
│   │   │       ├── Annotation
│   │   │       │   └── RouteTest.php
│   │   │       ├── CompiledRouteTest.php
│   │   │       ├── DependencyInjection
│   │   │       │   └── RoutingResolverPassTest.php
│   │   │       ├── Fixtures
│   │   │       │   ├── AnnotatedClasses
│   │   │       │   │   ├── AbstractClass.php
│   │   │       │   │   ├── BarClass.php
│   │   │       │   │   ├── BazClass.php
│   │   │       │   │   ├── FooClass.php
│   │   │       │   │   └── FooTrait.php
│   │   │       │   ├── annotated.php
│   │   │       │   ├── AnnotationFixtures
│   │   │       │   │   ├── AbstractClassController.php
│   │   │       │   │   ├── ActionPathController.php
│   │   │       │   │   ├── DefaultValueController.php
│   │   │       │   │   ├── ExplicitLocalizedActionPathController.php
│   │   │       │   │   ├── InvokableController.php
│   │   │       │   │   ├── InvokableLocalizedController.php
│   │   │       │   │   ├── LocalizedActionPathController.php
│   │   │       │   │   ├── LocalizedMethodActionControllers.php
│   │   │       │   │   ├── LocalizedPrefixLocalizedActionController.php
│   │   │       │   │   ├── LocalizedPrefixMissingLocaleActionController.php
│   │   │       │   │   ├── LocalizedPrefixMissingRouteLocaleActionController.php
│   │   │       │   │   ├── LocalizedPrefixWithRouteWithoutLocale.php
│   │   │       │   │   ├── MethodActionControllers.php
│   │   │       │   │   ├── MissingRouteNameController.php
│   │   │       │   │   ├── NothingButNameController.php
│   │   │       │   │   ├── PrefixedActionLocalizedRouteController.php
│   │   │       │   │   ├── PrefixedActionPathController.php
│   │   │       │   │   └── RouteWithPrefixController.php
│   │   │       │   ├── bad_format.yml
│   │   │       │   ├── bar.xml
│   │   │       │   ├── controller
│   │   │       │   │   ├── import__controller.xml
│   │   │       │   │   ├── import_controller.xml
│   │   │       │   │   ├── import__controller.yml
│   │   │       │   │   ├── import_controller.yml
│   │   │       │   │   ├── import_override_defaults.xml
│   │   │       │   │   ├── import_override_defaults.yml
│   │   │       │   │   ├── override_defaults.xml
│   │   │       │   │   ├── override_defaults.yml
│   │   │       │   │   ├── routing.xml
│   │   │       │   │   └── routing.yml
│   │   │       │   ├── CustomCompiledRoute.php
│   │   │       │   ├── CustomRouteCompiler.php
│   │   │       │   ├── CustomXmlFileLoader.php
│   │   │       │   ├── directory
│   │   │       │   │   ├── recurse
│   │   │       │   │   │   ├── routes1.yml
│   │   │       │   │   │   └── routes2.yml
│   │   │       │   │   └── routes3.yml
│   │   │       │   ├── directory_import
│   │   │       │   │   └── import.yml
│   │   │       │   ├── dumper
│   │   │       │   │   ├── url_matcher0.php
│   │   │       │   │   ├── url_matcher10.php
│   │   │       │   │   ├── url_matcher11.php
│   │   │       │   │   ├── url_matcher12.php
│   │   │       │   │   ├── url_matcher13.php
│   │   │       │   │   ├── url_matcher1.php
│   │   │       │   │   ├── url_matcher2.php
│   │   │       │   │   ├── url_matcher3.php
│   │   │       │   │   ├── url_matcher4.php
│   │   │       │   │   ├── url_matcher5.php
│   │   │       │   │   ├── url_matcher6.php
│   │   │       │   │   ├── url_matcher7.php
│   │   │       │   │   ├── url_matcher8.php
│   │   │       │   │   └── url_matcher9.php
│   │   │       │   ├── empty.yml
│   │   │       │   ├── file_resource.yml
│   │   │       │   ├── foo1.xml
│   │   │       │   ├── foo.xml
│   │   │       │   ├── glob
│   │   │       │   │   ├── bar.xml
│   │   │       │   │   ├── bar.yml
│   │   │       │   │   ├── baz.xml
│   │   │       │   │   ├── baz.yml
│   │   │       │   │   ├── import_multiple.xml
│   │   │       │   │   ├── import_multiple.yml
│   │   │       │   │   ├── import_single.xml
│   │   │       │   │   ├── import_single.yml
│   │   │       │   │   ├── php_dsl_bar.php
│   │   │       │   │   ├── php_dsl_baz.php
│   │   │       │   │   └── php_dsl.php
│   │   │       │   ├── import_with_name_prefix
│   │   │       │   │   ├── routing.xml
│   │   │       │   │   └── routing.yml
│   │   │       │   ├── import_with_no_trailing_slash
│   │   │       │   │   ├── routing.xml
│   │   │       │   │   └── routing.yml
│   │   │       │   ├── incomplete.yml
│   │   │       │   ├── list_defaults.xml
│   │   │       │   ├── list_in_list_defaults.xml
│   │   │       │   ├── list_in_map_defaults.xml
│   │   │       │   ├── list_null_values.xml
│   │   │       │   ├── localized
│   │   │       │   │   ├── imported-with-locale-but-not-localized.xml
│   │   │       │   │   ├── imported-with-locale-but-not-localized.yml
│   │   │       │   │   ├── imported-with-locale.xml
│   │   │       │   │   ├── imported-with-locale.yml
│   │   │       │   │   ├── importer-with-controller-default.yml
│   │   │       │   │   ├── importer-with-locale-imports-non-localized-route.xml
│   │   │       │   │   ├── importer-with-locale-imports-non-localized-route.yml
│   │   │       │   │   ├── importer-with-locale.xml
│   │   │       │   │   ├── importer-with-locale.yml
│   │   │       │   │   ├── importing-localized-route.yml
│   │   │       │   │   ├── localized-route.yml
│   │   │       │   │   ├── missing-locale-in-importer.yml
│   │   │       │   │   ├── not-localized.yml
│   │   │       │   │   ├── officially_formatted_locales.yml
│   │   │       │   │   └── route-without-path-or-locales.yml
│   │   │       │   ├── localized.xml
│   │   │       │   ├── map_defaults.xml
│   │   │       │   ├── map_in_list_defaults.xml
│   │   │       │   ├── map_in_map_defaults.xml
│   │   │       │   ├── map_null_values.xml
│   │   │       │   ├── missing_id.xml
│   │   │       │   ├── missing_path.xml
│   │   │       │   ├── namespaceprefix.xml
│   │   │       │   ├── nonesense_resource_plus_path.yml
│   │   │       │   ├── nonesense_type_without_resource.yml
│   │   │       │   ├── nonvalid2.yml
│   │   │       │   ├── nonvalidkeys.yml
│   │   │       │   ├── nonvalidnode.xml
│   │   │       │   ├── nonvalidroute.xml
│   │   │       │   ├── nonvalid.xml
│   │   │       │   ├── nonvalid.yml
│   │   │       │   ├── null_values.xml
│   │   │       │   ├── OtherAnnotatedClasses
│   │   │       │   │   ├── AnonymousClassInTrait.php
│   │   │       │   │   ├── NoStartTagClass.php
│   │   │       │   │   └── VariadicClass.php
│   │   │       │   ├── php_dsl_i18n.php
│   │   │       │   ├── php_dsl.php
│   │   │       │   ├── php_dsl_sub_i18n.php
│   │   │       │   ├── php_dsl_sub.php
│   │   │       │   ├── php_dsl_sub_root.php
│   │   │       │   ├── php_object_dsl.php
│   │   │       │   ├── RedirectableUrlMatcher.php
│   │   │       │   ├── scalar_defaults.xml
│   │   │       │   ├── special_route_name.yml
│   │   │       │   ├── validpattern.php
│   │   │       │   ├── validpattern.xml
│   │   │       │   ├── validpattern.yml
│   │   │       │   ├── validresource.php
│   │   │       │   ├── validresource.xml
│   │   │       │   ├── validresource.yml
│   │   │       │   ├── with_define_path_variable.php
│   │   │       │   └── withdoctype.xml
│   │   │       ├── Generator
│   │   │       │   ├── Dumper
│   │   │       │   │   └── PhpGeneratorDumperTest.php
│   │   │       │   └── UrlGeneratorTest.php
│   │   │       ├── Loader
│   │   │       │   ├── AbstractAnnotationLoaderTest.php
│   │   │       │   ├── AnnotationClassLoaderTest.php
│   │   │       │   ├── AnnotationDirectoryLoaderTest.php
│   │   │       │   ├── AnnotationFileLoaderTest.php
│   │   │       │   ├── ClosureLoaderTest.php
│   │   │       │   ├── DirectoryLoaderTest.php
│   │   │       │   ├── FileLocatorStub.php
│   │   │       │   ├── GlobFileLoaderTest.php
│   │   │       │   ├── ObjectRouteLoaderTest.php
│   │   │       │   ├── PhpFileLoaderTest.php
│   │   │       │   ├── XmlFileLoaderTest.php
│   │   │       │   └── YamlFileLoaderTest.php
│   │   │       ├── Matcher
│   │   │       │   ├── DumpedRedirectableUrlMatcherTest.php
│   │   │       │   ├── DumpedUrlMatcherTest.php
│   │   │       │   ├── Dumper
│   │   │       │   │   ├── PhpMatcherDumperTest.php
│   │   │       │   │   └── StaticPrefixCollectionTest.php
│   │   │       │   ├── RedirectableUrlMatcherTest.php
│   │   │       │   ├── TraceableUrlMatcherTest.php
│   │   │       │   └── UrlMatcherTest.php
│   │   │       ├── RequestContextTest.php
│   │   │       ├── RouteCollectionBuilderTest.php
│   │   │       ├── RouteCollectionTest.php
│   │   │       ├── RouteCompilerTest.php
│   │   │       ├── RouterTest.php
│   │   │       └── RouteTest.php
│   │   ├── translation
│   │   │   ├── Catalogue
│   │   │   │   ├── AbstractOperation.php
│   │   │   │   ├── MergeOperation.php
│   │   │   │   ├── OperationInterface.php
│   │   │   │   └── TargetOperation.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── Command
│   │   │   │   └── XliffLintCommand.php
│   │   │   ├── composer.json
│   │   │   ├── DataCollector
│   │   │   │   └── TranslationDataCollector.php
│   │   │   ├── DataCollectorTranslator.php
│   │   │   ├── DependencyInjection
│   │   │   │   ├── TranslationDumperPass.php
│   │   │   │   ├── TranslationExtractorPass.php
│   │   │   │   └── TranslatorPass.php
│   │   │   ├── Dumper
│   │   │   │   ├── CsvFileDumper.php
│   │   │   │   ├── DumperInterface.php
│   │   │   │   ├── FileDumper.php
│   │   │   │   ├── IcuResFileDumper.php
│   │   │   │   ├── IniFileDumper.php
│   │   │   │   ├── JsonFileDumper.php
│   │   │   │   ├── MoFileDumper.php
│   │   │   │   ├── PhpFileDumper.php
│   │   │   │   ├── PoFileDumper.php
│   │   │   │   ├── QtFileDumper.php
│   │   │   │   ├── XliffFileDumper.php
│   │   │   │   └── YamlFileDumper.php
│   │   │   ├── Exception
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── InvalidResourceException.php
│   │   │   │   ├── LogicException.php
│   │   │   │   ├── NotFoundResourceException.php
│   │   │   │   └── RuntimeException.php
│   │   │   ├── Extractor
│   │   │   │   ├── AbstractFileExtractor.php
│   │   │   │   ├── ChainExtractor.php
│   │   │   │   ├── ExtractorInterface.php
│   │   │   │   ├── PhpExtractor.php
│   │   │   │   └── PhpStringTokenParser.php
│   │   │   ├── Formatter
│   │   │   │   ├── ChoiceMessageFormatterInterface.php
│   │   │   │   ├── MessageFormatterInterface.php
│   │   │   │   └── MessageFormatter.php
│   │   │   ├── IdentityTranslator.php
│   │   │   ├── Interval.php
│   │   │   ├── LICENSE
│   │   │   ├── Loader
│   │   │   │   ├── ArrayLoader.php
│   │   │   │   ├── CsvFileLoader.php
│   │   │   │   ├── FileLoader.php
│   │   │   │   ├── IcuDatFileLoader.php
│   │   │   │   ├── IcuResFileLoader.php
│   │   │   │   ├── IniFileLoader.php
│   │   │   │   ├── JsonFileLoader.php
│   │   │   │   ├── LoaderInterface.php
│   │   │   │   ├── MoFileLoader.php
│   │   │   │   ├── PhpFileLoader.php
│   │   │   │   ├── PoFileLoader.php
│   │   │   │   ├── QtFileLoader.php
│   │   │   │   ├── schema
│   │   │   │   │   └── dic
│   │   │   │   │       └── xliff-core
│   │   │   │   │           ├── xliff-core-1.2-strict.xsd
│   │   │   │   │           ├── xliff-core-2.0.xsd
│   │   │   │   │           └── xml.xsd
│   │   │   │   ├── XliffFileLoader.php
│   │   │   │   └── YamlFileLoader.php
│   │   │   ├── LoggingTranslator.php
│   │   │   ├── MessageCatalogueInterface.php
│   │   │   ├── MessageCatalogue.php
│   │   │   ├── MessageSelector.php
│   │   │   ├── MetadataAwareInterface.php
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── PluralizationRules.php
│   │   │   ├── Reader
│   │   │   │   ├── TranslationReaderInterface.php
│   │   │   │   └── TranslationReader.php
│   │   │   ├── README.md
│   │   │   ├── Resources
│   │   │   │   └── schemas
│   │   │   │       └── xliff-core-1.2-strict.xsd
│   │   │   ├── Tests
│   │   │   │   ├── Catalogue
│   │   │   │   │   ├── AbstractOperationTest.php
│   │   │   │   │   ├── MergeOperationTest.php
│   │   │   │   │   └── TargetOperationTest.php
│   │   │   │   ├── Command
│   │   │   │   │   └── XliffLintCommandTest.php
│   │   │   │   ├── DataCollector
│   │   │   │   │   └── TranslationDataCollectorTest.php
│   │   │   │   ├── DataCollectorTranslatorTest.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   ├── TranslationDumperPassTest.php
│   │   │   │   │   ├── TranslationExtractorPassTest.php
│   │   │   │   │   └── TranslationPassTest.php
│   │   │   │   ├── Dumper
│   │   │   │   │   ├── CsvFileDumperTest.php
│   │   │   │   │   ├── FileDumperTest.php
│   │   │   │   │   ├── IcuResFileDumperTest.php
│   │   │   │   │   ├── IniFileDumperTest.php
│   │   │   │   │   ├── JsonFileDumperTest.php
│   │   │   │   │   ├── MoFileDumperTest.php
│   │   │   │   │   ├── PhpFileDumperTest.php
│   │   │   │   │   ├── PoFileDumperTest.php
│   │   │   │   │   ├── QtFileDumperTest.php
│   │   │   │   │   ├── XliffFileDumperTest.php
│   │   │   │   │   └── YamlFileDumperTest.php
│   │   │   │   ├── Extractor
│   │   │   │   │   └── PhpExtractorTest.php
│   │   │   │   ├── fixtures
│   │   │   │   │   ├── empty.csv
│   │   │   │   │   ├── empty.ini
│   │   │   │   │   ├── empty.json
│   │   │   │   │   ├── empty.mo
│   │   │   │   │   ├── empty.po
│   │   │   │   │   ├── empty-translation.mo
│   │   │   │   │   ├── empty-translation.po
│   │   │   │   │   ├── empty.xlf
│   │   │   │   │   ├── empty.yml
│   │   │   │   │   ├── encoding.xlf
│   │   │   │   │   ├── escaped-id-plurals.po
│   │   │   │   │   ├── escaped-id.po
│   │   │   │   │   ├── extractor
│   │   │   │   │   │   ├── resource.format.engine
│   │   │   │   │   │   ├── this.is.a.template.format.engine
│   │   │   │   │   │   └── translation.html.php
│   │   │   │   │   ├── fuzzy-translations.po
│   │   │   │   │   ├── invalid-xml-resources.xlf
│   │   │   │   │   ├── malformed.json
│   │   │   │   │   ├── messages_linear.yml
│   │   │   │   │   ├── messages.yml
│   │   │   │   │   ├── non-valid.xlf
│   │   │   │   │   ├── non-valid.yml
│   │   │   │   │   ├── plurals.mo
│   │   │   │   │   ├── plurals.po
│   │   │   │   │   ├── resname.xlf
│   │   │   │   │   ├── resourcebundle
│   │   │   │   │   │   ├── corrupted
│   │   │   │   │   │   │   └── resources.dat
│   │   │   │   │   │   ├── dat
│   │   │   │   │   │   │   ├── en.res
│   │   │   │   │   │   │   ├── en.txt
│   │   │   │   │   │   │   ├── fr.res
│   │   │   │   │   │   │   ├── fr.txt
│   │   │   │   │   │   │   ├── packagelist.txt
│   │   │   │   │   │   │   └── resources.dat
│   │   │   │   │   │   └── res
│   │   │   │   │   │       └── en.res
│   │   │   │   │   ├── resources-2.0-clean.xlf
│   │   │   │   │   ├── resources-2.0-multi-segment-unit.xlf
│   │   │   │   │   ├── resources-2.0.xlf
│   │   │   │   │   ├── resources-clean.xlf
│   │   │   │   │   ├── resources.csv
│   │   │   │   │   ├── resources.dump.json
│   │   │   │   │   ├── resources.ini
│   │   │   │   │   ├── resources.json
│   │   │   │   │   ├── resources.mo
│   │   │   │   │   ├── resources-notes-meta.xlf
│   │   │   │   │   ├── resources.php
│   │   │   │   │   ├── resources.po
│   │   │   │   │   ├── resources-target-attributes.xlf
│   │   │   │   │   ├── resources-tool-info.xlf
│   │   │   │   │   ├── resources.ts
│   │   │   │   │   ├── resources.xlf
│   │   │   │   │   ├── resources.yml
│   │   │   │   │   ├── valid.csv
│   │   │   │   │   ├── with-attributes.xlf
│   │   │   │   │   ├── withdoctype.xlf
│   │   │   │   │   └── withnote.xlf
│   │   │   │   ├── Formatter
│   │   │   │   │   └── MessageFormatterTest.php
│   │   │   │   ├── IdentityTranslatorTest.php
│   │   │   │   ├── IntervalTest.php
│   │   │   │   ├── Loader
│   │   │   │   │   ├── CsvFileLoaderTest.php
│   │   │   │   │   ├── IcuDatFileLoaderTest.php
│   │   │   │   │   ├── IcuResFileLoaderTest.php
│   │   │   │   │   ├── IniFileLoaderTest.php
│   │   │   │   │   ├── JsonFileLoaderTest.php
│   │   │   │   │   ├── LocalizedTestCase.php
│   │   │   │   │   ├── MoFileLoaderTest.php
│   │   │   │   │   ├── PhpFileLoaderTest.php
│   │   │   │   │   ├── PoFileLoaderTest.php
│   │   │   │   │   ├── QtFileLoaderTest.php
│   │   │   │   │   ├── XliffFileLoaderTest.php
│   │   │   │   │   └── YamlFileLoaderTest.php
│   │   │   │   ├── LoggingTranslatorTest.php
│   │   │   │   ├── MessageCatalogueTest.php
│   │   │   │   ├── MessageSelectorTest.php
│   │   │   │   ├── PluralizationRulesTest.php
│   │   │   │   ├── TranslatorCacheTest.php
│   │   │   │   ├── TranslatorTest.php
│   │   │   │   ├── Util
│   │   │   │   │   └── ArrayConverterTest.php
│   │   │   │   └── Writer
│   │   │   │       └── TranslationWriterTest.php
│   │   │   ├── TranslatorBagInterface.php
│   │   │   ├── TranslatorInterface.php
│   │   │   ├── Translator.php
│   │   │   ├── Util
│   │   │   │   └── ArrayConverter.php
│   │   │   └── Writer
│   │   │       ├── TranslationWriterInterface.php
│   │   │       └── TranslationWriter.php
│   │   └── var-dumper
│   │       ├── Caster
│   │       │   ├── AmqpCaster.php
│   │       │   ├── ArgsStub.php
│   │       │   ├── Caster.php
│   │       │   ├── ClassStub.php
│   │       │   ├── ConstStub.php
│   │       │   ├── CutArrayStub.php
│   │       │   ├── CutStub.php
│   │       │   ├── DateCaster.php
│   │       │   ├── DoctrineCaster.php
│   │       │   ├── DOMCaster.php
│   │       │   ├── EnumStub.php
│   │       │   ├── ExceptionCaster.php
│   │       │   ├── FrameStub.php
│   │       │   ├── GmpCaster.php
│   │       │   ├── LinkStub.php
│   │       │   ├── PdoCaster.php
│   │       │   ├── PgSqlCaster.php
│   │       │   ├── RedisCaster.php
│   │       │   ├── ReflectionCaster.php
│   │       │   ├── ResourceCaster.php
│   │       │   ├── SplCaster.php
│   │       │   ├── StubCaster.php
│   │       │   ├── SymfonyCaster.php
│   │       │   ├── TraceStub.php
│   │       │   ├── XmlReaderCaster.php
│   │       │   └── XmlResourceCaster.php
│   │       ├── CHANGELOG.md
│   │       ├── Cloner
│   │       │   ├── AbstractCloner.php
│   │       │   ├── ClonerInterface.php
│   │       │   ├── Cursor.php
│   │       │   ├── Data.php
│   │       │   ├── DumperInterface.php
│   │       │   ├── Stub.php
│   │       │   └── VarCloner.php
│   │       ├── Command
│   │       │   ├── Descriptor
│   │       │   │   ├── CliDescriptor.php
│   │       │   │   ├── DumpDescriptorInterface.php
│   │       │   │   └── HtmlDescriptor.php
│   │       │   └── ServerDumpCommand.php
│   │       ├── composer.json
│   │       ├── Dumper
│   │       │   ├── AbstractDumper.php
│   │       │   ├── CliDumper.php
│   │       │   ├── ContextProvider
│   │       │   │   ├── CliContextProvider.php
│   │       │   │   ├── ContextProviderInterface.php
│   │       │   │   ├── RequestContextProvider.php
│   │       │   │   └── SourceContextProvider.php
│   │       │   ├── DataDumperInterface.php
│   │       │   ├── HtmlDumper.php
│   │       │   └── ServerDumper.php
│   │       ├── Exception
│   │       │   └── ThrowingCasterException.php
│   │       ├── LICENSE
│   │       ├── phpunit.xml.dist
│   │       ├── README.md
│   │       ├── Resources
│   │       │   ├── bin
│   │       │   │   └── var-dump-server
│   │       │   ├── css
│   │       │   │   └── htmlDescriptor.css
│   │       │   ├── functions
│   │       │   │   └── dump.php
│   │       │   └── js
│   │       │       └── htmlDescriptor.js
│   │       ├── Server
│   │       │   ├── Connection.php
│   │       │   └── DumpServer.php
│   │       ├── Test
│   │       │   └── VarDumperTestTrait.php
│   │       ├── Tests
│   │       │   ├── Caster
│   │       │   │   ├── CasterTest.php
│   │       │   │   ├── DateCasterTest.php
│   │       │   │   ├── ExceptionCasterTest.php
│   │       │   │   ├── GmpCasterTest.php
│   │       │   │   ├── PdoCasterTest.php
│   │       │   │   ├── RedisCasterTest.php
│   │       │   │   ├── ReflectionCasterTest.php
│   │       │   │   ├── SplCasterTest.php
│   │       │   │   ├── StubCasterTest.php
│   │       │   │   └── XmlReaderCasterTest.php
│   │       │   ├── Cloner
│   │       │   │   ├── DataTest.php
│   │       │   │   └── VarClonerTest.php
│   │       │   ├── Dumper
│   │       │   │   ├── CliDumperTest.php
│   │       │   │   ├── FunctionsTest.php
│   │       │   │   ├── HtmlDumperTest.php
│   │       │   │   └── ServerDumperTest.php
│   │       │   ├── Fixtures
│   │       │   │   ├── dumb-var.php
│   │       │   │   ├── dump_server.php
│   │       │   │   ├── FooInterface.php
│   │       │   │   ├── GeneratorDemo.php
│   │       │   │   ├── NotLoadableClass.php
│   │       │   │   ├── Twig.php
│   │       │   │   └── xml_reader.xml
│   │       │   ├── Server
│   │       │   │   └── ConnectionTest.php
│   │       │   └── Test
│   │       │       └── VarDumperTestTraitTest.php
│   │       └── VarDumper.php
│   ├── theseer
│   │   └── tokenizer
│   │       ├── build.xml
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── phive.xml
│   │       ├── phpunit.xml
│   │       ├── README.md
│   │       ├── src
│   │       │   ├── Exception.php
│   │       │   ├── NamespaceUriException.php
│   │       │   ├── NamespaceUri.php
│   │       │   ├── TokenCollectionException.php
│   │       │   ├── TokenCollection.php
│   │       │   ├── Tokenizer.php
│   │       │   ├── Token.php
│   │       │   └── XMLSerializer.php
│   │       └── tests
│   │           ├── _files
│   │           │   ├── customns.xml
│   │           │   ├── test.php
│   │           │   ├── test.php.tokens
│   │           │   └── test.php.xml
│   │           ├── NamespaceUriTest.php
│   │           ├── TokenCollectionTest.php
│   │           ├── TokenizerTest.php
│   │           ├── TokenTest.php
│   │           └── XMLSerializerTest.php
│   ├── tijsverkoyen
│   │   └── css-to-inline-styles
│   │       ├── composer.json
│   │       ├── LICENSE.md
│   │       ├── phpunit.xml.dist
│   │       └── src
│   │           ├── Css
│   │           │   ├── Processor.php
│   │           │   ├── Property
│   │           │   │   ├── Processor.php
│   │           │   │   └── Property.php
│   │           │   └── Rule
│   │           │       ├── Processor.php
│   │           │       └── Rule.php
│   │           └── CssToInlineStyles.php
│   ├── vlucas
│   │   └── phpdotenv
│   │       ├── composer.json
│   │       ├── LICENSE.txt
│   │       └── src
│   │           ├── Dotenv.php
│   │           ├── Exception
│   │           │   ├── ExceptionInterface.php
│   │           │   ├── InvalidCallbackException.php
│   │           │   ├── InvalidFileException.php
│   │           │   ├── InvalidPathException.php
│   │           │   └── ValidationException.php
│   │           ├── Loader.php
│   │           └── Validator.php
│   └── webmozart
│       └── assert
│           ├── CHANGELOG.md
│           ├── composer.json
│           ├── LICENSE
│           ├── README.md
│           └── src
│               └── Assert.php
└── webpack.mix.js

1333 directories, 6800 files
