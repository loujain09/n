<?php 




class Products
{
    private $db;
    private $table = "products";

    public function __construct()
    {
        $this->db = new DB();
    }

    public function getAllProducts()
    {
        
        return $this->db->connect()->get($this->table);
    }


    public function insertProducts($data)
    {
        return $this->db->connect()->insert($this->table,$data);
    }


    public function deleteProduct($id)
    {
        $delete = $this->db->connect()->where('id',$id);
        return $delete->delete($this->table);
    }


    public function getProduct($id)
    {
        $product = $this->db->connect()->where('id', $id);
        return $product->get($this->table);
    }

    public function updateProduct($id,$data)
    {
        $product = $this->db->connect()->where('id', $id);
        return $product->update($this->table,$data);
    }
}