const btnEliminar = document.querySelectorAll('.btn-eliminar');

btnEliminar.forEach(btn => {
    btn.addEventListener('click', function (e) {
        e.preventDefault();

        Swal.fire({
            title: "¿Estás seguro de eliminar este usuario?",
            text: "No podrás revertir esta acción.",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d63030",
            cancelButtonColor: "rgb(0, 127, 165)",
            confirmButtonText: "Sí, eliminar",
            cancelButtonText: "Cancelar"
        }).then((result) => {
            if (result.isConfirmed) {
                this.closest("form").submit();
            }
        });
    });
});