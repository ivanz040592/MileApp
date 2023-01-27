<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() : JsonResponse
    {
        $transactions = Transaction::All();

        return response()->json([
            'success' => true,
            'data' => $transactions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) : JsonResponse
    {
        Transaction::create([
            'transaction_id' => $request->input('transaction_id'),
            'customer_name' => $request->input('customer_name'),
            'customer_code' => $request->input('customer_code'),
            'transaction_amount' => $request->input('transaction_amount'),
            'transaction_discount' => $request->input('transaction_discount'),
            'transaction_additional_field' => $request->input('transaction_additional_field'),
            'transaction_payment_type' => $request->input('transaction_payment_type'),
            'transaction_state' => $request->input('transaction_state'),
            'transaction_code' => $request->input('transaction_code'),
            'transaction_order' => $request->input('transaction_order'),
            'location_id' => $request->input('location_id'),
            'organization_id' => $request->input('organization_id'),
            'transaction_payment_type_name' => $request->input('transaction_payment_type_name'),
            'transaction_cash_amount' => $request->input('transaction_cash_amount'),
            'transaction_cash_change' => $request->input('transaction_cash_change'),
            'connote_id' => $request->input('connote_id'),
            'customer_attribute.Nama_Sales' => $request->input('customer_attribute.Nama_Sales'),
            'customer_attribute.TOP' => $request->input('customer_attribute.TOP'),
            'customer_attribute.Jenis_Pelanggan' => $request->input('customer_attribute.Jenis_Pelanggan'),

            'connote.connote_id' => $request->input('connote.connote_id'),
            'connote.connote_number' => $request->input('connote.connote_number'),
            'connote.connote_service' => $request->input('connote.connote_service'),
            'connote.connote_service_price' => $request->input('connote.connote_service_price'),
            'connote.connote_amount' => $request->input('connote.connote_amount'),
            'connote.connote_code' => $request->input('connote.connote_code'),
            'connote.connote_booking_code' => $request->input('connote.connote_booking_code'),
            'connote.connote_order' => $request->input('connote.connote_order'),
            'connote.connote_state' => $request->input('connote.connote_state'),
            'connote.connote_state_id' => $request->input('connote.connote_state_id'),
            'connote.zone_code_from' => $request->input('connote.zone_code_from'),
            'connote.zone_code_to' => $request->input('connote.zone_code_to'),
            'connote.surcharge_amount' => $request->input('connote.surcharge_amount'),
            'connote.transaction_id' => $request->input('connote.transaction_id'),
            'connote.actual_weight' => $request->input('connote.actual_weight'),
            'connote.volume_weight' => $request->input('connote.volume_weight'),
            'connote.chargeable_weight' => $request->input('connote.chargeable_weight'),
            'connote.created_at' => date('Y-m-d\TH:i:s'),
            'connote.updated_at' => date('Y-m-d\TH:i:s'),
            'connote.organization_id' => $request->input('connote.organization_id'),
            'connote.location_id' => $request->input('connote.location_id'),
            'connote.connote_total_package' => $request->input('connote.connote_total_package'),
            'connote.connote_surcharge_amount' => $request->input('connote.connote_surcharge_amount'),
            'connote.connote_sla_day' => $request->input('connote.connote_sla_day'),
            'connote.location_name' => $request->input('connote.location_name'),
            'connote.location_type' => $request->input('connote.location_type'),
            'connote.source_tariff_db' => $request->input('connote.source_tariff_db'),
            'connote.id_source_tariff' => $request->input('connote.id_source_tariff'),
            'connote.pod' => $request->input('connote.pod'),
            'connote.history' => array(),

            'origin_data.customer_name' => $request->input('origin_data.customer_name'),
            'origin_data.customer_address' => $request->input('origin_data.customer_address'),
            'origin_data.customer_email' => $request->input('origin_data.customer_email'),
            'origin_data.customer_phone' => $request->input('origin_data.customer_phone'),
            'origin_data.customer_address_detail' => $request->input('origin_data.customer_address_detail'),
            'origin_data.customer_zip_code' => $request->input('origin_data.customer_zip_code'),
            'origin_data.zone_code' => $request->input('origin_data.zone_code'),
            'origin_data.organization_id' => $request->input('origin_data.organization_id'),
            'origin_data.location_id' => $request->input('origin_data.location_id'),

            'destination_data.customer_name' => $request->input('destination_data.customer_name'),
            'destination_data.customer_address' => $request->input('destination_data.customer_address'),
            'destination_data.customer_email' => $request->input('destination_data.customer_email'),
            'destination_data.customer_phone' => $request->input('destination_data.customer_phone'),
            'destination_data.customer_address_detail' => $request->input('destination_data.customer_address_detail'),
            'destination_data.customer_zip_code' => $request->input('destination_data.customer_zip_code'),
            'destination_data.zone_code' => $request->input('destination_data.zone_code'),
            'destination_data.organization_id' => $request->input('destination_data.organization_id'),
            'destination_data.location_id' => $request->input('destination_data.location_id'),

            /*
            'koli_data.koli_length' => $request->input('koli_data.koli_length'),
            'koli_data.awb_url' => $request->input('koli_data.awb_url'),
            'koli_data.created_at' => date('Y-m-d\TH:i:s'),
            'koli_data.koli_chargeable_weight' => $request->input('koli_data.koli_chargeable_weight'),
            'koli_data.koli_width' => $request->input('koli_data.koli_width'),
            'koli_data.koli_surcharge' => array(),
            'koli_data.koli_height' => $request->input('koli_data.koli_height'),
            'koli_data.updated_at' => date('Y-m-d\TH:i:s'),
            'koli_data.koli_description' => $request->input('koli_data.koli_description'),
            'koli_data.koli_formula_id' => $request->input('koli_data.koli_formula_id'),
            'koli_data.connote_id' => $request->input('koli_data.connote_id'),
            'koli_data.koli_volume' => $request->input('koli_data.koli_volume'),
            'koli_data.koli_weight' => $request->input('koli_data.koli_weight'),
            'koli_data.koli_id' => $request->input('koli_data.koli_id'),
            'koli_data.koli_custom_field.awb_sicepat' => $request->input('koli_data.koli_custom_field.awb_sicepat'),
            'koli_data.koli_custom_field.harga_barang' => $request->input('koli_data.koli_custom_field.harga_barang'),
            'koli_data.koli_code' => $request->input('koli_data.koli_code'),*/

            'custom_field.catatan_tambahan' => $request->input('custom_field.catatan_tambahan'),

            'currentLocation.name' => $request->input('currentLocation.name'),
            'currentLocation.code' => $request->input('currentLocation.code'),
            'currentLocation.type' => $request->input('currentLocation.type')
        ]);

        return response()->json([
            'success' => true,
            "message" => "Transaction has been created."
        ], 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(String $id) : JsonResponse
    {
        $transaction = Transaction::find($id);
        if (is_null($transaction)) {
            return response()->json(['error' => 'Transaction is not found'], 200);
        }
        return response()->json([
            'success' => true,
            'data' => $transaction
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request) : JsonResponse
    {
        $request->validate([
            'id' => 'required|min:10|max:50'
        ]);

        $transaction = Transaction::find($request->input('id'));

        if (is_null($transaction)) {
            return response()->json(['error' => 'Transaction is not found'], 200);
        }else{
            $transaction->delete();
        }

        return response()->json([
            'success' => true,
            "message" => "Transaction deleted successfully."
        ]);
    }
}
