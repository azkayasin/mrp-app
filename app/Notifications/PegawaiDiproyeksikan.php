<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class PegawaiDiproyeksikan extends Notification
{
    use Queueable;
    protected $data;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }

    public function toDatabase($notifiable)
    {
        $message = $this->data['nip'].' ('.$this->data['nama_pendek'].') diproyeksikan untuk menjadi '.$this->data['formasi_jabatan'].' pada unit/divisi anda';

        return [
            'message' => $message,
            'personnel_area_id' => $this->data['user_id'],
            'mrp_id' => $this->data['mrp_id'],
            'nip' => $this->data['nip']
        ];
    }
}
