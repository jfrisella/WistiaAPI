<?php
/**
*   Wistia Sharings Interface
*/
namespace Wistia\Interfaces;

interface iSharing
{

    public function listOf();
    public function show($project_id);
    public function create();
    public function update();
    public function delete();

}
