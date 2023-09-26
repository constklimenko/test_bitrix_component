<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Mail\Event;
use Bitrix\Main\Context;

class NewFormComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        if ($this->startResultCache()) {

            $request = Context::getCurrent()->getRequest();

            if($request->isPost()){
                $arFields = array(
                    "AUTHOR"       => $request->getPost("user_name"),
                    "AUTHOR_EMAIL" => $request->getPost("user_email"),
                    "TEXT"         => $request->getPost("MESSAGE"),
                );

                Event::Send([
                    "EVENT_NAME" => "FEEDBACK_FORM",
                    "LID"        => "s1",
                    "C_FIELDS"   => $arFields,
                ]);
            }
            $this->IncludeComponentTemplate();
        }
    }

}
