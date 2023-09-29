<?php
// Abstract Class -> You cannot instantiate a object of an abstract class but you can inherit from it
// Any class that contains at least one abstract method must also be declared as an abstract class

abstract class DataModel
{
    protected string $tableName = "Data-Table";
    public function save()
    {
        echo "Save to Table=" . $this->tableName;
    }
}
// Cannot instantiate abstract class DataModel
// $dataModel = new DataModel();
// $dataModel->save();

class ProductTable extends DataModel
{
    protected string $tableName = "Product-Table";
    private string $name;
    private float $price;

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
    public function setPrice(float $price)
    {
        $this->price = $price;
    }
}
$product = new ProductTable();
$product->save();
