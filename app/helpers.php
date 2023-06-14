<?php
require_once "Classes/AlterTable.php";
use App\CustomCollections\CustomCollection;
use App\Http\Controllers\HelperController;
// use App\Models\CaseCategory;
// use App\Models\CaseManagement;

/**
 * Update column in existing table.
 * @param string $class
 * @param string $column_name
 * @param DataType $data_type
 * @param int $length
 * @param bool $is_primary
 * @param string $position
 * 
 * @return void
 */
function alter_table(string $class, string $column_name, DataType $data_type, int $length = 0, bool $is_primary = false, string $position = "") {
    $alter_table = new AlterTable($class, $column_name, $data_type, $length, $is_primary, $position);
    $alter_table->create();
}

/**
 * Getting data from model with filters
 * @param string $model
 * @param string $filters
 * @param mixed $show_columns
 * 
 * @return Model
 */
function getAllModelData(string $model, $filters = "", $show_columns, $primaryKey = "id") {
    if(!is_array($filters)) {
        $filters = collect(json_decode($filters));
    }
    if($filters->isEmpty()) {
        $all_services = $model::all([$primaryKey, ...json_decode($show_columns)])->take(100);
        // $all_services = $model::all([$primaryKey, ...json_decode($show_columns)])->take(100);
    } else {
        $all_services = $model::all([$primaryKey, ...json_decode($show_columns)]);
        $filters->each(function($item) use(&$all_services) {
            $kategori = HelperController::textFormattedToColumnName(str_replace(" ", "_", strtolower($item->kategori)));
            switch($item->operator) {
                case "Contains":
                    $all_services = $all_services->filter(function($service) use($item, $kategori) {
                        return str_contains(strtolower($service[$kategori]), strtolower($item->value));
                    });
                    break;
                case "Not Contains":
                    $all_services = $all_services->filter(function($service) use($item, $kategori) {
                        return !str_contains(strtolower($service[$kategori]), strtolower($item->value));
                    });
                    break;
                case "≠":
                    $all_services = $all_services->where($kategori, '!=', $item->value);
                    break;
                default:
                    $all_services = $all_services->where($kategori, $item->operator, $item->value);
                    break;
            }
        });
        if($all_services->count() > 1000) {
            $all_services = $all_services->take(100);
        } else {
            $all_services = $all_services->values();
        }
    }
    return $all_services;
}

function getAllColumnData(string $model, $column) {
    return $model::cursor()->get($column)->groupBy($column)->keys();
}

/**
 * Trim all string data from Request
 * @param \Illuminate\Support\Collection|array $data
 * 
 * @return \Illuminate\Support\Collection
 */
function trimAllStringData(\Illuminate\Support\Collection|array $data) {
    if(is_array($data)) {
        $data = collect($data);
    }
    return $data->map(function($item) {
        if(is_string($item)) {
            return trim($item);
        }
    });
}

/**
 * Replace All 'ID' in string
 * 
 * @return \Illuminate\Support\Collection
 */
function replaceAllIdString(\Illuminate\Support\Collection | array $data) {
    if(is_array($data)) {
        $data = collect($data);
    }
    return $data->map(function($item, $i) {
        if(is_string($item) && str_contains($item, "id") && $i > 1) {
            return str_replace("id", "", $item);
        }
        return $item;
    });
}

/**
 * Create Custom Collection 
 * @param array $data
 * 
 * @return \App\CustomCollections\CustomCollection
 */
function customCollect($data = []) {
    return new CustomCollection($data);
}

/**
 * Convert Collection to Custom Collection
 * 
 * @return \App\CustomCollections\CustomCollection
 */
function collectToCustomCollect(\Illuminate\Support\Collection | array $data = []) {
    return customCollect($data);
}

?>