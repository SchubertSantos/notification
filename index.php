<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail ->sendMail("Content", "<p>Test</b>", "reply@email.com", "Reply Name", "address@email.com", "Address Name");

var_dump($novoEmail);