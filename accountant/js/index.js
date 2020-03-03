$('.form').find('input, select, textarea').on('change keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'change') {
      if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    }else if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight'); 
			} else {
		    label.removeClass('highlight');   
			}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    		label.removeClass('highlight'); 
			} 
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});

function pass_check() {

        var p1=$("#p1").val();
        var p2=$("#p2").val();
        if (p1!=p2)
        {
          $("#pass_crr").html("");
          $("#pass_err").html("Mismatch Password! ");
          $("#pass_err").show();
        }
        else
        {
           $("#pass_err").html("");
          $("#pass_crr").html("Password Correct..");
          $("#pass_crr").show();
        }

        }


        function clear() {

            $("#pass_err").hide();
            $("#pass_crr").hide();

          }
