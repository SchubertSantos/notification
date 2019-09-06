# Email Notification Library using phpMailer

This library is intended to send email using the phpmailer library. Doing this uncomplicated action is essential for any system.

To install the library, run the following command:

``` sh
composer requires gustavoweb / composer_teste
```

To make use of the library, simply request or automatically load the composer, invoke a class, and make a method call:

```
<? php

require __DIR__. '/vendor/autoload.php';

Usage Notification \ Email;

$ email = new Email (2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls / ssl)", "port (587)", "from@email.com", "From Name");

$ email-> sendEmail ("SUbject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");
```

Note that all email sending configuration is using the magic builder method! Once you invoke the constructor method within your application, your system is able to trigger.

### Developers
* [Gustavo Web] - Developer of this library and tutor of the course Composer in Practice!
* [Robson V. Leite] - CEO and Founder of UpInside Treinamentos.
* [UpInside Treinamentos] - Official website of your digital programming and marketing school
* [phpMailer] - Lib to email

License
----

MIT

** Another UpInside Training course, make good use! **

[//]: #
[Gustavo Web]: <mailto: gustavo@upinside.com.br>
[Robson V. Milk]: <mailto: robson@upinside.com.br>
[UpInside Training]: <https://www.upinside.com.br>
[phpMailer]: <https://github.com/PHPMailer/PHPMailer>
