<?php
/**
 * Class LP_Abstract_Object_Data.
 *
 * @author  ThimPress
 * @package LearnPress/Classes
 * @version 3.0.0
 */

defined( 'ABSPATH' ) || exit();

if ( ! class_exists( 'LP_Abstract_Object_Data' ) ) {

	/**
	 * Class LP_Abstract_Object_Data
	 */
	abstract class LP_Abstract_Object_Data {
		/**
		 * @var int
		 */
		protected $_id = 0;

		/**
		 * @var array
		 */
		protected $_data = array();

		/**
		 * @var array
		 */
		protected $_extra_data = array();

		/**
		 * @var bool
		 */
		protected $_no_cache = false;

		/**
		 * @var array
		 */
		protected $_supports = array();

		/**
		 * Store new changes
		 *
		 * @var array
		 */
		protected $_changes = array();

		/**
		 * @var array
		 */
		protected $_extra_data_changes = array();

		/**
		 * Object meta
		 *
		 * @var array
		 */
		protected $_meta_data = array();

		/**
		 * @var array
		 */
		protected $_meta_keys = array();

		/**
		 * CURD class to manipulation with database.
		 *
		 * @var null
		 */
		protected $_curd = null;

		/**
		 * Mark the $post object is set up to this class
		 *
		 * @var bool
		 */
		protected $_setup_postdata = false;

		public $object_type = 'object-data';

		/**
		 * LP_Abstract_Object_Data constructor.
		 *
		 * @param null $data
		 */
		public function __construct( $data = null ) {
			$this->_data = (array) $data;
			if ( array_key_exists( 'id', $this->_data ) ) {
				$this->set_id( absint( $this->_data['id'] ) );
				unset( $this->_data['id'] );
			}
			$this->load_curd();
		}

		/**
		 * Load curd.
		 */
		protected function load_curd() {
			if ( is_string( $this->_curd ) && $this->_curd ) {
				$this->_curd = new $this->_curd();
			}
		}

		/**
		 * Set id of object in database
		 *
		 * @param $id
		 */
		public function set_id( $id ) {
			$this->_id = $id;
		}

		/**
		 * Get id of object in database
		 *
		 * @return int
		 */
		public function get_id() {
			return absint( $this->_id );
		}

		/**
		 * Get post object assigned to this class.
		 *
		 * @return array|null|WP_Post
		 * @since 3.0.0
		 */
		public function get_post() {
			return get_post( $this->get_id() );
		}

		/**
		 * Get global $post object and set it up with new data
		 *
		 * @return bool|WP_Post
		 * @since 3.0.0
		 */
		public function setup_postdata() {
			global $post;

			$post = $this->get_post();

			if ( $post ) {
				setup_postdata( $post );
				$this->_setup_postdata = true;

				return $post;
			}

			return false;
		}

		/**
		 * Reset global $post to WP default.
		 *
		 * @return bool
		 * @since 3.0.0
		 */
		public function reset_postdata() {
			if ( $this->_setup_postdata ) {
				wp_reset_postdata();

				return true;
			}

			return false;
		}

		/**
		 * Get object data.
		 *
		 * @updated 3.2.0
		 * @date    13 Nov 2018
		 *
		 * @param string $name - Optional. Name of data want to get, true if return all.
		 * @param mixed  $default
		 *
		 * @return array|mixed
		 */
		public function get_data( $name = '', $default = '' ) {
			if ( is_string( $name ) && $name ) {
				return array_key_exists( $name, $this->_data ) ? $this->_data[ $name ] : ( array_key_exists( $name, $this->_extra_data ) ? $this->_extra_data[ $name ] : $default );
			} elseif ( is_array( $name ) ) {
				$data = array();

				foreach ( $name as $key ) {
					$data[ $key ] = $this->get_data( $key, $default );
				}

				return $data;
			}

			return array_merge( $this->_data, $this->_extra_data );
		}

		/**
		 * Get data as LP_Datetime object
		 *
		 * @param string $name
		 *
		 * @return array|LP_Datetime|mixed
		 * @since 3.2.0
		 */
		public function get_data_date( $name ) {
			$data = $this->get_data( $name );

			return is_a( $data, 'LP_Datetime' ) ? $data : new LP_Datetime( $data );
		}


		/**
		 * @param string $name
		 * @param mixed $default
		 *
		 * @return array|bool|mixed|string
		 */
		public function get_extra_data( string $name = '', $default = false ) {
			if ( is_string( $name ) ) {
				return array_key_exists( $name, $this->_extra_data ) && ! empty( $this->_extra_data[ $name ] ) ? $this->_extra_data[ $name ] : $default;
			} elseif ( is_array( $name ) ) {
				$data = array();
				foreach ( $name as $key ) {
					$data[ $key ] = $this->get_extra_data( $key, $default );
				}

				return $data;
			}

			return $default;
		}

		/**
		 * Set object data.
		 *
		 * @param mixed $key_or_data
		 * @param mixed $value
		 * @param bool  $extra
		 */
		protected function _set_data( $key_or_data, $value = '', $extra = false ) {
			if ( is_array( $key_or_data ) ) {
				foreach ( $key_or_data as $key => $value ) {
					$this->_set_data( $key, $value, $extra );
				}
			} elseif ( $key_or_data ) {
				if ( $extra ) {
					// Do not allow to add extra data with the same key in data
					if ( ! array_key_exists( $key_or_data, $this->_data ) ) {
						$this->_extra_data[ $key_or_data ] = $value;
					}
				} else {
					try {
						if ( ! is_string( $key_or_data ) && ! is_numeric( $key_or_data ) ) {
							throw new Exception( 'error' );
						}

						// Only change the data is already existed
						//                      if ( array_key_exists( $key_or_data, $this->_data ) ) {
							$this->_data[ $key_or_data ] = $value;
						//                      } else {
						//                          $this->_extra_data[ $key_or_data ] = $value;
						//                      }
					} catch ( Throwable $ex ) {
						error_log( $ex->getMessage() );
					}
				}
			}
		}

		/**
		 * Set extra data
		 *
		 * @param array|string $key_or_data
		 * @param string|mixed       $value
		 * @return $this
		 */
		public function set_data( $key_or_data, $value = '' ) {
			$this->_set_data( $key_or_data, $value );
			return $this;
		}

		/**
		 * Set data datetime
		 * if $value is empty, not set is LP_Datetime object
		 *
		 * @param $key
		 * @param $value
		 *
		 * @version 4.0.1
		 * @return LP_Abstract_Object_Data
		 */
		public function set_data_date( $key, $value ): LP_Abstract_Object_Data {
			$lp_date = '';
			if ( ! empty( $value ) ) {
				$lp_date = new LP_Datetime( $value );
			}

			$this->set_data( $key, $lp_date );

			return $this;
		}

		/**
		 * @param $key
		 * @param $value
		 * @deprecated 4.1.7.3
		 */
		protected function _set_data_date( $key, $value, $extra = false ) {
			_deprecated_function( __FUNCTION__, '4.1.7.3', 'set_data_date' );
			$this->set_data_date( $key, $value );
		}

		/**
		 * @deprecated 4.1.7.3
		 */
		public function set_data_null_date( $key ) {
			_deprecated_function( __METHOD__, '4.1.7.3' );
			$this->_set_data( $key, LP_Datetime::getSqlNullDate() );
		}

		/**
		 * Set data via methods in array
		 *
		 * @param array $data - Array with key is method and value is value to set
		 *
		 * @throws Exception
		 */
		public function set_data_via_methods( $data ) {
			$errors = array_keys( $data );
			foreach ( $data as $prop => $value ) {
				$setter = "set_$prop";
				if ( is_callable( array( $this, $setter ) ) ) {
					$reflection = new ReflectionMethod( $this, $setter );

					if ( $reflection->isPublic() ) {
						$this->{$setter}( $value );
						$errors = array_diff( $errors, array( $prop ) );
					}
				}
			}

			// If there is at least one method failed
			if ( $errors ) {
				$errors = array_map( array( $this, 'prefix_set_method' ), $errors );
				throw new Exception( sprintf( __( 'The following functions %1$s do not exist in %2$s', 'learnpress' ), join( ',', $errors ), get_class( $this ) ) );
			}
		}

		/**
		 * Return the keys of data
		 *
		 * @param bool $extra - Optional. TRUE if including extra data
		 *
		 * @return array
		 */
		public function get_data_keys( $extra = true ) {
			return $extra ? array_merge( array_keys( $this->_data ), array_keys( $this->_extra_data ) ) : array_keys( $this->_data );
		}

		/**
		 * @param $method
		 *
		 * @return string
		 */
		public function prefix_set_method( $method ) {
			return "set_{$method}";
		}

		/**
		 * Apply the changes
		 */
		public function apply_changes() {
			$this->_data    = array_replace_recursive( $this->_data, $this->_changes );
			$this->_changes = array();
		}

		/**
		 * Get the changes.
		 *
		 * @return array
		 */
		public function get_changes() {
			return $this->_changes;
		}

		/**
		 * Check if question is support feature.
		 *
		 * @param string $feature
		 * @param string $type
		 *
		 * @return bool
		 */
		public function is_support( $feature, $type = '' ) {
			$feature = $this->_sanitize_feature_key( $feature );

			return LP_Global::object_is_support_feature( $this->object_type, $feature, $type );
		}

		/**
		 * Add a feature that question is supported
		 *
		 * @param        $feature
		 * @param string  $type
		 */
		public function add_support( $feature, $type = 'yes' ) {

			$feature = $this->_sanitize_feature_key( $feature );
			LP_Global::add_object_feature( $this->object_type, $feature, $type );
		}

		/**
		 * @param $feature
		 *
		 * @return mixed
		 */
		protected function _sanitize_feature_key( $feature ) {
			return preg_replace( '~[_]+~', '-', $feature );
		}

		/**
		 * Get all features are supported by question.
		 *
		 * @return array
		 * @deprecated 4.1.7.3
		 */
		public function get_supports() {
			_deprecated_function( __FUNCTION__, '4.1.7.3' );
			return LP_Global::get_object_supports( $this->object_type );
		}

		/**
		 * @param $value
		 * @deprecated 4.1.7.3
		 */
		/*public function set_no_cache( $value ) {
			$this->_no_cache = $value;
		}*/

		/**
		 * @return bool
		 * @deprecated 4.1.7.3
		 */
		/*public function get_no_cache() {
			return $this->_no_cache;
		}*/

		/**
		 * Read all metas and set to object
		 */
		public function read_meta() {
			$meta_data = $this->_curd->read_meta( $this );

			if ( $meta_data ) {
				$external_metas = array_filter( $meta_data, array( $this, 'exclude_metas' ) );

				foreach ( $external_metas as $meta ) {
					$this->_meta_data[] = $meta;
				}
			}
		}

		/**
		 * Callback function for excluding meta keys.
		 *
		 * @param $meta
		 *
		 * @return bool
		 */
		protected function exclude_metas( $meta ) {
			$exclude_keys = array_merge( array_keys( $this->_meta_keys ), array_keys( $this->_data ) );

			return ! in_array( $meta->meta_key, $exclude_keys ) && 0 !== stripos( $meta->meta_key, 'wp_' );
		}

		/**
		 * Add new meta data to object.
		 *
		 * @param string|array $key_or_array
		 * @param string       $value
		 */
		public function add_meta( $key_or_array, $value = '' ) {
			if ( is_array( $key_or_array ) ) {
				foreach ( $key_or_array as $key => $value ) {
					$this->add_meta( $key, $value );
				}
			} elseif ( is_string( $key_or_array ) ) {
				$this->_meta_data[] = (object) array(
					'meta_key'   => $key_or_array,
					'meta_value' => $value,
				);
			} else {
				$this->_meta_data[] = $key_or_array;
			}
		}

		/**
		 * Delete meta data by key.
		 * If meta value is passed, compare with existing value in database (string only).
		 *
		 * @param string $meta_key
		 * @param bool   $meta_value - Optional. FALSE to abort comparison.
		 *
		 * @return bool
		 */
		public function delete_meta( $meta_key, $meta_value = false ) {
			if ( empty( $this->_meta_data ) ) {
				return false;
			} else {
				$new_meta_data = array();
				foreach ( $this->_meta_data as $k => $meta_data ) {
					if ( $meta_data->meta_key === $meta_key ) {
						if ( false !== $meta_value && $meta_data->meta_value === $meta_value ) {
							continue;
						}
						continue;
					}
					$new_meta_data[] = $meta_data;
				}
				// Assign new meta
				$this->_meta_data = $new_meta_data;

				// Force to deleting from database
				delete_post_meta( $this->get_id(), $meta_key, $meta_value );
			}

			return true;
		}

		/**
		 * Update item meta if it is already existed. Otherwise, add a new once.
		 *
		 * @param $meta_key
		 * @param $meta_value
		 */
		public function set_meta( $meta_key, $meta_value ) {
			if ( empty( $this->_meta_data ) ) {
				$this->add_meta( $meta_key, $meta_value );
			} else {
				$found = false;
				foreach ( $this->_meta_data as $k => $meta_data ) {
					if ( $meta_data->meta_key === $meta_key ) {
						$this->_meta_data[ $k ]->meta_value = $meta_value;
						$found                              = true;
					}
				}
				if ( ! $found ) {
					$this->add_meta( $meta_key, $meta_value );
				}
			}
		}

		/**
		 * Update meta.
		 *
		 * @updated 3.1.0
		 *
		 * @param string $key
		 * @param mixed  $value
		 * @param mixed  $prev_value
		 */
		public function update_meta( $key = '', $value = '', $prev_value = '' ) {
			if ( func_num_args() == 0 ) {
				if ( $this->_meta_data ) {
					foreach ( $this->_meta_data as $meta_data ) {
						$this->_curd->update_meta( $this, $meta_data );
					}
				}
			} else {
				$update = update_post_meta( $this->get_id(), $key, $value, $prev_value );
				if ( ! is_bool( $update ) && $update ) {
					$this->_meta_data = (object) array(
						'meta_key'   => $key,
						'meta_value' => $value,
					);
				}
			}
		}


		/**
		 * Get meta keys.
		 *
		 * @return array
		 */
		public function get_meta_keys() {
			return $this->_meta_keys;
		}

	}

}
