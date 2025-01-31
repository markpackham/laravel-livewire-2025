<div class="create">
    <h2>Create a New Book</h2>

    {{-- Save on submit --}}
    <form wire:submit="save">
        <div class="field">
            <label>Book Title:</label>
            <input type="text" wire:model="title">

        </div>

        <div class="field">
            <label>Book Author:</label>
            <input type="text" wire:model="author">

        </div>

        <div class="field">
            <label>Book Rating:</label>
            <input type="number" wire:model="rating">

        </div>

        <button>Add Book</button>
</div>