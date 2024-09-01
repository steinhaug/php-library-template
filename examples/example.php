<?php
/**
 * example.php
 *
 * @created      08.03.2024
 * @author       steinhaug <steinhaug@gmail.com>
 * @copyright    2024 smiley
 * @license      MIT
 */
declare(strict_types=1);

require_once __DIR__.'/../vendor/autoload.php';

$example = new \kista\LibraryTemplate\Example;

echo $example->hello();
