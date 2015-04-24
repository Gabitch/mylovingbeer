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
    
    $(function () {
        $(document).on('click', "#selector", function () {
            $(this).parent('#account_mobile').find('#mobile_connect_button').toggleClass('dispn');
            $(this).parent('#account_mobile').find('#mobile_connect_button').toggleClass('dispib');
            
            $(this).find('i').toggleClass('ion-locked');
            $(this).find('i').toggleClass('ion-unlocked');
        });
    });
});