<input type="{{ $type }}"
       @if ($livewire)
           wire:model.{{ $livewireMode }}="{{ $fieldKey }}"
       @else
           value="{{ $value }}"
       @endif
       name="{{ $fieldName }}"
       id="{{ $fieldName }}"
       class="@error($fieldKey)is-invalid @enderror @if($hasValue())is-focused @endif"
>
