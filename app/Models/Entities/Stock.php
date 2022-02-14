<?php 

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this id
 * @property $this stock_code
 * @property $this product_code
 * @property $this idwarehouse
 * @property $this stock
 * @property $this reserved
 * @property $this reservedbackorders
 * @property $this reservedpicklists
 * @property $this reservedallocations
 * @property $this freestock
 * @property $this status
 * @property $this is_deleted
 * @property $this created_by
 * @property $this updated_by
 * @property $this deleted_by
 * @property $this deleted_at
 * @property $this created_at
 * @property $this updated_at
 */
class Stock
{
	/**
	 * query data object for entity
	 *
	 * @var object
	 */
	protected static object $query;


	/**
	 * Stock constructor
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
	 * get stock_code column for database table
	 *
	 * @return mixed
	 */
	protected static function stock_code(): mixed
	{
		return self::$query->stock_code;
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
	 * get idwarehouse column for database table
	 *
	 * @return mixed
	 */
	protected static function idwarehouse(): mixed
	{
		return self::$query->idwarehouse;
	}


	/**
	 * get stock column for database table
	 *
	 * @return mixed
	 */
	protected static function stock(): mixed
	{
		return self::$query->stock;
	}


	/**
	 * get reserved column for database table
	 *
	 * @return mixed
	 */
	protected static function reserved(): mixed
	{
		return self::$query->reserved;
	}


	/**
	 * get reservedbackorders column for database table
	 *
	 * @return mixed
	 */
	protected static function reservedbackorders(): mixed
	{
		return self::$query->reservedbackorders;
	}


	/**
	 * get reservedpicklists column for database table
	 *
	 * @return mixed
	 */
	protected static function reservedpicklists(): mixed
	{
		return self::$query->reservedpicklists;
	}


	/**
	 * get reservedallocations column for database table
	 *
	 * @return mixed
	 */
	protected static function reservedallocations(): mixed
	{
		return self::$query->reservedallocations;
	}


	/**
	 * get freestock column for database table
	 *
	 * @return mixed
	 */
	protected static function freestock(): mixed
	{
		return self::$query->freestock;
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
