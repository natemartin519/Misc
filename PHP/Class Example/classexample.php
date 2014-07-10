<?php

class Product
{
    public $size;
    public $cost;
    public $decription;
    public $name;

    public function __construct($size, $cost, $description, $name)
    {
        $this->size = $size;
        $this->cost = $cost;
        $this->description = $description;
        $this->name = $name;
    }
}

class Products
{

    private $productList = array();

    public function __construct()
    {
        $this->productList[] = new Product(7, 14, "Red Shoes", "Redz");
        $this->productList[] = new Product(8, 18, "Blue Shoes", "Bluez");
        $this->productList[] = new Product(9, 23, "Green Shoes", "Greenz");
    }

    public function listProducts()
    {
        $results = "";

        foreach ($this->productList as $listItem) {
            $results .= "Size: " . $listItem->size
                . ", Cost: $" . $listItem->cost
                . ", Description: " . $listItem->description
                . ", Name: " . $listItem->name . "<br />";
        }

        return $results;
    }
}

$productListToOutput = new Products();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
</head>

<body>
    <?php echo $productListToOutput->ListProducts(); ?>
</body>
</html>