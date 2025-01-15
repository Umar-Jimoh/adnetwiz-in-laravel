<?php

namespace App\Enums;

enum PostStatusEnum: string
{
    case Draft = 'Draft';
    case Published = 'Published';

    public static function label(): Array 
    {
        return [
            self::Draft->value => __('Draft'), 
            self::Published->value => __('Published'), 
        ];
    }
}

