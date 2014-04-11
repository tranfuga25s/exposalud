<?php
/**
 * InteresadoFixture
 *
 */
class InteresadoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_interesado' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'nombre' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'apellido' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'telefono' => array('type' => 'integer', 'null' => false, 'default' => null),
		'celular' => array('type' => 'integer', 'null' => false, 'default' => null),
		'email' => array('type' => 'integer', 'null' => false, 'default' => null),
		'direccion' => array('type' => 'integer', 'null' => false, 'default' => null),
		'fecha_nacimiento' => array('type' => 'integer', 'null' => false, 'default' => null),
		'esperanza' => array('type' => 'integer', 'null' => false, 'default' => null),
		'biblia' => array('type' => 'integer', 'null' => false, 'default' => null),
		'informacion' => array('type' => 'integer', 'null' => false, 'default' => null),
		'visitado' => array('type' => 'integer', 'null' => false, 'default' => null),
		'created' => array('type' => 'integer', 'null' => false, 'default' => null),
		'modified' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_interesado', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id_interesado' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'apellido' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'telefono' => 1,
			'celular' => 1,
			'email' => 1,
			'direccion' => 1,
			'fecha_nacimiento' => 1,
			'esperanza' => 1,
			'biblia' => 1,
			'informacion' => 1,
			'visitado' => 1,
			'created' => 1,
			'modified' => 1
		),
	);

}
