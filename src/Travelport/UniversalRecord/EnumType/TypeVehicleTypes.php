<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeVehicleTypes EnumType
 * @subpackage Enumerations
 */
class TypeVehicleTypes extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AnyVehicle'
     * Meta information extracted from the WSDL
     * - documentation: Any vehicle - GDS Pseudo Code ACAR
     * @return string 'AnyVehicle'
     */
    const VALUE_ANY_VEHICLE = 'AnyVehicle';
    /**
     * Constant for value 'Any2-3DoorVehicle'
     * Meta information extracted from the WSDL
     * - documentation: Any 2-3 door vehicle - GDS Pseudo Code ALLB
     * @return string 'Any2-3DoorVehicle'
     */
    const VALUE_ANY_2_3_DOOR_VEHICLE = 'Any2-3DoorVehicle';
    /**
     * Constant for value 'Any2-3DoorPassengerCar'
     * Meta information extracted from the WSDL
     * - documentation: Any 2-3 door passenger cars - GDS Pseudo Code ALBC
     * @return string 'Any2-3DoorPassengerCar'
     */
    const VALUE_ANY_2_3_DOOR_PASSENGER_CAR = 'Any2-3DoorPassengerCar';
    /**
     * Constant for value 'Any2-4DoorVehicle'
     * Meta information extracted from the WSDL
     * - documentation: Any 2-4 door vehicle - GDS Pseudo Code ALLC
     * @return string 'Any2-4DoorVehicle'
     */
    const VALUE_ANY_2_4_DOOR_VEHICLE = 'Any2-4DoorVehicle';
    /**
     * Constant for value 'Any2-4DoorPassengerCar'
     * Meta information extracted from the WSDL
     * - documentation: Any 2-4 door passenger cars - GDS Pseudo Code ALCC
     * @return string 'Any2-4DoorPassengerCar'
     */
    const VALUE_ANY_2_4_DOOR_PASSENGER_CAR = 'Any2-4DoorPassengerCar';
    /**
     * Constant for value 'Any4-5DoorVehicle'
     * Meta information extracted from the WSDL
     * - documentation: Any 4-5 door vehicle - GDS Pseudo Code ALLD
     * @return string 'Any4-5DoorVehicle'
     */
    const VALUE_ANY_4_5_DOOR_VEHICLE = 'Any4-5DoorVehicle';
    /**
     * Constant for value 'Any4DoorPassengerCar'
     * Meta information extracted from the WSDL
     * - documentation: Any 4 door passenger cars - GDS Pseudo Code ALDC
     * @return string 'Any4DoorPassengerCar'
     */
    const VALUE_ANY_4_DOOR_PASSENGER_CAR = 'Any4DoorPassengerCar';
    /**
     * Constant for value 'AnyElite'
     * Meta information extracted from the WSDL
     * - documentation: Any elite - GDS Pseudo Code AELT
     * @return string 'AnyElite'
     */
    const VALUE_ANY_ELITE = 'AnyElite';
    /**
     * Constant for value 'AnyCoupe-Roadster'
     * Meta information extracted from the WSDL
     * - documentation: Any Coupe and/or Roadster - GDS Pseudo Code ACPR
     * @return string 'AnyCoupe-Roadster'
     */
    const VALUE_ANY_COUPE_ROADSTER = 'AnyCoupe-Roadster';
    /**
     * Constant for value 'AnySpecial'
     * Meta information extracted from the WSDL
     * - documentation: Any Special - GDS Pseudo Code ASPC
     * @return string 'AnySpecial'
     */
    const VALUE_ANY_SPECIAL = 'AnySpecial';
    /**
     * Constant for value 'AnyPickUp'
     * Meta information extracted from the WSDL
     * - documentation: Any PickUp - GDS Pseudo Code APUP
     * @return string 'AnyPickUp'
     */
    const VALUE_ANY_PICK_UP = 'AnyPickUp';
    /**
     * Constant for value 'AnyWagon'
     * Meta information extracted from the WSDL
     * - documentation: Any Wagon - GDS Pseudo Code AWGN
     * @return string 'AnyWagon'
     */
    const VALUE_ANY_WAGON = 'AnyWagon';
    /**
     * Constant for value 'AnyRecreationalVehicle'
     * Meta information extracted from the WSDL
     * - documentation: Any Recreational Vehicle - GDS Pseudo Code AREC
     * @return string 'AnyRecreationalVehicle'
     */
    const VALUE_ANY_RECREATIONAL_VEHICLE = 'AnyRecreationalVehicle';
    /**
     * Constant for value 'AnySUV'
     * Meta information extracted from the WSDL
     * - documentation: Any SUV - GDS Pseudo Code ASUV
     * @return string 'AnySUV'
     */
    const VALUE_ANY_SUV = 'AnySUV';
    /**
     * Constant for value 'AnyPassengerVan'
     * Meta information extracted from the WSDL
     * - documentation: Any Passenger Van - GDS Pseudo Code AVAN
     * @return string 'AnyPassengerVan'
     */
    const VALUE_ANY_PASSENGER_VAN = 'AnyPassengerVan';
    /**
     * Constant for value 'Any6PassengerVanOrSUV'
     * Meta information extracted from the WSDL
     * - documentation: Any 6 Passenger Van or SUV - GDS Pseudo Code ASIX
     * @return string 'Any6PassengerVanOrSUV'
     */
    const VALUE_ANY_6_PASSENGER_VAN_OR_SUV = 'Any6PassengerVanOrSUV';
    /**
     * Constant for value 'Any7PassengerVanOrSUV'
     * Meta information extracted from the WSDL
     * - documentation: Any 7 Passenger Van or SUV - GDS Pseudo Code ASEV
     * @return string 'Any7PassengerVanOrSUV'
     */
    const VALUE_ANY_7_PASSENGER_VAN_OR_SUV = 'Any7PassengerVanOrSUV';
    /**
     * Constant for value 'Any8PassengerVanOrSUV'
     * Meta information extracted from the WSDL
     * - documentation: Any 8 Passenger Van or SUV - GDS Pseudo Code AEIG
     * @return string 'Any8PassengerVanOrSUV'
     */
    const VALUE_ANY_8_PASSENGER_VAN_OR_SUV = 'Any8PassengerVanOrSUV';
    /**
     * Constant for value 'Any4OrAllWheelDrive'
     * Meta information extracted from the WSDL
     * - documentation: Any 4 or all wheel drive- GDS Pseudo Code AFWD
     * @return string 'Any4OrAllWheelDrive'
     */
    const VALUE_ANY_4_OR_ALL_WHEEL_DRIVE = 'Any4OrAllWheelDrive';
    /**
     * Constant for value 'AnyAllTerrainVehicle'
     * Meta information extracted from the WSDL
     * - documentation: Any all Terrain Vehicle- GDS Pseudo Code ATRV
     * @return string 'AnyAllTerrainVehicle'
     */
    const VALUE_ANY_ALL_TERRAIN_VEHICLE = 'AnyAllTerrainVehicle';
    /**
     * Constant for value 'AnyCommercialTruck'
     * Meta information extracted from the WSDL
     * - documentation: Any commercial truck- GDS Pseudo Code ACGO
     * @return string 'AnyCommercialTruck'
     */
    const VALUE_ANY_COMMERCIAL_TRUCK = 'AnyCommercialTruck';
    /**
     * Constant for value 'AnyLimousine'
     * Meta information extracted from the WSDL
     * - documentation: Any Limousine- GDS Pseudo Code ALMO
     * @return string 'AnyLimousine'
     */
    const VALUE_ANY_LIMOUSINE = 'AnyLimousine';
    /**
     * Constant for value 'AnySport'
     * Meta information extracted from the WSDL
     * - documentation: Any Sport- GDS Pseudo Code ASPT
     * @return string 'AnySport'
     */
    const VALUE_ANY_SPORT = 'AnySport';
    /**
     * Constant for value 'AnyConvertible'
     * Meta information extracted from the WSDL
     * - documentation: Any Convertible- GDS Pseudo Code ACNV
     * @return string 'AnyConvertible'
     */
    const VALUE_ANY_CONVERTIBLE = 'AnyConvertible';
    /**
     * Constant for value 'AnySpecialOfferVehicle'
     * Meta information extracted from the WSDL
     * - documentation: Any Special Offer Vehicle- GDS Pseudo Code AOFR
     * @return string 'AnySpecialOfferVehicle'
     */
    const VALUE_ANY_SPECIAL_OFFER_VEHICLE = 'AnySpecialOfferVehicle';
    /**
     * Constant for value 'AnyMonospace'
     * Meta information extracted from the WSDL
     * - documentation: Any Monospace- GDS Pseudo Code AMNO
     * @return string 'AnyMonospace'
     */
    const VALUE_ANY_MONOSPACE = 'AnyMonospace';
    /**
     * Constant for value 'AnyMotorHome'
     * Meta information extracted from the WSDL
     * - documentation: Any Motor Home- GDS Pseudo Code AMTO
     * @return string 'AnyMotorHome'
     */
    const VALUE_ANY_MOTOR_HOME = 'AnyMotorHome';
    /**
     * Constant for value 'Any2WheelVehicle'
     * Meta information extracted from the WSDL
     * - documentation: Any 2-Wheel Vehicle- GDS Pseudo Code AMCY
     * @return string 'Any2WheelVehicle'
     */
    const VALUE_ANY_2_WHEEL_VEHICLE = 'Any2WheelVehicle';
    /**
     * Constant for value 'AnyCrossover'
     * Meta information extracted from the WSDL
     * - documentation: Any Crossover- GDS Pseudo Code ACRS
     * @return string 'AnyCrossover'
     */
    const VALUE_ANY_CROSSOVER = 'AnyCrossover';
    /**
     * Constant for value 'AllManualTransmissionVehicles'
     * Meta information extracted from the WSDL
     * - documentation: All Manual Transmission Vehicles- GDS Pseudo Code AMAN
     * @return string 'AllManualTransmissionVehicles'
     */
    const VALUE_ALL_MANUAL_TRANSMISSION_VEHICLES = 'AllManualTransmissionVehicles';
    /**
     * Constant for value 'AllAutomaticTransmissionVehicles'
     * Meta information extracted from the WSDL
     * - documentation: All Automatic Transmission Vehicles- GDS Pseudo Code AUTO
     * @return string 'AllAutomaticTransmissionVehicles'
     */
    const VALUE_ALL_AUTOMATIC_TRANSMISSION_VEHICLES = 'AllAutomaticTransmissionVehicles';
    /**
     * Constant for value 'AllGasolineVehicles'
     * Meta information extracted from the WSDL
     * - documentation: All Gasoline Powered Vehicles- GDS Pseudo Code AGAS
     * @return string 'AllGasolineVehicles'
     */
    const VALUE_ALL_GASOLINE_VEHICLES = 'AllGasolineVehicles';
    /**
     * Constant for value 'AllPetrolVehicles'
     * Meta information extracted from the WSDL
     * - documentation: All Petrol Powered Vehicles- GDS Pseudo Code APET
     * @return string 'AllPetrolVehicles'
     */
    const VALUE_ALL_PETROL_VEHICLES = 'AllPetrolVehicles';
    /**
     * Constant for value 'AllDieselVehicles'
     * Meta information extracted from the WSDL
     * - documentation: All Diesel Powered Vehicles- GDS Pseudo Code ADSL
     * @return string 'AllDieselVehicles'
     */
    const VALUE_ALL_DIESEL_VEHICLES = 'AllDieselVehicles';
    /**
     * Constant for value 'AnyGreenVehicle'
     * Meta information extracted from the WSDL
     * - documentation: Any Green vehicle (hybrid, electric, LPG, hydrogen, multi-fuel)- GDS Pseudo Code AGRN
     * @return string 'AnyGreenVehicle'
     */
    const VALUE_ANY_GREEN_VEHICLE = 'AnyGreenVehicle';
    /**
     * Constant for value 'AllHybridVehicles'
     * Meta information extracted from the WSDL
     * - documentation: All Hybrid Vehicles- GDS Pseudo Code AHYB
     * @return string 'AllHybridVehicles'
     */
    const VALUE_ALL_HYBRID_VEHICLES = 'AllHybridVehicles';
    /**
     * Constant for value 'AllElectricVehicles'
     * Meta information extracted from the WSDL
     * - documentation: All Electric powered vehicles- GDS Pseudo Code AELC
     * @return string 'AllElectricVehicles'
     */
    const VALUE_ALL_ELECTRIC_VEHICLES = 'AllElectricVehicles';
    /**
     * Constant for value 'AllHydrogenVehicles'
     * Meta information extracted from the WSDL
     * - documentation: All Hydrogen powered vehicles- GDS Pseudo Code AHYD
     * @return string 'AllHydrogenVehicles'
     */
    const VALUE_ALL_HYDROGEN_VEHICLES = 'AllHydrogenVehicles';
    /**
     * Constant for value 'AllMultiFuelVehicles'
     * Meta information extracted from the WSDL
     * - documentation: All Multi-Fuel powered vehicles- GDS Pseudo Code AMFP
     * @return string 'AllMultiFuelVehicles'
     */
    const VALUE_ALL_MULTI_FUEL_VEHICLES = 'AllMultiFuelVehicles';
    /**
     * Constant for value 'AllLPGVehicles'
     * Meta information extracted from the WSDL
     * - documentation: All LPG/Compressed Gas powered vehicles- GDS Pseudo Code ACPG
     * @return string 'AllLPGVehicles'
     */
    const VALUE_ALL_LPGVEHICLES = 'AllLPGVehicles';
    /**
     * Constant for value 'AllEthanolVehicles'
     * Meta information extracted from the WSDL
     * - documentation: All Ethanol powered vehicles - GDS Pseudo Code AETH
     * @return string 'AllEthanolVehicles'
     */
    const VALUE_ALL_ETHANOL_VEHICLES = 'AllEthanolVehicles';
    /**
     * Return allowed values
     * @uses self::VALUE_ANY_VEHICLE
     * @uses self::VALUE_ANY_2_3_DOOR_VEHICLE
     * @uses self::VALUE_ANY_2_3_DOOR_PASSENGER_CAR
     * @uses self::VALUE_ANY_2_4_DOOR_VEHICLE
     * @uses self::VALUE_ANY_2_4_DOOR_PASSENGER_CAR
     * @uses self::VALUE_ANY_4_5_DOOR_VEHICLE
     * @uses self::VALUE_ANY_4_DOOR_PASSENGER_CAR
     * @uses self::VALUE_ANY_ELITE
     * @uses self::VALUE_ANY_COUPE_ROADSTER
     * @uses self::VALUE_ANY_SPECIAL
     * @uses self::VALUE_ANY_PICK_UP
     * @uses self::VALUE_ANY_WAGON
     * @uses self::VALUE_ANY_RECREATIONAL_VEHICLE
     * @uses self::VALUE_ANY_SUV
     * @uses self::VALUE_ANY_PASSENGER_VAN
     * @uses self::VALUE_ANY_6_PASSENGER_VAN_OR_SUV
     * @uses self::VALUE_ANY_7_PASSENGER_VAN_OR_SUV
     * @uses self::VALUE_ANY_8_PASSENGER_VAN_OR_SUV
     * @uses self::VALUE_ANY_4_OR_ALL_WHEEL_DRIVE
     * @uses self::VALUE_ANY_ALL_TERRAIN_VEHICLE
     * @uses self::VALUE_ANY_COMMERCIAL_TRUCK
     * @uses self::VALUE_ANY_LIMOUSINE
     * @uses self::VALUE_ANY_SPORT
     * @uses self::VALUE_ANY_CONVERTIBLE
     * @uses self::VALUE_ANY_SPECIAL_OFFER_VEHICLE
     * @uses self::VALUE_ANY_MONOSPACE
     * @uses self::VALUE_ANY_MOTOR_HOME
     * @uses self::VALUE_ANY_2_WHEEL_VEHICLE
     * @uses self::VALUE_ANY_CROSSOVER
     * @uses self::VALUE_ALL_MANUAL_TRANSMISSION_VEHICLES
     * @uses self::VALUE_ALL_AUTOMATIC_TRANSMISSION_VEHICLES
     * @uses self::VALUE_ALL_GASOLINE_VEHICLES
     * @uses self::VALUE_ALL_PETROL_VEHICLES
     * @uses self::VALUE_ALL_DIESEL_VEHICLES
     * @uses self::VALUE_ANY_GREEN_VEHICLE
     * @uses self::VALUE_ALL_HYBRID_VEHICLES
     * @uses self::VALUE_ALL_ELECTRIC_VEHICLES
     * @uses self::VALUE_ALL_HYDROGEN_VEHICLES
     * @uses self::VALUE_ALL_MULTI_FUEL_VEHICLES
     * @uses self::VALUE_ALL_LPGVEHICLES
     * @uses self::VALUE_ALL_ETHANOL_VEHICLES
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ANY_VEHICLE,
            self::VALUE_ANY_2_3_DOOR_VEHICLE,
            self::VALUE_ANY_2_3_DOOR_PASSENGER_CAR,
            self::VALUE_ANY_2_4_DOOR_VEHICLE,
            self::VALUE_ANY_2_4_DOOR_PASSENGER_CAR,
            self::VALUE_ANY_4_5_DOOR_VEHICLE,
            self::VALUE_ANY_4_DOOR_PASSENGER_CAR,
            self::VALUE_ANY_ELITE,
            self::VALUE_ANY_COUPE_ROADSTER,
            self::VALUE_ANY_SPECIAL,
            self::VALUE_ANY_PICK_UP,
            self::VALUE_ANY_WAGON,
            self::VALUE_ANY_RECREATIONAL_VEHICLE,
            self::VALUE_ANY_SUV,
            self::VALUE_ANY_PASSENGER_VAN,
            self::VALUE_ANY_6_PASSENGER_VAN_OR_SUV,
            self::VALUE_ANY_7_PASSENGER_VAN_OR_SUV,
            self::VALUE_ANY_8_PASSENGER_VAN_OR_SUV,
            self::VALUE_ANY_4_OR_ALL_WHEEL_DRIVE,
            self::VALUE_ANY_ALL_TERRAIN_VEHICLE,
            self::VALUE_ANY_COMMERCIAL_TRUCK,
            self::VALUE_ANY_LIMOUSINE,
            self::VALUE_ANY_SPORT,
            self::VALUE_ANY_CONVERTIBLE,
            self::VALUE_ANY_SPECIAL_OFFER_VEHICLE,
            self::VALUE_ANY_MONOSPACE,
            self::VALUE_ANY_MOTOR_HOME,
            self::VALUE_ANY_2_WHEEL_VEHICLE,
            self::VALUE_ANY_CROSSOVER,
            self::VALUE_ALL_MANUAL_TRANSMISSION_VEHICLES,
            self::VALUE_ALL_AUTOMATIC_TRANSMISSION_VEHICLES,
            self::VALUE_ALL_GASOLINE_VEHICLES,
            self::VALUE_ALL_PETROL_VEHICLES,
            self::VALUE_ALL_DIESEL_VEHICLES,
            self::VALUE_ANY_GREEN_VEHICLE,
            self::VALUE_ALL_HYBRID_VEHICLES,
            self::VALUE_ALL_ELECTRIC_VEHICLES,
            self::VALUE_ALL_HYDROGEN_VEHICLES,
            self::VALUE_ALL_MULTI_FUEL_VEHICLES,
            self::VALUE_ALL_LPGVEHICLES,
            self::VALUE_ALL_ETHANOL_VEHICLES,
        ];
    }
}
