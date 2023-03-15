<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
Enum DataType {
    case BOOL;
    case STRING;
    case INT;
    case LONGINT;
    case TEXT;
    case LONGTEXT;
    case DATETIME;
    case UUID;
}

/**
 * Create or Modify column in table DB
 * @param string $class
 * @param string $column_name
 * @param DataType $data_type
 * @param int $length
 * @param bool $is_primary
*/
class AlterTable {
    protected $class = "";
    protected $column_name = "";
    protected $data_type = "";
    protected $length = 0;
    protected $is_primary = false;

    function __construct(string $class, string $column_name, DataType $data_type, int $length = 0, bool $is_primary = false)
    {
        $this->class = $class;
        $this->column_name = $column_name;
        $this->data_type = $data_type;
        $this->length = $length;
        $this->is_primary = $is_primary;
    }

    /**
     * Perform create or modify column in table 
     * @return void
     */
    public function create() {
        if(class_exists($this->class)) {
            $model = new $this->class;
            if(!Schema::hasTable($model->getTable())){
                throw new Exception("Table not found.", 500);
            } else if(!Schema::hasColumn($model->getTable(), $this->column_name)) {
                Schema::table($model->getTable(), function(Blueprint $table) {
                    switch($this->data_type) {
                        case DataType::BOOL:
                            if($this->is_primary) {
                                $table->boolean($this->column_name)->primary();
                            }
                            $table->boolean($this->column_name);
                            break;
                        case DataType::STRING:
                            if($this->length < 1) throw new LengthException($this->data_type::class. "::STRING" . " length must be greater than 0.");
                            elseif($this->length > 255) throw new LengthException($this->data_type::class. "::STRING" . " length must be less than 256.");
                            if($this->is_primary) {
                                $table->string($this->column_name, $this->length)->primary();
                            }
                            $table->string($this->column_name, $this->length);
                            break;
                        case DataType::INT:
                            if($this->is_primary) {
                                $table->integer($this->column_name)->primary();
                            }
                            $table->integer($this->column_name);
                            break;
                        case DataType::LONGINT:
                            if($this->is_primary) {
                                $table->bigInteger($this->column_name)->primary();
                            }
                            $table->bigInteger($this->column_name);
                            break;
                        case DataType::TEXT:
                            if($this->is_primary) {
                                $table->text($this->column_name)->primary();
                            }
                            $table->text($this->column_name);
                            break;
                        case DataType::LONGTEXT:
                            if($this->is_primary) {
                                $table->longText($this->column_name)->primary();
                            }
                            $table->longText($this->column_name);
                            break;
                        case DataType::DATETIME:
                            if($this->is_primary) {
                                $table->dateTime($this->column_name)->primary();
                            }
                            $table->dateTime($this->column_name);
                            break;
                        case DataType::UUID:
                            if($this->is_primary) {
                                $table->uuid($this->column_name)->primary();
                            }
                            $table->uuid($this->column_name);
                            break;
                        default:
                            throw new Exception("Data Type not exist! Data Type available: " . collect(DataType::cases())->join(", ", " and "));
                    }
                });
            }
        } else {
            throw new Exception("Class not found", 500);
        }
    }
}

?>