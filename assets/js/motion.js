document.documentElement.classList.add( 'js' );

(function () {
	'use strict';

	const effects = [ 'fadeIn', 'fadeInUp' ];

	const defaults = {
		effect: 'fadeIn',
		delay: 0,
		distance: 20,
	};

	const limits = {
		delay: [ 0, 0.6 ],
		distance: [ 20, 60 ],
	};

	const prefersReducedMotion = window.matchMedia( '(prefers-reduced-motion: reduce)' );

	function onReady( callback ) {
		if ( document.readyState === 'loading' ) {
			document.addEventListener( 'DOMContentLoaded', callback );
		} else {
			callback();
		}
	}

	function clamp( value, min, max ) {
		return Math.min( Math.max( value, min ), max );
	}

	function getNumber( value, fallback, range ) {
		const number = parseFloat( value );

		return clamp(
			Number.isNaN( number ) ? fallback : number,
			range[ 0 ],
			range[ 1 ]
		);
	}

	onReady( () => {
		const elements = document.querySelectorAll( '[data-motion]' );

		if ( ! elements.length ) {
			return;
		}

		if ( prefersReducedMotion.matches ) {
			elements.forEach( ( element ) => {
				element.classList.add( 'motion-ready' );
			} );

			return;
		}

		const observer = new IntersectionObserver(
			( entries ) => {
				entries.forEach( ( entry ) => {
					if ( ! entry.isIntersecting ) {
						return;
					}

					const element = entry.target;
					const effect = effects.includes( element.dataset.motion )
						? element.dataset.motion
						: defaults.effect;
					const delay = getNumber(
						element.dataset.delay,
						defaults.delay,
						limits.delay
					);
					const distance = getNumber(
						element.dataset.distance,
						defaults.distance,
						limits.distance
					);

					element.style.setProperty( '--suede-motion-delay', `${ delay }s` );
					element.style.setProperty( '--suede-motion-distance', `${ distance }px` );
					element.classList.add( 'motion-ready', `motion-${ effect }` );

					observer.unobserve( element );
				} );
			},
			{
				threshold: 0.15,
			}
		);

		elements.forEach( ( element ) => {
			observer.observe( element );
		} );
	} );
})();
