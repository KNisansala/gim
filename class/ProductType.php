<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductType
 *
 * @author Nipuni
 */
class ProductType {

    public $id;
    public $name;
    public $image_name;
    public $unit;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT `id`,`name`,`image_name`,`unit` FROM `product-type` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->name = $result['name'];
            $this->image_name = $result['image_name'];
            $this->unit = $result['unit'];



            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `product-type` (`name`,`image_name`,`unit`) VALUES  ('"
                . $this->name . "','"
                . $this->image_name . "','"
                . $this->unit . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            $last_id = mysql_insert_id();

            return $this->__construct($last_id);
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `product-type`";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `product-type` SET "
                . "`name` ='" . $this->name . "', "
                . "`image_name` ='" . $this->image_name . "' "
                . "`unit` ='" . $this->unit . "' "
                . "WHERE `id` = '" . $this->id . "'";
        
        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }
    
    public function delete() {


        $this->deletePhotos();

        unlink(Helper::getSitePath() . "upload/product-type/" . $this->image_name);

        $query = 'DELETE FROM `product-type` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function deletePhotos() {

        $PRODUCT = new Product(NULL);

        $allPhotos = $PRODUCT->getProductsById($this->id);

        foreach ($allPhotos as $photo) {

            $IMG = $PRODUCT->image_name = $photo["image_name"];
            unlink(Helper::getSitePath() . "upload/product-type/product/" . $IMG);

            $PRODUCT->id = $photo["id"];
            $PRODUCT->delete();
            

        }
    }

}
