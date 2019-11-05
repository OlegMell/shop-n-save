<?php


class Category implements JsonSerializable
{
    private $id;
    private $name;
    /**
     * Category constructor.
     * @param $category_id
     * @param $category_name
     */
    public function __construct($category_id, $category_name)
    {
        $this->id = $category_id;
        $this->name = $category_name;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}