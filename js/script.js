$(document).ready(function() {

    $('#section-yes').click(function() {
        if ($(this).is(':checked')) {
            $('#add-more').show();
        } else {
            $('#add-more').hide();
        }
    });

    $('#section-no').click(function() {
        $('#add-more').hide();
        $('#error-msg').html('');
        $('#section-step-1').hide();
        $('#section-step-2').hide();
        $('#section-step-3').hide();
        $('#section-step-4').hide();
        $('#section-step-5').hide();
        $('#section-step-6').hide();
    });

    // Add More Function  Start
    $('#add-more').click(function() {
        var val = $(this).val();
        $('#error-msg').html('');

        if (val == 1) {
            $('#section1-name-show').html('Section A');
            $("#add-more").val(2);
            $('#section-step-1').show();
        } else if (val == 2) {
            $('#section2-name-show').html('Section B');
            $("#add-more").val(3);
            $('#section-step-2').show();
        } else if (val == 3) {
            $('#section3-name-show').html('Section C');
            $("#add-more").val(4);
            $('#section-step-3').show();
        } else if (val == 4) {
            $('#section4-name-show').html('Section D');
            $("#add-more").val(5);
            $('#section-step-4').show();
        } else if (val == 5) {
            $('#section5-name-show').html('Section E');
            $("#add-more").val(6);
            $('#section-step-5').show();
        } else {
            $('#section6-name-show').html('Section F');
            $("#add-more").val(val);
            $('#section-step-6').show();
            $('#error-msg').html('Maximum Section is Added Already');
        }

    });
    // Add More Function End

    // Show category name Start
    $('#category-drop-step-1, #category-drop-step-2, #category-drop-step-3, #category-drop-step-4, #category-drop-step-5, #category-drop-step-6').change(function() {
        var vals = $(this).val();
        var val = vals.split('_');
        showCategoryName(val[0], val[1]);
    });

    function showCategoryName(step_id, val) {
        var stepID = step_id;

        if (val == undefined) {
            $("#category-name-show-step-" + stepID).hide();
            $('#category-step-' + stepID).hide();
        } else {
            $("#category-name-show-step-" + stepID).html(val).show();
            $('#category-step-' + stepID).show();
        }
    }
    // Show category name End

    // Show Complexity Name Start 
    $('#complexity-drop-step-1, #complexity-drop-step-2, #complexity-drop-step-3, #complexity-drop-step-4, #complexity-drop-step-5, #complexity-drop-step-6').change(function() {
        var vals = $(this).val();
        var val = vals.split('_');
        showComplexityName(val[0], val[1]);
    });

    function showComplexityName(step_id, val) {
        var stepID = step_id;

        if (val == undefined) {
            $("#complexity-name-show-step-" + stepID).hide();
            $('#complexity-step-' + stepID).hide();
        } else {
            $("#complexity-name-show-step-" + stepID).html(val).show();
            $('#complexity-step-' + stepID).show();
        }
    }
    // Show Complexity Name End

    // Question Type Name Start
    $('#question-drop-step-1, #question-drop-step-2, #question-drop-step-3, #question-drop-step-4, #question-drop-step-5, #question-drop-step-6').change(function() {
        var vals = $(this).val();
        var val = vals.split('_');
        showQuestionName(val[0], val[1]);
    });

    function showQuestionName(step_id, val) {
        var stepID = step_id;

        if (val) {
            $("#myTable_step_" + stepID).append("<tr><td>" + val + "</td><td>" + stepID + "</td><td>" + stepID + " &nbsp; <a href='javascript:void(0);' class='remCF'>Remove</a></td></tr>");
            $('#question-type-step-' + stepID).show();
        }
    }
    // Question Type Name End

    // Question Append delete Start
    $("#myTable_step_1").on('click', '.remCF', function() {
        $(this).parent().parent().remove();
    });
    $("#myTable_step_2").on('click', '.remCF', function() {
        $(this).parent().parent().remove();
    });
    $("#myTable_step_3").on('click', '.remCF', function() {
        $(this).parent().parent().remove();
    });
    $("#myTable_step_4").on('click', '.remCF', function() {
        $(this).parent().parent().remove();
    });
    $("#myTable_step_5").on('click', '.remCF', function() {
        $(this).parent().parent().remove();
    });
    $("#myTable_step_6").on('click', '.remCF', function() {
        $(this).parent().parent().remove();
    });
    // Question Append delete End

    // Section Remove Start
    $('#section-1, #section-2, #section-3, #section-4, #section-5, #section-6').click(function() {
        var val = $(this).val();
        delSection(val);
    });

    function delSection(val) {
        if (val == 1) {
            $("#section-step-" + val).remove();
        } else if (val == 2) {
            $("#section-step-" + val).remove();
        } else if (val == 3) {
            $("#section-step-" + val).remove();
        } else if (val == 4) {
            $("#section-step-" + val).remove();
        } else if (val == 5) {
            $("#section-step-" + val).remove();
        } else {
            $("#section-step-" + val).remove();
        }
    }
    // Section Remove End


});