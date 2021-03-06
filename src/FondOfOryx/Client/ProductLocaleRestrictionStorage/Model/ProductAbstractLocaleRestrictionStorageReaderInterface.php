<?php

namespace FondOfOryx\Client\ProductLocaleRestrictionStorage\Model;

use Generated\Shared\Transfer\ProductAbstractLocaleRestrictionStorageTransfer;

interface ProductAbstractLocaleRestrictionStorageReaderInterface
{
    /**
     * @param int $idProductAbstract
     *
     * @return \Generated\Shared\Transfer\ProductAbstractLocaleRestrictionStorageTransfer|null
     */
    public function getByIdProductAbstract(int $idProductAbstract): ?ProductAbstractLocaleRestrictionStorageTransfer;

    /**
     * @param array<int> $productAbstractIds
     *
     * @return array<\Generated\Shared\Transfer\ProductAbstractLocaleRestrictionStorageTransfer>
     */
    public function getByProductAbstractIds(array $productAbstractIds): array;
}
