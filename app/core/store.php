<?php

class StoreBase
{
    protected $pdo;
    protected $table;
    protected $entity;

    public function __construct($db, $table)
    {
        
        $this->table = $table;
        $this->pdo = new PDO('sqlite:'.$db);
        $this->pdo->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->SetAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function getById(int $id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = $id";
        $query = $this->pdo->query($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, $this->entity);

        return $query->fetch();
    }

    public function getAll() {
        $sql = "SELECT * FROM $this->table";
        $query = $this->pdo->query($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, $this->entity);
        return $query->fetchAll();
    }

    public function getTotal()
    {
        $sql = "SELECT COUNT() as count FROM $this->table";
        $query = $this->pdo->query($sql);
        $query->setFetchMode(PDO::FETCH_ASSOC);

        $result = $query->fetch();
        return (int) $result["count"];
    }

    public function getPaged(QueryParams $queryParams)
    {
        $skip = $queryParams->pageNumber * $queryParams->pageSize;
        $sql = "SELECT * FROM $this->table ORDER BY 
        $queryParams->orderField $queryParams->order LIMIT $skip, $queryParams->pageSize";

        $query = $this->pdo->query($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, $this->entity);

        return $query->fetchAll();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM $this->table WHERE id = $id";
        $this->pdo->exec($sql);
    }

    protected function getKeys($obj, $excludes = null)
    {
        if (!$obj) {
            return null;
        }

        $keys = array_keys((array) $obj);

        if ($excludes) {
            foreach ($excludes as $value) {
                if (($key = array_search($value, $keys)) !== false) {
                    unset($keys[$key]);
                }
            }
        }

        return $keys;
    }

    public function objectKeysToString($obj, $excludes = null, string $glue = ",")
    {
        $keys = $this->getKeys($obj, $excludes);
        if (!$keys) {
            return '';
        }

        return implode($glue, $keys);
    }

    public function objectKeysToPlaceholdersString($obj, $excludes = null, string $glue = ",")
    {
        $keys = $this->getKeys($obj, $excludes);
        if (!$keys) {
            return '';
        }

        $arr = array_map(function ($item) {
            return ':' . $item;
        }, $keys);

        return implode($glue, $arr);
    }

    public function objectKeysToSetPairsString($obj, $excludes = null, string $glue = ",")
    {
        $keys = $this->getKeys($obj, $excludes);
        if (!$keys) {
            return '';
        }

        $arr = array_map(function ($item) {
            return "$item = :$item";
        }, $keys);

        return implode($glue, $arr);
    }

    public function objectToValues($obj, $excludes = null)
    {
        if (!$obj) {
            return '';
        }

        $arr = (array) $obj;

        if ($excludes) {
            foreach ($excludes as $value) {
                if (array_key_exists($value, $arr)) {
                    unset($arr[$value]);
                }
            }
        }

        return $arr;
    }
}
