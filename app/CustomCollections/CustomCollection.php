<?php 

namespace App\CustomCollections;

use Illuminate\Support\Collection;

class CustomCollection extends Collection  {

    /**
     * Remove columns that in parameter
     * @return \App\CustomCollections\CustomCollection
     */
    public function exceptColumns(Collection | array $except_column): \App\CustomCollections\CustomCollection | \Illuminate\Support\Collection {
        return $this->filter(function($item) use($except_column) {
            return !in_array($item, $except_column);
        });
    }
}
?>