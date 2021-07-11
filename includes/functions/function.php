<?php
function checkItem($select, $from, $value){

  global $con;

  $statement = $con->prepare("SELECT $select FROM $from WHERE $select = ?");

  $statement->execute(array($value));

  $count = $statement->rowCount();

  return $count;
}
