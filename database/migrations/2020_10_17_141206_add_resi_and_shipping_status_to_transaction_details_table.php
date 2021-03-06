<!-- jangan lupa ketika membuat sesuatu ketika up nya bikin, ya down nya hapus saat migration -->
<!-- menambahkan field resi dan shipping status ke tabel transaksi detail -->
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddResiAndShippingStatusToTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transactions_details', function (Blueprint $table) {
            $table->string('shipping_status');  //(PENDING/SHIPPING/SUCCESS)
            $table->string('resi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions_details', function (Blueprint $table) {
            $table->dropColumn('shipping_status');
            $table->dropColumn('resi');
        });
    }
}