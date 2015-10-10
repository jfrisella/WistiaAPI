<?php
/**
*   Wistia Customizations Interface
*/
namespace Wistia\Interfaces;

interface iCustomization
{

    public function show($project_id);
    public function create();
    public function update();
    public function delete();

}
