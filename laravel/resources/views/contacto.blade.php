@extends('layouts.plantilla')


@section('content')


    <div class="container margin-default">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-12">
                @if(session('success'))
                    <div>{{ session('success') }}</div>
                @endif
                <form action="{{ url('/contacto') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-12">
                        <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" />
                        <label for="email">Correo electrónico</label>
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-floating mb-12">
                        <textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                        <label for="message">Mensaje</label>
                        @error('message')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Enviar</button>
                    </div>
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">¡Formulario enviado con éxito!</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection('content')