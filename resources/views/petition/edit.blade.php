<div class="modal fade" id="rejectedModal{{ $petition->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Datalles de Reserva</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="card-text">
                    <span class="text-secondary">Nombre profesor:</span>
                    {{ $petition->user->name }} {{ $petition->user->surname }}
                </p>
                <hr>
                <p class="card-text">
                    <span class="text-secondary">Materia:</span>
                    {{ $petition->assignment->assignment_name }}
                </p>
                <hr>
                <p class="card-text">
                    <span class="text-secondary">Fecha Inicio:</span>
                    {{ $petition->start_date }}
                </p>
                <hr>
                <p class="card-text">
                    <span class="text-secondary">Fecha Fin:</span>
                    {{ $petition->finish_date }}
                </p>
                <hr>
                <p class="card-text">
                    <span class="text-secondary">Días:</span>
                    {{ $petition->days }}
                </p>
                <hr>
                <p class="card-text">
                    <span class="text-secondary">Hora de Inicio:</span>
                    {{ $petition->start_time }}
                </p>
                <p class="card-text">
                    <span class="text-secondary">Hora de Fin:</span>
                    {{ $petition->finish_time }}
                </p>
                <hr>
                <p class="card-text">
                    <span class="text-secondary">Tipo de Aula:</span>
                    {{ $petition->classroom_type }}
                </p>
                <hr>
                <p class="card-text">
                    <span class="text-secondary">Mensaje:</span>
                    {{ $petition->message }}
                </p>
                <hr>

                <!-- BOTON DE RECHAZO DEFINITIVO-->
                <!-- Se llama al metodo de la ruta 'petitions.reject' usando el 'id' de la peticion como parametro -->
                <form action="{{ route('petitions.reject', $petition->id) }}" method="POST" name="form_petition" id="form_petition">
                    <!-- Token y metodo patch para llamar al metodo -->
                    @csrf @method('PATCH')

                    <h5>Razón del rechazo</h5>

                    <textarea name="reason" id="reason" cols="36" rows="5" required></textarea>

                    <!-- Div para comprobacion de campos -->
                    <div id='warning_reason'></div>

                    <div class="container">
                        <div class="row">
                            <div class="col" align=center>
                                <button type="submit" class="btn btn-danger btn-xl">Rechazar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>