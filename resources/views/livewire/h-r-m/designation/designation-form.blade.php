<!-- Create New Designation -->
<div wire:ignore.self class="modal fade" id="createDesignation" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form wire:submit.prevent="storeDesignation">
                <div class="modal-header" style="background: #222e3c">
                    <span class="modal-title mb-0 d-flex justify-content-between w-100">
                        <h4 style="color: #e9ecef">{{ __('Create New Designation') }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            wire:click="closeModal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </span>
                </div>

                <div class="modal-body">
                    @if ($errors->any())
                        <div class="alert alert-warning bg-warning p-3 mb-3 rounded-3">
                            @foreach ($errors->all() as $error)
                                <div class="">{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif
                    <div class="form-group">
                        <label class="form-label">
                            <span>{{ __('Designation Name') }}</span>
                        </label>
                        <input type="text" class="form-control rounded-0" wire:model.defer="designation_name"
                            placeholder="Designation Name" required>
                        @error('designation_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">{{ __('Description') }}</label>
                        <textarea type="password" class="form-control rounded-0" wire:model.defer="description" placeholder="Description"
                            rows="3" required></textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"
                        wire:click="closeModal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Create New Designation -->

<!-- Show Designation -->
<div wire:ignore.self class="modal fade" id="showDesignation" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #222e3c">
                <span class="modal-title mb-0 d-flex justify-content-between w-100">
                    <h4 style="color: #e9ecef">{{ __('Show Designation') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        wire:click="closeModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </span>
            </div>

            <div wire:loading class="p-2">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only"></span>
                </div>
            </div>

            <div wire:loading.remove class="">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">
                            <span>{{ __('Designation Name') }}</span>
                        </label>
                        <input type="text" class="form-control rounded-0" wire:model.defer="designation_name"
                            readonly disabled>
                    </div>

                    <div class="form-group">
                        <label class="form-label">{{ __('Description') }}</label>
                        <textarea type="password" class="form-control rounded-0" wire:model.defer="description" rows="3" readonly
                            disabled></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"
                        wire:click="closeModal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Show Designation -->

<!-- Edit Designation -->
<div wire:ignore.self class="modal fade" id="editDesignation" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form wire:submit.prevent="editDesignation">
                <div class="modal-header" style="background: #222e3c">
                    <span class="modal-title mb-0 d-flex justify-content-between w-100">
                        <h4 style="color: #e9ecef">{{ __('Edit Designation') }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            wire:click="closeModal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </span>
                </div>
                <div wire:loading class="p-2">
                    <div class="spinner-border text-primary" role="status">
                        <span class="sr-only"></span>
                    </div>
                </div>

                <div wire:loading.remove class="">

                    <div class="modal-body">
                        @if ($errors->any())
                            <div class="alert alert-warning bg-warning p-3 mb-3 rounded-3">
                                @foreach ($errors->all() as $error)
                                    <div class="">{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif
                        <div class="form-group">
                            <label class="form-label">
                                <span>{{ __('Designation Name') }}</span>
                            </label>
                            <input type="text" class="form-control rounded-0" wire:model.defer="designation_name"
                                placeholder="Designation Name" required>
                            @error('Designation_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label">{{ __('Description') }}</label>
                            <textarea type="password" class="form-control rounded-0" wire:model.defer="description" placeholder="Description"
                                rows="3" required></textarea>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"
                            wire:click="closeModal">Close</button>
                        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Edit Department -->

<!-- Delete Department -->
<div wire:ignore.self class="modal fade" id="deleteDesignation" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form wire:submit.prevent="detroyDepartment">
                <div class="modal-header" style="background: #222e3c">
                    <span class="modal-title mb-0 d-flex justify-content-between w-100">
                        <h4 style="color: #e9ecef">{{ __('Delete Department') }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            wire:click="closeModal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </span>
                </div>

                <div class="modal-body text-center">
                    <img src="{{ asset('images/sent.png') }}" alt="" width="50" height="46">
                    <h3 class="mt-3">Are you sure want to delete this Designation?</h3>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"
                        wire:click="closeModal">Close</button>
                    <button type="submit" class="btn btn-danger btn-sm">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Delete Department -->
