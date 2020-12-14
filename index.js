
bootstrapValidate('#name','required:Please enter your name!');
bootstrapValidate('#email','email:Enter a valid E-Mail Address!');
bootstrapValidate( '#usname','max:8: pls do not enter more than 6 character');
bootstrapValidate( '#pass','min:8: pls do not enter more than 8 character');
window.onload = function(){
    confirmValue();
}
    function confirmValue(){
        if(name.value == '' || email.value == '' || usname.value == '' || pass.value == ''){
            document.getElementById('registerbtn').disabled = true;
            $('#registerbtn').css({'background-color':'#B2DFFC', 'border':'1px solid white','color':'white'});
        } else{
            document.getElementById('registerbtn').disabled = false;
            $('#registerbtn').css({'background-color':'#0095F6', 'border':'1px solid white','color':'white'});
        }
    }
    function showImage(){
        var file = document.getElementById("file").files;
        if(file.length > 0) {
            let fileReader = new FileReader();
            fileReader.onload = function (event) {
                document.getElementById("preview").setAttribute("src", event.target.result);
            }; 
            fileReader.readAsDataURL(file[0]);
        }
        // console.log(file);
    }

// $("#demo").change(function() {
//    display(this);
// });
    // checker();

// if(){
            // function checker(){
              
            // }

// }
// bootstrapValidate('#pass','alphanumeric:please only enter alphanumeric');

// let btn = document.querySelector('button');
// let input = document.querySelector('input');

// btn.addEventListener('click', ()=>{
//     alert('uegr');
// });
// input.addEventListener('keyup', () =>{
//     if(input.value == "") btn.disabled = true;
//     else btn.disabled = false;
// });
