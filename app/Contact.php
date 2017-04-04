<?php
use Illuminate\Database\Eloquent\Model;
use AlgoliaSearch\Laravel\AlgoliaEloquentTrait;
namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use AlgoliaEloquentTrait;

    public function getAlgoliaRecord()
    {
        return array_merge($this->toArray(), [
            'custom_name' => 'Custom Name'
        ]);
    }

    public $algoliaSettings = [
        'searchableAttributes' => [
            'id',
            'name',
        ],
        'customRanking' => [
            'desc(popularity)',
            'asc(name)',
        ],
    ];
}
Contact::reindex();
Contact::setSettings();
