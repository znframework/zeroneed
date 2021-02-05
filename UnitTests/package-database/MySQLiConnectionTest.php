<?php namespace ZN\Database;

class MySQLiConnectionTest extends DatabaseExtends
{
    const connection = ['driver' => 'mysqli', 'user' => 'user', 'host' => 'localhost', 'database' => 'test', 'password' => 'password', 'port' => 3306];

    public function testConnection()
    {
        try
        {
            $db = new MySQLi\DB;

            $db->connect(self::connection);

            echo 1;
        }
        catch( Exception\ConnectionErrorException $e )
        {
            $this->assertIsString($e->getMessage());
        }
        
    }
}