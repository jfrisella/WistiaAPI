<?php
/**
*   Wistia Projects Interface
*/
namespace Wistia\Interfaces\Projects;

interface iProject
{

    public function listOf();
    public function show();
    public function create();
    public function update();
    public function delete();
    public function copy();

}
