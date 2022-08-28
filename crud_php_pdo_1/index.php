<!--
 ==========================
 CRUD PHP & MySQL

1.  Create DB with table users with fields id( key primary and auto_increment), name(varchar 200), phone(varchar 50), email(vrachar 50)

2.  Structure:
    config.php: Contain data to access DabaBase MySQL and Exception try/catch for manipulate errors of connection.

3.
 ==========================
 -->

<?php
/**
 * ==========================
 * Starting Application
 * @var PDO $dbConn
 * ==========================
 */

// Including the database connection file
include_once ( 'config.php' );

/*
 * fetching data in descending order( latest entry list )
 */
$result = $dbConn->query( "SELECT * FROM users ORDER BY id DESC" );
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud PHP & MySQL</title>
</head>
<body>

    <h1>Crud PHP & MySQL</h1>

    <a href="add.html">Add New Data</a>
    <br>

    <table>
        <tr>
            <td>Name</td>
            <td>Phone</td>
            <td>Email</td>
        </tr>

        <!-- Dynamic Content -->
        <?php
        /**
         * PDOStatement::fetch: Fetch the next line from the result set
         * PDO::Fetch_Assoc: return an array indexed by column name as returned
         * in result set.
         */
            while( $row =   $result->fetch( PDO::FETCH_ASSOC ) ):
                echo "<tr>";
                echo "<td>".$row[ 'name' ]."</td>";
                echo "<td>".$row[ 'phone' ]."</td>";
                echo "<td>".$row[ 'email' ]."</td>";
                echo "</tr>";


            endwhile;

        ?>
    </table>

</body>
</html>