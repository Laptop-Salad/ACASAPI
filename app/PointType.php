<?php

namespace App;

enum PointType: string
{
    case Grade = 'G';
    case Attendance = 'A';
    case Behaviour = 'B';
    case Other = 'O';

    public static function values(): array
    {
        return [
            self::Grade,
            self::Attendance,
            self::Behaviour,
            self::Other,
        ];
    }
    function display()
    {
        return $this->name;
    }
}
