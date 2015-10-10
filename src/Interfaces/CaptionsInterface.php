<?php
/**
*   Wistia Captions Interface
*/
namespace Wistia\Interfaces;

interface iCaption
{

    public function index();
    public function show($project_id);
    public function create();
    public function update();
    public function delete();
    public function purchase();

}
