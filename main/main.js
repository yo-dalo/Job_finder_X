/*
$.ajax({
    url: 'http://asdr.000.pe/sarkari_r__XYZ/jasn.php',
    method: 'POST',
    dataType: 'json', // Specify that you expect JSON data
    success: function(data) {
        // Handle the successful response here

        console.log(data.id);
    },
    error: function(xhr, status, error) {
        // Handle errors here
        console.error('Request failed: ' + status, error);
    }
});

*/

//url: './jasn.php?id=',
 //  url: './jasn.php?id=207',


  //url: './post_axios.php?id=270',



function fname() {
    // body...

    $.ajax({
        method: 'POST',
        url: './post_axios.php?id=270',

        dataType: 'json', // Specify that you expect JSON data
        success: function(data) {
            // Handle the successful response here

            data.map((arg) => {
                console.log(arg.id);
                console.log(arg.Post_data);
            })

        },
        error: function(xhr, status, error) {
            // Handle errors here
            console.error('Request failed: ' + status, error);
        }
    });


}

