<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public function getCompany1()
    {
        return $this->hasOne(Company::class, 'member_id', 'id');
    }
    public function getCompany2()
    {
        return $this->hasMany(Company::class, 'member_id', 'id');
    }
    public function getCompany3()
    {
        return $this->belongsTo(Number::class, 'company_id', 'id');
    }
    public function getCompany4()
    {
        return $this->hasOneThrough(Company::class, Number::class, 'company_id', 'member_id', 'id','id');
    }
}
