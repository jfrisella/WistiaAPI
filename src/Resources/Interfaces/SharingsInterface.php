<?php
/**
*   Wistia Sharings Interface
*/
namespace Wistia\Resources\Interfaces;

interface SharingInterface
{

    public function listOf($project_id);
    public function show($project_id, $sharing_id);
    public function create($project_id);
    public function update($project_id, $sharing_id);
    public function delete($project_id, $sharing_id);

}
