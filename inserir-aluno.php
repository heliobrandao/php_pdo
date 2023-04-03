<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

// $student = new Student(null, 'Helio Serrano Brandao Junior', new \DateTimeImmutable('1979-01-16'));

$student = new Student(
  null,
  "Vinicius', ''); DROP TABLE students; -- Dias",
  new \DateTimeImmutable('1997-10-15')
);


$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (?, ?);";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(1, $student->name());
$statement->bindValue(2, $student->birthDate()->format('Y-m-d'));

if ($statement->execute()) {
  echo "Aluno incluido";
}
