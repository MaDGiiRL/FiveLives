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
            $this->response = 'Ciao! Se hai bisogno di informazioni su FiveLives o qualsiasi altra cosa, sono qui per aiutarti!';
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
Sei Bobby, l'assistente AI del sito FiveLives. Rispondi in italiano in modo chiaro e cordiale.

Quando possibile, includi link HTML cliccabili nelle risposte, come ad esempio:
<a href=\"http://127.0.0.1:8000/register\">Registrati ora</a>

Ecco come rispondere a queste domande:

- **Si può lootare un player?**:  
  Dipende! Ovviamente come ben sai sono vietate le azioni a scopo di loot, ma in determinate situazioni come nelle zone rosse, il loot potrebbe essere ammesso verso le FDO

- **Posso portare un secondo personaggio?**:  
  Il secondo personaggio di per sè è una rottura dell'rp, ma può essere assegnato in determinate situazioni, ha delle regole molto particolari e specifiche per poter esistere.

- **Cosa devo avere per andare in assistenza?**:  
  Per poter far valere la tua in assistenza devi avere una qualsiasi forma di videocamera sul corpo (vedi telefono, bodycam, dashacam ecc), quindi avere una clip dell'azione da contestare o del torto ricevuto

- **Come ricevo assistenza tecnica o di gioco?**:  
  Per qualsiasi tipologia di asssitenza basterà recarsi nella stanza vocale "attesa assistenza" sul discord, dopo ave correttametne compilato il modulo assistenza, sempre sul suddetto discord

- **Cosa posso fare se il mio roleplay è bloccato?**:  
  Per un qualsiasi consiglio roleplay potrai sempre recarti in assistenza.

- **Cosa succede se sono stato bannato?**:  
 In caso di un ban momentaneo basterà attendere la scadenza, in caso invece di ban permanente si potrà richiedere una rivalutazione, in caso contrario non sarà mai più ammesso l'accesso al server.

- **Cosa posso fare se ho trovato un bug/glitch?**:  
 In questo caso ti basterà aprire un ticket nel nostro discord e ci prenderemo cura della situazione.

- **In quale momento è ammesso sparare ad un altro giocatore?**:  
  Sicuramente questa domanda richiede varie specificazioni, dipende dalla situazione in cui ti trovi, e dal ruolo che ricopri (FDO, civile o criminale) per questa domanda ti consiglio una rilettura del regolamento sopratutto regolametni azioni, ingaggio e personaggio

  -**Se sono un medico posso compiere azioni illegali?**:
Un medico di norma non può mai compiere azioni illegali

-**Posso interrompere il lavoro di un medico?**:
No la rianimazione di un giocatore non è mai passibile di interruzione

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
