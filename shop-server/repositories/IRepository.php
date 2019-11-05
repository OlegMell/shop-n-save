<?php


interface IRepository
{
    function getAll();
    function get($id);
    function save($object);
    function update($object);
    function remove($id);
}