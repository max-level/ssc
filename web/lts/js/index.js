$(function(){
    H_qqServer={};
    H_qqServer.clickOpenServer = function () {
        $('.qq-client-open').click(function(){
            $('.qq-client').animate({
                right: '-150'
            },400);
            $('.qq-client-content').animate({
                right: '0',
                opacity: 'show'
            }, 800 );
        });
        $('.qq-client-close').click(function(){
            $('.qq-client').animate({
                right: '0',
                opacity: 'show'
            },400);
            $('.qq-client-content').animate({
                right: '-350',
                opacity: 'show'
            }, 800 );
        });
    };
    H_qqServer.run= function () {
        this.clickOpenServer();
    };
    H_qqServer.run();
});