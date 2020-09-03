<?php 
class DB {
    
    protected $table;

    //Handle Absent Method
    public function __call($method, $args) {
        if (substr($method, 0, 5) == 'where') {
            $column = substr($method, 4);
            $column = $this->camelCaseToUnderscore($column);
            echo 'SELECT * FROM ' . $this->table . ' where ' . $column . '=' . $this->makeSqlString($args[0]);
        }
    }

    // set table name
    public function table($name) {
        $this->table = $name;
        return $this;
    }

    // make camelCase to snake_case
    protected function camelCaseToUnderscore($input) {
        preg_match_all('!([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $input, $matches);
        $ret = $matches[0];
        foreach ($ret as &$match) {
            $match = $match == strtoupper($match) ? strtolower($match) : lcfirst($match);
        }
        return implode('_', $ret);
    }

    // make sql string based on datatype
    protected function makeSqlString($val) {
        $types = ['integer', 'double', 'float'];

        if (in_array(gettype($val), $types)) {
            return $val;
        }
        return "'{$val}'";
    }

}

$db = new DB;

$db->table('tbl_users')->whereFirstName('Nahid');


?>