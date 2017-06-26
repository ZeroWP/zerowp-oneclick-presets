<?php 
add_action( 'customize_register', 'zwpc_presets_customize_register', 999 );
function zwpc_presets_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'zwpc_presets_customizer_section', array(
		'title'          => __( 'Presets', 'zerowp-customizer-presets' ),
		// 'description'    => '',
		'priority'       => 999,
		'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_setting( 'zwpc_presets_customizer_setting', array(
		'type'       => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport'  => 'postMessage',
	) );

	$wp_customize->add_control( new ZeroWpCustomizerPresets\TheControl( $wp_customize, 'zwpc_presets_customizer_setting', array(
		'label'   => __( 'Presets', 'zerowp-customizer-presets' ),
		'section' => 'zwpc_presets_customizer_section',
	) ) );
}