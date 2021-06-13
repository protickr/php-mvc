<?php


namespace model;


use mvc\database\DatabaseModelMapper;

class Receipt extends DatabaseModelMapper
{
    public static function tableName():string{
        return self::tname();
    }
}