<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded=[];
    protected $lang_fields = [
        'address'
    ];
    public function getAttribute($key)
    {
        $default = parent::getAttribute($key);
        if (isset($this->lang_fields) && is_array($this->lang_fields) && in_array($key, $this->lang_fields)) {
            return $this->{$key.'_'.app()->getLocale()} ?? '';
        }
        return $default;
    }
}
