<?php


namespace App\Http\Repositories;


abstract class BaseRepository
{
    const DESC = 'DESC';
    const ASC = 'ASC';

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create($attributes = [])
    {
        $data = $this->model->create($attributes);
        return $data;
    }

    public function update($id, $attributes = [])
    {
        $result = $this->find($id);
        if ($result) {
            $result->update($attributes);
            return $result;
        }
        return false;
    }

    public function delete($id)
    {
        $result = $this->find($id);
        if ($result) {
            $result->delete();
            return true;
        }
        return false;
    }

    public function findOne($condition)
    {
        $query = $this->model;
        if (count($condition) > 0) {
            foreach ($condition as $key => $value) {
                $query = $query->where($key, $value);
            }
        }
        return $query->first();
    }

    public function findOneSortColumn($condition, $column_sort, $sort)
    {
        $query = $this->model;
        if (count($condition) > 0) {
            foreach ($condition as $key => $value) {
                $query = $query->where($key, $value);
            }
        }
        return $query
            ->orderBy($column_sort, $sort)
            ->first();
    }

    public function findMany($condition)
    {
        $query = $this->model;
        if (count($condition) > 0) {
            foreach ($condition as $key => $value) {
                $query = $query->where($key, $value);
            }
        }
        return $query->get();
    }

    public function findManySortColumn($condition, $column_sort, $sort)
    {
        $query = $this->model;
        if (count($condition) > 0) {
            foreach ($condition as $key => $value) {
                $query = $query->where($key, $value);
            }
        }
        return $query
            ->orderBy($column_sort, $sort)
            ->get();
    }

    public function where_has($relationship, $column, $value)
    {
        $model = $this->model;
        $model = $model->whereHas($relationship, function ($query) use ($column, $value) {
            $query->where($column, $value);
        });
        return $model;
    }

    public function count($condition)
    {
        $query = $this->model;
        if (count($condition) > 0) {
            foreach ($condition as $key => $value) {
                $query = $query->where($key, $value);
            }
        }
        return $query->count();
    }

    public function load_more($condition, $limit, $offset, $column_sort, $sort)
    {
        $query = $this->model;
        if (count($condition) > 0) {
            foreach ($condition as $key => $value) {
                $query = $query->where($key, $value);
            }
        }
        return $query
            ->orderBy($column_sort, $sort)
            ->skip((int)$offset)
            ->take((int)$limit)
            ->get();
    }

    public function paginate($condition, $per_page, $column_sort, $sort)
    {
        $query = $this->model;
        if (count($condition) > 0) {
            foreach ($condition as $key => $value) {
                $query = $query->where($key, $value);
            }
        }
        return $query
            ->orderBy($column_sort, $sort)
            ->paginate((int)$per_page);
    }

    public function search_like($condition)
    {
        $query = $this->model;
        if (count($condition) > 0) {
            foreach ($condition as $key => $value) {
                $query = $query->where($key, 'LIKE', "%$value%");
            }
        }
        return $query->get();
    }

    public function findManyAndUpdate($condition, $attributes = [])
    {
        $query = $this->model;
        if (count($condition) > 0) {
            foreach ($condition as $key => $value) {
                $query = $query->where($key, $value);
            }
            $query->update($attributes);
            return true;
        }
        return false;
    }
}
