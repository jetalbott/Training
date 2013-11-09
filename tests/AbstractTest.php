<?php

abstract class AbstractTest extends PHPUnit_Extensions_Database_TestCase
{
    public function getSetUpOperation()
    {
        // whether you want cascading truncates
        // set false if unsure
        $cascadeTruncates = false;

        return new PHPUnit_Extensions_Database_Operation_Composite(array
            (
                new PHPUnit_Extensions_Database_Operation_MySQL55Truncate($cascadeTruncates),
                PHPUnit_Extensions_Database_Operation_Factory::INSERT()
            ));
    }

    /**
     *
     * @return PHPUnit_Extensions_Database_DB_IDatabaseConnection
     */
    public function getConnection()
    {
        $config = Config::get(Config::DATA_STORE);
        $dsn = $config[Config::DATA_STORE_DSN];
        $username = $config[Config::DATA_STORE_USERNAME];
        $password = $config[Config::DATA_STORE_PASSWORD];
        $pdo = new PDO($dsn, $username, $password);

        return $this->createDefaultDBConnection($pdo);
    }

    /**
     *
     * @return PHPUnit_Extensions_Database_DataSet_IDataSet
     */
    public function getDataSet()
    {
        $filename = Config::get(Config::FIXTURE_FILENAME);

        return $this->createMySQLXMLDataSet(DIR_FIXTURES . DS . $filename);
    }
}