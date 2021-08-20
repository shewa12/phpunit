<?php
/**
 * Private property test
 */
namespace App;

class PrivateProperty
{
    private $first_name;
    private $last_name;

    public function __construct($fname, $lname)
    {
        $this->first_name = ucfirst($fname);
        $this->last_name  = ucfirst($lname);
    }

}
