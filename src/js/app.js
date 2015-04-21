jQuery(document).ready(function () {
    $(function () {
        $(document).on('click', "#select", function () {
            $(this).parent('#user_connect').find('#user_show').toggleClass('dispn');
            $(this).parent('#user_connect').find('#user_show').toggleClass('dispib');

            $(this).parent('#user_connect').find('#user_hide').toggleClass('dispn');
            $(this).parent('#user_connect').find('#user_hide').toggleClass('dispib');

            $(this).find('#arrow').toggleClass('ion-ios-arrow-forward');
            $(this).find('#arrow').toggleClass('ion-ios-arrow-back');
        });
    });

    $(function () {
        $(document).on('click', "#pseudo", function () {
            $(this).parent('#user_show').toggleClass('dispn');
            $(this).parent('#user_show').toggleClass('dispib');

            $(this).parent('#user_show').parent('#user_connect').find('#user_hide').toggleClass('dispn');
            $(this).parent('#user_show').parent('#user_connect').find('#user_hide').toggleClass('dispib');

            $(this).parent('#user_show').parent('#user_connect').find('#arrow').toggleClass('ion-ios-arrow-forward');
            $(this).parent('#user_show').parent('#user_connect').find('#arrow').toggleClass('ion-ios-arrow-back');
        });
    });
});