<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

trait SeederHandler
{
    protected $filePath = __DIR__ . '/../../database/data/';

    protected function getBaseFilePath(): string
    {
        return $this->filePath;
    }

    private function dataPath(string $fileName): string
    {
        return  $this->filePath . strtolower($fileName) . '.json';
    }

    protected function getJsonData(string $dataPath)
    {
        $dataPath = $this->dataPath($dataPath);
        if (!is_file($dataPath) && !file_exists($dataPath)) {
            # throw exceptions
            die('file not found');
        }

        return json_decode(File::get($dataPath));
    }

    protected function prepareData($data)
    {
        $data = stripslashes(trim($data));
        $data = strip_tags($data);
        $data = html_entity_decode(htmlentities($data));
        return $data;
    }

    protected function prepareSlugData(string $data): string
    {
        return Str::slug($this->prepareData($data));
    }

    protected function prepareUrlData(?string $url): ?string
    {
        if (is_null($url))
            return null;

        $url = filter_var(trim($url), FILTER_SANITIZE_URL);

        if (!filter_var($url, FILTER_VALIDATE_URL))
            return 'not defined';

        return $url;
    }
}
