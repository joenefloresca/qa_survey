$(function() {
	$('select').change(function() {
	    // get all selects
	    var allSelects = $('select');

	    // set values count by type
	    var yes = 0;
	    var no = 0;
	    var na = 0;
	    var quality_score = 0;
            var autofail = $("#Forms_AutoFail").val();
            
	    // for each select increase count
	    $.each(allSelects, function(i, s) {
	        // increase count
	        if($(s).val() == 'Yes') { yes++; }
	        if($(s).val() == 'No') { no++; }
	        if($(s).val() == 'N/A') { na++; }
	    });

	    quality_score = yes / (yes + no) * 100;

	    $("#Forms_YesCounts").val(yes);
            $("#Forms_NoCounts").val(no);
            $("#Forms_NACounts").val(na);
            $("#Forms_QualityScore").val(quality_score.toFixed(1));
            $("#qa_score").val(quality_score.toFixed(1));
            $("#auto_fail").val(autofail);

    	
	});
});

$(function() {
    jQuery('#DateTime').datetimepicker();
  });
  




