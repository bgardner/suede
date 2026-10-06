(function () {
	'use strict';

	const root = document.documentElement;
	const body = document.body;

	if ( document.querySelector( '.site-header .no-scroll-reveal' ) ) {
		return;
	}

	const reducedMotion = window.matchMedia( '(prefers-reduced-motion: reduce)' );

	if ( reducedMotion.matches ) {
		return;
	}

	const threshold = 40;
	const directionDelta = 5;

	let lastY = window.scrollY;
	let ticking = false;

	function update() {
		const y = Math.max( 0, window.scrollY );
		const delta = y - lastY;
	
		ticking = false;
	
		if ( y <= threshold ) {
			body.classList.remove( 'scroll-up', 'scroll-down' );
			lastY = y;
			return;
		}
	
		if ( Math.abs( delta ) < directionDelta ) {
			return;
		}
	
		body.classList.toggle( 'scroll-down', delta > 0 );
		body.classList.toggle( 'scroll-up', delta < 0 );
	
		lastY = y;
	}

	function onScroll() {
		if ( ! ticking ) {
			ticking = true;
			window.requestAnimationFrame( update );
		}
	}

	window.addEventListener( 'scroll', onScroll, { passive: true } );

	root.classList.add( 'scroll-reveal' );
	update();
})();
