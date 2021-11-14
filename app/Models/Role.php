<?php

namespace App\Models;

use App\Http\Requests\RoleFormRequest;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;
    public $validation;
    public function __construct(array $attributes = []) {
        $this->validation = new RoleFormRequest;
        $this->fillable = Schema::getColumnListing($this->getTable());
        parent::__construct($attributes);
    }
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            //$model->created_by = auth()->id();
            $model->updated_at = null;
        });
        self::updating(function ($model) {
           // $model->updated_by = auth()->id();
        });
    }

    public function permissions()
    {
        return $this->hasMany(Permission::class,'role_id')->orderBy('index');
    }

}
