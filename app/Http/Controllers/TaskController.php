<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function createTask() {
        return 'Create Task';
    }

    public function getTask() {
        return 'Get Tasks';
    }

    public function updateTask($id) {
        return 'Update Tasks with id: ' .$id;
    }

    public function deleteTask($id) {
        return 'Delete Task with id: ' .$id;;
    }
};

