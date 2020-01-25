<?php

namespace app\stores;

use app\entities\SubcategoryEntity;

class SubcategoryStore extends StoreBase
{
	protected $entity = SubcategoryEntity::class;

	public function __construct()
	{
		parent::__construct($this->db, 'subcategories');
	}

	public function add($categoryId, $name)
	{
		$sql = "INSERT INTO $this->table(categoryId, name) VALUES(:name, :categoryId)";
		$query = $this->pdo->prepare($sql);
		$query->execute(['categoryId' => $categoryId, 'name' => $name]);
	}

	public function update(SubcategoryEntity $category)
	{
		$sql = "UPDATE $this->table SET name = :name, categoryId = :categoryId WHERE id = :id";
		$query = $this->pdo->prepare($sql);
		$query->execute(['categoryId' => $category->categoryId, 'name' => $category->name, 'id' => $category->id]);
	}
}
