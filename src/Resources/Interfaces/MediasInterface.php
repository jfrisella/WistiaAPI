<?php
/**
*   Wistia Medias Interface
*/
namespace Wistia\Resources\Interfaces;

interface MediaInterface
{

    public function listOf();
    public function show($media_id);
    public function update($media_id);
    public function delete($media_id);
    public function copy($media_id);
    public function stats($media_id);

}
