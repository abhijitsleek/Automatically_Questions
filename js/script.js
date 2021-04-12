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
        $('#section-step-1').hide();
    });

    // Add More Function  Start
    $('#add-more').click(function() {
        var val = $(this).val();

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
    // Show category name End

    // Show Complexity Name Start 
    $('#complexity-drop-step-1').change(function() {
        var val = $(this).val();

        if (val) {
            $("#complexity-name-show-step-1").html(val).show();
            $('#complexity-step-1').show();
        } else {
            $("#complexity-name-show-step-1").hide();
            $('#complexity-step-1').hide();
        }

    });
    // Show Complexity Name End

    function showCategoryName(step_id, val) {
        var stepID = step_id;

        console.log('stepID', stepID);
        console.log('val', val);

        if (val) {
            $("#category-name-show-step-" + stepID).html(val).show();
            $('#category-step-' + stepID).show();
        } else {
            $("#category-name-show-step-" + stepID).hide();
            $('#category-step-' + stepID).hide();
        }
    }

});