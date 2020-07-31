<?php declare(strict_types=1);

namespace SilerExamples\Issue354;

use Siler\Route;

require_once __DIR__ . '/vendor/autoload.php';

Route\get('/test', fn() => print('Hello, World!'));