//Data Tables for Update Properties start
$(document).ready(function() {
    let table =  $('#UpdateTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]

    } );
    table.column(1).visible(false);

    table.on('click','.delete',function () {
        $tr = $(this).closest('tr');

        if ($($tr).hasClass('child')){
            $tr = $tr.prev('.parent');
        }

        let data = table.row($tr).data();

        $('#FormDelete').attr('action', 'properties/'+data[0]);
        $('#exampleModal').modal('show');
        $('#exampleModalLabel').text("Delete "+data[1]);
        //$('#deleteCategoryItem').text(data[2]);
    });
} );

//Data Tables for Update Properties end

//Data Tables for View all Properties start
$(document).ready(function() {
    let table =  $('#viewProperties').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );

     table.column(0).visible(false);
} );
//Data Tables for View all Properties start

//Data Tables for View All Users, Edit and Delete buttons start
$(document).ready(function() {
    let table =  $('#ViewUsers').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );

    //edit modal
    table.on('click','.edit',function () {
        $tr = $(this).closest('tr');

        if ($($tr).hasClass('child')){
            $tr = $tr.prev('.parent');
        }

        let data = table.row($tr).data();

        $('#FormEdit').attr('action', 'users/'+data[0]);
        $('#editModal').modal('show');
        $('#name').val(data[1]);
        $('#email').val(data[2]);
        $('#username').val(data[3]);
        $('#phone').val(data[4]);
        $('#editModalLabel').text("Edit "+data[1]);


        //$('#deleteCategoryItem').text(data[2]);
    });

    //delete modal
    table.on('click','.delete',function () {
        $tr = $(this).closest('tr');

        if ($($tr).hasClass('child')){
            $tr = $tr.prev('.parent');
        }

        let data = table.row($tr).data();

        $('#FormDelete').attr('action', 'users/'+data[0]);
        $('#deleteModal').modal('show');
        $('#deleteModalLabel').text("Delete "+data[1]+" From The System");
        //$('#deleteCategoryItem').text(data[2]);
    });
} );
//Data Tables for View All Users, Edit and Delete buttons end



//Data Tables for View All Properties by Admin, Edit and Delete buttons start
$(document).ready(function() {
    let table =  $('#AdminViewProperties').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );

    table.column(1).visible(false);

    //delete modal
    table.on('click','.delete',function () {
        $tr = $(this).closest('tr');

        if ($($tr).hasClass('child')){
            $tr = $tr.prev('.parent');
        }

        let data = table.row($tr).data();

        $('#ad-FormDelete').attr('action', 'properties/'+data[1]);
        $('#ad-deleteModal').modal('show');
        $('#ad-deleteModalLabel').text("Delete "+data[2]+" From The System");

        //$('#deleteCategoryItem').text(data[2]);
    });
} );
//Data Tables for View All Properties by Admin, Edit and Delete buttons end