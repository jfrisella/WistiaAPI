<?php
/**
*   Wistia Sharings Interface
*/
namespace Wistia\Interfaces;

interface iSharing
{

    public function listOf($project_id);
    public function show($project_id, $sharing_id);
    public function create($project_id);
    public function update($project_id, $sharing_id);
    public function delete($project_id, $sharing_id);

}
