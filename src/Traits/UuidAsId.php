<?php

namespace JasonMcCallister\UuidAsId\Traits;

use Ramsey\Uuid\Uuid;

trait UuidAsId
{
    public static function bootUuidAsId(): void
    {
        static::creating(function ($model) {
            if (!$model->{$model->getKeyName()}) {
                $model->{$model->getKeyName()} = Uuid::uuid4()->toString();
            }
        });
    }

    public function getIncrementing(): bool
    {
        return false;
    }
}
