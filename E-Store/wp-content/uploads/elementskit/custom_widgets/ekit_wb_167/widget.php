<?php

namespace Elementor;

defined('ABSPATH') || exit;

class Ekit_Wb_167 extends Widget_Base {

	public function get_name() {
		return 'ekit_wb_167';
	}


	public function get_title() {
		return esc_html__( 'New Widget', 'elementskit-lite' );
	}


	public function get_categories() {
		return ['basic'];
	}


	public function get_icon() {
		return 'eicon-cog';
	}


	protected function register_controls() {

		$this->start_controls_section(
			'content_section_167_0',
			array(
				'label' => esc_html__( 'Title', 'elementskit-lite' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			)
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'advance_section_167_0',
			array(
				'label' => esc_html__( 'Title', 'elementskit-lite' ),
				'tab'   => Controls_Manager::TAB_ADVANCED,
			)
		);

		$this->add_control(
			'ekit_wb_167_cart',
			array(
				'label' => esc_html__( 'Cart', 'elementskit-lite' ),
				'type'  => Controls_Manager::ICONS,
				'separator' => 'after' ,
				'show_label' => false ,
				'label_block' => false ,
				'skin' => 'inline' ,
				'default' => array(
					'value' => 'fas fa-shopping-cart',
					'library' => 'fa-solid',
				)
			)
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'advance_section_167_1',
			array(
				'label' => esc_html__( 'Title', 'elementskit-lite' ),
				'tab'   => Controls_Manager::TAB_ADVANCED,
			)
		);

		$this->add_control(
			'ekit_wb_167_wishlist',
			array(
				'label' => esc_html__( 'Wishlist', 'elementskit-lite' ),
				'type'  => Controls_Manager::ICONS,
				'separator' => 'after' ,
				'show_label' => false ,
				'label_block' => false ,
				'skin' => 'inline' ,
				'default' => array(
					'value' => 'fas fa-heart',
					'library' => 'fa-solid',
				)
			)
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'advance_section_167_2',
			array(
				'label' => esc_html__( 'Title', 'elementskit-lite' ),
				'tab'   => Controls_Manager::TAB_ADVANCED,
			)
		);

		$this->add_control(
			'ekit_wb_167_user',
			array(
				'label' => esc_html__( 'Login', 'elementskit-lite' ),
				'type'  => Controls_Manager::ICONS,
				'show_label' => false ,
				'label_block' => false ,
				'skin' => 'inline' ,
				'default' => array(
					'value' => 'fas fa-user',
					'library' => 'fa-solid',
				)
			)
		);

		$this->end_controls_section();

	}


	protected function render() {
	}


}
