$(document).ready(function() {

    function Zx2(data_id, php_url, get_all_product_cat, clickedElement, runfunction, ex_data, ex_data2) {
        cat_id = clickedElement.data(data_id);
        cl = clickedElement;


        var data = {
            value1: cat_id,
            value2: ex_data,
            value3: ex_data2,

        };

        $.ajax({
            type: "POST",
            url: php_url,
            data: data,
            success: function(response) {
                rs = response;


                // Assuming you want to fill the clicked element with the response
                $(get_all_product_cat).html(response);

                if (typeof runfunction === 'function') {
                    runfunction(); // Invoke the function passed as a parameter
                }

                // alert(response);
            },
            error: function(err) {
                console.error("Error:", err);
            }
        });
    }

    //// show smg 

    function add_cat_and_post(from_id, url, runfunction, editor_id = '') {

        $(from_id).submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            var num = true;

            if (editor_id !== '') {
                var objEditor = CKEDITOR.instances[editor_id];
                var sessionID = objEditor.getData();
                formData.append('editor', sessionID);
            }


            formData.forEach((value, name) => {
                if (!value) { // If the value is empty
                    num = false;
                    var inputField = document.getElementsByName(name)[0];
                    inputField.style.borderColor = 'red';

                    console.log(num);
                } else {
                    num = true;

                }
            });


            if (num) {
                $.ajax({
                    url: url, // Replace with your PHP script URL
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,

                    success: function(response) {
                        rs = response;

                        if (editor_id !== '') {
                            clearForm(from_id);
                        }

                        // Assuming you want to fill the clicked element with the response
                        //  $(get_all_product_cat).html(response);

                        if (typeof runfunction === 'function') {
                            runfunction(); // Invoke the function passed as a parameter
                        }





                        // Handle the server response here
                    }
                });
            }

        });
    }







    /*

       Zx2('id', '../mydasbord_/function.php', '.show_category', $(this), function() {

       });


    */

    ///   show_category table


    Zx2('id', '../mydasbord_/get_all_category.php', '.show_category', $(this), function() {});


    ///   show_category table for add post

    Zx2('id', '../mydasbord_/get_all_category_for_add_post.php', '#exampleFormControlSelect1', $(this), function() {});


    // edit category get single category 

    var edit_cat_id;

    $(document).on('click', ".edit_category_btn", function() {
        Zx2('id', '../mydasbord_/get_category_by_id.php', '', $(this), function() {
            //$('#category_name_geted').value=77;
            //alert(rs);
            document.getElementById('category_name_geted').value = rs.trim();

            edit_cat_id = cat_id;
           
        });
    });



    // edit  category 


    $(document).on('click', ".edit_category_save_btn", function() {
        Zx2('id', '../mydasbord_/edit_category.php', '', $(this), function() {
            //$('#category_name_geted').value=77;

            //alert(edit_cat_id);
            show_success_smg(`${rs}`);
            Zx2('id', '../mydasbord_/get_all_category.php', '.show_category', $(this), function() {

            });



        }, document.getElementById('category_name_geted').value, edit_cat_id);
    });


    ////////         e.preventDefault(); problem solved 


    add_cat_and_post('#edit_category_form_id', '../mydasbord_/edit_category.php', () => {
        Zx2('id', '../mydasbord_/get_all_category.php', '.show_category', $(this), function() {});

        closeModal('#close_edit_cat_modal');

    })

    ////////////____________



    $(document).on('click', ".delete_category_btn", function() {
        var deleteconfirmation = ` Do you want to delete the category ID ${$(this).data('id')} ?`;
        if (confirm(deleteconfirmation)) {
            Zx2('id', '../mydasbord_/delete_category.php', '', $(this), function() {
                $(cl).closest("tr").fadeOut();
                show_success_smg(`${rs}`);
                Zx2('id', '../mydasbord_/get_all_category_for_add_post.php', '#exampleFormControlSelect1', $(this), function() {});

            });

        }



    })







    $(document).on('click', ".change_status", function() {
        Zx2('id', '../mydasbord_/change_status_category.php', '', $(this), function() {
            // $(cl).closest("tr").fadeOut();
            Zx2('id', '../mydasbord_/get_all_category.php', '.show_category', $(this), function() {});
        });
    });


    ///add category 

    add_cat_and_post('#add_cat_from', '../mydasbord_/add_cat.php', () => {
        show_success_smg(`${rs}`);
        Zx2('id', '../mydasbord_/get_all_category_for_add_post.php', '#exampleFormControlSelect1', $(this), function() {});
        Zx2('id', '../mydasbord_/get_all_category.php', '.show_category', $(this), function() {});
        closeModal('#close_add_cat_modal');


    })


    ////////////////////////////////// only post work 👉👉👉👉👉👉👉👉


    // get all post and show table 
    Zx2('id', '../mydasbord_/get_all_post.php', '.show_post', $(this), function() {});

    ///add post
    add_cat_and_post('#add_post_from_id', '../mydasbord_/addPost.php', () => {

        show_success_smg(`${rs}`);
        CKEDITOR.instances['textrich'].setData(' ');

        Zx2('id', '../mydasbord_/get_all_post.php', '.show_post', $(this), function() {});

        closeModal('#close_add_post_modal');
    }, 'textrich')


    //edit post
    //// show data

    $(document).on('click', ".show_data_edit_btn", function() {
        Zx2('id', '../mydasbord_/gat_post_by_id.php', '#edit_post_form_id', $(this), function() {
            // $(cl).closest("tr").fadeOut();


        });
    });





    add_cat_and_post('#edit_post_form_id', '../mydasbord_/edit_post.php', () => {
        show_success_smg(`${rs}`);

        Zx2('id', '../mydasbord_/get_all_post.php', '.show_post', $(this), function() {});
        closeModal('#close_edit_post_modal');

    }, 'edit_post_textarea')



    ///delete post


    $(document).on('click', ".post_delect_btn", function() {
        var delete_post_confirmation = `Do you want to delete the POST ID ${$(this).data('id')} ?`;
        if (confirm(delete_post_confirmation)) {
            Zx2('id', '../mydasbord_/delete_post.php', '', $(this), function() {
                $(cl).closest("tr").fadeOut();
                show_success_smg(`${rs}`);

            });

        }
    });





    ////change status


    $(document).on('click', ".change_post_status", function() {
        Zx2('id', '../mydasbord_/change_post_status.php', '', $(this), function() {
            // $(cl).closest("tr").fadeOut();

            Zx2('id', '../mydasbord_/get_all_post.php', '.show_post', $(this), function() {})

        });
    });



    ///////////////)❌❌❌
    
   // logout.           logou_btn
   
   
        $(document).on('click', "#logou_btn", function() {
            Zx2('id', '../mydasbord_/logout.php', '', $(this), function() {
                            window.location.href="../mydasbord_/login.html"
                // $(cl).closest("tr").fadeOut();
            });
        });
    
    
})