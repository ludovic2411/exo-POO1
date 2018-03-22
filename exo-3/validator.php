<?php
class Validator{
public  $valid_int=FILTER_VALIDATE_INT;
public  $valid_float=FILTER_VALIDATE_FLOAT;
public  $filter_string=FILTER_SANITIZE_STRING;
  public function valid_int($input){
  return  filter_var($input,FILTER_VALIDATE_INT);
  }
  public function valid_float($input){
    return filter_var($input,FILTER_VALIDATE_FLOAT);
  }
  public function filter_string($input){
    return filter_var($input,FILTER_SANITIZE_STRING);
  }
}
 ?>
