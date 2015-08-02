<?php

class DBconn
{

    protected $dbh;

    public function __construct()
    {
        return [
            'host' => 'localhost',
            'dbname' => 'mydb',
            'password' => '',
            'user' => 'root'
        ];
        $this->dbs = 'mysql: dbname=' . $include['dbname'] . ';host=' . $include['host'];
        $this->dbh = new PDO($this->dbs, $include['user'], $include['password']);
    }
}

class DBexec {
    function execute($sql, $params = [])
    {

        $sql = "SELECT * FROM login";

        $db = new DBconn();

        //подготовка запроса ($this->dbh - подготовить запрос, prepare - метод подготовки)
        $sth = $this->dbh->prepare($sql);

        //Возвращаем выполненный результат с указанным параметром
        return $sth->execute($params);
    }


    public function setClassName($className)
    {
        $this->className = $className;
    }
    
    public static function findOneByPk($id)
    {
        $db = new DBconn();
        $db->setClassName(get_called_class());
/////////////////////////
        }


}

$dbhnq = new DBexec();

while($row = mysql_fetch_assoc($dbhnq)){
    $member = $row['Вася'];
}

var_dump($member);

?>
