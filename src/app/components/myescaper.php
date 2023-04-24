<?php
namespace App\Component;

use Phalcon\Escaper;

class myescaper
{
    public function sanatize($val)
    {
        $escaper = new Escaper();
        return $escaper->escapeHtml($val);
    }
}
