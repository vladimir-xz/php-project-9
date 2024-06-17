<?php

namespace Hexlet\Code\Urls;

class Get
{
    public static function process($db)
    {
        $sql = 'SELECT *
                FROM urls
                ORDER BY created_at DESC';
        $sth = $db->prepare($sql);
        $sth->execute();
        return $sth->fetchAll();
    }
}