<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 12/10/17
 * Time: 12:04 AM
 */

class User
{
    protected $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function create(array $data)
    {
        $this->db->query('INSERT INTO users ...' ) ;
    }
}