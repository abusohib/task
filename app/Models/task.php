<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class task extends Model
{
    //use HasFactory;

    public static function insert($taskTitle,$taskDescription)
    {
        DB::insert('insert into task(taskTitle,taskDescription,createDate,taskStatus) values (?, ?,?,?)', [$taskTitle, $taskDescription,now(),1]);
        return DB::getPdo()->lastInsertId();
    }
    
    /**
     * All tasks list
     * @return array()
     */

    public static function allTasks()
    {
         return DB::select('select * from task');
    }

    public static function getTask($taskId)
    {
        return DB::select('select * from task where id=?',[$taskId]);
    }

    public static function updateTask($taskId,$taskTitle,$taskDescription)
    {
       return DB::update("update task set taskTitle=?,taskDescription=? where id=?",[$taskTitle,$taskDescription,$taskId]);
    }

    public static function deleteTask($taskId)
    {
        return DB::delete("delete from task where id=?", [$taskId]);
    }

}
