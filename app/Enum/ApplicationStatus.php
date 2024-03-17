<?php

namespace App\Enum;

enum ApplicationStatus: string
{
    case Done = 'Выполнено';
    case In_Progress = 'В процессе';
    case Rejected = 'Отклонено';
    case Created = 'Создано';
}