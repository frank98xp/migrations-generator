<?php

namespace OscarAFDev\MigrationsGenerator\Syntax;

class DroppedTable
{
    /**
     * Get string for dropping a table
     *
     * @param      $tableName
     * @param null $connection
     *
     * @return string
     */
    public function drop($tableName, $connection = null)
    {
		//frank,註解掉此行
        //if (!is_null($connection)) $connection = 'connection(\''.$connection.'\')->';
		$connection = '';
		
        return "Schema::{$connection}drop('$tableName');";
    }
}
