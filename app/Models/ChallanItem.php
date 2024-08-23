<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\ChallanItem
 *
 * @property int $id
 * @property int $invoice_id
 * @property int|null $product_id
 * @property string|null $product_name
 * @property int $quantity
 * @property float $price
 * @property float $total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\InvoiceItemTax[] $invoiceItemTax
 * @property-read int|null $invoice_item_tax_count
 * @property-read \App\Models\Product|null $product
 *
 * @method static Builder|ChallanItem newModelQuery()
 * @method static Builder|ChallanItem newQuery()
 * @method static Builder|ChallanItem query()
 * @method static Builder|ChallanItem whereCreatedAt($value)
 * @method static Builder|ChallanItem whereId($value)
 * @method static Builder|ChallanItem whereInvoiceId($value)
 * @method static Builder|ChallanItem wherePrice($value)
 * @method static Builder|ChallanItem whereProductId($value)
 * @method static Builder|ChallanItem whereProductName($value)
 * @method static Builder|ChallanItem whereQuantity($value)
 * @method static Builder|ChallanItem whereTotal($value)
 * @method static Builder|ChallanItem whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
class ChallanItem extends Model
{
    use HasFactory;

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_id' => 'required',
        'quantity' => 'required|regex:/^\d*(\.\d{1,2})?$/',
        'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
    ];

    protected $table = 'challan_items';

    public $fillable = [
        'invoice_id',
        'product_id',
        'product_name',
        'quantity',
        'price',
        'total',
    ];

    protected $casts = [
        'invoice_id' => 'integer',
        'product_id' => 'integer',
        'product_name' => 'string',
        'quantity' => 'double',
        'price' => 'double',
        'total' => 'double',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function invoiceItemTax(): HasMany
    {
        return $this->hasMany(InvoiceItemTax::class);
    }
}
