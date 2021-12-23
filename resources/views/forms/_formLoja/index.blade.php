<div class="col-md-3">
    <div class="form-group ">
        <label for="file">{{ __('file Excel de Transações') }}</label>
        <input  id="file"
            type="file" class="form-control @error('file') is-invalid @enderror border-secondary" name="file"
            placeholder="arquivo excel de transações" value="{{ old('file') }}" required autocomplete="file" autofocus>

       
    </div>
</div>




