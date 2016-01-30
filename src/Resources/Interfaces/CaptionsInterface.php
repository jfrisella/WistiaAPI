<?php
/**
*   Wistia Captions Interface
*/
namespace Wistia\Resources\Interfaces;

interface CaptionInterface
{

    public function index($media_id);
    public function show($media_id, $language_code);
    public function create($media_id);
    public function update($media_id, $language_code);
    public function delete($media_id, $language_code);
    public function purchase($media_id);

}
