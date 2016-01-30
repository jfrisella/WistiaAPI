<?php
/**
*   Output Interface
*/
namespace Wistia\Resources\Interfaces;

interface OutputInterface
{

    public function getResults();
    public function getStatus();
    public function isSuccess();

}