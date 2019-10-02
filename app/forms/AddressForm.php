<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Validation\Validator\PresenceOf;

class AddressForm extends Form
{
	public function initialize($entity = null, $options = null)
	{
		$city = new Text('city');
		$city->setLabel('city');
		$city->setFilters(['string']);
		$city->addValidators(
			[
				new PresenceOf(
					[
						'message' => 'field City is required',
					]
				),
			]
		);
		$this->add($city);

		$postcode = new Text('postcode');
		$postcode->setLabel('postcode');
		$postcode->setFilters(['string']);
		$postcode->addValidators(
			[
				new PresenceOf(
					[
						'message' => 'postcode is required',
					]
				),
			]
		);
		$this->add($postcode);

		$region = new Text('region');
		$region->setLabel('region');
		$region->setFilters(['string']);
		$region->addValidators(
			[
				new PresenceOf(
					[
						'message' => 'region is required',
					]
				),
			]
		);
		$this->add($region);

		$street = new Text('street');
		$street->setLabel('street');
		$street->setFilters(['string']);
		$street->addValidators(
			[
				new PresenceOf(
					[
						'message' => 'street is required',
					]
				),
			]
		);
		$this->add($street);

	}
}
