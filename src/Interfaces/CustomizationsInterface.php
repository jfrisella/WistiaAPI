<?php
/**
*   Wistia Customizations Interface
*/
namespace Wistia\Interfaces;

interface iCustomization
{

    public function show($media_id);
    public function create($media_id);
    public function update($media_id);
    public function delete($media_id);

}
