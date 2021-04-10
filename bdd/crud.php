<?php
require_once 'connect.php';


function delete($table, $idName, $id)
{
    $bdd = connect();
    $sql = "DELETE FROM $table WHERE $idName = $id ";
    return $bdd->query($sql);
}

function getAll($table)
{
    $bdd = connect();
    $sql = "SELECT * FROM $table";
    $query = $bdd->query($sql);
    $result = $query->fetch_all(MYSQLI_ASSOC);

    return $result;
}

function get($table, $idName, $id)
{
    $bdd = connect();
    $sql = "SELECT * FROM $table WHERE $idName = $id ";
    $query = $bdd->query($sql);
    $result = $query->fetch_all(MYSQLI_ASSOC);

    return $result;
}


function update($table, $id, $idName, $params)
{
    $bdd = connect();
    $fields = [];
    $types = [];
    $bindValue = [];
    unset($params['submit']);

    foreach ($params as $value) {
        if (is_int($value)) {
            $types[] = 'i';
        } else {
            $types[] = 's';
        }
        $bindValue[] = $value;
    }


    foreach ($params as $key=>$value) {
        $fields[] = "$key = ?";
    }

    $sql = "UPDATE $table SET " . implode(' , ', $fields) . " WHERE $idName = $id";
    print_r($sql);
    $statement = $bdd->prepare($sql);

    $statement->bind_param(implode($types), ...$bindValue);
    if ($statement->execute() === true) {
        echo "Record updated successfully";
    } else {
        echo "Error updated record: " . $bdd->error;
        die();
    }
}


function insert($table, $params)
{
    $types = [];
    $bdd = connect();
    $bindValue = [];

    unset($params['submit']);

    foreach ($params as $value) {
        if (is_int($value)) {
            $types[] = 'i';
        } else {
            $types[] = 's';
        }
        $bindValue[] = $value;
    }

    $field = array_keys($params);
    $values = str_repeat('?,', count($params) - 1) . '?';
    $sql = "INSERT INTO $table(" . implode(' , ', $field) . ") VALUES ( $values )";
    print_r($sql);
    $statement = $bdd->prepare($sql);

    $statement->bind_param(implode($types), ...$bindValue);

    if ($statement->execute() === true) {
        echo "Record inserted successfully";
    } else {
        echo "Error insert record: " . $bdd->error;
        die();
    }
}