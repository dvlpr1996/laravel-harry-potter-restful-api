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
    private function  setModelNameSpace(string $modelName)
    {
        $this->model = 'App\Models\\' . ucfirst($modelName);
    }

    /**
     * set NameSpace for Resource
     *
     * @param string $modelName
     * @return void
     */
    private function  setResourceNameSpace(string $modelName)
    {
        $this->resource = 'App\Http\Resources\\' . ucfirst($modelName . 'resource');
    }

    /**
     * set NameSpace for Resource Collection
     *
     * @param string $modelName
     * @return void
     */
    private function  setResourceCollectionNameSpace(string $modelName)
    {
        $this->collection = 'App\Http\Resources\\' . ucfirst($modelName . 'collection');
    }

    /**
     * setter for NameSpaces
     *
     * @param string $resourceName
     * @return void
     */
    protected function apiHandleRequestTraitNameSpaceSetter(string $resourceName)
    {
        $this->setModelNameSpace($resourceName);
        $this->setResourceNameSpace($resourceName);
        $this->setResourceCollectionNameSpace($resourceName);
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
        return new $this->resource($this->model::findOrFail($param));
    }

    private function getDataBySlug(string  $param)
    {
        return new $this->resource($this->model::where('slug', $param)->firstOrFail());
    }

    private function getDataByIds(string  $param)
    {
        $params = explode(',', $param);
        $apiData = $this->model::whereBetween('id', [$params[0], $params[1]])->get();

        if (!$apiData->contains($params[0]) || !$apiData->contains($params[1]))
            #error
            die('not found');

        return new $this->collection($apiData);
    }

    /**
     * return data by id, ids or slugs based on $param
     *
     * @param string $param
     * @return mixed
     */
    // showSpecificApiData
    protected function showApiData(string $param): mixed
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
     * return all specific resource data
     *
     * @param bool $isAll
     * @return mixed
     */
    // showAllApiData
    protected function showApiDataCollection(bool $isAll = false): mixed
    {
        ($isAll) ? $isAll = $this->model::all() : $isAll = $this->model::paginate(10);
        return new $this->collection($isAll);
    }
}
