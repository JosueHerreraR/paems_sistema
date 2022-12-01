//Scripts de los Modals para la modificacion de archivos JPG / JPEG / PNG / WEBB

$(document).ready(function(){
	$("#submitForm").on("submit", function(e){
        e.preventDefault();
        $.ajax({
            url  :"upload.php",
            type :"POST",
            cache:false,
            contentType : false, // you can also use multipart/form-data replace of false
            processData : false,
            data: new FormData(this),
            success:function(response){
                $("#success").show();
                $("#multipleFile").val("");
                fetchData();
            }
        });
	});

    // Fetch Data from Database
    function fetchData(){
        $.ajax({
            url  : "mod_pabellon/fetch_pabellon.php",
            type : "POST",
            cache: false,
            success:function(data){
                $("#gallery").html(data);
            }
        });
    } fetchData();

    // Edit Data from Database
    $(document).on("click",".btn-success", function(){
        var editId = $(this).data('id');
        $.ajax({
            url : "mod_pabellon/edit_pabellon.php",
            type : "POST",
            cache: false,
            data : {editId:editId},
            success:function(data){
                $("#editForm").html(data);
            }
        });
    });

    // Delete Data from database
    $(document).on('click','.delete-btn', function(){
        var deleteId = $(this).data('id');
        if (confirm("¿Está seguro de que desea eliminar esta imagen?")) {
            $.ajax({
                url  : "controlador/delete.php",
                type : "POST",
                cache:false,
                data:{deleteId:deleteId},
                success:function(data){
                    $("#success").show();
                    fetchData();
                    //alert("La imagen eliminada correctamente");
                }
            });
        }
    });

    // Update Data from database
    $(document).on("submit", "#editForm", function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url  : "mod_pabellon/update_pabellon.php",
            type : "POST",
            cache: false,
            contentType : false, // you can also use multipart/form-data replace of false
            processData : false,
            data: formData,
            success:function(response){
                $("#exampleModal").modal('hide');
                alert("Imagen actualizada correctamente");
                fetchData();
            }
        });
    });
});