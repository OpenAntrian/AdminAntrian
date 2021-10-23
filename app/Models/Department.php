<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Department extends Model
{
    use HasFactory, Uuid;

    protected $fillable = [
        'name',
        'queue_code',
        'logo',
        'services_per_day',
        'is_active'
    ];

    public $timestamps = true;

    public $incrementing = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function service()
    {
        return $this->hasMany(DepartmentService::class, 'department_id');
    }

    public static function createDepartment($request) {
        $data = $request->only([
            'name',
            'queue_code',
            'logo',
            'services_per_day',
            'is_active',
        ]);

        $department = self::create($data);

        return $department;
    }

    public function createService($services) {
        foreach ($services as $key => $value) {
            $this->service()->updateOrCreate(
                [
                    'name' => $value['name'],
                ],
                [
                    'name' => $value['name'],
                ]
            );
        }
    } 
}
