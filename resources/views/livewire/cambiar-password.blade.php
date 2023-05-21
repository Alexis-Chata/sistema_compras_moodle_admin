<div class="container">
    <div class="row">
        <div class="col-auto mb-2">
            <label for="pass_actual">Contraseña Actual</label>
            <input type="password" id='pass_actual' class="form-control" wire:model='pass_actual'>
            @error('pass_actual') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-auto">
            <label for="pass_actual">Contraseña Nueva</label>
            <input type="password" id='pass_nueva' class="form-control" wire:model='pass_nueva'>
            @error('pass_nueva') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-auto">
            <label for="pass_actual">Confirmar contraseña nueva</label>
            <input type="password" id='pass_nueva2' class="form-control" wire:model='pass_nueva2'>
            @error('pass_nueva2') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-auto">
            <button class="btn btn-primary" wire:click="cambiar">Reiniciar Contraseña</button>
        </div>
    </div>
    @if ($mensaje != null)
    <div class="alert alert-warning" role="alert">
        {{$mensaje}}
    </div>
    @endif
</div>
