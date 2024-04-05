@section('title', 'Viviendas')
@include('header')

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        @include('sidebar')


        @section('tabla', 'Viviendas')
        @include('navbar')


        @include('cards')

        <script>
            cambiarFondo('viviendas');
            cambiarIcono('viviendasIcon');
        </script>

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">TABLA VIVIENDAS</h6>
                        <a href="{{ route('Vivienda.create') }}">
                        <i class="bi bi-plus-circle-dotted text-success fa-3x"></i>
                        </a>
                    </div>
                    <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nomenclatura</th>
                                <th scope="col">Bloque Id</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Creado en</th>
                                <th scope="col">Actualizado en</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($Viviendas as $dato)
                            <tr>
                                <td>{{ $dato->id }}</td>
                                    <td>{{ $dato->nomenclatura }}</td>
                                    <td>{{ $dato->bloque_id }}</td>
                                    <td>{{ $dato->estado }}</td>
                                    <td>{{ $dato->telefono }}</td>   
                                    <td>{{ $dato->created_at }}</td>
                                    <td>{{ $dato->updated_at }}</td>
                                    <td>
                                    <a href="{{ route('Vivienda.edit', $dato->id) }}" class="btn btn-warning" style="display: inline-block">
                                        Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('Vivienda.destroy', $dato->id) }}" method="POST" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" onclick="return confirm('¿Realmente quiere eliminar el registro?')" type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

            <!-- Calendario -->
            <div class="container-fluid pt-4 px-4">
            <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
            </div>
            <!-- End Calendario -->

            @include('footer')
            
        </div>
        <!-- Content End -->


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