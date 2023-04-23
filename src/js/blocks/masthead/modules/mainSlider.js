import Glide from '@glidejs/glide';

export default () => {
	const glide = new Glide( '.glide', {
		animationTimingFunc: 'ease',
		animationDuration: 800,
		rewind: false,
	} );

	const elArrowLeft = document.querySelector( '.main-slider__arrow--left' );
	const elArrowRight = document.querySelector( '.main-slider__arrow--right' );
	const elsGlideSlide = document.querySelectorAll( '.glide__slide' );

	elArrowLeft.addEventListener( 'click', () => glide.go( '<' ) );
	elArrowRight.addEventListener( 'click', () => glide.go( '>' ) );

	const toggleArrowClass = ( slideQueue, elArrow ) => {
		if ( slideQueue ) {
			elArrow.classList.add( 'main-slider__arrow--disabled' );
		} else {
			elArrow.classList.remove( 'main-slider__arrow--disabled' );
		}
	};

	const arrowClassToggleHandler = () => {
		const isFirstSlide = glide.index === 0;
		const isLastSlide = glide.index === elsGlideSlide.length - 1;

		toggleArrowClass( isFirstSlide, elArrowLeft );
		toggleArrowClass( isLastSlide, elArrowRight );
	};

	glide.on( 'move', arrowClassToggleHandler );
	glide.mount();
};
