<?php

/**
 * Created by PhpStorm.
 * User: huy
 * Date: 29/01/2019
 * Time: 15:26
 */
class Node
{
    /* Node data */
    public $data;
    /* Link to next node */
    public $next;

    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }

    function readNode()
    {
        return $this->data;
    }
}