<?php
/**
 * Model
 *
 */
namespace App\Models;

use App\Helpers\ParserHelper as Parser;

class Model extends Database
{
    public function getData($request) : array
    {
        $params = $this->createParams($request);
        
        //$parser = (new Parser)->create($params['path']);
        
        $this->validate($params['input']);
        
        $this->handleUploads($params['files']);
        
        $storedProcedure = $this->createStoredProcedure(
            $params['path'], 
            $params['method']
        );
        
        $values = $this->prepareValues(
            $params['credentials'], 
            $params['input'], 
            $params['id']
        );

        $data = $this->call($storedProcedure, $values);
        
        return /* $parser->parse($data) ?? $data */ [
            'subject' => 'A Title',
            'values' => [
                'This is paragraph data.'
            ]
        ];
    }
    
    protected function call(string $storedProcedure, array $values) : array
    {
        $database = parent::getDatabase();

        $sql = $this->createQuery($storedProcedure, $values);
        
        $statement = $database->prepare($sql);

        $this->bindAll($statement, $values);

        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    protected function createParams($request) : array
    {
        return [
            'credentials' => $request->getCookieParams(),
            'method' =>$request->getMethod(),
            'input' => $request->getParsedBody() ?? [],
            'id' => $request->getQueryParams() ?? [],
            'files' => $request->getUploadedFiles() ?? [],
            'path' => $request->getUri()->getPath()
        ];
    }

    protected function createQuery($storedProcedure, $values) : string
    {
        return 'CALL test_procedure('/*. $this->placeholder($values)*/ .')';
    }    
    
    protected function placeholder(array $values) : string
    {
        return ':' . implode(', :', array_keys($values));
    }

    protected function bindAll($statement, array $input)
    {
        foreach ($input as $key => $value)
        {
            $statement->bindParam(":$key", $value);
        }
    }
    
    protected function validate(array $input)
    {
        if (empty($input)) return;
        
        foreach ($input as $value) 
        {
            if (!isset($value) || empty($value)) {
                throw new \Exception(__METHOD__ . "::Missing $value", 400);
            }
        }
    }
    
    protected function createStoredProcedure(string $path, string $method) : string
    {
        return str_replace('/api/v1/', '', $path) . '_' . strtolower($method);
    }
    
    protected function prepareValues($credentials, array $input, array $id) : array
    {//TODO: this isnt going to work/scale:
        return $values = [
            'user' => $credentials,
            'params' => empty($input) ? implode(',', $input) : null,
            'id' => empty($id) ? implode('', $id) : null
        ];
    }
    
    protected function handleUploads(array $files)
    {//TODO: file handler method
        return;
    }
}
