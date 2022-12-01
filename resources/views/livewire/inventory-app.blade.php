<div>

    <!-- Modal -->
    <div class="modal fade" id="nameModal" tabindex="-1" role="dialog" aria-labelledby="nameModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="nameModalLabel">Bonjour</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="" wire:submit.prevent>
                    <div class="mb-3 d-flex flex-row align-items-center">
                        <label class="form-label ml-2">Entrez votre nom:</label>
                        <div class="w-100">
                            <input type="name" class="form-control" wire:model.lazy="lenderName"
                                placeholder="Votre nom">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" wire:click='$refresh' data-dismiss="modal">Valider</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <h1 class="display-1">FLI Project</h1>
    <div>
        <form class="" wire:submit.prevent='ajoutNom'>
            <div class="mb-3 d-flex flex-row align-items-center">
                <label class="form-label">Ajouter un nouvel objet:</label>
                <div class="w-100">
                    <input type="name" class="form-control" wire:model.lazy="itemName" placeholder="Nom de l'objet">
                    @error('itemName')
                    <div class="alert alert-danger p-2" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary ms-2">Ajouter</button>
            </div>
        </form>

    </div>
    <div class="table-responsive">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th class="th1">Nom</th>
                    <th class="th1">Emprunté</th>
                    <th class="th1">Date d'emprunt</th>
                    <th class="th1">Nom de l'emprunteur</th>
                    <th class="th2">emprunter</th>
                    <th class="th2">supprimer</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <th class="fw-normal">{{ $item->itemName }}</th>
                    <th class="fw-normal">
                        @if ($item->lent == 0)
                        disponible
                        @else
                        emprunté
                        @endif
                    </th>
                    <th class="fw-normal"> {{$item->lendDate}}</th>
                    <th class="fw-normal"> {{$item->lenderName}}</th>
                    <th>
                        @if ($lenderName == "")
                            <button class="btn btn-primary" data-toggle="modal" data-target="#nameModal">Connectez vous pour
                            emprunter</button>
                        @else
                                <div></div>
                            @if ($item->lent == 0)
                                <button class="btn btn-success"
                                wire:click="lending({{$item->id}}, {{$item->lent}})">emprunter</button>
                            @else
                            
                                <button class="btn btn-warning"
                                wire:click="lending({{$item->id}}, {{$item->lent}})">rendre</button>

                            @endif
                        @endif
                    </th>
                    <th><button class="btn btn-danger float-right" data-toggle="modal"
                            data-target="#deleteModal-{{$item->id}}">X</button>
                    </th>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="deleteModal-{{$item->id}}" tabindex="-1" role="dialog"
                    aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Attention</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                êtes vous sur de vouloir retirer l'objet "{{$item->itemName}}" de l'inventaire?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                <button type="button" class="btn btn-primary" wire:click="deleteItem({{$item->id}})"
                                    data-dismiss="modal">Oui</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>

</div>