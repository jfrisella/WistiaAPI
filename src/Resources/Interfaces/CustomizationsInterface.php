<?php
/**
*   Wistia Customizations Interface
*/
namespace Wistia\Resources\Interfaces;

interface CustomizationInterface
{

    public function show($media_id);
    public function create($media_id);
    public function update($media_id);
    public function delete($media_id);

}
