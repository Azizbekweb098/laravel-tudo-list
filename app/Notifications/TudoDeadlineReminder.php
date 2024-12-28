<?php
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class TudoDeadlineReminder extends Notification
{
    use Queueable;

    public $tudo;

    public function __construct($tudo)
    {
        $this->tudo = $tudo;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Eslatma: Vazifa muddati yaqinlashmoqda')
                    ->line("Sizning '{$this->tudo->title}' nomli vazifangiz muddati yaqinlashmoqda.")
                    ->action('Vazifani ko‘rish', url('/tudos/'.$this->tudo->id))
                    ->line('Iltimos, o‘z vaqtida bajarishni unutmang!');
    }
}
