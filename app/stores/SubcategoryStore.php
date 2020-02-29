<?php

namespace app\stores;

use app\entities\SubcategoryEntity;

class SubcategoryStore extends StoreBase
{
    protected $entity = SubcategoryEntity::class;

    public function __construct($db)
    {
        parent::__construct($db, 'subcategories');
    }

    public function add($categoryId, $name)
    {
        $sql = "INSERT INTO $this->table(categoryId, name) VALUES(:name, :categoryId)";
        $query = $this->pdo->prepare($sql);
        $query->execute(
            [
                'categoryId' => $categoryId,
                'name' => $name
            ]
        );
        
        return $this->getLastId();
    }

    public function update(SubcategoryEntity $subcategory)
    {
        $sql = "UPDATE $this->table SET name = :name, categoryId = :categoryId WHERE id = :id";
        $query = $this->pdo->prepare($sql);
        $query->execute(
            [
                'categoryId' => $subcategory->subcategoryId,
                'name' => $subcategory->name,
                'id' => $subcategory->id
            ]
        );

        return $this->getLastId();
    }
}
