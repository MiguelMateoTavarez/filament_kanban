<?php

namespace App\Livewire;

use App\Models\Column;
use App\Models\Task;
use Livewire\Component;

class KanbanBoard extends Component
{
    public $columns;

    public function mount()
    {
        $this->columns = Column::with('tasks')->get();
    }

    public function updateTaskOrder($taskId, $newColumnId)
    {
        $task = Task::find($taskId);
        $task->column_id = $newColumnId;
        $task->save();

        $this->columns = Column::with('tasks')->get(); // Refresh columns and tasks
    }

    public function render()
    {
        return view('livewire.kanban-board');
    }
}
