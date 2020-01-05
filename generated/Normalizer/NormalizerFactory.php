<?php

namespace Tesla\Api\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new ErrorResponseNormalizer();
        $normalizers[] = new CreateAccessTokenRequestNormalizer();
        $normalizers[] = new CreateAccessTokenResponseNormalizer();
        $normalizers[] = new SetValetRequestNormalizer();
        $normalizers[] = new SpeedLimitRequestNormalizer();
        $normalizers[] = new SetSpeedLimitRequestNormalizer();
        $normalizers[] = new MovePanoRoofRequestNormalizer();
        $normalizers[] = new RemoteSeatHeaterRequestNormalizer();
        $normalizers[] = new RemoteSteeringWheelHeaterRequestNormalizer();
        $normalizers[] = new SetTempsRequestNormalizer();
        $normalizers[] = new SetChargeLimitRequestNormalizer();
        $normalizers[] = new RemoteStartRequestNormalizer();
        $normalizers[] = new OpenTrunkRequestNormalizer();
        $normalizers[] = new NavigationRequestRequestNormalizer();
        $normalizers[] = new NavigationRequestRequestValueNormalizer();
        $normalizers[] = new ShareRequestNormalizer();
        $normalizers[] = new ShareRequestValueNormalizer();
        $normalizers[] = new SentryModeRequestNormalizer();
        $normalizers[] = new MaxDefrostRequestNormalizer();
        $normalizers[] = new WindowControlRequestNormalizer();
        $normalizers[] = new TriggerHomelinkRequestNormalizer();
        $normalizers[] = new GetVehiclesResponseNormalizer();
        $normalizers[] = new VehicleNormalizer();
        $normalizers[] = new VehicleResponseNormalizer();
        $normalizers[] = new MobileAccessResponseNormalizer();
        $normalizers[] = new ChargeStateResponseNormalizer();
        $normalizers[] = new ChargeStateNormalizer();
        $normalizers[] = new ClimateSettingsResponseNormalizer();
        $normalizers[] = new ClimateStateNormalizer();
        $normalizers[] = new DriveStateResponseNormalizer();
        $normalizers[] = new DriveStateNormalizer();
        $normalizers[] = new GuistateResponseNormalizer();
        $normalizers[] = new GuiStateNormalizer();
        $normalizers[] = new VehicleStateResponseNormalizer();
        $normalizers[] = new VehicleStateNormalizer();
        $normalizers[] = new VehicleStateMediaStateNormalizer();
        $normalizers[] = new VehicleStateSoftwareUpdateNormalizer();
        $normalizers[] = new VehicleStateSpeedLimitModeNormalizer();
        $normalizers[] = new VehicleConfigResponseNormalizer();
        $normalizers[] = new VehicleConfigNormalizer();
        $normalizers[] = new VehicleDataResponseNormalizer();
        $normalizers[] = new VehicleDataResponseResponseNormalizer();
        $normalizers[] = new WakeUpResponseNormalizer();
        $normalizers[] = new WakeUpResponseResponseNormalizer();
        $normalizers[] = new CommandResponseNormalizer();
        $normalizers[] = new CommandResponseResponseNormalizer();
        $normalizers[] = new NearbyChargerResponseNormalizer();
        $normalizers[] = new NearbyChargerResponseResponseNormalizer();
        $normalizers[] = new DestinationChargerNormalizer();
        $normalizers[] = new DestinationChargerLocationNormalizer();
        $normalizers[] = new SuperchargerNormalizer();
        $normalizers[] = new SuperchargerLocationNormalizer();
        return $normalizers;
    }
}