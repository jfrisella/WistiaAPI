<?php
/**
*   Wistia Projects Interface
*/
namespace Wistia\Interfaces;

interface iProject
{

    public function listOf();
    public function show($project_id);
    public function create();
    public function update();
    public function delete();
    public function copy();

}
