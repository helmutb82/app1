<?php
namespace Helmutb\App1;

class App1 implements App1Factory
{

    protected $table = '';
    protected $primaryKey = '';
    protected $where = [];


    /**
     * 
     */
    public function __construct() 
    {
        $this->baseUri = 'http://metregestion.metrotel.com.ar/api/';
        $this->url = $this->baseUri;
    }
    
    /**
     * 
     * @param string $table
     * @return $this
     */
    public function table($table = '')
    {
        $this->table = $table;
        $this->url = "{$this->table}";
        return $this;
    }
    
    private function getTable()
    {
        if ($this->table == '') {
            throw new Exception('undefined table');
        }
        return $this->table;
    }
    
    /**
     * 
     * @param int $id
     * @return $this
     */
    public function find($primaryKey)
    {
        $this->primaryKey = $primaryKey;
        $this->url = $this->baseUri."{$this->getTable()}/{$this->primaryKey}";
        return $this;
    }
    
    public function get()
    {
        $this->url = $this->baseUri."{$this->getTable()}/{$this->primaryKey}";
        $this->url .= (count($this->where)> 0) ? "?".http_build_query($this->where) : "";
        return $this;
    }
    
    /**
     * 
     * @param array $query
     * @return $this
     */
    public function where($query = array())
    {
        $this->where = $query;
        return $this;
    }
    
    
    public function delete()
    {
        $this->url = $this->baseUri."{$this->getTable()}/{$this->primaryKey}";
        return true;
    }
    
    public function create($data = array())
    {
        $this->url = $this->baseUri."{$this->getTable()}";
        return $this;
    }
    
    public function update($data = array())
    {
        $this->url = $this->baseUri."{$this->getTable()}/{$this->primaryKey}";
        return $this;
    }
}