<?php
class Quote {
    private $id;
    private $subtotal;
    private $discount;
    private $total;
    private $client;

    public function __construct($id, $subtotal, $discount, $total, $client) {
        $this->id = $id;
        $this->subtotal = $subtotal;
        $this->discount = $discount;
        $this->total = $total;
        $this->client = $client;
    }

    public function getId() {
        return $this->id;
    }

    
    public function getSubtotal() {
        return $this->subtotal;
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function getTotal() {
        return $this->total;
    }

    public function getClient() {
        return $this->client;
    }

}
?>