<div>
    <div class="form-group">
        <label>Email Address</label>
        <input class="form-control @if($emailMessage) is-invalid @else @error('email') is-invalid @enderror @endif" wire:blur="checkEmail" wire:model="email" type="email" placeholder="Email" name="email">

        @if($emailMessage)
            <div class="text-danger">{{$emailMessage}}</div>
        @else
            @error('email')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        @endif
    </div>
</div>
