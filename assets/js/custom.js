window.addEventListener('pageshow', (event) => {
    //console.log('page loaded');

    jQuery(document).ready(($) => {
        //console.log('initialised');

        $('.scroll-to-top').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, 'smooth');
        });

        $('.scroll-to-bottom').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: $(document).height() }, 'smooth');
        });
        
        function initialiseCheckScrollPosition() {
            const checkScrollPosition = () => {
                let scrollPosition = $(window).scrollTop();
                let offsetThreshold = 10;
            
                if (scrollPosition > offsetThreshold) {
                    $('body').addClass('sticky-header');
                } else {
                    $('body').removeClass('sticky-header');
                }
            };

            checkScrollPosition();

            // Events
            $(window).scroll(() => {
                checkScrollPosition();
            });
        }

        initialiseCheckScrollPosition();


    });

});