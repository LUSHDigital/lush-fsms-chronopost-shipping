<?php

declare(strict_types=1);

namespace FSMS\Chronopost;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'resultGetReservedSkybillValue' => '\\FSMS\\Chronopost\\StructType\\ResultGetReservedSkybillValue',
            'resultReservationExpeditionValue' => '\\FSMS\\Chronopost\\StructType\\ResultReservationExpeditionValue',
            'esdValue' => '\\FSMS\\Chronopost\\StructType\\EsdValue',
            'headerValue' => '\\FSMS\\Chronopost\\StructType\\HeaderValue',
            'shipperValue' => '\\FSMS\\Chronopost\\StructType\\ShipperValue',
            'customerValue' => '\\FSMS\\Chronopost\\StructType\\CustomerValue',
            'recipientValue' => '\\FSMS\\Chronopost\\StructType\\RecipientValue',
            'refValue' => '\\FSMS\\Chronopost\\StructType\\RefValue',
            'skybillValue' => '\\FSMS\\Chronopost\\StructType\\SkybillValue',
            'skybillParamsValue' => '\\FSMS\\Chronopost\\StructType\\SkybillParamsValue',
            'scheduledValue' => '\\FSMS\\Chronopost\\StructType\\ScheduledValue',
            'appointmentValue' => '\\FSMS\\Chronopost\\StructType\\AppointmentValue',
            'resultExpeditionValue' => '\\FSMS\\Chronopost\\StructType\\ResultExpeditionValue',
            'esdWithRefClientValue' => '\\FSMS\\Chronopost\\StructType\\EsdWithRefClientValue',
            'esdWithRefClientValueV2' => '\\FSMS\\Chronopost\\StructType\\EsdWithRefClientValueV2',
            'esdValue3' => '\\FSMS\\Chronopost\\StructType\\EsdValue3',
            'headerValueV2' => '\\FSMS\\Chronopost\\StructType\\HeaderValueV2',
            'shipperValueV2' => '\\FSMS\\Chronopost\\StructType\\ShipperValueV2',
            'recipientValueV2' => '\\FSMS\\Chronopost\\StructType\\RecipientValueV2',
            'refValueV2' => '\\FSMS\\Chronopost\\StructType\\RefValueV2',
            'skybillWithDimensionsValue' => '\\FSMS\\Chronopost\\StructType\\SkybillWithDimensionsValue',
            'skybillWithDimensionsValueV2' => '\\FSMS\\Chronopost\\StructType\\SkybillWithDimensionsValueV2',
            'skybillWithDimensionsValueV3' => '\\FSMS\\Chronopost\\StructType\\SkybillWithDimensionsValueV3',
            'skybillWithDimensionsValueV4' => '\\FSMS\\Chronopost\\StructType\\SkybillWithDimensionsValueV4',
            'skybillWithDimensionsValueV5' => '\\FSMS\\Chronopost\\StructType\\SkybillWithDimensionsValueV5',
            'skybillWithDimensionsValueV6' => '\\FSMS\\Chronopost\\StructType\\SkybillWithDimensionsValueV6',
            'skybillWithDimensionsValueV7' => '\\FSMS\\Chronopost\\StructType\\SkybillWithDimensionsValueV7',
            'skybillParamsValueV2' => '\\FSMS\\Chronopost\\StructType\\SkybillParamsValueV2',
            'recipientLocalValue' => '\\FSMS\\Chronopost\\StructType\\RecipientLocalValue',
            'recipientLocalValueV2' => '\\FSMS\\Chronopost\\StructType\\RecipientLocalValueV2',
            'customsValue' => '\\FSMS\\Chronopost\\StructType\\CustomsValue',
            'articleValue' => '\\FSMS\\Chronopost\\StructType\\ArticleValue',
            'resultShippingValue' => '\\FSMS\\Chronopost\\StructType\\ResultShippingValue',
            'resultMultiParcelExpeditionValue' => '\\FSMS\\Chronopost\\StructType\\ResultMultiParcelExpeditionValue',
            'resultMultiParcelValue' => '\\FSMS\\Chronopost\\StructType\\ResultMultiParcelValue',
            'resultExpeditionValueV3' => '\\FSMS\\Chronopost\\StructType\\ResultExpeditionValueV3',
            'resultMonoParcelExpeditionValue' => '\\FSMS\\Chronopost\\StructType\\ResultMonoParcelExpeditionValue',
            'resultGetRouting' => '\\FSMS\\Chronopost\\StructType\\ResultGetRouting',
            'geopostResult' => '\\FSMS\\Chronopost\\StructType\\GeopostResult',
            'skybillValueV2' => '\\FSMS\\Chronopost\\StructType\\SkybillValueV2',
            'resultFaisabiliteESD' => '\\FSMS\\Chronopost\\StructType\\ResultFaisabiliteESD',
            'donneurDOrdre' => '\\FSMS\\Chronopost\\StructType\\DonneurDOrdre',
            'adresseEnlevement' => '\\FSMS\\Chronopost\\StructType\\AdresseEnlevement',
            'adresseEnlevementV2' => '\\FSMS\\Chronopost\\StructType\\AdresseEnlevementV2',
            'adresseEnlevementV3' => '\\FSMS\\Chronopost\\StructType\\AdresseEnlevementV3',
            'particularitesEsd' => '\\FSMS\\Chronopost\\StructType\\ParticularitesEsd',
            'options' => '\\FSMS\\Chronopost\\StructType\\Options',
            'resultEnlevementNational' => '\\FSMS\\Chronopost\\StructType\\ResultEnlevementNational',
            'infoEnlevement' => '\\FSMS\\Chronopost\\StructType\\InfoEnlevement',
            'resultGetReservedSkybillWithTypeValue' => '\\FSMS\\Chronopost\\StructType\\ResultGetReservedSkybillWithTypeValue',
            'destinatairesDpd' => '\\FSMS\\Chronopost\\StructType\\DestinatairesDpd',
            'destinataireDpd' => '\\FSMS\\Chronopost\\StructType\\DestinataireDpd',
            'adresseDestinataire' => '\\FSMS\\Chronopost\\StructType\\AdresseDestinataire',
            'infoClient' => '\\FSMS\\Chronopost\\StructType\\InfoClient',
            'particularites' => '\\FSMS\\Chronopost\\StructType\\Particularites',
            'particularitesColisDpd' => '\\FSMS\\Chronopost\\StructType\\ParticularitesColisDpd',
            'infoDouanieres' => '\\FSMS\\Chronopost\\StructType\\InfoDouanieres',
            'resultPickupOrCollectionRequest' => '\\FSMS\\Chronopost\\StructType\\ResultPickupOrCollectionRequest',
            'resultReservationMultiParcelExpeditionValue' => '\\FSMS\\Chronopost\\StructType\\ResultReservationMultiParcelExpeditionValue',
            'resultParcelValue' => '\\FSMS\\Chronopost\\StructType\\ResultParcelValue',
            'esdResultContraintesAgenceValue' => '\\FSMS\\Chronopost\\StructType\\EsdResultContraintesAgenceValue',
            'esdContraintesAgence' => '\\FSMS\\Chronopost\\StructType\\EsdContraintesAgence',
            'resultReservationMultiParcelExpeditionValueV2' => '\\FSMS\\Chronopost\\StructType\\ResultReservationMultiParcelExpeditionValueV2',
            'resultAnnulerEnlevement' => '\\FSMS\\Chronopost\\StructType\\ResultAnnulerEnlevement',
            'statut' => '\\FSMS\\Chronopost\\StructType\\Statut',
            'entry' => '\\FSMS\\Chronopost\\StructType\\Entry',
            'resultReservationExpeditionValueV2' => '\\FSMS\\Chronopost\\StructType\\ResultReservationExpeditionValueV2',
            'skybillValueBase' => '\\FSMS\\Chronopost\\StructType\\SkybillValueBase',
            'resultShippingInfo' => '\\FSMS\\Chronopost\\StructType\\ResultShippingInfo',
            'error' => '\\FSMS\\Chronopost\\StructType\\Error',
            'detail' => '\\FSMS\\Chronopost\\StructType\\Detail',
            'shippingInfo' => '\\FSMS\\Chronopost\\StructType\\ShippingInfo',
            'getReservedSkybill' => '\\FSMS\\Chronopost\\StructType\\GetReservedSkybill',
            'getReservedSkybillResponse' => '\\FSMS\\Chronopost\\StructType\\GetReservedSkybillResponse',
            'shippingWithReservationAndESDWithRefClientPC' => '\\FSMS\\Chronopost\\StructType\\ShippingWithReservationAndESDWithRefClientPC',
            'shippingWithReservationAndESDWithRefClientPCResponse' => '\\FSMS\\Chronopost\\StructType\\ShippingWithReservationAndESDWithRefClientPCResponse',
            'shippingV3' => '\\FSMS\\Chronopost\\StructType\\ShippingV3',
            'shippingV3Response' => '\\FSMS\\Chronopost\\StructType\\ShippingV3Response',
            'shippingV2' => '\\FSMS\\Chronopost\\StructType\\ShippingV2',
            'shippingV2Response' => '\\FSMS\\Chronopost\\StructType\\ShippingV2Response',
            'shippingWithESDOnlyV2' => '\\FSMS\\Chronopost\\StructType\\ShippingWithESDOnlyV2',
            'shippingWithESDOnlyV2Response' => '\\FSMS\\Chronopost\\StructType\\ShippingWithESDOnlyV2Response',
            'shippingMultiParcelV6' => '\\FSMS\\Chronopost\\StructType\\ShippingMultiParcelV6',
            'shippingMultiParcelV6Response' => '\\FSMS\\Chronopost\\StructType\\ShippingMultiParcelV6Response',
            'shippingMultiParcelV5' => '\\FSMS\\Chronopost\\StructType\\ShippingMultiParcelV5',
            'shippingMultiParcelV5Response' => '\\FSMS\\Chronopost\\StructType\\ShippingMultiParcelV5Response',
            'shippingV7' => '\\FSMS\\Chronopost\\StructType\\ShippingV7',
            'shippingV7Response' => '\\FSMS\\Chronopost\\StructType\\ShippingV7Response',
            'getRouting' => '\\FSMS\\Chronopost\\StructType\\GetRouting',
            'getRoutingResponse' => '\\FSMS\\Chronopost\\StructType\\GetRoutingResponse',
            'shippingMultiParcelV4' => '\\FSMS\\Chronopost\\StructType\\ShippingMultiParcelV4',
            'shippingMultiParcelV4Response' => '\\FSMS\\Chronopost\\StructType\\ShippingMultiParcelV4Response',
            'shippingV6' => '\\FSMS\\Chronopost\\StructType\\ShippingV6',
            'shippingV6Response' => '\\FSMS\\Chronopost\\StructType\\ShippingV6Response',
            'shippingMultiParcelV3' => '\\FSMS\\Chronopost\\StructType\\ShippingMultiParcelV3',
            'shippingMultiParcelV3Response' => '\\FSMS\\Chronopost\\StructType\\ShippingMultiParcelV3Response',
            'shippingV5' => '\\FSMS\\Chronopost\\StructType\\ShippingV5',
            'shippingV5Response' => '\\FSMS\\Chronopost\\StructType\\ShippingV5Response',
            'shippingMultiParcelV2' => '\\FSMS\\Chronopost\\StructType\\ShippingMultiParcelV2',
            'shippingMultiParcelV2Response' => '\\FSMS\\Chronopost\\StructType\\ShippingMultiParcelV2Response',
            'shippingV4' => '\\FSMS\\Chronopost\\StructType\\ShippingV4',
            'shippingV4Response' => '\\FSMS\\Chronopost\\StructType\\ShippingV4Response',
            'faisabiliteESD' => '\\FSMS\\Chronopost\\StructType\\FaisabiliteESD',
            'faisabiliteESDResponse' => '\\FSMS\\Chronopost\\StructType\\FaisabiliteESDResponse',
            'creerEnlevementNational' => '\\FSMS\\Chronopost\\StructType\\CreerEnlevementNational',
            'creerEnlevementNationalResponse' => '\\FSMS\\Chronopost\\StructType\\CreerEnlevementNationalResponse',
            'shippingWithESDOnly' => '\\FSMS\\Chronopost\\StructType\\ShippingWithESDOnly',
            'shippingWithESDOnlyResponse' => '\\FSMS\\Chronopost\\StructType\\ShippingWithESDOnlyResponse',
            'getReservedSkybillWithTypeAndModeByReservation' => '\\FSMS\\Chronopost\\StructType\\GetReservedSkybillWithTypeAndModeByReservation',
            'getReservedSkybillWithTypeAndModeByReservationResponse' => '\\FSMS\\Chronopost\\StructType\\GetReservedSkybillWithTypeAndModeByReservationResponse',
            'creerEnlevementEurope' => '\\FSMS\\Chronopost\\StructType\\CreerEnlevementEurope',
            'creerEnlevementEuropeResponse' => '\\FSMS\\Chronopost\\StructType\\CreerEnlevementEuropeResponse',
            'shippingMultiParcelWithReservation' => '\\FSMS\\Chronopost\\StructType\\ShippingMultiParcelWithReservation',
            'shippingMultiParcelWithReservationResponse' => '\\FSMS\\Chronopost\\StructType\\ShippingMultiParcelWithReservationResponse',
            'rechercherContraintesEnlevement' => '\\FSMS\\Chronopost\\StructType\\RechercherContraintesEnlevement',
            'rechercherContraintesEnlevementResponse' => '\\FSMS\\Chronopost\\StructType\\RechercherContraintesEnlevementResponse',
            'shippingWithReservationAndESDWithRefClient' => '\\FSMS\\Chronopost\\StructType\\ShippingWithReservationAndESDWithRefClient',
            'shippingWithReservationAndESDWithRefClientResponse' => '\\FSMS\\Chronopost\\StructType\\ShippingWithReservationAndESDWithRefClientResponse',
            'shippingMultiParcel' => '\\FSMS\\Chronopost\\StructType\\ShippingMultiParcel',
            'shippingMultiParcelResponse' => '\\FSMS\\Chronopost\\StructType\\ShippingMultiParcelResponse',
            'getReservedSkybillWithTypeAndModeAuth' => '\\FSMS\\Chronopost\\StructType\\GetReservedSkybillWithTypeAndModeAuth',
            'getReservedSkybillWithTypeAndModeAuthResponse' => '\\FSMS\\Chronopost\\StructType\\GetReservedSkybillWithTypeAndModeAuthResponse',
            'shipping' => '\\FSMS\\Chronopost\\StructType\\Shipping',
            'shippingResponse' => '\\FSMS\\Chronopost\\StructType\\ShippingResponse',
            'getReservedSkybillWithTypeAndMode' => '\\FSMS\\Chronopost\\StructType\\GetReservedSkybillWithTypeAndMode',
            'getReservedSkybillWithTypeAndModeResponse' => '\\FSMS\\Chronopost\\StructType\\GetReservedSkybillWithTypeAndModeResponse',
            'getReservedSkybillWithType' => '\\FSMS\\Chronopost\\StructType\\GetReservedSkybillWithType',
            'getReservedSkybillWithTypeResponse' => '\\FSMS\\Chronopost\\StructType\\GetReservedSkybillWithTypeResponse',
            'shippingMultiParcelWithReservationV3' => '\\FSMS\\Chronopost\\StructType\\ShippingMultiParcelWithReservationV3',
            'shippingMultiParcelWithReservationV3Response' => '\\FSMS\\Chronopost\\StructType\\ShippingMultiParcelWithReservationV3Response',
            'annulerEnlevements' => '\\FSMS\\Chronopost\\StructType\\AnnulerEnlevements',
            'annulerEnlevementsResponse' => '\\FSMS\\Chronopost\\StructType\\AnnulerEnlevementsResponse',
            'shippingMultiParcelWithReservationV2' => '\\FSMS\\Chronopost\\StructType\\ShippingMultiParcelWithReservationV2',
            'shippingMultiParcelWithReservationV2Response' => '\\FSMS\\Chronopost\\StructType\\ShippingMultiParcelWithReservationV2Response',
            'shippingWithReservationV2' => '\\FSMS\\Chronopost\\StructType\\ShippingWithReservationV2',
            'shippingWithReservationV2Response' => '\\FSMS\\Chronopost\\StructType\\ShippingWithReservationV2Response',
            'getShippingInformation' => '\\FSMS\\Chronopost\\StructType\\GetShippingInformation',
            'getShippingInformationResponse' => '\\FSMS\\Chronopost\\StructType\\GetShippingInformationResponse',
            'shippingWithReservation' => '\\FSMS\\Chronopost\\StructType\\ShippingWithReservation',
            'shippingWithReservationResponse' => '\\FSMS\\Chronopost\\StructType\\ShippingWithReservationResponse',
        ];
    }
}