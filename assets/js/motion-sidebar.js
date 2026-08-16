(function ( wp ) {
	'use strict';

	if (
		! wp?.hooks ||
		! wp?.compose ||
		! wp?.element ||
		! wp?.blockEditor ||
		! wp?.components
	) {
		return;
	}

	const { addFilter } = wp.hooks;
	const { createHigherOrderComponent } = wp.compose;
	const { createElement: el, Fragment } = wp.element;
	const { InspectorControls } = wp.blockEditor;
	const { PanelBody, RangeControl, SelectControl, ToggleControl } = wp.components;

	const supportedBlocks = [
		'core/group',
		'core/columns',
		'core/column',
		'core/image',
	];

	const effects = [
		{ label: 'Fade In', value: 'fadeIn' },
		{ label: 'Fade In Up', value: 'fadeInUp', directional: true },
	];

	const defaults = {
		suedeMotion: false,
		suedeMotionEffect: 'fadeIn',
		suedeDelay: 0,
		suedeMotionDistance: 20,
	};

	const limits = {
		delay: { min: 0, max: 0.6, step: 0.1 },
		distance: { min: 20, max: 60, step: 10 },
	};

	function isSupportedBlock( name ) {
		return supportedBlocks.includes( name );
	}

	function getEffect( value ) {
		return effects.find( ( effect ) => effect.value === value ) || effects[ 0 ];
	}

	function sanitizeNumber( value, fallback, range ) {
		const number = parseFloat( value );

		if ( Number.isNaN( number ) ) {
			return fallback;
		}

		return Math.min( Math.max( number, range.min ), range.max );
	}

	function addMotionAttributes( settings, name ) {
		if ( ! isSupportedBlock( name ) ) {
			return settings;
		}

		settings.attributes = {
			...settings.attributes,
			suedeMotion: {
				type: 'boolean',
				default: defaults.suedeMotion,
			},
			suedeMotionEffect: {
				type: 'string',
				default: defaults.suedeMotionEffect,
			},
			suedeDelay: {
				type: 'number',
				default: defaults.suedeDelay,
			},
			suedeMotionDistance: {
				type: 'number',
				default: defaults.suedeMotionDistance,
			},
		};

		return settings;
	}

	const withMotionControls = createHigherOrderComponent( ( BlockEdit ) => {
		return ( props ) => {
			if ( ! isSupportedBlock( props.name ) ) {
				return el( BlockEdit, props );
			}

			const { attributes, setAttributes } = props;
			const effect = getEffect( attributes.suedeMotionEffect );

			const motion = {
				enabled: Boolean( attributes.suedeMotion ),
				effect,
				delay: sanitizeNumber(
					attributes.suedeDelay,
					defaults.suedeDelay,
					limits.delay
				),
				distance: sanitizeNumber(
					attributes.suedeMotionDistance,
					defaults.suedeMotionDistance,
					limits.distance
				),
			};

			return el(
				Fragment,
				null,
				el( BlockEdit, props ),
				el(
					InspectorControls,
					null,
					el(
						PanelBody,
						{ title: 'Motion', initialOpen: false },

						el( ToggleControl, {
							label: 'Enable motion',
							checked: motion.enabled,
							onChange: ( enabled ) => {
								setAttributes(
									enabled
										? { suedeMotion: true }
										: { ...defaults }
								);
							},
						} ),

						motion.enabled &&
							el( SelectControl, {
								label: 'Effect',
								value: motion.effect.value,
								options: effects,
								onChange: ( value ) => {
									const nextEffect = getEffect( value );

									setAttributes( {
										suedeMotionEffect: nextEffect.value,
										...( ! nextEffect.directional && {
											suedeMotionDistance: defaults.suedeMotionDistance,
										} ),
									} );
								},
							} ),

						motion.enabled &&
							motion.effect.directional &&
							el( RangeControl, {
								label: 'Distance (px)',
								value: motion.distance,
								onChange: ( value ) => {
									setAttributes( {
										suedeMotionDistance: sanitizeNumber(
											value,
											defaults.suedeMotionDistance,
											limits.distance
										),
									} );
								},
								...limits.distance,
							} ),

						motion.enabled &&
							el( RangeControl, {
								label: 'Delay (seconds)',
								value: motion.delay,
								onChange: ( value ) => {
									setAttributes( {
										suedeDelay: sanitizeNumber(
											value,
											defaults.suedeDelay,
											limits.delay
										),
									} );
								},
								...limits.delay,
							} )
					)
				)
			);
		};
	}, 'withMotionControls' );

	function applyMotionProps( extraProps, blockType, attributes ) {
		if ( ! isSupportedBlock( blockType.name ) || ! attributes?.suedeMotion ) {
			return extraProps;
		}

		const effect = getEffect( attributes.suedeMotionEffect );

		extraProps[ 'data-motion' ] = effect.value;
		extraProps[ 'data-delay' ] = sanitizeNumber(
			attributes.suedeDelay,
			defaults.suedeDelay,
			limits.delay
		);

		if ( effect.directional ) {
			extraProps[ 'data-distance' ] = sanitizeNumber(
				attributes.suedeMotionDistance,
				defaults.suedeMotionDistance,
				limits.distance
			);
		}

		return extraProps;
	}

	addFilter(
		'blocks.registerBlockType',
		'suede/motion/attributes',
		addMotionAttributes
	);

	addFilter(
		'editor.BlockEdit',
		'suede/motion/controls',
		withMotionControls
	);

	addFilter(
		'blocks.getSaveContent.extraProps',
		'suede/motion/save-props',
		applyMotionProps
	);
})( window.wp );
