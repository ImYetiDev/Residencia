@section('title', 'Editar Permiso')
@include('header')

<body>

    @include('sidebar')


    @section('tabla', 'Editar Permiso')
    @include('navbar')

    @include('cards')

    <script>
            function cambiarFondo(selected) {
                var selected = document.getElementById(selected);

                // Cambiar el fondo del elemento
                selected.classList.remove('bg-secondary');
                selected.classList.add('bg-success');
            }

            function cambiarIcono(icon) {
                var icon = document.getElementById(icon);

                // Cambiar el icono de color
                icon.classList.remove('text-success');
                icon.classList.add('text-secondary');
            }

            function cambiarTexto(texto) {
                // Obtener el texto y cambiar su color
                var texto = document.getElementById(texto);
                texto.classList.add('text-dark');
            }

            cambiarFondo('permiso');
            cambiarIcono('permisoIcon');
            cambiarTexto('permisoText');
        </script>

    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Formulario Editar Permiso</h6>
                    <form action="{{ route('Permiso.update', $permiso->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="vivienda_id" class="form-label">ID de Vivienda</label>
                            <input type="number" class="form-control" id="vivienda_id" name="vivienda_id" required value="{{ old('vivienda_id', $permiso->vivienda_id) }}">
                        </div>

                        <div class="mb-3">
                            <label for="nombre_visitante" class="form-label">Nombre del Visitante</label>
                            <input type="text" class="form-control" id="nombre_visitante" name="nombre_visitante" required value="{{ old('nombre_visitante', $permiso->nombre_visitante) }}">
                        </div>

                        <div class="mb-3">
                            <label for="documento_visitante" class="form-label">Documento del Visitante</label>
                            <input type="text" class="form-control" id="documento_visitante" name="documento_visitante" required value="{{ old('documento_visitante', $permiso->documento_visitante) }}">
                        </div>

                        <div class="mb-3">
                            <label for="estado" class="form-label">Estado</label>
                            <input type="text" class="form-control" id="estado" name="estado" required value="{{ old('estado', $permiso->estado) }}">
                        </div>

                        <button type="submit" class="btn btn-success">Guardar Cambios</button>
                    </form>




                </div>
            </div>
        </div>
    </div>





    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>