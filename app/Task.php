<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title','description','dueDate','category_id','tags'];

    public function category() {

        return $this.belongsTo('App\Category');

    }

}
