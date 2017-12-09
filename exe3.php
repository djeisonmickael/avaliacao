<?php
/* 3. Refatore o código abaixo, fazendo as alterações que julgar necessário.
<?php
class MyUserClass
{
  public function getUserList()
  {
    $dbconn = new DatabaseConnection('localhost','user','password');
    $results = $dbconn->query('select name from user');

    sort($results);

    return $results;
  }
}
*/
class MyUserClass{
  public function getUserList(){
    $dbconn = new DatabaseConnection('localhost','user','password');
    $results = $dbconn->query('select name from user');
    return sort($results);
  }
}