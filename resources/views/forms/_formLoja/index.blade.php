<div class="col-md-3">
    <div class="form-group ">
        <label for="bi_dono">{{ __('BI do representante') }}</label>
        <input  id="bi_dono"  value="{{ isset($loja->bi_dono) ? $loja->bi_dono : '' }}"
            type="text" class="form-control @error('bi_dono') is-invalid @enderror border-secondary" name="bi_dono"
            placeholder="BI do representante" value="{{ old('bi_dono') }}" required autocomplete="bi_dono" autofocus>

       
    </div>
</div>
<div class="col-md-3">
    <div class="form-group ">
        <label for="nome_dono">{{ __('Nome do representante da Loja') }}</label>
        <input  id="nome_dono" value="{{ isset($loja->nome_dono) ? $loja->nome_dono : '' }}"
            type="text" class="form-control @error('nome_dono') is-invalid @enderror border-secondary" name="nome_dono"
            placeholder="representante da loja" value="{{ old('nome_dono') }}" required autocomplete="nome_dono" autofocus>

       
    </div>
</div>

<div class="col-md-3">
    <div class="form-group ">
        <label for="nome_loja">{{ __('Nome  da Loja') }}</label>
        <input  id="nome_loja" value="{{ isset($loja->nome_loja) ? $loja->nome_loja : '' }}"
            type="text" class="form-control @error('nome_loja') is-invalid @enderror border-secondary" name="nome_loja"
            placeholder="nome da loja" value="{{ old('nome_loja') }}" required autocomplete="nome_loja" autofocus>

       
    </div>
</div>

<div class="col-md-3">
    <div class="form-group ">
        <label for="saldo">{{ __('Saldo') }}</label>
        <input  id="saldo"  value="{{ isset($loja->saldo) ? $loja->saldo : '' }}"
            type="number" min="0" class="form-control @error('saldo') is-invalid @enderror border-secondary" name="saldo"
            placeholder="" value="{{ old('saldo') }}" required autocomplete="saldo" autofocus>

       
    </div>
</div>




