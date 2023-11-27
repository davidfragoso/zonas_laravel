<div class="row">
    @foreach ($zonasArqueologicas as $zona)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ $zona->imagen_url }}" class="card-img-top" alt="Imagen de {{ $zona->nombre }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $zona->nombre }}</h5>
                    <p class="card-text">{{ Str::limit($zona->descripcion, 100) }}</p>
                    <!-- Botón para abrir el modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#zonaModal{{ $zona->id }}">
                        Más detalles
                    </button>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="zonaModal{{ $zona->id }}" tabindex="-1"
                aria-labelledby="zonaModalLabel{{ $zona->id }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="zonaModalLabel{{ $zona->id }}">{{ $zona->nombre }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ $zona->imagen_url }}" class="img-fluid mb-3"
                                alt="Imagen de {{ $zona->nombre }}">
                            <p>{{ $zona->descripcion }}</p>
                            <p>{{ $zona->municipio->nombre }}</p>
                            <p><strong>Contacto:</strong> {{ $zona->contacto->telefono ?? 'No disponible' }}</p>
                            <!-- Información Adicional -->
                            <p><strong>Ubicación:</strong> {{ $zona->estado->nombre }}, {{ $zona->municipio->nombre }}
                            </p>
                            <p><strong>Contacto:</strong> {{ $zona->contacto->telefono }} | <a
                                    href="mailto:{{ $zona->contacto->email }}">{{ $zona->contacto->email }}</a></p>
                            <p><strong>Sitio Web:</strong> <a href="{{ $zona->contacto->pagina_web }}"
                                    target="_blank">{{ $zona->contacto->pagina_web }}</a></p>
                            <a href="https://maps.google.com/?q={{ $zona->gmaps_latitud }},{{ $zona->gmaps_longitud }}"
                                target="_blank" class="btn btn-link">Ver en mapa</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

