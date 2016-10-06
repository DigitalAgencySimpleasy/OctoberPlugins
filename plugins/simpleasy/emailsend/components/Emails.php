<?php namespace Simpleasy\Emailsend\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Mail;
use Simpleasy\Emailsend\Models\Email;

class Emails extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Emails Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * This is sender name field
     * @var string
     */
    public $sender;

    /**
     * This is email field
     * @var string
     */
    public $email;

    /**
     * This is message field
     * @var string
     */
    public $message;

    public function defineProperties()
    {
        return [
            'layout' => [
                'title'             => 'Расположение формы',
                'description'       => 'Форма на странице или в модальном окне',
                'type'              => 'dropdown',
                'options'           => ['page' => 'На странице', 'modal' => 'В модальном окне'],
                'default'           => 'page',
            ],
            'email' => [
                'title'             => 'Адресат',
                'description'       => 'Укажите email, на который будут приходить письма',
                'default'           => '',
                'placeholder'       => 'укажите e-mail',
                'validationPattern' => '',
                'validationMessage' => 'Укажите верный e-mail',
            ],
        ];
    }

    public function getProperties()
    {
        $layout = $this->property('layout');
        $sendTo = $this->property('email');
        return [
            'layout' => $layout,
            'sendTo' => $sendTo,
        ];
    }

    public function getEmails()
    {
        return Email::orderBy('id', 'desc')->get();
    }

    public function onSendEmail()
    {
        $vars = ['sender' => post('sender'), 'email' => post('email'), 'msg' => post('message')];
        $emailTo = $this->property('email');

        $email = new Email();
        $email->sender = post('sender');
        $email->email = post('email');
        $email->message = post('message');
        $email->save();

        Mail::send('simpleasy.emailsend::mail.message', $vars, function($message) {

                $message->to($this->property('email'), 'Me');
//                $message->subject('This is a reminder');
            });

//        mail($emailTo, $emailSender, $emailMessage);
    }

    /** Delete items from the list. Ajax call **/
    public function onDelete() {
        /** Check if this is even set **/
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            /** cycle through each id **/
            foreach ($checkedIds as $objectId) {
                /** Check if there's an object actually related to this id
                 * Make sure you replace MODELNAME with your own model you wish to delete from.
                 **/
                if (!$object = Email::find($objectId))
                    continue; /** Screw this, next! **/
                /** Valid item, delete it **/
                $object->delete();
            }

        }
        /** Return the new contents of the list, so the user will feel as if
         * they actually deleted something
         **/
        return $this->listRefresh();
    }

}