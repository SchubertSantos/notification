<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2, "mail.gustavoweb.me", "sender@gustavoweb.me", "teste@123", "tls", '587', "gustvo@gustavoweb.me", "Equipe GustavoWeb");
$novoEmail ->sendMail("Content", "<p>Test</b>", "reply@email.com", "Reply Name", "address@email.com", "Address Name");

var_dump($novoEmail);