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
                            <h6 class="mb-4">Formulario Editar Usuario</h6>
                            <form action="{{ route('Usuario.update', $usuario->id)}}" method="POST">
															@csrf
                                                            @method('PUT')
															<div class="mb-3">

                                    <input type="name" hidden id="name" name="remember_token" value="" 
                                    value="{{old('remember_token', $usuario->remember_token)}}">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="name" class="form-control" id="name" name="nombre" required
                                    value="{{old('nombre', $usuario->nombre)}}">
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email </label>
                                    <input type="email" class="form-control" id="email" name="email" required
                                    value="{{old('email', $usuario->email)}}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required
                                    value="{{old('password', $usuario->password)}}">
                                </div>

								<div class="mb-3">
                                    <label for="status" class="form-label">Estado</label>
                                    <input type="number" class="form-control" id="status" name="estado" required
                                    value="{{old('estado', $usuario->estado)}}">
                                </div>
                                
                                <button type="submit" class="btn btn-success">Enviar</button>
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