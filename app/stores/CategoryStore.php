<?php

namespace app\stores;

use app\entities\CategoryEntity;

class CategoryStore extends StoreBase
{
	protected $entity = CategoryEntity::class;

	public function __construct()
	{
		parent::__construct($this->db, 'categories');
	}

	public function add($name)
	{
		$sql = "INSERT INTO $this->table(name) VALUES (:name)";
		$query = $this->pdo->prepare($sql);
		$query->execute(['name' => $name]);
	}

	public function update(CategoryEntity $category)
	{
		$sql = "UPDATE $this->table SET name = :name WHERE id = :id";
		$query = $this->pdo->prepare($sql);
		$query->execute(['name' => $category->name, 'id' => $category->id]);
	}
	public function tableName(){
		return $this->table;
	}
}
