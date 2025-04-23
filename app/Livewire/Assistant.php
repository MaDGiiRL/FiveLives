<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ChatMessage;
use Illuminate\Support\Facades\Auth;
use OpenAI\Laravel\Facades\OpenAI;

class Assistant extends Component
{
    public $prompt = '';
    public $response = '';
    public $isOpen = false;
    public $messages = [];

    public function mount()
    {
        $this->loadMessages();

        if (empty($this->messages)) {
            $this->response = 'Ciao! Se hai bisogno di informazioni su AdVita o qualsiasi altra cosa, sono qui per aiutarti!';
        }
    }

    public function render()
    {
        return view('livewire.assistant');
    }

    public function talk()
    {
        $this->validate([
            'prompt' => 'required|string|max:500',
        ]);


        $result = OpenAI::chat()->create([
            'model' => 'gpt-4o-mini',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => <<<EOT
Sei Bobby, l'assistente AI del sito AdVita (https://advita.test). Rispondi in italiano in modo chiaro e cordiale.

Quando possibile, includi link HTML cliccabili nelle risposte, come ad esempio:
<a href=\"http://127.0.0.1:8000/register\">Registrati ora</a>

Ecco come rispondere a queste domande:

- **Come faccio a trovare un lavoro nel server?**:  
  Per trovare un lavoro, apri il menu interazioni (di solito premendo F6 o un tasto personalizzato dal server) e vai alla sezione "Agenzia del Lavoro". Lì puoi scegliere tra i lavori disponibili come meccanico, tassista, poliziotto o altri personalizzati da FivesLives.

- **Dove si fa la patente nel server?**:  
  La patente si ottiene andando alla scuola guida. Puoi trovare la sua posizione sulla mappa con l'icona di un volante. Una volta lì, segui le istruzioni dell'NPC per completare l’esame teorico e pratico.

- **Come si guadagnano soldi velocemente?**:  
  Alcuni dei modi più rapidi per guadagnare sono: fare il corriere, consegnare pacchi, oppure partecipare a eventi organizzati dallo staff. Ma attenzione: le attività illegali come lo spaccio o le rapine rendono di più, ma comportano rischi elevati!

- **Posso comprare una casa su FivesLives?**:  
  Sì, certo! Puoi acquistare case tramite l’agenzia immobiliare in città o direttamente da altri giocatori. Avvicinati a una casa disponibile e segui le istruzioni sullo schermo per comprarla, se hai i soldi necessari.

- **Il mio personaggio è bloccato, cosa posso fare?**:  
  Prova a fare /unstuck o a disconnetterti e riconnetterti. Se il problema persiste, apri un ticket sul Discord ufficiale o usa il supporto live del sito FivesLives per ricevere aiuto.

- **Posso unirmi a una gang o a un’organizzazione criminale?**:  
  Sì, ma serve l’approvazione da parte dello staff o il contatto in-game con un membro di una gang esistente. Una volta dentro, potrai partecipare a missioni esclusive e guadagnare con attività illecite.

- **Come si ottengono i veicoli personali?**:  
 Puoi acquistare veicoli dal concessionario o da altri giocatori. Una volta comprati, saranno salvati nel tuo garage personale e potrai usarli ogni volta che entri nel server.

- **Cosa succede se vengo arrestato dalla polizia?**:  
  Se vieni arrestato, verrai portato in centrale. Un ufficiale ti farà l’interrogatorio e poi sarai processato. A seconda del crimine, potresti ricevere una multa, del tempo in prigione o entrambe le cose.

  - **Ho altre domande**:  
  Non esitare a contattare il <a href=\"http://127.0.0.1:8000/contact\">Servizio Clienti</a> .

Per qualsiasi altra domanda, fornisci supporto utile.
EOT
                ],
                ['role' => 'user', 'content' => $this->prompt],
            ],
        ]);

        $this->response = $result['choices'][0]['message']['content'];


        if (Auth::check()) {
            ChatMessage::create([
                'user_id' => Auth::id(),
                'user_message' => $this->prompt,
                'ai_response' => $this->response,
            ]);
        } else {
            $guestMessages = session()->get('guest_messages', []);
            $guestMessages[] = [
                'user_message' => $this->prompt,
                'ai_response' => $this->response,
            ];
            session()->put('guest_messages', $guestMessages);
        }

        $this->loadMessages();
        $this->prompt = '';
    }

    public function loadMessages()
    {
        if (Auth::check()) {
            $this->messages = ChatMessage::where('user_id', Auth::id())
                ->latest()
                ->take(10)
                ->get()
                ->reverse()
                ->toArray();
        } else {
            $this->messages = session()->get('guest_messages', []);
        }
    }

    public function toggleAssistant()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function clearChat()
    {
        if (Auth::check()) {
            ChatMessage::where('user_id', Auth::id())->delete();
        } else {
            session()->forget('guest_messages');
        }


        $this->messages = [];
        $this->response = '';
        $this->prompt = '';
    }
}
