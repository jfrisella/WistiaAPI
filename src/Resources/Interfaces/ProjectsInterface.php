<?php
/**
*   Wistia Projects Interface
*/
namespace Wistia\Resources\Interfaces;

interface ProjectInterface
{

    public function listOf();
    public function show($project_id);
    public function create();
    public function update($project_id);
    public function delete($project_id);
    public function copy($project_id);

}
