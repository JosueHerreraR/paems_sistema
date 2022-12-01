//Scripts de los Modals para la modificacion de archivos JPG / JPEG / PNG / WEBB

$(document).ready(function(){

    // Fetch Data from Database
    function fetchData(){
        $.ajax({
            url  : "mod_cultural/fetch_cultural.php",
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
            url : "mod_cultural/edit_cultural.php",
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
                url  : "controlador/cont_delete.php",
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
            url  : "mod_cultural/update_cultural.php",
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