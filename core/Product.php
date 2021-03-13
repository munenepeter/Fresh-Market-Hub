<?php


class Product
{
    public $id;
    public $seller;
    public $title;
    public $description;
    public $price;
    public $availableQuantity;
    public $image;
    public $updatedAt;

    

    /**
     * Product constructor.
     *
     * @param int    $id
     * @param int    $seller
     * @param string $title
     * @param string $description
     * @param float  $price
     * @param int    $availableQuantity
     * @param string $image;
     * @param string $updatedAt;
     */
    public function __construct($id, $seller, $title, $description, $price, $availableQuantity, $image, $updatedAt){
        $this->id = $id;
        $this->seller = $seller;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->availableQuantity = $availableQuantity;
        $this->image = $image;
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getAvailableQuantity()
    {
        return $this->availableQuantity;
    }

    /**
     * @param int $availableQuantity
     */
    public function setAvailableQuantity($availableQuantity)
    {
        $this->availableQuantity = $availableQuantity;
    }

    /**
     * Add Product $product into cart. If product already exists inside cart
     * it must update quantity.
     * This must create CartItem and return CartItem from method
     * Bonus: $quantity must not become more than whatever
     * is $availableQuantity of the Product
     *
     * @param Cart $cart
     * @param int  $quantity
     * @return \CartItem
     * @throws \Exception
     */
    public function addToCart(Cart $cart, int $quantity)
    {
        return $cart->addProduct($this, $quantity);
    }

    /**
     * Remove product from cart
     *
     * @param Cart $cart
     */
    public function removeFromCart(Cart $cart)
    {
        return $cart->removeProduct($this);
    }
}