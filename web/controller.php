<?php

$error = NULL;
$answer = 0;
$number1 = $_POST['number1'] ?? '';
$number2 = $_POST['number2'] ?? '';
$operation = $_POST['operation'] ?? '';

if ($operation) performOperation();

function performOperation() {
  global $answer, $number1, $number2, $operation, $error;

  $number1 = intval($number1);
  $number2 = intval($number2);

  switch ($operation) {
    case 'add':
      $answer = $number1 + $number2;
      break;
    case 'subtract':
      $answer = $number1 - $number2;
      break;
    case 'multiply':
      $answer = $number1 * $number2;
      break;
    case 'divide':
      if ($number2 === 0) {
        $error = 'Cannot divide by zero';
        return;
      }
      $answer = $number1 / $number2;
      break;
    }
}