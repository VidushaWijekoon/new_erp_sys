<!-- Create a new department -->
<div wire:ignore.self class="modal fade" id="createNewDepartment" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form wire:submit.prevent="storeDepartment">
                <div class="modal-header">
                    <h5 class="modal-title"><strong>Create New Department</strong></h5>
                    <button type="button" class="close" wire:click="closeModal" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">
                            <span>Department Name</span>
                        </label>
                        <input type="text" class="form-control rounded-0" wire:model.defer="department_name"
                            placeholder="Department Name">
                        @error('department_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea type="password" class="form-control rounded-0" wire:model.defer="description" placeholder="Description"
                            rows="3"></textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" wire:click="closeModal"
                        data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Show Department Modal -->
<div wire:ignore.self class="modal fade" id="showDepartment" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <form wire:submit.prevent="showDepartment">
                <div class="modal-header">
                    <h5 class="modal-title"><strong>Create New Department</strong></h5>
                    <button type="button" class="close" wire:click="closeModal" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">
                            <span>Department Name</span>
                        </label>
                        <input type="text" class="form-control rounded-0 text-capitalize"
                            wire:model.defer="department_name" placeholder="Department Name" readonly disabled>
                        @error('department_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea type="password" class="form-control rounded-0 text-capitalize" wire:model.defer="description"
                            placeholder="Description" rows="3" readonly disabled>
                        </textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" wire:click="closeModal"
                        data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Show Department Modal -->
<div wire:ignore.self class="modal fade" id="editDepartment" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <form wire:submit.prevent="updateDepartment">
                <div class="modal-header">
                    <h5 class="modal-title"><strong>Create New Department</strong></h5>
                    <button type="button" class="close" wire:click="closeModal" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">
                            <span>Department Name</span>
                        </label>
                        <input type="text" class="form-control rounded-0 text-capitalize"
                            wire:model.defer="department_name" placeholder="Department Name">
                        @error('department_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea type="password" class="form-control rounded-0 text-capitalize" wire:model.defer="description"
                            placeholder="Description" rows="3">
                        </textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" wire:click="closeModal"
                        data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Department Modal -->
<div wire:ignore.self class="modal fade" id="deleteDepartment" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form wire:submit.prevent="destroyDepartment">
                <div class="modal-body text-center">
                    <img src="{{ asset('images/sent.png') }}" alt="" width="50" height="46"
                        class="mb-3">
                    <h3 class="mb-3">Are you sure want to delete this department?</h3>
                    <div class="m-t-20"> <a href="#" class="btn btn-white btn-sm"
                            data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

{{-- <!-- Active Department Modal -->
<div wire:ignore.self class="modal fade" id="activeStatus" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form wire:submit.prevent="activeStatus">
                <div class="modal-body text-center">
                    <i class="fa-solid fa-square-check fa-4x text-success"></i>
                    <h3 class="mb-3">Are you sure want to active this?</h3>
                    <div class="m-t-20"> <a href="#" class="btn btn-white btn-sm"
                            data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-success btn-sm">Activate</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- Deactivate Department Modal -->
<div wire:ignore.self class="modal fade" id="deactivateStatus" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form wire:submit.prevent="deactivateStatus">
                <div class="modal-body text-center">
                    <i class="fa-solid fa-square-xmark fa-4x text-danger"></i>
                    <h3 class="mb-3">Are you sure want to deactivate this?</h3>
                    <div class="m-t-20"> <a href="#" class="btn btn-white btn-sm"
                            data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-danger btn-sm">Deactivate</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div> --}}
