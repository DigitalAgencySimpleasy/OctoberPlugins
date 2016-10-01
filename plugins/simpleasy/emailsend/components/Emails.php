<?php namespace Simpleasy\Emailsend\Components;

use Cms\Classes\ComponentBase;
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
        return [];
    }

    public function getEmails()
    {
        return Email::orderBy('id', 'desc')->get();
    }

    public function onSendEmail()
    {
        $emailSender = post('sender');
        $emailEmail = post('email');
        $emailMessage = post('message');

        $sendTo = 'dmitry.barchuk@gmail.com';

        $email = new Email();
        $email->sender = $emailSender;
        $email->email = $emailEmail;
        $email->message = $emailMessage;
        $email->save();

        mail($sendTo, $emailSender, $emailMessage);
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