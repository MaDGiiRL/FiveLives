<div>
    <form wire:submit.prevent="submit" class="contactForm">
        <div class="row g-2">
            <div class="col-md-6">
                <input type="text" wire:model.defer="name" placeholder="Nome">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6">
                <input type="email" wire:model.defer="email" placeholder="Email">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="mt-3">
            <input type="text" wire:model.defer="subject" placeholder="Oggetto del messaggio">
            @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mt-3">
            <textarea wire:model.defer="body" rows="4" placeholder="Scrivi qui il tuo messaggio.."></textarea>
            @error('body') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mt-3">
            <button type="submit" class="btn yellow-button w-100">Invia Messaggio</button>
        </div>
    </form>
</div>