<?php

/**
 * Brecord
 *
 * @subpackage	Libraries
 * @category	Record Differentiating
 * @author		Muhammad Bensekh Bugis
 * @link		http://bensekh.web.id
 * @version		1.0.1
 */
class Brecord {
	
	protected $old_record;
	protected $new_record;
	protected $unique_key = [];
	protected $field_set = [];
	protected $result;
	
	/**
	 * Set Old Record
	 *
	 * Set an old record to compare to a new record
	 *
	 * @access	public
	 * @param	two-dimensional array / table
	 * @return	void
	 */
	public function setOldRecord($old_record = false) {
		if(array_depth($old_record) == 2) {
			$this->old_record = $old_record;
		} else {
			// trigger_error('Old record seems to be not a two-dimensional array', E_USER_ERROR);
			$this->old_record = false;
		}
		
		return $this;
	}
	
	/**
	 * Set New Record
	 *
	 * Set an new record to compare to a old record
	 *
	 * @access	public
	 * @param	two-dimensional array / table
	 * @return	void
	 */
	public function setNewRecord($new_record = false) {
		if(array_depth($new_record) == 2) {
			$this->new_record = $new_record;
		} else {
			// trigger_error('New record seems to be not a two-dimensional array', E_USER_ERROR);
			$this->new_record = false;
		}
		
		return $this;
	}
	
	/**
	 * Set unique key
	 *
	 * Set a unique key of each or all records
	 *
	 * @access	public
	 * @param	string or associative array in ['old_rec_pk' => 'new_rec_pk'] bases
	 *          or just set the value if both old and new record have the same unique field name
	 * @return	void
	 */
	public function setUniqueKey($unique_key = false) {
		!$unique_key && $this->unique_key = [];
		
		if(is_string($unique_key)) {
			$this->unique_key = array($unique_key => $unique_key);
		} else {
			if(is_array($unique_key) and count($unique_key) == 1)
				$this->unique_key = $unique_key;
			else {
				$this->unique_key = false;
			}
		}
		
		return $this;
	}
	
	/**
	 * Unset unique key
	 *
	 * Clear defined unique key
	 *
	 * @access	public
	 * @return	null
	 */
	public function unsetUniqueKey() {
		$this->unique_key = [];
	}
	
	/**
	 * Set field set
	 *
	 * Set a field set of each or all records to compare
	 *
	 * @access	public
	 * @param	numeric or associative array in ['old_rec_fieldname' => 'new_rec_fieldname'] bases
	 *          or just set the value if both old and new record have the same field name
	 * @return	void
	 */
	public function setFieldSet($field_set = false) {
		$field_set && $this->field_set = [];
		
		foreach($field_set as $old_field => $new_field) {
			if(is_numeric($old_field))
				$this->field_set += array($new_field => $new_field);
			else
				$this->field_set += array($old_field => $new_field);
		}
		
		return $this;
	}
	
	/**
	 * Add field set
	 *
	 * Add field set of each or all records to compare
	 *
	 * @access	public
	 * @param	numeric or associative array in ['old_rec_fieldname' => 'new_rec_fieldname'] bases
	 *          or just set the value if both old and new record have the same field name
	 * @return	void
	 */	
	public function addFieldSet($field_set = false) {
		foreach($field_set as $old_field => $new_field) {
			if(is_numeric($old_field))
				$this->field_set += array($new_field => $new_field);
			else
				$this->field_set += array($old_field => $new_field);
		}
		
		return $this;
	}
	
	/**
	 * Unset all field sets
	 *
	 * Clear all defined field sets
	 *
	 * @access	public
	 * @return	null
	 */
	public function unsetAllFieldSets() {
		$this->field_set = [];
	}
	
