<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$student = new Student(null, 'Helio Serrano Brandao Junior', new \DateTimeImmutable('1979-01-16'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}')";

$pdo->exec($sqlInsert);
