$(document).ready(function() {
    var max_fields = 10; //maximum input boxes allowed
    var first = $("#first"); //first text input
    var add_button = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(first).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(first).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
    
    var members = $(".members"); //first text input
    var add = $(".add"); //Add button ID
    var member = 0;
    
    
    $(add).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            member++;
            //$(members).append('<div class="form-group><label for="member' + member + '">Member</label><input class="form-control" name="member' + member + '" placeholder="Member Name" /></div>'); //add input box
            $('<div class="form-group"><div class="input-group"><input type="text" class="form-control" name="member' + member + '" placeholder="Member Name" /><div class="input-group-btn"><button class="btn btn-default remove_field" type="button"><span class="glyphicon glyphicon-minus"></span></button></div></div></div>').appendTo(members);
        }
    });
    
    $(members).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').parent('div').parent('div').remove(); x--;
    })
});