<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeQueueModifyAction EnumType
 * Meta information extracted from the WSDL
 * - documentation: Queue action: remove, requeue, move, add, unlock
 * @subpackage Enumerations
 */
class TypeQueueModifyAction extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Remove'
     * @return string 'Remove'
     */
    const VALUE_REMOVE = 'Remove';
    /**
     * Constant for value 'Requeue'
     * @return string 'Requeue'
     */
    const VALUE_REQUEUE = 'Requeue';
    /**
     * Constant for value 'Move'
     * @return string 'Move'
     */
    const VALUE_MOVE = 'Move';
    /**
     * Constant for value 'Add'
     * @return string 'Add'
     */
    const VALUE_ADD = 'Add';
    /**
     * Constant for value 'Unlock'
     * @return string 'Unlock'
     */
    const VALUE_UNLOCK = 'Unlock';
    /**
     * Return allowed values
     * @uses self::VALUE_REMOVE
     * @uses self::VALUE_REQUEUE
     * @uses self::VALUE_MOVE
     * @uses self::VALUE_ADD
     * @uses self::VALUE_UNLOCK
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_REMOVE,
            self::VALUE_REQUEUE,
            self::VALUE_MOVE,
            self::VALUE_ADD,
            self::VALUE_UNLOCK,
        ];
    }
}
