<div>

{{-- Header now moved into it's own component page-header.blade.php --}}
  {{-- <header class="flex justify-between">
    <div>
      <h2>Hi, {{ $name }}</h2>
      <p>Here's a list of your book reviews...</p>
    </div> --}}

    {{-- <form action="">
      <span class="mr-2">Your Name: </span>
      <input type="text" wire:model="name"> --}}
      {{-- Prevent default form refresh, instead refresh "name" with new value so DOM updated --}}
      {{-- <button wire:click.prevent="$refresh">Update</button>
    </form> --}}

    {{-- Does same as above but neater focusing on form's submit --}}
    {{-- We change the once hard coded "name" to whatever we enter in the form --}}
    {{-- <form wire:submit="$refresh">
      <span class="mr-2">Your Name: </span>
      <input type="text" wire:model="name">
      <button>Update</button>
    </form> --}}

    {{-- Same as above but modifies "name" .live after every keystroke --}}
    {{-- If we want to save on resources we add ".debounce" so data is entered only after a set time
    that we stopped typing eg 500 milliseconds --}}
    {{-- <form wire:submit="$refresh">
      <span class="mr-2">Your Name: </span>
      <input type="text" wire:model.live.debounce.500ms="name">
      <button>Update</button>
    </form>
  </header> --}}

  <livewire:page-header subtitle="Here is a list of your books..." />

  {{-- Only take in the user's result if we leave the field for 300 milliseconds without typing --}}
  <input type="text" wire:model.live.debounce.300ms="term" placeholder="Search for Books..." class="search">

    <ul class="list">
    @foreach($books as $book)
      <li wire:key="{{ $book->id }}">
        <button
        wire:click="delete({{ $book->id }})"
        >
          Delete
        </button>
        <h3>{{ $book->title }}</h3>
        <h4>{{ $book->author }}</h4>
        <p>Rating: {{ $book->rating }}/10</p>
      </li>
    @endforeach
  </ul>
</div>
