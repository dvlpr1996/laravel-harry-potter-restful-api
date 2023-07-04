<?php

namespace App\Traits;

trait ApiHandleRequest
{
    private $model;
    private $resource;
    private $collection;

    /**
     * set NameSpace for model
     *
     * @param string $modelName
     * @return void
     */
    private function setModelNameSpace(string $modelName)
    {
        $this->model = 'App\Models\\' . ucfirst($modelName);
    }

    /**
     * set NameSpace for Resource
     *
     * @param string $modelName
     * @return void
     */
    private function setResourceNameSpace(string $modelName, string $verNumber)
    {
        $this->resource = $this->resourceNameSpace($modelName, $verNumber) . 'Resource';
    }

    /**
     * set NameSpace for Resource
     *
     * @param string $modelName
     * @param string $verNumber
     * @return string
     */
    private function resourceNameSpace(string $modelName, string $verNumber): string
    {
        return 'App\Http\Resources\\' . $verNumber . '\\' . ucfirst($modelName) . 's\\'
            . ucfirst($modelName);
    }

    /**
     * set NameSpace for Resource Collection
     *
     * @param string $modelName
     * @return void
     */
    private function setResourceCollectionNameSpace(string $modelName, string $verNumber)
    {
        $this->collection = $this->resourceNameSpace($modelName, $verNumber) . 'Collection';
    }

    /**
     * setter for NameSpaces
     *
     * @param string $resourceName
     * @return void
     */
    protected function apiHandleRequestTraitNameSpaceSetter(
        string $resourceName,
        string $verNumber = 'v1'
    ) {
        $this->setModelNameSpace($resourceName);
        $this->setResourceNameSpace($resourceName, $verNumber);
        $this->setResourceCollectionNameSpace($resourceName, $verNumber);
    }

    protected function isIdRequest(string $data): bool
    {
        if (is_numeric($data) && preg_match('/^\d+$/', $data))
            return true;
        return false;
    }

    protected function isMultipleIdRequest(string $data): bool
    {
        if (is_string($data) && preg_match('/^\d+,\d+$/', $data))
            return true;
        return false;
    }

    protected function isSlugRequest(string $data): bool
    {
        if (is_string($data) && preg_match('/[-a-zA-Z]+/', $data))
            return true;
        return false;
    }

    private function getDataById(string  $param)
    {
        return $this->showApiDataResource($this->model::findOrFail($param));
    }

    private function getDataBySlug(string  $param)
    {
        return $this->showApiDataResource($this->model::where('slug', $param)->firstOrFail());
    }

    private function getDataByIds(string  $param)
    {
        $params = explode(',', $param);
        $apiData = $this->model::whereBetween('id', [$params[0], $params[1]])->get();

        if (!$apiData->contains($params[0]) || !$apiData->contains($params[1]))
            #error
            die('not found');

        return $this->showApiDataCollection($apiData);
    }

    /**
     * return data by id, ids or slugs based on $param
     *
     * @param string $param
     * @return mixed
     */
    protected function showApiData(string $param)
    {
        $param = trim($param);

        if ($this->isIdRequest($param))
            return $this->getDataById($param);

        if ($this->isMultipleIdRequest($param))
            return $this->getDataByIds($param);

        if ($this->isSlugRequest($param))
            return $this->getDataBySlug($param);
    }

    /**
     * return resource collection
     *
     * @param bool $isAll
     * @return mixed
     */
    protected function showApiDataCollection($resource)
    {
        return new $this->collection($resource);
    }

    /**
     * return resource
     *
     * @param bool $isAll
     * @return mixed
     */
    protected function showApiDataResource($resource)
    {
        return new $this->resource($resource);
    }

    protected function showApiDataCollectionWithPagination(bool $isAll = false)
    {
        ($isAll) ? $isAll = $this->model::all() : $isAll = $this->model::paginate(10);
        return new $this->collection($isAll);
    }
}
