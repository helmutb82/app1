<?php

namespace Helmutb\App1;

interface App1Factory
{
    
    public function table($table);
    /**
     * 
     * @param type $id
     */
    public function find($id);
    
    /**
     * 
     * @param type $query
     */
    public function where($query = array());
    
    public function get();
    public function delete();
    public function update($data = array());
    public function create($data = array());
   
}