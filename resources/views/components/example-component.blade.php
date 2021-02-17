<div>
    <div class="border m-5">
        Echo a "this" variable, works if there is no child livewire-component is present:<br>
        <p class="text-green-500"> {{$this->anotherVariable}} </p>
    </div>
    <div class="border m-5">
        On button click we try to add a child livewire-component here:
        {{$slot}}
    </div>
</div>
