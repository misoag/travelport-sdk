<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeLoggingLevel EnumType
 * Meta information extracted from the WSDL
 * - documentation: The type of various Logging levels
 * @subpackage Enumerations
 */
class TypeLoggingLevel extends AbstractStructEnumBase
{
    /**
     * Constant for value 'TRACE'
     * @return string 'TRACE'
     */
    const VALUE_TRACE = 'TRACE';
    /**
     * Constant for value 'DEBUG'
     * @return string 'DEBUG'
     */
    const VALUE_DEBUG = 'DEBUG';
    /**
     * Constant for value 'INFO'
     * @return string 'INFO'
     */
    const VALUE_INFO = 'INFO';
    /**
     * Constant for value 'WARN'
     * @return string 'WARN'
     */
    const VALUE_WARN = 'WARN';
    /**
     * Constant for value 'ERROR'
     * @return string 'ERROR'
     */
    const VALUE_ERROR = 'ERROR';
    /**
     * Constant for value 'FATAL'
     * @return string 'FATAL'
     */
    const VALUE_FATAL = 'FATAL';
    /**
     * Return allowed values
     * @uses self::VALUE_TRACE
     * @uses self::VALUE_DEBUG
     * @uses self::VALUE_INFO
     * @uses self::VALUE_WARN
     * @uses self::VALUE_ERROR
     * @uses self::VALUE_FATAL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_TRACE,
            self::VALUE_DEBUG,
            self::VALUE_INFO,
            self::VALUE_WARN,
            self::VALUE_ERROR,
            self::VALUE_FATAL,
        ];
    }
}
