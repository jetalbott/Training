<?php

Abstract Class AbstractTest extends PHPUnit_Extensions_Database_TestCase
{
    /**
     * @return PHPUnit_Extensions_Database_DB_IDatabaseConnection
     */
    public function getConnection()
    {
        $config   = Config::get(Config::DATA_STORE);
        $dsn      = $config[Config::DATA_STORE_DSN];
        $username = $config[Config::DATA_STORE_USERNAME];
        $password = $config[Config::DATA_STORE_PASSWORD];
        $pdo = new PDO($dsn, $username, $password);

        return $this->createDefaultDBConnection($pdo);
    }

    /**
     * @return PHPUnit_Extensions_Database_DataSet_IDataSet
     */
    public function getDataSet()
    {
        $filename = Config::get(Config::FIXTURE_FILENAME);

        return $this->createMySQLXMLDataSet(DIR_FIXTURES . DS . $filename);
    }
}