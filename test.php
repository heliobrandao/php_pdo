<?php

use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

$pdo = new PDO('sql');
$repository = new PdoStudentRepository($pdo);

empty($repository->allStudents());
