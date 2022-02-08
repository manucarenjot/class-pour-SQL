<?php
class Connect extends Config
{
    public function __construct($server, $db, $charset, $user, $password)
    {
        try {
            $dns = "mysql:host={$server};dbname={$db};charset={$charset}";
            $this->pdo = new PDO($dns, $user, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'connection effectuée';
        } catch (PDOException $e) {
            echo "Une erreur est intervenue :" . file_put_contents('PDOerrorlo.txt', $e->getMessage() .
                    "\n",FILE_APPEND);;
        }
    }
}
