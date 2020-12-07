<?php

namespace App\Repositories\Base;

use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    /**
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes);

    /**
     * @param array $attributes
     * @return bool
     */
    public function update(array $attributes);

    /**
     * @param array $columns
     * @param $orderBy
     * @param $sortBy
     * @return mixed
     */
    public function all($columns = array('*'), $orderBy = 'id', $sortBy = 'asc');

    /**
     * @param $id
     * @return mixed
     */
    public function find($id);

    /**
     * @param $id
     * @return mixed
     */
    public function findOneOrFail($id);

    /**
     * @param array $data
     * @return mixed
     */
    public function findBy(array $data, $columns = ['*']);

    /**
     * @param array $data
     * @return mixed
     */
    public function findOneBy(array $data);

    /**
     * @param array $data
     * @return mixed
     */
    public function findOneByOrFail(array $data);

    /**
     * @return bool
     */
    public function delete();

    public function findByAttrFirst($attr, $value);

    public function createModel($data = []);

    public function pluckAttrId($attr = null);

    public function deleteByAttr($attr, $value);

    public function findByAttrInArray($attr, $array = []);

    public function updateOrCreateModel($data = null);

    public function getModelEl() : Model;

    public function orWhere(array $data1, array $data2);

    public function orderBy($orderBy, $sortBy, $data);

    public function findByWithRelationship(
        array $relations,
        array $data,
        $columns = ['*'],
        $orderBy = 'id',
        $sortBy = 'DESC'
    );

    public function getAllWithRelationship(
        $relations = [''],
        $columns = ['*'],
        $orderBy = 'id',
        $sortBy = 'asc'
    );

    public function whereIn($column, array $data, $relations = []);
}
