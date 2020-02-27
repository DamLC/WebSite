<?php
class myPDO{
     const DB_NAME ='jardin';
    const HOST = 'localhost';
     const USER = 'root';
     const PASSWORD = '';
     const PORT = '3308';
    
    public static function Connect_PDO(){
        try{
            $connection = new PDO('mysql:host='.self::HOST.':'.self::PORT.';dbname='.self::DB_NAME.'', self::USER, self::PASSWORD);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            throw $e;
        }
        return $connection;
    }
    
    public static function Disconnect_PDO($res, $PDO){
        $res->closeCursor();
        unset($PDO);
    }
}
?>
