<?php
class DbConfig
{
    private $_host = 'localhost';
    private $_username = 'adits';
    private $_password = '';
    private $_database = 'dbret';

    protected $connection;

    public function __construct()
    {
        if (!isset($this->connection)) {
          
            $this->connection = new mysqli($this->_host, $this->_username, $this->_passsword, $this->_database);

            if (!$this->connection){
                echo 'cannot connect to database server';
                exit;
            }
        }
    
    return $this->connection;    
  }
}
$conn = mysqli_connect('localhost','adits','','dbret');

function query($query) {
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows =[];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row; 
    }
    return $rows;

}
?>