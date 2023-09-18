<!-- Create New Holiday -->
<div wire:ignore.self class="modal fade" id="createHoliday" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form wire:submit.prevent="storeHoliday">
                <div class="modal-header" style="background: #222e3c">
                    <span class="modal-title mb-0 d-flex justify-content-between w-100">
                        <h4 style="color: #e9ecef">{{ __('Create New Holiday') }}</h4>
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
                                <div class="">{{ $error }} </div>
                            @endforeach
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="">{{ __('Holiday Name') }}</label>
                        <input type="text" wire:model.defer="holiday_name" class="form-control form-control-sm"
                            placeholder="Holiday Name">
                        @error('holiday_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="">{{ __('Holiday Date') }}</label>
                        <input type="date" wire:model.defer="holiday_date" class="form-control form-control-sm"
                            placeholder="Holiday Date">
                        @error('holiday_date')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="">{{ __('Special Note') }}</label>
                        <textarea type="text" wire:model.defer="holiday_special_note" class="form-control form-control-sm" rows="3"
                            placeholder="Special Note"></textarea>
                        @error('holiday_special_note')
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
<!-- End Create New Holiday -->

<!-- Show Holiday -->
<div wire:ignore.self class="modal fade" id="showHoliday" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #222e3c">
                <span class="modal-title mb-0 d-flex justify-content-between w-100">
                    <h4 style="color: #e9ecef">{{ __('Show Holiday') }}</h4>
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
                    <div class="mb-3">
                        <label for="">{{ __('Holiday Name') }}</label>
                        <input type="text" wire:model.defer="holiday_name" class="form-control form-control-sm"
                            readonly disabled>
                    </div>

                    <div class="mb-3">
                        <label for="">{{ __('Holiday Date') }}</label>
                        <input type="date" wire:model.defer="holiday_date" class="form-control form-control-sm"
                            readonly disabled>
                    </div>

                    <div class="mb-3">
                        <label for="">{{ __('Special Note') }}</label>
                        <textarea type="text" wire:model.defer="holiday_special_note" class="form-control form-control-sm" rows="3"
                            readonly disabled></textarea>
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
<!-- End Show Holiday -->

<!-- Edit Holiday -->
<div wire:ignore.self class="modal fade" id="editHoliday" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form wire:submit.prevent="editHoliday">
                <div class="modal-header" style="background: #222e3c">
                    <span class="modal-title mb-0 d-flex justify-content-between w-100">
                        <h4 style="color: #e9ecef">{{ __('Edit Holiday') }}</h4>
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
                                    <div class="">{{ $error }} </div>
                                @endforeach
                            </div>
                        @endif
                        <div class="mb-3">
                            <label for="">{{ __('Holiday Name') }}</label>
                            <input type="text" wire:model.defer="holiday_name"
                                class="form-control form-control-sm" placeholder="Holiday Name">
                            @error('holiday_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">{{ __('Holiday Date') }}</label>
                            <input type="date" wire:model.defer="holiday_date"
                                class="form-control form-control-sm" placeholder="Holiday Date">
                            @error('holiday_date')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">{{ __('Special Note') }}</label>
                            <textarea type="text" wire:model.defer="holiday_special_note" class="form-control form-control-sm" rows="3"
                                placeholder="Special Note"></textarea>
                            @error('holiday_special_note')
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
<!-- End Edit Holiday -->

<!-- Delete Holiday -->
<div wire:ignore.self class="modal fade" id="deleteHoliday" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form wire:submit.prevent="detroyHoliday">
                <div class="modal-header" style="background: #222e3c">
                    <span class="modal-title mb-0 d-flex justify-content-between w-100">
                        <h4 style="color: #e9ecef">{{ __('Delete Holiday') }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            wire:click="closeModal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </span>
                </div>

                <div class="modal-body text-center">
                    <img src="{{ asset('images/sent.png') }}" alt="" width="50" height="46">
                    <h3 class="mt-3">Are you sure want to delete this Holiday?</h3>
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
<!-- End Delete Holiday -->
