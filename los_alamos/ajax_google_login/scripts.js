$(document).ready(function(){
    //Get DB Users
    $.ajax({
        type: 'GET',
        url: './users.json',
        success: function(data){
        myData = data;
        }
    })
})
//Log Out
function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
}
//Log In

function onSignIn(googleUser) {
    //Get Profile
    var profile = googleUser.getBasicProfile();
    var user = {
        name: profile.getName(),
        email: profile.getEmail(),
        info:{
            isAdmin: false,
            isMod: false
        }
    }
    if (user.email.indexOf('guhsd.net') > -1){ 
            result = $.grep(myData, function(e){ return e.email == profile.getEmail(); });
            if(result[0] == null){
                newData = myData.concat(user);
                newData = JSON.stringify(newData);
                console.log('New Data ' + newData);
                $.post('./send.php',{
                newData: newData
                    },function(){
                    console.log('Added User')
                    }
                )
            }
            else if(result[0].email == profile.getEmail()){
                alert('User Already Registered')
            }
    }else{
        alert('Oops Only GUHSD Stundents')
        signOut();
    }
}