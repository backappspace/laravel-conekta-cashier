<?php

namespace Backappspace\ConektaCashier;

interface BillableRepositoryInterface
{
    /**
     * Find a BillableInterface implementation by Conekta ID.
     *
     * @param string $conektaId
     *
     * @return \Backappspace\ConektaCashier\BillableInterface
     */
    public function find($conektaId);
}
