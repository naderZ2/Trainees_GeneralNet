<?php 





class Product {
    private $id;
    private $name;
    private $description;
    private $price;
    private $quantity;

    public function __construct($id, $name, $description, $price, $quantity) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function updateProduct($name, $description, $price, $quantity) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getQuantity() {
        return $this->quantity;
    }
}







class Inventory {
    private $products = [];

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function updateProduct($productId, $name, $description, $price, $quantity) {
        foreach ($this->products as $product) {
            if ($product->getId() === $productId) {
                $product->updateProduct($name, $description, $price, $quantity);
                break;
            }
        }
    }

    public function removeProduct($productId) {
        $this->products = array_filter($this->products, function($product) use ($productId) {
            return $product->getId() !== $productId;
        });
    }

    public function getInventory() {
        return $this->products;
    }
}





//create Products
$product1 = new Product(1, "firstProducts", "details", 1000, 10);
$product2 = new Product(2, "scProducts", "details2 ", 20, 50);


$inventory = new Inventory();
$inventory->addProduct($product1);
$inventory->addProduct($product2);




// $inventory->removeProduct(1);

//show Products
$allProducts = $inventory->getInventory();
foreach ($allProducts as $product) {
    echo "Product ID: " . $product->getId() . "<br>";
    echo "Name: " . $product->getName() . "<br>";
    echo "Description: " . $product->getDescription() . "<br>";
    echo "Price: " . $product->getPrice() . "<br>";
    echo "Quantity: " . $product->getQuantity() . "<br>";
    echo "<br>";

}


?>