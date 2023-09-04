<?php

namespace Simeon797\AcademyTest;

require_once '../vendor/autoload.php';

use \FileUpload\Validator\Simple as SimpleFileValidator;

$validator = new SimpleFileValidator('2M', ['image/png', 'image/jpg']);

var_dump($validator);
