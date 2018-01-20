<?php
namespace App\Acme\Transformers;

class CompetitionTransformer {
    public function team($item)
    {
        return [
            'id' => $item->id,
            'name' => $item->name,
            'points' => $item->points,
        ];
    }

    public function teams($items)
    {
        return $items->map(function($item) {
            return $this->team($item);
        });
    }
}