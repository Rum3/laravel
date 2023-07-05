<div>
    <button wire:click="addRow">Add Row</button>

    @foreach ($rows as $index => $row)
        <div>
            <input type="text" wire:model="rows.{{ $index }}" />
            <button wire:click="deleteRow({{ $index }})">Delete</button>
        </div>
    @endforeach
</div>
