<div align="right">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createModal">Create Form</button>
</div>

<div wire:ignore.self id="createModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Build Your Own Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Form Name</label>
                        <input type="text" id="exampleFormControlInput1" class="form-control"  placeholder="Enter Form Name" wire:model="form_name" />
                        @error('form_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input_fields_wrap">
                    <button class="add_field_button btn-sm btn-primary">Add More Fields</button><br>
                    <div class="form-inline" id="myDIV">
                       <div class="col-5 mr-5">
                        <label for="exampleFormControlInput2">Field Name</label>
                        <input type="text" id="exampleFormControlInput2" class="form-control" placeholder="Enter Field Name" wire:model="field_name1" />
                        @error('field_name1')<span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                       <div class="col-5">
                        <label for="exampleFormControlInput4">Field Type</label>
                        <select class="form-control" id="exampleFormControlInput4" wire:model="field_type1">
                            <option value="">Select</option>
                            <option value="Text">Text</option>
                            <option value="Number">Number</option>
                            <option value="Date">Date</option>
                            <option value="Text_Area">Text Area</option>

                        </select>
                        @error('field_type1')<span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="col-5 mr-5">
                        <label for="exampleFormControlInput2">Field Name</label>
                        <input type="text" id="exampleFormControlInput2" class="form-control" placeholder="Enter Field Name" wire:model="field_name2" />
                        @error('field_name2')<span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                       <div class="col-5">
                        <label for="exampleFormControlInput4">Field Type</label>
                        <select class="form-control" id="exampleFormControlInput4" wire:model="field_type2">
                            <option value="">Select</option>
                            <option value="Text">Text</option>
                            <option value="Number">Number</option>
                            <option value="Date">Date</option>
                            <option value="Text_Area">Text Area</option>

                        </select>
                        @error('field_type2')<span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="col-5 mr-5">
                        <label for="exampleFormControlInput2">Field Name</label>
                        <input type="text" id="exampleFormControlInput2" class="form-control" placeholder="Enter Field Name" wire:model="field_name3" />
                        @error('field_name3')<span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                       <div class="col-5">
                        <label for="exampleFormControlInput4">Field Type</label>
                        <select class="form-control" id="exampleFormControlInput4" wire:model="field_type3">
                            <option value="">Select</option>
                            <option value="Text">Text</option>
                            <option value="Number">Number</option>
                            <option value="Date">Date</option>
                            <option value="Text_Area">Text Area</option>

                        </select>
                        @error('field_type3')<span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="col-5 mr-5">
                        <label for="exampleFormControlInput2">Field Name</label>
                        <input type="text" id="exampleFormControlInput2" class="form-control" placeholder="Enter Field Name" wire:model="field_name4" />
                        @error('field_name4')<span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                       <div class="col-5">
                        <label for="exampleFormControlInput4">Field Type</label>
                        <select class="form-control" id="exampleFormControlInput4" wire:model="field_type4">
                            <option value="">Select</option>
                            <option value="Text">Text</option>
                            <option value="Number">Number</option>
                            <option value="Date">Date</option>
                            <option value="Text_Area">Text Area</option>

                        </select>
                        @error('field_type4')<span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="col-5 mr-5">
                        <label for="exampleFormControlInput2">Field Name</label>
                        <input type="text" id="exampleFormControlInput2" class="form-control" placeholder="Enter Field Name" wire:model="field_name5" />
                        @error('field_name5')<span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                       <div class="col-5">
                        <label for="exampleFormControlInput4">Field Type</label>
                        <select class="form-control" id="exampleFormControlInput4" wire:model="field_type5">
                            <option value="">Select</option>
                            <option value="Text">Text</option>
                            <option value="Number">Number</option>
                            <option value="Date">Date</option>
                            <option value="Text_Area">Text Area</option>

                        </select>
                        @error('field_type5')<span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="col-5 mr-5">
                        <label for="exampleFormControlInput2">Field Name</label>
                        <input type="text" id="exampleFormControlInput2" class="form-control" placeholder="Enter Field Name" wire:model="field_name6" />
                        @error('field_name6')<span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                       <div class="col-5">
                        <label for="exampleFormControlInput4">Field Type</label>
                        <select class="form-control" id="exampleFormControlInput4" wire:model="field_type6">
                            <option value="">Select</option>
                            <option value="Text">Text</option>
                            <option value="Number">Number</option>
                            <option value="Date">Date</option>
                            <option value="Text_Area">Text Area</option>

                        </select>
                        @error('field_type6')<span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="col-5 mr-5">
                        <label for="exampleFormControlInput2">Field Name</label>
                        <input type="text" id="exampleFormControlInput2" class="form-control" placeholder="Enter Field Name" wire:model="field_name7" />
                        @error('field_name7')<span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                       <div class="col-5">
                        <label for="exampleFormControlInput4">Field Type</label>
                        <select class="form-control" id="exampleFormControlInput4" wire:model="field_type7">
                            <option value="">Select</option>
                            <option value="Text">Text</option>
                            <option value="Number">Number</option>
                            <option value="Date">Date</option>
                            <option value="Text_Area">Text Area</option>

                        </select>
                        @error('field_type7')<span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="col-5 mr-5">
                        <label for="exampleFormControlInput2">Field Name</label>
                        <input type="text" id="exampleFormControlInput2" class="form-control" placeholder="Enter Field Name" wire:model="field_name8" />
                        @error('field_name8')<span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                       <div class="col-5">
                        <label for="exampleFormControlInput4">Field Type</label>
                        <select class="form-control" id="exampleFormControlInput4" wire:model="field_type8">
                            <option value="">Select</option>
                            <option value="Text">Text</option>
                            <option value="Number">Number</option>
                            <option value="Date">Date</option>
                            <option value="Text_Area">Text Area</option>

                        </select>
                        @error('field_type8')<span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>

                        </div>
                        
                    </div>
                    <br>
                    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
