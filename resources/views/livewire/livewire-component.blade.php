<div>
    <div class="border m-5 p-2">this is a livewire component
        <div class="border m-5 p-2">
            Echo a this variable works if noc child livewire-component is present:<br>
            <p class="text-green-500"> {{$this->variable}}  </p>
        </div>
        <div class="border m-5 p-2">
            Here Is a Jetstream component:
            <hr>
            <x-example-component>
                @if($this->showChild)
                    Child-Component:
                    <livewire:livewire-child-component></livewire:livewire-child-component>
                @endif
            </x-example-component>
        </div>
    </div>
    <button class="rounded bg-blue-500 text-white shadow border p-2 m-5" wire:click="child">Show Child, will throw a "Using $this when not in object context" Error</button>
</div>
