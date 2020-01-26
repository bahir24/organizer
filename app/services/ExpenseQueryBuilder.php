<?php

namespace app\services;

use app\models\QueryParams;

class ExpenseQueryBuilder
{
    // public static $template = "SELECT * FROM expenses 
    // WHERE purchaseDate >= @startPurchaseDate AND purchaseDate <= @startPurchaseDate 
    // AND updatedDate >= @startUpdatedDate AND updatedDate <= @startUpdatedDateDate
    // AND categoryId = @categoryId
    // AND subcategoryId = @subcategoryId
    // AND price >= @price AND price <= @price
    // ORDER BY purchaseDate DESC";

    private static $select = "SELECT expenses.*, categories.name AS categoryName, subcategories.name AS subcategoryName FROM expenses 
        LEFT JOIN categories ON categories.id = expenses.categoryId LEFT JOIN subcategories ON subcategories.id = expenses.subcategoryId ";

    private static $purchaseDateClause = " purchaseDate >= :startPurchaseDate AND purchaseDate <= :endPurchaseDate ";
    private static $updatedDateClause = " updatedDate >= :startUpdatedDate AND updatedDate <= :endUpdatedDateDate ";
    private static $categoryIdClause = " expenses.categoryId = :categoryId ";
    private static $subcategoryIdClause = " expenses.subcategoryId = :subcategoryId ";
    private static $priceClause = " price >= :price AND price <= :price ";
    private static $orderByClause = " ORDER BY {0} ";

    public static function BuildQuery(QueryParams $params)
    {
        $sql = ExpenseQueryBuilder::$select;
        $values = [];
        $result = [];
        $result["sql"] = $sql;
        $result["values"] = $values;
        $isWhereAdded = false;

        if (is_null($params)) {

            return $result;
        }

        if (!ExpenseQueryBuilder::IsNullOrEmpty($params->startPurchaseDate) && !ExpenseQueryBuilder::IsNullOrEmpty($params->endPurchaseDate)) {
            $sql = ExpenseQueryBuilder::$select . ' WHERE ' . ExpenseQueryBuilder::$purchaseDateClause;
            $values["startPurchaseDate"] = strtotime($params->startPurchaseDate);
            $values["endPurchaseDate"] = strtotime($params->endPurchaseDate);
            $isWhereAdded = true;
        }

        if (!ExpenseQueryBuilder::IsNullOrEmpty($params->startUpdatedDate) && !ExpenseQueryBuilder::IsNullOrEmpty($params->endUpdatedDate)) {
            if ($isWhereAdded)
                $sql .= ' AND ';
            else
                $sql .= ' WHERE ';

            $sql .= ExpenseQueryBuilder::$updatedDateClause;

            $values["startUpdatedDate"] = strtotime($params->startUpdatedDate);
            $values["endUpdatedDate"] = strtotime($params->endUpdatedDate);
        }

        if (!ExpenseQueryBuilder::IsNullOrEmpty($params->categoryId)) {
            if ($isWhereAdded)
                $sql .= ' AND ';
            else
                $sql .= ' WHERE ';

            $sql .= ExpenseQueryBuilder::$categoryIdClause;

            $values["categoryId"] = $params->categoryId;
        }

        if (!ExpenseQueryBuilder::IsNullOrEmpty($params->subcategoryId)) {
            if ($isWhereAdded)
                $sql .= ' AND ';
            else
                $sql .= ' WHERE ';

            $sql .= ExpenseQueryBuilder::$subcategoryIdClause;

            $values["subcategoryId"] = $params->subcategoryId;
        }

        if (!ExpenseQueryBuilder::IsNullOrEmpty($params->startPrice) && !ExpenseQueryBuilder::IsNullOrEmpty($params->endPrice)) {
            if ($isWhereAdded)
                $sql .= ' AND ';
            else
                $sql .= ' WHERE ';

            $sql .= ExpenseQueryBuilder::$priceClause;

            $values["startPrice"] = $params->startPrice;
            $values["endPrice"] = $params->endPrice;
        }

        if (!ExpenseQueryBuilder::IsNullOrEmpty($params->orderField)) {
            $sql = $sql . str_replace("{0}", $params->orderField, ExpenseQueryBuilder::$orderByClause);
        }

        if (!ExpenseQueryBuilder::IsNullOrEmpty($params->order)) {
            $sql = $sql . $params->order;
        }

        $result["sql"] = $sql;
        $result["values"] = $values;

        return $result;
    }

    public static function IsNullOrEmpty($str)
    {
        return (!isset($str) || trim($str) === '');
    }
}
