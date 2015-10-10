<?php
/**
*   Output Interface
*/
namespace Wistia\Interfaces;

interface iOutput
{

    public function getResults();
    public function getStatus();
    public function isSuccess();

}