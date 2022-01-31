
    <script src="{{asset('frontend/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/typed.min.js')}}"></script>
    <script src="{{asset('frontend/js/all.min.js')}}"></script>
    <script src="{{asset('frontend/js/lightslider.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            var typed = new Typed('#typed', {
                strings: [
                    "با برترین مهندسین",
                    "یعنی بروزترین ابزارها",
                    "تضمین صد در صدی کار"
                ],
                loop: true,
                typeSpeed: 50,
                backSpeed: 50
            });

            $('.tab-button').on('click', 'li', function () {
                let tabmenu = $(this).attr('id');
                $(this).addClass('active').siblings().removeClass('active');
                $('#' + tabmenu + '-content').addClass('active').siblings().removeClass('active');

            });

            $("#lightSlider").lightSlider({
                rtl: true,
                item: 4,
                slideMargin: 10,
                loop: true,
                pager: false,
                auto: true,
                pause: 3000,
                enableTouch: false,
                enableDrag: false,
            });

        })
    </script>
