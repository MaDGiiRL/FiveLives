<div class="assistant-widget">
    <!-- Bottone Flottante -->
    <button class="assistant-toggle" wire:click="toggleAssistant">
        <i class="bi bi-robot"></i>
    </button>

    <!-- Box dell'assistente -->
    @if ($isOpen)
    <div class="shadow-lg text-white">
        <div class="assistant-container shadow-lg">
            <div class="assistant-box text-white">
                <div class="assistant-header">
                    <h5 class="text-white">Five <span class="text-yellow">Lives</span> AI - Meet <span class="text-yellow">Bobby</span>!</h5> <button wire:click="clearChat" class="btn-outline-danger small btn">Delete</button>
                    <button class="assistant-close" wire:click="toggleAssistant">✖</button>
                </div>
                <div class="assistant-body">
                    <div class="assistant-body" wire:loading.class="opacity-50">
                        @if(count($messages))
                        @foreach ($messages as $message)
                        <div class="assistant-message my-2">
                            <span class="text-ai"><strong>Tu:</strong> </span>
                            {{ $message['user_message'] }}
                        </div>
                        <div class="assistant-response my-2">
                            <span class="text-ai"><strong>Bobby:</strong> </span>
                            {!! $message['ai_response'] !!}
                        </div>
                        @endforeach
                        @elseif ($response && !Auth::check())
                        <div class="assistant-message my-2">
                            <span class="text-ai"><strong>Tu:</strong> </span>
                            {{ $prompt }}
                        </div>
                        <div class="assistant-response my-2">
                            <span class="text-ai"><strong>Bobby:</strong> </span>
                            {!! $response !!}
                        </div>
                        @else
                        <p class="text-white">Chat is empty! 😄</p>
                        @endif
                    </div>
                </div>
                <div class="assistant-footer">
                    <form method="POST" wire:submit.prevent="talk" class="assistant-form">
                        <div class="input-group">
                            <input type="text" wire:model="prompt" class=" form-control" placeholder="Chiedi qualcosa..." required>
                            <button class="btn btn-outline-danger" type="submit">
                                <i class="bi bi-send"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>