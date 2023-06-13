<?php
require_once "Classes/AlterTable.php";

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
?>