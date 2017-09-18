<?php
/**
 * Model
 *
 */
namespace App\Models;

use Database\Connection;

use App\Utilities;

class Model
{
    protected function call(string $sql, array $params, $isStoredProcedure = true) : array
    {
        if ($isStoredProcedure) {
            $sql = 'CALL ' . $sql .'('. $this->placeholder($params) .')';
        }

        $database = //make factory for database connections

        $statement = $database->prepare($sql);

        $this->bindAll($statement, $params);

        $statement->execute();

        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    private function placeholder($params)
    {
        return ':' . implode(', :', array_keys($params));
    }

    private function bindAll($stmt, $params)
    {
        foreach ($params as $key => $value) $stmt->bindParam(':$key', $value);
    }
}
