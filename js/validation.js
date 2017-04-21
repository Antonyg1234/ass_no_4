
/*$(document).ready(function(){
    $('#myForm').validate({
        rules:{
            category:{
                required:true,
                lettersonly:true
            }
        }

    });

   // $.validator.addMethod("accept", function(value, element) {
  //      return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
   // }, "Letters only please");

    $('#myForm_product').validate({
        rules: {

            product: {
                required: true,
                lettersonly: true
            },

            price: {
                required: true,
                number: true
            },
            uploadFile: {
                required: true,
                accept: "image/jpg, image/png",
                filesize: 10

            },
            select_category: {
                selectcheck: true

            },

            messages: {
                uploadFile: {
                    required: "You must insert an image",
                    accept: "Only .jpg and .png images allowed",
                    width: "Your image's file size must be less than 1mb"
                }
            }
        }

    });

    jQuery.validator.addMethod('selectcheck', function (value) {
        return (value != '0');
    }, "year required");

    $('#myForm_productedit').validate({
        rules: {

            product: {
                required: true,
                lettersonly: true
            },

            price: {
                required: true,
                number: true
            },
            uploadFile: {
                required: true,
                accept: "image/jpg, image/png",
                filesize: 10

            },
            select_category: {
                selectcheck: true

            },

            messages: {
                uploadFile: {
                    required: "You must insert an image",
                    accept: "Only .jpg and .png images allowed",
                    width: "Your image's file size must be less than 1mb"
                }
            }
        }

    });

});



//accept: "/^[a-zA-Z ]*$/"

function deleteFunction(id) {
    if(confirm("Confirm delete")) document.location = 'http://localhost/assignment_4/category_delete.php?id='+id;
}

function deleteProductFunction(id) {
    if(confirm("Confirm delete")) document.location = 'http://localhost/assignment_4/product_delete.php?id='+id;
}
*/