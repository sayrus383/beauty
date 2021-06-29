const slider = document.querySelector(".main-slider");
const interleaveOffset = 0.75;
const slideDelay = 10;
const sliderNav = document.querySelectorAll(".main-slider-nav__item");


const swiper = new Swiper(slider, {
	loop: false,
	direction: "vertical",
	speed: 1200,
	grabCursor: false,
	watchSlidesProgress: true,
	mousewheelControl: true,
	mousewheel: true,
	lazy: true,
	// pagination: {
	// 	el: sliderCounter,
	// 	type: "custom",
	// 	renderCustom: function(swiper, current, total) {
	// 		let i = current ? current : 0;
	// 		return `${("0" + i).slice(-2)} / ${("0" + total).slice(-2)}`;
	// 	}
	// },
	autoplay: {
		delay: slideDelay * 1000,
		disableOnInteraction: false
	},
	// navigation: {
	// 	nextEl: sliderNext,
	// 	prevEl: sliderPrevious
	// },
	on: {
		 init: function () {
			let swiper = this;
			let swiperActiveIndex = swiper.activeIndex;
			let animation = new TimelineMax({ease: Expo.easeOut});

			animation
			.from(swiper.slides[swiperActiveIndex].querySelector(".main-slide__text"), 0.5, {
				y: 50, 
				opacity: 0
			}, 2.5)
			.staggerFrom(swiper.slides[swiperActiveIndex].querySelectorAll(".main-slide__col"), 0.5, {
				rotateY: 90,
				opacity: 0
			}, 0.2)
			.from(swiper.slides[swiperActiveIndex].querySelector(".main-slide-go"), 0.5, {
				y: -50, 
				opacity: 0
			});
			
			TweenMax.from(swiper.slides[swiperActiveIndex].querySelector(".main-slide__picture"), 10, {
				scale: 1.2
			}, 2.5);
		},

		slideChange: function() {
			let swiper = this;
			let swiperActiveIndex = swiper.activeIndex;
			let animation = new TimelineMax({ease: Expo.easeOut});

			animation
			.from(swiper.slides[swiperActiveIndex].querySelector(".main-slide__text"), 0.5, {
				y: 50, 
				opacity: 0
			}, 1)
			.staggerFrom(swiper.slides[swiperActiveIndex].querySelectorAll(".main-slide__col"), 0.5, {
				rotateY: 90,
				opacity: 0
			}, 0.2)
			.from(swiper.slides[swiperActiveIndex].querySelector(".main-slide-go"), 0.5, {
				y: -50, 
				opacity: 0
			});
			
			TweenMax.from(swiper.slides[swiperActiveIndex].querySelector(".main-slide__picture"), 10, {
				scale: 1.2
			});


			sliderNav.forEach(function(sliderNavItem) {
				sliderNavItem.classList.remove("is-active");
			});

			sliderNav[swiperActiveIndex].classList.add("is-active");
		},

		progress: function() {
			let swiper = this;

			for (let i = 0; i < swiper.slides.length; i++) {
				let slideProgress = swiper.slides[i].progress;
				let innerOffset = swiper.height * interleaveOffset;
				let innerTranslate = slideProgress * innerOffset;

				TweenMax.set(swiper.slides[i].querySelector(".main-slide"), {
					y: innerTranslate,
				});
			}

			let progressBar = new TimelineMax();

			progressBar
			.set('.main-slider__progress', {
				scaleX: 0
			})
			.to('.main-slider__progress', slideDelay, {
				scaleX: 1,
				ease: Power0.easeNone
			});
		},

		touchStart: function() {
			let swiper = this;
			for (let i = 0; i < swiper.slides.length; i++) {
				swiper.slides[i].style.transition = "";
			}
		},

		setTransition: function(speed) {
			let swiper = this;
			for (let i = 0; i < swiper.slides.length; i++) {
				swiper.slides[i].style.transition = speed + "ms";
				swiper.slides[i].querySelector(".main-slide").style.transition =
					speed + "ms";
			}
		}
	}
});


$('.main-slider-nav__link').click(function() {

	let goToSlideIndex = parseInt($(this).data('index'));
	let swiperActiveIndex = swiper.activeIndex;

	if ( goToSlideIndex != swiperActiveIndex ) {
		swiper.slideTo(goToSlideIndex, 1000, false);
	}

});

