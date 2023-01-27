<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $collection = 'transactions';
    protected $primaryKey = '_id';
    protected $fillable = [
        'transaction_id', 'customer_name', 'customer_code', 'transaction_amount', 'transaction_discount', 'transaction_additional_field',
        'transaction_payment_type', 'transaction_state', 'transaction_code', 'transaction_order', 'location_id', 'organization_id',
        'transaction_payment_type_name', 'transaction_cash_amount', 'transaction_cash_change', 'connote_id',
        'customer_attribute.Nama_Sales', 'customer_attribute.TOP', 'customer_attribute.Jenis_Pelanggan',
        'connote.connote_id', 'connote.connote_number', 'connote.connote_service', 'connote.connote_service_price', 'connote.connote_amount', 'connote.connote_code',
        'connote.connote_booking_code', 'connote.connote_order', 'connote.connote_state', 'connote.connote_state_id', 'connote.zone_code_from', 'connote.zone_code_to',
        'connote.surcharge_amount', 'connote.transaction_id', 'connote.actual_weight', 'connote.volume_weight', 'connote.chargeable_weight',
        'connote.created_at', 'connote.updated_at', 'connote.organization_id',
        'connote.location_id', 'connote.connote_total_package', 'connote.connote_surcharge_amount', 'connote.connote_sla_day', 'connote.location_name', 'connote.location_type',
        'connote.source_tariff_db', 'connote.id_source_tariff', 'connote.pod', 'connote.history',
        'origin_data.customer_name', 'origin_data.customer_address', 'origin_data.customer_email', 'origin_data.customer_phone', 'origin_data.customer_address_detail',
        'origin_data.customer_zip_code', 'origin_data.zone_code', 'origin_data.organization_id', 'origin_data.location_id',
        'destination_data.customer_name', 'destination_data.customer_address', 'destination_data.customer_email', 'destination_data.customer_phone', 'destination_data.customer_address_detail',
        'destination_data.customer_zip_code', 'destination_data.zone_code', 'destination_data.organization_id', 'destination_data.location_id',
        'koli_data.koli_length', 'koli_data.awb_url', 'koli_data.created_at', 'koli_data.koli_chargeable_weight', 'koli_data.koli_width', 'koli_data.koli_surcharge',
        'koli_data.koli_height', 'koli_data.updated_at', 'koli_data.koli_description', 'koli_data.koli_formula_id', 'koli_data.connote_id', 'koli_data.koli_volume',
        'koli_data.koli_weight', 'koli_data.koli_id', 'koli_id.koli_custom_field.awb_sicepat', 'koli_id.koli_custom_field.harga_barang', 'koli_data.koli_code',
        'custom_field.catatan_tambahan', 'currentLocation.name', 'currentLocation.code', 'currentLocation.type'
    ];
}
