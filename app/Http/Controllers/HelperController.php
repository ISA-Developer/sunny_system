<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    /**
     * Get all value in specific column
     * @param mixed $class_model
     * 
     * @return json
     */
    public function getColumnValue($class_model, $column, $filters)
    {
        $class_model = base64_decode($class_model);
        $column = str_replace(" ", "_", strtolower($column));
        $filters = collect(json_decode($filters));
        if ($filters->isNotEmpty()) {
            $load_model_all = $class_model::cursor();
            $filters->each(function ($item) use (&$load_model_all) {
                $kategori = str_replace(" ", "_", strtolower($item->kategori));
                switch ($item->operator) {
                    case "Contains":
                        $load_model_all = $load_model_all->filter(function ($service) use ($item, $kategori) {
                            return str_contains(HelperController::textFormattedToColumnName($service->$kategori), $item->value);
                        });
                        break;
                    case "Not Contains":
                        $load_model_all = $load_model_all->filter(function ($service) use ($item, $kategori) {
                            return !str_contains(HelperController::textFormattedToColumnName($service->$kategori), $item->value);
                        });
                        break;
                    case "≠":
                        $load_model_all = $load_model_all->where($kategori, '!=', $item->value);
                        break;
                    default:
                        $load_model_all = $load_model_all->where($kategori, $item->operator, $item->value);
                        break;
                }
            });
            return $load_model_all->groupBy($column)->keys();
        }
        return $class_model::cursor()->groupBy($column)->keys();
    }

    /**
     * Changes naming of the column to text formatted
     * 
     * @return \Illuminate\Support\Collection
     */
    public static function columnNameToTextFormatted(\Illuminate\Support\Collection | array $data)
    {
        if (is_array($data)) {
            $data = collect($data);
        }
        return $data->map(function ($item) {
            return ucwords(str_replace("_", " ", $item));
        });
    }

    /**
     * Changes naming text formatted to column
     * 
     * @return \Illuminate\Support\Collection
     */
    public static function textFormattedToColumnName(string $data)
    {
        return strtolower(str_replace(" ", "_", $data));
    }

    /**
     * Getting all data from model
     * @param Request $request
     * 
     * @return Illuminate\Contracts\Routing\ResponseFactory::json
     */
    public function getAllData(Request $request)
    {
        // dd($request->all());
        $class_model = base64_decode($request->model_name);
        $filters = $request->filters;
        $show_columns = $request->show_columns;
        $primary_key = $request->primary_key ?? "id";
        if (empty($filters)) {
            $all_data = getAllModelData($class_model, [], $show_columns, $primary_key);
        } else {
            $filters = collect(json_decode($filters));
            $all_data = getAllModelData($class_model, $filters, $show_columns, $primary_key);
            $all_data = $all_data->values();
        }
        return response()->json($all_data->toArray());
    }

    /**
     * Delete data model
     * @param string $id
     * @param string $model_class
     * 
     * @return Illuminate\Contracts\Routing\ResponseFactory::json
     */
    public function delete(string $id, string $model_class)
    {
        $model_class = base64_decode($model_class);
        $model_class = $model_class::find($id);

        if ($model_class->delete()) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }

    public function stageUpdate(Request $request) {
        $data = $request->all();
        $model = $data["class_model"]::find($data['id']);
        $model->stage = $data["stage"];
        if($model->save()) {
            return response()->json(['ok' => true]);
        }
        return response()->json(['ok' => false]);
    }
}
