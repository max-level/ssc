$(document).ready(function () {
    $(".yusejine .mabx").click(function () {
        $("#bet_money1").val($(this).attr("dates"));
        $("#bet_money2").val($(this).attr("dates"));
    });
    $("#bet_money1").blur(function () {
        $("#bet_money2").val($(this).val());
    });
    $("#bet_money2").blur(function () {
        $("#bet_money1").val($(this).val());
    });
    $(".duotable tr").each(function (i) {
        if (i >= 1) {
            var $tr = $(this);
            $tr.find("td").each(function (j) {
                if (j % 2 == 0) {
                    $(this).click(function () {
                        var $input = $(this).next().find("input").eq(0);
                        if ($input.val() == "") {
                            $input.val($("#bet_money1").val());
                        } else {
                            $input.val("");
                        }
                    });
                }
            });
        }
    });
 
});