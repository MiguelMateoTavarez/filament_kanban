<div class="flex space-x-4">
    @foreach ($columns as $column)
        <div class="w-1/2 h-60 p-4 bg-blue-50 rounded-lg" x-data="{ columnId: {{ $column->id }} }">
            <h2 class="text-lg font-bold">{{ $column->name }}</h2>
            <div class="mt-4 space-y-2" id="column-{{ $column->id }}" x-init="Sortable.create($el, {
                group: 'shared',
                animation: 150,
                onAdd: function (evt) {
                    const taskId = evt.item.dataset.id;
                    const newColumnId = columnId;
                    @this.call('updateTaskOrder', taskId, newColumnId);
                }
            })">
                @foreach ($column->tasks as $task)
                    <div class="p-2 dark:bg-gray-600 rounded-lg shadow" data-id="{{ $task->id }}">
                        {{ $task->title }}
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
