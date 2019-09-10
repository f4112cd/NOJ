<?php

namespace App\Models\Eloquent;

use Illuminate\Database\Eloquent\Model;
class GroupModel extends Model
{
    protected $table='group';
    protected $primaryKey='gid';
    const DELETED_AT=null;
    const UPDATED_AT=null;
    const CREATED_AT=null;
}
