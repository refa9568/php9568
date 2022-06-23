<?php 
$msg= "hello world";
echo $msg;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello<?php echo $msg;?></h1>
    <?php 'hello from mist';
    // arrays
    foreach ($students as $name => $roll) 
    {
        # code...
    }
    
?>
    <form action='welcome.php'>
    
    </form>
    <input type=''email'' name=''email''><br><br>
    <input type= "submit" value="submit">
    </form>
    </body>
    $email = $_REQUEST['EMAIL'];
    
    echo "email : " . $email; 
    <form action="post.php" method="post">
    <label for="name">name</label>
    <input type="i am here" name="php9568"
    placeholder="REFA">
    <br>
    <input type="submit" value="58"
    
    susername = $_POST[ 'refa'];
    
    echo 'refa :' .susername
    <?php
    echo "today is friday" . date("2022/06/17") . "<br>";
    echo "today is friday" . date("2022.06.17") . "<br>";
    echo "today is friday" . date("2022-06-17") . "<br>";
    ?>
    </body>
    </html>
    <?php
    date_default_timezone_set('Bangladesh');
    echo date('2022-06-17 09.05.17');
    ?>
    <?php include 'hello from footer page'?>  
</body>
<?php
CLASS Connection{
    public $server,$username,$password;

    public function _construct ($server, $username, $password)
    {
        $this->SERVER = $server;
        $this->username = $username;
        $this->password = $password;

    }
{
    public function connectDatabase()

    $connection = new mysqli 
   ( $this->server, 
   $this->username,
   $this->passsword
);

if($connection->connect_error){
    die('connection failed : ' . $connection)
    
    $connection->close();
    
}


}
}

</html>
 