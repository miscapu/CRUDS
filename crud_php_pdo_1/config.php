<?php
/**
 * ===============================
 * Connection to MySQL Database
 * ==============================
 */


    /**
     * Connection variables
     */
    $databaseHost   =   'localhost';
    $databaseName   =   'CRUDS';
    $databaseUser   =   'root';
    $databasePass   =   'root';


try {
    /**
     * Connection PDO
     */
    $dbConn =   new PDO( "mysql:host='.$databaseHost.';dbname='.$databaseName.'", $databaseUser, $databasePass );
    // Set Attribute ERRMODE: Error reporting mode PDO
    // Throws PDOException
    $dbConn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

}catch( PDOException $exception )
{
    echo $exception->getMessage();
}