<?php 

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this id
 * @property $this product_code
 * @property $this idvatgroup
 * @property $this name
 * @property $this price
 * @property $this fixedstockprice
 * @property $this idsupplier
 * @property $this productcode_supplier
 * @property $this deliverytime
 * @property $this description
 * @property $this barcode
 * @property $this type
 * @property $this unlimitedstock
 * @property $this weight
 * @property $this length
 * @property $this width
 * @property $this height
 * @property $this minimum_purchase_quantity
 * @property $this purchase_in_quantities_of
 * @property $this hs_code
 * @property $this country_of_origin
 * @property $this idfulfilment_customer
 * @property $this status
 * @property $this is_deleted
 * @property $this created_by
 * @property $this updated_by
 * @property $this deleted_by
 * @property $this deleted_at
 * @property $this created_at
 * @property $this updated_at
 */
class Product
{
	/**
	 * query data object for entity
	 *
	 * @var object
	 */
	protected static object $query;


	/**
	 * Product constructor
	 *
	 * @param object $query
	 */
	public function __construct(object $query)
	{
		self::$query = $query;
	}


	/**
	 * get id column for database table
	 *
	 * @return mixed
	 */
	protected static function id(): mixed
	{
		return self::$query->id;
	}


	/**
	 * get product_code column for database table
	 *
	 * @return mixed
	 */
	protected static function product_code(): mixed
	{
		return self::$query->product_code;
	}


	/**
	 * get idvatgroup column for database table
	 *
	 * @return mixed
	 */
	protected static function idvatgroup(): mixed
	{
		return self::$query->idvatgroup;
	}


	/**
	 * get name column for database table
	 *
	 * @return mixed
	 */
	protected static function name(): mixed
	{
		return self::$query->name;
	}


	/**
	 * get price column for database table
	 *
	 * @return mixed
	 */
	protected static function price(): mixed
	{
		return self::$query->price;
	}


	/**
	 * get fixedstockprice column for database table
	 *
	 * @return mixed
	 */
	protected static function fixedstockprice(): mixed
	{
		return self::$query->fixedstockprice;
	}


	/**
	 * get idsupplier column for database table
	 *
	 * @return mixed
	 */
	protected static function idsupplier(): mixed
	{
		return self::$query->idsupplier;
	}


	/**
	 * get productcode_supplier column for database table
	 *
	 * @return mixed
	 */
	protected static function productcode_supplier(): mixed
	{
		return self::$query->productcode_supplier;
	}


	/**
	 * get deliverytime column for database table
	 *
	 * @return mixed
	 */
	protected static function deliverytime(): mixed
	{
		return self::$query->deliverytime;
	}


	/**
	 * get description column for database table
	 *
	 * @return mixed
	 */
	protected static function description(): mixed
	{
		return self::$query->description;
	}


	/**
	 * get barcode column for database table
	 *
	 * @return mixed
	 */
	protected static function barcode(): mixed
	{
		return self::$query->barcode;
	}


	/**
	 * get type column for database table
	 *
	 * @return mixed
	 */
	protected static function type(): mixed
	{
		return self::$query->type;
	}


	/**
	 * get unlimitedstock column for database table
	 *
	 * @return mixed
	 */
	protected static function unlimitedstock(): mixed
	{
		return self::$query->unlimitedstock;
	}


	/**
	 * get weight column for database table
	 *
	 * @return mixed
	 */
	protected static function weight(): mixed
	{
		return self::$query->weight;
	}


	/**
	 * get length column for database table
	 *
	 * @return mixed
	 */
	protected static function length(): mixed
	{
		return self::$query->length;
	}


	/**
	 * get width column for database table
	 *
	 * @return mixed
	 */
	protected static function width(): mixed
	{
		return self::$query->width;
	}


	/**
	 * get height column for database table
	 *
	 * @return mixed
	 */
	protected static function height(): mixed
	{
		return self::$query->height;
	}


	/**
	 * get minimum_purchase_quantity column for database table
	 *
	 * @return mixed
	 */
	protected static function minimum_purchase_quantity(): mixed
	{
		return self::$query->minimum_purchase_quantity;
	}


	/**
	 * get purchase_in_quantities_of column for database table
	 *
	 * @return mixed
	 */
	protected static function purchase_in_quantities_of(): mixed
	{
		return self::$query->purchase_in_quantities_of;
	}


	/**
	 * get hs_code column for database table
	 *
	 * @return mixed
	 */
	protected static function hs_code(): mixed
	{
		return self::$query->hs_code;
	}


	/**
	 * get country_of_origin column for database table
	 *
	 * @return mixed
	 */
	protected static function country_of_origin(): mixed
	{
		return self::$query->country_of_origin;
	}


	/**
	 * get idfulfilment_customer column for database table
	 *
	 * @return mixed
	 */
	protected static function idfulfilment_customer(): mixed
	{
		return self::$query->idfulfilment_customer;
	}


	/**
	 * get status column for database table
	 *
	 * @return mixed
	 */
	protected static function status(): mixed
	{
		return self::$query->status;
	}


	/**
	 * get is_deleted column for database table
	 *
	 * @return mixed
	 */
	protected static function is_deleted(): mixed
	{
		return self::$query->is_deleted;
	}


	/**
	 * get created_by column for database table
	 *
	 * @return mixed
	 */
	protected static function created_by(): mixed
	{
		return self::$query->created_by;
	}


	/**
	 * get updated_by column for database table
	 *
	 * @return mixed
	 */
	protected static function updated_by(): mixed
	{
		return self::$query->updated_by;
	}


	/**
	 * get deleted_by column for database table
	 *
	 * @return mixed
	 */
	protected static function deleted_by(): mixed
	{
		return self::$query->deleted_by;
	}


	/**
	 * get deleted_at column for database table
	 *
	 * @return mixed
	 */
	protected static function deleted_at(): mixed
	{
		return self::$query->deleted_at;
	}


	/**
	 * get created_at column for database table
	 *
	 * @return mixed
	 */
	protected static function created_at(): mixed
	{
		return self::$query->created_at;
	}


	/**
	 * get updated_at column for database table
	 *
	 * @return mixed
	 */
	protected static function updated_at(): mixed
	{
		return self::$query->updated_at;
	}


	public function __get($name)
	{
		return static::{$name}();
	}
}