	/**
	 * Run
	 *
	 * Run and do the differentiating
	 *
	 * @access	public
	 * @param	none
	 * @return	void
	 */
	public function run() {
		$record_old = $this->old_record;
		$record_new = $this->new_record;
		$field_set = $this->field_set;
		$unique_key = $this->unique_key;
		
		$uk_field_old = array_keys($unique_key)[0]; // set value of uk field in old rec
		$uk_field_new = array_values($unique_key)[0]; // set value of uk field in new rec
		
		$rec_old_uk = array_column($record_old, $uk_field_old); // set array of uk in old rec
		$rec_new_uk = array_column($record_new, $uk_field_new); // set array of uk in new rec
		
		$to_add_uk = array_values(array_diff($rec_new_uk, $rec_old_uk));
		$to_del_uk = array_values(array_diff($rec_old_uk, $rec_new_uk));
		$to_chk_uk = array_intersect(array_column($record_old, $uk_field_old), array_column($record_new, $uk_field_new));
		
		$to_del = [];
		$to_add = [];
		$to_old = [];
		$to_upd = [];
		$to_unc = [];
		
		$to_del = array_map(function($uk) use($record_old, $rec_old_uk) { return $record_old[array_search($uk, $rec_old_uk)]; }, $to_del_uk);
		$to_add = array_map(function($uk) use($record_new, $rec_new_uk) { return $record_new[array_search($uk, $rec_new_uk)]; }, array_values(array_filter($to_add_uk, function($uk) { return trim($uk) != ''; })));
		
		foreach(array_filter($record_new, function($row) use($uk_field_new) { return trim($row[$uk_field_new]) == ''; }) as $new_row) {
			array_push($to_add, $new_row);
		}
		
		foreach($to_chk_uk as $uk) {
			$k_old = array_search($uk, $rec_old_uk);
			$k_new = array_search($uk, $rec_new_uk);
			
			foreach($field_set as $fieldname_old => $fieldname_new) {
				if($record_old[$k_old][(is_string($fieldname_old) ? $fieldname_old : $fieldname_new)] != $record_new[$k_new][$fieldname_new]) {
					array_push($to_old, $record_old[$k_old]);
					array_push($to_upd, $record_new[$k_new]);
					
					continue 2;
				}
			}
			
			array_push($to_unc, $record_new[$k_new]);
		}
		
		$this->result = (object) array(
			'newSet' => $to_add,
			'oldSet' => $to_old,
			'updatedSet' => $to_upd,
			'deletedSet' => $to_del,
			'unchangedSet' => $to_unc
		);
		
		return $this;
	}
	
	/**
	 * Get new set
	 *
	 * Get a set of newly created row
	 *
	 * @access	public
	 * @return	record set / two-dimensional array
	 */
	public function getNewSet() {
		return $this->result->newSet;
	}
	
	/**
	 * Get old set
	 *
	 * Get a set of old set of row before update
	 *
	 * @access	public
	 * @return	record set / two-dimensional array
	 */
	public function getOldSet() {
		return $this->result->oldSet;
	}
	
	/**
	 * Get Updated set
	 *
	 * Get a set of updated set of row after update
	 *
	 * @access	public
	 * @return	record set / two-dimensional array
	 */
	public function getUpdatedSet() {
		return $this->result->updatedSet;
	}
	
	/**
	 * Get Deleted set
	 *
	 * Get a set of deleted set of row after update
	 *
	 * @access	public
	 * @return	record set / two-dimensional array
	 */
	public function getDeletedSet() {
		return $this->result->deletedSet;
	}
	
	/**
	 * Get Unchanged set
	 *
	 * Get a set of untouched row based on field set
	 *
	 * @access	public
	 * @return	record set / two-dimensional array
	 */
	public function getUnchangedSet() {
		return $this->result->unchangedSet;
	}
	
	/**
	 * Get all results
	 *
	 * Get all set of differentiating results
	 *
	 * @access	public
	 * @return	record set / two-dimensional array
	 */
	public function getAllResults() {
		return $this->result;
	}
}

function array_depth(array $array) {
	$max_depth = 1;

	foreach ($array as $value) {
		if (is_array($value)) {
			$depth = array_depth($value) + 1;

			if ($depth > $max_depth) {
				$max_depth = $depth;
			}
		}
	}

	return $max_depth;
}