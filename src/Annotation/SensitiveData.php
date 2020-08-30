<?php

namespace Endroid\Anonymizer\Annotation;

use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation
 * @Target("PROPERTY")
 */
class SensitiveData
{
    public string $type;

    public function getType(): string
    {
        return $this->type;
    }
}