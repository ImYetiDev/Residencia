@section('title', 'Usuarios')
@include('header')

<body>

    @include('sidebar')


    @section('tabla', 'Usuarios')
    @include('navbar')

    @include('cards')

    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Formulario Editar Vivienda</h6>
                    <form action="{{ route('Vivienda.update', $vivienda->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nomenclatura" class="form-label">Nomenclatura</label>
                            <input type="text" class="form-control" id="nomenclatura" name="nomenclatura" required value="{{ old('nomenclatura', $vivienda->nomenclatura) }}">
                        </div>

                        <div class="mb-3">
                            <label for="bloque_id" class="form-label">ID de Bloque</label>
                            <input type="number" class="form-control" id="bloque_id" name="bloque_id" required value="{{ old('bloque_id', $vivienda->bloque_id) }}">
                        </div>

                        <div class="mb-3">
                            <label for="estado" class="form-label">Estado</label>
                            <input type="text" class="form-control" id="estado" name="estado" required value="{{ old('estado', $vivienda->estado) }}">
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