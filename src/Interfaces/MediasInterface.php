<?php
/**
*   Wistia Medias Interface
*/
namespace Wistia\Interfaces;

interface iMedia
{

    public function listOf();
    public function show($project_id);
    public function update();
    public function delete();
    public function copy();
    public function stats();

}
