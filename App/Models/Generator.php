<?php
/**
 * Generator
 *
 */
namespace App\Models;

class Generator extends Model
{
    public function data($request) : array
    {
        $credentials = $request->getCookieParams();
        
        $method = $request->getMethod();

        $input = $request->getParsedBody();
        
        $id = $request->getQueryParams();
        
        $files = $request->getUploadedFiles();
        
        parent::validate($params);
        
        parent::handle($files);
        
        $storedProcedure = parent::createStoredProcedure($params, $method);
        
        $values = parent::prepareValues($credentials, $params, $id);

        return $this->call($storedProcedure, $values);
    }
    
    private function call(string $storedProcedure, array $values) : array
    {
        $sql = parent::createQuery($storedProcedure, $values);

        $database = parent::createConnection();

        $statement = $database->prepare($sql);

        parent::bindAll($statement, $values);

        $statement->execute();
        
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) yield $row;
    }
}
