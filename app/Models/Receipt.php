<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'client_id', 'user_item_id', 'about_cash', 'refund', 'points_old', 'points_new',
    ];

    /**
     * @param int $id
     * @return mixed
     */
    public static function scopeUserReceiptLists(int $id)
    {
        return self::where('user_id', $id)->get();
    }

    /**
     * @param int $id
     * @param int $receiptId
     * @return mixed
     */
    public static function scopeUserReceiptDetail(int $id, int $receiptId)
    {
        return self::where('user_id', $id)->where('id', $receiptId)->get();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public static function scopeObserverTransaction(int $id)
    {
        return self::where('transaction_id', $id)->count();
    }
}