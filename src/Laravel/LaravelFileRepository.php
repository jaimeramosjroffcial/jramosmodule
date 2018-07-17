<?php

namespace Jramos\Jramosmodule\Laravel;

use Jramos\Jramosmodule\FileRepository;

class LaravelFileRepository extends FileRepository
{
    /**
     * {@inheritdoc}
     */
    protected function createModule(...$args)
    {
        return new Module(...$args);
    }
}
